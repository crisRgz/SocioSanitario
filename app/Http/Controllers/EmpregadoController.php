<?php

namespace App\Http\Controllers;
use App\Empregado;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use View;
use Redirect;

class EmpregadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()


    {
        $empregados = DB::table('empregados')
        ->join('empregado_empresa','empregado_empresa.idEmpo','=','empregados.id')
        ->select('empregados.id as idEmpo','empregados.nome as nomeEmpo','empregados.apelido1 as apelido1Empo','empregados.apelido2 as apelido2Empo','empregados.NIF as NIFEmpo','empregado_empresa.idEmpa as idEmpa','empregados.idUser as idUser')
        ->orderBy('idEmpo', 'asc')
        ->get();
    /* 
    $empregados = DB::table('empregados')
    ->join('empregado_empresa','empregado_empresa.idEmpo','=','empregados.id')
    ->select('empregados.id as idEmpo','empregados.nome as nomeEmpo','empregados.apelido1 as apelido1Empo','empregados.apelido2 as apelido2Empo','empregados.NIF as NIFEmpo','empregado_empresa.idEmpa as idEmpa','empregados.idUser as idUser')
    ->orderBy('idEmpo', 'asc')
    ->get();
    MYSQL
    select e.id, e.nome, e.idUser, ee.idEmpa
    from empregados as e
    inner join empregado_empresa as ee
    on ee.idEmpo=e.id 
    */
    return view('empregado')->with('empregados',$empregados);
    }

    /**
     * Definimos o comportamento por método post sobre a página rexistro de empregados
     * @ param Request  Obxecto que conten o enviado por post
     */
    public function create(Request $request)
    {
        //Creamos un obxecto que conten os campos da taboa que queremos almacenar
        $registro= new Empregado;

        //Realizamos a inserion ea taboa cos datos proporcionados polo obxecto Request
        $registro->NIF = $request['NIF'];
        $registro->nome= $request['name'];
        $registro->apelido1= $request['apelido1'];
        $registro->apelido2= $request['apelido2'];
        $registro->direccion= $request['direccion'];
        $registro->telefono= $request['telefono'];
        $registro->idUser= Auth::user()->id;

        //Gardamos
        $registro->save();

        // Mandamos á vista
        //return view('home')->with('id',$id=true);
        //recargamos a vista home
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
        $this->validate($request, [
            'NIF' => 'required|min:9',
            'nome'=> 'required|min:5',
            'apelido1'=> 'min:5',
            'apelido2'=> 'min:5',
            'direccion'=> 'min:10',
            'telefono'=> 'required|min:5|numeric',
            'idUser'=> Auth::user()->id,
            ]);

        Empregado::create($request->all());
        return redirect('/empregados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empregado = Empregado::find($id);
        if (!is_null($empregado))
            return view('empregado.mostrar', ['empregado' => $empregado->toArray()]);
        else
            return response('no encontrado', 404);
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
