<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>@yield('title', 'Blog by VG')</title>
    <meta name="description" content="Thoughts, reviews and ideas since 1999."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/') }}/screen.css"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700,700italic|Playfair+Display:400,700,400italic,700italic"/>
</head>
<body class="home-template">
<div class="site-wrapper">
    <nav class="main-nav overlay clearfix">
        <a class="blog-logo" href="/"><img src="{{ asset('img/') }}/logo.png" alt="Fashion Critiques"/></a>
        <ul id="menu">
            <li class="nav-home nav-current" role="presentation"><a href="/">Home</a></li>
            <li class="nav-article-example" role="presentation"><a href="article.html">Post Example</a></li>
            <li class="nav-about-us" role="presentation"><a href="about.html">Page Example</a></li>
            <li class="nav-author-page" role="presentation"><a href="author.html">Author Page</a></li>
            <span class="socialheader">
		<a href="#"><span class='symbol'>circletwitterbird</span></a>
		<a href="#"><span class='symbol'>circlefacebook</span></a>
		<a href="#"><span class='symbol'>circlegoogleplus</span></a>
		<a href="mailto:wowthemesnet@gmail.com"><span class='symbol'>circleemail</span></a>
		</span>
        </ul>
    </nav>
