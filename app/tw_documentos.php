<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class tw_documentos extends Model
{
    //use HasApiTokens, Notifiable;
    protected $table = 'tw_documentos';
    public $timestamps = false;

    protected $fillable = [
        'S_Nombre',
        'N_Obligatorio',
        'S_Descripcion'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];    

    public function tw_documentos_corporativo(){
        return $this->hasMany('App\tw_documentos_corporativos');
    }

    public function tw_documentos_to_corporativo()
    {
        return $this->belongsToMany(tw_corporativos::class,'tw_documentos_corporativos','tw_documentos_id','tw_corporativos_id');
    }
}
