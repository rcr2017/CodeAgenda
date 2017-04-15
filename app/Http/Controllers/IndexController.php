<?php
/**
 * Created by PhpStorm.
 * User: CIBELE
 * Date: 15/04/2017
 * Time: 14:21
 */

namespace CodeAgenda\Http\Controllers;


class IndexController extends Controller
{
    public function index ()
    {
        return view('layout');
    }
}