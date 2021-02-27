<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    {{-- <title>@yield('title')</title> --}}
    <title>SF Update</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/img/favicon/64.png')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Slick CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->

    <!-- CSS
     ============================================ -->

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">

     <!-- Icon Font CSS -->
     <link rel="stylesheet" href="{{asset('public/css/icons.min.css')}}">

     <!-- Plugins CSS -->
     <link rel="stylesheet" href="{{asset('public/css/plugins.css')}}">

     <!-- Main Style CSS -->
     <link rel="stylesheet" href="{{asset('public/css/style.css')}}">

     <!-- Modernizer JS -->
     <script src="{{asset('public/js/modernizr-2.8.3.min.js')}}"></script>
     @yield('my-css')
     <style>
        html, body {
            /font-family: Open Sans;/
            font-family: 'Open Sans', sans-serif;
        }

        .navs--link {
            font-size: 20px;
        }

        #navbar--atas ul li a{
            color: white;
        }

        .main-menu nav ul li ul.submenu li a::before {
            background: #1199aa none repeat scroll 0 0;
            border-radius: 50%;
            content: "";
            height: 7px;
            left: 15px;
            opacity: 0;
            position: absolute;
            top: 13px;
            transition: all 0.3s ease-in-out 0s;
            width: 7px;
            z-index: 999;
        }

        #border--btm {
            border-bottom: 1px solid #2ea5b5;
        }

        .main-menu nav ul li a {
            font-size: 14px;
            text-transform: capitalize;
            display: inline-block;
            line-height: 87px;
        }

        .shaddow {
            box-shadow:0 0 15px rgba(0, 0, 0, 0.15);
        }

        .text--success {
            color: #016a53;
        }

        .text--warning {
            color: #febb58;
        }

        .text--secondary {
            color: #627078;
        }

        .text--blue {
            color: #1199aa;
        }

        .footer-menu nav ul li {
          display: inline-block;
          margin-left: 20px;
          position: relative; }

        .menu--footer {
          text-align: right;
        }

        .bg-head{
             background-color: #1198aa
        }

        .sticky-bar.stick{
             background-color: #1198aa;
        }

        .sf-image img{
             margin-top: 15px;
        }

        .menuToggle {
             background: inherit;
            float: left;
            min-height: 0;
            position: relative;
            width: 100%;
            z-index: 1;
        }

        #menuToggle {
             color: #fff;
             cursor: pointer;
             display: block;
             float: right;
             font-size: 1px;
             font-weight: 700;
             height: 22px;
             line-height: 22px;
             padding: 4px 0 4px 5px;
             position: absolute;
             /* right: 0; */
             text-decoration: none;
             top: -42px;
             width: 18px;
        }

        #menuToggle span {
              display: block;
              width: 35px;
              height: 3px;
              margin-bottom: 10px;
              position: relative;
              background: #ffffff;
              border-radius: 3px;
              z-index: 1;
              transform-origin: 4px 0px;
              transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0), background 0.5s cubic-bezier(0.77,0.2,0.05,1.0), opacity 0.55s ease;
       }

        .span-3 {
              width: 20px !important;
        }

        h2 .light--color {
            color: #203745;
        }

        .tanggal {
            font-size: 16px;
        }

        .text--judul {
            line-height: 22px;
        }

        .slick-next{
             right: 40px;
        }

        .slick-prev{
             left: 30px;
             z-index: 99;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
        .menu--footer {
            text-align: left;
            }
        }

        @media only screen and (max-width: 767px) {
            .menu--footer {
                text-align: left;
            }

            /* Ini Untuk di program */
            .img--program {
				margin-top: 20%;
			}

			.text--program {
				margin-top: 5% !important;
			}

			/* Ordering CSS Flexing */
			.wrap {
				display: flex;
				flex-direction: row;
			}
			/* Ini untuk photography */
			.box:nth-child(1) { order: 2; }
			.box:nth-child(2) { order: 1; }
        }

        @media only screen and (min-width: 500px) and (max-width: 767px) {
        .menu--footer {
            text-align: left;
            }
        }

        @media screen and (max-width: 780px) {
             .header-bottom{
                  position: absolute;
                  width: 100%;
                  z-index: 99;
                  padding: 12px 0;
             }
             .sf-image {
                  margin-left: 5px;
             }
             .sf-image img{
                  margin-top: 0;
             }
             .nav-active {
                  transform: translateX(0) !important;
             }
             .c-active{
                  background-color: #1596ab;
                  height: 75px;
                  border-bottom: 1px solid #1fa1b3;
             }
             .nav-links {
                   position: fixed;
                   left: 0;
                   height: 100vh;
                   top: 0vh;
                   background-color: #1199a9;
                   display: flex;
                   /* z-index: 999; */
                   flex-direction: column;
                   /* align-items: center; */
                   width: 60%;
                   /* padding: 75px 0 0 35px; */
                   /* justify-content: center; */
                   transform: translateX(-100%);
                   transition: transform 0.5s ease-in;
            }
            .nav-links ul{
                 padding: 20px 0 0 20px;
            }
            .font-werd{
                font-size: 18px;
                font-weight: 400;
                line-height: 40px;
            }
            .lm-40{
                 margin-left: 60px;
                 z-index: 9;
            }
            #navbar--atas{
                 padding-top: 10px;
                 padding-bottom: 60px;
            }
            .ftr-mz{
                 display: table-row;
            }
            .ftr-mz .pl-5{
                 display: inline-block;
                 padding-left: 0 !important;
            }
            .footer-menu nav ul li{
                 margin: 20px 20px 0px 15px;
            }
            .ftr-mz .pl-5 a{
                 font-size: 18px;
                 font-weight: 600;
            }
        }

        .parent {
            display: block;
            position: relative;
            float: left;
            background-color: #1198aa;
            width: 100%;}
        .parent a{
            color: #FFFFFF;
            text-decoration: none;}
        .parent a:before{
            display: none;
            text-decoration: none;}

        li.parent a i.faOne::before{
            position: absolute;
            margin-top: -10px;
            margin-left: 21px;
        }
        li.parent:hover a i.faOne::before {
            transform: rotate(180deg);
            transition: transform 200ms ease;
        }
        li.parent a i.faTwo::before{
            position: absolute;
            margin-top: -43px;
            margin-left: 21px;
        }
        li.parent:hover a i.faTwo::before {
            transform: rotate(180deg);
            transition: transform 200ms ease;
        }
        .parent:hover > ul {
            display:block;
            position:absolute;}
        .child {
            display: none;}
        .child li {
            background-color: #1198aa;
            width:100%;}
        .child li a{
            color: #000000;}
        ul{
            list-style: none;
            margin: 0;
            padding: 0px;
            min-width:10em;}
        ul ul ul{
            left: 100%;
            top: 0;
            margin-left:1px;}
        .main-menu nav ul li ul.submenu li.parent ul.child li {
            width: 200px;
            text-decoration: none;
            padding-left: 15px;
        }
        .main-menu nav ul li ul.submenu li.parent ul.child li:hover a {
            padding-left: 8px;
            text-decoration: none;
        }
        .main-menu nav ul li ul.submenu li.parent ul.child li a::before{
            display: none;
        }
        .main-menu nav ul li ul.submenu li.parent:hover a {
            padding-left: 0px;
        }
      </style>
  </head>

  <body>
    <header class="header-area">

        <div class="header-bottom sticky-bar clearfix bg-head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-4 lm-40">
                         <a href="{{url('/')}}" class="sf-image">
                             <img alt="" src="{{asset('public/img/Logo SF.png')}}" width="150px">
                         </a>
                    </div>
                    <div class="col-lg-10 col-md-6 col-8">
                        <div class="menu-cart-wrap">
                            <div class="main-menu">
                                <nav id="navbar--atas">
                                    <ul>
                                        <li class="pl-5"><a href="{{url('/')}}" id="nav--link" style="font-size: 15px;">Home<i class="fa fa-angle-down text-white"></i></a>
                                            <ul class="submenu" style="background-color: #1198aa;">
                                                <li id="border--btm"><a href="{{url('/visi-misi')}}">Visi - Misi</a></li>
                                                <li id="border--btm"><a href="{{url('/struktur')}}">Struktur Organisasi</a></li>
                                                <li id="border--btm"><a href="{{url('/regulasi')}}">Regulasi</a></li>
                                                <li id="border--btm"><a href="{{url('/goals')}}">Sustainable Development Goals</a></li>
                                                <li id="border--btm"><a href="{{url('/kontak')}}">Kontak</a></li>
                                            </ul>
                                        </li>
                                        {{-- <li class="pl-5"><a href="javascript:void(0)" id="nav--link" style="font-size: 15px;">Program<i class="fa fa-angle-down text-white"></i></a>
                                            <ul class="submenu" style="background-color: #1198aa;">
                                                <li><a href="{{url('/program-green')}}" id="border--btm">Green Financing</a></li>
                                                <li><a href="{{url('/program-governance')}}" id="border--btm">Governance</a></li>
                                                <li><a href="{{url('/program-capacity')}}" id="border--btm">Capacity Building</a></li>
                                                <li><a href="{{url('/program-efficiency')}}" id="border--btm">Efficiency</a></li>
                                                <li><a href="{{url('/program-socio')}}" id="border--btm">Socio-Economic Development</a></li>
                                                <li><a href="{{url('/program-spiritual')}}" id="border--btm">Spiritual Development</a></li>
                                                <li><a href="{{url('/program-people')}}" id="border--btm">People Development</a></li>
                                                <li><a href="{{url('/program-environment')}}" id="border--btm">Environment Development</a></li>
                                            </ul>
                                        </li> --}}
                                        <li class="pl-5"><a href="javascript:void(0)" id="nav--link" style="font-size: 15px;">Program<i class="fa fa-angle-down text-white"></i></a>
                                            <ul id="menu" class="submenu" style="background-color: #1198aa;">
                                                <li class="parent" id="border--btm"><a href="javascript:;">Business & Support<i class="fa faOne fa-angle-right text-white"></i></a>
                                                    <ul class="child pl-1 pt-1">
                                                        <li id="border--btm"><a href="{{url('/program-green')}}">Green Financing</a></li>
                                                        <li id="border--btm"><a href="{{url('/program-governance')}}">Governance</a></li>
                                                        <li id="border--btm"><a href="{{url('/program-capacity')}}">Capacity Building</a></li>
                                                        <li id="border--btm"><a href="{{url('/program-efficiency')}}">Efficiency</a></li>
                                                    </ul>
                                                </li>
                                                <li class="parent iTwo" id="border--btm"><a href="javascript:;">Tanggung Jawab Sosial & Lingkungan (TJSL)<i class="fa faTwo fa-angle-right text-white"></i></a>
                                                    <ul class="child pl-1 pt-1">
                                                        <li id="border--btm"><a href="{{url('/program-socio')}}">Socio-Economic Development</a></li>
                                                        <li id="border--btm"><a href="{{url('/program-spiritual')}}">Spiritual Development</a></li>
                                                        <li id="border--btm"><a href="{{url('/program-people')}}">People Development</a></li>
                                                        <li id="border--btm"><a href="{{url('/program-environment')}}">Environment Development</a></li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                        {{-- <li class="pl-5"><a href="{{url('/all-kegiatan')}}" id="nav--link" style="font-size: 15px;">Kegiatan</a></li> --}}
                                        <li class="pl-5"><a href="{{url('/all-sf-update')}}" id="nav--link" style="font-size: 15px;">SF Update</a></li>
                                        <li class="pl-5"><a href="{{url('/laporan')}}" id="nav--link" style="font-size: 15px;">Laporan</a></li>
                                    </ul>
                                </nav>
                            </div>
                        <!-- <div class="cart-search-wrap">
                            <div class="cart-wrap">
                                <button class="icon-cart">
                                    <i class="fa fa-cart-plus"></i>
                                    <span class="count-style">02</span>
                                </button>
                                <div class="shopping-cart-content">
                                    <ul>
                                        <li class="single-shopping-cart">
                                            <div class="shopping-cart-img">
                                                <a href="#"><img alt="" src="assets/img/cart/cart-1.png"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="#">Color Box </a></h4>
                                                <h6>Qty: 02</h6>
                                                <span>$260.00</span>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fa fa-times-circle"></i></a>
                                            </div>
                                        </li>
                                        <li class="single-shopping-cart">
                                            <div class="shopping-cart-img">
                                                <a href="#"><img alt="" src="assets/img/cart/cart-2.png"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="#">Color Box </a></h4>
                                                <h6>Qty: 02</h6>
                                                <span>$260.00</span>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fa fa-times-circle"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-total">
                                        <h4>Shipping : <span>$20.00</span></h4>
                                        <h4>Total : <span class="shop-total">$260.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-btn">
                                        <a class="default-btn btn-hover" href="cart.html">view cart</a>
                                        <a class="default-btn btn-hover" href="checkout.html">checkout</a>
                                    </div>
                                </div>
                            </div>
                            <div class="header-search">
                                <button class="search-toggle">
                                    <i class="fa fa-search"></i>
                                </button>
                                <div class="search-content">
                                    <form action="#">
                                        <input type="text" placeholder="Search">
                                        <button>
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                     <!-- <nav id="mobile-menu-active">
                         <ul class="menu-overflow">
                             <li><a href="{{url('/')}}">Home</a>
                                 <ul>
                                     <li><a href="{{url('/visi-misi')}}">Visi - Misi</a></li>
                                     <li><a href="{{url('/struktur')}}">Struktur Organisasi</a></li>
                                     <li><a href="{{url('/regulasi')}}">Regulasi</a></li>
                                     <li><a href="{{url('/goals')}}">Sustainable Development Goals</a></li>
                                     <li><a href="{{url('/kontak')}}">Kontak</a></li>
                                 </ul>
                             </li>
                             <li><a href="javascript:void(0)">Program</a>
                                 <ul>
                                     <li><a href="{{url('/program-green')}}">Green Financing</a></li>
                                     <li><a href="{{url('/program-governance')}}">Governance</a></li>
                                     <li><a href="{{url('/program-capacity')}}">Capacity Building</a></li>
                                     <li><a href="{{url('/program-efficiency')}}">Efficiency</a></li>
                                     <li><a href="{{url('/program-socio')}}">Socio-Economic Development</a></li>
                                     <li><a href="{{url('/program-spiritual')}}">Spiritual Development</a></li>
                                     <li><a href="{{url('/program-people')}}">People Development</a></li>
                                     <li><a href="{{url('/program-environment')}}">Environment Development</a></li>
                                 </ul>
                             </li>
                             <li><a href="{{url('/all-kegiatan')}}">Kegiatan</a></li>
                             <li><a href="{{url('/all-sf-update')}}">SF Update</a>
                             </li>
                             <li><a href="{{url('/laporan')}}">Laporan</a></li>
                         </ul>
                     </nav> -->
                     <div class="menuToggle" style="width: 100%;">
                          <a href="#navs" id="menuToggle">
                               <span></span>
                               <span></span>
                               <span class="span-3"></span>
                          </a>
                          <nav class="codrops-demos" style="background:#fff; padding-top:0;">
                              <div class="row">
                                   <div class="nav-links">
                                        <div class="c-active"></div>
                                        <ul class="navbar-nav">
                                            <li class="nav-item" style="">
                                                <a href="{{url('/')}}" class="text-white font-werd">Home</a>
                                            </li>
                                            <li class="nav-item" style="">
                                                <a class="text-white font-werd">Program</a>
                                            </li>
                                            <li class="nav-item" style="">
                                                <a href="{{url('all-sf-update')}}" class="text-white font-werd">SF Update</a>
                                            </li>
                                            <li class="nav-item" style="">
                                                <a href="{{url('all-kegiatan')}}" class="text-white font-werd">Kegiatan</a>
                                            </li>
                                            <li class="nav-item" style="">
                                                <a href="{{url('laporan')}}" class="text-white font-werd">Laporan</a>
                                            </li>
                                        </ul>
                                   </div>
                              </div>
                         </nav>
                     </div>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('container-front')
<footer class="footer-area text-white" style="background-color: #1198aa">
    <div class="footer-top pt-50 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img alt="" src="{{asset('public/img/Logo SF.png')}}" class="img-fluid">
                </div>
                <div class="col-lg-8 menu--footer col-12">
                     <!-- <div class="list--menu flexing">
                          <div class="fl--xing-m">
                               <a href="#">
                                   <p class="dots">Pasang Mata</p>
                               </a>
                               <a href="#">
                                   <p class="dots">Ads</p>
                               </a>
                               <a href="#">
                                   <p class="dots">Forum</p>
                               </a>
                               <a href="#">
                                   <p class="dots">Event</p>
                               </a>
                          </div>
                       </div> -->
                 <div class="footer-menu">
                      <nav id="navbar--atas">
                        <ul class="ftr-mz">
                            <li class="pl-5"><a href="{{url('/')}}" id="nav--link">Home</a></li>
                            <li class="pl-5"><a href="{{url('/program-green')}}" id="nav--link">Program</a> </li>
                            {{-- <li class="pl-5"><a href="{{url('/all-kegiatan')}}" id="nav--link">Kegiatan</a></li> --}}
                            <li class="pl-5"><a href="{{url('/all-sf-update')}}" id="nav--link">SF Update</a></li>
                            <li class="pl-5"><a href="{{url('/laporan')}}" id="nav--link">Laporan</a></li>
                        </ul>
                      </nav>
                </div>
            </div>
                {{-- <div class="col-lg-5">
                    <label class="col-lg-1 text-right pl-5 col-4"><a href="{{url('/')}}">Home</a></label>
                    <label class="col-lg-1 text-right pl-5 col-4"><a href="{{url('')}}">Program</a></label>
                    <label class="col-lg-1 text-right pl-5 col-4"><a href="{{url('/all-kegiatan')}}">Kegiatan</a></label>
                    <label class="col-lg-1 text-right pl-5 col-4"><a href="{{url('/all-sf-update')}}">SF Update</a></label>
                    <label class="col-lg-1 text-right pl-5 col-4"><a href="{{url('/laporan')}}">Laporan</a></label>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-15 pb-15" style="background-color: #febb58;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center text-dark col-md-12">
                    <div class="copyright">
                        <p class="text-white font-w700">
                            Copyright 2020 - Goodeva Technology
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- JS
    ============================================ -->

    <!-- jQuery JS -->
    <script src="{{asset('public/js/jquery-1.12.4.min.js')}}"></script>
    <!-- Popper JS -->
    <script src="{{asset('public/js/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
    <!-- Plugins JS -->
    <script src="{{asset('public/js/plugins.js')}}"></script>
    <!-- Ajax Mail -->
    <script src="{{asset('public/js/ajax-mail.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('public/js/main.js')}}"></script>
    <!-- Slick JS-->
    <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
    <!-- Custom JS-->
    @yield('my-js')
    <script type="text/javascript">
         const navSlide = () => {
         const burger = document.querySelector('#menuToggle');
         const nav = document.querySelector('.nav-links');
         const navLink = document.querySelectorAll('.nav-links li');



         burger.addEventListener('click', ()=>{
     	   //toggle nav
     	   nav.classList.toggle('nav-active');

     	   //animate
     	   navLink.forEach((link, index) => {
     		  if(link.style.animation){
     			 link.style.animation = '';
     		  }else{
     			 link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
     		  }

     	   });
     	   //kurger bing animation
     	   burger.classList.toggle('toggle');
         });
        }

        navSlide();
     </script>

</body>

</html>