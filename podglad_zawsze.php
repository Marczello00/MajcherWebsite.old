<!DOCTYPE html>
<html lang="pl">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159071036-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159071036-1');
</script>

<meta charset="utf-8" />
<title>Serwis opon Majcher</title>

<link rel="stylesheet" href="style/reset.css" type="text/css" />
<link rel="stylesheet" href="style/style.css" type="text/css" />
<link rel="stylesheet" href="style/colorbox.css" type="text/css" />
<script src="http://code.jquery.com/jquery-1.5.1.min.js"></script>
<script src="js/jquery.colorbox-min.js"></script>
<link rel="shortcut icon" href="img/ikona.ico" type="image/x-icon" />

<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9936593530369113",
    enable_page_level_ads: true
  });
</script>
</head>

<body>
  <div id="wrapper">
    <header>
      <h1><a id="logo" href="index.html" title="Strona główna">Strona główna</a></h1>
      <nav>
        <ul>
          <li><a href="index.html">Strona główna</a></li>
          <li><a href="Oferta.html">O nas</a></li>
          <li><a href="galeria.html">Galeria</a></li>
		  <li><a href="myjnia.html">Myjnia</a></li>
          <li><a href="podglad.html">Podgląd</a></li>
          <li><a href="kontakt.html">Kontakt</a></li>
          <li><a href="praca.html">Praca</a></li>
        </ul>
      </nav>
      <section id="main-image" class="drop-shadow lifted">
        <figure>
          <h2>Opony</h2>
          <h2 class="second">Serwis</h2>
          <h2 class="third">Wymiana</h2>
        </figure>
      </section>
    </header>
    <div id="content-wrapper">
      <div id="content">
        <article>
        	</html>
        		<?php
        		$login=$_POST["login"];
        		$haslo=$_POST["haslo"];
        		if ($login=="123456789" && $haslo=="123456789") 
        		{
        ?>
        <html>
          <h2>Podgląd administracyjny:</h2>
		  <iframe width="600" height="480" src="https://rtsp.me/embed/deASkFtr/" frameborder="0" allowfullscreen></iframe></p>

		</html>
		<?php
	}
		else{
			?> 
			<html><h2>Logowanie</h2></html>
			<?php
			echo "Niepoprawny login lub hasło.";
		}
		?>
		<html>
		</article>
      </div>
        <aside>
        <section>
          <h2>Galeria</h2>
          <ul class="sidebar-gallery">
            <li><a  rel="bieszczady" href="galeria.html"><img src="img/thumb1.jpg" alt="" /></a></li>
            <li><a  rel="bieszczady" href="galeria.html"><img src="img/thumb2.jpg" alt="" /></a></li>
            <li><a  rel="bieszczady" href="galeria.html"><img src="img/thumb3.jpg" alt="" /></a></li>
            <li><a  rel="bieszczady" href="galeria.html"><img src="img/thumb4.jpg" alt="" /></a></li>
			<li><a  rel="bieszczady" href="galeria.html"><img src="img/thumb5.jpg" alt="" /></a></li>
			<li><a  rel="bieszczady" href="galeria.html"><img src="img/thumb6.jpg" alt="" /></a></li>
			<li><a  rel="bieszczady" href="galeria.html"><img src="img/thumb7.jpg" alt="" /></a></li>
			<li><a  rel="bieszczady" href="galeria.html"><img src="img/thumb8.jpg" alt="" /></a></li>
          </ul>
        </section>
        </aside>
     
    </div>
     <footer>
       <p class="left">&copy; Marcel Majcher</p>
        <nav class="right">
          <ul>
			<li><a class="active" href="index.html">Strona główna</a></li>
			<li><a href="Oferta.html">O nas</a></li>
			<li><a href="galeria.html">Galeria</a></li>
			<li><a href="myjnia.html">Myjnia</a></li>
			<li><a href="podglad.html">Podgląd</a></li>
			<li><a href="kontakt.html">Kontakt</a></li>
      <li><a href="praca.html">Praca</a></li>
          </ul>
        </nav>
      </footer>

  </div> <!-- wrapper -->

<script type="text/javascript">
  $(document).ready(function(){
   $('a.colorbox').colorbox({speed:500,opacity:0.7});
 });
  
</script>


</body>
</html>