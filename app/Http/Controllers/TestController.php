<?php

namespace App\Http\Controllers;

use App\Test;
use App\Procedure;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Auth;

class TestController extends Controller 
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
        $tests = Test::all();
        return view('exames.index', ['tests'=>$tests]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $test = Test::all();
      $user = User::all();
      $procedure = Procedure::all();
      return view('exames.create',
          [ 'test' => $test , 'user'=>$user, 'procedure'=>$procedure]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Test::create($request->all());


      // Mensagem de sucesso:
      // -- Flash
      // mensagem -> campo
      session()->flash('mensagem', 'Exame inserido com sucesso!');

      //return redirect('/cidades');
      return redirect()->route('exames.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $test = Test::find($id);
      $user = User::all();
      $procedure = Procedure::all();
      return view('exames.show', [ 'test' => $test , 'user'=>$user, 'procedure'=>$procedure] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $test = Test::find($id);
      $user = User::all();
      $procedure = Procedure::all();
      return view('exames.edit', [ 'test' => $test , 'user'=>$user, 'procedure'=>$procedure] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Test::find($id);
        $test-> delete();

        session()->flash('mensagem', 'Exame excluído com sucesso! ');

        return redirect()->route('exames.index');
    }
}
