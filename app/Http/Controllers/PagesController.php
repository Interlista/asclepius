<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function home()
{
    return 'Welcome home!';
}

public function storeData(request $request)
{
  return $request->all();
}
}
