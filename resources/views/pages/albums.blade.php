<div class="separator" id="albums-title">
    <h1>ALBUMS</h1>
</div>
<section id="albums">
    <div class="container">
        @forelse ($albumsData as $album)
            <a href="{{$album['link']}}" target="blank">
                <div class="card">
                    @php $path = 'images/albums/' . $album['cover']; @endphp
                    <img src="{{ asset($path) }}" class="card-img-top" alt="{{$album['title']}}">
                    <div class="card-body">
                        <h6 class="card-title">{{$album['year']}}</h6>
                        <p class="card-text">{{$album['title']}}</p>
                    </div>
                </div>
            </a>
        @empty
            <p>This band doesn't have any album, what the f*** ?</p>
        @endforelse
    </div>
</section>