@extends('layouts.app')

@section('content')
    <br><br><br><br><br><br><br>
    <h1 class="text-center text-uppercase" style="font-size: 5em; font-weight: bold; font-family: Rubik, sans-serif; width: 80%; margin: 0 auto">{{$post->title}}</h1>
    <p class="text-center" style="font-family: Rubik, sans-serif">

        @php
            $month=$post->created_at->month;
            switch($month)
            {
                case 1:
                    $month='Jan';
                    break;
                case 2:
                    $month='Feb';
                    break;
                case 3:
                    $month='Mar';
                    break;
                case 4:
                    $month='Apr';
                    break;
                case 5:
                    $month='May';
                    break;
                case 6:
                    $month='Jun';
                    break;
                case 7:
                    $month='Jul';
                    break;
                case 8:
                    $month='Aug';
                    break;
                case 9:
                    $month='Sep';
                    break;
                case 10:
                    $month='Oct';
                    break;
                case 11:
                    $month='Nov';
                    break;
                case 12:
                    $month='Dec';
                    break;
            }
        @endphp
        by Thong Nguyen - on {{$post->category->name}}, {{$post->created_at->day}} {{$month}} {{$post->created_at->year}}
    </p>
    <br>
    <div class="container">
        {!!$post->body!!}
    </div>

    @if(!Auth::guest())
        <div class="container">
            <div class="row" style="margin: 0 auto">
                <div class="col col-lg-6 float-left">
                    <a class="genric-btn info" href="/posts/{{$post->id}}/edit">Edit</a>
                </div>

                <div class="col col-lg-6">
                    <div class="float-right">
                        {!!Form::open(['action' => ['PostsController@destroy',$post->id],'method' => 'POST'])!!}

                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Delete',['class' => 'genric-btn danger'])}}

                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    @endif


@endsection