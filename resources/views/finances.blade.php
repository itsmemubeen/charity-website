@extends('layout.master')
@section('content')

    <!-- Finances -->
    <div class="finances">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="finances__content text-center">
                        <p>Here at Invulc we believe in maximizing the impact per dollar. We continuously work to find
                            the best
                            organizations that put your money to work. 100% of the money donated goes directly to the
                            organization and cause of choice. This allows your donations to target causes you are
                            passionate
                            about and work towards inventing universal change!</p>
                    </div>
                </div>
            </div>
            <div class="finances-details">
                <div class="row align-items-center mt-5">
                    <div class="col-12 col-lg-4">
                        <div class="org-img finances-details__img">
                            <!--<img src="images/finances-img-1.png" alt="image" class="imgFluid">-->
                            <img src="{{ asset('public/assets/images/finances-img-1.png') }}" alt="image" class="imgFluid">
                            <div class="readingWrapper">
                                <a href="#" class="rating rating--tooltip" data-structure="Charity Navigator">
        <span>5/5</span>
        <img src="{{ asset('public/assets/images/top-rated.png') }}" alt="image" class="imgFluid">
      </a>
                                <!--<a href="#" class="reading"><span class="rating">4/4</span>-->
                                <!--<span class="ratingPlatform">-->
                                <!--    <img src="{{ asset('public/assets/images/rating-img-noamal.png') }}" alt="image" class="imgFluid normalImg"></span></a>-->
                                  <a href="#" class="rating rating--tooltip" data-structure="Charity Navigator">
        <span>20/20</span>
        <img src="{{ asset('public/assets/images/bbb-img.png') }}" alt="image" class="imgFluid">
      </a>
                                  <a href="#" class="rating" data-structure="Charity Navigator">
        <span>4/4</span>
        <img src="{{ asset('public/assets/images/rating-img-noamal.png') }}" alt="image" class="imgFluid">
      </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="finances-details__content finances-details__content--sm">
                            <h2>No Poverty</h2>
                            <p>Outreach International is dedicated towards helping communities overcome chronic poverty.
                                Their work supports constructing new water wells, establishing low-interest loan
                                programs,
                                repairing roads, growing vegetables, and more. Outreach international is focused on
                                providing sustainable opportunities that empower people to lift themselves. 100% of
                                donations go towards work in communities around the world.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="finances-details">
                <div class="row align-items-center mt-5">
                    <div class="col-12 col-lg-4">
                        <div class="org-img finances-details__img">
                            <img src="{{ asset('public/assets/images/finances-img-2.png') }}" alt="image" class="imgFluid">
                            <!--<img src="images/finances-img-2.png" alt="image" class="imgFluid">-->
                            <div class="readingWrapper">
                                <a href="#" class="rating" data-structure="Charity Navigator">
        <span>4/4</span>
        <img src="{{ asset('public/assets/images/rating-img-noamal.png') }}" alt="image" class="imgFluid">
      </a>
                                <!-- <a href="#" class="reading"><span class="rating">0</span> <span
                                        class="ratingPlatform">lorem</span></a>
                                <a href="#" class="reading"><span class="rating">0</span> <span
                                        class="ratingPlatform">lorem</span></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="finances-details__content finances-details__content--sm">
                            <h2>Quality Education</h2>
                            <p>Room to Read believes that change starts with education and opportunity. They work with
                                local communities, governments, and partner with organizations to encourage pursuing
                                higher education and developing the necessary skills to succeed in life. Over 95 percent
                                of their finances is working towards their program to benefit children or fundraising to
                                further these efforts.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="finances-details">
                <div class="row align-items-center mt-5">
                    <div class="col-12 col-lg-4">
                        <div class="org-img finances-details__img">
                            <img src="{{ asset('public/assets/images/finances-img-3.png') }}" alt="image" class="imgFluid">
                            <!--<img src="images/finances-img-3.png" alt="image" class="imgFluid">-->
                            <div class="readingWrapper">
                              <a href="#" class="rating" data-structure="Charity Navigator">
        <span>4/4</span>
        <img src="{{ asset('public/assets/images/rating-img-noamal.png') }}" alt="image" class="imgFluid">
      </a>
                                <!-- <a href="#" class="reading"><span class="rating">0</span> <span
                                        class="ratingPlatform">lorem</span></a>
                                <a href="#" class="reading"><span class="rating">0</span> <span
                                        class="ratingPlatform">lorem</span></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="finances-details__content finances-details__content--sm">
                            <h2>Ecological Preservation</h2>
                            <p>Founded in 2001, Oceana has grown to become the largest international organization
                                dedicated to ocean conservation. Their efforts are focused on achieving measurable
                                outcomes that will help restore the oceans to their former state. Most of their finances
                                are dedicated towards conserving the oceans along with expanding their reach. This
                                enables them to drive the largest impact they can through donated funds.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="finances-details">
                <div class="row align-items-center mt-5">
                    <div class="col-12 col-lg-4">
                        <div class="org-img finances-details__img finances-details__img--md">
                            <img src="{{ asset('public/assets/images/finances-img-4.png') }}" alt="image" class="imgFluid">
                            <!--<img src="images/finances-img-4.png" alt="image" class="imgFluid">-->
                            <div class="readingWrapper">
                               <a href="#" class="rating" data-structure="Charity Navigator">
        <span>4/4</span>
        <img src="{{ asset('public/assets/images/rating-img-noamal.png') }}" alt="image" class="imgFluid">
      </a>
                                <!-- <a href="#" class="reading"><span class="rating">0</span> <span
                                        class="ratingPlatform">lorem</span></a>
                                <a href="#" class="reading"><span class="rating">0</span> <span
                                        class="ratingPlatform">lorem</span></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="finances-details__content finances-details__content--sm">
                            <h2>Reduced Carbon Footprint</h2>
                            <p>The Climate Reality Project’s mission is to catalyze a global solution to the climate
                                crisis by making urgent action a necessity across every level of society. Over 90% of
                                the donated money goes directly towards creating a solution to the climate crisis with
                                the rest of the expenses going towards expanding and running the organization.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="finances-details">
                <div class="row align-items-center mt-5">
                    <div class="col-12 col-lg-4">
                        <div class="org-img finances-details__img">
                            <img src="{{ asset('public/assets/images/finances-img-5.png') }}" alt="image" class="imgFluid">
                            <!--<img src="images/finances-img-5.png" alt="image" class="imgFluid">-->
                            <div class="readingWrapper">
                                <a href="#" class="rating" data-structure="Charity Navigator">
        <span>4/4</span>
        <img src="{{ asset('public/assets/images/rating-img-noamal.png') }}" alt="image" class="imgFluid">
      </a>
                                <!-- <a href="#" class="reading"><span class="rating">0</span> <span
                                        class="ratingPlatform">lorem</span></a>
                                <a href="#" class="reading"><span class="rating">0</span> <span
                                        class="ratingPlatform">lorem</span></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="finances-details__content finances-details__content--sm">
                            <h2>Zero Hunger</h2>
                            <p>Feeding America has one goal, to provide food for people across America. They work with
                                200 foodbanks, host 60,000 programs, and serve 1 in 7 Americans. Every $1.00 donated
                                goes directly towards providing 10 meals for people in need.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="finances-details">
                <div class="row align-items-center mt-5">
                    <div class="col-12 col-lg-4">
                        <div class="org-img finances-details__img">
                            <img src="{{ asset('public/assets/images/finances-img-6.png') }}" alt="image" class="imgFluid">
                            <!--<img src="images/finances-img-6.png" alt="image" class="imgFluid">-->
                            <div class="readingWrapper">
                                <a href="#" class="rating" data-structure="Charity Navigator">
        <span>4/4</span>
        <img src="{{ asset('public/assets/images/rating-img-noamal.png') }}" alt="image" class="imgFluid">
      </a>
                                <!-- <a href="#" class="reading"><span class="rating">0</span> <span
                                        class="ratingPlatform">lorem</span></a>
                                <a href="#" class="reading"><span class="rating">0</span> <span
                                        class="ratingPlatform">lorem</span></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="finances-details__content finances-details__content--sm">
                            <h2>Clean Water</h2>
                            <p>Charity water is dedicated towards ending the water crisis. Every dollar donated is
                                tracked and its impact measured. They work with local partners towards making water
                                accessible for everyone. Every $40 donated equates to providing a year's worth of water
                                for 12 people. Since Charity Water’s operational costs are covered by private donors,
                                100% of the funds donated goes directly towards the mission.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection