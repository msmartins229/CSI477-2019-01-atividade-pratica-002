<?php

namespace App\Http\Controllers;

use App\Procedure;
use App\User;
use App\Test;
use Illuminate\Http\Request;


class PaginasController extends Controller
{
  public function index(){
    return view('principal');
  }

  public function about(){
    return view('welcome');
  }

  public function Paciente(){
    return view('paciente');
  }

  public function Npaciente(){
    return view('nPaciente');
  }

}
