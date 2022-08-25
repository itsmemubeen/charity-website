@extends('layout.master')
@section('title','Invulc | About Us')
@section('content')
   <section class="about-us mt-5">
    <div class="container">
      <div class="textDocument my-5">
        <h2 class="wow pulse text-center" data-wow-iteration="3" data-wow-duration="3s">
          About Us
        </h2>
        <div class="about-main mt-5">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="about-main__content">
                <p>INVULC means to invent universal change. We strive to cover the six key goals to progress our society: zero hunger, no poverty, sustainability, ecological preservation, quality education, and clean water.</p>
                <p>Our vision is to create a world where people don’t have to be worried about their education, their next meal, or their next sip of water. A world where the fish disappearing from the oceans is not feared and forests can preserve their ecosystem. A world where our planet's future is not uncertain, but rather safe. We hope to achieve this by raising awareness about these issues, ensuring that anyone can help, and dedicating their help towards the issues they care about with confidence.</p>
              </div>
            </div>
            <div class="col-12">
              <div class="about-main__img">
                <img src="{{ asset('assets/images/volunteering-img-1.jpg') }}" alt="image" class="imgFluid">
              </div>
            </div>
          </div>
        </div>
        <h3 class="wow pulse mt-5" data-wow-iteration="3" data-wow-duration="3s">Our GOALS:</h3>
        <p>
          Focused on six distinct categories, our goals aim to cater to a vast expanse of our world’s problems. Our primary focus on hunger, poverty, sustainability, ecological preservation, education, and clean water helps us expand on two of our world’s most populated issues: The environment and people’s struggles.
        </p>
        <a href="{{ route('goals') }}" class="themeBtn">Learn More <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </section>

  <!-- team -->
  <div class="team py-5">
    <div class="container">
      <div class="textDocument mt-5">
        <h2 class="wow pulse text-center" data-wow-iteration="3" data-wow-duration="3s">
          Meet The Team
        </h2>
      </div>
      <ul class="team-detailsWrapper my-5">
        <li class="team-details">
          <div class="team__img">
              <img src="{{ asset('assets/images/team-meet-img-1.jpeg') }}" alt="image" class="imgFluid">
          </div>
          <div class="team__content">
            <h6>Ruchir Adenwala</h6>
            <p>President</p>
          </div>
        </li>
        <li class="team-details">
          <div class="team__img">
              <img src="{{ asset('assets/images/team-meet-img-2.jpeg') }}" alt="image" class="imgFluid">
          </div>
          <div class="team__content">
            <h6>Sean Lee</h6>
            <p>Vice President</p>
          </div>
        </li>
        <li class="team-details">
          <div class="team__img">
              <img src="{{ asset('assets/images/team-meet-img-3.jpeg') }}" alt="image" class="imgFluid">
          </div>
          <div class="team__content">
            <h6>Daisy Chang</h6>
            <p>Secretary</p>
          </div>
        </li>
        <li class="team-details">
          <div class="team__img">
              <img src="{{ asset('assets/images/team-meet-img-4.png') }}" alt="image" class="imgFluid">
          </div>
          <div class="team__content">
            <h6>Aarya Oswal</h6>
            <p>Treasurer</p>
          </div>
        </li>
        <!--<li class="team-details">-->
        <!--  <div class="team__img"></div>-->
        <!--  <div class="team__content">-->
        <!--    <h6>Person Name</h6>-->
        <!--    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi a non deleniti repellendus omnis nisi!-->
        <!--      Ullam, sint Libero animi assumenda maxime.</p>-->
        <!--  </div>-->
        <!--</li>-->
      </ul>
    </div>
  </div>
@endsection