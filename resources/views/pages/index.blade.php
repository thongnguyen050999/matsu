@extends('layouts.app')

@section('content')

<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="banner_content">
                        <h3 class="text-uppercase">Hello</h3>
                        <h1 class="text-uppercase">I am Thong Nguyen Thanh</h1>
                        <h5 class="text-uppercase">junior developer</h5>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="home_right_img">
                        <img class="" src="{{asset('storage/images/home-right.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_area section_gap">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5">
                <div class="about_img">
                    <img class="" src="{{asset('storage/images/about-us.png')}}" alt="">
                </div>
            </div>

            <div class="offset-lg-1 col-lg-5">
                <div class="main_title text-left">
                    <h2>let’s <br>
                        Introduce about <br>
                        myself</h2>
                    <p>
                        Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven 
                        midst their. Beast creepeth. Fish days.
                    </p>
                    <p>
                        Is give may shall likeness made yielding spirit a itself together created after sea 
                        is in beast beginning signs open god you're gathering whose gathered cattle let. 
                        Creature whales fruit unto meat the life beginning all in under give two.
                    </p>
                    <a class="primary_btn" href="#"><span>Download CV</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="testimonial_area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="main_title">
                    <h2>Latest posts</h2>
                    <p>My recent pet projects and researches</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel" style="width: 100%">

                @if(count($posts)>0)
                    @foreach($posts as $post)
                        <div class="testi_item">
                            <div class="row">
                                <div class="col-lg-3 col-sm-12">
                                    <h1 class="text-center" style="margin: 0">{{$post->created_at->day}}</h1>
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
                                    <h4 class="text-center">{{$month}} {{$post->created_at->year}}</h4>
                                </div>
                                <div class="col-lg-9 col-sm-12">
                                    <div class="testi_text">
                                        <a href="/posts/{{$post->id}}"><h4 style="margin-top: 0.25em">{{$post->title}}</h4></a>
                                        <p style="word-break: break-all">{{$post->summary}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                    <div class="row justify-content-center">
                        {{$posts->links()}}
                    </div>
                @else
                    <p>You have no posts</p>
                @endif
                
                
            </div>
        </div>
    </div>
</div>

<section class="newsletter_area">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-12">
                <div class="subscription_box text-center" style="background: url({{asset('storage/images/subscribe-bg.png')}}) no-repeat center;">
                    <h2 class="text-uppercase text-white">Tell me your thoughts</h2>
                    <div class="subcribe-form" id="mc_embed_signup">
                        <form target="_blank" novalidate="true" action="" method="get" class="subscription relative">
                            <input name="EMAIL" placeholder="What is in your mind?" onfocus="this.placeholder = ''" onblur="this.placeholder = 'What is in your mind?'" required="" type="email">
                            <button class="primary-btn hover d-inline">Send</button>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="footer_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="footer_top flex-column">
                    <div class="footer_logo">
                        <a href="{{url('/')}}">
                            <img style="width: 7em" src="{{asset('storage/images/logo.png')}}" alt="">
                        </a>
                        <h4>Follow Me</h4>
                    </div>
                    <div class="footer_social">
                        <a href="https://www.facebook.com/thongnguyen5999"><i class="fa fa-facebook"></i></a>
                        <a href="https://github.com/thongnguyen050999"><i class="fa fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/thongnguyen5999/"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer_bottom justify-content-center">

        </div>
    </div>
</footer>

@endsection