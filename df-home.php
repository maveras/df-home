<?php /* Template Name: dh-home */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
      crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=PT+Mono|PT+Sans+Narrow:400,700|PT+Sans:400,400i,700,700i|PT+Serif+Caption:400,400i|PT+Serif:400,400i,700,700i|family=Playfair+Display:400,400i,700,700i,900" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Martel:200,300,400,600,700,800,900" rel="stylesheet">
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
      <link rel="stylesheet" type="text/css" href="<?php print_r(
          get_bloginfo('stylesheet_directory') )?>/css/df-home.css">
</head>
  <title>Font</title>
  <?php  // wp_head(); ?>
  <body>
  <div id="app">
      <nav class="col-md-12 pad-l-0">
         <!-- menu mobile -->
        <div class="m-menu pos-a por-r" :class="{'m-menu--hidden': hideMovilMenu}">
          <ul class="sub-menu-lis">
            <li class="sub-menu-list__item sub-menu-list__item--no-margin m-item">item1</li>
            <li class="sub-menu-list__item sub-menu-list__item--no-margin m-item">item1</li>
            <li class="sub-menu-list__item sub-menu-list__item--no-margin m-item">item1</li>
            <li class="sub-menu-list__item sub-menu-list__item--no-margin m-item">item1</li>
          </ul>
          <div class="m-menu__close pos-a" @click="hideMovilMenu = !hideMovilMenu">
            <i class="material-icons">
            close
            </i>
          </div>
        </div>
      </nav>
      <header class="pos-r col-xs-12">
        <div class="row nav-container"  v-bind:class="{ 'hide-first-menu': hideFirstMenu }">
          <div class="col-md-3 col-md-offset-9 col-xs-12">
            <ul class="nav-container-item-list d-flex">
              <li class="nav-container-item-list__item">Curso ed
                <span>
                  <img src="" alt="">
                </span>
              </li>
              <li class="nav-container-item-list__item">Curso ed
                <span>
                  <img src="" alt="">
                </span>
              </li>
              <li class="nav-container-item-list__item">Curso ed
                <span>
                  <img src="" alt="">
                </span>
              </li>
            </ul>
          </div>
        </div>
        <div class="row main-menu" :class="{'to-top': hideFirstMenu}">
          <!-- visible en medium y large -->
          <div class="container d-flex hidden-xs">
            <div class="col-md-2 col-md-offset-1 vertical-align hidden-xs">
              <span class="main-menu__logo">ED</span>
            </div>
            <div class="col-md-10 menu-container hidden-xs">
              <div class="row">
                <div class="col-md-10 col-md-offset-1 menu-container__sub-menu menu-container__sub-menu--line pad-r-0">
                  <ul class="d-flex sub-menu-list sub-menu-list--line">
                    <li class="sub-menu-list__item font-1">newsletters</li>
                    <li class="sub-menu-list__item font-2">edicion digital</li>
                    <li class="sub-menu-list__item font-3">iniciar sesión</li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col-md-11 menu-container__sub-menu pad-r-0">
                  <ul class="d-flex sub-menu-list">
                    <li class="sub-menu-list__item sub-menu-list__item--bold">decoracion</li>
                    <li class="sub-menu-list__item sub-menu-list__item--bold">arquitectura</li>
                    <li class="sub-menu-list__item sub-menu-list__item--bold">arte y diseño</li>
                    <li class="sub-menu-list__item sub-menu-list__item--bold">gourmet</li>
                    <li class="sub-menu-list__item sub-menu-list__item--bold">actualidad</li>
                    <li class="sub-menu-list__item sub-menu-list__item--bold sub-menu-list__item--border-l">
                      <i class="material-icons">
                        search
                      </i>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- -->
          <!-- visible en xs -->
          <div class="container visible-xs">
            <div class="row pos-r">
              <div class="menu-mobile pos-a" @click="hideMovilMenu = !hideMovilMenu">
                <span><i class="material-icons md-36">
                  menu
                  </i>
                </span>
              </div>
              <div class="col-xs-4 col-xs-offset-4 ta-c">
                <span class="main-menu__logo">ED</span>
              </div>
              <div class="col-xs-4 xs-search-menu">
                <i class="material-icons md-36 pull-right" @click="showSearchBar = !showSearchBar">
                  search
                </i>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 xs-search-bar">
                <input type="input" class="col-xs-8">
                <button class="col-xs-4">Buscar</button>
              </div>
            </div>
          </div>
          <!--  -->
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="title col-xs-12 font-1 ta-c">
            <h1 class="main-title">Chacaclayo tradición artesanal</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 slider--container">
            <?php echo do_shortcode('[metaslider id="34"]'); ?>
          </div>
        </div>
        <div class="main-content row">
          <div class="col-md-10 col-md-offset-1">
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-4 category">
                    <span>Home / Decoracion</span>
                  </div>
                  <div class="col-md-5 col-md-offset-3 publication-date">
                    <span>Publicado el edicion Nº305, Julio 2018</span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 publicated-by">
                    <span>Por Juan Jose Richards </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 resume">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur, atque culpa, qui libero blanditiis ipsum iste suscipit, a laudantium voluptatem cum sunt optio nesciunt temporibus facere placeat itaque dolores. Molestias!
                  </div>
                  <div class="col-md-12">
                    <div class="article-gallery f-l full-width">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur animi reprehenderit deleniti illum? At nulla, officiis deleniti possimus sed similique! Nisi rerum dicta, obcaecati praesentium odio labore maiores cum esse!
                      slider slider sldioder
                        <span>sadjkaslkjdsa Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda laudantium, tenetur odio nostrum adipisci dolorum nulla maiores architecto, quae nihil possimus incidunt debitis eveniet fugiat ipsum quisquam accusantium dolor beatae!</span>
                      </div>
                    <p class="main-article">el mainnnnn Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sequi unde ipsum facilis animi, sint vero, laudantium distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam in el mainnnnn Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sequi unde ipsum facilis animi, sint vero, laudantium distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam inel mainnnnn Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sequi unde ipsum facilis animi, sint vero, laudantium distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam inel mainnnnn Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sequi unde ipsum facilis animi, sint vero, laudantium distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam inel mainnnnn Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sequi unde ipsum facilis animi, sint vero, laudantium distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam inel mainnnnn Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sequi unde ipsum facilis animi, sint vero, laudantium distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam inel mainnnnn Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sequi unde ipsum facilis animi, sint vero, laudantium distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam inel mainnnnn Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sequi unde ipsum facilis animi, sint vero, laudantium distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam inel mainnnnn Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sequi unde ipsum facilis animi, sint vero, laudantium distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam inel mainnnnn Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sequi unde ipsum facilis animi, sint vero, laudantium distinctio soluta, ipsa dolore ex esse voluptatem deleniti tempora? Saepe officia quam in.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, quam, modi itaque labore vitae porro omnis nulla rem harum aspernatur fugiat rerum quia quod aut sequi error saepe. Enim, eligendi?</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button @click="hideFirstMenu = !hideFirstMenu">cloick<button>
      <button @click="setScroller">setscrolcloick<button>
      <button @click="hideMovilMenu = !hideMovilMenu">showMenu<button>
      <button @click="showSearchBar = !showSearchBar">showsearch<button>
      <footer>
        <?php  wp_footer(); ?>
      </footer>
  </div>
</body>
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
    document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:35729}/livereload.js?snipver=1"></' + 'script>')
</script>