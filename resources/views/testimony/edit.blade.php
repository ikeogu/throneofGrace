@extends('layouts.app')
@section('content')
        <section class="gallery-landing">
            <div class="container-fluid p-0">
                <div class="jumbotron bg-contact">
                    <h1> Testimonies</h1>
                    <p>Testimonies of the Lord's Doing</p>
                </div>
                <section class="gallery-img my-5">
                    <div class="container">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">
                                <div class="d-flex w-100 justify-content-between jumbotron">
                                <h3 class="mb-1">Testimonies</h3>
                                
                                </div>
                                
                            </a>
                            <div class="d-flex w-100 justify-content-between py-3">
                                    
                                <table class="table table-stripped,  row scrollable text-dark">
                                    <tr class="col col-lg-12 col-sm-9 col-md-9">
                                        <th>Name</th>
                                        <th>Testimony</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($test as $item)
                                        <tr class="col col-lg-12 col-sm-9 col-md-9">
                                        <td> <strong><a href="/testimony/{{$item->id}}">{{$item->name}}</a></strong></td>
                                            <td> <p class="text-dark">{{$item->body}}</p></td>
                                            <td><a class="btn btn-fill btn-info" href="/testimony/{{$item->id}}"><strong> more</strong></a></td>
                                        </tr>
                                    @endforeach        
                                </table>
                            </div>
                        </div>
                    </div>
                    {{$test->links()}}
                </section>
                <div>
                    @if ($message = Session::get('success'))
        
                        <div class="alert alert-success alert-block">
        
                            <button type="button" class="close" data-dismiss="alert">×</button>
        
                            <strong>{{ $message }}</strong>
        
                        </div>
        
                    @endif
        
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </section>

        <!-- Conatct us  -->
        <section class="contact">
           
            <div class="container notice-card p-3">
                <div class="row text-center justify-content-center">
                    
                </div>
            </div>

            <div class="container my-5">
                <h1 class="text-uppercase text-center mt-5">Edit Testimony</h1>
                <p class="text-center">The Miracles are your's, but the Testimonies belongs to God.</p>
               
            <form  action="{{route('testimony.update',[$test->id])}}">
                    @csrf
                    {{method_field()}}
                        <div class="row text-center mt-5">
                            <div class="col-sm col-md-4">
                                <input type="text" value="{{$test->name}}" name="name" >
                            </div>
                            <div class="col-sm col-md-4">
                                <input type="email" value="{{$test->email}}" name="email">
                            </div>
                            <div class="col-sm col-md-4">
                                <input type="text" value="{{$test->phone}}" name="phone">
                            </div>
                        </div>
                        <div class="row text-center mt-5">
                            <div class="col-sm col-md-4">
                                <label for="">Make Testimony</label>
                                <select name="status" class="form-control">
                                    @if({{$test->status}}=== 0)
                                    <option value="0">Private</option>
                                    @elseif({{$test->status}} === 1)
                                    <option value="1">Public</option>
                                    @endif
                                </select>
                            </div>
                        </div>    
                        <div class="row mt-4 text-center">
                            <div class="col-sm col-md-12">
                                <textarea rows="7"  name="body">
                                    {{$test->body}}
                                </textarea>
                            </div>
                        </div>
                        <div class="row my-5 justify-content-center">
                            <input type="submit"  class="btn-danger">
                        </div>
                    </form>
                </div>
        </section>

       
@endsection