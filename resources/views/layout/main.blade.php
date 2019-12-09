<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            @yield('title', 'Baby Fashion')
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="{{asset("dist/css/foundation.min.css")}}"/>
        <link rel="stylesheet" href="{{asset("dist/css/app.css")}}"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


    </head>
    <body>
        <div  class="top-bar" style="background-color: #7D66A2">
            <div style="color:white" class="top-bar-left">
                <h4 class="brand-title">
                    <a href="{{route('home')}}">
                        <i class="fa fa-home fa-lg" aria-hidden="true">
                        </i>
                       Baby Fasion
                    </a>
                </h4>
            </div>
            <div class="top-bar-right">
                <ol class="menu">
                    <li>
                        <a href="{{route('shirts')}}">
                            Produk
                        </a>
                    </li>
                    
                    <li>
                        <a href="{{route('cara-membayar')}}">
                            Cara Membayar
                        </a>
                    </li>
                    <li>
                        <a href="{{route('cart.index')}}">
                            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                            </i>
                            Keranja Belanja
                            <span class="alert badge">
                                {{Cart::count()}}
                            </span>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
        
@yield('content')
<br>
<br>

<footer class="footer">
  <div class="row full-width">
    <span style="margin-right:20px">Email: siotog2798@gmail.com</span>
    <span>Telp: 0895372466152</span>
    
  </div>
</footer>

<script src="{{asset("dist/js/vendor/jquery.js")}}"></script>
<script src="{{asset("dist/js/app.js")}}"></script>

    </body>
</html>
