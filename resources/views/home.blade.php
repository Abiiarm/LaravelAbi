@extends("Layout/isGuest")

@section("content")
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
{{-- <h3>{{$articles}}</h3> --}}
{{-- <div class="container"> --}}
        {{-- <h3>{{ $title }}</h3> --}}
        {{-- <div class="col-12 mx-auto">
            <form method="POST" action={{ route('dashboard_logout') }} class="py-2">
                @csrf
                <input class="form-control" name="token" type="hidden" value={{ $users->token }} />
                <button class="btn btn-danger">Logout</button>
            </form>
        </div> --}}
        {{-- {{ session()->get('message') }} --}}
        {{-- <div class="py-2"> --}}
            {{-- <form method="POST" action={{ route('article_add_action') }}>
                @csrf
                <input class="form-control mt-6" type="text" placeholder="judul" name="title" />
                <input class="form-control mt-2" type="text" placeholder="deskripsi" name="description" />
                <input class="form-control mt-2" type="text" placeholder="tag" name="tag" />
                <div class="col-2 mx-auto">
                    <button class="btn btn-primary my-4" type="submit">Buat Artikel</button>
            </div>
        </form> --}}
        {{-- </div>
            <table class="table table-bordered">
                <tr> --}}
                    {{-- <th>id</th>
                        <th>title</th>
                        <th>description</th>
                <th>tag</th>
                <th>action</th> --}}
                {{-- </tr> --}}
<body id="vanta-canvas">
    <div data-aos="fade-down"
    data-aos-duration="1500"
    data-aos-anchor-placement="center-bottom" class="text-center text-white p-3 m-3">
        <h2> SELAMAT DATANG DI HOME PAGE ARTIKEL </h2>
    </div>
    <div  data-aos="fade-up"
    data-aos-duration="1200" class="container" href="atas">
        <div class="row">
            @foreach ($articles as $article)
            <div data-aos="fade-up"
            data-aos-duration="1100" class="col-md-12 mb-2">
                <div data-aos="fade-up"
                data-aos-duration="1100" class="card border-dark ">
                            {{-- <img src="https://source/unsplash.com/1200x400?water" class="card-img-top" alt=""> --}}
                            <div class="card-body  py-4 text-white border-dark rounded-3 border border-3 p-4">
                                <h5 class="card-title  fw-bolder">{{ $article->title }}</h5>
                                <p class="card-text m-3 pt-1">{{ $article->description}}</p>
                                <small class="card-text fst-italic m-0 p-0">{{ $article->tag }}<small class="d-block">{{$article->created_at->diffForHumans()}}</small></small></i></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="text-center text-white m-4">
                        <h5 class="">Terimakasih sudah membaca</h5>
                    </div>
                </div>
            </div>
            <div class="top" id="top" onclick="directing()"><i class="bi bi-arrow-up btn btn-primary fs-6"></i></div>
            <script>
                function directing() {
                    window.scrollTo({
                        top : 0
                    })
                }
              </script>
              <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
              <script>
                AOS.init();
              </script>
</body>
        <link rel="stylesheet" href="/css/style.css">
        @endsection

        {{-- <tr> --}}
            {{-- <td>{{ $article->id }}</td> --}}
            {{-- <td>{{ $article->title }}</td>
            <td>{{ $article->description }}</td>
            <td>{{ $article->tag }}</td> --}}
            {{-- </tr> --}}
            {{-- </table> --}}
                {{-- </div> --}}
                {{-- @foreach ( $articles as $article)
                    @endforeach
            <div>
                <table class="table table-bordered">
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>description</th>
                        <th>tag</th>
                        <th>action</th>
                    </tr>
                    @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->description }}</td>
                            <td>{{ $article->tag }}</td>
                            <td>
                                <div>
                                    <a href="" class="btn btn-link">edit</a>
                                    <form method="POST" action={{ route('article_delete_action') }}>
                                        @csrf
                                        <input class="form-control" type="hidden" name="id" value={{ $article->id }} />
                                        <button class="btn btn-link" type="submit">hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table> --}}
                {{-- <ul class="nav justify-content-center pb-2 mb-4">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">LOGIN</a>
                    </li>
                </ul> --}}
                {{-- <h3><a href="/article/{{ $article->id}}">{{ $article->title}}</a></h3> --}}
            {{-- </div>
            <hr/>
        </div> --}}
