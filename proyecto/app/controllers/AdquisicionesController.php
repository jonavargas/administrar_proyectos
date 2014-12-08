<?php

class AdquisicionesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$adquisicion = Adquisiciones::GetAdquisiciones();
        $this->layout->titulo = 'Listado de Adquisiciones';
        $this->layout->nest(
            'content',
            'adquisiciones.index',
            array(
                'adquisiciones' => $adquisicion
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
		//$adquisicion = Adquisiciones::GetAdquisiciones();
		$alcance = AlcanceProyecto::proyectosDisponibles();////////
		$this->layout->titulo = 'Crear Adquisiciones';
        $this->layout->nest(
            'content',
            'adquisiciones.create',
            array(       
            //'adquisicion' => $adquisicion
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
		$nombre_adquisicion = Input::get("nombre_adquisicion");
        $costo_adquisicion = Input::get("costo_adquisicion");		
		$alcance_proyecto_id = Input::get("alcance");

        $adquisicion = new Adquisiciones();
        $adquisicion->nombre_adquisicion = $nombre_adquisicion;        
        $adquisicion->costo_adquisicion = $costo_adquisicion;        
        $adquisicion->alcance_proyecto_id = $alcance_proyecto_id;
  
        $adquisicion->save();
        return Redirect::to('adquisiciones');
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
		$adquisicion = Adquisiciones::find($id);	
		$alcance =AlcanceProyecto::all();	
        $this->layout->nest(
            'content',
            'adquisiciones.edit',
            array(            	
                'adquisiciones' => $adquisicion,
                'alcances' =>$alcance
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
        $nombre_adquisicion = Input::get("nombre_adquisicion");
        $costo_adquisicion = Input::get("costo_adquisicion");
        $alcance_proyecto_id = Input::get("alcance");

        $adquisicion = Adquisiciones::find($id);
        $adquisicion->nombre_adquisicion = $nombre_adquisicion;        
        $adquisicion->costo_adquisicion = $costo_adquisicion;
        $adquisicion->alcance_proyecto_id = $alcance_proyecto_id;
  
        $adquisicion->save();
        return Redirect::to('adquisiciones');        
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$adquisicion = Adquisiciones::find($id);
        $adquisicion->delete();
        return Redirect::to('adquisiciones');
	}
}
