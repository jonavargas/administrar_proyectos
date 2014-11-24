<?php

class RecursoHumanoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$recursoHumano = RecursoHumano::all();
        $this->layout->titulo = 'Listado de Recurso Humano';
        $this->layout->nest(
            'content',
            'recursoHumanos.index',
            array(
                'recursoHumanos' => $recursoHumano
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
		$this->layout->titulo = 'Crear Recurso Humano';
        $this->layout->nest(
            'content',
            'recursoHumanos.create',
            array()
        );
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$nom_dir_pro = Input::get("nombre_director_proyecto");
        $ape2_dir_pro = Input::get("apellido1_director_proyecto");
        $ape2_dir_pro = Input::get("apellido2_director_proyecto");
        $nom_patrocinador = Input::get("nombre_patrocinador");
        $monto = Input::get("monto_proyecto");
        $presupuesto = Input::get("presupuesto_proyecto");
        $moneda = Input::get("moneda");
        $observaciones = Input::get("observaciones");

        $proyecto = new Proyecto();
        $proyecto->nombre_director_proyecto = $nom_dir_pro;
        $proyecto->apellido1_director_proyecto = $ape2_dir_pro;
        $proyecto->apellido2_director_proyecto = $ape2_dir_pro;
        $proyecto->nombre_patrocinador = $nom_patrocinador;
        $proyecto->monto_proyecto = $monto;
        $proyecto->presupuesto_proyecto = $presupuesto;
        $proyecto->moneda = $moneda;
        $proyecto->observaciones = $observaciones;
        $proyecto->save();
        return Redirect::to('proyectos');
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
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
