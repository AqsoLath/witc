<?php 

session_start();

	if ( !isset($_SESSION["login"])) {
  header("Location: cover.php");
  exit;
}
 ?>

<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Judul</title>
	<link rel="stylesheet" type="text/css" href="css/styleindex.css">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> -->
</head>
<body>

<div class="navbar">
	<div class="navbar-brand">
		<h3>Logonya</h3>
	</div>
	
		<div class="hamburger">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
	
	<div class="navbar-links">
		
			<a href="#">home</a>
			<a href="#">info</a>
			<a href="#">kontak</a>
		
	</div>
	<!-- <a href="cover.php"> balik</a> -->
</div>

<div class="container">
	<div class="prolog">
		<p>Empat bulan sudah dunia mengalami zombie apocalypse. dan empat bulan sudah tiga orang yaitu Pandu Lani dan Djaka, bertahan hidup dari kiamat yang mengerikan ini. Mereka selalu mencari tempat yang aman untuk terus selamat dari ancaman virus ini, yang. Mereka mendengar kabar bahwa ada tempat perlindungan aman yang disebut-sebut sebagai the green place, yang ada jauh di timur. Beruntungnya mereka, yang memiliki mobil yang dapat digunakan untuk ke green place. Merekapun memutuskan untuk menuju kesana agar bisa terus bertahan hidup.</p>
	</div>

	<div class="dialog-pertama">
		<p> "Waduh jak, ini masih jauh ke sananya?" Tanya pandu yang sedang menyetir mobil. 	"kalo kata tadi orang yang di radio sih, sekitar tiga hari lagi. Lagian juga kita baru jalan 2 jam." Jawab Djaka. 	"hehehe udah gak sabar baget ini jak. Oh iya sayang, dari kemaren kayaknya kamu belom makan kan?" Tanya Pandu kepada Lani 	"Iya nih belom sayang, tapi ini makanan tinggal dikit banget, harus nyari lagi." Kata lani kepada suaminya. 	"Yaudah nanti pas ada supermarket kita berhenti dulu buat nyari makanan. Sakarang gua mau tidur dulu" Kata Djaka, sambil berbalik dan memejamkan mata.	
		 Lani yang melihat suaminya ngntuk, langsung bertanya kepada suaminya "Sayang kamu gak capek nyupir terus dari tadi?"		"Gampang... nanti kan juga gantian sama Djaka, ini emang udah giliran aku." jawab Pandu.	"kamu haus gak? aku ambilin minum yak?" Tanya Lani.</p>

		<p id="pilihan-1-a"> a. Boleh sayang</p>
		<p id="pilihan-1-b">  b. Nanti aja</p>


		<p class="pilihan-1-a"  style=""> </p>
		<p class="pilihan-1-a"  style=""> </p>
		<p class="pilihan-1-a"  style=""> </p>

		<p class="pilihan-1-b" id="teks-satu-b" style=""> </p>
		<p class="pilihan-1-b" id="teks-satu-b" style=""> </p>
		<p class="pilihan-1-b" id="teks-satu-b" style=""> </p>
	</div>

	<div class="dialog-kedua sembunyi" >
		<p>	Setelah sekitar setengah jam mereka berjalan. Mereka pun akhirnya melihat sebuah supermarket yang lumayan besar. Djaka pun memberhentikan mobilnya di depan pintu masuk supermarket tersebut. 
</p>
		<p>	"Ayo cepetan turun, kita cari makanan." kata Djaka. "Yakin nih jak, kita cari makanan di sini?" tanya Pandu. "Iya jak, ini tempat kayaknya kosong banget deh. Emang bakal masih ada makanannya." Sambung Lani "Yaa mau gimana lagi? Lagi pula bagus juga kalo kosong berarti gak ada orang di dalam" Jawab Djaka.
</p>
		<p>	"Yaudah, ayo klo gitu kita masuk. Jangan lupa jak bawa senjata buat jaga-jaga" Kata Pandu. "Pasti itu mah pan, nih golok lu" kata Djaka sambil memberikan golok kepada Pandu, sedangkan Djaka memilih sebuah tongkat baseball untuk senjatanya. Yang jelas Lani tidak membawa senjata, karena ia tidak bisa bela diri.
</p>
		<p>	Mereka bertiga akhirnya masuk ke dalam, Djaka yang memang nekat itu memukulkan tongkat baseballnya ke salah satu rak yang ada di dalam. "TANG... TANG...TANG..." suara itu sangat nyaring dan bergema ke seluruh supermarket itu. "Jak itu gak salah, ntar kalo ada sesuatu gimana?" Kata Lani. "Tenang aja lan, kalo misalnya ada sesuatu biar mereka langsung keluar, terus gua sama pandu langsung hajar." Jawab Djaka. Pandu langsung menjawab dengan nada sinis "Terserah kamu ajalah jak".
</p>
		<p>	Pandu Lani dan Djaka memasuki super market tersebut. Mereka menelusuri hampir setiap lorong yang ada di tempat itu. Di sana hanya ada barang elektronik seperti tv, kulkas, ataupun barang elektronik lainnya. Mereka bertiga terus berkeliling super market tersebut selama kurang lebih 15 menit. Namun masih belum bisa menemukan apapun untuk dimakan.
