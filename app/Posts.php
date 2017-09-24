<?php
/**
 * Created by PhpStorm.
 * User: tatan
 * Date: 21/09/2017
 * Time: 17:05
 */

namespace Cinema;


use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table='posts';
    protected $fillable = ['title','description','url'];
}