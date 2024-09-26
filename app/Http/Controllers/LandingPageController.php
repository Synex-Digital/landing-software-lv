<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $landing_pages = LandingPage::latest()->paginate(2);
        return view('dashboard.pages.landing_page.index',[
            'landing_pages' => $landing_pages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'theme' => 'required',
            'name' => 'required|string|max:255',
            'short_description' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            's_price' => 'required|numeric|min:0',
            'sp_type' => 'required',
            'inventory' => 'required',
            'shipping_fee' => 'required',
            'tags' => 'required',

        ]);

        if($validator->fails()){
            foreach($validator->errors()->all() as $error){
                flash()->option('position', 'top-right')->error($error);
            }
            return back();
        }
        $lPage = new LandingPage;
        $lPage->theme_slug = $request->theme;
        $lPage->name = $request->name;
        $lPage->sku = $request->sku;
        $lPage->short_description = $request->short_description;
        $lPage->description = $request->description;
        $lPage->video_link = $request->video_link;
        $lPage->price = $request->price;
        $lPage->s_price = $request->s_price;
        $lPage->sp_type = $request->sp_type;
        $lPage->inventory_feature = $request->inventory;
        $lPage->shipping_fee = $request->shipping_fee;
        $lPage->tags = $request->tags;
        $lPage->save();

        flash()->position('top-right')->success('Landing Page Created Successfully');
        return back();


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'theme' => 'required',
            'name' => 'required|string|max:255',
            'short_description' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            's_price' => 'required|numeric|min:0',
            'sp_type' => 'required',
            'inventory' => 'required',
            'shipping_fee' => 'required',
            'tags' => 'required',

        ]);

        if($validator->fails()){
            foreach($validator->errors()->all() as $error){
                flash()->option('position', 'top-right')->error($error);
            }
            return back();
        }
        $lPage = LandingPage::find($id);
        $lPage->theme_slug = $request->theme;
        $lPage->name = $request->name;
        $lPage->sku = $request->sku;
        $lPage->short_description = $request->short_description;
        $lPage->description = $request->description;
        $lPage->video_link = $request->video_link;
        $lPage->price = $request->price;
        $lPage->s_price = $request->s_price;
        $lPage->sp_type = $request->sp_type;
        $lPage->inventory_feature = $request->inventory;
        $lPage->shipping_fee = $request->shipping_fee;
        $lPage->tags = $request->tags;
        $lPage->save();

        flash()->position('top-right')->success('Landing Page Updated Successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lPage = LandingPage::find($id);
        $lPage->delete();
        flash()->position('top-right')->success('Landing Page Deleted Successfully');
        return back();
    }
}
