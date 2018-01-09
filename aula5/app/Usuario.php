<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Usuario extends Eloquent {

    protected $collection = 'usuario';
    protected $fillable   = ['nome', 'idade', 'perfil', 'id_perfil'];
    protected $connection = 'mongodb';
}
