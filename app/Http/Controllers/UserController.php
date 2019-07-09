<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Auth;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    // public function __construct(){
    //   $this->middleware('auth',['except' => ['index','create','store'] ] );
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $user = User::all();
          return view('admin.index',['user'=> $user]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request['password'] = Hash::make($request['password']);
      User::create($request->all());

      // Mensagem de sucesso:
      // -- Flash
      // mensagem -> campo
      session()->flash('mensagem', 'Usuário inserido com sucesso!');

      //return redirect('/novoPaciente');
      return redirect()->route('geral.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.show',['user'=> $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.edit',['user'=> $user]);
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
      //opção 02
      $user = User::find($id);
      $user->fill($request->all());
      $user->password = Hash::make($user->password);

      // Para ambas as opções:
      $user->save();

      session()->flash('mensagem', 'Usuário atualizado com sucesso!');

      return redirect()->route('admin.show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // Validações ->
      // -- chave estrangeira

      // Excluir o usuário
      $user = User::find($id);
      $user->delete();
      session()->flash('mensagem', 'Usuário excluído com sucesso!');

      return redirect()->route('admin.index');
    }
}
