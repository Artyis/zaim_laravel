<?php

namespace App\Modules\Pub\Zaimy\Controllers;

use App\Modules\Pub\Zaimy\Models\Zaimy;
use App\Modules\Pub\Mfo\Models\Mfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ZaimyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('mfos.index');
    }

    /**
     * Create of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function read($args)
    {
        $page=Zaimy::where('url', $args)->first();
        $pages=Zaimy::inRandomOrder()->limit(7)->get(); 
        if($page){
          return  $this->content= view('Pub::Zaimy.index', compact('page', 'pages'));
        }
        return '404';
    }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */

    public function post(Request $parm)
    {
      $param =$parm->all()['sum'];
      $param2 =$parm->all()['term'];
      $calcul= Mfo::where([
        ['sumto', '>=', $param],
        ['dayto', '>=', $param2]
      ])->get();
      return  $this->content= view('Pub::Zaimy.show', compact('calcul'));
    }


}
