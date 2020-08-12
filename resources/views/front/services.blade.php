<div id="services">
    <div style="padding-top:6rem;">
        <div class="container">
            <h1 class="text-center header mb-3">
                <span>
                    OUR Services
                </span>
            </h1>

            <div class="row mt-5">
                @foreach (\App\Services::all() as $item)

                <div class="col-md-4 mb-3 ">
                    <div class="h-100 w-100 overlay-wrapper">
                        <img src="{{asset($item->image)}}" class="w-100 h-100">
                        <h4 class="text-center">{{$item->title}}</h4>
                        <div class="overlay p-3">
                            <div class="overlay-child">
                                {{$item->description}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>