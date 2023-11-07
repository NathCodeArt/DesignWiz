<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 1) {
        echo '<script>alert("registro éxitoso");</script>';
    }
    if ($_GET['status'] == 2) {
        echo '<script>alert("El usuario ya existe");</script>';
    }
    if ($_GET['status'] == 3) {
        echo '<script>alert("Acceso denegado");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="finanzas, finanaciera, freelance, diseño grafico">
    <meta name="author" content="Natalia Cardoso">
    <meta name="description" content="Plataforma de gestión integral para freelancers de diseño gráfico. Genera presupuestos, factura, realiza seguimiento financiero, administra proyectos, registra tiempo y gastos, comunícate con clientes y mantén un control total de tus finanzas. Herramientas de eficiencia y profesionalismo para diseñadores gráficos independientes.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="img/svg/favicon-black.svg">
    <link rel="stylesheet" href="css/style_main.css">
    <title>DesignWiz</title>
</head>
<body>  
    <header>
        <nav>
            <div>
              <a href="#"><img src="img/svg/isotipo-white.svg" alt="logo"></a>
            </div>
            <div>
              <ul id="nav">
                <li><a href="#">Home</a></li>
                <li><a href="#services">Servicios</a></li>  
                <li><a href="#contactox">Contacto</a></li>
              </ul>
            </div>
            <div class="menu" id="menu">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </nav>
          <div class="filter">
          </div>
          <div class="general_info">
            <img src="img\svg\imagotipo-white.svg" alt="">
            <h2>Potencia tu Creatividad, Controla tu Éxito</h2>
            <p>
                El proyecto es una plataforma de gestión integral diseñada para ayudar a freelancers de diseño gráfico a administrar sus proyectos de manera efectiva. La plataforma proporciona herramientas para gestionar proyectos, realizar un seguimiento financiero, generar presupuestos, facturación, comunicarse con los clientes y mantener un alto nivel de profesionalismo en sus operaciones. La plataforma incluye una interfaz de usuario intuitiva y amigable.
            </p>

            <button class="btn_login" data-toggle="modal" data-target="#login_modal">Ingresa</button>
            <button type="button" class="btn_register" data-toggle="modal" data-target="#register_modal">Registrate</button>
          </div>
    </header>
  
    <!-- Modal de Registro-->
    <div class="modal fade" id="register_modal" tabindex="-1" role="dialog" aria-labelledby="register_modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="register_modalLabel">Registro de usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="back/register.php" method="POST">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputnombres">Nombres</label>
                        <input type="text" class="form-control" name="names" id="inputnombres" placeholder="Digite sus nombres" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputapellidos">Apellidos</label>
                        <input type="text" class="form-control" name="lastname" id="inputapellidos" placeholder="Digite sus Apellidos" required>
                      </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputfecha_nacimiento">Fecha de Nacimiento</label>
                          <input type="date" class="form-control" name="birth" id="inputfecha_nacimiento" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputnumero_id">Número de Identificación (usuario)</label >
                          <input type="text" class="form-control" name="id_person" id="inputnumero_id" required>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputemail">Correo Electrónico</label>
                          <input type="email" class="form-control" name="email" id="inputemail" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputcontra">Contraseña</label>
                          <input type="password" class="form-control" name="pass" id="inputcontra" required>
                        </div>
                      </div>
                      <button name="register_btn" type="submit" class="btn_login">Registrate</button>
                      <button type="reset" class="btn_register">Limpiar</button>
                  </form>
            </div>
                
        </div>
        </div>
    </div>

    <!-- Modal de Login-->
    <div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="login_modalLabel">Inicio de Sesión</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="back/login.php" method="POST">
                      <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="inputnumero_id">Número de Identificación (usuario)</label >
                          <input type="text" class="form-control" name="id_person" id="inputnumero_id" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputcontra">Contraseña</label>
                          <input type="password" class="form-control" name="pass" id="inputcontra" required>
                        </div>
                      </div>
                      <button name="login_btn" type="submit" class="btn_login">Ingresa</button>
                  </form>
            </div>
                
        </div>
        </div>
    </div>
    <!--SECCION DE Seguimiento Financiero-->
    <section class="structure_one reverse">
        <div class="illustration_section">
            <img src="img/png/registro_ingresos.png">
        </div>
        <div class="info_section">
            <div class="title">
                <h3>Seguimiento financiero</h3>
            </div>
            <p>
                La plataforma permitirá a los freelancers llevar un seguimiento detallado de sus finanzas, incluyendo ingresos, gastos y ganancias. Los usuarios podrán ver gráficos y resúmenes financieros para tomar decisiones informadas.
            </p>
        </div>
    </section>
<!--SECCION DE Informes financieros-->
    <section class="structure_one">
        <div class="info_section">
        <div class="title">
                <h3>Informes financieros personalizados</h3>
            </div>
            <p>
                Informes financieros a medida que permiten a los freelancers crear documentos detallados y adaptados a sus necesidades, destacando métricas financieras específicas para tomar decisiones estratégicas.
            </p>
        </div>
        <div class="illustration_section">
            <img src="img/png/informes.png" alt="">
        </div>
    </section>

<!--SECCION 3 en uno-->
    <div class="section-column">
        <div class="section-cards">
            <div class="section-card">
            <div class="section-card-img">
                <img src="img/png/contrato_propuesta.png" alt="">
            </div>
            <h3>Plantillas de contrato y propuesta</h3>
            <p>
                Tendrás acceso a plantillas de contrato y propuesta personalizables que facilitarán la formalización de acuerdos con clientes. Podrás adaptar estas plantillas según las necesidades de cada proyecto.
            </p>
            </div>

            <div class="section-card">
            <div class="section-card-img">
                <img src="img/png/tiempos-gastos.png" alt="">
            </div>
            <h3>Registro de tiempo y gastos</h3>
            <p>
                Los usuarios podrán llevar un registro detallado de las horas trabajadas en cada proyecto y agregar gastos relacionados. Esto ayudará en la facturación precisa y el seguimiento financiero.
            </p>
            </div>

            <div class="section-card">
            <div class="section-card-img">
                <img src="img/png/dashboard.png" alt="">
            </div>
            <h3>Registro de tiempo y gastos</h3>
            <p>
                Un panel de control que proporciona a los freelancers una vista rápida y visual de datos clave sobre proyectos, finanzas y objetivos.
            </p>
            </div>
        </div>
    </div>


    <footer id="contacto">
        <div class="logo">
            <img src="img/svg/isologo-white.svg" alt="">
        </div>
        <div class="contain-main-footer">
            <div class="contact-regulatory-container">
                <div class="contact">
                    <h4>Datos de contacto</h4>
                    <address>
                        <ul>
                            <li>
                                <i class="bi bi-caret-right">Institución de Educación Superior sujeta a inspección y vigilancia por el Ministerio de Educación Nacional</i>
                            </li>
                            <li>
                                <i class="bi bi-caret-right">Acuerdo de creación N° 10 de 1948 del Concejo de Bogotá</i>
                            </li>
                            <li>
                                <i class="bi bi-caret-right">Acreditación Institucional de Alta Calidad - Resolución N° 023653 del 10 de diciembre del 2021</i>
                            </li>
                        </ul>
                    </address>              
                </div>
                <div class="regulatory">
                    <h4>Normatividad general</h4>
                    <ul>
                        <li>
                            <i class="bi bi-caret-right">Estatuto General</i>
                        </li>
                        <li>
                            <i class="bi bi-caret-right">Proyecto Universitario Institucional - PUI</i>
                        </li>
                    </ul>
                    <h4>Normatividad académica</h4>
                    <ul>
                        <li>
                            <i class="bi bi-caret-right">Derechos pecuniarios</i>
                        </li>
                        <li>
                            <i class="bi bi-caret-right">Estatuto Estudiantil</i>
                        </li>
                        <li>
                            <i class="bi bi-caret-right">Estatuto Docente</i>
                        </li>
                        <li>
                            <i class="bi bi-caret-right">Estatuto Académico</i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="social-media">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-whatsapp"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-linkedin"></i>
                <i class="bi bi-discord"></i>
            </div>
        </div>

        <div class="copy-right">
            <span>© Copyright 2023 | Sitio creado y administrado por la  Natalia S.A</span>
        </div>
        
    </footer>

      <script src="js/script_menu.js"></script>
</body>
</html>