<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index() {

        return view('index');
    }
}
