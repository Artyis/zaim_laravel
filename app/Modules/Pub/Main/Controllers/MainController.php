<?php

namespace App\Modules\Pub\Main\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
  /**
  * @return \Illuminate\View\View
  */
  public function index() {
        return view('Pub::layouts.parts.main');
  }
}
