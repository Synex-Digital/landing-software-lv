<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorAndSizeController extends Controller
{
    function index(){
        $colors = Color::latest()->paginate(10);
        return view('dashboard.pages.inventory.color_and_size',[
            'colors' => $colors
        ]);
    }
    function color_store(Request $request){
        $color = new Color();
        $color->name = $request->name;
        $color->code = $request->color_code;
        $color->save();
        flash()->position('top-right')->success('Color Added Successfully');
        return back();
    }
}
