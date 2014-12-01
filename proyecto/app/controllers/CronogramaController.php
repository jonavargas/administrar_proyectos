<?php

class CronogramaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cronograma = Cronograma::proyectosDisponibles();
        $this->layout->titulo = 'Listado de Cronogramas';
        $this->layout->nest(
            'content',
            'cronogramas.index',
            array(
                'cronogramas' => $cronograma
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
		$alcance = AlcanceProyecto::all();
		$this->layout->titulo = 'Crear Conograma';
        $this->layout->nest(
            'content',
            'cronogramas.create',
            array(
            	'alcances' => $alcance                
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
		$fecha_inicio = Input::get("fecha_inicio");
        $fecha_fin = Input::get("fecha_fin");
        $duracion = Input::get("duracion");
              
        $alcance_proyecto_id = Input::get("alcance");/////////////////// del combo box

        $cronograma = new Cronograma();
        $cronograma->fecha_inicio = $fecha_inicio;
        $cronograma->fecha_fin = $fecha_fin;
        $cronograma->duracion = $duracion;        
           
        $cronograma->alcance_proyecto_id = $alcance_proyecto_id;
        $cronograma->save();
        return Redirect::to('cronogramas');
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

		$cronograma = Cronograma::find($id);
		$alcance =AlcanceProyecto::all();
        $this->layout->nest(
            'content',
            'cronogramas.edit',
            array(
                'cronograma' => $cronograma,
                'alcance' =>$alcance
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
		$fecha_inicio = Input::get("fecha_inicio");
        $fecha_fin = Input::get("fecha_fin");
        $duracion = Input::get("duracion");
              
        $alcance_proyecto_id = Input::get("alcance");/////////////////// del combo box

        $cronograma = Cronograma::find($id);
        $cronograma->fecha_inicio = $fecha_inicio;
        $cronograma->fecha_fin = $fecha_fin;
        $cronograma->duracion = $duracion;        
           
        $cronograma->alcance_proyecto_id = $alcance_proyecto_id;
		$cronograma->save();

        return Redirect::to('cronogramas');
	}




	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cronograma = Cronograma::find($id);
        $cronograma->delete();
        return Redirect::to('cronogramas');
	}


}
