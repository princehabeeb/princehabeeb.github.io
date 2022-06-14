// AOS javascript code start
AOS.init();
// AOS javascript code ends


// preloader javascript code start
var loader = document.getElementById('preloader');
window.addEventListener('load', () => {
    loader.style.display = 'none';
});
// preloader javascript code ends

// download cv btn javascript code start 
var btn = document.getElementById('btn');
btn.addEventListener('click', () => {
    alert('Download started')
});

// download cv btn javascript code ends