</p>
		<p>	"Ini tempat gede banget, bisa sampe malem kalo kayak gini." Kata Pandu. "Yaudah gimana klo kita berpencar aja." Kata Lani. "Ide bagus tuh." sambung Djaka. "Yaudah jak kamu kan yang paling berani, gimana kalo kamu sendiri ke gudang sana. Biar aku sama Lani lanjut nelusurin lorong ini lagi."  Kata Pandu sambil menunjuk ke gudang. "Sebenernya gua gak masalah sendiri ke sana. Tapi ada yang mau gua omongin berdua sama lu pan, ini penting." Kata Djaka. "Masa iya aku ninggalin istriku sendiri, nanti kalo ada apa-apa gimana?" Jawab Pandu. "Dari tadi kita udah 15 menit di sini. kalo misal ada sesuatu pasti udah keluar dari tadi. Tapi terserah lu juga sih kalo misalnya mau bareng istrilu." sambung Djaka. "Tapi ini tempat gede banget loh, mungkin aja sesuatu itu masih sembunyi di tempat ini." kata Pandu. " Udah... gak apa apa mas Pandu. Aku bisa sendiri kok, lagi pula bener kata Djaka kalo di tempat ini emang kosong" kata Lani.
</p>
	</div>
</div>


<!-- Script biar kalo mau restart, ada peringatan dulu -->
<!-- <script type="text/javascript">
    window.onbeforeunload = function() {
        return "Dude, are you sure you want to leave? Think of the kittens!";
    }
</script> -->


<script type="text/javascript">
	const pilSatuA = document.getElementById('pilihan-1-a');
	const pilSatuB = document.getElementById('pilihan-1-b');
// getElementsByC('')
	const teksSatuA = document.querySelectorAll('.pilihan-1-a');
	const teksSatuB = document.querySelectorAll('.pilihan-1-b')

	const teksDua = document.querySelector('.dialog-kedua')

	pilSatuA.addEventListener('click', function() {
		teksSatuA[0].innerHTML = '"Boleh sayang, tolong amiblin ya." Jawab Pandu. Lani langsung mengambilkan minum dan memberikannya kepada Pandu.	"Nih minumnya sa... ADUHH MAAP MAAP jadi jatoh botolnya. Maaf banget..." "Iya udah gakpapa kok" ujar Pandu.	"aku ambilin minumnya lagi yak?" tanya Lani. "gak usah ini masih ada sisanya kok." Jawab Pandu sambil meraih botol yang ada di bawah jok sopir. Djaka yang berada di sebelah Pandu itu terbangun kerena mendengar mereka berdua berisik. Namun tiba-tiba... "PANDU AWAS PAN!!! ADA ZOMBIE!!!" Teriak Djaka kepada Pandu sambil meraih setir mobil.';
		teksSatuA[1].innerHTML = '*JDEGG *BRAKK Mobil mereka pun menabrak dan melindas zombie tersebut membuatnya mati seketika.'
		teksSatuA[2].innerHTML = 'Pandu yang kaget, langsung memberhentikan mobilnya, dan meminta maaf. "Wahh maap maap gak liat saya."  Dengan nada marah Djaka menjawab  "GOBLOK LU!!! kalau capek bilang aja!!! jangan malah jadinya ngebahayain kita semua. Udah sini gantian aja sama gua." Pandu dan Djaka pun bertukar tempat duduk. "Maafin aku ya jak, gara-gara aku mas Pandu jadi gak fokus" Kata Lani. "Ya udah, mending kita langsung jalan lagi aja, sebelum mereka malah pada dateng lagi." Kata Djaka sambil menancap gas.'
		pilSatuA.style.display = 'none';
		pilSatuB.style.display = 'none';
		teksDua.style.display = 'block'
	})

	pilSatuB.addEventListener('click', function() {
		teksSatuB[0].innerHTML = '"Nanti aja, gak haus kok" Jawab Pandu. Lani yang melihat Pandu kelelahan itu, tetap mengambilkan Pandu air.	"Nih sayang minum dulu ini sedikit."	"Udah sayang nanti aja." Jawab pandu menolak. "Udah gakpapa minum aja ini sedikit."	Paksa Lani.	"Iya nanti aja" Kata Pandu.	Walaupun Pandu sudah menolak tetapi Lani tetap memberikan minumya kepada Pandu "Nih minumnya sa... ADUHH MAAP MAAP jadi tumpahkan airnya. Djaka yang berada di sebelah Pandu itu terbangun kerena mendengar mereka berdua berisik. Namun tiba-tiba... "PANDU AWAS PAN!!! ADA ZOMBIE!!!" Teriak Djaka kepada Pandu sambil meraih setir mobil."';
		teksSatuB[1].innerHTML = '*JDEGG *BRAKK Mobil mereka pun menabrak dan melindas zombie tersebut membuatnya mati seketika.';
		teksSatuB[2].innerHTML = 'Pandu yang kaget, langsung memberhentikan mobilnya, dan meminta maaf. "Wahh maap maap gak liat saya."  Dengan nada marah Djaka menjawab  "GOBLOK LU!!! kalau capek bilang aja!!! jangan malah jadinya ngebahayain kita semua. Udah sini gantian aja sama gua." Pandu dan Djaka pun bertukar tempat duduk. "Maafin aku ya jak, gara-gara aku mas Pandu jadi gak fokus" Kata Lani. "Ya udah, mending kita langsung jalan lagi aja, sebelum mereka malah pada dateng lagi." Kata Djaka sambil menancap gas.';
		pilSatuA.style.display = 'none';
		pilSatuB.style.display = 'none';
	})


</script>

<script type="text/javascript">
	
	const hamburger = document.querySelector('.hamburger');
	const navLink = document.querySelector('.navbar-links')
	const links = document.querySelectorAll('.navbar-links a');

	hamburger.addEventListener('click', function() {
		navLink.classList.toggle('open');
	})



</script>
</body>
</html>















