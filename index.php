<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nano Folio - Simple HTML Template</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="css/tooplate-style.css" rel="stylesheet">

    <style>
        #haha {
            /* border: 1px solid black; */
            padding: 20px;
            margin-top: 20px;

        }

        #haha a {
            margin-right: 20px;
			text-align:center;
        }

        .mt-20 {
            margin-top: 20px;
        }
    </style>


</head>
<body>
	<div class="tm-container-fluid">
        <!-- code here -->
        <section class="menu" id="haha" style="background-color: #C69B7B;">
			<center>
            <a href="#">Home</a>
            <a href="#">About</a>
			<a href="#">Contact</a>
			</center>
        </section>

        <section class="tm-bgcolor-2 tm-p-50 mt-20" style="border-radius: 15px; margin-bottom: 20px;">
            <h1>
				<center>
                <?php
                    $pageTitle = 'Bahasa Pemograman';
                    echo $pageTitle.' (PHP,JAVA,C++)';
                ?>
				</center>
            </h1>
            <?php
                $x = 1;
                while($x <=2) {
            ?>
                <p>Bahasa pemrograman, atau sering diistilahkan juga dengan bahasa komputer atau bahasa pemrograman komputer, adalah instruksi standar untuk memerintah komputer. Bahasa pemrograman ini merupakan suatu himpunan dari aturan sintaks dan semantik yang dipakai untuk mendefinisikan program komputer.</p>
            <?php
                    $x++;
                }
            ?>
        </section>

		<section class="tm-site-header tm-flex-center tm-mb-50 tm-bgcolor-1 tm-border-rounded">
			<i class="fas fa-heart fa-3x"></i>
			<h1>Adi Sanggoro</h1>
		</section>

		<section class="tm-about tm-mb-80 tm-p-50 tm-bgcolor-2 tm-border-rounded"style="border:10px;">
			<div class="tm-about-header tm-flex-center">
				<i class="fas fa-users fa-2x"></i>
				<h2>About Me</h2>
			</div>
			<div class="tm-about-text">
				<p class="tm-mb-40">Nano Folio is simple HTML template with a minimal very light-weight custom CSS file. Max content width is 940 pixels. You can easily change the width or any part in this template. Gallery comes with a pop-up image and simple categories.</p>
				<p class="tm-mb-0">Please support Tooplate website by telling your friends about it. That is going to be very helpful for us. Feel free to <a rel="nofollow" href="https://www.tooplate.com/contact" target="_blank">message us</a> via email or live chat if you have anything to say.</p>
			</div>
		</section>

		<section class="tm-contact tm-mb-50 tm-bgcolor-3 tm-border-rounded">
			<div class="tm-contact-header tm-flex-center">
				<i class="fas fa-map-pin fa-3x"></i>
				<h2>Contact</h2>
			</div>
			<div class="tm-contact-form-container" style="float:right;">
				<form id="contact-form" action="" method="POST" class="tm-contact-form">
		          	<input type="text" name="name" placeholder="name" required="" />
		          	<input type="email" name="email" placeholder="email" required="" />
		          	<textarea rows="5" name="message" class="tm-mb-30" placeholder="message" required=""></textarea>		          	
		          	<button type="submit" class="tm-right tm-btn-submit">send</button>          	
		        </form>    
			</div>
			<div class="tm-contact-info">
				<address class="tm-mb-30">
					120 Curabitur sed tortor ultrices,
					congue odio eget, posuere urna.
					Praesent at rhoncus 10680
				</address>
				<div class="tm-text-white tm-mb-40">Tel: <a href="tel:0100200340" class="tm-link-white">010-020-0340</a></div>
				<div class="tm-flex">
					<a href="https://facebook.com" class="tm-social-link"><i class="fab fa-facebook"></i></a>
					<a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a>
					<a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</section>

		<footer class="tm-footer">
			Copyright 2020 Nano Folio - Design: <a rel="sponsored" href="https://www.tooplate.com" class="tm-link-gray">Tooplate</a>
		</footer>
	</div>

</body>
</html>