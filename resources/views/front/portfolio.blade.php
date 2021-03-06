<div id="portfolio">
    <div style="padding-top:6rem;">
        <div class="container">
            <h1 class="text-center header mb-3">
                <span>
                    OUR PORTFOLIO
                </span>
            </h1>

            <div class="row mt-5">
                @foreach (\App\Gallery::all() as $item)

                <div class="col-md-3 mb-3 " @if($item->count()>0)
                    onclick="window.location.replace('/gall/{{$item->id}}');" @endif>
                    <div class="h-100 w-100 overlay-wrapper">
                        <img src="{{asset($item->image)}}" class="w-100 h-100">
                        <div class="overlay p-3">
                            <div class="overlay-child">
                                {{$item->category}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
