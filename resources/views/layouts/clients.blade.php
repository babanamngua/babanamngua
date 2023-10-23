<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/clients/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/style.css')}}">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' >
    @yield('css') 
    <title>cloudy - @yield('title')</title>
</head>
<body>

        {{-- main --}}
<div class="container1">

    <div class="row1">
{{-- left main --}}

        <div class="leftmain">

            <aside>
                <div class="header">
                    @include('clients.blocks.header-sidebar')
                </div>
                <div class="sidebar">
                    @include('clients.blocks.sidebar')
                </div>
                

                </aside>
        </div>
        {{-- right main --}}
        <div class="rightmain">
            
            <div class="content" id="content">
                @include('clients.blocks.header-main')
                <div class="name10buk">
                @yield('content')
                @include('clients.blocks.footer-main')
                </div>
            </div>
        </div>
                </div>
                {{-- @include('clients.blocks.footer') --}}
</div>

    {{-- footer --}}
   
    <script src="{{asset('assets/clients/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/clients/js/custom.js')}}"></script>
    <script type="text/javascript"src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    @yield('js')
</body>
</html>