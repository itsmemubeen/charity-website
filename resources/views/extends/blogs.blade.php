<section class="cards">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card-header text-center">
                    <h1 class="wow pulse" data-wow-iteration="3" data-wow-duration="2s">
                        Our Bl<span>O</span>Gs
                    </h1>
                </div>
            </div>
        </div>
        @foreach ($blogs as $data)
        <div class="card-grp">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-5">
                    <div class="card-box card-box--sm">
                        <div class="card-img">
                            <a href="{{ url('detail/'.$data->id) }}">
                                <img src="{{ asset('assets/images/'.$data->image) }}" alt="image" class="imgFluid" />
                            </a>
                        </div>
                    <div class="card-content">
                            <a href="{{ url('detail/'.$data->id) }}" class="text-dark">
                                <h6 class="text-dark">{{ $data->title }}</h6>
                            </a>
                            <p>
                                {{ $data->short_description }}
                            </p>
                            <div class="details">{{ App\Models\Goal::goalName($data->goal_id) }}</div>
                            <div class="card-btn">
                                <a href="{{ url('detail/'.$data->id) }}">READ MORE<i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="end-card-btn">
                    <div class="view-btn">
                        <a href="charitie.html">VIEW MORE<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>