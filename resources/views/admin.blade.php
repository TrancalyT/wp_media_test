<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <meta name="robots" content="noindex">
</head>
<body>
    <div class="container mt-5" id="login">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Administration log in</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="username">Username :</label>
                                <input type="text" class="form-control" id="username" placeholder="Type your username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password :</label>
                                <input type="password" class="form-control" id="password" placeholder="Type your password">
                            </div>
                            <button class="mt-2 btn btn-primary" id="loginButton">Log in</button>
                            <button class="ms-2 mt-2 btn btn-success">
                                <a href="{{ route('main') }}" class="text-white" style="text-decoration: none;">Back to site</a>
                            </button>
                        </form>
                        <div class="alert alert-danger mt-3" role="alert" id="errorCredential">
                            Wrong credentials, please try again ...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 mb-5" id="mainAdministration">
        <div class="row">
            <nav id="sidebar" class="p-3 col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <h3 class="text-center">ADMINISTRATION</h3>
                <div class="position-sticky">
                    <ul class="nav flex-column" id="menu">
                        <li class="nav-item col-6">
                            <button class="btn btn-primary w-100" type="button" data-bs-toggle="collapse" data-bs-target="#news" aria-expanded="false">
                                News
                            </button>
                        </li>
                        <li class="nav-item col-6">
                            <button class="btn btn-primary w-100" type="button" data-bs-toggle="collapse" data-bs-target="#tour" aria-expanded="false">
                                Tour
                            </button>
                        </li>
                        <li class="nav-item col-6">
                            <button class="btn btn-primary w-100" type="button" data-bs-toggle="collapse" data-bs-target="#albums" aria-expanded="false">
                                Albums
                            </button>
                        </li>
                        <li class="nav-item col-6">
                            <button class="btn btn-primary w-100" type="button" data-bs-toggle="collapse" data-bs-target="#crawl" aria-expanded="false">
                                Crawl
                            </button>
                        </li>
                        <li class="nav-item col-6">
                            <button class="btn btn-primary w-100">
                                <a href="{{ route('sitemap') }}" class="text-white" style="text-decoration: none;">To sitemap</a>
                            </button>
                        </li>
                        <li class="nav-item col-6">
                            <button class="btn btn-success w-100">
                                <a href="{{ route('main') }}" class="text-white" style="text-decoration: none;">Back to site</a>
                            </button>
                        </li>
                        <li class="nav-item col-6">
                            <button class="btn btn-danger w-100" id="logout">
                                Log out
                            </button>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" id="main">
                <div class="collapse show" id="news" data-bs-parent="#main">
                    <div class="card card-body">
                        <h3>Add a news</h3>
                        <form id="addNews">
                            <div class="mb-3">
                                <label for="titleNews" class="form-label">Title</label>
                                <input type="text" class="form-control" id="titleNews" placeholder="Type a title">
                            </div>
                            <div class="mb-3">
                                <label for="keywordsNews" class="form-label">Keywords</label>
                                <input type="text" class="form-control" id="keywordsNews" placeholder="List of keywords (eg: #keywords, #thislist)">
                            </div>
                            <div class="mb-3">
                                <label for="textNews" class="form-label">Text</label>
                                <textarea class="form-control" id="textNews" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary mb-3" id="saveNews">Save news</button>
                            </div>
                        </form>

                        <h3>Edit or delete a news </h3>
                        <table class="mt-3 table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Keywords</th>
                                    <th scope="col">Text</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($newsData as $news)
                                    <tr id="news_{{$news['id']}}">
                                        <td>{{$news['title']}}</td>
                                        <td>{{$news['keywords']}}</td>
                                        <td class="w-50">{{$news['text']}}</td>
                                        <td>
                                            {{-- <button class="btn btn-success edit"><i class="fa-solid fa-pen-to-square"></i></button> --}}
                                            <button class="btn btn-danger delete"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">Empty news, please add one</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="collapse" id="tour" data-bs-parent="#main">
                    <div class="card card-body">
                        <h3>Add a tour</h3>
                        <form id="addTour">
                            <div class="mb-3">
                                <label for="dateTour" class="form-label">Date</label>
                                <input type="text" class="form-control" id="dateTour" placeholder="01.01.2024">
                            </div>
                            <div class="mb-3">
                                <label for="locationTour" class="form-label">Location</label>
                                <input type="text" class="form-control" id="locationTour" placeholder="Type a location">
                            </div>
                            <div class="mb-3">
                                <label for="countryTour" class="form-label">Country</label>
                                <input type="text" class="form-control" id="countryTour" placeholder="Type a country">
                            </div>
                            <div class="mb-3">
                                <label for="ticketTour" class="form-label">Ticketing</label>
                                <input type="text" class="form-control" id="ticketTour" placeholder="Type a ticketing link">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary mb-3" id="saveTour">Save tour</button>
                            </div>
                        </form>

                        <h3>Edit or delete a tour </h3>
                        <table class="mt-3 table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Ticketing</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tourData as $tour)
                                    <tr id="tour_{{$tour['id']}}">
                                        <td>{{$tour['date']}}</td>
                                        <td>{{$tour['location']}}</td>
                                        <td>{{$tour['country']}}</td>
                                        <td>{{$tour['ticket']}}</td>
                                        <td>
                                            {{-- <button class="btn btn-success edit"><i class="fa-solid fa-pen-to-square"></i></button> --}}
                                            <button class="btn btn-danger delete"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">Empty tour, please add one</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="collapse" id="albums" data-bs-parent="#main">
                    <div class="card card-body">
                        <h3>Add an album</h3>
                        <form id="addAlbums">
                            <div class="mb-3">
                                <label for="albumLink" class="form-label">Link</label>
                                <input type="text" class="form-control" id="albumLink" placeholder="Type a discogs link">
                            </div>
                            <div class="mb-3">
                                <label for="albumCover" class="form-label">Cover</label>
                                <input class="form-control" type="file" id="albumCover">
                            </div>
                            <div class="mb-3">
                                <label for="albumYear" class="form-label">Year (label)</label>
                                <input type="text" class="form-control" id="albumYear" placeholder="Type a year (and label)">
                            </div>
                            <div class="mb-3">
                                <label for="albumTitle" class="form-label">Title</label>
                                <input type="text" class="form-control" id="albumTitle" placeholder="Type a title">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary mb-3" id="saveAlbum">Save album</button>
                            </div>
                        </form>

                        <h3>Edit or delete an album </h3>
                        <table class="mt-3 table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Link</th>
                                    <th scope="col">Cover</th>
                                    <th scope="col">Year (label)</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($albumsData as $album)
                                    <tr id="album_{{$album['id']}}">
                                        <td>{{$album['link']}}</td>
                                        <td class="w-25">
                                            @php $path = 'images/albums/' . $album['cover']; @endphp
                                            <img class="w-25" src="{{ asset($path) }}" alt="{{$album['title']}}">
                                        </td>
                                        <td>{{$album['year']}}</td>
                                        <td>{{$album['title']}}</td>
                                        <td>
                                            {{-- <button class="btn btn-success edit"><i class="fa-solid fa-pen-to-square"></i></button> --}}
                                            <button class="btn btn-danger delete"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">Empty album, please add one</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="collapse" id="crawl" data-bs-parent="#main">
                    <div class="card card-body">
                        <h3>Crawl informations</h3>
    
                        <h5 class="mt-3">Last crawl</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            @if ($lastActiveCrawl)
                                <p class="m-0">Last crawl at : {{$lastActiveCrawl['created_at']}}</p>
                            @else
                                <p class="m-0">No crawl yet, please start one</p>
                            @endif
                            
                            <button class="btn btn-primary" id="startCrawl">Start a crawler</button>
                        </div>
                        

                        <h5 class="mt-3">Last hyperlinks retrieved</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Hyperlink</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($hyperlinks as $hyperlink)
                                    <tr>
                                        <td>{{$hyperlink['hyperlink']}}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>There is no hyperlinks yet</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <h5 class="mt-3">Errors on last crawl</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Error</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($crawlErrors as $error)
                                    <tr>
                                        <td>{{$error['error']}}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>There is no error on last crawl</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>