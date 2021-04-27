// add and remove active class

let ul = document.querySelector('ul');
let li = document.querySelectorAll('li');

li.forEach(el => {
    el.addEventListener('click', function(){
         ul.querySelector('.active').classList.remove('active');

         el.classList.add('active');
    });
});


// message section show and hide

const messageArea = document.querySelector('.section-message');
const openArea = document.querySelector('.contact-me');
const openAreaA = document.querySelector('.contacte-me');
const closeArea = document.querySelector('.times');

openAreaA.addEventListener('click', function () {
    messageArea.classList.add("open-message");
});

openArea.addEventListener('click', function () {
    messageArea.classList.add("open-message");
});

closeArea.addEventListener('click', function () {
    messageArea.classList.remove("open-message");
});



// smooth scroll to exact clicked portion
const scrollLinks = document.querySelectorAll('.nav-link');
const linksContainer = document.querySelector('.collapse');
const links = document.querySelector('.navbar-nav');
const navbar = document.getElementById('nav');
scrollLinks.forEach(function (link) {
    link.addEventListener('click', function (e) {

        e.preventDefault();
        // navigate to specific sport
        const id = e.currentTarget.getAttribute('href').slice(1);
        const element = document.getElementById(id);
        // calculate the height
        const navHeight = navbar.getBoundingClientRect().height;
        const containerHeight = linksContainer.getBoundingClientRect().height;
        const fixedNav = navbar.classList.contains('fixed-nav');
        let position = element.offsetTop - navHeight;
        window.scrollTo({
            left:0,
             top: position,
        });

        
    });
});


// set footer time dynamically
const footerDate = document.querySelector('.year');
const currentYear = new Date().getFullYear();

footerDate.textContent = currentYear;

