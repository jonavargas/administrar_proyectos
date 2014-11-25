<?php

class TipoComunicacionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$proyectos = Proyecto::all();
		$tc = TipoComunicacion::proyectosDisponibles();
        $this->layout->titulo = 'Listado de tipos comunicacion';
        $this->layout->nest(
            'content',
            'tipoComunicaciones.index',
            array(
            	'proyectos' => $proyectos,
                'tipoComunicaciones' => $tc
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
		$this->layout->titulo = 'Crear tipo de comunicacion';
        $this->layout->nest(
            'content',
            'tipoComunicaciones.create',
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
		$tipo_comunicacion = Input::get("tipo_comunicacion");
        $detalle = Input::get("detalle");
        $proyecto_id = Input::get("proyecto");/////////////////// del combo box

        $tc = new TipoComunicacion();
        $tc->tipo_comunicacion = $tipo_comunicacion;
        $tc->detalle = $detalle;
        $tc->proyecto_id = $proyecto_id;
        $tc->save();
        return Redirect::to('tipoComunicaciones');
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
		$tc = TipoComunicacion::find($id);
		$proyectos = Proyecto::all();
        $this->layout->nest(
            'content',
            'tipoComunicaciones.edit',
            array(
            	'proyectos' => $proyectos,
                'tipo_comunicacion' => $tc
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
		$tipo_comunicacion = Input::get("tipo_comunicacion");
        $detalle = Input::get("detalle");
        $proyecto_id = Input::get("proyecto");/////////////////// del combo box

        $tc = TipoComunicacion::find($id);
        $tc->tipo_comunicacion = $tipo_comunicacion;
        $tc->detalle = $detalle;
        $tc->proyecto_id = $proyecto_id;
        $tc->save();
        return Redirect::to('tipoComunicaciones');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tc = TipoComunicacion::find($id);
        $tc->delete();
        return Redirect::to('tipoComunicaciones');
	}


}
