<?php 

session_start();

if (isset($_POST['submit'])) {
	$_SESSION['login'] = true;
	header("Location: index.php");
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Cover</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">

 	<link rel="stylesheet" type="text/css" href="css/stylecover.css">

 	<!-- aos -->
 	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

 	<!-- font awesome -->

 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

 	<!-- jQuery -->
 	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
 </head>
 <body>

<div class="navbar">
	<div class="navbar-brand"><h3>Logonya</h3></div>
	<!-- <div class="navbar-menu"><h3>menu</h3></div>
	<a href="cover.php"> balik</a> -->
	<!-- <ul>
		<li>Home</li>
		<li>Info</li>
		<li>kontak</li>
	</ul> -->
	<div class="hamburger">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
	</div>
	<div class="navbar-links">
		<a href="cover.php">home</a>
		<a href="info.php">info</a>
		<a href="kontak.php">kontak</a>
	</div>

</div>


<div class="wadah" data-aos="zoom-out" data-aos-duration=3000>
	<div class="wadah-judul">
		<h1 class="Judul">The Green Place</h1>
	</div>

	<div class="wadah-teks"><p><span>The Green Place,</span> adalah sebuah cerita pendek yang memakai konsep <span>Butterfly effect.</span> Di mana nantinya pembaca dapat memilih sendiri jalan cerita yang diinginkan. Dan tentu saja dengan akhir cerita yang berbeda-beda.</p></div>

	<div class="wadah-tombol">
		<form method="post" action="">
			<button class="masuk" name="submit">Mulai Membaca</button>
		</form>
	</div>
	<div class="wadah-arrow">
		<a href="#sinopsis">
			<p>Sinopsis</p>
			<i class="fa fa-long-arrow-down" aria-hidden="true" ></i>
		</a>

	</div>
 </div>

 <div class="sinopsis" id="sinopsis" >
 	<div class="sinopsis-teks">
 		<div class="sinopsis-judul" data-aos="zoom-in">
 			<h2>Sinopsis</h2>
 		</div>
 		<p data-aos="fade-up">
 			<span>The Green Place </span>menceritakan tokoh utama yaitu Pandu bertahan hidup dari sebuah <span>zombie apocalypse </span>yang mengacaukan dunia. Bersama istrinya yaitu Lani, dan juga sahabat lama Pandu yaitu Djaka. Mereka melakukan perjalanan untuk ke sebuah tempat aman yang bernama The green place. Kalian sendiri yang memilih dan menentukan, dapatkah mereka selamat dalam perjalanan ke sana!!!
 		</p>
 	</div>

 	<div class="karakter-judul" data-aos="zoom-in">
 		<h2>Karakter</h2>
 	</div>

 	<div class="sinopsis-karakter" >

	 	<div class="karakter karakter-1" >	
	 		<div data-aos="fade-up">
		 		<img src="image/sketsa-pandu.jpg" data-aos="fade-up">
		 		<h3 class="karakter-nama" >
		 			Pandu
		 		</h3>
	 		</div>
	 		<p data-aos="fade-up">Pria tampan satu ini pernah menjadi seorang pengacara. Memiliki badan atletis karena rajin berolahraga, dan juga kemampuan berbicara yang memukau. Membuat setiap gadis akan melirik kepadanya.</p>
	 	</div>

	 	<div class="karakter karakter-2" data-aos="fade-up">
	 		
	 		<div data-aos="fade-up">
		 		<img src="image/sketsa-lani2.jpg">
		 		<h3 class="karakter-nama">
		 			Lani
		 		</h3>
	 		</div>
	 		<p data-aos="fade-up">Istri Pandu ini dulunya merupakan seorang perawat yang handal. Walaupun ia tak bisa bela diri, namun kemampuannya mengobati orang tak bisa diragukan.</p>
	 	</div>

	 	<div class="karakter karakter-3" data-aos="fade-up">
	 		
	 		<div data-aos="fade-up">
		 		<img src="image/sketsa-djaka.jpg">
		 		<h3 class="karakter-nama">
		 			Djaka
		 		</h3>
	 		</div>
	 		<p data-aos="fade-up">Teman lama Pandu ini sudah seperti saudara baginya. ia adalah bekas pencuri spesialis kendaraan bermotor. Oleh karena itu, Djaka bisa menyalakan mobil dengan sangat mudah tanpa menggunakan alat sama sekali. </p>
	 	</div>
 	</div>

 </div>




<!-- aos -->

 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>
 </body>
 </html>

