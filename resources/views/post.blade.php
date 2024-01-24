@extends('plantillas.layout')

@section('title', 'Post Test')

@section('content')
 <!-- Page content-->
 <!-- Page header with logo and tagline-->
 <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <form method="POST" action="{{ url('/post') }}">
                    @csrf
                    <div class="form-group">
                        <label for="title">Titulo:</label>
                        <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Ingrese titulo">
                        <small id="emailHelp" class="form-text text-muted">We ' ll never share your email with anyone else.</small>
                     </div>
                    <div class="form-group">
                        <label for="post">publicacion:</label>
                        <textarea type="text" name="post" class="form-control" id="post" placeholder="texto del blog"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
</header>
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to RideApp for Bikers!</h1>
                    <p class="lead mb-0">Here you can share your motorcycle adventures</p>
                </div>
            </div>
 </header>
 <!-- Page content-->
<div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://cdn.pixabay.com/photo/2016/03/18/11/26/farm-1264761_1280.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{ $postOne->created_at }}</div>
                            <h2 class="card-title">{{ $postOne->title }}</h2>
                            <p class="card-text">{{ $postOne->post }}</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    @foreach($postlist as $item)
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{ $postOne->created_at }}</div>
                                    <h2 class="card-title h4">{{ $postOne->title }}</h2>
                                    <p class="card-text">{{ $postOne->post }}</p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{ $postOne->created_at }}</div>
                                    <h2 class="card-title h4">{{ $postOne->title }}</h2>
                                    <p class="card-text">{{ $postOne->post }}</p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{ $postOne->created_at }}</div>
                                    <h2 class="card-title h4">{{ $postOne->title }}</h2>
                                    <p class="card-text">{{ $postOne->post }}</p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{ $postOne->created_at }}</div>
                                    <h2 class="card-title h4">{{ $postOne->title }}</h2>
                                    <p class="card-text">{{ $postOne->post }}</p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Tutorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            </div>
</div>


@endsection

<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>
<body>
    @isset($postlist)

        @foreach ($postlist as $item)
            <h1>{{ $item->title }}</h1>
            <p>{{ $item->post }}</p>
            <hr>
        @endforeach
    @endisset



</body>
</html>
-->
