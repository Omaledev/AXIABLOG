<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function superAdmin() {
        return view('superAdmin');
    }
}
