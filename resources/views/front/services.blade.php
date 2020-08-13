<div id="services">
    <div style="padding-top:6rem;">
        <div class="container">
            <h1 class="text-center header mb-3">
                <span>
                    Our Services
                </span>
            </h1>

            <?php $i=1;?>
            @foreach (\App\Services::all() as $item)
            <div class="row mt-5">
                <div class="col-md-6 mb-3 mt-3 {{$i%2==0?"d-block d-md-none":""}} ">
                    <img src="{{asset($item->image)}}" class="w-100">
                </div>
                <div class="col-md-6 {{$i%2==0?"text-right":"text-left"}}">
                    <div class="center">

                        <h4 style="color:#67648F;">{{$item->title}}</h4>
                        <div>
                            {{$item->description}}
                        </div>
                    </div>
                </div>
                @if($i%2==0)
                <div class="col-md-6 mb-3 mt-3 d-none d-md-block">
                    <img src="{{asset($item->image)}}" class="w-100">
                </div>
                @endif
            </div>

            <div class="text-center pt-5 pb-5">
                <div style="width:20%;height:2px;background:#b0b0b0;display:inline-block;opacity:0.2"></div>
            </div>
            <?php $i+=1;?>
            @endforeach
        </div>
    </div>
</div>