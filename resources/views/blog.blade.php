@extends('layouts.front')

@section('title') {{$blogsettings->meta_title}} @endsection
@section('meta') {{$blogsettings->meta_description}} @endsection



@section('content')

<script>
function toggleImage(cardId) {
    var img = document.getElementById('iconImage_' + cardId);
    var currentSrc = img.src;

    if (currentSrc.includes('add-circle.png')) {
        img.src = "{{ asset('img/icons/remove-circle.png') }}";
    } else {
        img.src = "{{ asset('img/icons/add-circle.png') }}";
    }
}
</script>

<div class="blog-hero-section text-white">
    <div class="blog-hero-content w-100 h-100 d-flex flex-column justify-content-center align-items-center">
        <ul class=" page-list d-flex flex-row  justify-content-around">
            <li class="item-home"><a class="bread-link" href="{{ route('home') }}" title="Home"> <i
                        class="fas fa-home mx-1"></i> {{$blogsettings->breadcrumbs_anchor}}</a></li>
            <li class="separator separator-home ">/</li>
            <li class="item-current">{{$blogsettings->meta_title}}</li>
        </ul>
        <h2 class="mt-5">T<span>ip</span>s A<span>n</span>d Tr<span>ic</span>ks</h2>
        <p class="mt-5 text-center mb-5">Our Blog Is More Than Just A Collection Of Articles - It's A Hub Of Ideas,
            Inspiration, And
            Thought-Provoking
            Discussions.</p>
    </div>
</div>


<div class="content-section p-5 mt-5 text-white ">
    <div class="content-container">
        <div class="row ">
            <div class="col-12 col-md-7 blog-content">
                <h2>How to follow digital trends to drive success </h2>
                <p class="mt-4">In today's rapidly changing digital landscape, keeping up with the latest
                    trends is essential
                    to
                    drive success and growth in any industry. Here are some tips on how to follow digital trends
                    effectively:</p>


                <div class="accordion mt-5 bg-transparent border-0 " id="accordionExample">
                    <div class="card border-0 bg-transparent mb-2">
                        <div class="card-header bg-transparent " id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left d-flex justify-content-between"
                                    type="button" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true"
                                    aria-controls="collapse_1" onclick="toggleImage(1)">
                                    <span> 1. Stay informed</span> <img id="iconImage_1"
                                        src="{{ asset('img/icons/add-circle.png') }}" alt="">
                                </button>
                            </h2>
                        </div>

                        <div id="collapse_1" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                The first step in following digital trends is to stay informed. Subscribe to relevant
                                industry newsletters, follow thought leaders on social media, and attend industry events
                                to stay up-to-date on the latest developments and emerging trends.. read more
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 bg-transparent mb-3">
                        <div class="card-header bg-transparent " id="headingTwo">
                            <h2 class="mb-0">
                                <button
                                    class="btn btn-link btn-block text-left collapsed d-flex justify-content-between"
                                    type="button" data-toggle="collapse" data-target="#collapse_2" aria-expanded="false"
                                    aria-controls="collapse_2" onclick="toggleImage(2)">
                                    <span> 2. Analyze data</span> <img id="iconImage_2"
                                        src="{{ asset('img/icons/remove-circle.png') }}" alt="">
                                </button>
                            </h2>
                        </div>
                        <div id="collapse_2" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Some placeholder content for the second accordion panel. This panel is hidden by
                                default.
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 bg-transparent mb-3">
                        <div class="card-header bg-transparent " id="headingThree">
                            <h2 class="mb-0">
                                <button
                                    class="btn btn-link btn-block text-left collapsed d-flex justify-content-between"
                                    type="button" data-toggle="collapse" data-target="#collapse_3" aria-expanded="false"
                                    aria-controls="collapse_3" onclick="toggleImage(3)">
                                    <span> 3. Experiment</span> <img id="iconImage_3"
                                        src="{{ asset('img/icons/remove-circle.png') }}" alt="">
                                </button>
                            </h2>
                        </div>
                        <div id="collapse_3" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                And lastly, the placeholder content for the third and final accordion panel. This panel
                                is hidden by default.
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="col-12 col-md-5 d-flex justify-content-end h-100">
                <img src="{{ asset('images/media/img/blog-img.jpg') }}" alt="" class="blog-image w-100  h-100">
            </div>
        </div>

        <p class="blog-content-summary p-2 mt-5">in summary How to Follow Digital Trends to Drive SuccessStaying
            up-to-date
            with
            the latest
            digital
            trends is
            essential for driving success in any industry. To do so, it's important to stay informed by subscribing to
            industry newsletters, following thought leaders on social media, and attending industry events. Analyzing
            data, experimenting with new tactics, collaborating with other professionals, and adapting to change quickly
            are also important. By following these tips, you can stay ahead of the curve and drive success in the
            ever-evolving digital landscape.</p>
    </div>

    <div class="row mt-5">
        <div class="col-12 col-md-6 d-flex justify-content-start h-100">
            <img src="{{ asset('images/media/img/blog-img.jpg') }}" alt="" class="blog-image w-100 h-100">
        </div>
        <div class="col-12 col-md-6 blog-content">
            <h2>How to follow digital trends to drive success </h2>
            <p class="mt-4">In today's rapidly changing digital landscape, keeping up with the latest
                trends is essential
                to
                drive success and growth in any industry. Here are some tips on how to follow digital trends
                effectively:</p>


            <div class="accordion mt-5 bg-transparent border-0 " id="accordionExample1">
                <div class="card border-0 bg-transparent mb-2">
                    <div class="card-header bg-transparent " id="headingOne1">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left d-flex justify-content-between"
                                type="button" data-toggle="collapse" data-target="#collapse_4" aria-expanded="true"
                                aria-controls="collapse_4" onclick="toggleImage(4)">
                                <span> 1. Stay informed</span> <img id="iconImage_4"
                                    src="{{ asset('img/icons/add-circle.png') }}" alt="">
                            </button>
                        </h2>
                    </div>

                    <div id="collapse_4" class="collapse show" aria-labelledby="headingOne1"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            The first step in following digital trends is to stay informed. Subscribe to relevant
                            industry newsletters, follow thought leaders on social media, and attend industry events
                            to stay up-to-date on the latest developments and emerging trends.. read more
                        </div>
                    </div>
                </div>
                <div class="card border-0 bg-transparent mb-3">
                    <div class="card-header bg-transparent " id="headingTwo2">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed d-flex justify-content-between"
                                type="button" data-toggle="collapse" data-target="#collapse_5" aria-expanded="false"
                                aria-controls="collapse_5" onclick="toggleImage(5)">
                                <span> 2. Analyze data</span> <img id="iconImage_5"
                                    src="{{ asset('img/icons/remove-circle.png') }}" alt="">
                            </button>
                        </h2>
                    </div>
                    <div id="collapse_5" class="collapse" aria-labelledby="headingTwo2"
                        data-parent="#accordionExample1">
                        <div class="card-body">
                            Some placeholder content for the second accordion panel. This panel is hidden by
                            default.
                        </div>
                    </div>
                </div>
                <div class="card border-0 bg-transparent mb-3">
                    <div class="card-header bg-transparent " id="headingThree3">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed d-flex justify-content-between"
                                type="button" data-toggle="collapse" data-target="#collapse_6" aria-expanded="false"
                                aria-controls="collapse_6" onclick="toggleImage(6)">
                                <span> 3. Experiment</span> <img id="iconImage_6"
                                    src="{{ asset('img/icons/remove-circle.png') }}" alt="">
                            </button>
                        </h2>
                    </div>
                    <div id="collapse_6" class="collapse" aria-labelledby="headingThree3"
                        data-parent="#accordionExample1">
                        <div class="card-body">
                            And lastly, the placeholder content for the third and final accordion panel. This panel
                            is hidden by default.
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <p class="blog-content-summary p-2 mt-5">in summary How to Follow Digital Trends to Drive SuccessStaying
        up-to-date
        with
        the latest
        digital
        trends is
        essential for driving success in any industry. To do so, it's important to stay informed by subscribing to
        industry newsletters, following thought leaders on social media, and attending industry events. Analyzing
        data, experimenting with new tactics, collaborating with other professionals, and adapting to change quickly
        are also important. By following these tips, you can stay ahead of the curve and drive success in the
        ever-evolving digital landscape.</p>
