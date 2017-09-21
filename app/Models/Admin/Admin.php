<?php

namespace App\Models\Admin;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{

    use Notifiable;

    protected $table = 'admins';

    protected $fillable = ['name', 'password'];

    protected $hidden = ['password', 'remember_token'];

}
