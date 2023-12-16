<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * 物件登録画面表示
     * @return view
     */
    public function showPropertyForm()
    {
        return view('properties.property_form');
    }
}
