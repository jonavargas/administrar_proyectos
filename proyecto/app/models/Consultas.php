<?php

class Consultas extends Eloquent
{
	protected $table = 'proyecto';
	protected $fillable = array('nombre_proyecto','nombre_director_proyecto', 'apellido1_director_proyecto', 'apellido2_director_proyecto', 'nombre_patrocinador', 'monto_proyecto', 'presupuesto_proyecto','moneda', 'observaciones');
	protected $guarded  = array('id');
	public    $timestamps = false;


	public static function ConsultaGeneral($id)
	{
		$sql ='select p.id, p.nombre_proyecto, p.nombre_director_proyecto , p.apellido1_director_proyecto, p.apellido2_director_proyecto, p.nombre_patrocinador, p.monto_proyecto, p.moneda,
			rh.nombre_personal_requerido, rh.apellido1_personal_requerido, rh.apellido2_personal_requerido, rh.especialidad,
			i.nombre, i.apellido1, i.apellido2, i.telefono,
			ri.nombre as riesgo,
			tc.tipo_comunicacion,
			co.nombre_contacto, co.apellido1_contacto, co.apellido2_contacto,
			al.nombre_actividad,
			cr.fecha_inicio, cr.fecha_fin, cr.duracion,
			ad.nombre_adquisicion, ad.costo_adquisicion,
			cos.costo_actividad
		    from proyecto p, recurso_humano rh, interesados i, riesgo_proyecto ri, 
		    tipo_comunicacion tc, comunicaciones co, alcance_proyecto al, cronograma cr,
		    adquisiciones ad, costo cos
		    where p.id = ' . $id ."limit '1'";

		return DB::select($sql);
	}
}
