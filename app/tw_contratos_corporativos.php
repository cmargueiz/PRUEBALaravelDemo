<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class tw_contratos_corporativos extends Model
{
    use HasApiTokens, Notifiable;
    protected $table = 'tw_contratos_corporativos';
    public $timestamps = false;

    protected $fillable = [
        'D_FechaInicio',
        'D_FechaFin',
        'S_URLContrato',
        'tw_corporativos_id'
    ];

    public function tw_corporativo(){
        return $this->belongsTo('App\tw_corporativos');
    }
}
