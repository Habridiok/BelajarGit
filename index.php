<!DOCTYPE html>
<html>
<head>
	<title>Carousel</title>

	<link rel="stylesheet"  href="style.css">

</head>
<body>

	<div id="container">
		<img src="img/gambar-1.jpg" class = "geser">
		<img src="img/gambar-2.jpg" class = "geser">
		<img src="img/gambar-3.jpg" class = "geser">
		<img src="img/gambar-4.jpg" class = "geser">
		<img src="img/gambar-5.jpg" class = "geser">
		<button class = "tombol" onclick="plusIndex(-1)" id= "tombol1">&#10094;</button>
		<button class = "tombol" onclick="plusIndex(1)" id= "tombol2">&#10095;</button>





		<button class = "tombols" onclick="start(1)" id= "tombol1">Start</button>
		<button class = "tombols" onclick="start(0)" id= "tombol2">Stop</button>

		


	</div>



</body>


<script type="text/javascript">
	var index = 1;
	var cek = 1;


	function plusIndex(n){
		index = index+n;
		tampilGambar(index);
	}

	function start(a){
		cek = a;
		geserOtomatis();
	}


	tampilGambar(index);
	
	function tampilGambar(n){
		var i;
		var x = document.getElementsByClassName("geser");

		if(n> x.length){ index = 1};
		if(n<1){ index = x.length};
		
		for ( i = 0	; i<x.length; i++){
			x[i].style.display="none";
		}
		x[index-1].style.display = "block";

	}







	geserOtomatis();
	function geserOtomatis(){
			if (cek === 1) {
				var i;
				var x = document.getElementsByClassName("geser");

				for ( i = 0	; i<x.length; i++){
					x[i].style.display="none";
				}

				if (index>x.length){index = 1}
				x[index-1].style.display = "block";
				index++;
				setTimeout(geserOtomatis,1000);		
			}
	}

</script>
</html>