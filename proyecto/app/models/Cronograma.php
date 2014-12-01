<?php

class Cronograma extends Eloquent
{
	protected $table = 'cronograma';
	protected $fillable = array('fecha_inicio', 'fecha_fin',  'duracion',
								 'alcance_proyecto_id');
	protected $guarded  = array('id');
	public    $timestamps = false;


	public static function proyectosDisponibles()
	{
		$sql ='select cro.id, cro.fecha_inicio, cro.fecha_fin, cro.duracion, alc.nombre_actividad
			from cronograma cro
		    inner join alcance_proyecto alc on (cro.alcance_proyecto_id = alc.id)';

		return DB::select($sql);
	}
}
