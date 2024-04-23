
<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />
    <title>شريكي - @yield('title')</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- BoxIcons -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- Main Styling -->
    <link href="{{ asset('assets/css/soft-ui-dashboard-tailwind.css') }}?v=1.0.5" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Pacifico&display=swap');

* {
}

body {
    font-family: "Amiri", serif !important;
    background: linear-gradient(to right, #154D47, #ffdf7e);
}

    </style>
  </head>

  <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">

    <!-- sidenav  -->
    <aside class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 mr-4 block w-full translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:right-0 xl:translate-x-0 xl:bg-transparent">
      <div class="h-19.5">
        <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="../pages/dashboard.html" target="_blank">
          <img src="{{ asset('img/SHARIKI_LOGOo-removebg-preview.png')}}" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
          <span class="mr-1 font-semibold transition-all duration-200 ease-nav-brand">شريكي - @yield('title')</span>
        </a>
      </div>

      <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

      <!-- change h-sidenav-no-pro to h-sidenav when pro is up -->
      <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
          <li class="mt-0.5 w-full">
            <a class="py-2.7 shadow-soft-xl text-sm mb-1 ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors" href="{{ Route::Is('dashboard.home') ? '#' : route('dashboard.home') }}">
              <div class="{{ Route::Is('dashboard.home') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : '' }} shadow-soft-2xl ml-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                <i class="text-lg {{ Route::Is('dashboard.home') ? 'text-white bx bxs-been-here' : 'text-slate-500 fas fa-home' }}"></i>
              </div>
              <span class="mr-1 duration-300 opacity-100 pointer-events-none ease-soft">الصفحة الرئيسية</span>
            </a>
          </li>
          <li class="mt-0.5 w-full">
            <a class="py-2.7 shadow-soft-xl text-sm mb-1 ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors" href="{{ Route::Is('dashboard.terms') ? '#' : route('dashboard.terms') }}">
              <div class="{{ Route::Is('dashboard.terms') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : '' }} shadow-soft-2xl ml-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                <i class="text-lg {{ Route::Is('dashboard.terms') ? 'text-white bx bxs-been-here' : 'text-slate-500 fas fa-user' }}"></i>
              </div>
              <span class="mr-1 duration-300 opacity-100 pointer-events-none ease-soft">الشروط</span>
            </a>
          </li>
          <li class="mt-0.5 w-full">
            <a class="py-2.7 shadow-soft-xl text-sm mb-1 ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors" href="{{ Route::Is('dashboard.documentations') ? '#' : route('dashboard.documentations') }}">
              <div class="{{ Route::Is('dashboard.documentations') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : '' }} shadow-soft-2xl ml-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                <i class="text-lg {{ Route::Is('dashboard.documentations') ? 'text-white bx bxs-been-here' : 'text-slate-500 fas fa-book' }}"></i>
              </div>
              <span class="mr-1 duration-300 opacity-100 pointer-events-none ease-soft">الوثائق</span>
            </a>
          </li>
        </ul>
      </div>

      <div class="mx-4">
        <!-- load phantom colors for card after: -->
        <p class="hidden after:bg-gradient-to-tl after:from-gray-900 after:to-slate-800 after:bg-gradient-to-tl after:from-blue-600 after:to-cyan-400 after:bg-gradient-to-tl after:from-red-500 after:to-yellow-400 after:bg-gradient-to-tl after:from-green-600 after:to-lime-400 after:bg-gradient-to-tl after:from-red-600 after:to-rose-400 after:bg-gradient-to-tl after:from-slate-600 after:to-slate-300"></p>

        <a class="inline-block w-full px-6 py-3 my-4 font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-xs bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102" href="{{ route('logout') }}">تسجيل الخروج</a>
      </div>
    </aside>

    <!-- end sidenav -->

    <main class="ease-soft-in-out xl:mr-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
      <!-- Navbar -->
      <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
          <div class="flex items-center mt-2 grow sm:mt-0 md:mr-0 lg:flex lg:basis-auto">
            <ul class="flex flex-row justify-end pl-0 pr-10 mb-0 ml-0 mr-auto list-none md-max:w-full">
              <li class="flex items-center pr-4 xl:hidden">
                <a href="javascript:;" class="block p-0 transition-all ease-nav-brand text-sm text-white" sidenav-trigger>
                  <div class="w-4.5 overflow-hidden">
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                    <i class="ease-soft relative block h-0.5 rounded-sm bg-white transition-all"></i>
                  </div>
                </a>
              </li>
              <li class="relative flex items-center pl-2 mr-4">
                <p class="hidden transform-dropdown-show"></p>
                <a dropdown-trigger href="javascript:;" class="block p-0 transition-all text-sm ease-nav-brand text-slate-500" aria-expanded="false">
                  <i class="cursor-pointer fa fa-user text-white" aria-hidden="true"></i>
                </a>

                <ul dropdown-menu class="text-sm text-center transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:text-5.5 pointer-events-none absolute left-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-auto before:top-0 before:left-2 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 before:sm:left-3 lg:absolute lg:mt-2 lg:block lg:cursor-pointer">
                    <li class="relative mb-2">
                        <a href="#" class="block w-full px-4 py-2 text-sm text-slate-500 whitespace-nowrap bg-transparent rounded-lg transition-all ease-soft-in-out hover:bg-gray-200">الملف الشخصي</a>
                    </li>
                    <li class="relative mb-2">
                        <a href="#" class="block w-full px-4 py-2 text-sm text-slate-500 whitespace-nowrap bg-transparent rounded-lg transition-all wease-soft-in-out hover:bg-gray-200">المساعدة</a>
                    </li>
                    <li class="relative mb-2">
                        <a href="{{ route('logout') }}" class="block w-full px-4 py-2 text-sm text-white whitespace-nowrap bg-gradient-to-tl from-purple-700 to-pink-500 rounded-lg transition-all ease-soft-in-out hover:bg-gray-50">تسجيل الخروج</a>
                    </li>
                </ul>
              </li>
            </ul>
        </div>
    </div>
      </nav>

      <!-- end Navbar -->

      <!-- cards -->
      <div class="w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap">
          <div class="w-full  px-4">
            @yield('content')
          </div>
      </div>
      <!-- end cards -->
    </main>
  </body>
  <script src="{{ asset('assets/js/plugins/chartjs.min.js')}}"></script>
  <!-- plugin for scrollbar  -->
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- main script file  -->
  <script src="{{ asset('assets/js/soft-ui-dashboard-tailwind.js')}}"></script>
</html>
