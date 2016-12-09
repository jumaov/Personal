<?php

namespace personal\Http\Controllers;

use Illuminate\Http\Request;

use personal\Http\Requests;
use personal\Persona;
use Illuminate\Support\Facades\Redirect;
use personal\Http\Requests\PersonaFormRequest;
use DB:


class PersonaController extends Controller
{
    public function __construct() 
    {

    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$personas=Db::table('persona')->where('nombre','LIKE','%'.$query.'%')
    		->orderBy('idpersona','desc')
    		->paginate(7);
    		return view('personal.persona.index',["personas"=>$personas,"searchText"=>$query]);
    	}

    }
    public function create();
    {
    	return view("personal.persona.create");
    }
    public function store(PersonaFormRequest $request)
    {
    	$persona=new Persona;
    	$persona->tipo_persona=$request->get('tipo_persona');
    	$persona->nombre=$request->get('nombre');
    	$persona->tipo_documento=$request->get('tipo_documento');
    	$persona->num_documento=$request->get('num_documento');
    	$persona->direccion=$request->get('direccion');
    	$persona->telefono=$request->get('telefono');
    	$persona->email=$request->get('email');
    	$persona-save();
    	return Redirect::to('personal/persona');
    }
    public function show($id)
    {
    	return view("personal.persona.show",["persona"=>Persona::findOrFail($id)]);
    }
    public function edit($id)
    {
    	return view("personal.persona.edit",["persona"=>Persona::findOrFail($id)]);

    }
    public function update(PersonaFormRequest $request,$id)
    {
    	$persona=Persona::findOrFail($id);
    	$persona->tipo_persona=$request->get('tipo_persona');
    	$persona->nombre=$request->get('nombre');
    	$persona->tipo_documento=$request->get('tipo_documento');
    	$persona->num_documento=$request->get('num_documento');
    	$persona->direccion=$request->get('direccion');
    	$persona->telefono=$request->get('telefono');
    	$persona->email=$request->get('email');
    	$persona->update();
    	return Redirect::to('personal/persona');
    }
    public function destroy($id)
    {
    	$persona=DB::table('persona')->where('id','=',$id)->delete();
    	return Redirect::to('personal/persona');

    }

}
