<?php

class AlcanceProyecto extends Eloquent
{
	protected $table = 'alcance_proyecto';
	protected $fillable = array('nombre_responsable', 'apellido1', 'apellido2', 
		'nombre_actividad', 'descripcion','calidad', 'fecha_estimada', 'proyecto_id');
	protected $guarded  = array('id');
	public    $timestamps = false;


	public static function proyectosDisponibles()
	{
		$sql ='select alc.id, alc.nombre_responsable, alc.apellido1,alc.apellido2, 
			alc.nombre_actividad, alc.descripcion, alc.calidad, alc.fecha_estimada,
			p.nombre_proyecto
			from alcance_proyecto alc
		    inner join proyecto p on (alc.proyecto_id = p.id)';

		return DB::select($sql);
	}
}
