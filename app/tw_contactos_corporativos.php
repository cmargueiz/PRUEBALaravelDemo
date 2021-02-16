<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class tw_contactos_corporativos extends Model
{
    use HasApiTokens, Notifiable;
    protected $table = 'tw_contactos_corporativos';
    public $timestamps =  false;

    protected $fillable = [
        'S_Nombre',
        'S_Puesto',
        'S_Comentarios',
        'N_TelefonoFijo',
        'N_TelefonoMovil',
        'S_Email',
        'tw_corporativos_id',
    ];


    public function tw_corporativo(){
        return $this->belongsTo('App\tw_corporativos');
    }
}
