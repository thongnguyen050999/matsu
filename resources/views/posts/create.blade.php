@extends('layouts.app')

@section('content')

<br><br><br><br><br><br><br>

<div class="container">

    @include('inc.messages')
    <h2 style="font-weight: bold">Add Post</h2>
    <br>

    {!! Form::open(['action' => 'PostsController@store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class' => 'form-control','placeholder' => 'Title'])}}
        </div>

        <div class="form-group">
            {{Form::label('summary','Summary')}}
            {{Form::text('summary','',['class' => 'form-control','placeholder' => 'Summarize'])}}
        </div>
        <div class="form-group">
            {{Form::label('category','Category')}}
            <br>

            @php
                $arr=array();
                foreach($types as $type) $arr+=array($type->id => $type->name);
            @endphp


            {{-- {{Form::select('size', array('L' => 'Large', 'S' => 'Small'))}} --}}
            {{Form::select('category', $arr)}}
            <br>
        </div>

        <br>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body','',['id' => 'summernote','class' => 'form-control','placeholder' => 'Body Text'])}}
        </div>

        {{Form::submit('Submit',['class' => 'genric-btn primary'])}}

    {!! Form::close() !!}

</div>
@endsection