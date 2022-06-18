@extends('layouts.app')

@section('content')
    <div class="mb-3 d-flex flex-column align-items-center">
        {{--        <div class="m-5">@foreach($works as $work)--}}
        {{--                <div >--}}
        {{--                    <h3  style="width: 300px; height: 50%; word-wrap: break-word;">{{$work->title}}</h3>--}}
        {{--                </div>--}}
        {{--            @endforeach--}}
        {{--        </div>--}}
        {{--        <div>--}}
        {{--            @foreach($works as $work)--}}

        {{--                <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel"--}}
        {{--                     data-interval="false">--}}
        {{--                    <div class="carousel-inner d-flex justify-content-center">--}}
        {{--                        @foreach($work->images as $img)--}}
        {{--                            <div class="carousel-item @if($loop->first) active @endif m-5 ">--}}
        {{--                                <img src="{{$img->image}}" alt="..."--}}
        {{--                                     style="object-fit: fill;--}}
        {{--                                 width:500px;--}}
        {{--                                 height: 300px">--}}
        {{--                            </div>--}}
        {{--                        @endforeach--}}

        {{--                    </div>--}}
        {{--                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"--}}
        {{--                            data-slide="prev">--}}
        {{--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
        {{--                        <span class="sr-only ">Previous</span>--}}
        {{--                    </button>--}}
        {{--                    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"--}}
        {{--                            data-slide="next">--}}
        {{--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
        {{--                        <span class="sr-only">Next</span>--}}
        {{--                    </button>--}}

        {{--                    @endforeach--}}
        {{--                </div>--}}
        {{--        </div>--}}
        @foreach($works as $work)
            <div class="d-flex justify-content-around flex-wrap border border-secondary mt-3">

                <div class="fotorama " data-nav="thumbs" data-width="100%"
                     data-ratio="500/500"
                     data-minwidth="300"
                     data-maxwidth="500"
                     data-minheight="300"
                     data-maxheight="500">
                    @foreach($work->images as $img)
                        <img src="{{$img->image}}">
                    @endforeach
                </div>
                <div class="m-1">
                    <h3 class="work-header" style="width: 300px; height: 50%; word-wrap: break-word;">{{$work->title}}</h3>
                </div>
            </div>
        @endforeach
    </div>
@endsection
