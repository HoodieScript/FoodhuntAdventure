@extends('layouts.default')




@section('contentmo')

    <div class="container">
    <div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-file-signature"></i></span>
    </div>
    <input type="text" class="form-control" readonly value="{{ $systeminfos->title }}" name="title" placeholder="title" aria-label="Full Name" aria-describedby="basic-addon1" required="">
    </div>
    
   
    <textarea type="text" class="form-control" readonly  name="body" placeholder="write a description" aria-label="Full Name" aria-describedby="basic-addon1" required="">
    {!! $systeminfos->body !!}</textarea>
    <a href="{{ action('SysteminfosController@index') }}"  class="btn btn-sm btn-primary mt-4">back</a>
    </div>
    
@endsection