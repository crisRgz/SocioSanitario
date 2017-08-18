<?php

namespace App\Http\Controllers;
use App\Empresa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use View;
use Redirect;


class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //Creamos un obxecto que conten os campos da taboa que queremos almacenar
        $registro= new Empresa;

        //Realizamos a inserion ea taboa cos datos proporcionados polo obxecto Request
        $registro->CIF = $request['CIF'];
        $registro->nome= $request['name'];
        $registro->nomeContacto= $request['nomeContacto'];
        $registro->direccion= $request['direccion'];
        $registro->telefono= $request['telefono'];
        $registro->lat= $request['lat'];
        $registro->long= $request['long'];
        $registro->idUser= Auth::user()->id;

        //Gardamos
        $registro->save();

        // Rediriximos a vista home -> volve ir por get a homeController
        //return view('home')->with('id',$id=true);
        return redirect('/home');
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
