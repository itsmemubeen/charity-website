@extends('layout.master')
@section('content')
    <div class="donation mt-5">
        <div class="row no-gutters align-items-center">
            <div class="col-12 col-lg-6">
                <div class="slider">
                    <div class="donation__img">
                        <img src="{{ asset('assets/images/banners/'.$donation[0]->image) }}" alt="image" class="imgFluid">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="donation__content">
                    <h2>{{ $donation[0]->d_title }}</h2>
                    <p>{!! $donation[0]->d_desc !!}</p>
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8">
                            
                            <div class="chooseAmount">
                                <h3>Choose an amount to give</h3>
                                <ul>
                                    <li class="chooseAmountOptions" onclick="javascript:amount(20)">$20</li>
                                    <li class="chooseAmountOptions active"  onclick="javascript:amount(50)">$50</li>
                                    <li class="chooseAmountOptions"  onclick="javascript:amount(100)">$100</li>
                                </ul>
                                <ul>
                                    <li class="chooseAmountOptions" onclick="javascript:amount(1000)">$1000</li>
                                    <!-- <li class="amount--full">Other Amount</li> -->
                                    <!-- <li class="amount--full onClickShow"><span class="onClickShow--dollar">&dollar;</span><input type="text" placeholder="Other"><span class="onClickShow--state">USD</span></li> -->
                                    <form action="{{ url('charge') }}" method="post">
                                        @csrf
                                    <li class="amount--full amount--fullPrize p-0">
                                        <label for="donate1">
                                            <input type="text" hidden name="donation_id" value="{{ $donation[0]->id }}" id="">
                                            <input type="text" hidden name="user_id" value="{{ Auth::user()->id }}" id="">
                                            <span class="donate" onclick="" style="display: none;">Other Amount</span>
                                            <input type="number" name="amount" placeholder="$ Other" id="donate1">
                                        </label>
                                    </li>
                                </ul>
                                <input type="submit" class="themeBtn" name="submit" value="Donate">
                            </form>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function amount(amount){
            document.getElementById('donate1').value = amount;
        }
    </script>
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

@endsection