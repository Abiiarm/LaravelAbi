@extends('Layout/isUser')

@section('content')
<link rel="stylesheet" href="/css/style.css">
    <div class="container text-white">
        <h3>{{ $title }}</h3>
        {{-- <div class="col-12 mx-auto">
            <form method="POST" action={{ route('dashboard_logout') }} class="py-2">
                @csrf
                <input class="form-control" name="token" type="hidden" value={{ $users->token }} />
                <button class="btn btn-danger">Logout</button>
            </form>
        </div> --}}
        {{ session()->get('message') }}
        <div class="py-2">
            <form method="POST" action={{ route('article_add_action') }}>
                @csrf
                <input class="form-control mt-6 @error('title') is-invalid @enderror" type="text" placeholder="Judul" name="title" id="title"/>
                @error("title")
                <div class="invalid-feedback">
                    {{ $message}}
                </div>
                @enderror
                <input class="form-control mt-2 @error('description') is-invalid @enderror" type="text" placeholder="Deskripsi" name="description" id="description"/>
                @error("description")
                <div class="invalid-feedback">
                    {{ $message}}
                </div>
                @enderror
                <input class="form-control mt-2 @error('tag') is-invalid @enderror" type="text" placeholder="Tag" name="tag" id="tag"/>
                @error("tag")
                <div class="invalid-feedback">
                    {{ $message}}
                </div>
                @enderror
                <div class="col-2 mx-auto">
                <button class="btn btn-primary my-4" type="submit">Buat Artikel</button>
            </div>
            </form>
        </div>
        <table class="table table-bordered">
            <tr class="text-white">
                <th>id</th>
                <th>title</th>
                <th>description</th>
                <th>tag</th>
                <th>action</th>
            </tr>
            @foreach ($articles as $article)
                <tr class="text-white">
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->description }}</td>
                    <td>{{ $article->tag }}</td>
                    <td>
                        <div>
                            <a href="" class="btn btn-transparent text-white btn btn-primary m-2">edit</a>
                            <form method="POST" action={{ route('article_delete_action') }}>
                                @csrf
                                <input class="form-control" type="hidden" name="id" value={{ $article->id }} />
                                <button class="btn btn-transparent text-white btn btn-danger p-2 m-2" type="submit">hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
