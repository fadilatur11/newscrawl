<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">
	<meta name="google-site-verification" content="vmrcROcqybn_IGBvRFjrQfN0tF5GZglHbCuM_7VkONo" />
	@include('detail.meta')
	@yield('metahome')
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/css/framework7.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/framework7-icons.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/demo.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" title="default" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div id="app">
