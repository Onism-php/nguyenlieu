<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="Nguyên liệu pha chế Ly Phạm- nơi cung cấp nguyên liệu uy tín, giá rẻ cho học viên">
    <meta name="keywords" content="khoá học pha chế, nguyên liệu pha chế, Khoá học pha chế">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Nguyên liệu pha chế">
    <meta property="og:description" content="Nguyên liệu pha chế Ly Phạm - nơi cung cấp nguyên liệu uy tín, giá rẻ cho học viên">
    <meta property="og:image" content="https://example.com/image.jpg">
    
    <meta name="twitter:title" content="Nguyên liệu pha chế">
    <meta name="twitter:description" content="Nguyên liệu pha chế Ly Phạm- nơi cung cấp nguyên liệu uy tín, giá rẻ cho học viên">
    <meta name="twitter:image" content="https://example.com/image.jpg">
    


    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <!-- main -->
    <div class="app">

        <!-- header -->
        @include('Client.layouts.partials.header')
        <!-- container -->
        @yield('content')
        <!-- footer -->
@include('Client.layouts.partials.footer')


    <!-- script js -->
    <script src="assets/js/product.js"></script>
    
</body>
</html>