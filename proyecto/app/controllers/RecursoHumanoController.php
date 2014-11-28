<?php
class RecursoHumanoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$proyectos = Proyecto::all();
		$rh = RecursoHumano::proyectosDisponibles();
        $this->layout->titulo = 'Listado de Recurso Humano';
        $this->layout->nest(
            'content',
            'recursosHumanos.index',
            array(
            	'proyectos' => $proyectos,
                'recursosHumanos' => $rh
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
		$this->layout->titulo = 'Crear Recurso Humano';
        $this->layout->nest(
            'content',
            'recursosHumanos.create',
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
		$nom_personal = Input::get("nombre_personal_requerido");
        $ape1_personal = Input::get("apellido1_personal_requerido");
        $ape2_personal = Input::get("apellido2_personal_requerido");
        $especialidad = Input::get("especialidad");
        $proyecto_id = Input::get("proyecto");/////////////////// del combo box

        $rh = new RecursoHumano();
        $rh->nombre_personal_requerido = $nom_personal;
        $rh->apellido1_personal_requerido = $ape1_personal;
        $rh->apellido2_personal_requerido = $ape2_personal;        
        $rh->especialidad = $especialidad;
        $rh->proyecto_id = $proyecto_id;
        $rh->save();
        return Redirect::to('recursosHumanos');
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
		$rh = RecursoHumano::find($id);
		$proyectos = Proyecto::all();
        $this->layout->nest(
            'content',
            'recursosHumanos.edit',
            array(
            	'proyectos' => $proyectos,
                'rh' => $rh
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
		$nom_personal = Input::get("nombre_personal_requerido");
        $ape1_personal = Input::get("apellido1_personal_requerido");
        $ape2_personal = Input::get("apellido2_personal_requerido");
        $especialidad = Input::get("especialidad");
        $proyecto_id = Input::get("proyecto");/////////

        $rh = RecursoHumano::find($id);
        $rh->nombre_personal_requerido = $nom_personal;
        $rh->apellido1_personal_requerido = $ape1_personal;
        $rh->apellido2_personal_requerido = $ape2_personal;        
        $rh->especialidad = $especialidad;
        $rh->proyecto_id = $proyecto_id;
        $rh->save();
        return Redirect::to('recursosHumanos');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$rh = RecursoHumano::find($id);
        $rh->delete();
        return Redirect::to('recursosHumanos');
	}

}
