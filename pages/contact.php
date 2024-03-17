
<?php
$title = "contact";
include '../elementPage/head.php';
include '../elementPage/navbar.php';
?>
 

<p class="section-header">Contact</p>
  <div class="contact-wrapper">
    <form id="contact-form" class="form-horizontal" role="form">
        <fieldset class="form-group">
            <input type="text" class="form-control" id="name" placeholder="NOM" name="name" value="" required>
            <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required >
            <textarea class="form-control" rows="7" placeholder="MESSAGE" name="message" required ></textarea>
        </fieldset>
            <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND" autocomplete="off">ENVOYER
          <i class="fa fa-paper-plane"></i><span class="send-text">ENVOYER</span>
      
      </button>
      
    </form>
    
  <!-- Left contact page --> 
    
      <div class="direct-contact-container">

        <ul class="contact-list">
          <li class="list-item"><i class="fa-solid fa-location-crosshairs"><span class="contact-text place">11 rue Victor Hugo</span></i></li>
          <li class="list-item"><i class="fa-solid fa-location-crosshairs"><span class="contact-text place">83330 Le Beausset</span></i></li>
          <li class="list-item"><i class="fa fa-phone"><span class="contact-text phone">06 65 42 31 49</span></i></li>
          
          <li class="list-item"><i class="fa fa-envelope"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">adeline.aiguier@gmail.com</a></span></i></li>
          
        </ul>

        <div class="lign"></div>
        <ul class="social-media-list">
          <li><a href="https://github.com/MissPanda-coder" target="_blank" class="contact-icon">
            <i class="fa-brands fa-github" aria-hidden="true"></i></a>
          </li>
          <li><a href="https://codepen.io/Ad-Line" target="_blank" class="contact-icon">
            <i class="fa-brands fa-codepen" aria-hidden="true"></i></a>
          </li>
          <li><a href="https://twitter.com/Ad_lineA" target="_blank" class="contact-icon">
            <i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
          </li>     
        </ul>
        <div class="lign"></div>

      </div>
      
  </div>
  <a id="cv-button" href="img/CV.pdf" target="_blank" download="CV.pdf">Télécharger CV</a>
  
</section>  
  </div>

  <?php
include '../elementPage/footer.php';
?>