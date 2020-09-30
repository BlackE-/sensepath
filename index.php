<html ⚡="">
<head>
  <?php include('header_meta.php');?>
  <style amp-boilerplate="">body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate="">body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<div class="bodyContainer">
		<div class="banner">
			<div class="container">
				<p>Por tu seguridad, seguimos los protocolos y recomendaciones Para evitar la posible propagación del <b>COVID -19</b> entre clientes y personal</p>
			</div>
		</div>
		<header id="top">
			<div class="container">
	  			<div class="mobile open" role="button" aria-label="open sidebar" on="tap:sidebar.toggle" tabindex="0" >☰</div>
	  			<div class="logoContainer">
	  				<amp-img src="img/logo-sensepath.svg" width="507.7" height="240" layout="responsive"></amp-img>
	  			</div>
	  			<div class="desktop menu">
	  				<div class="top">
	  					<ul>
	  						<li class="active">ESPAÑOL</li>
	  						<li>ENGLISH</li>
	  					</ul>
	  				</div>
	  				<div class="bottom">
	  					<ul>
	  						<li class="link" id="link-procesos">PROCESOS</li>
	  						<li class="link" id="link-experiencias">EXPERIENCIAS</li>
	  						<li class="link" id="link-alianzas">ALIANZAS</li>
	  						<li class="link contacto" id="link-contacto">CONTACTO</li>
	  					</ul>
	  				</div>
	  			</div>
	  		</div>
			  	<!-- Start Sidebar -->
				<amp-sidebar id="sidebar" class="sidebar" layout="nodisplay">
					<div class="close" role="button" aria-label="close sidebar" on="tap:sidebar.toggle" tabindex="0" >✕</div>
					<nav class="">
						<ul>
							<li class="link-side" on="tap:sidebar.toggle" id="link-side-procesos"><p>PROCESOS</p></li>
	  						<li class="link-side" on="tap:sidebar.toggle" id="link-side-experiencias"><p>EXPERIENCIAS</p></li>
	  						<li class="link-side" on="tap:sidebar.toggle" id="link-side-alianzas"><p>ALIANZAS</p></li>
	  						<li class="link-side" on="tap:sidebar.toggle" id="link-side-contacto"><p>CONTACTO</p></li>
						</ul>
					</nav>
				</amp-sidebar>
  		</header>
		<section id="header-img">
			<div id="bgImage"></div>
			<svg id="blobCont" class="blobCont" onmousemove="getPos(event)">
				<image xlink:href="img/header-img-only.jpg" mask="url(#mask)" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />
			  	<defs>
				  <filter id="gooey" height="130%">
				    <feGaussianBlur in="SourceGraphic" stdDeviation="15" result="blur" />
				    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
				  </filter>
				</defs>
				  <mask id="mask" x="0" y="0">
				    <g style="filter: url(#gooey)">
				      <circle class="blob" cx="10%" cy="10%" r="80" fill="white" stroke="white"/>
				      <circle class="blob" cx="50%" cy="10%" r="40" fill="white" stroke="white"/>
				      <circle class="blob" cx="17%" cy="15%" r="70" fill="white" stroke="white"/>
				      <circle class="blob" cx="90%" cy="20%" r="120" fill="white" stroke="white"/>
				      <circle class="blob" cx="30%" cy="25%" r="30" fill="white" stroke="white"/>
				      <circle class="blob" cx="50%" cy="60%" r="80" fill="white" stroke="white"/>
				      <circle class="blob" cx="70%" cy="90%" r="10" fill="white" stroke="white"/>
				      <circle class="blob" cx="90%" cy="60%" r="90" fill="white" stroke="white"/>
				      <circle class="blob" cx="30%" cy="90%" r="80" fill="white" stroke="white"/>
				      <circle class="blob" cx="10%" cy="10%" r="80" fill="white" stroke="white"/>
				      <circle class="blob" cx="50%" cy="10%" r="20" fill="white" stroke="white"/>
				      <circle class="blob" cx="17%" cy="15%" r="70" fill="white" stroke="white"/>
				      <circle class="blob" cx="40%" cy="20%" r="120" fill="white" stroke="white"/>
				      <circle class="blob" cx="30%" cy="25%" r="30" fill="white" stroke="white"/>
				      <circle class="blob" cx="80%" cy="60%" r="80" fill="white" stroke="white"/>
				      <circle class="blob" cx="17%" cy="10%" r="100" fill="white" stroke="white"/>
				      <circle class="blob" cx="40%" cy="60%" r="90" fill="white" stroke="white"/>
				      <circle class="blob" cx="10%" cy="50%" r="80" fill="white" stroke="white"/>
				    </g>
				  </mask>
			</svg>
			<div class="bgTextContainer"> 
				<div class="container">
					<div class="bgText">
						<h1><b>Estrategia sensorial</b><br>aplicada a tu marca</h1>
					    <button id="btn-contacto">
					    	<span class="t1">¡</span>
					    	<span class="t2">M</span>
					    	<span class="t3">E</span>
					    	<span class="t4">&nbsp;</span>
					    	<span class="t5">I</span>
					    	<span class="t6">N</span>
					    	<span class="t7">T</span>
					    	<span class="t8">E</span>
					    	<span class="t9">R</span>
					    	<span class="t10">E</span>
					    	<span class="t11">S</span>
					    	<span class="t12">A</span>
					    	<span class="t13">!</span>
					    </button>
					</div>
					<div class="changeBackground">
						<button class="right" id="right">&#8635;</button>
					</div>
				</div>
				
			</div>
		</section>
		<section id="procesos">
			<div class="container">
				<h2>nuestros <b>procesos</b></h2>
				<div class="modules">
					<div class="module m1">
						<div class="moduleImgContainer" id="module1img">
							<amp-img layout="fixed" src="img/module1.webp" width="161" height="161"/>
								<amp-img layout="fixed" fallback src="img/module1.png" width="161" height="161"></amp-img>
							</amp-img>
						</div>
						<div>
							<h3>LA EXPERIENCIA<br>DE TU MARCA</h3>
							<p>Generamos <b>atributos sensoriales</b> que impactan la experiencia de tu marca. Identificando qué atributos de tu fórmula te diferencian del benchmark.</p>
						</div>
					</div>
					<div class="module m2">
						<div class="moduleImgContainer" id="module2img">
							<amp-img layout="fixed" src="img/module2.webp" width="161" height="161"/>
								<amp-img layout="fixed" fallback src="img/module2.png" width="161" height="161"></amp-img>
							</amp-img>
						</div>
						<div id="module2Text">
							<h3>TRANSFORMACIÓN</h3>
							<p>Tendrás los atributos sensoriales que te potencian como líder del mercado y qué atributos no cambiar en tus reformulaciones por ahorros o cambios tecnológicos, para no perder la <b>preferencia del consumidor</b>.</p>
						</div>
					</div>
					<div class="module m3">
						<div class="moduleImgContainer" id="module3img">
							<amp-img layout="fixed" src="img/module3.webp" width="161" height="161"/>
								<amp-img layout="fixed" fallback src="img/module3.png" width="161" height="161"></amp-img>
							</amp-img>
						</div>
						<div>
							<h3>ESTANDARIZACIÓN<br>DE RECETAS</h3>
							<p>Conocerás los atributos que deberán existir en <b>formulas globales</b> para satisfacer al consumidor en cada país. </p>
						</div>
					</div>
					<div class="module m4">
						<div class="moduleImgContainer" id="module4img">
							<amp-img layout="fixed" src="img/module4.webp" width="161" height="161"/>
								<amp-img layout="fixed" fallback src="img/module4.png" width="161" height="161"></amp-img>
							</amp-img>
						</div>
						<div id="module4Text">
							<h3>DESARROLLO DE<br>NUEVOS PRODUCTOS</h3>
							<p>Identificar tus “Key Sensory Attributes” en el <b>desarrollo de la estrategia</b> del producto.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="experiencia">
			<div class="container">
				<div class="experienciaHeader">
					<h2>EXPERIENCIA</h2>
					<h3>Contamos con alta experiencia en diversas categorías de productos:</h3>
				</div>
				<div class="experienciaContainer">
					<div class="experiencia1">
						<amp-img layout="fixed" src="img/experiencia1.png" width="87" height="73"></amp-img>
						<ul>
							<li><p>Café</p></li>
							<li><p>Cacao, cocoa, manteca y chocolates</p></li>
							<li><p>Cremadores</p></li>
							<li><p>Lácteos</p></li>
						</ul>
					</div>
					<div class="experiencia2">
						<amp-img layout="fixed" src="img/experiencia2.png" width="87" height="79"></amp-img>
						<ul>
							<li><p>Alternativas de Lácteo</p></li>
							<li><p>Helados</p></li>
							<li><p>Refrigerados</p></li>
							<li><p>Culinarios</p></li>
							<li><p>Sodas</p></li>
						</ul>
					</div>
					<div class="experiencia3">
						<amp-img layout="fixed" src="img/experiencia3.png" width="84" height="78"></amp-img>
						<ul>
							<li><p>Jugos</p></li>
							<li><p>Té</p></li>
							<li><p>Panificación</p></li>
							<li><p>Productos de Hogar como suavizantes, jabón, etc)</p></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="alianzas">
			<div class="container">
				<div class="alianzasHeader">
					<h2>ALIANZAS</h2>
					<p>Contamos con alianzas de expertos para brindar <b>Consultoría en estadística y estudios de Mercado</b>, así como Focus Group en línea.</p>
				</div>
				<div class="logosContainer">
					<amp-img layout="fixed" src="img/logo-ift.webp" width="170" height="170">
						<amp-img layout="fixed" fallback src="img/logo-ift.jpg" width="170" height="170"></amp-img>
					</amp-img>
					<amp-img layout="fixed"  src="img/logo-society.webp" width="187" height="103">
						<amp-img layout="fixed" fallback src="img/logo-society.jpg" width="187" height="103"></amp-img>
					</amp-img>
				</div>
			</div>
		</section>
		<section id="galeria">
			<div class="container">
				<h2 class="galeriaHeader">GALERÍA</h2>
				<amp-carousel id="carousel-with-preview" width="450" height="300" layout="responsive" type="slides" role="region" aria-label="Carousel with slide previews"
				>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</amp-carousel>
				<div class="carousel-preview desktop">
				  <button on="tap:carousel-with-preview.goToSlide(index=0)">
				    <amp-img src="img/galeria1-thumb.jpg" width="60" height="40" alt="galeria1"
				    ></amp-img>
				  </button>
				  <button on="tap:carousel-with-preview.goToSlide(index=1)">
				    <amp-img src="img/galeria2-thumb.jpg" width="60" height="40" alt="galeria1"></amp-img>
				  </button>
				  <button on="tap:carousel-with-preview.goToSlide(index=2)">
				    <amp-img src="img/galeria3-thumb.jpg" width="60" height="40" alt="galeria1"></amp-img>
				  </button>
				  <button on="tap:carousel-with-preview.goToSlide(index=3)">
				    <amp-img src="img/galeria4-thumb.jpg" width="60" height="40" alt="galeria1"></amp-img>
				  </button>
				  <button on="tap:carousel-with-preview.goToSlide(index=4)">
				    <amp-img src="img/galeria5-thumb.jpg" width="60" height="40" alt="galeria1"></amp-img>
				  </button>
				</div>
			</div>
		</section>
		<section id="expertise">
			<div class="imgContainer"></div>
			<div class="container">
				<h1 class="expertiseHeader"><b>SOMOS LA EMPRESA MEXICANA</b> de más alto EXPERTISE SENSORIAL</h1>
			</div>
		</section>
		<footer>
			<div class="container" id="topFooter">
				<div class="leftContainer">
					<amp-img class="logofooter" src="img/logo-sensepath.svg" width="300" height="140" layout="intrinsic"></amp-img>
					<a href="https://goo.gl/maps/1CuxfsVuB33qf8H18" target="_blank"> 
						<div class="">
							<amp-img src="img/svg-pin.svg" width="35" height="45" layout="responsive"></amp-img>
							<p><b>Av de los Insurgentes Sur 116,</b> Juárez, Cuauhtémoc, 06600, CDMX</p>
						</div>
					</a>
					<a href="tel:55 6610 6249" target="_blank">
						<div class="">
							<amp-img src="img/svg-mobile.svg" width="40" height="60" layout="responsive"></amp-img>
							<p><b>55</b> 6610 6249<br><b>55</b>000-00000</p>
						</div>
					</a>
					<a href="mailto:pfuentes@sense-path.com" target="_blank">
						<div class="">
							<amp-img src="img/svg-email.svg" width="45" height="35" layout="responsive"></amp-img>
							<p>pfuentes<b>@sense-path</b>.com</p>
						</div>
					</a>
				</div>
				<div class="rightContainer">
					<h2>CONTACTO</h2>
					<form id="form-footer">
						<input type="text" name="name" min="2" required placeholder="NOMBRE" />
						<input type="email" name="email" required placeholder="CORREO ELECTRÓNICO" />
						<input type="tel" name="phone" size="15" minlength="15" required placeholder="TELÉFONO (10 dígitos)" pattern="[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$"/>
						<textarea name="mensaje" placeholder="MENSAJE"></textarea>
						<input type="submit" name="" value="ENVIAR">
						<p class="response" id="response"></p>
					</form>
				</div>
			</div>
			<div class="container" id="bottomFooter">
					<p><a href="#" target="_blank">AVISO DE PRIVACIDAD</a></p>
					<p>/</p>
					<p><a href="#" target="_blank">TÉRMINOS Y CONDICIONES</a></p>
					<p>/</p>
					<p>Copyright <?php echo date('Y');?>. Todos los derechos reservados</p>
			</div>
			<div class="up" id="up">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.65 4.79" width="12" height="5"><g><g><path d="M5.82.24a.68.68,0,0,0-.39.12L.33,3.93l.37.53L5.8.89h0L11,4.44l.37-.53L6.21.36A.68.68,0,0,0,5.82.24Z" style=""/></g></g></svg>
			</div>
		</footer>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
		<script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollToPlugin3.min.js"></script>
	    <script type="text/javascript" src="script/header.js"></script>
	    <script type="text/javascript" src="script/sense-path.js"></script>

	</div>
</body>
</html>