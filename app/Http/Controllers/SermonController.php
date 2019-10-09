<?php

namespace App\Http\Controllers;

use App\Sermon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class SermonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index2','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sermon = Sermon::all();
        return view('sermon/index',['sermon'=>$sermon]);
    }
    public function index2()
    {
        $sermon = Sermon::all();
        return view('sermon',['sermon'=>$sermon]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('sermon/create');
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
            'topic' => 'required|unique:posts|max:255',
            'passage' => 'required',
            'image' => 'required',
            'caption' => 'required',
            'tag' => 'required'
        ])->validate();

        if ($request->hasFile('image')) {
            $sermonName = '_sermonIma'.time().'.'.request()->image->getClientOriginalExtension();
            $request->image->storeAs('public/sermon',$sermonName);
            
            $sermon = new Sermon();
            $sermon->image = $sermonName;
            $sermon->topic = $request->topic;
            $sermon->caption = $request->caption;
            $sermon->tag = $request->tag;
            $sermon->author = $request->author;
            $sermon->passage = $request->passage;
            $sermon->save();
            return redirect(route('sermons.create'))->with('success',"Sermon has been Published");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sermon  $sermon
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sermon = Sermon::where('id',$id)->get();
        $ser = Sermon::limit(3)->get();
        //dd($sermon);
        return view('sermon/show',['sermon'=>$sermon,'ser'=>$ser]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sermon  $sermon
     * @return \Illuminate\Http\Response
     */
    public function edit(Sermon $sermon)
    {
        $ser = Sermon::findOrFail($sermon->id);
        return view('sermon/edit',['ser'=>$ser]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sermon  $sermon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sermon)
    { 
        
        Sermon::whereId($sermon)->update($request->except(['_method','_token']));
         return redirect(route('sermons.index'))->with('success', 'Sermon Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sermon  $sermon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sermon $sermon)
    {
         $evt = Sermon::find($sermon->id);
        // dd($evt);
        $evt->delete();
         return redirect(route('sermons.index'))->with('success', 'Sermon Deleted');
    }
}
