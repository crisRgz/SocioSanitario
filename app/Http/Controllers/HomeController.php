<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use View;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // cando se rexistra como user devolve a vista home, pasando por este controller
        // recollo o id de User activo
        $idUser = Auth::User()->id;
        // Comprobo se están rexistrados na táboa correspondente ao rol marcado.
        $consulta=NULL;

       
        if(Auth::User()->rol == 'Empregado'){
            $consulta = DB::table('empregados')
            ->select('empregados.id')
            ->where('empregados.idUser', '=', $idUser)
            ->get();
        }elseif (Auth::User()->rol == 'Familiar') {
            $consulta = DB::table('familiares')
            ->select('familiares.id')
            ->where('familiares.idUser', '=', $idUser)
            ->get();
        }elseif (Auth::User()->rol == 'Empresa') {
            $consulta = DB::table('empresas')
            ->select('empresas.id')
            ->where('empresas.idUser', '=', $idUser)
            ->get();
        }

        if(!isset($consulta[0]->id)){
            $id=0;
        }else{
            $id=$consulta[0]->id;
        }
        
        //return $id.' '.Auth::User()->rol;

        return view('home')->with('id', $id);
    }
}
