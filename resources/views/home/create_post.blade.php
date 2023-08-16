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
    <style>
        .div_deg {
            text-align: center;
        }

        .title_deg {
            font-size: 30px;
            font-weight: bold;
            padding: 30px;

        }

        label {
            display: inline-block;
            width: 200px;
            font-size: 18px;
            font-weight: bold;
        }

        .field_deg {
            padding: 25px;
        }
    </style>

</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        @include('home.header')

    </div>



    <div class="div_deg">
        <h2 class="title_deg">add suggestion</h2>
        <form action="{{ url('user_post') }}" method="POST">
            @csrf
            <div class="field_deg">
                <label for="">title</label>
                <input type="text" name="title">
            </div>

            <div class="field_deg">
                <label for="">description</label>
                <textarea name="description"></textarea>
            </div>

            <div class="field_deg">
                <button class="btn btn-primary">Send Request</button>
            </div>
        </form>
    </div>




    <!-- footer section start -->
    @include('home.footer')
</body>

</html>
