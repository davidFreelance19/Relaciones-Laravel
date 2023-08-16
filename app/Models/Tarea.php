<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;
    // protected $table =  es para hacer referencia al sistema de persistencia
    // protected $fillable =  sirve para hacer referencia de aquellos campos que pueden ser completados por el usuario 
    // protected $guarded = sirve para indicar los campos que vamos a proteger (es el contrario a fillable)
    // Nota si tu defines fillable entonces ya no es necesario definir guarded ya que es su complemento y caso viceverso también
    
    // protected $casts = es como un tipado en el caso de recibir un tipo de dato no deseado
    
}

/* 
    $tarea = new Note()
    $tarea->title = "hello world"
    $tarea->save()
*/
