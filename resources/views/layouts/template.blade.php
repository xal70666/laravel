<!DOCTYPE HTML>

 <html>

    <head>

    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <meta charset="utf-8">

        <!-- Description, Keywords and Author -->

        <meta name="description" content="">

        <meta name="author" content="">



        <title>:: avana LLC ::</title>

		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">



        <!-- style -->

        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">

        <!-- style -->

        <!-- bootstrap -->

        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

        <!-- responsive -->

        <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">

        <!-- font-awesome -->

        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- font-awesome -->

        <link href="{{asset('css/effects/set2.css')}}" rel="stylesheet" type="text/css">

        <link href="{{asset('css/effects/normalize.css')}}" rel="stylesheet" type="text/css">

        <link href="{{asset('css/effects/component.css')}}"  rel="stylesheet" type="text/css" >

	</head>



    <body>



    	<!-- header -->

        	<header role="header">

            	<div class="container">

                	<!-- logo -->

                    	<h1>

                        	<a href="index.html" title="avana LLC"><img src="images/logo.png" title="avana LLC" alt="avana LLC"/></a>

                        </h1>

                    <!-- logo -->

                    <!-- nav -->

                    <nav role="header-nav" class="navy">
                        <ul>
                            <li class="nav-active"><a href="index.html" title="Work">Work</a></li>
                            <li><a href="{{route('login')}}" title="Login">Login</a></li>
                            <li><a href="{{route('register')}}" title="Register">Register</a></li>
                            <li><a href="about.html" title="About">About</a></li>
                            <li><a href="blog.html" title="Blog">Blog</a></li>
                            <li><a href="contact.html" title="Contact">Contact</a></li>
                        </ul>
                    </nav>

                    <!-- nav -->

                </div>

            </header>

        <!-- header -->

        <!-- main -->

        @yield('content')

    	<!-- main -->

        <!-- footer -->

        <footer role="footer">

            <!-- logo -->

                <h1>

                    <a href="index.html" title="avana LLC"><img src="images/logo.png" title="avana LLC" alt="avana LLC"/></a>

                </h1>

            <!-- logo -->

            <!-- nav -->

            <nav role="footer-nav">

            	<ul>

                	<li><a href="index.html" title="Work">Work</a></li>

                    <li><a href="about.html" title="About">About</a></li>

                    <li><a href="blog.html" title="Blog">Blog</a></li>

                    <li><a href="contact.html" title="Contact">Contact</a></li>

                </ul>

            </nav>

            <!-- nav -->

            <ul role="social-icons">

            	<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                <li><a href="#"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>

            </ul>

            <p class="copy-right">&copy; 2015  avana LLC.. All rights Resved</p>

        </footer>

        <!-- footer -->



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <script src="{{asset('js/jquery-3.3.1.min.js')}}" type="text/javascript"></script>

        <!-- custom -->

		    <script src="{{asset('js/nav.js')}}" type="text/javascript"></script>

        <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

        <script src="{{asset('js/effects/masonry.pkgd.min.js')}}"  type="text/javascript"></script>

    		<script src="{{asset('js/effects/imagesloaded.js')}}"  type="text/javascript"></script>

    		<script src="{{asset('js/effects/classie.js')}}"  type="text/javascript"></script>

    		<script src="{{asset('js/effects/AnimOnScroll.js')}}"  type="text/javascript"></script>

        <script src="{{asset('js/effects/modernizr.custom.js')}}"></script>

        <!-- jquery.countdown -->

        <script src="{{asset('js/html5shiv.js')}}" type="text/javascript"></script>

    </body>
</html>
