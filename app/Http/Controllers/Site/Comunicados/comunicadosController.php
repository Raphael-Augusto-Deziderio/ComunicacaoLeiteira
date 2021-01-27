<?php

namespace App\Http\Controllers\Site\Comunicados;

use Illuminate\Http\Request;
use App\User;
use App\Models\Fiv;
use App\Models\Inovulacao;
use App\Models\Nascimento;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;
use Hash;

class comunicadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $login, $request, $user, $fiv, $inovulacao, $nascimento;

    public function __construct(User $user, Request $request, Fiv $fiv, Inovulacao $inovulacao, Nascimento $nascimento){
        $this->user = $user;
        $this->fiv = $fiv;
        $this->inovulacao = $inovulacao;
        $this->nascimento = $nascimento;
        $this->request = $request;
    }
    public function showFiv()
    {
        $user = DB::select("select nome, id from users");
        $tamanho = count($user);
        $userPermissao = Auth::user()->getPermissao();
        return view('site.comunicados.fiv-site', compact('user', 'tamanho', 'userPermissao'));
    }

    public function doFiv()
    {


        $dadosForm = $this->request->all();
        $assinatura = $dadosForm['assinatura'];
        $userNome = Auth::user()->getNome();
        $userId = Auth::user()->getId();
        $criadorId = $dadosForm['id_criador'];

        $dadosForm['nome'] = $userNome;

        //Valida os dados

        $validator = Validator::make($dadosForm, $this->fiv->rules);
        if($validator->fails()){
            return redirect('/comunicado-fiv')
                ->withErrors($validator)
                ->withInput();
        }

        //Faz o insert
        $insert = $this->fiv->create($dadosForm);


        $update = DB::table('fivs')
            ->where('id_user', '0')
            ->update(['id_user' => $userId, 'nome' => $userNome, 'id_criador' => $criadorId, 'assinatura' => $assinatura]);


        //Verifica se deu tudo certo
        if ($insert && $update){
            return redirect("/comunicado-inovulacao");
        } else {
            dd("falhou");
            return redirect('/comunicado-fiv')
                ->withErrors(['errors' => 'Falha ao cadastrar'])
                ->withInput();
        }


    }

    public function showInovulacao()
    {
        $user = DB::select("select nome, id from users");
        $userId = Auth::user()->getId();
        $fiv = DB::select("select * from fivs where id_user =?",[$userId]);
//        dd($fiv);
        $tamanhoFiv = count($fiv);
        $tamanhoUser = count($user);
        $userPermissao = Auth::user()->getPermissao();
        return view('site.comunicados.inovulacao-site', compact('fiv', 'tamanhoFiv', 'userPermissao', 'user', 'tamanhoUser'));
    }

    public function doInovulacao()
    {
        $dadosForm = $this->request->all();
//        dd($dadosForm);
        $userNome = Auth::user()->getNome();
        $userId = Auth::user()->getId();
        $inovulacao = $dadosForm['inovulacao'];
        $dadosForm['nome'] = $userNome;

        //Valida os dados

        $validator = Validator::make($dadosForm, $this->inovulacao->rules);
        if($validator->fails()){
            dd("validacao");
            return redirect('/comunicado-inovulacao')
                ->withErrors($validator)
                ->withInput();
        }

        //Faz o insert
        $insert = $this->inovulacao->create($dadosForm);


        $update = DB::table('inovulacao')
            ->where('id_user', '0')
            ->update(['id_user' => $userId, 'nome' => $userNome, 'inovulacao' => $inovulacao]);


        //Verifica se deu tudo certo
        if ($insert && $update){
            return redirect("/comunicado-nascimento");
        } else {
            dd("falhou");
            return redirect('/comunicado-inovulacao')
                ->withErrors(['errors' => 'Falha ao cadastrar'])
                ->withInput();
        }


    }

    public function showNascimento()
    {
        $user = DB::select("select nome, id from users");
        $userId = Auth::user()->getId();
        $fiv = DB::select("select * from fivs where id_user =?",[$userId]);
        $tamanhoFiv = count($fiv);
        $tamanhoUser = count($user);
        $userPermissao = Auth::user()->getPermissao();
        return view('site.comunicados.nascimento-site', compact('fiv', 'tamanhoFiv', 'userPermissao', 'user', 'tamanhoUser'));
    }

    public function doNascimento()
    {
        $dadosForm = $this->request->all();
//        dd($dadosForm);
        $userNome = Auth::user()->getNome();
        $userId = Auth::user()->getId();
        $dadosForm['nome'] = $userNome;

        //Valida os dados

        $validator = Validator::make($dadosForm, $this->nascimento->rules);
        if($validator->fails()){
            dd("validacao");
            return redirect('/comunicado-nascimento')
                ->withErrors($validator)
                ->withInput();
        }

        //Faz o insert
        $insert = $this->nascimento->create($dadosForm);


        $update = DB::table('inovulacao')
            ->where('id_user', '0')
            ->update(['id_user' => $userId]);


        //Verifica se deu tudo certo
        if ($insert){
            return redirect("/comunicado-nascimento");
        } else {
            dd("falhou");
            return redirect('/comunicado-nascimento')
                ->withErrors(['errors' => 'Falha ao cadastrar'])
                ->withInput();
        }


    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
