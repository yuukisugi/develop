<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DevelopsController extends Controller
{
    //
    public function add()
  {
      return view('admin.develop.create');
  }

}
