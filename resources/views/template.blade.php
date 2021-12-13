<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="/css/template.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

    <title>@yield('title')</title>
    <title>Home</title>
    <style>
    </style>

</head>
<body>
    <div class="row" id="body-row">
        <div class="wrapper">
            <div  class="sidebar">
                <div id="box-satu" class= "profile">
                    <img src="/img/profile.png" alt="profil">
                    <h3>{{ Auth::user()->name }}</h3>
                </div>
                
                <ul>
                    <li>
                        <a href="{{ url('/home') }}" class="">
                            <span class="icon"><i class="fas fa-home"></i></span>
                            <span class="item">Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/notif') }}" >
                            <span class="icon"><i class="fas fa-bell"></i></span>
                            <span class="item">Notification</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/viewStock') }}">
                            <span class="icon"><i class="fas fa-eye"></i></span>
                            <span class="item">View Stock</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/create') }}">
                            <span class="icon"><i class="fas fa-plus-circle"></i></span>
                            <span class="item">Create Stock</span>
                        </a>
                    </li>
                    <li>
                        <br>
                        </br>
                    </li>

                    <li>
                        <a href="/setting" style="border-top: 2px solid white">
                            <span class="icon"  ><i class="fas fa-cog"></i></span>
                            <span class="item">Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}" >
                            <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                            <span class="item">Logout</span>
                        </a>
                    </li>
                </ul>

            </div>
            
        </div>

        <div class="row">
             @yield('isi')
        </div>
    </div>

  <!-- <script> -->

  <!-- </script> -->
</body>
</html>