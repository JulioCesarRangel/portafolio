<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Julio Rangel | Sobre mí</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/modal.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  </head>
  <body onload="return init();" id="body">

    <main id="generalMain">

      <?php
        require('nav/index.php');
      ?>

      <div class="btn-scroll hide-on-med-and-down">
        <button class="btn grey hide-on-med-and-down" onclick="return arriba();"><i class="material-icons">keyboard_arrow_up</i></button>
        <button class="btn grey hide-on-med-and-down" onclick="return abajo();"><i class="material-icons">keyboard_arrow_down</i></button>
      </div>

      <div class="mains main row">
        <h1 class="col m6 s12">
          !Hola¡ <br/> Bienvenido a mi portafolio web.
        </h1>

        <img src="media/me.png" alt="me" class="imgme col m6 s12" />

      </div>
      <div class="mains main2 row">
        <div class=" col s12">
          <div class=" col m6 s12 texts">
            <br class="hide-on-large-only">
            <br class="hide-on-large-only">
            <h4>Me llamo Julio Rangel, y me desempeño como programador y diseñador FullStack.</h4>
            <h5>Trabajo principalmente con tecnologias del ecosistema de javascript como las que aqui se muestran.</h5>
            <h6>Adicional a esto, manejo otras tecnologias que me ayudan en el desarrollo de mis trabajo, aqui puedes consultar
              <a style="color:skyblue" href="habilidades"><b>mis habilidades</b></a></h5>
          </div>
          <div class="col m6 s12 contenedor-c-s">
            <div class="contenedor-items carousel carousel-slider carousel-skills">
             <div class="carousel-item white-text" href="#one!">
               <h2 class="col s12">React JS</h2>
               <div class="col s12">
                 <img src="media/reactlogo.png" class="imgslider" alt="reactjs"/>
               </div>
             </div>
             <div class="carousel-item white-text" href="#one!">
               <h2 class="col s12">React Native</h2>
               <div class="col s12">
                 <img src="media/native.png" class="imgslider" alt="rn"/>
               </div>
             </div>
             <div class="carousel-item white-text" href="#one!">
               <h2 class="col s12">Node JS</h2>
               <div class="col s12">
                 <img src="media/node.png" class="imgslider" alt="node"/>
               </div>
             </div>
             <div class="carousel-item white-text" href="#one!">
               <h2 class="col s12">Mongo DB</h2>
               <div class="col s12">
                 <img src="media/mongodb.png" class="imgslider" alt="mdb"/>
               </div>
             </div>
             <div class="carousel-item white-text" href="#one!">
               <h2 class="col s12">Express JS</h2>
               <div class="col s12">
                 <img src="media/express.png" class="imgslider" alt="exp"/>
               </div>
             </div>
           </div>
          </div>
        </div>
      </div>
      <div class="mains main3">
        <div>
          <h4>Proyectos comúnes</h4>
          <div class="contenedor-items carousel carousel-slider center large-carousel">
           <div class="carousel-item  white-text" href="#one!">
             <h2>CRUD</h2>
             <p class="white-text">Es un sistema que te permite principalmente atendender necesidades basicas de manejo de base de datos, De hecho recibe su nombre dadas las siglas de las principales operaciones, create, read, update, delete.</p>
             <p class="white-text">Su uso principal yace en el control estricto de bases de datos empresariales, auque tambien puede ser utilizada para otros fines.</p>
             <a href="#cruDmodal" class="btn grey">ver mas</a>
           </div>
           <div class="carousel-item  white-text" href="#one!">
             <h2>LANDING PAGE</h2>
             <p class="white-text">Son paginas informativas con contenido de interes, que atraen y registran en tu base de datos a clientes potenciales para tu empresa.</p>
             <p class="white-text">Aprovechando la tematica, no olvides <a href="/protafolio/contacto">contactarme</a> y contratar alguno de mis servicios de programación.</p>
             <a href="#LD" class="btn grey">ver mas</a>
           </div>
           <div class="carousel-item  white-text" href="#one!">
             <h2>E-commerce</h2>
             <p class="white-text">Este es un sistema con fines empresariales, que impulsa una tienda en linea a través de servicios como pagos electronicos y delivery de productos.</p>
             <p class="white-text">Ideal para las pequeñas y medianas empresas que buscan expandir sus horizontes.</p>
             <a class="btn grey">ver mas</a>
           </div>
           <div class="carousel-item  white-text" href="#one!">
             <h2>APLICACIONES WEB</h2>
             <p class="white-text">Son aquellas que recrean el funcionamiento de una apliación de escritorio, pero se ejecutan en un entorno web mediante un navegador como en el que estas ahora mismo.</p>
             <p class="white-text">Emplea funcionalidades como acceso a base de datos e interconexion con otros usuarios.</p>
             <a href="#Wapp" class="btn grey">ver mas</a>
           </div>
        </div>
        <footer>
          <p>Julio Rangel 2020</p>
        </footer>
      </div>

      <p id="-" class="hide">foco</p>

       <div id="cruDmodal" class="modals">
         <div class="modal_content">
           <div class="modal_header">
             <h5><b>CRUD</b></h5>
             <a href="#-" class="modal_btn-close"><i class="material-icons" >close</i></a>
           </div>
           <div class="modal-body">
               <p>Al hacer uso de un crud tambien puedes gestionar las acciones que pueda realizar cualquier usuario que pueda tener acceso a este, y asi llevar un control de la base de datos</p>
               <b>En donde puedo aplicar un CRUD ?</b>
               <p>Las aplicaciones mas comunes son para gestionar la base de datos de los empleados de una empresa.</p>
               <p>LLevar el control de mensualidades de in gimnasio u otra empresa que amerite un servicio similar</p>
               <p>LLevar el control de notas de los estudiantes de una institución educativa.</p>
               <p>Y muchas mas</p>
               <p>Crees que necesitas un CRUD para tu negocio u organización ? <a href="/protafolio/contacto/">Solicitalo ya mismo.</a></p>
          </div>
         </div>
       </div>

       <div id="LD" class="modals">
         <div class="modal_content">
           <div class="modal_header">
             <h5><b>LANDING PAGE</b></h5>
             <a href="#-" class="modal_btn-close"><i class="material-icons" >close</i></a>
           </div>
           <div class="modal-body">
               <p>Una Landing Page es primordial si buscas hacer una campaña de marqueting para tu marca o si estas emprendiendo un negocio en linea.</p>
               <b>Para que puedo usar una Landing Page?</b>
               <p>Paginas informativas sobre servicios de una empresa.</p>
               <p>Paginas personales para personajes publicos</p>
               <p>Direfenciar sucursales de sus respectivas cadenas.</p>
               <p>Y muchas mas</p>
               <p>Crees que necesitas una LANDING PAGE para tu negocio u organización ? <a href="/protafolio/contacto/">Solicitala ya mismo.</a></p>
          </div>
         </div>
       </div>

       <div id="Wapp" class="modals">
         <div class="modal_content">
           <div class="modal_header">
             <h5><b>APLICACIONES WEB</b></h5>
             <a href="#-" class="modal_btn-close"><i class="material-icons" >close</i></a>
           </div>
           <div class="modal-body">
               <p>Es el siguiente escalón en escalabilidad de ena pagina web, luego del Landing page, este trae consigo funciones mas avanzadas y de mucho mas impacto organizacional.</p>
               <b>Para que puedo usar una aplicación web?</b>
               <p>LLevar a un entorno web alguna aplicación movil o de escritorio existente</p>
               <p>Ofrecer servicios en linea enfocado a publicos especificos</p>
               <p>Plataformas de entretenimiento como redes sociales.</p>
               <p>Y muchas mas</p>
               <p>Crees que necesitas una APLICACIÓN WEB para tu negocio u organización ? <a href="/protafolio/contacto/">Solicitala ya mismo.</a></p>
          </div>
         </div>
       </div>

      </div>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      <script type="text/javascript">
        $('.carousel.carousel-slider').carousel({
         fullWidth: true,
         indicators: true,
         autoplay : true
        });
      </script>
      <script type="text/javascript" src="index.js"></script>
  </body>
</html>
