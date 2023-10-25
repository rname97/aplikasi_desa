<!doctype html>
<html lang="en">
<head>

    @include('user.partials.header')
    <style>
        .table thead th {
            background-color:#435d7d;
            color: #ffffff;
            font-size: 17px;
            font-weight: normal;
        }

        /* .tbl-container {
            width: 400px;
            margin-top: 10px;
            margin-left: 10px;
        } */



        .bdr {
            border-radius: 7px;
            overflow: hidden;
        }

        body {

            /* height: 100vh; */
            /* display: flex;
            flex-direction: column; */
            /* min-height: 100vh; */
    display: flex;
    flex-direction: column;
        }

        footer {
            /* margin-top: auto; */
            /* position:relative;
            bottom:0; */

            clear: both;
    position: relative;
    height: 200px;
    margin-top: -200px;
        }

        /* .content {
            position:relative;
} */




    </style>

</head>
<body>
    {{-- <div class="container"> --}}
        @include('user.partials.nav')
        @yield('content')

        @include('user.partials.footer')

        @include('user.partials.scripts')
        @yield('contentx')



</body>
</html>
