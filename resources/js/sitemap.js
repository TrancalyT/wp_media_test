// import('bootstrap');
// import './bootstrap.js';

// Check logind
document.addEventListener('DOMContentLoaded', function() {
    if (localStorage.getItem('isLogged') !== 'true') {
        window.location.href = window.location.origin + '/admin';
    }
});