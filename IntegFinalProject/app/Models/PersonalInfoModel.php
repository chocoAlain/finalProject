<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class PersonalInfoModel extends  Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $timestamps = false;

    protected $hashDriver = 'argon2';
    protected $table = "personalInfo";

    protected $fillable = ["id", "FirstName", "MiddleName", "LastName","Email","Password","ContactNumber","Sex","BirthDate"];
}
