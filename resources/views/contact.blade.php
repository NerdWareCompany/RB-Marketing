@extends('layouts.front')

@section('title') {{$contactsetting->meta_title}} @endsection
@section('meta') {{$contactsetting->meta_description}} @endsection


@section('content')


<div class="contact-breadcrumb-area">
    <div class="breadcrumb-area-content w-100 h-100 d-flex flex-column  justify-content-center align-items-center">
        <ul class="page-list d-flex flex-row  justify-content-around">
            <li class="item-home"><a class="bread-link" href="{{ route('home') }}" title="Home"> <i
                        class="fas fa-home mx-1"></i>{{$contactsetting->breadcrumbs_anchor}}</a></li>
            <li class="separator separator-home">/</li>
            <li class="item-current">{{$contactsetting->meta_title}}</li>
        </ul>
        <h1 class=" breadcrumb-title mt-5">Co<span>nt</span>act U<span>s</span></h1>
        <p class="mt-5 text-center text-white mb-5">We Will Always Love To Hear From You</p>
        <!-- <h1 class="breadcrumb-title">{{$contactsetting->meta_title}}</h1> -->

    </div>
</div>


<div class="contant-section-page">

    <div class="container">
        <div class="section-content text-center text-white">
            <h2 class="section-header">Get in touch with us</h2>
            <p class="section-description mt-3 mb-5">We're always happy to hear from you. Please feel free to get in
                touch by
                phone, email, or by filling out the contact form below.</p>
        </div>
        <div class="row">

            <div class="col-md-4">
                <div class="contact-element-wrapper">
                    <div class="contact-element">
                        <div class="icon"> {!!$contactsetting->box_icon1!!}</div>
                        <div class="content">
                            <h3 class="title">{!!$contactsetting->box_title1!!}</h3>
                            {!!$contactsetting->box_html1!!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-element-wrapper">
                    <div class="contact-element">
                        <div class="icon"> {!!$contactsetting->box_icon2!!}</div>
                        <div class="content">
                            <h3 class="title">{!!$contactsetting->box_title2!!}</h3>
                            {!!$contactsetting->box_html2!!}
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="contact-element-wrapper">
                    <div class="contact-element">
                        <div class="icon"> {!!$contactsetting->box_icon3!!}</div>
                        <div class="content">
                            <h3 class="title">{!!$contactsetting->box_title3!!}</h3>
                            {!!$contactsetting->box_html3!!}
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>

</div>

<div class="iframe-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <!-- <h3>{!!$contactsetting->form_title!!}</h3> -->

                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                {!! NoCaptcha::renderJs() !!}



                <form method="POST" class="border-0" action="{{route('contactPost')}}">

                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <input name="name" type="text" class="form-control" id="name" aria-describedby="name"
                                    placeholder=" {!!$contactsetting->form_input_name!!} ">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <input name="email" type="email" class="form-control" id="email"
                                    aria-describedby="emailHelp" placeholder="{!!$contactsetting->form_input_email!!}">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                        </div> -->
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <input name="phone" type="text" class="form-control" id="phone" aria-describedby="name"
                                    placeholder="{!!$contactsetting->form_input_budget!!}">
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group ">
                                <select class="form-control bg-white text-dark" id="exampleFormControlSelect1">
                                    <option disabled selected>which services you want ?</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row">

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <input name="budget" type="text" class="form-control" id="budget"
                                    aria-describedby="emailHelp" placeholder="{!!$contactsetting->form_input_phone!!}">
                                <span class="text-danger">{{ $errors->first('budget') }}</span>
                            </div>
                        </div>
                    </div> -->


                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <textarea name="comment" placeholder="{!!$contactsetting->form_message!!}" class="form-control"
                            id="exampleFormControlTextarea1" rows="5"></textarea>
                        <span class="text-danger">{{ $errors->first('comment') }}</span>
                    </div>




                    {!! NoCaptcha::display() !!}

                    @if ($errors->has('g-recaptcha-response'))
                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                    @endif


                    <button type="submit" class="btn btn-style1">{!!$contactsetting->button_text!!}</button>
                </form>
                <div class="row">
                    <div class="col-md-5">
                        <div class="contact-details text-white d-flex">
                            <div class="contact-icon-style d-flex justify-content-center align-items-center "> <img
                                    src="{{ asset('/img/icons/phone2-icon.png') }}" alt="">
                            </div>
                            <div class="contact-info">
                                <h5>Have a question?</h5>
                                <p>310-437-2766</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-details text-white d-flex">
                            <div class="contact-icon-style d-flex justify-content-center align-items-center "> <img
                                    src="{{ asset('/img/icons/mail-icon.png') }}" alt="">
                            </div>
                            <div class="contact-info">
                                <h5>Contact us</h5>
                                <p>evedesign@example.com</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="contact-details text-white d-flex">
                            <div class="contact-icon-style d-flex justify-content-center align-items-center "> <img
                                    src="{{ asset('/img/icons/location-icon.png') }}" alt="">
                            </div>
                            <div class="contact-info">
                                <h5>Need our location?</h5>
                                <p>First New Cairo, El Banafseg 6, villa 115 New Cairo, Cairo Governorate, Egypt 11865.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

            <div class="col-md-6">
                <!-- <h3> {!!$contactsetting->title!!}</h3> -->
                {!!$contactsetting->iframe_txt!!}
            </div>


        </div>
    </div>
</div>



<div class="clients-section">
    <div class="container">

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