<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

      $name = 'Classe 12';
      $students = 25;
      $teachers = [
        'Paolo',
        'Lorenzo',
        'Matteo'
      ];

      return view('blog.index', compact( 'name', 'students', 'teachers'));
    }
}
