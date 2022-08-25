@extends('layout.master')
@section('content')

   <!-- Charity -->
    <section class="about-us mt-5">
        <div class="container">
            <div class="textDocument my-5">
                <h2 class="wow pulse text-center" data-wow-iteration="3" data-wow-duration="3s">
                    ABOUT CHARITIES/DONATIONS
                </h2>
                <div class="about-main mt-5">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12">
                            <div class="about-main__content">
                                <p>Here at Invulc we believe in maximizing the impact per dollar. We continuously work to find the best organizations that put your money to work. 100% of the money donated goes directly to the organization and cause of choice. This allows your donations to target causes you are passionate about and work towards inventing universal change!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="organization">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-6">
                                <div class="org-img">
                                    <img src="{{ asset('assets/images/Educational-Indoor-Activities-Charity.jpg') }}"
                                        alt="Activities-Charity">
                                    <div class="readingWrapper">
                                        <a href="#" class="reading"><span class="rating">0</span> <span class="ratingPlatform">lorem</span></a>
                                        <a href="#" class="reading"><span class="rating">0</span> <span class="ratingPlatform">lorem</span></a>
                                        <a href="#" class="reading"><span class="rating">0</span> <span class="ratingPlatform">lorem</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="org-content">
                                    <h3>Charity/Organization Name</h3>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

@endsection