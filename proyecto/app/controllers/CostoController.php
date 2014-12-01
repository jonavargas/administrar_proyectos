<?php

class CostoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$costos = Costo::GetAlcanceId();
		$alcance = AlcanceProyecto::proyectosDisponibles();////////
        $this->layout->titulo = 'Listado de Costos';
        $this->layout->nest(
            'content',
            'costos.index',
            array(
                'costos' => $costos,
                'alcance' => $alcance
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
		$alcance = AlcanceProyecto::proyectosDisponibles();////////
		$costo = Costo::GetAlcanceId();///
		$this->layout->titulo = 'Crear costos';
        $this->layout->nest(
            'content',
            'costos.create',
            array(               
            'costos' => $costo,
            'alcance' => $alcance     	       
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
		$nombre_actividad = Input::get("nombre_actividad");  
        $costo_actividad = Input::get("costo_actividad");  

		$id = Input::get("id");

        $costos = new Costo();
        $costos->nombre_actividad = $nombre_actividad;
        $costos->costo_actividad = $costo_actividad;
        $costos->alcance_proyecto_id = $id;
  
        $costos->save();
        return Redirect::to('costos');
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
		$alcance = AlcanceProyecto::proyectosDisponibles();////////
		$costos = Costo::find($id);		
        $this->layout->nest(
            'content',
            'costos.edit',
            array(            	
                'costos' => $costos,
                'alcance' => $alcance
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
        $nombre_actividad = Input::get("nombre_actividad"); 
        $costo_actividad = Input::get("costo_actividad");    

        $costos = Costo::find($id);
        $costos->nombre_actividad = $nombre_actividad;
        $costos->costo_actividad = $costo_actividad;
  
        $costos->save();
        return Redirect::to('costos');        
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$costos = Costo::find($id);
        $costos->delete();
        return Redirect::to('costos');
	}
}

