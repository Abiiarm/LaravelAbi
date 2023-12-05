@extends("Layout/isGuest")

@section("content")
<link rel="stylesheet" href="/css/style.css">
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-4">

            {{-- @if (session()->has("succes"))
    <div class="alert alert-succes alert-dismissible fade show" role="alert">
        {{session('succes')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif --}}
        <main class="form-registration">
            <form method="post" action= "/register">
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center text-white">Registration Form</h1>
                <div class="form-floating @error('username') is-invalid @enderror">
                <input type="text" class="form-control pb-2 mb-2 @error('username') is-invalid @enderror" name="username" id="username" placeholder="username" autofocus required>
                <label for="username">Username</label>
                @error("username")
                <div class="invalid-feedback">
                    {{ $message}}
                </div>
                @enderror
            </div>
              <div class="form-floating">
                <input type="password" class="form-control pb-2 mb-3 @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="password"required>
                <label for="floatingPassword">Password</label>
                @error("password")
                <div class="invalid-feedback">
                    {{ $message}}
                </div>
                @enderror
              </div>
              <button class="w-100 md-2 btn btn-lg btn-primary text-center" type="submit">Register</button>
            </form>
        <p class="mt-3 mb-3 text-center text-muted">&copy; Abi-Armansyah</p>
    </main>
    </div>

</div>
@endsection
