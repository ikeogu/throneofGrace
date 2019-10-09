<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class EventController extends Controller
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
        $event= Event::all();
        return view('event/index',['event'=>$event]);
    }
    public function index2()
    {
        $event= Event::all();
        return view('event',['event'=>$event]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event/create');
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
            'title' => 'required|unique:posts|max:255',
            'venue' => 'required',
            'image' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'stop_time' => 'required',
            'details' => 'required'
        ])->validate();

        if ($request->hasFile('image')) {
            $eventName = '_eventIma'.time().'.'.request()->image->getClientOriginalExtension();
            $request->image->storeAs('public/Event',$eventName);
            
            $event = new Event();
            $event->image = $eventName;
            $event->title = $request->title;
            $event->venue= $request->venue;
            $event->start_time = $request->start_time;
            $event->stop_time= $request->stop_time;
            $event->date= $request->date;
            $event->details = $request->details;

            $event->save();
            return redirect(route('Events.create'))->with('success',"Event has been Published");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
        $evt = Event::find($event->id);
        return view('event',['event'=>$evt]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $ev = Event::findorFail($id);
        return view('event/edit',['ev'=>$ev]);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $event)
    {
        Event::whereId($event)->update($request->except(['_method','_token']));
         return redirect(route('Events.index'))->with('success', 'Event Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evt = Event::find($id);
        $evt->delete();
        return redirect(route('Events.index'))->with('success', 'Event Deleted');
    }
}
