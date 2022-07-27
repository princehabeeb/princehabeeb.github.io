// AOS javascript code start
AOS.init();
// AOS javascript code ends

// preloader javascript code start
var loader = document.getElementById('preloader');
window.addEventListener('load', () => {
    loader.style.display = 'none';
});




var loginAlart = document.getElementById('login');


loginAlart.addEventListener('click', () => {
    alert('This feature is currently not available');
});



