<?php
$title = "A-Propos";
include '../elementPage/head.php';
include '../elementPage/navbar.php';
?>

<div id="carousel">
  <figure id="spinner">
    <div class="img-wrapper">
      <img src="public/img/BOOTSTRAP.png" alt>
    </div>
    <div class="img-wrapper"><img src="public/img/CSS.png" alt="logo de CSS"></div>
    <div class="img-wrapper"><img src="public/img/GITHUB.png" alt="logo de Github"></div>
    <div class="img-wrapper"><img src="public/img/HTML.png" alt="logo de HTML"></div>
    <div class="img-wrapper"><img src="public/img/JS.png" alt="logo de JavaScript"></div>
    <div class="img-wrapper"><img src="public/img/MYSQL.png" alt="logo de MySQL"></div>
    <div class="img-wrapper"><img src="public/img/PHP.png" alt="logo de PHP"></div>
    <div class="img-wrapper"><img src="public/img/SASS.png" alt="logo de SASS"></div>
  </figure>
</div>
<span style="float:left" class="ss-icon" onclick="galleryspin('-')">&lt;</span>
<span style="float:right" class="ss-icon" onclick="galleryspin('')">&gt;</span>

<article class="article">
  <p class="article-description">Développeuse web rigoureuse, je conçois des <span class=article-description-colorPink>sites optimisés</span> en maîtrisant le SEO, la sémantique et l'accessibilité. J'utilise des bibliothèques pour des <span class=article-description-colorBlue>expériences dynamiques</span>, couvrant le responsive CSS, les interactions avec le DOM, le stockage local, les <span class=article-description-colorGreen>API</span> et les Bundlers (npm).<br>
   J'ai une expertise étendue en conception de <span class=article-description-colorGreen>bases de données</span>, du modèle conceptuel à l'implémentation rigoureuse pour des interfaces <span class=article-description-colorPink>sécurisées</span>. Mon travail englobe le développement complet des back-offices, offrant ainsi des solutions web complètes et <span class=article-description-colorBlue>performantes</span>.
  </p>

</article>
</section>

<?php
include '../elementPage/footer.php';
?>

</html>