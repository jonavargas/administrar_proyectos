<?php

class RecursoHumano extends Eloquent
{
	protected $table = 'recurso_humano';
	protected $fillable = array('nombre_personal_requerido', 'apellido1_personal_requerido', 'apellido2_personal_requerido', 'especialidad', 'proyecto_id');
	protected $guarded  = array('id');
	public    $timestamps = false;


	public static function proyectosDisponibles()
	{
		$sql ='select rh.id, rh.nombre_personal_requerido, rh.apellido1_personal_requerido,
		rh.apellido2_personal_requerido, rh.especialidad, p.nombre_proyecto
		from recurso_humano rh
		inner join proyecto p on (rh.proyecto_id = p.id)';

		return DB::select($sql);
	}
}