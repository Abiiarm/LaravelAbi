<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DASHBOARD LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-link pb-1 mb-4">
            <div class="container-fluid">
                <a class="navbar-brand text-white btn btn-primary" href="/">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white btn btn-primary" aria-current="page" href="/dashboard">Dashboard</a>
                    </li>
                </ul>
            </div>
            <div class="justify-content-md-end">
                <form method="POST" action={{ route('dashboard_logout') }} class="py-2">
                    @csrf
                    <input class="form-control" name="token" type="hidden" value={{ $users->token }} />
                    <button class="btn btn-danger me-md-2">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    {{-- our content --}}
    <div>
        @yield('content')
    </div>
    {{-- end of our content --}}
    <footer class="h5 text-center text-white">&copy; ABI - LARAVEL 9 🌹</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    {{-- <link rel="stylesheet" href="/css/test.css"> --}}
</body>

</html>
