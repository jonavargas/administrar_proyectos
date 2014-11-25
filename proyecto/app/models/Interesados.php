<?php

class Interesados extends Eloquent
{
	protected $table = 'interesados';
	protected $fillable = array('nombre', 'apellido1', 'apellido2', 'telefono','descripcion' ,'proyecto_id');
	protected $guarded  = array('id');
	public    $timestamps = false;


	public static function proyectosDisponibles()
	{
		$sql ='select i.id, i.nombre, i.apellido1, i.apellido2, i.telefono, i.descripcion, p.nombre_proyecto
			from interesados i
		    inner join proyecto p on (i.proyecto_id = p.id)';

		return DB::select($sql);
	}
}