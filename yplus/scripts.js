AOS.init();

// Typing effect script

var m = 0;
var txt2 = "Making you visible";
var speed2 = 150;

const effect = () => {
	document.getElementById("type2").innerHTML += txt2.charAt(m);
	m++;

	setTimeout(effect, speed2);
};

effect();
// hvbjnklmkl
// document.getElementById("humbergrown-menu").addEventListener("click", function () {
// 	document.getElementById("check").classList.remove("removeCheck");
// }

// add /remove active class
navbar = document.querySelector(".navbar").querySelectorAll("a");
console.log(navbar);

navbar.forEach((element) => {
	element.addEventListener("click", function () {
		navbar.forEach((nav) => nav.classList.remove("active"));
		// document.getElementById("check").classList.add("removeCheck");
		this.classList.add("active");
		// document.getElementById("checkbtn").checked = true;

		// .classList
	});
	//
});

// document.getElementById("check").classList.remove("removeCheck");
