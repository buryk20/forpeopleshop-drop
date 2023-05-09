<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/animate.css') }}">
	<link rel="shortcut icon" href="icon/forpeopleleshop-favicon.webp" type="image/x-icon">
	<meta name="description" content="{{ __('messages.logic_meta_description') }}">
    <title>{{ __('messages.logic_meta_title') }}</title>

    <meta property="og:title" content="{{ __('messages.logic_og_title') }}">
	<meta property="og:site_name" content="LogicLink">
	<meta property="og:url" content="https://logiclink.com.ua">
	<meta property="og:description" content="{{ __('messages.logic_og_description') }}">
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://logiclink.com.ua/img/ogimage.png">
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="logiclink.com.ua">
	<meta property="twitter:url" content="https://logiclink.com.ua/">
	<meta name="twitter:title" content="{{ __('messages.logic_og_title') }}">
	<meta name="twitter:description" content="{{ __('messages.logic_og_description') }}">
	<meta name="twitter:image" content="https://logiclink.com.ua/img/ogimage.png">
</head>
<body>

	@include('partials.header')

		@yield('content')

	@include('partials.footer')

</body>

</html>