@extends('layout.homemaster')
@section('title','Invulc | Home')
@section('content')
		@if (Session::has('success'))
			<div class="alert alert-success">
				<ul>
					<li>{!! Session::get('success') !!}</li>
				</ul>
			</div>
		@endif
    <section class="bannerMain">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="sliderOne">
                        <img src="{{ asset('assets/images/slider1.jpg') }}" alt="image" class="imgFluid" />
                    </div>
                    <div class="carousel-caption">
                        <div class="banner__content">
                            <h4>invulc</h4>
                            <h6>/in’vəlk/</h6>
                            <h5>See definitions in:</h5>
                            @foreach($page->chunk(3) as $data)
                                <ul>
                                    @foreach($data as $item)
                                        <li>
                                            <a href="{{ url('page/'.$item->slug) }}" class="">{{ $item->title }}</a>
                                        </li>
                                    @endforeach 
                                </ul>
                            @endforeach
                            <h5>verb</h5>
                            <ul class="verb">
                                <li>1. to invent universal change on a subject</li>
                            </ul>
                            <h6>“there are a lot of issues, lets’s just try to invulc”</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="goals wow fadeIn" id="goals">
        <div class="container">
            <div class="sectionHeading">
                <div class="card-header text-center">
                    <h2 class="wow pulse" data-wow-iteration="3" data-wow-duration="2s">
                        <span>G</span>OALS
                    </h2>
                </div>
            </div>
            <div class="row">
                @foreach ($page as $data)
                <div class="col-12 col-lg-4">
                    <a href="{{ url('page/'.$data->slug) }}">
                        <div class="services-card cardHover services-card--overlay wow zoomIn">
                            <div class="services-card__img cardHoverImg">
                                <img src="{{ asset('assets/images/'.$data->image) }}" alt="image" class="imgFluid" />
                            </div>
                            <div class="services-card__content">
                                <p>
                                    {{ $data->title }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- our-impact Start-->

    <section class="our-impact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4">
                    <div class="our-impact-content">
                        <h2 class="wow myPulse infinite" data-wow-duration="2s">
                            OUR IMPACT
                        </h2>
                        <p>
                            We aim to spread awareness globally, while providing for the six key goals of our organization. Members from all over the world can donate, volunteer, and sign petitions to support our cause.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="donate-amount">
                        <h2>DONATED : ${{ App\Models\Payment::countDonation() }} amount/GOAL</h2>
                        <h2>{{ App\Models\Petition::countPetitions() }} NUMBER OF PETITIONS</h2>
                        <h2>{{ App\Models\User::engagedUsers() }} NUMBER OF PEOPLE ENGAGED</h2>
                    </div>
                </div>
            </div>
            <div class="botton">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="card-btn impactBtn">
                            <a href="{{ url('petitions') }}">SIGN A PETITION!<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card-btn impactBtn">
                            <a href="{{ url('donations') }}">DONATE<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card-btn impactBtn">
                            <a href="{{ url('petitions') }}">GET INVOLVED<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="roadMap">
        <div class="container">
            <div class="sectionHeading">
                <div class="card-header text-center wow pulse" data-wow-iteration="3" data-wow-duration="2s">
                    <h1>R<span>O</span>AD MAP</h1>
                </div>
            </div>
            <div class="roadMapSteps">
                <div class="row no-gutters">
                    <div class="col-12 col-lg-4">
                        <div class="cardStep">
                            <div class="sectionHeading wow zoomInLeft" data-wow-duration="1s">
                                <h5>Step 1:</h5>
                                <h6>Raising Awareness</h6>
                                <p>We promote the signing of petitions to better instigate change through our organization. Petitions are free and easy! We hope to spread awareness through word of mouth, as well as broadening online social platforms.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4"></div>
                    <div class="col-12 col-lg-4">
                        <div class="cardStep">
                            <div class="sectionHeading wow zoomInRight" data-wow-duration="1.75s">
                                <h5>Step 3:</h5>
                                <h6>INVULC!</h6>
                                <p>Make a drastic impact through our organization and take us one step closer to Inventing Universal Change!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="roadMap__vector">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4"></div>
                    <div class="col-12 col-lg-4">
                        <div class="sectionHeading wow zoomInUp" data-wow-duration="2.45s">
                            <h5>Step 2:</h5>
                            <h6>Getting Involved</h6>
                            <p>We take volunteers from ANYWHERE! Email us or contact your high school branch -if applicable- to get started contributing to one to six of our key goals.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="newsletter">
        <div class="container">
            <div class="ourCommunity">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <div class="sectionHeading">
                            <div class="card-header text-center">
                                <h6>Join our community</h6>
                                <h4 class="p-0 my-3">
                                    Subscribe to <span> O</span>ur newsletter
                                </h4>
                            </div>
                            <p>
                                Want to recive updates on our impact and avalible opportunities?<span
                                    class="d-block">Subscribe below!</span>
                            </p>
                        </div>
                        <div class="row no-gutters justify-content-center">
                            <div class="col-12 col-lg-6">
                                <form action="#" class="newsLetter__form">
                                    <input type="email" placeholder="Your E-mail" />
                                    <button class="getStarted">Get Started</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('extends.blogs')
    <section class="get-in-touch">
        <div class="container">
            <div id="contact">
                <div class="title text-center">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8">
                            <div class="card-header text-center" style="background-color: transparent">
                                <h1 class="wow pulse" data-wow-iteration="3" data-wow-duration="2s">
                                    GET IN T<span>O</span>UCH
                                </h1>
                            </div>
                            <p>
                                If you have any specific questions or concerns regarding our organization, please feel free to contact us! We will reply to you in under 24 hours
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <form action="#">
                        <div class="get-in-touch-form">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-4">
                                    <div class="input-box">
                                        <input type="text" placeholder="First Name" />
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="input-box">
                                        <input type="text" placeholder="Last Name" />
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-4">
                                    <div class="input-box">
                                        <input type="text" placeholder="Phone Number" />
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="input-box">
                                        <input type="email" placeholder="Email" />
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-8">
                                    <div class="input-data">
                                        <textarea cols="10" rows="3" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-3">
                                    <button class="submitBtn">
                                        SUBMIT <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection