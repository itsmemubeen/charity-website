@extends('layout.master')
@section('title',$data->title)
@section('content')

   <!-- Our Blogs -->

  <section class="cards mt-5 py-5">
    <div class="container">
        <div class="card-grp">
            <div class="card-box p-3 card-box--single">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="card-img">
                            <img src="{{ asset('assets/images/'.$data->image) }}" alt="image" class="imgFluid"/>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                <div class="card-content">
                    <h6>{{$data->title}}</h6>
                    <p>
                      {!! $data->short_description !!}
                </p>
                <div class="card-btn">
                  <a href="#">Take Action<i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
                </div>
            </div>
            <div class="row mt-5">
            <div class="col-12">
                <p>{!! $data->long_description !!}</p>
        </div>
      </div>
        </div>
    </div>
  </section>

@endsection