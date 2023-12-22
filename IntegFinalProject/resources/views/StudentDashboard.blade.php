<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="icon"
        href="https://bitbucket.org/chocoalain/online-files/raw/331a758d4cb12ca0c85e538381674bc3580e4498/1563190816830.png">
    <link href="{{ asset('css/dashboardStyles.css') }}" rel="stylesheet" />
    <link rel="icon"
        href="https://bitbucket.org/chocoalain/online-files/raw/74c9876e1625ea3111439d01672ed26e2e298efb/Logo.png">
</head>

<body style="background-color: #070372">
    <nav class="navbar position-absolute fixed-top navbar-expand-lg navbar-dark bg-dark ">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#">
                <img src="https://bitbucket.org/chocoalain/online-files/raw/74c9876e1625ea3111439d01672ed26e2e298efb/Logo.png"
                    alt="Logo" width="auto" height="50" class="d-inline-block">
                {{ env('APP_NAME') }}
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse  navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link disabled @yield('status-H')" aria-current="page"
                            href="{{ route('dashboard.home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link disabled @yield('status-F')" aria-current="page"
                            href="{{ route('dashboard.feedback') }}">Feedback</a></li>
                    <li class="nav-item"><a class="nav-link @yield('status-P')" aria-current="page"
                            href="{{ route('dashboard.profile') }}">Profile</a></li>
                    <li class="nav-item"><a class="nav-link disabled @yield('status-N')" aria-current="page"
                            href="{{ route('dashboard.profile') }}">Notification</a></li>
                </ul>
                {{-- <form class="d-flex " method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class=" btn btn-dark " type="submit" style="padding: 0px">
                        Logout
                    </button>
                </form> --}}
            </div>
        </div>
    </nav>

    {{-- <div style="padding-top: 75px">
        @yield('Gawascontent')
    </div> --}}

    <div class="container">
        @yield('content')
    </div>
    @include('background')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
