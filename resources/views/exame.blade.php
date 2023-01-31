@extends('layouts.app')

@section('content')

@foreach($exames_nome as $exame)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('EXAMES') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- carousel -->
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        @foreach($exames_nome as $index => $exame)
                            <li data-target="#carouselExampleSlidesOnly" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                        @endforeach
                        </ol>

                        <div class="carousel-inner">
                        @foreach($exames_nome as $index => $exame)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img src="{{ $exame->path }}" class="d-block w-100 img-responsive m-auto" alt="{{ $exame->nome }}">
                            </div>
                        @endforeach

                        <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
