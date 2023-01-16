<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel='stylesheet' id='zz-style2-css'  href='{{asset('css/grid.css')}}' type='text/css' media='all' />
  <link rel='stylesheet' id='zz-style-css'  href='{{asset('css/zz-style.css')}}' type='text/css' media='all' />
  <title> @yield ('title')</title>
</head>
<body>
    <div class="wrapper">
      <header class="main">
          <div class="main-body">
            <a href="#" class="main_logo">
              <img class="logo_size"  src="{{asset('img\logo.svg')}}" alt="tutlogo">
            </a>
            <div class="main__burger">
              <span></span>
            </div>
                @include ('Pub::layouts.parts.menu')
                   <a href="#" class="main-button">Займ дня</a>
          </div>
      </header>
    </div>
    @yield ('content')
    @include ('Pub::layouts.parts.footer')
  </body>
</html>
