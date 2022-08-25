<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link href="{{ asset('public/assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/css/slick.css') }}" rel="stylesheet" />
    <link href="https://ianlunn.github.io/Hover/css/hover.css" rel="stylesheet" />
    <link href="{{ asset('public/assets/css/slick-theme.css') }}" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" /> -->

    <link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css" rel="stylesheet" />
    <script
        src="https://www.paypal.com/sdk/js?client-id=AYHchnSdgQukAAPZ5P47pwXJzSp1xgM5ZGvj6FbJBVlEIZy-SuHwkz7DlcZB1EkN2ReA6Srzc1yrpPmB&components=buttons&currency=USD">
        </script>
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet" />

</head>

<body>
    <!-- Header Start -->

    <header class="header__main header-inner">
        <div class="header-logo wow pulse" data-wow-iteration="3" data-wow-duration="2s">
            <a href="index.html"><img src="{{ asset('public/assets/images/invulc-logo.png') }}" alt="logo"
                    class="imgFluid" /></a>
        </div>
        <ul class="header__nav">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('aboutus') }}">About</a></li>
            <li><a href="{{ url('goals') }}">Goals</a></li>
            <li><a href="{{ url('contactus') }}">Contact</a></li>
            <li>
                <?php if(Session::get('email')){ ?>
            <li><a href="{{ url('create_petition') }}">Create Petition</a></li>
            <li><a href="{{ url('create_donation') }}">Create Donation</a></li>
            <a href="{{ url('destroy') }}" class="btn hvr-grow"><i class="fa-solid fa-user"></i> {{
                \Session::get('name') }}
                <i class="fa-solid fa-arrow-right"></i></a>
            <?php }else{ ?>
            <a href="{{ url('login') }}" class="btn hvr-grow"><i class="fa-solid fa-user"></i> Log In
                <i class="fa-solid fa-arrow-right"></i></a>
            <?php } ?>
            </li>
            <li>
                <a href="javascript:void(0)" data-toggle="modal" data-target="#signInModal"><i
                        class="fa-solid fa-magnifying-glass"></i></a>
            </li>
        </ul>
    </header>


    <div class="profileSec mar-y">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="tab">
                        <button class="tablinks" onclick="openTab(event, 'profile')" id="defaultOpen">Profile</button>
                        <button class="tablinks" onclick="openTab(event, 'petition')">Petitions</button>
                        <button class="tablinks" onclick="openTab(event, 'donation')">Donations</button>
                    </div>

                    <div id="profile" class="tabcontent">
                        <h3 class="glyphicon glyphicon-user"> Profile</h3>
                        <div class="row">
                            <div class="dat-col col-md-12 titles">
							  <form method="POST" action="{{ route('update.user',$userdata->id) }}">
							  {!! csrf_field() !!}
							  <input type="hidden" name="table" value="users" />
							  <input type="hidden" name="action" value="update" />
							  <input type="hidden" name="route" value="/" />
							  <input type="hidden" name="msg" value="Profile Updated Successfully" />
								<div class="row justify-content-center">
								  <div class="col-12 col-lg-12">
									<div class="inputField-heading">
									  <label for="remember">First Name*:</label>
									</div>
									<div class="inputField">
									  <input type="text" name="f_name" value="{{ $userdata->f_name }}" placeholder="Enter First Name*:" />
									</div>
								  </div>
								  <div class="col-12 col-lg-12">
									<div class="inputField-heading">
									  <label for="remember">Last Name*:</label>
									</div>
									<div class="inputField">
									  <input type="text" name="l_name" value="{{ $userdata->l_name }}" placeholder="Enter Last Name*:" />
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-12 col-lg-12">
									<div class="inputField-heading">
									  <label for="remember">Country*:</label>
									</div>
									<div class="inputField">
									  <select name="country">
									  <option value="{{ $userdata->country }}">{{ $userdata->country }}</option>
										<option value="{{ $userdata->country }}">{{ $userdata->country }}</option>
									  </select>
									</div>
								  </div>
								</div>
								<div class="row justify-content-center">
								  <div class="col-12 col-lg-12">
									<button type="submit" class="themeBtn">Update</button>
								  </div>
								</div>
							  </form>
                            </div>
                        </div>
                    </div>

                    <div id="petition" class="tabcontent">
                        <h3>List of Petitions</h3>
                        <table class="rwd-table">
							<tr>
								<th>Id</th>
								<th>Title</th>
								<th>Description</th>
								<th>Image</th>
								<th>Action</th>
							</tr>
							@foreach($petitiondata as $pd)
							<tr>
								<td>{{ $pd->id }}</td>
								<td>{{ $pd->p_title }}</td>
								<td>{{ $pd->p_desc }}</td>
								<td><img src="{{ asset('public/assets/images/banners/'.$pd->image) }}" alt="image" width="30%" class="imgFluid" /></td>
								<td><a href="{{ url('delete_petition/'.$pd->id) }}">Delete</a></td>
							</tr>
							@endforeach
						</table>
                    </div>

                    <div id="donation" class="tabcontent">
                        <h3>List of Donations</h3>
                        <table class="rwd-table">
							<tr>
								<th>Id</th>
								<th>Title</th>
								<th>Description</th>
								<th>Donation Amount</th>
								<th>Image</th>
								<th>Action</th>
								
							</tr>
							@foreach($donationdata as $dd)
							<tr>
								<td>{{ $dd->id }}</td>
								<td>{{ $dd->d_title }}</td>
								<td>{{ $dd->d_desc }}</td>
								<td>{{ $dd->d_amount }}</td>
								<td><img src="{{ asset('public/assets/images/banners/'.$dd->image) }}" alt="image" width="30%" class="imgFluid" /></td>
								<td><a href="{{ url('delete_donation/'.$dd->id) }}">Delete</a></td>
							</tr>
							@endforeach
						</table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="invulc-footer">
                        <a href="index.html"><img src="{{ asset('public/assets/images/invulc-footer-logo.png') }}"
                                class="imgFluid" /></a>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea
                            aspernatur aliquam ratione praesentium officiis placeat iusto
                            excepturi et.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-2 offset-lg-1">
                    <div class="useful-links">
                        <h5>USEFUL LINKS</h5>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about-us.html">About Us</a>
                            </li>
                            <li>
                                <a href="#">Blogs</a>
                            </li>
                            <li>
                                <a href="#">F.A.Qs</a>
                            </li>
                            <li>
                                <a href="index.html#contact">Contacts</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="Contacts">
                        <h5>CONTACTS</h5>
                        <ul>
                            <li>
                                <i class="fa-solid fa-location-dot"></i>2130 Fulton Street,
                                San Diego,
                            </li>
                            <h6>CA 94117-1080 USA</h6>
                            <li>
                                <a href="tel:111-222-333"><i class="fa-solid fa-phone"></i>111-222-333</a>
                            </li>
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
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Press</a></li>
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
                    <form action="#">
                        <input type="search" placeholder="Search..." />
                        <button type="submit"><i class="bx bx-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign Up Modal -->

</body>
<script src="{{ asset('public/assets/js/jquery.js') }}"></script>
<script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('public/assets/js/slick.js') }}"></script>
<!-- <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script> -->
<script src="{{ asset('public/assets/js/ap0.p.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
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