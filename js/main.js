document.addEventListener("DOMContentLoaded", function(){

	function show() {
	const sidebar = document.querySelector(".sidebar");
	sidebar.classList.add("visible");
	document.body.style.overflow = "hidden";
	}
	function hide() {
	const sidebar = document.querySelector(".sidebar");
	sidebar.classList.remove("visible");
	document.body.style.overflow = "";
	}
	function toggle() {
	const sidebar = document.querySelector(".sidebar");
	sidebar.querySelector(".blocker").onclick = hide;
	sidebar.classList.contains("visible") ? hide() : show();
	}

	new Glider(document.querySelector('.glider'), {
		slidesToShow: 1,
		dots: '.dots',
		draggable: true,
		scrollLock: true,
		arrows: {
			prev: '.glider-prev',
			next: '.glider-next'
		}
	});

});