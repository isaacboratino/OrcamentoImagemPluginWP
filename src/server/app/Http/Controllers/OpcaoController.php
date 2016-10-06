<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Http\Requests;

class OpcaoController extends Controller
{
    public function index()
    {
        return App\OpcaoModel::all();
    } 
}
