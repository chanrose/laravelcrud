<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index($name) {
        return "This is the Users Profile Page " . $name;
    }
}
