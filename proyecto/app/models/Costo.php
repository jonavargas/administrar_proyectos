  <?php

class Costo extends Eloquent
{
	protected $table = 'costo';
	protected $fillable = array('costo_actividad', 'nombre_actividad' ,'alcance_proyecto_id');
	protected $guarded  = array('id');
	public    $timestamps = false;


	public static function GetAlcanceId()
	{
		$sql ='select co.id, co.costo_actividad, a.id as alcance_id, a.nombre_actividad as actividad
		    from costo co
		    inner join alcance_proyecto a on (co.alcance_proyecto_id = a.id)';

		return DB::select($sql);
	}
}
