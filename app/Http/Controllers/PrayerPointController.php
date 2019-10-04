<?php

namespace App\Http\Controllers;

use App\PrayerPoint;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PrayerPointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ppt = PrayerPoint::all();
        return view('prayer/index',['ppt'=>$ppt]);
    }
    public function index2()
    {
        $ppt = PrayerPoint::paginate(9);
        return view('prayer/index2',['ppt'=>$ppt]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book = Book::all();
        return view('prayer/create',['book'=>$book]);
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
            
            'body' => 'required',
            'topic' => 'required',
            'content'=> 'required',
            
        ])->validate();
        if ($request->hasFile('content')) {
            
            $bookContent = '_PrayerContent'.time().'.'.request()->content->getClientOriginalExtension();
            $request->content->storeAs('public/prayerPoint',$bookContent);
            
        
            $sermon = new PrayerPoint();
            $sermon->topic = $request->topic;
            $sermon->body = $request->body;
            $sermon->description = $request->description;
            $sermon->price = $request->price;
            $sermon->content = $bookContent;
            // $sermon->book_id = $request->book_id;
            // $book =Book::find($sermon->book_id);
            // $book->book()->save($sermon)
           if( $sermon->save()){
                return redirect(route('prayer.create'))->with('success',"Prayer Topic PUblished");

           } 

        }  

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PrayerPoint  $prayerPoint
     * @return \Illuminate\Http\Response
     */
    public function show($prayerPoint)
    {
        //
        $ppt = PrayerPoint::find($prayerPoint);
        return view('prayer/show',['ppt'=>$ppt]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PrayerPoint  $prayerPoint
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ppt =PrayerPoint::findOrFail($id);
        $book = Book::all();
        return view('prayer/edit',['ppt'=>$ppt,'book'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PrayerPoint  $prayerPoint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $prayerPoint)
    {
        PrayerPoint::whereId($prayerPoint)->update($request->except(['_method','_token']));
        return redirect(route('prayer.index'))->with('success', ' Updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PrayerPoint  $prayerPoint
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = PrayerPoint::find($id);
        $image->delete();
        return redirect(route('prayer.index'))->with('success', ' Deleted');
    }

    public function download($id){       
        $book_exist = PrayerPoint::find($id);
        $file_path = public_path( 'storage/prayerPoint/'.$book_exist->content);
        
        return response()->download($file_path);
    } 
}
