<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{!! $title ?? (setting()->site_name_en ?? '') !!}</title>

    <link rel="icon" href="{!! !empty(setting()->icon) ? Storage::url(setting()->icon) : '' !!}" type="image/x-icon">
    <link rel="icon" href="{!! asset('design/image/icon.ico') !!}">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{!! asset('/design/plugins/fontawesome-free/css/all.min.css') !!}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{!! asset('/design/dist/css/adminlte.min.css') !!}">
{{--    <link rel="stylesheet" href="{!! asset('/design/dist/css/bootstrap-RTL-4.1.1.css') !!}">--}}
    <link rel="stylesheet" href="{!! asset('/design/dist/css/app.style.css') !!}">
    @stack('css')
{{--    <link rel="stylesheet" href="{!! asset('/design/dist/css/dashboard-style-ar.css') !!}">--}}
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @livewireStyles
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
