@extends('layout.principal')

@section('title')
    Inicio
@endsection

@section('styles')
@endsection

@section('content')

@if (!is_null($last_blog))
    <section class="container mt-5 text-white">
        <div class="row">
            <div class="col-12 mb-5">
                <p class="h1 mb-3">Último Blog</p>
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img src="{{ env('APP_URL') }}/uploads/blogs/{{ $last_blog->image_2 }}" width="300px">
                    </div>
                    <div class="col-md-6">
                        <p class="h4 mb-2 bolder">{{ $last_blog->title }}</p>
                        <p class="mb-3">{{ substr($last_blog->description, 0, 300) }} ...</p>
                        <a href="{{ URL::route('blog-detail', $last_blog->id) }}"><p class="btn btn-primary">Ver más</p></a>
                    </div>
                </div>
            </div>

            @foreach ($blogs as $blog)
            <div class="col-md-4">
                <div class="card mr-4 mt-3">
                    <div class="text-center mb-2">
                        <img src="{{ env('APP_URL') }}/uploads/blogs/{{ $blog->image_2 }}" class="img_blog">
                        <p class="h5 mt-4 mb-2 bolder">{{ $blog->title }}</p>
                        <p class="mt-4 mb-3 text-justify">{!! substr($blog->description, 0, 110) !!} ...</p>
                        <a href="{{ URL::route('blog-detail', $blog->id) }}"><p class="btn btn-primary">Ver más</p></a>
                    </div>
                </div>
            </div>
            @endforeach
            @if ($blogs->lastPage() > 0)
                <div class="col-12 mt-5 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="{{ $blogs->previousPageUrl() }}"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-left"></i></a></li>
                            @if ($blogs->currentPage() > 1)
                                <li class="page-item"><a class="page-link" href="{{ env('APP_URL') }}/blog?page=1">1</a></li>
                                <li class="page-item disabled"><a class="page-link" href="">...</a></li>
                            @endif
                            <li class="page-item active"><a class="page-link">{{ $blogs->currentPage() }}</a></li>
                            @if ($blogs->currentPage() != $blogs->lastPage())
                                <li class="page-item disabled"><a class="page-link" href="">...</a></li>
                                <li class="page-item"><a class="page-link" href="{{ env('APP_URL') }}/blog?page={{ $blogs->lastPage() }}">{{ $blogs->lastPage() }}</a></li>
                            @endif
                            <li class="page-item"><a class="page-link" href="{{ $blogs->nextPageUrl() }}"><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            @endif
        </div>
    </section>
@else
    <section class="container mt-5 text-white">
        <div class="row">
            <div class="col-12 empty_div">
            <div class="alert alert-warning text-center">Página en mantenimiento, muy pronto podrás ver nuestra sección de Blogs</div>
            </div>
        </div>
    </section>
@endif



<style>
    .img_blog{
        width: 200px;
        height: 200px;
    }
    .card{
        border: 1px solid #fff;
        background: transparent;
        padding: 20px 20px;
    }
    .pagination {
       justify-content: center;
    }
    .empty_div{
        min-height: 300px;
    }
    .card{
        border: none;
    }
</style>

@endsection

@section('scripts')
@endsection