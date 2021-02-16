<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;


class tw_corporativos extends Model
{
    use SoftDeletes;
    use HasApiTokens, Notifiable;
    
    protected $table = 'tw_corporativos';

    public $timestamps =  true;

    protected $fillable = [
        'S_NombreCorto',
        'S_NombreCompleto',
        'S_LogoURL',
        'S_DBName',
        'S_DBUsuario',
        'S_DBPassword',
        'S_SystemUrl',
        'S_Activo',
        'D_FechaIncorporacion',
        'tw_usuarios_id',
        'FK_Asignado_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    

    public function tw_usuario(){
        return $this->belongsTo('App\tw_usuarios');
    }

    public function tw_contratos_corporativo(){
        return $this->hasMany('App\tw_contratos_corporativos');
    }

    public function tw_contactos_corporativo(){
        return $this->hasMany('App\tw_contactos_corporativos');
    }


    public function tw_empresas_corporativo(){
        return $this->hasMany('App\tw_empresas_corporativos');
    }

    public function tw_documentos_corporativo()
    {
        return $this->belongsToMany(tw_documentos::class,'tw_documentos_corporativos','tw_corporativos_id','tw_documentos_id');
    }
}
