<!DOCTYPE html>
<!--pravimo prvi korak u angularu definisemo controler i vidimo kako se koristi-->
<html ng-app="ExploreSerbia">
<head>
    <title>Explore Serbia</title>
    <!--ukljucujemo angularjs biblioteku-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.32/angular.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.32/angular-route.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--ukljucujemo ,,controller" zapocetnu stranicu -->
    <script type="text/javascript" src="exploreserbia.js"></script>

    <script type="text/javascript" src="controller/offersController.js"></script>
    <script type="text/javascript" src="controller/indexController.js"></script>
    <script type="text/javascript" src="controller/deleteCommentController.js"></script>
    <script type="text/javascript" src="controller/addCommentController.js"></script>
    <script type="text/javascript" src="public/controller/quickSearchController.js"></script>
    <script type="text/javascript" src="public/model/commentModel.js"></script>
    <script type="text/javascript" src="public/model/offerModel.js"></script>
    <script type="text/javascript" src="public/model/indexModel.js"></script>
    <script type="text/javascript" src="public/model/quickSearchModel.js"></script>
    <link rel="stylesheet" href="views/style.css">

</head>
<body>
<!--ovde ce se dodavati viewovi tokom rada aplikacije zavisno od rute na kojoj se nalazimo ng-view prikazuje odgovarajuci view i sve se to dinamicki menja-->
<div ng-view>
</div>
</body>
</html>