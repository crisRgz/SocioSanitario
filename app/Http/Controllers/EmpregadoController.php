<?php

namespace App\Http\Controllers;
use App\Empregado;
use Auth;
use Illuminate\Http\Request;

class EmpregadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empregados = Empregado::all();
        return view('empregado')->with('empregados',$empregados);
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
