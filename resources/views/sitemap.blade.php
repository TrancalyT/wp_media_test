<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sitemap</title>
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <meta name="robots" content="noindex">
</head>
<body>
    <div class="container-fluid mt-5 mb-5 d-flex flex-column align-items-center">
        <h1>SITEMAP</h1>
        <nav aria-label="breadcrumb">
            @forelse ($tree as $keySite => $siteElement)
                @forelse ($siteElement as $element)
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">{{$keySite}}</li>
                    <li class="breadcrumb-item">{{$element}}</li>
                </ol>
                @empty
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">{{$keySite}}</li>
                    </ol>
                @endforelse
            @empty
                <p>No sitemap avalaible</p>
            @endforelse
        </nav>
        <button class="btn btn-success">
            <a href="{{ route('admin') }}" class="text-white" style="text-decoration: none;">Back to administration</a>
        </button>
    </div>
    <script src="{{ asset('js/sitemap.js') }}"></script>
</body>
</html>