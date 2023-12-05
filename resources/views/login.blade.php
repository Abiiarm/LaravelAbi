@extends("Layout/header")

{{-- <link rel="stylesheet" href="/public/css/style.css"> --}}
@section("content")
<link rel="stylesheet" href="/css/style.css">
<body id="vanta-canvas">

    <div class="oke">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                @if (session()->has("succes"))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('succes')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

    @if (session()->has("error"))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session()->get("error")}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <main class="form-signin ">
        <form method="POST" action= {{ route('login_action')}}>
            @csrf
            {{-- <i>{{ session()->get("error")}}</i> --}}
            <h1 class="h3 mb-3 fw-normal text-center text-white">LOGIN</h1>
              <div class="form-floating">
                  <input type="text" class="form-control pb-2 mb-2  @error("username") is invalid @enderror" name="username" id="username" placeholder="username" autofocus value="{{ old ("username")}}">
                  <label for="username">Username</label>
                  @error("username")
                  <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control pb-2 mb-3" name="password" id="password" placeholder="password">
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary text-center" type="submit">Sign in</button>
            </form>
            <small class="d-block text-center mt-3 text-white">Not registerd? <a href="/register">Register Now!</a></small>
            <p class="mt-3 mb-3 text-center text-muted text-white">&copy; Abi-Armansyah</p>
        </main>
    </div>
</div>
</div>
</body>
@endsection
