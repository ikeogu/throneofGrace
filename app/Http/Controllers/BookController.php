<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['vex','show','download','pptbook']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::all();
        return view('store/index',['book'=>$book]);
    }

    public function pptbook($id){
        $book = Book::where('id',$id)->get();
        return view('store',['book'=>$book]);
    }
    public function vex()
    {
        $book = Book::paginate(8);
        return view('store',['book'=>$book]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('store/create');
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
            'price' => 'required',
            'image' => 'required',
            'content' => 'required',
            'pages' => 'required',
            'author' => 'required'
        ])->validate();

        if ($request->hasFile('image') && $request->hasFile('content')) {
            $bookName = '_bookImage'.time().'.'.request()->image->getClientOriginalExtension();
            $request->image->storeAs('public/bookImage',$bookName);
            $bookContent = '_bookContent'.time().'.'.request()->content->getClientOriginalExtension();
            $request->content->storeAs('public/bookContent',$bookContent);
            
            $book = new Book();
            $book->image = $bookName;
            $book->content = $bookContent;
            $book->title = $request->title;
            $book->pages = $request->pages;
            $book->price = $request->price;
            $book->author = $request->author;
            $book->category = $request->category;
            $book->save();
            return redirect(route('E-store.create'))->with('success',"book has been Published");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('store.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('store/edit',['book'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
         
        Book::whereId($book->id)->update($request->except(['_method','_token']));
        return redirect(route('E-store.index'))->with('success', 'Book Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $book = Book::find($id);
       $book->delete();
       return redirect(route('E-store.index'))->with('success','Book Removed');
    }

    public function download($id){       
        $book_exist = Book::find($id);
        $file_path = public_path( 'storage/bookContent/'.$book_exist->content);
        
        return response()->download($file_path);
    }           
}
