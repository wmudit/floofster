<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='../../fonts.googleapis.com/csse092.css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bob">

    <div class="bon" id="app-growl"></div>

    <nav class="ck pt adq py tk app-navbar">

        <a class="e" href="{{ url('/') }}">
        <img src="assets/img/brand-white.png" alt="brand">
        </a>

        <button
        class="pp bpn vm"
        type="button"
        data-toggle="collapse"
        data-target="#navbarResponsive"
        aria-controls="navbarResponsive"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="pq"></span>
        </button>

        <div class="collapse f" id="navbarResponsive">
        <ul class="navbar-nav ahq">
            <li class="pi active">
            <a class="pg" href="index.html">Home <span class="adt">(current)</span></a>
            </li>
            <li class="pi">
            <a class="pg" href="profile/index.html">Profile</a>
            </li>
            <li class="pi">
            <a class="pg" data-toggle="modal" href="#msgModal">Messages</a>
            </li>
            <li class="pi">
            <a class="pg" href="docs/index.html">Docs</a>
            </li>

            <li class="pi vm">
            <a class="pg" href="notifications/index.html">Notifications</a>
            </li>
            @guest
                <li class="pi vm">
                <a class="pg" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="pi vm">
                <a class="pg" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @else
                <li class="pi vm">
                <a class="pg" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
            

        </ul>

        <form class="nn acx d-none vt">
            <input class="form-control" type="text" data-action="grow" placeholder="Search">
        </form>

        <ul id="#js-popoverContent" class="nav navbar-nav acx aek d-none vt">
            <li class="pi">
            <a class="g pg" href="notifications/index.html">
                <span class="h azy"></span>
            </a>
            </li>
            <li class="pi afb">
                @guest
                    <button class="cg bpo bpp boi g pg" data-toggle="popover">
                        <span class="h bnb"></span>
                    </button>
                @else
                    <button class="cg bpo bpp boi" data-toggle="popover">
                        <img class="us" src="assets/img/avatar-dhg.png">
                    </button>
                @endguest
            </li>
        </ul>

        <ul class="nav navbar-nav d-none" id="js-popoverContent">
            @guest
                <li class="pi"><a class="pg" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                @if (Route::has('register'))
                    <li class="pi"><a class="pg" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @endif
            @else
                <!-- <li class="pi"><a class="pg" href="#" data-action="growl">Growl</a></li> -->
                <li class="pi"><a class="pg" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </ul>
        </div>
    </nav>

    <div class="cd fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="bpq" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="d">
                <h5 class="modal-title">Messages</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <div class="modal-body afx js-modalBody">
                <div class="axw">
                    <div class="bow cj ca js-msgGroup">
                    <a href="#" class="b rx">
                        <div class="rv">
                        <img class="us bos vb yb aff" src="assets/img/avatar-fat.jpg">
                        <div class="rw">
                            <strong>Jacob Thornton</strong> and <strong>1 other</strong>
                            <div class="bpg">
                            Aenean eu leo quam. Pellentesque ornare sem lacinia quam &hellip;
                            </div>
                        </div>
                        </div>
                    </a>
                    <a href="#" class="b rx">
                        <div class="rv">
                        <img class="us bos vb yb aff" src="assets/img/avatar-mdo.png">
                        <div class="rw">
                            <strong>Mark Otto</strong> and <strong>3 others</strong>
                            <div class="bpg">
                            Brunch sustainable placeat vegan bicycle rights yeah…
                            </div>
                        </div>
                        </div>
                    </a>
                    <a href="#" class="b rx">
                        <div class="rv">
                        <img class="us bos vb yb aff" src="assets/img/avatar-dhg.png">
                        <div class="rw">
                            <strong>Dave Gamache</strong>
                            <div class="bpg">
                            Brunch sustainable placeat vegan bicycle rights yeah…
                            </div>
                        </div>
                        </div>
                    </a>
                    <a href="#" class="b rx">
                        <div class="rv">
                        <img class="us bos vb yb aff" src="assets/img/avatar-fat.jpg">
                        <div class="rw">
                            <strong>Jacob Thornton</strong> and <strong>1 other</strong>
                            <div class="bpg">
                            Aenean eu leo quam. Pellentesque ornare sem lacinia quam &hellip;
                            </div>
                        </div>
                        </div>
                    </a>
                    <a href="#" class="b rx">
                        <div class="rv">
                        <img class="us bos vb yb aff" src="assets/img/avatar-mdo.png">
                        <div class="rw">
                            <strong>Mark Otto</strong> and <strong>3 others</strong>
                            <div class="bpg">
                            Brunch sustainable placeat vegan bicycle rights yeah…
                            </div>
                        </div>
                        </div>
                    </a>
                    <a href="#" class="b rx">
                        <div class="rv">
                        <img class="us bos vb yb aff" src="assets/img/avatar-dhg.png">
                        <div class="rw">
                            <strong>Dave Gamache</strong>
                            <div class="bpg">
                            Brunch sustainable placeat vegan bicycle rights yeah…
                            </div>
                        </div>
                        </div>
                    </a>
                    <a href="#" class="b rx">
                        <div class="rv">
                        <img class="us bos vb yb aff" src="assets/img/avatar-fat.jpg">
                        <div class="rw">
                            <strong>Jacob Thornton</strong> and <strong>1 other</strong>
                            <div class="bpg">
                            Aenean eu leo quam. Pellentesque ornare sem lacinia quam &hellip;
                            </div>
                        </div>
                        </div>
                    </a>
                    <a href="#" class="b rx">
                        <div class="rv">
                        <img class="us bos vb yb aff" src="assets/img/avatar-mdo.png">
                        <div class="rw">
                            <strong>Mark Otto</strong> and <strong>3 others</strong>
                            <div class="bpg">
                            Brunch sustainable placeat vegan bicycle rights yeah…
                            </div>
                        </div>
                        </div>
                    </a>
                    <a href="#" class="b rx">
                        <div class="rv">
                        <img class="us bos vb yb aff" src="assets/img/avatar-dhg.png">
                        <div class="rw">
                            <strong>Dave Gamache</strong>
                            <div class="bpg">
                            Brunch sustainable placeat vegan bicycle rights yeah…
                            </div>
                        </div>
                        </div>
                    </a>
                    </div>

                    <div class="d-none afc js-conversation">
                    <ul class="bow bpc">
                        <li class="rv bpf afo">
                        <div class="rw">
                            <div class="bpd">
                            Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.
                            </div>
                            <div class="bpe">
                            <small class="axc">
                                <a href="#">Dave Gamache</a> at 4:20PM
                            </small>
                            </div>
                        </div>
                        <img class="us bos vb yb afi" src="assets/img/avatar-dhg.png">
                        </li>

                        <li class="rv afo">
                        <img class="us bos vb yb aff" src="assets/img/avatar-fat.jpg">
                        <div class="rw">
                            <div class="bpd">
                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                            </div>
                            <div class="bpd">
                            Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                            </div>
                            <div class="bpd">
                            Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.
                            </div>
                            <div class="bpe">
                            <small class="axc">
                                <a href="#">Fat</a> at 4:28PM
                            </small>
                            </div>
                        </div>
                        </li>

                        <li class="rv afo">
                        <img class="us bos vb yb aff" src="assets/img/avatar-mdo.png">
                        <div class="rw">
                            <div class="bpd">
                            Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur.
                            </div>
                            <div class="bpd">
                            Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                            </div>
                            <div class="bpe">
                            <small class="axc">
                                <a href="#">Mark Otto</a> at 4:20PM
                            </small>
                            </div>
                        </div>
                        </li>

                        <li class="rv bpf afo">
                        <div class="rw">
                            <div class="bpd">
                            Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.
                            </div>
                            <div class="bpe">
                            <small class="axc">
                                <a href="#">Dave Gamache</a> at 4:20PM
                            </small>
                            </div>
                        </div>
                        <img class="us bos vb yb afi" src="assets/img/avatar-dhg.png">
                        </li>

                        <li class="rv afo">
                        <img class="us bos vb yb aff" src="assets/img/avatar-fat.jpg">
                        <div class="rw">
                            <div class="bpd">
                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                            </div>
                            <div class="bpd">
                            Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                            </div>
                            <div class="bpd">
                            Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.
                            </div>
                            <div class="bpe">
                            <small class="axc">
                                <a href="#">Fat</a> at 4:28PM
                            </small>
                            </div>
                        </div>
                        </li>

                        <li class="rv afo">
                        <img class="us bos vb yb aff" src="assets/img/avatar-mdo.png">
                        <div class="rw">
                            <div class="bpd">
                            Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur.
                            </div>
                            <div class="bpd">
                            Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                            </div>
                            <div class="bpe">
                            <small class="axc">
                                <a href="#">Mark Otto</a> at 4:20PM
                            </small>
                            </div>
                        </div>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cd fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="bpr" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="d">
                <h4 class="modal-title">Users</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <div class="modal-body afx">
                <div class="axw">
                    <ul class="bow cj ca">
                    <li class="b">
                        <div class="rv ady">
                        <img class="bos vb yb aff" src="assets/img/avatar-fat.jpg">
                        <div class="rw">
                            <button class="cg ns ok acx">
                            <span class="c bps"></span> Follow
                            </button>
                            <strong>Jacob Thornton</strong>
                            <p>@fat - San Francisco</p>
                        </div>
                        </div>
                    </li>
                    <li class="b">
                        <div class="rv ady">
                        <img class="bos vb yb aff" src="assets/img/avatar-dhg.png">
                        <div class="rw">
                            <button class="cg ns ok acx">
                            <span class="c bps"></span> Follow
                            </button>
                            <strong>Dave Gamache</strong>
                            <p>@dhg - Palo Alto</p>
                        </div>
                        </div>
                    </li>
                    <li class="b">
                        <div class="rv ady">
                        <img class="bos vb yb aff" src="assets/img/avatar-mdo.png">
                        <div class="rw">
                            <button class="cg ns ok acx">
                            <span class="c bps"></span> Follow
                            </button>
                            <strong>Mark Otto</strong>
                            <p>@mdo - San Francisco</p>
                        </div>
                        </div>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    <script>
      // execute/clear BS loaders for docs
      $(function(){while(window.BS&&window.BS.loader&&window.BS.loader.length){(window.BS.loader.pop())()}})
    </script>
    
</body>
</html>
