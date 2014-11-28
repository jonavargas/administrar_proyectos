<?php

class ComunicacionesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tc = TipoComunicacion::all();
		$comunicacion = Comunicaciones::Tipo_comunicacion_Disponibles();
        $this->layout->titulo = 'Listado de Comunicaciones';
        $this->layout->nest(
            'content',
            'comunicaciones.index',
            array(
            	'tipoComunicaciones' => $tc,
                'comunicaciones' => $comunicacion
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
		$tc = TipoComunicacion::all();//tc = tipo comunicaciones
		$this->layout->titulo = 'Crear Comunicaciones';
        $this->layout->nest(
            'content',
            'comunicaciones.create',
            array(
            	'tipoComunicaciones' => $tc                
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
		$nombre_contacto = Input::get("nombre_contacto");
        $apellido1_contacto = Input::get("apellido1_contacto");
        $apellido2_contacto = Input::get("apellido2_contacto");
        $metodo_comunicacion = Input::get("metodo_comunicacion");
        $tipo_comunicacion_id = Input::get("tipoComunicacion");/////////////////// del combo box

        $comunicacion = new Comunicaciones();
        $comunicacion->nombre_contacto = $nombre_contacto;
        $comunicacion->apellido1_contacto = $apellido1_contacto;
        $comunicacion->apellido2_contacto = $apellido2_contacto;        
        $comunicacion->metodo_comunicacion = $metodo_comunicacion;
        $comunicacion->tipo_comunicacion_id = $tipo_comunicacion_id;
        $comunicacion->save();
        return Redirect::to('comunicaciones');
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
		$comunicaciones = Comunicaciones::find($id);
		$tc = TipoComunicacion::all();
        $this->layout->nest(
            'content',
            'comunicaciones.edit',
            array(
            	'tc' => $tc,
                'comunicaciones' => $comunicaciones
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
		$nombre_contacto = Input::get("nombre_contacto");
        $apellido1_contacto = Input::get("apellido1_contacto");
        $apellido2_contacto = Input::get("apellido2_contacto");
        $metodo_comunicacion = Input::get("metodo_comunicacion");
        $tipo_comunicacion_id = Input::get("tipoComunicacion");/////////////////// del combo box

        $tc = Comunicaciones::find($id);
        $tc->nombre_contacto = $nombre_contacto;
        $tc->apellido1_contacto = $apellido1_contacto;
        $tc->apellido2_contacto = $apellido2_contacto;        
        $tc->metodo_comunicacion = $metodo_comunicacion;
        $tc->tipo_comunicacion_id = $tipo_comunicacion_id;
        $tc->save();
        return Redirect::to('comunicaciones');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$comunicacion = Comunicaciones::find($id);
        $comunicacion->delete();
        return Redirect::to('comunicaciones');
	}


}