</div>

</div>
<!-- <div class="breadcrumb-area">
    <h1 class="breadcrumb-title">{{$blogsettings->meta_title}}</h1>
    <ul class="page-list">
        <li class="item-home"><a class="bread-link" href="{{ route('home') }}"
                title="Home">{{$blogsettings->breadcrumbs_anchor}}</a></li>
        <li class="separator separator-home"></li>
        <li class="item-current">{{$blogsettings->meta_title}}</li>
    </ul>
</div> -->

<div class="blog-page-section">
    <div class="container">
        <div class="row">

            <div class="col-md-8">

                @foreach($posts as $post)
                <article class="single-post blogloop-v2">
                    <div class="blog_custom">
                        <div class="post-thumbnail">
                            <a href="{{URL::to('/')}}/post/{{$post->slug}}">
                                <img class="blog_post_image img-fluid lazy" width="800" height="550"
                                    src="/public/img/loading-blog.gif"
                                    data-src="{{$post->photo ? '/public/images/media/' . $post->photo->file : '/public/img/200x200.png'}}"
                                    alt="{{$post->title}}">
                            </a>
                        </div>
                        <span class="post-date">{{ date('d.M.Y', strtotime($post->created_at)) }}</span>
                        <!-- POST DETAILS -->
                        <div class="post-details">
                            <div class="post-details-holder">
                                <div class="post-author-avatar">
                                    <img alt="" src="/public/img/loading-blog.gif"
                                        data-src="{{$post->user->photo ? '/public/images/media/' . $post->user->photo->file : '/public/img/200x200.png'}}"
                                        class="avatar img-fluid lazy" height="120" width="120">
                                </div>

                                <h2 class="post-name">
                                    <a title="{{$post->title}}" href="{{URL::to('/')}}/post/{{$post->slug}}">
                                        {{$post->title}}
                                    </a>
                                </h2>

                                <div class="post-category-comment-date">
                                    <span class="post-tags"><i class="fa fa-tag"></i>{{$post->category->name}}</span>
                                </div>

                                <div class="post-excerpt">
                                    <p>{{$post->meta_description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach




            </div> <!-- col 8 -->

            <div class="col-md-4">

                <div class="widget_element">
                    {!!$blogsettings->html_sidebar1!!}
                </div>

                <div class="widget_element">
                    {!!$blogsettings->html_sidebar2!!}
                </div>

            </div>

        </div>
    </div>
</div>



@endsection