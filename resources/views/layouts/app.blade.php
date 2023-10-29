<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcels Lovers</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
</head>
<body>

    <header class="sticky-header">
        <nav>
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo de Parcels">
            </div>
            <ul class="menu">
                <li><a href="#news">News</a></li>
                <li><a href="#tour">Tour</a></li>
                <li><a href="#albums">Albums</a></li>
            </ul>
        </nav>
    </header>

    <!-- Contenu de la page -->
    <main class="content">
        @yield('main')
    </main>

    <!-- Pied de page (Footer) -->
    <footer class="site-footer">
        <div class="footer-content">
            <div class="social-media">
                <a class="facebook" href="https://www.facebook.com/parcelsmusic/" target="blank"><i class="fab fa-facebook"></i></a>
                <a class="twitter" href="https://twitter.com/parcelsmusic" target="blank"><i class="fab fa-twitter"></i></a>
                <a class="instagram" href="https://www.instagram.com/parcelsmusic/" target="blank"><i class="fab fa-instagram"></i></a>
            </div>
            <p>&copy; 2023 Parcels Lovers</p>
        </div>
    </footer>

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
