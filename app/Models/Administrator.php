<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;

    protected $fillable = ['Name', 'Last_name', 'Cedula', 'Email', 'Cell_phone', 'Country', 'Department', 'Municipality', 'Neighborhood', 'Address']; //Campos que se van a asignacion masiva:
}
