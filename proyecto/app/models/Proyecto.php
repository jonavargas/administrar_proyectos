<?php

class Proyecto extends Eloquent
{
	protected $table = 'proyecto';
	protected $fillable = array('nombre_director_proyecto', 'apellido1_director_proyecto', 'apellido2_director_proyecto', 'nombre_patrocinador', 'monto_proyecto', 'presupuesto_proyecto','moneda', 'observaciones');
	protected $guarded  = array('id');
	public    $timestamps = false;

}