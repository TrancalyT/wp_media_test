import('bootstrap');
import './bootstrap.js';

const login = document.getElementById('login');
const loginButton = document.getElementById('loginButton')
const logout = document.getElementById('logout');
const mainAdmin = document.getElementById('mainAdministration')
const news = document.getElementById('addNews');
const tour = document.getElementById('addTour');
const albums = document.getElementById('addAlbums');
const deleteButtons = document.querySelectorAll('.delete');
const editButtons = document.querySelectorAll('.edit');
const startCrawler = document.getElementById('startCrawl');

// Login and logout management
document.addEventListener('DOMContentLoaded', function() {
    if (localStorage.getItem('isLogged') === 'true') {
        mainAdmin.style.display = 'block';
        mainAdmin.style.opacity = 1;
        mainAdmin.style.height = 'auto';
        login.style.display = 'none';
    } else {
        login.style.display = 'block';
        mainAdmin.style.display = 'none';
    }
});

loginButton.addEventListener('click', function(e) {
    e.preventDefault();

    const error = document.getElementById('errorCredential');
    error.style.display = 'none';

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const cryptedUsername = 'YWRtaW4=';
    const cryptedPassword = 'S1RyaHVUWXY2R28zZnc=';

    if (btoa(username) === cryptedUsername && btoa(password) === cryptedPassword) {
        localStorage.setItem('isLogged', 'true');
        mainAdmin.style.display = 'block';
        mainAdmin.style.opacity = 0;
        mainAdmin.style.height = 0;

        setTimeout(function() {
            mainAdmin.style.opacity = 1;
            mainAdmin.style.height = 'auto';
            login.style.display = 'none';
        }, 100);
    } else {
        error.style.display = 'block';

        setTimeout(function() {
            error.style.display = 'none';
        }, 5000);
    }
});

logout.addEventListener('click', function() {
    localStorage.removeItem('isLogged');
    setTimeout(function() {
        location.reload(true);
    }, 1000);
});

// Start a crawler
startCrawler.addEventListener('click', function() {
    startCrawler.style.opacity = '0.5';
    startCrawler.style.cusor = 'wait';
    startCrawler.style.pointerEvents = 'none';

    axios.get('/admin/crawl')
    .then(function () {
        setTimeout(function() {
            location.reload(true);
        }, 1000);
    })
    .catch(function (error) {
        console.error('An error occured :', error);
    });

    
});

// Listen to add news
news.addEventListener('submit', function (e) {
    e.preventDefault();

    const titleNews = document.getElementById('titleNews').value;
    const keywordsNews = document.getElementById('keywordsNews').value;
    const textNews = document.getElementById('textNews').value;

    const formData = new FormData();
    formData.append('title', titleNews);
    formData.append('keywords', keywordsNews);
    formData.append('text', textNews);

    axios.post('/add/news', formData)
    .then(function () {
        console.log('News added with success');
        setTimeout(function() {
            location.reload(true);
        }, 1000);
    })
    .catch(function (error) {
        console.error('An error occured :', error);
    });
});

// Listen to add tour
tour.addEventListener('submit', function (e) {
    e.preventDefault();

    const dateTour = document.getElementById('dateTour').value;
    const locationTour = document.getElementById('locationTour').value;
    const countryTour = document.getElementById('countryTour').value;
    const ticketTour = document.getElementById('ticketTour').value;

    const formData = new FormData();
    formData.append('date', dateTour);
    formData.append('location', locationTour);
    formData.append('country', countryTour);
    formData.append('ticket', ticketTour);

    axios.post('/add/tour', formData)
    .then(function () {
        console.log('Tour added with success');
        setTimeout(function() {
            location.reload(true);
        }, 1000);
    })
    .catch(function (error) {
        console.error('An error occured :', error);
    });
});

// Listen to add albums
albums.addEventListener('submit', function (e) {
    e.preventDefault();

    const albumLink = document.getElementById('albumLink').value;
    const albumYear = document.getElementById('albumYear').value;
    const albumTitle = document.getElementById('albumTitle').value;
    const albumCover = document.getElementById('albumCover').files[0]; 

    const formData = new FormData();
    formData.append('link', albumLink);
    formData.append('year', albumYear);
    formData.append('title', albumTitle);
    formData.append('cover', albumCover);

    axios.post('/add/album', formData, {
        headers: {
            'Content-Type': 'multipart/form-data',
        },
    })
    .then(function () {
        console.log('Album added with success');
        setTimeout(function() {
            location.reload(true);
        }, 1000);
    })
    .catch(function (error) {
        console.error('An error occured :', error);
    });
});

// Delete buttons
deleteButtons.forEach(button => {
    button.addEventListener('click', function() {
        const tr = this.closest('tr');
        const id = tr.getAttribute('id').split('_');
        const target = id[0];
        const aloneId = id[1]

        axios.delete(`/delete/${target}/${aloneId}`)
        .then(function() {
            setTimeout(function() {
                location.reload(true);
            }, 1000);
        })
        .catch(function(error) {
            console.error('An error occured :', error);
        });
    });
});

// Edit buttons (TODO)
editButtons.forEach(button => {
    button.addEventListener('click', function() {
        const tr = this.closest('tr');
        const id = tr.getAttribute('id').split('_');
        const target = id[0];
        const aloneId = id[1]
    });
});