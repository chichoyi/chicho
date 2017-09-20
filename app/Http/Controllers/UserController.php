<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function edit(){
        return view('edit_personal');
    }

    public function personal(){
        return view('personal');
    }

}
