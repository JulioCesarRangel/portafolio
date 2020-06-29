<?php
  $url= $_SERVER["REQUEST_URI"];
  $active = null ;

  if ($url === "/protafolio/") {
    $active = 1;
  } else if ($url === "/protafolio/habilidades/") {
    $active = 2;
  } else if ($url === "/protafolio/proyectos/"){
    $active = 3;
  } else {
    $active = 4;
  }
?>

<nav class="nav">
  <input type="checkbox" id="checkm" onclick="return tap();">
  <label  for="checkm" class="btn-menu hide-on-med-and-up right">
    <i class="material-icons">menu</i>
  </label>
  <ul>
    <label  for="checkm" class="right btn-menu hide-on-med-and-up">
      <i class="material-icons">close</i>
    </label>
    <br class="hide-on-med-and-up">
    <br class="hide-on-med-and-up">
    <li <?php if ($active === 1) {
      ?> class="activebtn"
     <?php } ?> ><a href="/protafolio">Sobre mi</a></li>
    <li <?php if ($active === 2) {
      ?> class="activebtn"
     <?php } ?>><a href="/protafolio/habilidades">Habilidades</a></li>
    <li <?php if ($active === 3) {
      ?> class="activebtn"
     <?php } ?>><a href="/protafolio/proyectos">Proyectos</a></li>
    <li <?php if ($active === 4) {
      ?> class="activebtn"
     <?php } ?>><a href="/protafolio/contacto">Contacto</a></li>
  </ul>
</nav>
