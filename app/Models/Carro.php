<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model 

/*
MODEL: Onde fica os vinculos com as tables do banco do .env 
como criar model:
php artisan make:model NomeModel -m
*/
{
    use HasFactory;
    protected $table= "carros";
}