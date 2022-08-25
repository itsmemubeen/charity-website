@extends('layout.master')
@section('content')
	@if (Session::has('success'))
			<div class="alert alert-success" id="success" style="color: #155724;background-color: #d4edda;border-color: #c3e6cb;z-index: 100;width: fit-content;float: right;margin: 74px 35px 0 0;position: absolute;right: 18px;top: 61px;">
				<ul>
					<li>{!! Session::get('success') !!}</li>
				</ul>
			</div>
		@endif
    <div class="donation mt-5">
        <div class="row no-gutters align-items-center">
            <div class="col-12 col-lg-6">
                <div class="slider">
                    <div class="donation__img">
                        <img src="{{ asset('public/assets/images/banners/'.$petition->image) }}" alt="image" class="imgFluid">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="donation__content">
                    <h2>{{ $petition->p_title }}</h2>
                    <p>{{ $petition->p_desc }}</p>
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8">
                            <form method="post" action="{{ url('signpetition') }}">
                                
                                <input type="text" hidden name="_token" value="{{ csrf_token() }}">
                                <input type="text" hidden name="u_id" value="{{ Session::get('id') }}">
                                <input type="text" hidden name="p_id" value="{{ $petition->id }}">
                                <div class="chooseAmount">
                                    <input type="submit" class="themeBtn" value="Signed Now As {{ Session::get('email') }}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Goals -->
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
                <div class="col-12 col-lg-4">
                    <a href="#">
                        <div class="services-card cardHover services-card--overlay wow zoomIn">
                            <div class="services-card__img cardHoverImg">
                                <img src="{{ asset('public/assets/images/goals-img-1') }}-new.png" alt="image" class="imgFluid" />
                            </div>
                            <div class="services-card__content">
                                <p>
                                    Zero Hunger
                                    <!--<a href="goals-hunger.html" class="themeBtn mt-3 w-50 ml-auto mr-auto">Learn More</a>-->
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-4">
                    <a href="#">
                        <div class="services-card cardHover services-card--overlay wow zoomIn">
                            <div class="services-card__img cardHoverImg">
                                <img src="{{ asset('public/assets/images/goals-img-2') }}-new.png" alt="image" class="imgFluid" />
                            </div>
                            <div class="services-card__content">
                                <p>
                                  No Poverty
                                <!--<a href="goals.html" class="themeBtn mt-3 w-50 ml-auto mr-auto">Learn More</a>-->
                                 </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-4">
                    <a href="#">
                        <div class="services-card cardHover services-card--overlay wow zoomIn">
                            <div class="services-card__img cardHoverImg">
                                <img src="{{ asset('public/assets/images/goals-img-3') }}-new.png" alt="image" class="imgFluid" />
                            </div>
                            <div class="services-card__content">
                                <p>
                                    Ecological Preservation
                                    <!--<a href="goals.html" class="themeBtn mt-3 w-50 ml-auto mr-auto">Learn More</a>-->
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-4">
                    <a href="#">
                        <div class="services-card cardHover services-card--overlay wow zoomIn">
                            <div class="services-card__img cardHoverImg">
                                <img src="{{ asset('public/assets/images/goals-img-4') }}-new.png" alt="image" class="imgFluid" />
                            </div>
                            <div class="services-card__content">
                                <p>
                                    Reduced Carbon Footprint
                                    <!--<a href="goals.html" class="themeBtn mt-3 w-50 ml-auto mr-auto">Learn More</a>-->
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-4">
                    <a href="#">
                        <div class="services-card cardHover services-card--overlay wow zoomIn">
                            <div class="services-card__img cardHoverImg">
                                <img src="{{ asset('public/assets/images/goals-img-5') }}-new.png" alt="image" class="imgFluid" />
                            </div>
                            <div class="services-card__content">
                                <p>
                                    Quality Education
                                    <!--<a href="goals.html" class="themeBtn mt-3 w-50 ml-auto mr-auto">Learn More</a>-->
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-4">
                    <a href="#">
                        <div class="services-card cardHover services-card--overlay wow zoomIn">
                            <div class="services-card__img cardHoverImg">
                                <img src="{{ asset('public/assets/images/goals-img-6') }}-new.png" alt="image" class="imgFluid" />
                            </div>
                            <div class="services-card__content">
                                <p>
                                    Clean Water
                                    <!--<a href="goals.html" class="themeBtn mt-3 w-50 ml-auto mr-auto">Learn More</a>-->
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
<script>
            var myVar;    
            function showTime(){
                $("#success").remove();
            }
            $(document).ready(function(){
                myVar = setInterval("showTime()", 3000);
            });
        </script>
@endsection