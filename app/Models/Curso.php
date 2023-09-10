<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Curso extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'nombre','descripcion','categoria'
    // ];
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
