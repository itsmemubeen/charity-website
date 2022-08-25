@extends('layout.master')
@section('content')
    <div class="qualityEducation">
        <div class="sectionContent text-center">
            <h1>{{ $data[0]->title }}</h1>
        </div>
        <div class="container">
            <div class="goals-details mt-5">
                <div class="row align-items-center">
                     <div class="col-12">
                        <div class="card-header bg-color-transparent text-center">
                            <h1 class="wow pulse p-0" data-wow-iteration="3" data-wow-duration="2s">
                                Ab<span>O</span>ut The Goal
                            </h1>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="goals-details__img">
                            <img src="{{ asset('assets/images/'.$data[0]->image) }}" alt="image" class="imgFluid"/>
                            <!--<img src="images/goals-img-5-new.png" alt="image" class="imgFluid">-->
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="goals-details__content">
                            <p>{{ $data[0]->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('extends.services')
    @include('extends.blogs')

@endsection