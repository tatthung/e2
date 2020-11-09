<!doctype html>
<html lang='en'>
<head>

	<title>404 Page Not Found</title>
	<meta charset='utf-8'>

</head>
<body>

@extends('templates.master')

@section('title')
    All Products
@endsection

@section('content')
<h2>404 Page Not Found</h2>
<a href='{{ $app->config('app.url') }}'>{{ $app->config('app.url') }}</a>

@endsection


	
</body>
</html>
