<?php

namespace App\Http\Controllers;

use App\Testimony;
use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    public function __constructor(){
        $this->middleware('auth')->except(['create']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $test = Testimony::paginate(5);
        return view('testimony/index',['test'=>$test]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $test = Testimony::where('status',2)->paginate(10);
        return view('testimony/create',['test'=>$test]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate(request(),[
            'name'=>'required',
            'body'=> 'required',
            'status'=> 'required',
            'email' => 'nullable'
        ]);

        
        $test = new Testimony();
        $test->name = $request->name;
        $test->phone = $request->phone;
        $test->email = $request->email;
        $test->status = $request->status;
        $test->body = $request->body;
        if($test->save()){
            return redirect(route('testimony.create'))->with('success','Testimony Sent Successful');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function show($testimony)
    {
        //
        $test = Testimony::findOrFail($testimony);
        return view('testimony/show',['test'=>$test]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function edit($testimony)
    {
        //
        $test = Testimony::findOrFail($testimony);
        return view('testimony/edit',['test'=>$test]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $testimony)
    {
        //
        Testimony ::whereId($testimony)->update($request->except(['_method','token']));
        return view('testimony/edit',['test'=>$test]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function destroy($testimony)
    {
        //
        $test = Testimony::find($testimony);
        $test->delete();
        return redirect(route('testimony.index'))->with('success','Testimony Deleted.');
    }

    public function pub($id){
        $test = Testimony::find($id);
        $test->status = 2;
        $test->save();
        return back()->with('success','Testimony made Public');
    }
    public function dispub($id){
        $test = Testimony::find($id);
        $test->status = 0;
        $test->save();
        return back()->with('success','Testimony made Not Published');
    }
}
