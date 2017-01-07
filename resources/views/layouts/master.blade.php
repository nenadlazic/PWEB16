<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
     integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.32/angular.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.32/angular-route.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script type="text/javascript" src="exploreserbia.js"></script>
		<link rel="stylesheet" href="views/style.css">
</head>
<body>
    @include('includes.header')
    <div class="container">
        @yield('content')
    </div>
</body>
<footer>
    <div class="container-fluid" >
        <div class="row text-center">
            <div class="col-md-1"></div>
            <div class="col-md-3"  fdiv = "naslovkt">

                <table tfont = "font" align="center">
                    <tbody>
                    <tr>
                        <td name = "kt">SERVICES</td>
                    </tr>

                    <tr>
                        <td>Search</td>
                    </tr>

                    <tr>
                        <td>Reservations</td>
                    </tr>

                    <tr>
                        <td>Review</td>
                    </tr>

                    <tr>
                        <td>Rate</td>
                    </tr>

                    </tbody></table>

            </div>
            <div class="col-md-4" fdiv = "naslovkt">
                <table tfont = "font" align="center">
                    <tbody>
                    <tr>
                        <td name = "kt" colspan="2">CONTACT</td>
                    </tr>
                    <tr><td>Address:</td>
                        <td>Kumanovska 14, Vračar</td>
                    </tr><tr><td>Phone:</td>
                        <td>011/3086 979,</td>
                    </tr><tr><td>
                        </td><td>011/3449 322</td>
                    </tr><tr><td>Fax:</td>
                        <td>011/3830 972</td>
                    </tr><tr><td>E-mail:</td>
                        <td><a href="mailto:eserbia@gmail.com">eserbia@gmail.com</a></td>
                    </tr><tr><td></td>
                    </tr></tbody>
                </table>
            </div>
            <div class="col-md-3" fdiv = "naslovkt">

                <table tfont = "font" align="center" style = "margin-bottom: 8px">
                    <tbody>

                    <tr>
                        <td name = "kt">INFO</td>
                    </tr>

                    <tr>
                        <td>Follow us</td>
                    </tr>

                    </tbody></table>


                <a href="http://www.googleplus.com">
                    <img ng-src="https://s25.postimg.org/ms3vidi3j/googleplus.png" width="25" height="25">
                </a>

                <a href="http://www.facebook.com">
                    <img ng-src="https://s25.postimg.org/4o0uxqkez/facebook.png" width="25" height="25">
                </a>

                <a href="http://www.instagram.com">
                    <img ng-src="https://s25.postimg.org/53c4qr6cf/linkedin.png" width="25" height="25">
                </a>


                <a href="http://www.twitter.com">
                    <img ng-src="https://s25.postimg.org/b5jrh8usf/twitter.png" width="25" height="25">
                </a>

                <a href="http://www.youtube.com">
                    <img ng-src="https://s25.postimg.org/t9ms1vsgv/youtube.png" width="25" height="25">
                </a>

            </div>

            <div class="col-md-1"></div>
        </div>
    </div>
</footer>
</html>