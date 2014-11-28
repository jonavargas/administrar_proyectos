<?php

class Comunicaciones extends Eloquent
{
	protected $table = 'comunicaciones';
	protected $fillable = array('nombre_contacto', 'apellido1_contacto', 'apellido2_contacto', 'metodo_comunicacion', 'tipo_comunicacion_id');
	protected $guarded  = array('id');
	public    $timestamps = false;


	public static function Tipo_comunicacion_Disponibles()
	{
		$sql ='select c.id, c.nombre_contacto, c.apellido1_contacto,  c.apellido2_contacto, c.metodo_comunicacion, tc.tipo_comunicacion
		    from comunicaciones c
		    inner join tipo_comunicacion tc on (c.tipo_comunicacion_id = tc.id)';

		return DB::select($sql);
	}
}
