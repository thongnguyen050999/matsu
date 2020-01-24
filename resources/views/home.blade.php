@extends('layouts.app')

@section('content')
<div class="container">
    <br><br><br><br><br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('inc.messages')
            <div class="card">
                <div class="card-header">Dashboard</div>
                

                <div class="card-body"> 
                    <div class="row">
                        <div class="col col-lg-9">

                            <h2>Post Table</h2>

                        </div>
                        <div class="col col-lg-3">

                            <a href="/posts/create" class="primary_btn">
                                <span>Add</span>    
                            </a>

                        </div>

                    </div>                    

                    <br>
                    @if(count($posts)>0)


                    <table class="table">

                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>
                                        <a href="/posts/{{$post->id}}">
                                            {{$post->title}}
                                        </a>
                                    </td>
                                    <td>{{$post->category->name}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col col-lg-6">
                                                <a class="genric-btn info" href="/posts/{{$post->id}}/edit">Edit</a>
                                            </div>

                                            <div class="col col-lg-6">
                                                {!!Form::open(['action' => ['PostsController@destroy',$post->id],'method' => 'POST'])!!}

                                                    {{Form::hidden('_method','DELETE')}}
                                                    {{Form::submit('Delete',['class' => 'genric-btn danger'])}}

                                                {!!Form::close()!!}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>

                    @else
                        <p>You have no posts.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
