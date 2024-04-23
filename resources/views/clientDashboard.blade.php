<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords"
        content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>shariki</title>
    <link rel="apple-touch-icon" href="/img/SHARIKI_LOGO-removebg-preview.png">
    <link rel="shortcut icon" type="image/x-icon" href="/img/SHARIKI_LOGO-removebg-preview.png">
    <link
        href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/vendors/css/charts/chartist.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/pages/dashboard-ecommerce.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="./css/multiStepsQs.css">
    <style>
        body,

        .navbar-container,
        .navbar-header {
            background-color: #c9d6ff !important;
            background: linear-gradient(to left, #154D47, #ffdf7e) !important;
        }
        .side-bar {
          background-color: #154D47 !important;
        }

        .activate {
            background-color: #ffdf7e !important;

        }
        .menu-title{
          color: #ffdf7e;
        }
.activated-span{
  color: #154D47;
}
        .main-menu-content i {
            color: aliceblue;
            background-color: #154D47 !important;
        }
        .brand-text{
            color:#154D47 !important;
        }


        .ft-x:before {

            color: red;
            font-size: large;
        }
    </style>
    <!-- END Custom CSS-->
</head>








<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    <nav
        class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="collapse navbar-collapse show" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                    class="ficon ft-maximize"></i></a></li>
                        <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide"
                                data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                            <ul class="dropdown-menu">
                                <li class="arrow_box">
                                    <form>
                                        <div class="input-group search-box">
                                            <div class="position-relative has-icon-right full-width">
                                                <input class="form-control" id="search" type="text"
                                                    placeholder="Search here...">
                                                <div class="form-control-position navbar-search-close"><i class="ft-x">
                                                    </i></div>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                                id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
                                    class="selected-language"></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                                <div class="arrow_box"><a class="dropdown-item" href="#"><i
                                            class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item"
                                        href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a
                                        class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i>
                                        Russian</a><a class="dropdown-item" href="#"><i
                                            class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item"
                                        href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a></div>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                                data-toggle="dropdown"><i class="ficon ft-mail"> </i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right"><a class="dropdown-item" href="#"><i class="ft-book"></i>
                                        Read Mail</a><a class="dropdown-item" href="#"><i class="ft-bookmark"></i> Read
                                        Later</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark
                                        all Read </a></div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <span class="avatar avatar-online"><img
                                        src="theme-assets/images/portrait/small/avatar-s-19.png"
                                        alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right"><a class="dropdown-item" href="#"><span
                                            class="avatar avatar-online"><img
                                                src="theme-assets/images/portrait/small/avatar-s-19.png"
                                                alt="avatar"><span class="user-name text-bold-700 ml-1">John
                                                Doe</span></span></a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                            class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i
                                            class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i
                                            class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i
                                            class="ft-message-square"></i> Chats</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                            class="ft-power"></i> Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- sidebar -->
    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow side-bar" data-scroll-to-active="true"
        data-img="theme-assets/images/backgrounds/02.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo"
                            alt="Chameleon admin logo" src="/img/SHARIKI_LOGO-removebg-preview.png" />
                        <h3 class="brand-text">Shariki شريكي</h3>
                    </a></li>
                <li class="nav-item  d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item mini_title"><a href="index.html"><i class="ft-home"></i><span class="menu-title "
                            data-i18n="">صفحتي الشخصية</span></a>
                </li>
                <li class=" nav-item"><a href="{{route('terms')}}"><i class="ft-layers"></i><span class="menu-title"
                            data-i18n="">شروط واحكام </span></a>
                </li>
                <!-- <li class=" nav-item"><a href="icons.html"><i class="ft-droplet"></i><span class="menu-title"
                    data-i18n="">Icons</span></a>
        </li> -->
                <li class="activate nav-item"><a href="/clientDashboard.html"><i class="ft-pie-chart"></i><span class="menu-title activated-span"
                            data-i18n="">طلبي </span></a>
                </li>

                <li class=" nav-item"><a href="{{route('payment.index')}}"><i class="la-credit-card"></i><span class="menu-title"
                    data-i18n="">الدفع</span></a>
                    <i class="fa-solid fa-bars"></i>
                </li>
                <!-- <li class=" nav-item"><a href="buttons.html"><i class="ft-box"></i><span class="menu-title"
                    data-i18n="">Buttons</span></a>
        </li> -->
                <!-- <li class=" nav-item"><a href="typography.html"><i class="ft-bold"></i><span class="menu-title"
                    data-i18n="">Typography</span></a>
        </li> -->
                <!-- <li class=" nav-item"><a href="tables.html"><i class="ft-credit-card"></i><span class="menu-title"
                            data-i18n="">Tables</span></a>
                </li>
                <li class=" nav-item"><a href="form-elements.html"><i class="ft-layout"></i><span class="menu-title"
                            data-i18n="">Form Elements</span></a>
                </li> -->
                <li class=" nav-item"><a
                        href="{{route('documentations')}}"><i
                            class="ft-book"></i><span class="menu-title" data-i18n="">وثائق هامه</span></a>
                </li>
            </ul>
            </div><a class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1"
href="/index.html"
target="_blank">Logout!</a>
<!-- <div class="navigation-background"></div> -->
        </div>
    </div>
    <!-- end sidebar -->
    <!-- app content -->
    <!-- <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
            </div> -->
            <header class="header">
                <h1 class="header__title title ">طلب البحث عن شريكة حياة</h1>
              </header>
              <div class="content mini_title">
                <div class="content__inner mini-title">
                  <!-- <div class="container">
                  <h2 class="content__title content__title--m-sm">Choose Animation Type</h2>
                  <form class="pick-animation my-4">
                    <div class="form-row">
                      <div class="col-5 m-auto">
                        <select class="pick-animation__select form-control">
                          <option value="scaleIn" selected="selected">ScaleIn</option>
                          <option value="scaleOut">ScaleOut</option>
                          <option value="slideHorz">SlideHorz</option>
                          <option value="slideVert">SlideVert</option>
                          <option value="fadeIn">FadeIn</option>
                        </select>
                      </div>
                    </div>
                  </form>

                  <h2 class="content__title">Click on steps or 'Prev' and 'Next' buttons</h2>
                </div> -->
                  <div class="container overflow-hidden">
                    <div class="multisteps-form title">
                      <div class="row ">
                        <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                          <div class="multisteps-form__progress" >
                            <button class="multisteps-form__progress-btn js-active " type="button" title="User Info">معلومات رئيسية
                            </button>
                            <button class="multisteps-form__progress-btn" type="button" title="Address">البيانات والمعلومات
                              (الأساسية)</button>
                              <button class="multisteps-form__progress-btn" type="button" title="Order Info">بيانات الزوجة المطلوبة
                                (شريكة الحياة)</button>
                            <button class="multisteps-form__progress-btn" type="button" title="Message">Message </button>
                          </div>
                        </div>
                      </div>
                      <div class="row" dir="rtl">
                        <div class="col-12 col-lg-8 m-auto">
                          <form class="multisteps-form__form" action="/congratsCertificate.html">
                            <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                              <h3 class="multisteps-form__title title" >معلومات رئيسية </h3>
                              <div class="multisteps-form__content">
                                <div class="form-row mt-4" >
                                  <div class="col-7 col-sm-12" >
                                    <!-- <input class="multisteps-form__input form-control" type="text" placeholder="Last Name" /> -->
                                    <label for="name">هل لديك المعرفة التامة في الحقوق الزوجية :</label>


                                    <input type="radio" id="under_13" value="under_13" name="user_age">
                                    <label for="under_13" class="light">نعم</label>
                                    <a href="#">
                                      <input type="radio" id="over_13" value="over_13" name="user_age">
                                    <label for="over_13" class="light">لا</label>
                                <span style="color: red;">(يرجى ضرورة الإطلاع على أحكام الزواج والطلاق)</span>
                              </a>

                                  </div>

                                  <div class="col-7 col-sm-12" >
                                    <!-- <input class="multisteps-form__input form-control" type="text" placeholder="Last Name" /> -->
                                    <label for="name">هل تم الإطلاع على قانون الأحوال الشخصية:</label>


                                    <input type="radio" id="under_13" value="under_13" name="user_age">
                                    <label for="under_13" class="light">نعم</label>
                                    <a href="#">
                                      <input type="radio" id="over_13" value="over_13" name="user_age">
                                    <label for="over_13" class="light">لا</label>
                                <span style="color: red;">(يرجى التثقيف في الحقوق الزوجية ومراجعة المراكز المختصة في أمور الزواج)</span>
                              </a>

                                  </div>

                                  <div class="col-7 col-sm-12" >
                                    <!-- <input class="multisteps-form__input form-control" type="text" placeholder="Last Name" /> -->
                                    <label for="name">هل لديك القدرة والكفاءة على تحمل المسؤولية الزوجية :</label>


                                    <input type="radio" id="under_13" value="under_13" name="user_age">
                                    <label for="under_13" class="light">نعم</label>
                                    <a href="#">
                                      <input type="radio" id="over_13" value="over_13" name="user_age">
                                    <label for="over_13" class="light">لا</label>
                                <span style="color: red;">(يرجى عدم الإستعجال في تقديم الطلب ومراجعة المراكز المختصة بأمور الزواج)</span>
                              </a>

                                  </div>


                                </div>
                                <!-- <div class="form-row mt-4">
                                  <div class="col-12 col-sm-6">
                                    <input class="multisteps-form__input form-control" type="text" placeholder="Login" />
                                  </div>
                                  <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                    <input class="multisteps-form__input form-control" type="email" placeholder="Email" />
                                  </div>
                                </div>
                                <div class="form-row mt-4">
                                  <div class="col-12 col-sm-6">
                                    <input class="multisteps-form__input form-control" type="password" placeholder="Password" />
                                  </div>
                                  <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                    <input class="multisteps-form__input form-control" type="password"
                                      placeholder="Repeat Password" />
                                  </div>
                                </div> -->
                                <div class="button-row d-flex mt-4">
                                  <button class="btn  ml-auto js-btn-next title" type="button" title="Next">Next</button>
                                </div>
                              </div>
                            </div>

                            <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                              <h3 class="multisteps-form__title title">البيانات والمعلومات (الأساسية) فقط يتم الإطلاع عليها من قبل إدارة شركة شريكي ولا يتم مشاركتها مع أحد أبداً</h3>
                              <div class="multisteps-form__content">
                                <div class="form-row mt-4">

                                  <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                    <input class="multisteps-form__input form-control" type="text" placeholder="الاسم الاول " />
                                  </div>
                                  <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                    <input class="multisteps-form__input form-control" type="text" placeholder="اسم الاب " />
                                  </div>
                                  <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                    <input class="multisteps-form__input form-control" type="text" placeholder="اسم الجد " />
                                  </div>
                                  <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                    <input class="multisteps-form__input form-control" type="text" placeholder="القبيلة(اسم العائلة) " />
                                  </div>
                                </div>
                                <div class="form-row mt-4">

                                  <div class="col">

                                    <input class="multisteps-form__input form-control" type="tele" placeholder="رقم الهاتف المتحرك " />
                                  </div>
                                </div>
                                <div class="form-row mt-4">
                                  <div class="col">
                                    <input class="multisteps-form__input form-control" type="mail" placeholder="البريد الالكتروني " />
                                  </div>
                                </div>
                                <div class="form-row mt-4">
                                  <div class="col-14 col-sm-3 mt-4 mt-sm-0">
                                    <label for="email">تاريخ الميلاد :</label>

                                  </div>
                                  <div class="col-4 col-sm-3 mt-4 mt-sm-0">
                                    <input onchange="getAge()" type="date" id="bd" >
                                    <span style="color: red;">السن :</span>
                                  </div>
                                  <div class="col-4 col-sm-3 mt-4 mt-sm-0">
                                    <span style="color: red;" id="bdate">
                                    </span>
                                  </div>
                                </div>

                                <div class="button-row d-flex mt-4">
                                  <button class="btn ml-auto js-btn-next " type="button" title="Next">Next</button>
                                  <button class="btn  js-btn-prev title" type="button" title="Prev">Prev</button>
                                </div>
                              </div>
                            </div>

                            <div class="multisteps-form__panel shadow title p-4 rounded bg-white" data-animation="scaleIn">
                              <h3 class="multisteps-form__title">بيانات الزوجة المطلوبة
                                (شريكة الحياة)</h3>
                              <div class="multisteps-form__content">
                                <div class="form-row mt-4">

                                  <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                    <input class="multisteps-form__input form-control" type="text" placeholder="الاسم الاول " />
                                  </div>
                                  <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                    <input class="multisteps-form__input form-control" type="text" placeholder="اسم الاب " />
                                  </div>
                                  <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                    <input class="multisteps-form__input form-control" type="text" placeholder="اسم الجد " />
                                  </div>
                                  <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                    <input class="multisteps-form__input form-control" type="text" placeholder="القبيلة(اسم العائلة) " />
                                  </div>
                                </div>
                                <div class="form-row mt-4">

                                  <div class="col">

                                    <input class="multisteps-form__input form-control" type="tele" placeholder="رقم الهاتف المتحرك " />
                                  </div>
                                </div>
                                <div class="form-row mt-4">
                                  <div class="col">
                                    <input class="multisteps-form__input form-control" type="mail" placeholder="البريد الالكتروني " />
                                  </div>
                                </div>
                                <div class="form-row mt-4">
                                  <div class="col-14 col-sm-3 mt-4 mt-sm-0">
                                    <label for="email">تاريخ الميلاد :</label>

                                  </div>
                                  <div class="col-4 col-sm-3 mt-4 mt-sm-0">
                                    <input onchange="getAge()" type="date" id="bd" >
                                    <span style="color: red;">السن :</span>
                                  </div>
                                  <div class="col-4 col-sm-3 mt-4 mt-sm-0">
                                    <span style="color: red;" id="bdate">
                                    </span>
                                  </div>
                                </div>
                                <!-- <div class="row">
                                  <div class="col-12 col-md-6 mt-4">
                                    <div class="card shadow-sm">
                                      <div class="card-body">
                                        <h5 class="card-title">Item Title</h5>
                                        <p class="card-text">Small and nice item description</p><a class="btn btn-primary" href="#"
                                          title="Item Link">Item Link</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 col-md-6 mt-4">
                                    <div class="card shadow-sm">
                                      <div class="card-body">
                                        <h5 class="card-title">Item Title</h5>
                                        <p class="card-text">Small and nice item description</p><a class="btn " href="#"
                                          title="Item Link">Item Link</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                               -->
                                <div class="row">
                                  <div class="button-row d-flex mt-4 col-12">
                                    <button class="btn  ml-auto js-btn-next title" type="button" title="Next">Next</button>
                                    <button class="btn js-btn-prev title" type="button" title="Prev">Prev</button>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="multisteps-form__panel shadow mini_title p-4 rounded bg-white" data-animation="scaleIn">
                              <h3 class="multisteps-form__title">Additional Message</h3>
                              <div class="multisteps-form__content">
                                <div class="form-row mt-4">
                                  <textarea class="multisteps-form__textarea form-control"
                                    placeholder="Additional Message and Questions"></textarea>
                                </div>
                                <div class="button-row d-flex mt-4">
                                  <button class="btn btn-success ml-auto title" type="submit" title="Send">Send</button>
                                  <button class="btn  js-btn-prev mini_title" type="button" title="Prev">Prev</button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        <!-- </div>
    </div> -->
    <!-- app content -->
    <!-- ////////////////////////////////////////////////////////////////////////////-->



    <!-- BEGIN VENDOR JS-->
    <script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="theme-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="theme-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    <script src="/js/multiStepsQs.js"></script>

</body>

</html>
