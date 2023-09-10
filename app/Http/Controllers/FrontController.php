<?php

  namespace App\Http\Controllers;
  use Illuminate\Http\Request;

  class FrontController extends Controller
  {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function inicio()
    {
        return view('website.web.index');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function vender()
    {
        return view('imoveis.index');
    }

  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function Comprar()
    {
        return view('imoveis.index');
    }

}