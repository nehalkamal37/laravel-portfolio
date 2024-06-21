<?php

namespace App\Models;

use App\Models\Cv;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory;

    protected $fillable=['name','icon'];
    
    public function cv(){
        return $this->belongsToMany(Cv::class);
       }
}
