<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div>
        <header>
            <ul class="nav justify-content-center pb-2 mb-4">
                <li class="nav-item">
                  <a class="nav-link active text-white btn btn-primary m-2" aria-current="page" href="/"><b>HOME</b></a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="/login">LOGIN</a>
                </li> --}}
            </ul>
        </header>
        {{-- our content --}}
        <div>
            @yield("content")
        </div>
        {{-- end of our content --}}
    </div>
</body>
</html>
