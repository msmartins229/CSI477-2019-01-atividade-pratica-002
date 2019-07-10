<?php

namespace App\Http\Controllers;

use App\Procedure;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Auth;

class ProcedureController extends Controller
{
    public function __construct(){
      $this->middleware('auth',['except' => ['index'] ] );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $procedure = Procedure::all();

      return view('geral.index',['procedures'=>$procedure]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('geral.create', ['user'=> $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Procedure::create($request->all());

        session()->flash('mensagem','Procedimeto cadastrado com sucesso!');

        return redirect()->route('geral.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $procedure = Procedure::find($id);
        return view('geral.show',['procedure'=>$procedure]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $procedure = Procedure::find($id);
      return view('geral.edit',['procedure'=>$procedure]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $procedure = Procedure::find($id);
        $procedure->fill($request->all());

        $procedure->save();

        session()->flash('mensagem', 'Procedimento atualizado com sucesso!');

        return redirect()->route('geral.show', $procedure->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $procedure = Procedure::find($id);
        $procedure->delete();
        session()->flash('mensagem', 'Procedimento excluído com sucesso!');

        return redirect()->route('geral.index');

    }
}
