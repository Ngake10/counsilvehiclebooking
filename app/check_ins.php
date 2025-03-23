<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\check_ins as Authenticatable;

class check_ins extends Model 
{
	use Notifiable;
    protected $fillable = ['student_email', 'temperature'];
}



