<?php

namespace App\Models;

use App\Models\User;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cv extends Model
{
    use HasFactory;
    protected $fillable=['id','sumary','user_id','projects','experience','skills[]','edu','edu_years'];
    //protected $casts=['skills' => 'array'];
public function skills(){
 return $this->belongsToMany(Skill::class);
}
public function user(){
    return $this->belongsTo(User::class);
   }
}
