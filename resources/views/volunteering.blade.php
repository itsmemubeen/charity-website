@extends('layout.master')
@section('content')

    <!--<section class="bannerMain">-->
    <!--  <div-->
    <!--    id="carouselExampleIndicators"-->
    <!--    class="carousel slide"-->
    <!--    data-ride="carousel"-->
    <!--  >-->
        <!-- <ol class="carousel-indicators">
    <!--          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>-->
    <!--          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
    <!--          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
    <!--        </ol> -->-->
    <!--    <div class="carousel-inner">-->
    <!--      <div class="carousel-item active">-->
    <!--        <div class="sliderOne">-->
    <!--          <img src="{{ asset('public/assets/images/slider1.jpg') }}" alt="image" class="imgFluid" />-->
    <!--        </div>-->
    <!--        <div class="carousel-caption">-->
    <!--          <div class="banner__content">-->
    <!--            <h4>Goal Name Volunteering</h4>-->
    <!--            <p>-->
    <!--              Lorem Ipsum is simply dummy text of the printing and-->
    <!--              <span class="d-block"> typesetting industry.</span>-->
    <!--            </p>-->
                <!-- <ul>
    <!--                            <li class="hvr-wobble-skew hvr">No Poverty</li>-->
    <!--                            <li class="hvr-wobble-skew hvr">Education</li>-->
    <!--                            <li class="hvr-wobble-skew hvr">Ecological Preservation</li>-->
    <!--                        </ul> -->-->
                <!-- <ul>
    <!--                            <li class="hvr-wobble-skew hvr">Reduced Carbon Footproot</li>-->
    <!--                            <li class="hvr-wobble-skew hvr">Equality</li>-->
    <!--                            <li class="hvr-wobble-skew hvr">Sustainable</li>-->
    <!--                        </ul> -->-->
                <!-- <h5>verb</h5>
    <!--                        <ul class="verb">-->
    <!--                            <li>1. to invent universal change on a subject</li>-->
    <!--                        </ul> -->-->
                <!-- <h6>“there are a lot of issues, lets’s just try to invulc”</h6> -->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
        <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <!--          <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
    <!--          <span class="sr-only">Previous</span>-->
    <!--        </a>-->
    <!--        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">-->
    <!--          <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
    <!--          <span class="sr-only">Next</span>-->
    <!--        </a> -->-->
    <!--  </div>-->
    <!--</section>-->
    <!-- banner End  -->

    <!-- Volunteering -->
    <div class="volunteeringWrapper mar-y">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10">
            <div class="row">
              <div class="col-12">
                <div class="volunteering">
                  <div class="volunteering-header">
                    <h3>Opportunity Name</h3>
                    <p>Organizat ion name</p>
                  </div>
                  <div class="volunteering-body">
                    <div class="row align-items-center">
                      <div class="col-12 col-lg-7">
                        <div class="volunteering-body__img">
                          <img
                            src="{{ asset('public/assets/images/volunteering-img-1.jpg') }}"
                            alt="image"
                            class="imgFluid"
                          />
                        </div>
                      </div>
                      <div class="col-12 col-lg-5">
                        <div class="volunteering-body__content">
                          <h4>Title Goes Here</h4>
                          <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing
                            elit. Quibusdam aspernatur itaque tempore corrupti
                            culpa voluptates laboriosam distinctio recusandae.
                            Ad accusantium mollitia at sit, soluta voluptas
                            aperiam dolore exercitationem maiores, explicabo,
                            aspernatur reprehenderit. Magnam, eum aspernatur.
                          </p>
                          <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing
                            elit. Quibusdam aspernatur itaque tempore corrupti
                            culpa voluptates laboriosam distinctio recusandae.
                            Ad accusantium mollitia at sit, soluta voluptas
                            aperiam dolore exercitationem maiores, explicabo,
                            aspernatur reprehenderit. Magnam, eum aspernatur.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="volunteering-footer">
                    <ul>
                      <li>
                        <a href="#"><i class="fa-solid fa-rotate-right"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-xmark"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-heart"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-bolt"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection