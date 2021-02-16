<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class tw_usuarios extends Authenticatable
{
    use SoftDeletes;
    use HasApiTokens, Notifiable;
    protected $table = 'tw_usuarios';
    public $timestamps =  true;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'S_Nombre',
        'S_Apellidos',
        'S_FotoPerfilUrl',
        'S_Activo',
        'password',
        'verification_token',
        'verified',
        'tw_rol_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_t',
        'deleted_at'
    ];

    public function tw_corporativos(){
        return $this->hasMany('App\tw_corporativos');
    }
    


}
