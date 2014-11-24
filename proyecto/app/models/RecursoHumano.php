<?php

class RecursoHumano extends Eloquent
{
	protected $table = 'recurso_humano';
	protected $fillable = array('nombre_personal_requerido', 'apellido1_personal_requerido', 'apellido2_personal_requerido', 'especialidad', 'proyecto_id');
	protected $guarded  = array('id');
	public    $timestamps = false;

}