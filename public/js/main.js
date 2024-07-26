let menu = document.querySelector('.navbar');

document.querySelector('#menu-icon').onclick = () => {
	menu.classList.toggle('active');
}
window.onscroll = () => {
	menu.classList.remove('active');
}

let header = document.querySelector('header');

window.addEventListener('scroll' , () => {
	header.classList.toggle('shadow', window.scrollY > 0);
});

/*---toggle form ---*/

let x= document.getElementById("ClientForm");
let y = document.getElementById("AdminForm");
let z = document.getElementById("indicator");

function adminlogin(){
	x.style.transform="translateX(300px)";
	y.style.transform="translateX(300px)";
	z.style.transform="translateX(0px)";
}
function clientlogin(){
	x.style.transform="translateX(0px)";
	y.style.transform="translateX(0px)";
	z.style.transform="translateX(100px)";
}