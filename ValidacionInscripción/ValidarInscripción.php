<?php
  require 'Conexion.php';

  $where = "";
  if(!empty($_POST))
  {
    $valor = $_POST['campo'];
    if(!empty($valor)){
      $where = "WHERE cuenta LIKE '%$valor%'";
    }
  }
  //$sql = "SELECT * FROM alumno $where"
  $sql = "SELECT d.id, d.cuenta_alumno, a.nombre, a.a_paterno, a.a_materno, d.valido, d.revisado FROM documento d INNER JOIN alumno a ON d.cuenta_alumno= a.cuenta WHERE revisado=0 GROUP BY d.cuenta_alumno"; 

  $resultado=mysqli_query($conectar,$sql);
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Validar Inscripción</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="estilos2.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="Header-and-footer.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "",
    "logo": "images/Mi_gym__5_-removebg-preview.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Header and footer">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Header-and-footer.html" data-home-page-title="Header and footer" class="u-body u-xl-mode" data-lang="es"><header class="u-clearfix u-header u-header" id="sec-8f91"><div class="u-clearfix u-sheet u-sheet-1">
            <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
          <img src="images/Mi_gym__5_-removebg-preview.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1.125rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-hover-color u-custom-text-shadow u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-1-base" href="#" style="padding: 10px 20px;">Acerca de</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-1-base" href="#" style="padding: 10px 20px;">Contacto</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-1-base" href="#" style="padding: 10px 20px;">Menú</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Acerca de</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Contacto</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Menú</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div>

    </header>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <div class="container">
      <br>
        <A HREF="../login/MenuAdministrador.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
          <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
        </svg></A>
        <h2><center><font face="Constantia">CONSULTAR DATOS DE ALUMNO</center></font></h2>
          <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
          <b>Nombre: </b><input type="text" id="campo" name="campo" />
          <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
        </form>


        <table class="table table-striped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Cuenta_alumno</th>
              <th>Nombre</th>
              <th>A_paterno</th>
              <th>A_materno</th>
              <th>Valido</th>
              <th>Revisado</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          
          <tbody>
            <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['cuenta_alumno']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['a_paterno']; ?></td>
                <td><?php echo $row['a_materno']; ?></td>
                <td><?php echo $row['valido']; ?></td>
                <td><?php echo $row['revisado']; ?></td>
                <td><a class="btn btn-warning" href="modificar.php?cuenta_alumno=<?php echo $row['cuenta_alumno']; ?>">VALIDAR</a></td>
              </tr>

            <?php } ?>

          </tbody>
        </table>

        
              
      </div>
    </div>  

    <!--tabla-->
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Descargas Disponibles</h3>
      </div>
      <div class="panel-body">
   
<table class="table">
  <thead>
    <tr>
      <th width="7%">#</th>
      <th width="70%">Nombre del Archivo</th>
      <th width="13%">Descargar</th>
      <th width="10%">Eliminar</th>
    </tr>
  </thead>
  <tbody>
<?php
$archivos = scandir("../Incripción/subidas");
$num=0;
for ($i=2; $i<count($archivos); $i++)
{$num++;
?>
<p>  
 </p>
         
    <tr>
      <th scope="row"><?php echo $num;?></th>
      <td><?php echo $archivos[$i]; ?></td>
      <td><a title="Descargar Archivo" href="../Incripción/subidas/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" style="color: blue; font-size:18px;"> 
        <button class="glyphicon glyphicon-download-alt" aria-hidden="true">DESCARGAR</button>
        </a></td>
      <td><a title="Eliminar Archivo" href="Eliminar.php?name=../Incripción/subidas/<?php echo $archivos[$i]; ?>" style="color: red; font-size:18px;" onclick="return confirm('Esta seguro de eliminar el archivo?');"> 
        <button class="glyphicon glyphicon-download-alt" aria-hidden="true">ELIMINAR</button>
        </a></td>
    </tr>
 <?php }?> 

  </tbody>
</table>
</div>
</div>
<!-- Fin tabla--> 
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-431f"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1"><span class="u-custom-item u-file-icon u-icon u-text-white u-icon-1" data-href="https://www.facebook.com/deporteFESC" data-target="_blank" data-animation-name="customAnimationIn" data-animation-duration="1000"><img src="images/4.png" alt=""></span>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-2"><span class="u-custom-item u-file-icon u-icon u-text-white u-icon-2" data-animation-name="customAnimationIn" data-animation-duration="1000" data-href="https://www.google.com/intl/es-419/gmail/about/" data-target="_blank"><img src="images/5.png" alt=""></span>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3"><span class="u-custom-item u-file-icon u-icon u-text-white u-icon-3" data-href="https://www.cuautitlan.unam.mx/" data-target="_blank" data-animation-name="customAnimationIn" data-animation-duration="1000"><img src="images/3670274-da6379b7.png" alt=""></span>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-4"><span class="u-custom-item u-file-icon u-icon u-text-white u-icon-4" data-href="https://twitter.com/FESC_UNAM?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" data-target="_blank" data-animation-name="customAnimationIn" data-animation-duration="1000"><img src="images/2168336-99f6b750.png" alt=""></span>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-5"><span class="u-custom-item u-file-icon u-icon u-text-white u-icon-5" data-animation-name="customAnimationIn" data-animation-duration="1000"><img src="images/1384012-9236fcce.png" alt=""></span>
              </div>
            </div>
          </div>
        </div>
        <h6 class="u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="">UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO<br>Facultad de Estudios Superiores, Cuautitlán
        </h6>
        <div class="u-border-4 u-border-white u-line u-line-horizontal u-line-1"></div>
        <a href="https://nicepage.com/wordpress-themes" class="u-active-none u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-top-left-radius-0 u-top-right-radius-0 u-btn-1" data-animation-name="customAnimationIn" data-animation-duration="1000"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 405.333 405.333" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M373.333,266.88c-25.003,0-49.493-3.904-72.704-11.563c-11.328-3.904-24.192-0.896-31.637,6.699l-46.016,34.752    c-52.8-28.181-86.592-61.952-114.389-114.368l33.813-44.928c8.512-8.512,11.563-20.971,7.915-32.64    C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32    c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z"></path></svg><img></span>&nbsp;+52 (55) 562-1806
        </a>
        <p class="u-align-left u-text u-text-default u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1000"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg><img></span>&nbsp;Av Teoloyucan, San Sebastián Xhala,<br>&nbsp; &nbsp; &nbsp;54714 Cuautitlán, Méx
        </p>
        <div class="u-border-1 u-border-white u-line u-line-horizontal u-line-2"></div>
        <div class="u-border-6 u-border-grey-5 u-line u-line-horizontal u-line-3"></div>
        <div class="u-border-5 u-border-white u-line u-line-horizontal u-line-4"></div>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://www.copyright.com/" target="_blank">
        <span>Copyright.Todos Los Derechos Reservados</span>
  
    </section>
  
</body></html>