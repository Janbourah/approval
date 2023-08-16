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

    <base href="/public">
    @include('home.homecss')



</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        @include('home.header')
    </div>

    <div class="col-md-12" style="text-align: center; padding:100px;">
        <h2 style="padding: 20px;"><b>{{ $post->title }}</b></h2>
        <h4 style="padding: 40px;">{{ $post->description }}</h4>
        <p style="padding: 40px;">post by <b>{{ $post->name }}</b></p>

    </div>


    <!-- footer section start -->
    @include('home.footer')
</body>

</html>
