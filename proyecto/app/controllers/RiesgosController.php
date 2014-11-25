<?php

class RiesgosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$proyectos = Proyecto::all();
		$riesgo = Riesgos::proyectosDisponibles();
        $this->layout->titulo = 'Listado de Riesgos';
        $this->layout->nest(
            'content',
            'riesgos.index',
            array(
            	'proyectos' => $proyectos,
                'riesgos' => $riesgo
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
		$this->layout->titulo = 'Crear Riesgo';
        $this->layout->nest(
            'content',
            'riesgos.create',
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
        $descripcion = Input::get("descripcion");
        $solucion = Input::get("solucion");
        $proyecto_id = Input::get("proyecto");/////////////////// del combo box

        $riesgo = new Riesgos();
        $riesgo->nombre = $nombre;
        $riesgo->descripcion = $descripcion;
        $riesgo->solucion = $solucion;        
        $riesgo->proyecto_id = $proyecto_id;
        $riesgo->save();
        return Redirect::to('riesgos');
		
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
		$riesgo = Riesgos::find($id);
		$proyectos = Proyecto::all();
        $this->layout->nest(
            'content',
            'riesgos.edit',
            array(
            	'proyectos' => $proyectos,
                'riesgo' => $riesgo
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
        $descripcion = Input::get("descripcion");
        $solucion = Input::get("solucion");
        $proyecto_id = Input::get("proyecto");/////////////////// del combo bo

        $riesgo = Riesgos::find($id);
        $riesgo->nombre = $nombre;
        $riesgo->descripcion = $descripcion;
        $riesgo->solucion = $solucion;        
        $riesgo->proyecto_id = $proyecto_id;
        $riesgo->save();
        return Redirect::to('riesgos');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$rh = Riesgos::find($id);
        $rh->delete();
        return Redirect::to('riesgos');
	}


}
