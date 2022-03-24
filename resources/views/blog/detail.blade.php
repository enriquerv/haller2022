@extends('layout.principal')

@section('title')
    Inicio
@endsection

@section('styles')
@endsection

@section('content')

<section class="container mt-5 text-white">
    <div class="row">
        <div class="col-12 mt-2">
            <p class="h1 text-center">{{ $blog->title }}</p>
            <p class="h4 text-center">Por {{ $blog->written_by }}</p>
            <section class="mt-4">
                <img src="{{ env('APP_URL') }}/uploads/blogs/{{ $blog->image_1 }}" style="width: 100%;">
            </section>
        </div>
        <div class="col-12 mt-2">
            <p class="h5 mt-4 text-center">{!! nl2br($blog->description) !!}</p>
        </div>
    </div>
</section>


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
</style>

@endsection

@section('scripts')
@endsection