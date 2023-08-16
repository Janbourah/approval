<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>A World</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('home.homecss')

</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        @include('home.header')

    </div>
    <!-- header section end -->
    <!-- services section start -->
    @include('home.services')
    <!-- services section end -->




    <!-- footer section start -->
    @include('home.footer')
</body>

</html>
