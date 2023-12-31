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



    <style type="text/css">
        .title_deg {
            font-size: 30px;
            font-weight: bold;
            padding: 30px;
            text-align: center;
        }

        .table_deg {
            border: 1px solid white;
            width: 80%;
            text-align: center;
            margin: 100px;
        }

        .th_deg {
            background-color: skyblue;
        }

        td {
            padding: 10px;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->

        <div class="page-content">


            @if (session()->has('message'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ session()->get('message') }}
                </div>
            @endif




            <h1 class="title_deg">All Posts</h1>

            <table class="table_deg">
                <tr class="th_deg">
                    <th>Request Title</th>
                    <th>Description</th>
                    <th>Request by</th>
                    <th>Request Status</th>
                    <th>User Type</th>

                </tr>

                @foreach ($post as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>{{ $post->name }}</td>
                        <td>{{ $post->post_status }}</td>
                        <td>{{ $post->usertype }}</td>
                        <td>
                            <a href="{{ url('delete_post', $post->id) }}" class="btn btn-danger"
                                onclick="confirmation(event)">Delete</a>
                        </td>

                        <td>
                            <a href="{{ url('accept_post', $post->id) }}" class="btn btn-secondary">Accept</a>
                        </td>

                        <td>
                            <a href="{{ url('reject_post', $post->id) }}" class="btn btn-primary">Reject</a>
                        </td>
                    </tr>
                @endforeach

            </table>


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
    <script>
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect)
            swal({
                    title: "Are you sure you want to delete this ?",
                    text: "You won't be able to revert this delete",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })

                .then((willCancel) => {
                    if (willCancel) {
                        window.location.href = urlToRedirect;
                    }
                });
        }
    </script>
</body>

</html>
