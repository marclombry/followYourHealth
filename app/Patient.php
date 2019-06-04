<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;


class Patient extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'patient';

    protected $table = "patient";
    protected $fillable = [

        'nom', 'prenom','metier'

    ];
}
