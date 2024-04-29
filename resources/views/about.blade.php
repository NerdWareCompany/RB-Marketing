@extends('layouts.front')

@section('title') {{$aboutsetting->meta_title}} @endsection
@section('meta') {{$aboutsetting->meta_description}} @endsection

@section('styles')
<link href="{{ asset('css/front/magnific.min.css')}}" type="text/css" rel="stylesheet">
@endsection

@section('content')

<script>
function toggleImage(cardId) {
    var img = document.getElementById('iconImage_' + cardId);
    var currentSrc = img.src;

    if (currentSrc.includes('add-circle-white')) {
        img.src = "{{ asset('img/icons/remove-circle-white.png')}}";
    } else {
        img.src = "{{ asset('img/icons/add-circle-white.png')}}";
    }
}
</script>


<div class="about-breadcrumb-area text-white">
    <div class="breadcrumb-area-content w-100 h-100 d-flex flex-column  justify-content-center align-items-center">


        <!-- <h1 class="breadcrumb-title">{!!$aboutsetting->meta_title!!}</h1> -->
        <ul class="page-list d-flex flex-row  justify-content-around">
            <li class="item-home"><a class="bread-link" href="{{ route('home') }}" title="Home">
                    <i class="fas fa-home mx-1"></i>{{$aboutsetting->breadcrumbs_anchor}}</a></li>
            <li class="separator separator-home">/</li>
            <li class="item-current">{{$aboutsetting->meta_title}}</li>
        </ul>
        <h1 class=" breadcrumb-title mt-5">A<span>bo</span>ut</h1>
        <p class="mt-5 text-center text-white mb-5">Our blog is more than just a collection of articles - it's a hub of
            ideas, inspiration, and thought-provoking discussions.</p>
    </div>
</div>

<div class="about-info container mt-5 mb-5 text-white">
    <div class="row h-100">
        <div class="col-12 col-md-12 col-lg-6">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12 w-100 mb-4">
                    <img src="{{ asset('images/media/img/about-img-4.jpg') }}" class="about-info-img1 w-100" alt="">

                    <div class="content-container mt-4 ">
                        <h3>Vision</h3>
                        <p>Check out our proven methods, guides, and exercises that help make work better, and
                            people
                            happier.</p>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-12 w-100 mb-4">
                    <img src="{{ asset('images/media/img/about-img-5.jpg') }}" class="about-info-img1 w-100" alt="">
                    <div class="content-container mt-4 ">
                        <h3>Missions</h3>
                        <p>Check out our proven methods, guides, and exercises that help make work better, and people
                            happier.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-6 h-100">
            <img src="{{ asset('images/media/img/about-img-2.jpg') }}" class="about-info-img2 w-100 h-100" alt="">
            <div class="content-container mt-4">
                <h3>Objectives</h3>
                <p>Check out our proven methods, guides, and exercises that help make work better, and people
                    happier.</p>

            </div>
        </div>
    </div>
</div>

