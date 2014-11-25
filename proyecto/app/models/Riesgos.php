<?php

class Riesgos extends Eloquent
{
	protected $table = 'riesgo_proyecto';
	protected $fillable = array('nombre', 'descripcion', 'solucion','proyecto_id');
	protected $guarded  = array('id');
	public    $timestamps = false;


	public static function proyectosDisponibles()
	{
		$sql ='select rp.id, rp.nombre, rp.descripcion, rp.solucion, p.nombre_proyecto
			from riesgo_proyecto rp
		    inner join proyecto p on (rp.proyecto_id = p.id)';

		return DB::select($sql);
	}
}