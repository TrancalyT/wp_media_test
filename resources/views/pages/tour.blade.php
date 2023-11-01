<div class="separator" id="tour-title">
    <h1>TOUR</h1>
</div>
<section id="tour">
    <div class="container">
        <ul>
            @forelse ($tourData as $tour)
                <li class="d-flex">
                    <span class="date col-3">{{$tour['date']}}</span>
                    <span class="location col-3">{{$tour['location']}}</span>
                    <span class="country col-3">{{$tour['country']}}</span>
                    <a class="col-3" href="{{$tour['ticket']}}" target="blank"><i class="fa-solid fa-ticket"></i></a>
                </li>
            @empty
                <li> There is no show here, sadly </li>
            @endforelse
        </ul>
    </div>
</section>