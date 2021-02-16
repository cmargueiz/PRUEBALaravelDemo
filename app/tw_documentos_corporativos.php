<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class tw_documentos_corporativos extends Model
{
    use HasApiTokens, Notifiable;
    protected $table = 'tw_documentos_corporativos';

    public $timestamps= false;
    
    protected $fillable = [
        'S_ArchivoUrl',
        'tw_corporativos_id',
        'tw_documentos_id'
    ];

    public function tw_corporativo(){
        return $this->belongsTo('App\tw_corporativos');
    }

    public function tw_documento(){
        return $this->belongsTo('App\tw_documentos');
    }
}
