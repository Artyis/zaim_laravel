<?php

namespace App\Modules\Pub\Mfo\Controllers;

use App\Modules\Pub\Mfo\Models\Mfo;
use App\Modules\Pub\Zaimy\Models\Zaimy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $mfo=Mfo::get();
      $pages=Zaimy::inRandomOrder()->limit(7)->get(['name','url']); 
    
      return  $this->content= view('Pub::Mfo.index',compact('mfo','pages'));
    }
     /**
     * Create of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCard($code)
    {
      $mfo=Mfo::where('url', $code)->first();
      
      if($mfo){
      return  $this->content= view('Pub::Mfo.show', compact('mfo'));
      }
      return 'Тут должна быть 404 страница';
    }

    
}
