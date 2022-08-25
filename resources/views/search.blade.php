@extends('layout.master')
@section('content')
  <div class="petitions mar-y">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <a href="{{ route('create_petition') }}" class="themeBtn">Create A petition</a>
        </div>
      </div>
      <div class="row">
          
  
    @if($petitions->count() == 0)
        <div class="col-12">
          <div class="petitions-single">
            <div class="row align-items-center">
              <div class="col-12 col-lg-6">
                <div class="petitions-single__img">
                </div>
              </div>
              <div class="col-12 col-lg-6">
                <div class="petitions-single__content">
                  <h5 class="title">No Data Found</h5>
                  <div class="results">
                    <span></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    @else
	  @foreach($petitions as $petition)
        <div class="col-12">
          <div class="petitions-single">
            <div class="row align-items-center">
              <div class="col-12 col-lg-6">
                <div class="petitions-single__img">
                  <img src="{{ asset('public/assets/images/banners/'.$petition->image) }}" alt="image" class="imgFluid" />
                </div>
              </div>
              <div class="col-12 col-lg-6">
                <div class="petitions-single__content">
                  <h5 class="title">{{ $petition->p_title }}</h5>
                  <p>
				  {!! $petition->p_desc !!}
                  </p>
                  <div class="results">
                    <span></span>
                    <p>
                      <span>34</span>,<span>672</span>signed out Of
                      <span>50,000</span>goal
                    </p>
                    <a href="{{ url('petition/'.$petition->id) }}" class="themeBtn">Sign Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		@endforeach
		@endif
      </div>
      <!--<div class="row">-->
      <!--  <div class="col-12">-->
      <!--    <a href="#" class="themeBtn">Load More</a>-->
      <!--  </div>-->
      <!--</div>-->
    </div>
  </div>
@endsection