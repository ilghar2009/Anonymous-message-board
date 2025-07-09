<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Message extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable=[
        'id',
        'text',
        'reply_id',
    ];

    protected static function boot(){
        parent::boot();

        static::creating(function($model){
           $model->{$model->getKeyName()} = Str::uuid()->toString();
        });
    }
}
