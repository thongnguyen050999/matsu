@extends('layouts.app')

@section('content')
    <br><br><br><br><br><br><br>
    <div class="container">
        <h1 class="text-center text-uppercase" style="font-size: 5em">Category Archive</h1>

        <br><br><br><br>
        @if(count($types)>0)

            <br><br>

            @foreach($types as $type)

                <h2>{{$type->name}}</h2>
                <br>

                @php
                    $posts=$type->post;
                @endphp

                <ul class="list-group list-group-flush">
                    @foreach($posts as $post)
                        <li class="list-group-item">

                        <div class="row">
                            <div class="col col-lg-9 text-primary">
                                <i class="fa fa-envira" style="font-size: 1.5em; color: blueviolet"></i>
                                &nbsp;
                                <a href="/posts/{{$post->id}}">
                                    {{$post->title}}
                                </a>
                            </div>

                            <div class="col col-lg-3">

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
                                    {{$month}}&nbsp;{{$post->created_at->day}}, {{$post->created_at->year}}
                            </div>
                        </div>
                        </li>

                    @endforeach
                </ul>
                <br>
            @endforeach

        @else
            <p>We have no categories</p>
        @endif
    </div>
@endsection