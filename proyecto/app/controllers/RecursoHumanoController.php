<?php
class RecursoHumanoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$rh = RecursoHumano::all();
        $this->layout->titulo = 'Listado de Recurso Humano';
        $this->layout->nest(
            'content',
            'recursosHumanos.index',
            array(
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
		$this->layout->titulo = 'Crear Recurso Humano';
        $this->layout->nest(
            'content',
            'recursosHumanos.create',
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
		$nom_dir_pro = Input::get("nombre_personal_requerido");
        $ape2_dir_pro = Input::get("apellido1_personal_requerido");
        $ape2_dir_pro = Input::get("apellido2_personal_requerido");
        $especialidad = Input::get("especialidad");
        $proyecto_id = Input::get("proyecto_id");

        $rh = new RecursoHumano();
        $rh->nombre_personal_requerido = $nom_dir_pro;
        $rh->apellido1_personal_requerido = $ape2_dir_pro;
        $rh->apellido2_personal_requerido = $ape2_dir_pro;        
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
        $this->layout->nest(
            'content',
            'recursosHumanos.edit',
            array(
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
		$nom_dir_pro = Input::get("nombre_personal_requerido");
        $ape2_dir_pro = Input::get("apellido1_personal_requerido");
        $ape2_dir_pro = Input::get("apellido2_personal_requerido");
        $especialidad = Input::get("especialidad");
        $proyecto_id = Input::get("proyecto_id");

        $proyecto = RecursoHumano::find($id);
        $rh->nombre_personal_requerido = $nom_dir_pro;
        $rh->apellido1_personal_requerido = $ape2_dir_pro;
        $rh->apellido2_personal_requerido = $ape2_dir_pro;        
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