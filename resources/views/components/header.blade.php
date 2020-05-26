<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">
		@if (Request::segment(1) == 'detail')
		<title></title>
	   	<meta property="og:type" content="article" />
    	<meta property="og:site_name" content="detiknews" />
		<meta name="description" content="" itemprop="description" />
		<meta name="originalTitle" content="" />
    	<meta property="og:title" content="" />
    	<meta property="og:image" content="" />
    	<meta property="og:description" content="" />
    	<meta property="og:url" content="{{url()->current()}}" />
    	<meta property="og:image:type" content="image/jpeg" />
    	<meta property="og:image:width" content="650" />
    	<meta property="og:image:height" content="366" />
		<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
		<meta name="copyright" content="detiknews" itemprop="dateline" />
        <meta name="publishdate" content=""  />
        <meta name="platform" content="desktop"  />
        <meta name="author" content=""  />
        <meta content="" itemprop="headline" />
        <meta name="thumbnailUrl" content="" itemprop="thumbnailUrl" />
        <meta property="article:author" content="https://www.facebook.com/detikcom" itemprop="author" />
        <meta property="article:publisher" content="https://www.facebook.com/detikcom" />
        <meta name="pubdate" content="" itemprop="datePublished" />
        <meta content="{{url()->current()}}" itemprop="url" />
        
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@detikcom" />
        <meta name="twitter:site:id" content="@detikcom" />
        <meta name="twitter:creator" content="@detikcom" />
        <meta name="twitter:description" content="" />
        <meta name="twitter:image" content="" />
        <link rel="alternate" href="{{url()->current()}}"/>
        <link rel="alternate" media="only screen and (max-width: 640px)" href="{{url()->current()}}">
                        
        <link rel="canonical" href="{{url()->current()}}" />
        <meta name="pagesize" content="1"  />
        <meta name="pagenumber" content="1"  />
		@endif
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<link rel="stylesheet" href="{{$assets}}/css/framework7.min.css">
	<link rel="stylesheet" href="{{$assets}}/css/framework7-icons.css">

	<link rel="stylesheet" type="text/css" href="{{$assets}}/css/demo.css"/>
	<link rel="stylesheet" type="text/css" href="{{$assets}}/css/style.css" title="default" />

</head>
<body>
	<div id="app">