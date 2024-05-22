<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN KUESIONER - Register</title>

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>

    <style>
        .custom-header-bg {
            background-color: #BBDADD;
            color: #1D828E;
        }
        .custom-table, 
        .custom-table th, 
        .custom-table td {
            border: 1px solid #BBDADD !important;
        }
        .custom-sidebar-bg {
            background-color: #1D828E !important;
        }
        .calendar-card {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 16px;
            background-color: #ffffff;
            margin-bottom: 30px;
        }
        .calendar-header h4 {
            margin: 0;
            color: #333333;
            font-size: 24px;
        }
        .calendar-table {
            width: 100%;
            border-collapse: collapse;
        }
        .calendar-table th,
        .calendar-table td {
            text-align: center;
            padding: 8px;
            border: 1px solid #dddddd;
        }
        .calendar-table th {
            background-color: #f2f2f2;
            font-size: 16px;
            font-weight: bold;
        }
        .calendar-table td {
            font-size: 14px;
        }

        /* Custom styles for background and buttons */
        body {
            background-color: #1D828E;
        }
        .btn-primary, .btn-google, .btn-facebook {
            background-color: #1D828E !important;
            border-color: #1D828E !important;
        }
        .btn-primary:hover, .btn-google:hover, .btn-facebook:hover {
            background-color: #166A73 !important;
            border-color: #166A73 !important;
        }

        .text-custom-color {
            color: #1D828E;
        }
    </style>

</head>

<body id="page-top">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <img class="col-lg-6 d-none d-lg-block" src="/images/bg.png" alt="">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                  <h1 class="h4 mb-4" style="color: #1D828E;">Suarakan</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleFirstName" placeholder="First Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleLastName" placeholder="Last Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleRepeatPassword" placeholder="Repeat Password">
                                        </div>
                                    </div>
                                    <a href="index.html" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="login.html">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>
