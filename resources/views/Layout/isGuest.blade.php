<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
</head>
<body>
    <div>
        <header>

            <ul class="nav justify-content-center pb-10 mb-4">
                <li class="nav-item">
                  <a class="nav-link active text-white btn btn-primary m-2" aria-current="page" href="/"><b>HOME</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white btn btn-primary m-2" href="/login"><b>LOGIN</b></a>
                </li>
            </ul>
        </header>

        @yield("content")
        <div>
        </div>
        {{-- our content --}}
        {{-- end of our content --}}
    </div>
</body>
</html>
