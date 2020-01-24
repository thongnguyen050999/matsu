@extends('layouts.app')

@section('content')

<div class="container">

    <br><br><br><br><br><br><br>
    <h1 class="text-center text-uppercase" style="font-size: 5em">Top Posts</h1>
    <br><br><br>
    @if(count($posts)>0)
        <ul class="list-group list-group-flush">

        @foreach($posts as $post)

            <li class="list-group-item">

                <div class="row">
                    <i class="fa fa-envira" style="font-size: 2em; color: blueviolet"></i>
                    &nbsp;
                    <a style="font-size: 1.5em" href="/posts/{{$post->id}}">{{$post->title}}</a>
                </div>
                <br>

                <div class="row">
                    <div class="col col-sm-9">

                        @php
                            $type=$post->category;
                        @endphp

                        <span class="badge badge-primary">
                            {{$type->name}} 
                        </span>
                    </div>

                    <div class="col col-sm-3">

                        @php
                            $month=$post->created_at->month;
                            switch($month)
                            {
                                case 1:
                                    $month='January';
                                    break;
                                case 2:
                                    $month='February';
                                    break;
                                case 3:
                                    $month='March';
                                    break;
                                case 4:
                                    $month='April';
                                    break;
                                case 5:
                                    $month='May';
                                    break;
                                case 6:
                                    $month='June';
                                    break;
                                case 7:
                                    $month='July';
                                    break;
                                case 8:
                                    $month='August';
                                    break;
                                case 9:
                                    $month='September';
                                    break;
                                case 10:
                                    $month='October';
                                    break;
                                case 11:
                                    $month='November';
                                    break;
                                case 12:
                                    $month='December';
                                    break;
                            }
                        @endphp
                        Written in {{$month}}&nbsp;{{$post->created_at->day}}, {{$post->created_at->year}}
                    </div>
                </div>

            </li>


        @endforeach

        </ul>


    @endif
</div>

@endsection