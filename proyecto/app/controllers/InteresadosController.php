<?php

class InteresadosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$proyectos = Proyecto::all();
		$interesado = Interesados::proyectosDisponibles();
        $this->layout->titulo = 'Listado de Interesados';
        $this->layout->nest(
            'content',
            'interesados.index',
            array(
            	'proyectos' => $proyectos,
                'interesados' => $interesado
            )
        );
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$proyectos = Proyecto::all();
		$this->layout->titulo = 'Crear Interesado';
        $this->layout->nest(
            'content',
            'interesados.create',
            array(
            	'proyectos' => $proyectos                
            )
        );
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$nombre = Input::get("nombre");
        $apellido1 = Input::get("apellido1");
        $apellido2 = Input::get("apellido2");
        $telefono = Input::get("telefono");
        $descripcion = Input::get("descripcion");
        $proyecto_id = Input::get("proyecto");/////////////////// del combo box

        $interesado = new Interesados();
        $interesado->nombre = $nombre;
        $interesado->apellido1 = $apellido1;
        $interesado->apellido2 = $apellido2;        
        $interesado->telefono = $telefono;
        $interesado->descripcion = $descripcion;
        $interesado->proyecto_id = $proyecto_id;
        $interesado->save();
        return Redirect::to('interesados');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$interesado = Interesados::find($id);
		$proyectos = Proyecto::all();
        $this->layout->nest(
            'content',
            'interesados.edit',
            array(
            	'proyectos' => $proyectos,
                'interesado' => $interesado
            )
        );
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$nombre = Input::get("nombre");
        $apellido1 = Input::get("apellido1");
        $apellido2 = Input::get("apellido2");
        $telefono = Input::get("telefono");
        $descripcion = Input::get("descripcion");
        $proyecto_id = Input::get("proyecto");/////////

        $interesado = Interesados::find($id);
        $interesado->nombre = $nombre;
        $interesado->apellido1 = $apellido1;
        $interesado->apellido2 = $apellido2;        
        $interesado->telefono = $telefono;
        $interesado->descripcion = $descripcion;
        $interesado->proyecto_id = $proyecto_id;
        $interesado->save();
        return Redirect::to('interesados');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$rh = Interesados::find($id);
        $rh->delete();
        return Redirect::to('interesados');
	}

}
