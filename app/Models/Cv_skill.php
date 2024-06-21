<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv_skill extends Model
{
    use HasFactory;
    protected $fillable=['skill_id[]','cv_id'];

}
