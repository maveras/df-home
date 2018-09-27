<?php /* Template Name: dh-article */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Mono|PT+Sans+Narrow:400,700|PT+Sans:400,400i,700,700i|PT+Serif+Caption:400,400i|PT+Serif:400,400i,700,700i|family=Playfair+Display:400,400i,700,700i,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Martel:200,300,400,600,700,800,900" rel="stylesheet">
    <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <!-- owl-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <!-- owl-->

  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php print_r(get_bloginfo('stylesheet_directory') )?>/css/df-article.css">
</head>
  <title>article</title>
  <body>
  <div id="app">
      <header>
        <!-- main menu -->
        <div class="row">
          <div class="row main-menu__first">
            <div class="container">
              <div class="col-md-4 col-md-offset-7">
                <ul class="main-menu__first-list">
                  <li class="first-menu-list__item ">link 1</li>
                  <li class="first-menu-list__item ">link 2</li>
                  <li class="first-menu-list__item ">link 3</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row main-menu__second hidden-xs">
            <div class="container d-flex fd-r ai-c">
              <div class="col-md-2 col-md-offset-1">
                <img class="menu-second__logo" src="https://www.ed.cl/wp-content/themes/revista-ed/img/logos/logo-footer.svg" alt="">
              </div>
              <div class="col-md-7 col-md-offset-1 d-flex fd-column">
                <div class="row pad-menu menu-second-top">
                  <div class="col-md-12">
                    <ul class="d-flex f-dr jc-end">
                      <li>NEWSLETTER</li>
                      <li>EDICION DIGITAL</li>
                      <li>INICIAR SESIÓN</li>
                    </ul>
                  </div>
                </div>
                <div class="row pad-menu menu-second-bottom">
                  <div class="col-md-12">
                    <ul class="d-flex f-dr jc-end">
                      <li>DECORACIÓN</li>
                      <li>ARQUITECTURA</li>
                      <li>ARTE Y DISEÑO</li>
                      <li>GOURMET</li>
                      <li>ACTUALIDAD</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row main-menu__second visible-xs">
            <div class="container d-flex fd-r jc-sa ai-c">
              <span>
                <i class="material-icons">menu</i>
              </span>
              <span><img class="menu-second__logo" src="https://www.ed.cl/wp-content/themes/revista-ed/img/logos/logo-footer.svg" alt=""></span>
              <span>
                <i class="material-icons">
                search
                </i>
              </span>
            </div>
          </div>
        </div>
        <!-- end main menu -->
      </header>
      <div class="container">
        <div class="row">
          <div class="title col-xs-12 font-1 ta-c">
            <h1 class="main-title">Chacaclayo tradición artesanal</h1>
          </div>
        </div>
        <div class="row slider-container">
          <div class="col-md-10 col-md-offset-1 col slider--container fade1">
            <img class=""src="https://upload.wikimedia.org/wikipedia/commons/5/5b/Grib_skov.jpg" alt="">
            <img class=""src="https://upload.wikimedia.org/wikipedia/commons/5/5b/Grib_skov.jpg" alt="">
            <img class=""src="https://upload.wikimedia.org/wikipedia/commons/5/5b/Grib_skov.jpg" alt="">
            <img class=""src="https://upload.wikimedia.org/wikipedia/commons/5/5b/Grib_skov.jpg" alt="">
          </div>
        </div>
        <!-- article section 1 -->
        <div class="main-content row">
          <div class="col-md-10 col-md-offset-1">
            <!-- article section 1 -->
            <div class="row">
              <div class="col-md-7">
                <!-- Author Article details -->
                <div class="row article-details mar-l-0">
                  <div class="col-md-4 category pad-l-0">
                    <span>Home / <span class="bold">Decoracion</span></span>
                  </div>
                  <div class="col-md-6 col-md-offset-2 publication-date pad-r-0 ">
                    <span class="f-r publication-date bold">Publicado el edicion Nº305, Julio 2018</span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 publicated-by">
                    <span>Por <span class="bold">Juan Jose Richards</span> | Fotos <span class="bold">Revista Cosas Perú</span> </span>
                  </div>
                </div>
                 <!--  -->
                <div class="row">
                  <!-- article resume -->
                  <div class="col-md-12 resume">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur, atque culpa, qui libero blanditiis ipsum iste suscipit, a laudantium voluptatem cum sunt optio nesciunt temporibus facere placeat itaque dolores. Molestias!
                  </div>
                  <!--  -->
                  <!-- article part 1 -->
                  <div class="col-md-12">
                    <p class="main-article">el mainnnnn Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sequi unde ipsum facilis animi, sint vero, laudantium distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam in el mainnnnn Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sequi unde ipsum facilis animi, sint vero, laudantium distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam inel mainnnnn Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sequi unde ipsum facilis animi, sint vero, laudantium distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam inel mainnnnn Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sequi unde ipsum facilis animi, sint vero, laudantium distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam inel mainnnnn Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sequi unde ipsum facilis animi, sint vero, laudantium distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam inel mainnnnn Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sequi unde ipsum facilis animi, sint vero, laudantium distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam inel mainnnnn Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sequi unde ipsum facilis animi, sint vero, laudantium distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam inel mainnnnn Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sequi unde ipsum facilis animi, sint vero, laudantium distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam inel mainnnnn Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sequi unde ipsum facilis animi, sint vero, laudantium distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam inel mainnnnn Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sequi unde ipsum facilis animi, sint vero, laudantium distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam in.
                    </p>
                  </div>
                  <!--  -->
                </div>
              </div>
              <div class="col-md-5">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, quam, modi itaque labore vitae porro omnis nulla rem harum aspernatur fugiat rerum quia quod aut sequi error saepe. Enim, eligendi?</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- galeria -->
      <div class="row article-gallery">
        <div class="col-md-12">
          <ul class="owl-carousel">
            <li class="article-gallery__item">
              <img src="https://www.capital.cl/wp-content/uploads/2018/09/Econotes478.png" alt="">
            </li>
            <li class="article-gallery__item">
              <img src="https://www.capital.cl/wp-content/uploads/2018/09/gente-1.jpg" alt="">
            </li>
            <li class="article-gallery__item">
              <img src="https://www.capital.cl/wp-content/uploads/2018/09/Econotes478.png" alt="">
            </li>
            <li class="article-gallery__item">
              <img src="https://www.capital.cl/wp-content/uploads/2018/09/gente-1.jpg" alt="">
            </li>
            <li class="article-gallery__item">
              <img src="https://www.capital.cl/wp-content/uploads/2018/09/Econotes478.png" alt="">
            </li>
            <li class="article-gallery__item">
              <img src="https://www.capital.cl/wp-content/uploads/2018/09/gente-1.jpg" alt="">
            </li>
          </ul>
        </div>
      </div>
      <!-- article section 2 -->
      <div class="container">
        <div class="main-content row">
          <div class="col-md-10 col-md-offset-1">
            <div class="row">
              <div class="col-md-7">
                <div class="row">
                  <!-- article section 2 -->
                  <div class="col-md-12">
                    <p class="">um distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam in. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, quam, modi itaque labore vitae porro omnis nulla rem harum aspernatur fugiat rerum quia quod aut sequi error saepe. Enim, eligendi?
                    </p>
                  </div>
                  <!--  -->
                  <!-- article post image -->
                  <div class="col-md-12">
                    <div class="img-article">
                      <img class="w100"src="https://www.capital.cl/wp-content/uploads/2018/08/Eco-notes-477.jpg" alt="">
                    </div>
                  </div>
                  <!--  -->
                  <div class="col-md-12">
                     <p class="">um distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam in. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, quam, modi itaque labore vitae porro omnis nulla rem harum aspernatur fugiat rerum quia quod aut sequi error saepe. Enim, eligendi?
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, quam, modi itaque labore vitae porro omnis nulla rem harum aspernatur fugiat rerum quia quod aut sequi error saepe. Enim, eligendi?</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom-banner d-flex f-dr jc-sa">
        <img src="https://cdn5.f-cdn.com/contestentries/1136976/18879954/59c3b49150eb2_thumb900.jpg" alt="">
      </div>

      <!-- footer -->
      <footer class="col-xs-12">
        <h4>el contenido del footer</h4>
      </footer>
      <button @click="hideFirstMenu = !hideFirstMenu">cloick<button>
      <button @click="setScroller">setscrolcloick<button>
      <button @click="hideMovilMenu = !hideMovilMenu">showMenu<button>
      <button @click="showSearchBar = !showSearchBar">showsearch<button>
      <footer>
      </footer>
  </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
   $(document).ready(function(){
      $('.fade1').slick({
        dots: false,
        fade: true,
        cssEase: 'linear',
        arrows: true,
        // prevArrow:'<i class="material-icons slick-prev">navigate_before</i>',
        // nextArrow:'<i class="material-icons slick-next">navigate_next</i>',
      });
      $(".owl-carousel").owlCarousel({
        
      });
    });
    
</script>
<script>
  var app = new Vue({
      el: '#app',
      data: {
        hideFirstMenu: false,
        hideMovilMenu: true,
        showSearchBar: false

      },
      methods: {
        setScroller () {
          let bodyScroller = document.querySelector('#app')
          // window.addEventListener('resize', evt => {
          //   if (!this.show) {
          //     return
          //   }
        },
        setStiker () {
          let mainMenu = document.querySelector('.main-menu')
          console.log(mainMenu)
        }
      },
      // computed: {},
      // watch: {
      // firstName: function (val) {
      //   this.fullName = val + ' ' + this.lastName
      // },
      // lastName: function (val) {
      //   this.fullName = this.firstName + ' ' + val
      // }
      // }
    })
</script>
<script>
    // document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:35729}/livereload.js?snipver=1"></' + 'script>')
</script>