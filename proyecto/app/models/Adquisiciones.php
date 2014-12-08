  <?php

class Adquisiciones extends Eloquent
{
	protected $table = 'adquisiciones';
	protected $fillable = array('nombre_adquisicion', 'costo_adquisicion', 'alcance_proyecto_id');
	protected $guarded  = array('id');
	public    $timestamps = false;


	public static function GetAdquisiciones()
	{
		$sql ='select ad.id, ad.nombre_adquisicion, ad.costo_adquisicion, a.id as alcance_id, a.nombre_actividad
		    from adquisiciones ad
		    inner join alcance_proyecto a on (ad.alcance_proyecto_id = a.id)';

		return DB::select($sql);
	}
}
