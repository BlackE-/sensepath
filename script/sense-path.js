	let headerTl = gsap.timeline();
	headerTl.from('.bottom',{duration:1.5,translateX:200,opacity:0}),
	headerTl.to('.bottom',{translateX:0,opacity:1});
	let headerTl2 = gsap.timeline();
	headerTl2.from('.top',{duration:1.5,translateX:200,opacity:0}),
	headerTl2.to('.top',{translateX:0,opacity:1});

	let headerLogo = gsap.timeline();
	headerLogo.from('.logoContainer',{duration:1.5,translateX:-200,opacity:0});
	headerLogo.to('.logoContainer',{translateX:0,opacity:1});

	let bgText = gsap.timeline();
	bgText.from('.bgText',{duration:1.5,translateY:200,opacity:0});
	bgText.to('.bgText',{translateY:0,opacity:1});

	const rightbtn = document.getElementById('right');
	const backgroundID = document.getElementById('bgImage');
	let classActive = 1;
	
	const setBackgroundClass = (number)=>{
		backgroundID.className = '';
		switch(classActive){
			case 2:backgroundID.classList.add('contrast');break;
			case 3:backgroundID.classList.add('saturate');break;
			case 4:backgroundID.classList.add('hue');break;
			case 5:backgroundID.classList.add('opacity');break;
			default:backgroundID.classList.add('grayscale');break;
		}
	}
	setBackgroundClass(classActive);
	rightbtn.addEventListener('click',()=>{
		classActive++;
		classActive = classActive%6;
		console.log(classActive);
		setBackgroundClass(classActive);
	});

	window.addEventListener('scroll', function(e) {
	  let scroll_position = window.scrollY;
	  if(scroll_position > 0){document.getElementById('up').classList.add('active');}
	  else{document.getElementById('up').classList.remove('active');}
	});

	gsap.registerPlugin(ScrollToPlugin)
	const scrollToSection = (section) =>{
		//opcion pure js
		// document.getElementById(section).scrollIntoView({ behavior: 'smooth' });
		 //opcion gsap
		// gsap.to(window, {duration: 3, scrollTo:{y:`#${section}`, offsetY:70}});
		gsap.to(window, {duration: 3, scrollTo:{y:`#${section}`}});

	}

	const btncontacto = document.getElementById('btn-contacto');
	const linkprocesos = document.getElementById('link-procesos');
	const linkexperiencias = document.getElementById('link-experiencias');
	const linkalianzas = document.getElementById('link-alianzas');
	const linkcontacto = document.getElementById('link-contacto');
	const linksideprocesos = document.getElementById('link-side-procesos');
	const linksideexperiencias = document.getElementById('link-side-experiencias');
	const linksidealianzas = document.getElementById('link-side-alianzas');
	const linksidecontacto = document.getElementById('link-side-contacto');
	const up = document.getElementById('up');
	
	linkprocesos.addEventListener('click',function(){scrollToSection('procesos');});
	linkexperiencias.addEventListener('click',function(){scrollToSection('experiencia');});
	linkalianzas.addEventListener('click',function(){scrollToSection('alianzas');});
	linkcontacto.addEventListener('click',function(){scrollToSection('form-footer');});
	linksideprocesos.addEventListener('click',function(){scrollToSection('procesos');});
	linksideexperiencias.addEventListener('click',function(){scrollToSection('experiencia');});
	linksidealianzas.addEventListener('click',function(){scrollToSection('alianzas');});
	linksidecontacto.addEventListener('click',function(){scrollToSection('form-footer');});
	btncontacto.addEventListener('click',function(){scrollToSection('form-footer');});
	up.addEventListener('click',function(){scrollToSection('top');});

	gsap.registerPlugin(ScrollTrigger);
	const modulesTl = gsap.timeline({scrollTrigger: {trigger: ".modules"}});
	modulesTl.to('.m1', {opacity:1,x:0,duration:1.0});
	modulesTl.to('.m2', {opacity:1,x:0,duration:1.0},"-=0.2");
	modulesTl.to('.m3', {opacity:1,x:0,duration:1.0},"-=0.2");
	modulesTl.to('.m4', {opacity:1,x:0,duration:1.0},"-=0.2");


	const experienciaTl = gsap.timeline({scrollTrigger: {trigger: "#experiencia"}});
	experienciaTl.to('.experienciaHeader', {opacity:1,y:0,duration:1.5});
	experienciaTl.to('.experiencia1', {opacity:1,y:0,duration:0.5},"-=0.2");
	experienciaTl.to('.experiencia2', {opacity:1,y:0,duration:0.5},"-=0.2");
	experienciaTl.to('.experiencia3', {opacity:1,y:0,duration:0.5},"-=0.2");

	const alianzasTl = gsap.timeline({scrollTrigger: {trigger: "#alianzas"}});
	alianzasTl.to('.alianzasHeader', {opacity:1,duration:1.0});
	alianzasTl.to('.logosContainer', {opacity:1,duration:0.5},"-=0.2");

	const galeriaTl = gsap.timeline({scrollTrigger: {trigger: "#galeria"}});
	galeriaTl.to('.galeriaHeader', {opacity:1,duration:1.0});
	galeriaTl.to('#carousel-with-preview', {opacity:1,y:0,duration:0.5},"-=0.2");
	galeriaTl.to('.carousel-preview', {opacity:1,y:0,duration:1.0},"-=0.2");

	const expertiseTl = gsap.timeline({scrollTrigger: {trigger: "#expertise"}});
	expertiseTl.to('.expertiseHeader', {opacity:1,x:0,duration:1.0});