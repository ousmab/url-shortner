<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The best Url shortner</title>
		<style> 

			.error-msg{ 
				color: red;
				font-weight: bold;
				font-size: 12px;
				font-style:italic;
			 }
		</style>
        
    </head>
    <body>
    @yield('content')
    </body>
</html>
