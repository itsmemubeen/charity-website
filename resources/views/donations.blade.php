@extends('layout.master')
@section('content')
  <div class="petitions mar-y">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <a href="{{ route('create_donation') }}" class="themeBtn">Create A Donation Goal</a>
        </div>
      </div>
      @if($donation->count() == 0)
          <div class="col-12">
              <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                  <div class="petitions-single__content">
                    <center><h5 class="title">No Donation Goals Found</h5></center>
                  </div>
                </div>
              </div>
          </div>
      @else
      <div class="row">
        @foreach($donation as $donations)
            <div class="col-12">
              <div class="petitions-single">
                <div class="row align-items-center">
                  <div class="col-12 col-lg-6">
                    <div class="petitions-single__img">
                      <img src="{{ asset('assets/images/banners/'.$donations->image) }}" alt="image" class="imgFluid" />
                    </div>
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="petitions-single__content">
                      <h5 class="title">{{ $donations->d_title }}</h5>
                      <p>
                       {!! $donations->d_desc !!}
                      </p>
                      <div class="results">
                        <span></span>
                        <p>
                          <span>${{ App\Models\Payment::raisedAmount($donations->id) }}</span>Raised -
                          <span>${{ $donations->d_amount }}</span>Goal
                        </p>
                        @if(App\Models\Payment::raisedAmount($donations->id) >= $donations->d_amount)
                            <a disabled href="#" class="themeBtn">Donation Closed</a>
                        @else
                            <a href="{{ url('donation/'.$donations->id) }}" class="themeBtn">Donate Now</a>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        @endforeach
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="themeBtn">Load More</a>
        </div>
      </div>
      @endif
    </div>
  </div>
@endsection