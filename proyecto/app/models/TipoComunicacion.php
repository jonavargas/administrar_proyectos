<?php

class TipoComunicacion extends Eloquent
{
	protected $table = 'tipo_comunicacion';
	protected $fillable = array('tipo_comunicacion', 'detalle', 'proyecto_id');
	protected $guarded  = array('id');
	public    $timestamps = false;


	public static function proyectosDisponibles()
	{
		$sql ='select tc.id, tc.tipo_comunicacion, tc.detalle, p.nombre_proyecto
			   from tipo_comunicacion tc
			   inner join proyecto p on (tc.proyecto_id = p.id)';

		return DB::select($sql);
	}
}