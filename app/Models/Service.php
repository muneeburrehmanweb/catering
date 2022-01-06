<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ServiceImage;

class Service extends Model
{
    use HasFactory;
    public function ServiceImage(){
        return $this->hasOne(ServiceImage::class,'service_id','id');
    }
    public function User(){
        return $this->hasOne(User::class,'id','user_id');
    }

}