<div class="questions-part text-white">
    <div class="container">
        <h1 class=" breadcrumb-title mt-5">F<span>A</span>Q<span>?</span></h1>
        <p class="mt-4 text-center text-white mb-5"> We tried to answer most common questions, if you have any
            additional, please get in touch with our friendly team</p>


        <div class="accordion mt-5 bg-transparent border-0 " id="accordionExample">
            <div class="card border-color p-3 text-white bg-transparent mb-2">
                <div class="card-header bg-transparent " id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-white text-left d-flex justify-content-between"
                            type="button" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true"
                            aria-controls="collapse_1" onclick="toggleImage(1)">
                            <span> 01. What are properties in Figma?</span> <img id="iconImage_1"
                                src="{{ asset('img/icons/add-circle-white.png')}}" alt="">
                        </button>
                    </h2>
                </div>

                <div id="collapse_1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        The first step in following digital trends is to stay informed. Subscribe to relevant
                        industry newsletters, follow thought leaders on social media, and attend industry events
                        to stay up-to-date on the latest developments and emerging trends.. read more
                    </div>
                </div>
            </div>
            <div class="card border-color p-3 text-white bg-transparent mb-3">
                <div class="card-header bg-transparent " id="headingTwo">
                    <h2 class="mb-0">
                        <button
                            class="btn btn-link btn-block text-white text-left collapsed d-flex justify-content-between"
                            type="button" data-toggle="collapse" data-target="#collapse_2" aria-expanded="false"
                            aria-controls="collapse_2" onclick="toggleImage(2)">
                            <span> 02. How Whitespace UI kit and Design System can help me?</span> <img id="iconImage_2"
                                src="{{ asset('img/icons/remove-circle-white.png')}}" alt="">
                        </button>
                    </h2>
                </div>
                <div id="collapse_2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        Some placeholder content for the second accordion panel. This panel is hidden by
                        default.
                    </div>
                </div>
            </div>
            <div class="card border-color p-3 text-white bg-transparent mb-3">
                <div class="card-header bg-transparent " id="headingThree">
                    <h2 class="mb-0">
                        <button
                            class="btn btn-link btn-block text-white text-left collapsed d-flex justify-content-between"
                            type="button" data-toggle="collapse" data-target="#collapse_3" aria-expanded="false"
                            aria-controls="collapse_3" onclick="toggleImage(3)">
                            <span> 03. What is your return policy?</span> <img id="iconImage_3"
                                src="{{ asset('img/icons/remove-circle-white.png')}}" alt="">
                        </button>
                    </h2>
                </div>
                <div id="collapse_3" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        And lastly, the placeholder content for the third and final accordion panel. This panel
                        is hidden by default.
                    </div>
                </div>
            </div>
            <div class="card border-color p-3 text-white bg-transparent mb-3">
                <div class="card-header bg-transparent " id="headingFourth">
                    <h2 class="mb-0">
                        <button
                            class="btn btn-link btn-block text-white text-left collapsed d-flex justify-content-between"
                            type="button" data-toggle="collapse" data-target="#collapse_4" aria-expanded="false"
                            aria-controls="collapse_4" onclick="toggleImage(4)">
                            <span> 04. How can I contact customer support?</span> <img id="iconImage_4"
                                src="{{ asset('img/icons/remove-circle-white.png')}}" alt="">
                        </button>
                    </h2>
                </div>
                <div id="collapse_4" class="collapse" aria-labelledby="headingFourth" data-parent="#accordionExample">
                    <div class="card-body">
                        And lastly, the placeholder content for the third and final accordion panel. This panel
                        is hidden by default.
                    </div>
                </div>
            </div>
            <div class="card border-color p-3 text-white bg-transparent mb-3">
                <div class="card-header bg-transparent " id="headingFifth">
                    <h2 class="mb-0">
                        <button
                            class="btn btn-link btn-block text-white text-left collapsed d-flex justify-content-between"
                            type="button" data-toggle="collapse" data-target="#collapse_5" aria-expanded="false"
                            aria-controls="collapse_5" onclick="toggleImage(5)">
                            <span> 05. What payment methods do you accept?</span> <img id="iconImage_5"
                                src="{{ asset('img/icons/remove-circle-white.png')}}" alt="">
                        </button>
                    </h2>
                </div>
                <div id="collapse_5" class="collapse" aria-labelledby="headingFifth" data-parent="#accordionExample">
                    <div class="card-body">
                        And lastly, the placeholder content for the third and final accordion panel. This panel
                        is hidden by default.
                    </div>
                </div>
            </div>
        </div>

        <div class="remain-questions text-center mt-5">
            <h2>Still have a questions?</h2>
            <p>We're sorry we couldn't provide you with the information you were looking for. Please contact us and
                we'll be happy to help.</p>
        </div>
    </div>
</div>

