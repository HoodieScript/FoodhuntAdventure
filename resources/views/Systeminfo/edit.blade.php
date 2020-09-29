@extends('layouts.default')




@section('contentmo')

    <div class="container">
    <form action="{{ action('SysteminfosController@update', $systeminfos->id) }}" method="post" >
    @csrf
    @method('PUT')


    <div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-file-signature"></i></span>
    </div>
    <input type="text" class="form-control"  value="{{ $systeminfos->title }}" name="title" placeholder="title" aria-label="Full Name" aria-describedby="basic-addon1" required="">
    </div>
    
   
    <textarea type="text" class="form-control"   name="body" placeholder="write a description" aria-label="Full Name" aria-describedby="basic-addon1" required="">
    {!! $systeminfos->body !!}</textarea>
    <a href="{{ action('SysteminfosController@index') }}"  class="btn btn-sm btn-primary mt-4">Back</a>
    <button type="submit" class="btn btn-sm btn-warning mt-4">Update</button>
    </div>
    
@endsection