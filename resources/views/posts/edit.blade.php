@extends('layouts.app')

@section('content')

<br><br><br><br><br><br><br>

<div class="container">

    @include('inc.messages')
    <h2 style="font-weight: bold">Edit Post</h2>
    <br>

    {!! Form::open(['action' => ['PostsController@update',$post->id],'method' => 'POST','enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title',$post->title,['class' => 'form-control','placeholder' => 'Title'])}}
        </div>

        <div class="form-group">
            {{Form::label('summary','Summary')}}
            {{Form::text('summary',$post->summary,['class' => 'form-control','placeholder' => 'Summarize'])}}
        </div>
        <div class="form-group">
            {{Form::label('category','Category')}}
            <br>

            @php
                $arr=array();
                foreach($types as $type) $arr+=array($type->id => $type->name);
            @endphp


            {{Form::select('category', $arr,$post->category->id)}}
            <br>
        </div>

        <br>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body',$post->body,['id' => 'summernote','class' => 'form-control','placeholder' => 'Body Text'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class' => 'genric-btn primary'])}}

    {!! Form::close() !!}

</div>
@endsection