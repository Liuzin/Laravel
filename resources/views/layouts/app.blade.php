<!DOCTYPE html>
<html lang="ru">

    <head>
	<meta name="author" content="Ekaterina Tupii">
	<meta name="content" content="Таск-менеджер">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
	
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
        <title>Таск-менеджер</title>
        
    </head>
    <body>
        @yield('content')
		
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
    </body>
</html>
