@extends('layouts.app')

@section('content')
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
                        @foreach($images as $index => $image)
                            <li data-target="#carouselExampleSlidesOnly" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                        @endforeach
                        </ol>

                        <div class="carousel-inner">
                        @foreach($images as $index => $image)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <h6 class="text-center">{{ $image->nome }}</h6>
                                <a href="{{ route('exame', 'pesquisa='.$image->nome)}}">
                                    <img src="{{ $image->path }}" class="d-block w-100 img-responsive m-auto" alt="{{ $image->nome }}">
                                </a>
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
<script>
    $(document).ready(function() {
    $('.carousel-control-prev').click(function(){
        console.log('prev clicked');
        $('#carouselExampleSlidesOnly').carousel('prev');
    });

    $('.carousel-control-next').click(function(){
        console.log('next clicked');
        $('#carouselExampleSlidesOnly').carousel('next');
    });
    });
</script>
@endsection
