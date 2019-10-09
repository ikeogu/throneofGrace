<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index2']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image = Gallery::all();
        return view('gallery/index',['image'=>$image]);
    }
    public function index2()
    {
        $image = Gallery::all();
        return view('gallery',['image'=>$image]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('gallery/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            
            'image' => 'required',
            'title' => 'required',
            
        ])->validate();

        if ($request->hasFile('image')) {
            $galleryName = '_GalleryImage'.time().'.'.request()->image->getClientOriginalExtension();
            $request->image->storeAs('public/gallery',$galleryName);
            
            $sermon = new Gallery();
            $sermon->image = $galleryName;
            $sermon->title = $request->title;
            $sermon->save();
            return redirect(route('Gallery.create'))->with('success',"Picture  uploaded");


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = Gallery::findOrFail($id);
        return veiw('gallery/edit',['image'=>$image]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $gallery)
    {
        Gallery::whereId($gallery)->update($request->except(['_method','_token']));
        return redirect(route('Gallery.index'))->with('success', 'Image Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Gallery::find($id);
        $image->delete();
        return redirect(route('Gallery.index'))->with('success', 'Image Deleted');
    }
}
