<?php

    session_start();
    include '../db/conexion.php';
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $nacimiento = $_SESSION['nacimiento'];
    $usuario = $_SESSION['usuario'];
    $email = $_SESSION['email'];

    $nombre_completo = $nombre.' '.$apellido; 

    $query_category = mysqli_query($conexion, "SELECT * FROM category_user
    WHERE id_person = $usuario");

?>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="finanzas, finanaciera, freelance, diseño grafico">
  <meta name="author" content="Natalia Cardoso">
  <meta name="description"content="Plataforma de gestión integral para freelancers de diseño gráfico. Genera presupuestos, factura, realiza seguimiento financiero, administra proyectos, registra tiempo y gastos, comunícate con clientes y mantén un control total de tus finanzas. Herramientas de eficiencia y profesionalismo para diseñadores gráficos independientes.">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <link rel="shortcut icon" type="image/x-icon" href="../img/svg/favicon-black.svg">
  <link rel="stylesheet" href="../css/style_app-copy.css">
  <title>DesignWiz</title>
</head>
<body>
  <section id="general_section">
    <!-- menu main-->
    <nav class="sidebar">
      <div class="sidebar-top-wrapper">
        <div class="sidebar-top">
          <a href="../app/modulo8.php" class="logo__wrapper">
            <img src="../img/svg/isotipo-white.svg" alt="Logo" class="logo-small">
            <span class="hide">
              DesignWiz
            </span>
          </a>
        </div>
        <div class="expand-btn">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.00979 2.72L10.3565 7.06667C10.8698 7.58 10.8698 8.42 10.3565 8.93333L6.00979 13.28"
              stroke="#4A516D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </div>
      </div>

      <div class="sidebar-links">
        <h2>Módulos</h2>
        <ul>
          <li>
            <a href="../app/modulo1.php" title="Tablero" class="tooltip">
              <i class="bi bi-house"></i>
              <span class="link-hide">Tablero</span>
              <span class="tooltip__content">Tablero</span>
            </a>
          </li>
          <li>
            <a href="../app/modulo2.php" title="Presupuestos" class="tooltip">
             <svg fill="none" height="24" stroke-width="1.5" viewBox="0 0 24 24" width="24"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M12 11H14.5H17" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12 7H14.5H17" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                <path
                  d="M8 15V3.6C8 3.26863 8.26863 3 8.6 3H20.4C20.7314 3 21 3.26863 21 3.6V17C21 19.2091 19.2091 21 17 21V21"
                  stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                <path
                  d="M5 15H8H12.4C12.7314 15 13.0031 15.2668 13.0298 15.5971C13.1526 17.1147 13.7812 21 17 21H8H6C4.34315 21 3 19.6569 3 18V17C3 15.8954 3.89543 15 5 15Z"
                  stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <span class="link hide">Presupuestos</span>
              <span class="tooltip__content">Presupuestos</span>
            </a>
          </li>
          <li>
            <a href="../app/modulo3.php" title="Finanzas" class="tooltip">
              <svg fill="none" height="24" stroke-width="1.5" viewBox="0 0 24 24" width="24"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M1 21V3C1 1.89543 1.89543 1 3 1H21C22.1046 1 23 1.89543 23 3V21C23 22.1046 22.1046 23 21 23H3C1.89543 23 1 22.1046 1 21Z"
                  stroke="currentColor" stroke-width="1.5" />
                <path d="M15 7L17 7H19" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M15 15.5H17L19 15.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M15 18.5H17H19" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M5 7H7M9 7H7M7 7V5M7 7V9" stroke="currentColor" stroke-linecap="round"
                  stroke-linejoin="round" />
                <path
                  d="M5.58609 18.4142L7.0003 17M8.41452 15.5858L7.0003 17M7.0003 17L5.58609 15.5858M7.0003 17L8.41452 18.4142"
                  stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <span class="link hide">Finanzas</span>
              <span class="tooltip__content">Finanzas</span>
            </a>
          </li>
          <li>
            <a href="../app/modulo4.php" title="Proyectos" class="tooltip">
              <svg fill="none" height="24" stroke-width="1.5" viewBox="0 0 24 24" width="24"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M15 4V2M15 4V6M15 4H10.5M3 10V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V10H3Z"
                  stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M3 10V6C3 4.89543 3.89543 4 5 4H7" stroke="currentColor" stroke-linecap="round"
                  stroke-linejoin="round" />
                <path d="M7 2V6" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M21 10V6C21 4.89543 20.1046 4 19 4H18.5" stroke="currentColor" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
              <span class="link hide">Proyectos</span>
              <span class="tooltip__content">Proyectos</span>
            </a>
          </li>
          <li>
            <a href="../app/modulo5.php" title="Registro" class="tooltip">
              <svg fill="none" height="24" stroke-width="1.5" viewBox="0 0 24 24" width="24"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M17 13H12V8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M5 3.5L7 2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M19 3.5L17 2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                <path
                  d="M12 22C16.9706 22 21 17.9706 21 13C21 8.02944 16.9706 4 12 4C7.02944 4 3 8.02944 3 13C3 17.9706 7.02944 22 12 22Z"
                  stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <span class="link hide">Registro</span>
              <span class="tooltip__content">Registro</span>
            </a>
          </li>
          <li>
            <a href="../app/modulo6.php" title="Contratos" class="tooltip">
              <svg fill="none" height="24" stroke-width="1.5" viewBox="0 0 24 24" width="24"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M6 6L18 6" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6 10H18" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12 14L18 14" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12 18L18 18" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                <path
                  d="M2 21.4V2.6C2 2.26863 2.26863 2 2.6 2H21.4C21.7314 2 22 2.26863 22 2.6V21.4C22 21.7314 21.7314 22 21.4 22H2.6C2.26863 22 2 21.7314 2 21.4Z"
                  stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6 18V14H8V18H6Z" fill="currentColor" stroke="currentColor" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
              <span class="link hide">Contratos</span>
              <span class="tooltip__content">Contratos</span>
            </a>
          </li>
          <li>
            <a href="../app/modulo7.php" title="Informes" class="tooltip">
              <svg fill="none" height="24" stroke-width="1.5" viewBox="0 0 24 24" width="24"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M2 11V4.6C2 4.26863 2.26863 4 2.6 4H8.77805C8.92127 4 9.05977 4.05124 9.16852 4.14445L12.3315 6.85555C12.4402 6.94876 12.5787 7 12.722 7H21.4C21.7314 7 22 7.26863 22 7.6V11M2 11V19.4C2 19.7314 2.26863 20 2.6 20H21.4C21.7314 20 22 19.7314 22 19.4V11M2 11H22"
                  stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <span class="link hide">Informes</span>
              <span class="tooltip__content">Informes</span>
            </a>
          </li>
          <li>
            <a href="../app/modulo8.php" title="Categorías" class="tooltip">
              <svg fill="none" height="24" stroke-width="1.5" viewBox="0 0 24 24" width="24"
                xmlns="http://www.w3.org/2000/svg">
                <rect height="5" rx="0.6" stroke="currentColor" stroke-width="1.5" width="7" x="3" y="2" />
                <rect height="5" rx="0.6" stroke="currentColor" stroke-width="1.5" width="7" x="8.5" y="17" />
                <rect height="5" rx="0.6" stroke="currentColor" stroke-width="1.5" width="7" x="14" y="2" />
                <path d="M6.5 7V10.5C6.5 11.6046 7.39543 12.5 8.5 12.5H15.5C16.6046 12.5 17.5 11.6046 17.5 10.5V7"
                  stroke="currentColor" stroke-width="1.5" />
                <path d="M12 12.5V17" stroke="currentColor" stroke-width="1.5" />
              </svg>
              <span class="link hide">Categorías</span>
              <span class="tooltip__content">Categorías</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="sidebar__action__wrapper">
        <div class="sidebar__action">
          <div class="progress-bar">
            <div class="progress-bar__value">
              60%
            </div>
          </div>
          <h2>Capacidad usada</h2>
          <p>
            Ya estás utilizando el 60% de tu capacidad.
          </p>
          <button>
            Actualiza tu plan
          </button>
        </div>
      </div>
      <div class="divider"></div>
      <div class="sidebar__profile">
        <div class="avatar__wrapper">
          <img class="avatar" src="https://thispersondoesnotexist.com/" alt="Joe Doe Picture">
          <div class="online__status"></div>
        </div>
        <section class="avatar__name hide">
          <div class="user-name"><?php echo $nombre_completo?></div>
          <div class="email"><?php echo $email?></div>
        </section>
        <a href="#cerrar_sesion" class="Cerrar-sesion">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="24" height="24"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
            <path d="M9 12h12l-3 -3"></path>
            <path d="M18 15l3 -3"></path>
          </svg>
        </a>
      </div>
      </div>
    </nav>

    <!-- menu superior top-->
    <div class="topbar">
      <div class="search__buscar">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M9 9L13 13M5.66667 10.3333C3.08934 10.3333 1 8.244 1 5.66667C1 3.08934 3.08934 1 5.66667 1C8.244 1 10.3333 3.08934 10.3333 5.66667C10.3333 8.244 8.244 10.3333 5.66667 10.3333Z"
            stroke="#697089" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <input type="search" placeholder="Search for anything...">
      </div>
      <div class="category">
        <button type="button" class="btn_category" data-toggle="modal" data-target="#category_modal">
            Añadir una categoria
        </button>
      </div>
    </div>

    <!-- Modal de category_user-->
    <div class="modal fade" id="category_modal" tabindex="-1" role="dialog" aria-labelledby="category_modalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="login_modalLabel">Agregar categorias</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form class="form-group row form2" action="../back/back_app/modulo8/add_category.php" method="POST">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                          <label for="inputnumero_id">Nombre de categoria</label >
                          <input type="text" class="form-control" name="id_person" id="inputnumero_id" required>
                    </div>
                    <div class="form-group col-md-6">
                          <label for="status_category">Estado</label>
                          <select class="form-select" name="status_category" id="inputstatus_category" required>
                              <option selected="">seleccione un opción</option>
                              <option value="1">Habilitado</option>
                              <option value="0">Deshabilitado</option>
                          </select>
                      </div>
                      <hr>
                      <p><a href="../app/modulo8.php" data-bs-toggle="tooltip" title="Tooltip">Administra tus categorías aquí</a></p>
                    <div class="modal-footer">
                      <button name="login_btn" type="submit" class="btn_login">Guardar</button>
                      <button type="reset" class="btn_register">Limpiar</button>
                      <button name="login_btn" type="submit" class="btn_login">administra tus categoría</button>
                    </div>
                  </div>
                </form>
            </div>
                
        </div>
      </div>
    </div>

    <!-- contenido central-->
    <div class="central">
      <div id="error"><h1>Pagina en desarrollo</h1><img src="../img/png/en-desarrollo.png" alt=""></div>
  </section>
  <script src="../js/script_dashboard.js"></script>
</body>

</html>