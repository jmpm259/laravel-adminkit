<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Usertype extends Model
{
    use HasFactory;
    protected $table = 'usertypes';
    protected $fillable = ['type', 'uuid'];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate();
        });
    }
    
    public function getRouteKeyName()
    {
        return 'uuid';
    }
    
    public function Users()
    {
        return $this->hasMany(User::class);
    }

}