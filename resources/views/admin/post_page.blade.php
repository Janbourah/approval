<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    @include('admin.css')

    <style class="text/css">
        .post_title {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
        }

        .div_center {
            text-align: center;
            padding: 30px;
        }

        label {
            display: inline-block;
            width: 200px;
        }
    </style>







</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->

        <div class="page-content">

            @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                    {{ session()->get('message') }}
                </div>
            @endif
            <h1 class="post_title">Add Post</h1>
            <div>
                <form action="{{ url('add_post') }}" method="POST">
                    @csrf
                    <div class="div_center">
                        <label for="">post title</label>
                        <input type="text" name="title">
                    </div>
                    <div class="div_center">
                        <label for="">post description</label>
                        <textarea name="description"></textarea>
                    </div>
                    <div class="div_center">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>

        </div>


        @include('admin.footer')
    </div>
    </div>
    <!-- JavaScript files-->
    <script src="admincss/vendor/jquery/jquery.min.js"></script>
    <script src="admincss/vendor/popper.js/umd/popper.min.js"></script>
    <script src="admincss/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admincss/vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="admincss/vendor/chart.js/Chart.min.js"></script>
    <script src="admincss/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admincss/js/charts-home.js"></script>
    <script src="admincss/js/front.js"></script>
</body>

</html>
