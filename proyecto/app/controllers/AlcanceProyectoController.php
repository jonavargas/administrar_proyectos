<?php

class AlcanceProyectoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$proyectos = Proyecto::all();
		$alcance_proyecto = AlcanceProyecto::proyectosDisponibles();
        $this->layout->titulo = 'Listado de Alcances del Proyecto';
        $this->layout->nest(
            'content',
            'alcancesProyectos.index',
            array(
            	'proyectos' => $proyectos,
                'alcancesProyectos' => $alcance_proyecto
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
		$this->layout->titulo = 'Crear Alcances del Proyecto';
        $this->layout->nest(
            'content',
            'alcancesProyectos.create',
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
		$nombre = Input::get("nombre_responsable");
        $apellido1 = Input::get("apellido1");
        $apellido2 = Input::get("apellido2");
        $nombre_actividad = Input::get("nombre_actividad");
        $descripcion = Input::get("descripcion");
        $calidad = Input::get("calidad");
        $fecha_estimada = Input::get("fecha");       
        $proyecto_id = Input::get("proyecto");/////////////////// del combo box

        $alcance_proyecto = new AlcanceProyecto();
        $alcance_proyecto->nombre_responsable = $nombre;
        $alcance_proyecto->apellido1 = $apellido1;
        $alcance_proyecto->apellido2 = $apellido2;        
        $alcance_proyecto->nombre_actividad = $nombre_actividad;
        $alcance_proyecto->descripcion = $descripcion;
        $alcance_proyecto->calidad = $calidad;        
        $alcance_proyecto->fecha_estimada = $fecha_estimada;    
        $alcance_proyecto->proyecto_id = $proyecto_id;
        $alcance_proyecto->save();
        return Redirect::to('alcancesProyectos');
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
		$alcance_proyecto = AlcanceProyecto::find($id);
		$proyectos = Proyecto::all();
        $this->layout->nest(
            'content',
            'alcancesProyectos.edit',
            array(
            	'proyectos' => $proyectos,
                'alcance_proyecto' => $alcance_proyecto
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
        $nombre = Input::get("nombre_responsable");
        $apellido1 = Input::get("apellido1");
        $apellido2 = Input::get("apellido2");
        $nombre_actividad = Input::get("nombre_actividad");
        $descripcion = Input::get("descripcion");
        $calidad = Input::get("calidad");
        $fecha_estimada = Input::get("fecha");       
        $proyecto_id = Input::get("proyecto");/////////////////// del combo box

        $alcance_proyecto = AlcanceProyecto::find($id);
        $alcance_proyecto->nombre_responsable = $nombre;
        $alcance_proyecto->apellido1 = $apellido1;
        $alcance_proyecto->apellido2 = $apellido2;        
        $alcance_proyecto->nombre_actividad = $nombre_actividad;
        $alcance_proyecto->descripcion = $descripcion;
        $alcance_proyecto->calidad = $calidad;        
        $alcance_proyecto->fecha_estimada = $fecha_estimada;    
        $alcance_proyecto->proyecto_id = $proyecto_id;
        $alcance_proyecto->save();
        return Redirect::to('alcancesProyectos');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$alcance_proyecto = AlcanceProyecto::find($id);
        $alcance_proyecto->delete();
        return Redirect::to('alcancesProyectos');
	}

}
