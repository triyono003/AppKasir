<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
   public function sembako(){
    return view('categories.sembako',['page' => 'Daftar sembako']);
  }
}
