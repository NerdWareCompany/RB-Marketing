@extends('layouts.front')


@section('title') {{$portfoliosettings->meta_title}} @endsection
@section('meta') {{$portfoliosettings->meta_description}} @endsection


@section('content')


<div class="breadcrumb-area">
    <div class="breadcrumb-area-content w-100 h-100 d-flex flex-column  justify-content-center align-items-center">
        <ul class=" page-list d-flex flex-row  justify-content-around">
            <li class="item-home"><a class="bread-link" href="{{ route('home') }}" title="Home"> <i
                        class="fas fa-home mx-1"></i>{{$portfoliosettings->breadcrumbs_anchor}}</a></li>
            <li class="separator separator-home ">/</li>
            <li class="item-current">{{$portfoliosettings->meta_title}}</li>
        </ul>
        <h1 class=" breadcrumb-title mt-5">Po<span>rt</span>folio</h1>
        <p class="mt-5 text-center text-white mb-5">Our Blog Is More Than Just A Collection Of Articles - It's A Hub Of
            Ideas,
            Inspiration, And
            Thought-Provoking
            Discussions.</p>
        <!-- <h1 class=" breadcrumb-title mt-5">{{$portfoliosettings->meta_title}}</h1> -->

        <!-- <ul class="page-list">
            <li class="item-home"><a class="bread-link" href="{{ route('home') }}"
                    title="Home">{{$portfoliosettings->breadcrumbs_anchor}}</a></li>
            <li class="separator separator-home"></li>
            <li class="item-current">{{$portfoliosettings->meta_title}}</li>
        </ul> -->
    </div>

</div>



<div class="portfolio-section text-white">
    <div class="container">
        <div class="content-container">

            <div id="exTab1" class="container d-flex flex-column justify-content-center align-items-center ">

                <ul class="nav nav-pills p-3 ">
                    <li class="active">
                        <a href="#1a" data-toggle="tab" class="tab-link active show">All Work</a>
                    </li>
                    <li><a href="#2a" data-toggle="tab" class="tab-link">Programming Work</a>
                    </li>
                    <li><a href="#3a" data-toggle="tab" class="tab-link">Marketing Work</a>
                    </li>
                    <li><a href="#4a" data-toggle="tab" class="tab-link">Photography & Videography Work</a>
                    </li>
                </ul>
                <div class="tab-content clearfix">
                    <div class="tab-pane active" id="1a">
                        <div class="row mt-5 ">
                            @foreach($projects as $key=>$project)
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4 ">
                                <div class="card-container">
                                    <img src="{{ asset('images/media/img/product-img.jpg') }}"
                                        class="project-img w-100 " alt="">
                                    <div
                                        class="card-title text-center d-flex justify-content-center align-items-center">
                                        {{$project->project_category->name}}
                                    </div>
                                    <div class="card-company-name d-flex justify-content-center align-items-center">
                                        {{$project->title}}
                                    </div>

                                </div>
                            </div>
                            @if ($key == 3)
                            @break
                            @endif


                            @endforeach

                        </div>


                    </div>
                    <div class="tab-pane" id="2a">
                        <div class="row mt-5 ">

                            @foreach($projects as $key=>$project)
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <div class="card-container">
                                    <img src="{{ asset('images/media/img/product-img.jpg') }}"
                                        class="project-img w-100 " alt="">
                                    <div
                                        class="card-title text-center d-flex justify-content-center align-items-center">
                                        {{$project->project_category->name}}
                                    </div>
                                    <div class="card-company-name d-flex justify-content-center align-items-center">
                                        {{$project->title}}
                                    </div>

                                </div>
                            </div>
                            @if ($key == 3)
                            @break
                            @endif


                            @endforeach

                        </div>
                    </div>
                    <div class="tab-pane" id="3a">
                        <div class="row mt-5 ">
                            @foreach($projects as $key=>$project)
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <div class="card-container ">
                                    <img src="{{ asset('images/media/img/product-img.jpg') }}"
                                        class="project-img w-100 " alt="">
                                    <div
                                        class="card-title text-center d-flex justify-content-center align-items-center">
                                        {{$project->project_category->name}}
                                    </div>
                                    <div class="card-company-name d-flex justify-content-center align-items-center">
                                        {{$project->title}}
                                    </div>

                                </div>
                            </div>
                            @if ($key == 3)
                            @break
                            @endif


                            @endforeach

                        </div>
                    </div>
                    <div class="tab-pane" id="4a">
                        <div class="row mt-5 ">
                            @foreach($projects as $key=>$project)
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <div class="card-container ">
                                    <img src="{{ asset('images/media/img/product-img.jpg') }}"
                                        class="project-img w-100 " alt="">
                                    <div
                                        class="card-title text-center d-flex justify-content-center align-items-center">
                                        {{$project->project_category->name}}
                                    </div>
                                    <div class="card-company-name d-flex justify-content-center align-items-center">
                                        {{$project->title}}
                                    </div>

                                </div>
                            </div>
                            @if ($key == 3)
                            @break
                            @endif


                            @endforeach

                        </div>
                    </div>
                </div>


            </div>
        </div>




        <!-- <div class="row">

                @foreach($projects as $key=>$project)

                <div class="col-md-6">
                    <a href="{{URL::to('/')}}/project/{{$project->slug}}" title="{{$project->title}}">
                        <div data-tilt data-tilt-gyroscope="false" data-tilt-scale="1.05" data-tilt-speed="200"
                            data-tilt-perspective="700" data-hover="" data-tilt-glare="true" data-tilt-max-glare="0.1"
                            data-tilt-max="30" class="project-box-div">

                            <div class="project-image-container">
                                <div class="project-image-container-inner">
                                    <img class="project-image lazy" width="410" height="230"
                                        src="/public/img/loading-blog.gif "
                                        data-src="{{$project->photo ? '/public/images/media/' . $project->photo->file : '/public/img/200x200.png'}}"
                                        alt="{{$project->title}}">
                                </div>
                            </div>
                            <div class="project-meta">
                                <div class="project-meta-title">
                                    <span class="project__text">{{$project->title}}</span>
                                </div>
                                <div class="divider"></div>
                                <div class="project-category">
                                    <span class="block_text">{{$project->project_category->name}} </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                @if ($key == 3)
                @break
                @endif


                @endforeach


        </div> -->
    </div>
</div>




<div class="portfolio-section-filters">
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="filters">
                    <h4>{{clean( trans('niva-backend.sort_by') , array('Attr.EnableID' => true))}}</h4>
                    <div class="filter active" data-filter="all">
                        <span>{{clean( trans('niva-backend.all') , array('Attr.EnableID' => true))}}</span>
                    </div>
                    @foreach($project_categories as $category)
                    <div class="filter" data-filter="{{$category->name}}"><span>{{$category->name}}</span></div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-9">
                <div class="projects projects-page row">

                    @foreach($projects as $project)
                    <div class="project col-md-6" data-filter="{{$project->project_category->name}}">
                        <div class="project-inner">
                            <div class="project-thumbnail">
                                <a href="{{URL::to('/')}}/project/{{$project->slug}}" title=""><img width="400"
                                        height="250"
                                        src="{{$project->photo ? '/public/images/media/' . $project->photo->file : '/public/img/200x200.png'}}"
                                        class="img-fluid" alt="{{$project->title}}"></a>
                            </div>
                            <h4 class="entry-details-title"> <a
                                    href="{{URL::to('/')}}/project/{{$project->slug}}">{{$project->title}}</a></h4>
                            <h5 class="project-category">{{$project->project_category->name}}</h5>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</div>



@endsection