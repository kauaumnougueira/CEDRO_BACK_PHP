@extends('layouts.app')

@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($images as $index => $image)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
        @endforeach
    </ol>

    <div class="carousel-inner">
    @foreach($images as $index => $image)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
            <img src="{{ $image->path }}" class="d-block w-50 img-responsive m-auto" alt="{{ $image->nome }}">
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
