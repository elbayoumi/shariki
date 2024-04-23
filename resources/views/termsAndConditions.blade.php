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
                <li class="nav-item mini_title"><a href="index.html"><i class="ft-home"></i><span class="menu-title"
                    data-i18n="">صفحتي الشخصية</span></a>
                </li>
                <li class=" activate nav-item " ><a href="{{route('terms')}}"><i class="ft-layers"></i><span class="menu-title activated-span"
                    data-i18n="">شروط واحكام </span></a>
                </li>

                <li class=" nav-item"><a href="{{route('clientDashboard')}}"><i class="ft-pie-chart"></i><span class="menu-title "
                    data-i18n="">طلبي </span></a>
                </li>

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

    <header class="header">
        <h1 class="header__title  "> الشروط والأحكام</h1>
        <div class="container overflow-hidden">
            <div class="multisteps-form">
                <div class="row">
                    <div class="col">

                        <div class="multisteps-form__progress"></div>
                    </div>
                </div>
                <div class="row" dir="rtl">
                    <div class="col">
                        <form class="multisteps-form__form">
                            <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active"
                              data-animation="slideHorz"  >
                                <h3 class="multisteps-form__title ">هذا الموقع هو ملك لشركة شريكي لخدمات مكاتب الزواج،
                                    يرجى قراءة هذه البنود والشروط جيداً حيث أنها شروط إستخدام هذا الموقع التي قامت شركة
                                    شريكي لخدمات مكاتب الزواج بوضعها.</h3>
    
                                <div class="multisteps-form__content" data-animation="slideHorz">
    
                                    <label class="label-title">
                                        إلتزامات المستخدم:
                                    </label>
                                    <div>
                                        <p>
                                            إنك بمجرد استخدامك موقع شركة شريكي لخدمات مكاتب الزواج
                                            (www.shariki.ae) أو زيارتك لهذا الموقع، فإنك تشير إلى موافقتك وإقرارك لهذه
                                            البنود والشروط (“شروط الخدمة”) وأية بنود وشروط أخرى قد يتم إضافتها من وقت لآخر
                                            من قبل شركة شريكي لخدمات مكاتب الزواج تتعلق بإستخدام هذا الموقع، تحتفظ شركة
                                            شريكي لخدمات مكاتب الزواج بحق تعديل هذه الشروط في أي وقت ووضع التغييرات على موقع
                                            شركة شريكي لخدمات مكاتب الزواج (www.shariki.ae) في شبكة الإنترنت ويتحمل الزائر
                                            والمستخدم مسؤولية الرجوع إلى هذه الشروط والإلتزام بها عند الدخول إلى الموقع
                                            وإستخدامه. وإذا لم تتم الموافقة على أي من هذه الشروط، يرجى التوقف عن إستخدام هذا
                                            الموقع على الفور.
                                            إذا كان هناك أي تعارض بين هذه البنود والشروط والقواعد و/أو شروط الإستخدام
                                            المحددة التي تظهر على هذا الموقع المتعلقة بمادة محددة فتكون الأخيرة هي السائدة.
                                            وتنطبق شروط الإستخدام هذه على جميع مستخدمي هذا الموقع، بما فيهم المستخدمين الذين
                                            يساهمون في محتوى الفيديو والمعلومات وغيرها من المواد أو الخدمات المتاحة في
                                            الموقع (حال توفرها).
    
                                        </p>
                                        <p>
                                            حقوق الطبع والنشر وغيرها من حقوق الملكية الفكرية لشركة شريكي لخدمات مكاتب
                                            الزواج.
    
                                            تعتبر الأسماء والصور والشعارات، التي تعين هوية شركة شريكي لخدمات مكاتب الزواج
                                            وموقع شريكي أو الشركات التابعة للمؤسسة أو الشركات المنتسبة لها أو الشركات أو أي
                                            أطراف أخرى أو منتجاتها أو خدماتها هي علامات ملك شركة شريكي لخدمات مكاتب الزواج
                                            وشركاتها المنتسبة و/أو أطراف ثالثة معنية. لا تُفسر أي من محتويات هذه البنود
                                            والشروط على أنها تمنح ترخيص أو حق بمقتضى علامة تجارية أو براءة إختراع خاصة بشركة
                                            شريكي لخدمات مكاتب الزواج أو شركاتها المنتسبة أو أي طرف ثالث.
    
                                            تظل دوماً كافة حقوق الطبع والنشر والعلامات التجارية وغيرها من حقوق الملكية
                                            الفكرية في هذا الموقع (بما في ذلك التصميم التنسيق والمظهر) وجميع المواد أو
                                            المحتويات المقدمة في هذا الموقع ملكاً لشركة شريكي لخدمات مكاتب الزواج وموقع
                                            شريكي أو فروعها أو المرخص لهم. عند دخولك هذا الموقع، توافق على أن يكون إستخدامك
                                            لهذا الموقع إستخداماً شخصياً فقط كما هو مسموح وليس إستخداماً تجارياً، وأيضاً أنك
                                            لن تقوم بنسخ أو توزيع أو إعادة توزيع أو تحميل أو نشر أو (بأن تضع المواد في أي
                                            موقع آخر) أو إرسال أو بث أو أن تستغل تجارياً أو تغيير أو تقوم بتعديل المواد أو
                                            المحتويات إلا بتفويض من شركة شريكي لخدمات مكاتب الزواج.
    
                                            قد يتطلب الدخول إلى بعض الخواص إلى تسجيل البيانات، وتتعهد بأنك ستوفر معلومات
                                            دقيقة وكاملة وأنك مسؤول وحدك عن البيانات التي تقدمها من طرفك.
    
                                        </p>
                                    </div>
    
    
    
    
    
    
                                    <div class="button-row d-flex mt-4">
                                        <button class="btn  ml-auto js-btn-next " type="button"
                                            title="Next">Next</button>
                                    </div>
                                </div>
                            </div>
    
    
    
                            <div class="multisteps-form__panel shadow p-4 rounded bg-white "
                                data-animation="slideHorz">
                                <h3 class="multisteps-form__title ">هذا الموقع هو ملك لشركة شريكي لخدمات مكاتب الزواج،
                                    يرجى قراءة هذه البنود والشروط جيداً حيث أنها شروط إستخدام هذا الموقع التي قامت شركة
                                    شريكي لخدمات مكاتب الزواج بوضعها.</h3>
    
                                <div class="multisteps-form__content">
    
                                    <label class="label-title">
                                        طريقة الدفع:
                                    </label>
                                    <div>
                                        <p>
                                            بعد التسجيل في الموقع يتم دفع مبلغ وقدره (1099) درهم رسوم الإشتراك، للتأكد من مصداقية وجدية العملاء الباحثين عن شريك الحياة ولتغطية المصاريف التشغيلية الخاصة بالشركة.
    
                                        </p>
                                
                                      <label class="label-title">
                                        كم عدد محاولات التوفيق؟
                                       </label>
                                   
                                        <p>
                                            دفع مبلغ وقدره (1099) درهم رسوم لثلاث محاولات توفيق للزواج وبعد الإنتهاء يتم دفع مبلغ وقدره (1099) درهم رسوم أخرى مماثله من أجل القيام بثلاث محاولات توفيق عبر إستخدام موقع شركة شريكي لخدمات مكاتب الزواج (www.shariki.ae).    
                                        </p>
                                      <label class="label-title">
                                        هل يتم إسترجاع الرسوم؟
                                       </label>
                                   
                                        <p>
                                            لا يتم إسترجاع الرسوم بعد إتمام عملية الدفع.
                                        </p>
                                      <label class="label-title">
                                        ما المقصود بالتوفيق؟
                                       </label>
                                   
                                        <p>
                                            توفيق الباحثين عن شريك الحياة وتعريف عائلتين على بعض لتحقيق الزواج الصحيح الرسمي.
                                        </p>
                                
                                      <label class="label-title">
                                        لماذا يتم طلب رقم ولي الأمر للمرأة عند تعبئة الطلب؟
                                       </label>
                                   
                                        <p>
                                            نقوم بطلب رقم (ولي الأمر / الوصي) للمرأة لكي يتم إرساله إلى الشخص الذي تقوم الباحثة عن شريك الحياة في إختيارة في حالة وجود توافق بين طرفين، ويتم التواصل مع الطرفين من قبل المكتب لمتابعة إستكمال باقي الإجراءات والتأكد على تحقيق التوافق والزواج من عدمه، وفي هذه الحالة ينتهي دور شريكي بعد نجاح التوفيق                                       
                                         </p>

                                    </div>
    
    
    
    
    
    
                                    <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">
                                          <button class="btn  ml-auto js-btn-next " type="button" title="Next">Next</button>
                                          <button class="btn js-btn-prev " type="button" title="Prev">Prev</button>
                                        </div>
                                      </div>
                                </div>
                            </div>
    
                            <div class="multisteps-form__panel shadow p-4 rounded bg-white "
                                data-animation="slideHorz">
                                <h3 class="multisteps-form__title ">سياسة الخصوصية</h3>
    
                                <div class="multisteps-form__content">
    
                               
                                    <div>
                                        <p>
                                            إذا كنت بحاجة إلى مزيد من المعلومات أو لديك أي أسئلة حول سياسة الخصوصية الخاصة بنا، فلا تتردد في الإتصال بنا عن طريق البريد الإلكتروني على info@shariki.ae.

                                            في شركة شريكي لخدمات مكاتب الزواج، خصوصية زوارنا وعملائنا لها أهمية بالغة بالنسبة لنا، ووثيقة سياسة الخصوصية هذه تحدد الخطوط العريضة لأنواع المعلومات الشخصية التي يتم إستلامها وجمعها بواسطة موقع شركة شريكي لخدمات مكاتب الزواج وكيفية إستخدامها
                                            
                                        </p>
                                
                                      <label class="label-title">
                                        ملفات السجل
                                       </label>
                                   
                                        <p>
                                            مثل الكثير من المواقع على شبكة الإنترنت، يستخدم موقع شركة شريكي لخدمات مكاتب الزواج ملفات السجل، حيث تتضمن المعلومات الموجودة داخل ملفات السجل عناوين بروتوكول الإنترنت (IP) ونوع المستعرض وموفر خدمة الإنترنت (ISP) وختم التاريخ / الوقت وصفحات الإحالة / الخروج وعدد النقرات لتحليل الاتجاهات وإدارة الموقع وتعقب المستخدم. حركة حول الموقع، وجمع المعلومات الديموغرافية. عناوين (IP)، وغيرها من مثل هذه المعلومات غير مرتبطة بأية معلومات يمكن التعرف عليها بشكل شخصي.
                                        </p>
                         
                                    </div>
    
    
    
    
    
    
                                    <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">
                                         
                                          <button class="btn js-btn-prev " type="button" title="Prev">Prev</button>
                                        </div>
                                      </div>
                                </div>
                            </div>
    
                        </form>
                    </div>
                </div>
            </div>
           
        </div>

    </header>

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