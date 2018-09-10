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
      <script src="https://cdn.jsdelivr.net/npm/vue"></script>
      <link rel="stylesheet" type="text/css" href="<?php print_r(
          get_bloginfo('stylesheet_directory') )?>/css/df-home.css">

  <title>Font</title>
  <div id="app">
      <header class="pos-r">
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
        <div class="m-menu pos-a por-r" :class="{'m-menu--hidden': showMovilMenu}">
          <ul>
            <li>item1</li>
            <li>item1</li>
            <li>item1</li>
            <li>item1</li>
            
          </ul>
          <div class="m-menu__close pos-a" @click="showMovilMenu = !showMovilMenu">
            X
          </div>
        </div>
        <div class="row main-menu" :class="{'to-top': hideFirstMenu}">
          <div class="container d-flex ">

            <div class="col-md-2 col-md-offset-1 vertical-align">
              <span class="main-menu__logo">ED</span>
            </div>
            <div class="col-md-10 menu-container">
              <div class="row">
                <div class="col-md-10 col-md-offset-1 menu-container__sub-menu menu-container__sub-menu--line pad-r-0">
                  <ul class="d-flex sub-menu-list sub-menu-list--line">
                    <li class="sub-menu-list__item">newsletters</li>
                    <li class="sub-menu-list__item">edicion digital</li>
                    <li class="sub-menu-list__item">iniciar sesión</li>
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
        </div>
      </header>
      <button @click="hideFirstMenu = !hideFirstMenu">cloick<button>
      <button @click="setScroller">setscrolcloick<button>
      <button @click="showMovilMenu = !showMovilMenu">showMenu<button>
  </div>
</head>
<body>
</body>
<script>
  var app = new Vue({
      el: '#app',
      data: {
        hideFirstMenu: false,
        showMovilMenu: true

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