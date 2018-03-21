<!-- About page template -->

<?php get_header(); ?>

<!-- main page image -->
<div class="jumbotron">
      <div class="container">
        <div class="img-fluid mx-auto d-block text-center" id="logo" aria-hidden="true">
          <img class="logoimg animated fadeInUp" src="<?php echo get_template_directory_uri();?>/assets/STE_logo_201216.png" alt="Star Trek Eire logo" aria-hidden="true">
        </div>
      </div>
    </div>

<!-- First row: about star trek eire-->
 <section class="first">
   <div class="container">
     <div class="row">
      <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
        <div class="img-fluid"><img id="ste_about" src="<?php echo get_template_directory_uri();?>/assets/startrekeire_about.jpg" alt="star trek eire group" aria-hidden="true"></div>
      </div>
      <div class="about col-lg-7 col-md-7 col-sm-12 col-xs-12">
        <h2>About Star Trek Éire</h2>
        <p>Star Trek Eire is a not for profit group of Star Trek fans based
          in Ireland. Our aim is to bring the universe of Star Trek to new
          and old fans through events and screenings in Dublin. We hope to
          meet other enthusiasts and revel in the greatness of the TV franchise
          from the original 1966 series all the way up to the current films.
          If you’re a diehard fan or someone who’s just seen the latest films
          and wants to know more, we’re the group for you. We’ll be posting
          and sharing news about all things Star Trek.

          <p>Come with us on a journey of fun, discovery and friendship.
          <br>Cheers!
          <p>Ciarán, Darryn, Gary, Ronan, & Shane.</p>
      </div>
    </div>
  </div>
 </section>

<!-- second row: about the clubhouse-->
  <section class="second">
    <div class="container-fluid">
      <div class="about_club">
        <div class="container">
          <div class="row">
            <div class="about about_club col-lg-7 col-md-7 col-sm-9 col-xs-12">
               <h2>The Clubhouse</h2>
               <p>The Clubhouse is a non-profit organization part of a global network
               of 105 Clubhouses that provides a safe and creative learning environment in
               technology for young people between the ages of 10 and 18.</p>
               <a class="btn btn-primary" href="http://theclubhouse.ie/" role="button">Know More</a>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-7 col-xs-12">
              <div class="img-fluid"><img id="clubhouse_about" src="<?php echo get_template_directory_uri();?>/assets/clubhouse.jpg" alt="The clubhouse student's equipments" aria-hidden="true"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer();?>
