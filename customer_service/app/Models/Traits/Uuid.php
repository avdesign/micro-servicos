<?php
/**
 * Created by PhpStorm.
 * User: avdesign
 * Date: 03/11/19
 * Time: 00:31
 */

namespace App\Models\Traits;


trait Uuid
{
    public static function boot()
    {
        parent::boot();
        static::creating(function ($obj){
            $obj->id = \Ramsey\Uuid\Uuid::uuid4();
        });
    }

}