<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">

                <div class="simpleParallax-video">
                    <div class="simpleParallax">
                        <img width="500" height="665" src="/public/img/loading-blog.gif"
                            class="lazy thumparallax img-fluid" data-src="{{$aboutsetting->about_image}}"
                            alt="about-image">
                    </div>
                    <a class="popup-vimeo-video" href="{{$aboutsetting->about_ytlink}}">
                        <i class="far fa-play-circle"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-7">


                <h4 class="about-heading1-home">{{$aboutsetting->about_subtitle}}</h4>
                <h3 class="about-heading2-home">{!!$aboutsetting->about_title!!}</h3>

                {!!$aboutsetting->about_description!!}

                <a href="{{$aboutsetting->about_buttonlink}}" target="_self"
                    class="btn btn-style1"><span>{{$aboutsetting->about_buttontext}}</span></a>


            </div>
        </div>
    </div>
</div>

<div class="members-section">
    <div class="container">
        <h3 class="members-heading1">{!!$aboutsetting->member_title_section!!}</h3>


        <div class="row">
            @foreach($members as $member)
            <div class="col-md-4">
                <div class="venor-team">
                    <div class="thumbnail">
                        <img width="350" height="350" class="lazy img-fluid" src="/public/img/loading-blog.gif"
                            data-src="{{$member->photo ? '/public/images/media/' . $member->photo->file : '/public/img/200x200.png'}}"
                            alt="team-venor">
                    </div>
                    <div class="content">
                        <h5 class="title">{{$member->name}}</h5>
                        <p class="position">{{$member->position}}</p>
                    </div>
                    <ul class="social-icon">
                        <li><a target="_blank" rel="noopener" href="{{$member->facebook}}"><i class="fab fa-facebook"
                                    aria-hidden="true"></i></a></li>
                        <li><a target="_blank" rel="noopener" href="{{$member->linkedin}}"><i class="fab fa-linkedin"
                                    aria-hidden="true"></i></a></li>
                        <li><a target="_blank" rel="noopener" href="{{$member->twitter}}"><i class="fab fa-twitter"
                                    aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>



<div class="testimonial-section">

    <div class="testimonial-section-slider owl-carousel">


        @foreach($testimonials as $testimonial)
        <blockquote class="testimonial-slide m-0     d-flex align-items-center ">
            <div class="row testimonial-content w-100 m-0 ">
                <div class="col-7">
                    <div>
                        <img src="{{ asset('images/media/img/testimonial-user-img.jpg') }}" alt="user image"
                            class="testimonial-user-img">

                        <div class="testimonial-img-frame"></div>
                    </div>

                </div>
                <div class="col-5 py-5 testimonial-content-container ">
                    <span class="testimonials_slider_name">{{$testimonial->name}}</span>
                    <div class="testimonials-slider-position mt-2">
                        {{$testimonial->position}}</div>

                    <p class="testimonials-slider-description mt-3">{{$testimonial->description}}</p>

                </div>
            </div>
        </blockquote>
        @endforeach

    </div>

</div>


<!-- 
<div class="testimonial-section">

    <div class="testimonial-section-slider owl-carousel">

        @foreach($testimonials as $testimonial)
        <blockquote class="testimonial-slide">
            <div class="section_title">{{$testimonial->subtitle}}</div>
            <span class="testimonial_slider_title">{{$testimonial->title}}</span>
            <div class="testimonial-area">
                <div class="testimonial-layoutArea">
                    <p>{{$testimonial->description}}</p>
                </div>
            </div>
            <div class="testimonials_slider_name"> {{$testimonial->name}}<span> - {{$testimonial->position}}</span>
            </div>
        </blockquote>
        @endforeach

    </div>

</div> -->


<div class="clients-section">
    <div class="container">
        <h1 class="section-header text-center text-white">Pa<span style="color:rgba(150, 106, 11, 1);">rt</span>ners
        </h1>
        <p class="section-desctiption text-center text-white mt-3">Our Partners section highlights our trusted
            network
            of companies, </p>
        <div class="clients-slider owl-carousel">
            @foreach($clients as $client)
            <div class="clients-slide">
                <a title="{{$client->company_name}}" target="_blank" href="{{$client->company_link}}"><img
                        class="client_image owl-lazy"
                        data-src="{{$client->photo ? '/public/images/media/' . $client->photo->file : '/public/img/200x200.png'}}"
                        alt="{{$client->company_name}}"></a>
            </div>
            @endforeach
        </div>

    </div>
</div>



@endsection