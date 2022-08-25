<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title')</title>
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet" />
    <link href="https://ianlunn.github.io/Hover/css/hover.css" rel="stylesheet" />
    <link href="{{ asset('assets/css/slick-theme.css') }}" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" /> -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" rel="stylesheet" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- Header Start -->
	
    <header class="header__main header-inner">
        <div class="header-logo wow pulse" data-wow-iteration="3" data-wow-duration="2s">
            <a href="{{ url('/') }}"><img src="{{ asset('assets/images/invulc-logo.png') }}" alt="logo" class="imgFluid" /></a>
        </div>
        <ul class="header__nav">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ route('aboutus') }}">About</a>
                <ul class="dropDown">
                    <li><a href="#">Our mission</a></li>
                    <li><a href="{{ route('finances') }}">Finances/Charities</a></li>
                </ul>
            </li>
            <li><a href="{{ route('charity') }}">Donate</a></li>
            <li><a href="{{ url('/#goals') }}">Goals</a></li>
            <li><a href="{{ url('/#contact') }}">Contact</a></li>
            @guest
            @if (Route::has('login'))
                <li>
                    <a href="{{ route('login') }}" class="btn hvr-grow"><i class="fa-solid fa-user"></i> {{ __('Login') }}
                <i class="fa-solid fa-arrow-right"></i></a>
                </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <li>
                    <a href="{{ route('create_petition') }}" class="btn hvr-grow">{{ __('Create Petition') }}</a>
                </li>
                <li>
                    <a href="{{ route('create_donation') }}" class="btn hvr-grow">{{ __('Create Donation') }}</a>
                </li>
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->f_name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
            <li>
                <a href="javascript:void(0)" data-toggle="modal" data-target="#signInModal"><i
                        class="fa-solid fa-magnifying-glass"></i></a>
            </li>
        </ul>
    </header>
	@if (Session::has('success'))
			<div class="alert alert-success" id="success-msg" style="color: #155724;background-color: #d4edda;border-color: #c3e6cb;z-index: 100;width: fit-content;float: right;margin: 74px 35px 0 0;position: absolute;right: 18px;top: 50px;">
				<ul>
					<li>{!! Session::get('success') !!}</li>
				</ul>
			</div>
		@endif
		@if (Session::has('error'))
			<div class="alert alert-danger" style="z-index: 100;width: fit-content;float: right;margin: 74px 35px 0 0;position: absolute;right: 18px;top: 138px;">
				<ul>
					<li>{!! Session::get('error') !!}</li>
				</ul>
			</div>
		@endif
	@yield('content')
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="invulc-footer">
                        <a href="index.html"><img src="{{ asset('assets/images/invulc-footer-logo.png') }}" class="imgFluid" /></a>
                        <p>
                            Organization promoting UNIVERSAL CHANGE!!
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-2 offset-lg-1">
                    <div class="useful-links">
                        <h5>USEFUL LINKS</h5>
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ url('/aboutus') }}">About Us</a>
                            </li>
                            <li>
                                <a href="#">Blogs</a>
                            </li>
                            <!--<li>-->
                            <!--    <a href="#">F.A.Qs</a>-->
                            <!--</li>-->
                            <li>
                                <a href="/#contact">Contacts</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="Contacts">
                        <h5>CONTACTS</h5>
                        <ul>
                            <!--<li>-->
                            <!--    <i class="fa-solid fa-location-dot"></i>2130 Fulton Street,-->
                            <!--    San Diego,-->
                            <!--</li>-->
                            <!--<h6>CA 94117-1080 USA</h6>-->
                            <!--<li>-->
                            <!--    <a href="tel:111-222-333"><i class="fa-solid fa-phone"></i>111-222-333</a>-->
                            <!--</li>-->
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                <a href="#">info@invlc.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="news-latter">
                        <h5>NEWS LETTER</h5>
                        <ul>
                            <!--<li><a href="#">Testimonials</a></li>-->
                            <!--<li><a href="#">FAQ</a></li>-->
                            <!--<li><a href="#">Press</a></li>-->
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                    <div class="search-email">
                        <input type="text" placeholder="SEARCH EMAIL" /><i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="line">
            <hr />
        </div>
        <div class="copy-right text-center">
            <h6>© 2022 INVULC . All Rights Reserved</h6>
        </div>
    </footer>

    <!-- footer End -->

    <!-- Modal -->

    <div class="modal fade" id="signInModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button> -->
                <div class="modal-body">
                    <form method="post" action="{{ route('search') }}">
                        <input type="text" hidden name="_token" value="{{ csrf_token() }}"/>
                        <input type="search" placeholder="Search..." name="search" />
                        <button type="submit"><i class="bx bx-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign Up Modal -->

</body>
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<!-- <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script> -->
<script src="{{ asset('assets/js/ap0.p.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script>
		$('#summernote').summernote({
        placeholder: 'Hello bootstrap 4',
        tabsize: 2,
        height: 100,
          toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                //['fontname', ['fontname']],
               // ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'hr']],
                ['view', ['fullscreen', 'codeview']],
                ['help', ['help']]
              ],
              });
              
              
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script>
    $(function () {
        $(".chooseAmountOptions").on("click", function () {
            $(".chooseAmountOptions.active").removeClass("active");
            $(this).addClass("active");
        });
    });
    // $(function () {
    //     $(".amount--full").on("click", function () {
    //         $(".amount--full.onClickShow").removeClass("onClickShow");
    //         $(this).addClass("onClickShow");
    //     });
    // });

    const donate = document.querySelector(".donate");

    function myfunc() {
        donate.addEventListener("click", () => {
            donate.style = "display: none";
        });
    }
</script>
<script>
function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

</script>

</html>