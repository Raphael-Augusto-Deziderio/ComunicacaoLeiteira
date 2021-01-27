<?php

namespace App\Http\Controllers\Painel\Solicitacao;

use App\Models\Fiv;
use App\Models\Inovulacao;
use App\Models\Nascimento;
use App\User;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class solicitacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected $login, $request, $user, $fiv, $inovulacao, $nascimento;

    public function __construct(User $user, Request $request, Fiv $fiv, Inovulacao $inovulacao, Nascimento $nascimento)
    {
        $this->user = $user;
        $this->fiv = $fiv;
        $this->inovulacao = $inovulacao;
        $this->nascimento = $nascimento;
        $this->request = $request;
    }


    public function showSolicitacao()
    {
        $selectFiv = DB::select("select * from fivs");
        $selectInov = DB::select("select * from inovulacao");
        $selectNasc = DB::select("select * from nascimento");
        $tamanhoFiv = count($selectFiv);
        $tamanhoInov = count($selectInov);
        $tamanhoNasc = count($selectNasc);
        $userPermissao = Auth::user()->getPermissao();
//        dd($selectFiv);
        return view('painel.solicitacao.solicitacao', compact('selectFiv', 'selectInov', 'selectNasc', 'tamanhoFiv', 'tamanhoInov', 'tamanhoNasc', 'userPermissao'));
    }

    public function doSolicitacao()
    {
        //
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
