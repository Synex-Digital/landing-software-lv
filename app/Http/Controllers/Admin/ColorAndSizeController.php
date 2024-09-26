<?php

namespace App\Http\Controllers\Admin;

use App\Models\size;
use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ColorAndSizeController extends Controller
{
    function index(){
        $colors = Color::latest()->paginate(10);
        $sizes = size::latest()->paginate(10);
        return view('dashboard.pages.inventory.color_and_size',[
            'colors' => $colors,
            'sizes' => $sizes
        ]);
    }

    //color
    function color_store(Request $request){
        $color = new Color();
        $color->name = $request->name;
        $color->code = $request->color_code;
        $color->save();
        flash()->position('top-right')->success('Color Added Successfully');
        return back();
    }
    function color_update(Request $request){
        $color = Color::find($request->id);
        $color->name = $request->name;
        $color->code = $request->color_code;
        $color->save();
        flash()->position('top-right')->success('Color Updated Successfully');
        return back();
    }
    function color_destroy(Request $request, ){
        $color = Color::find($request->delete_id);
        $color->delete();
        flash()->position('top-right')->success('Color Deleted Successfully');
        return back();
    }

    //size
    function size_store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                flash()->option('position', 'top-right')->error($error);
            }
            return back();
        }
        $size = new size();
        $size->name = $request->name;
        $size->save();
        flash()->position('top-right')->success('Size Added Successfully');
        return back();
    }
    function size_update(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                flash()->option('position', 'top-right')->error($error);
            }
            return back();
        }
        $size = size::find($request->id);
        $size->name = $request->name;
        $size->save();
        flash()->position('top-right')->success('Size Updated Successfully');
        return back();
    }
    function size_destroy(Request $request, ){
        $size = size::find($request->delete_id);
        $size->delete();
        flash()->position('top-right')->success('Size Deleted Successfully');
        return back();
    }
}
