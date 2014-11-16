<?php
class ProyectoController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $proyecto = Proyecto::all();
        $this->layout->titulo = 'Listado de proyecto';
        $this->layout->nest(
            'content',
            'proyectos.index',
            array(
                'proyectos' => $proyecto
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
        $this->layout->titulo = 'Crear Avión';
        $this->layout->nest(
            'content',
            'proyectos.create',
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //$this->layout->titulo = 'Editar Avión';
        $proyecto = Proyecto::find($id);
        $this->layout->nest(
            'content',
            'proyectos.edit',
            array(
                'proyecto' => $proyecto
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
        $nom_dir_pro = Input::get('nombre_director_proyecto');
        $ape1_dir_pro = Input::get('apellido1_director_proyecto');
        $ape2_dir_pro = Input::get('apellido2_director_proyecto');
        $nom_patrocinador = Input::get('nombre_patrocinador');
        $monto = Input::get('monto_proyecto');
        $presupuesto = Input::get('presupuesto_proyecto');
        $moneda = Input::get('moneda');
        $observaciones = Input::get('observaciones');

        $proyecto = Proyecto::find($id);
        $proyecto->nombre_director_proyecto = $nom_dir_pro;
        $proyecto->apellido1_director_proyecto = $ape1_dir_pro;
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $proyecto = Proyecto::find($id);
        $proyecto->delete();
        return Redirect::to('proyectos');
    }

}