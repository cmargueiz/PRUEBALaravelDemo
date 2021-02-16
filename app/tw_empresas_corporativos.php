<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class tw_empresas_corporativos extends Model
{
    use HasApiTokens, Notifiable;
    use SoftDeletes;
    protected $table = 'tw_empresas_corporativos';
    public $timestamps=true;
    
    protected $fillable = [
        'S_RazonSocial',
        'S_RFC',
        'S_Pais',
        'S_Estado',
        'S_Municipio',
        'S_ColoniaLocalidad',
        'S_Domicilio',
        'S_CodigoPostal',
        'S_UsoCFDI',
        'S_UrlRFC',
        'S_UrlActaConstitutiva',
        'S_Activo',
        'S_Comentarios',
        'tw_corporativos_id'
    ];

    protected $hidden = [
        'created_at',
        'update_at',
        'deleted_at'
    ];
    public function tw_corporativo(){
        return $this->belongsTo('App\tw_corporativos');
    }
}
