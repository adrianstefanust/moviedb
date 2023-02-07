<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>{{ $title ?? 'Movie DB' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Movie DB" name="description" />
    <meta content="ourclient.space" name="author" />
    <!-- App favicon -->
    <link type="image/png" rel="icon" href="{{ asset('assets/images/giftbox.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/giftbox.png') }}">

    <!-- DataTables -->
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel=" stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel=" stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel=" stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/twitter-bootstrap-wizard/prettify.css') }}" rel=" stylesheet" type="text/css" />


    <link rel="stylesheet" href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}">
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>

</head>

<body data-layout="horizontal" class="pace-done">

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">