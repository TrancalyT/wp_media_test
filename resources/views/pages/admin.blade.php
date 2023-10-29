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
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
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
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" id="main">
                <div class="collapse" id="news" data-bs-parent="#main">
                    <div class="card card-body">
                      Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                    </div>
                </div>
                <div class="collapse" id="tour" data-bs-parent="#main">
                    <div class="card card-body">
                      Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                    </div>
                </div>
                <div class="collapse" id="albums" data-bs-parent="#main">
                    <div class="card card-body">
                      Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                    </div>
                </div>
            </main>
        </div>
    </div>
    
    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>