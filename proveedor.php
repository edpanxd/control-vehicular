<!DOCTYPE html>
<html lang="en">

<head>
  <title>Control Vehícular</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-26"><a href="index.php">BIOIN</a></div>

          <div class="mx-auto text-center">
            <nav class=" navbar site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="index.php" class="nav-link">Inicio</a></li>
                <li><a href="vehiculos.php" class="nav-link">Registro Vehículos</a></li>
                <li><a href="cartas.php" class="nav-link">Informacion Vehículos</a></li>
               

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                   Modulos de vehiculo
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="placas.php">Placas</a>
                    <a class="dropdown-item" href="poliza.php">Poliza</a>
                    <a class="dropdown-item" href="tenencia.php">Tenencia</a>
                    <a class="dropdown-item" href="verificacion_a.php">verificacion A</a>
                    <a class="dropdown-item" href="verificacion_b.php">verificacion B</a>
                    <a class="dropdown-item" href="verificacion_federal.php">Verificacion federal</a>
                    <a class="dropdown-item" href="fisico_mecanico.php">fisico mecanico</a>

                  </div>
                </li>
                <li><a href="proveedor.php" class="nav-link">Proveedores</a></li>
              </ul>



            </nav>

           



          </div>

          <div class="ml-auto w-26">
            <a href="" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="intro-section" id="home-section">

      <div class="slide-1" style="background-image: url('images/carretera.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">

                <div class="col-xl-12 mb-4 ">
                  <h1 data-aos="fade-up" data-aos-delay="100">Proveedores</h1>
                  <div class="mb-2">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarusuario">Agregar Proveedor</button>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control pull-right" style="width:20%" id="search" placeholder="Buscar vehiculo...">
                  </div>
                  <div class="table-responsive  my-custom-scrollbar ">
                    <table class="table table-dark " id="mytable">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nombre</th>
                          <th>Grupo</th>
                          <th>Familia</th>
                          <th>Ubicacion</th>
                          <th>Contacto</th>
                          <th>Correo</th>
                          <th>Eliminar</th>
                          <th>Modificar</th>



                        </tr>
                      </thead>
                      <tbody>

                        <?php include 'php/consulta.php';
                        $suma = 0;
                        $numero = 1;
                        while ($mostrar = mysqli_fetch_array($proveedorresultado)) {

                          $suma = $numero + $suma;

                        ?>
                          <tr>
                            <td><?php echo $suma ?></td>
                            <td><?php echo $mostrar['nombre'] ?></td>
                            <td><?php echo $mostrar['grupo'] ?></td>
                            <td><?php echo $mostrar['familia'] ?></td>
                            <td><?php echo $mostrar['ubicacion'] ?></td>
                            <td><?php echo $mostrar['contacto'] ?></td>
                            <td><?php echo $mostrar['correo'] ?></td>
                            <td><a class="btn btn-danger" href="php/proveedor/eliminar_proveedor.php?id=<?php echo $mostrar['id'] ?>"><i class="icon-trash"></i>
                              </a></td>
                            <td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editar" data-id="<?php echo $mostrar['id'] ?>" data-nombre="<?php echo $mostrar['nombre'] ?>" data-grupo="<?php echo $mostrar['grupo'] ?>" data-familia="<?php echo $mostrar['familia'] ?>" data-ubicacion="<?php echo $mostrar['ubicacion'] ?>" data-contacto="<?php echo $mostrar['contacto'] ?>" data-correo="<?php echo $mostrar['correo'] ?>" data-serie="<?php echo $mostrar['serie'] ?>" data-numero="<?php echo $mostrar['numero_motor'] ?>"><i class="icon-edit"></i></button></td>
                          </tr>

                        <?php

                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>




  <!--modal vehiculo-->
  <div class="modal fade" id="agregarusuario" tabindex="-1" role="dialog" aria-labelledby="usuario" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="usuario">Agregar proveedor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <Form class="form" action="php/proveedor/registro_proveedor.php" method="POST" enctype="multipart/form-data">

            <div class="container-fluid">

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Nombre</label>
                  <input type="text" name="nombre" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Grupo</label>
                  <input type="text" name="grupo" class="form-control">
                </div>
              </div>


              <div class="row">
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Familia</label>
                  <input type="text" name="familia" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Ubicacion</label>
                  <input type="text" name="ubicacion" class="form-control">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Contacto</label>
                  <input type="text" name="contacto" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Correo</label>
                  <input type="email" name="correo" class="form-control">
                </div>
              </div>


            </div>


            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">cancelar</button>
          </Form>
        </div>
        <div class="modal-footer">


        </div>
      </div>
    </div>
  </div>

  <!-- Modal para editar-->

  <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <Form class="form" action="php/Vehiculo/actualizar_vehiculo.php" method="POST" enctype="multipart/form-data">

            <div class="container-fluid">

              <div class="row">
                <div class="form-group col-12">
                  <div class="form-group col-md-3">
                    <label for="" class="col-form-label">ID</label>
                    <input type="text" id="id" name="id" class="form-control" readonly="readonly">
                  </div>
                </div>

                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Nombre</label>
                  <input type="text" id="nombre" name="nombre" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">Grupo</label>
                  <input type="text" id="grupo" name="grupo" class="form-control">
                </div>
              </div>


              <div class="row">
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">familia</label>
                  <input type="text" id="familia" name="familia" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">ubicacion</label>
                  <input type="text" id="ubicacion" name="ubicacion" class="form-control">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">contacto</label>
                  <input type="text" id="contacto" name="contacto" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="" class="col-form-label">correo</label>
                  <input type="text" id="correo" name="correo" class="form-control">
                </div>
              </div>

            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>

          </Form>
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>



  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/modificar.js"></script>

  <script src="js/main.js"></script>
  <script src="dist/js/jspdf.plugin.autotable.min.js"></script>

  <!--Buscador -->
  <script>
    $(document).ready(function() {
      $("#search").keyup(function() {
        _this = this;

        $.each($("#mytable tbody tr"), function() {
          if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
            $(this).hide();
          else
            $(this).show();
        });
      });

    });
  </script>
  <!--Para recibir datos a modal -->
  <script type="text/javascript">
    var exampleModal = document.getElementById('editar')
    exampleModal.addEventListener('show.bs.modal', function(event) {
      // Button that triggered the modal
      var button = event.relatedTarget
      // Extract info from data-bs-* attributes
      var id = button.getAttribute('data-id')
      var nombre = button.getAttribute('data-nombre')
      var grupo = button.getAttribute('data-grupo')
      var familia = button.getAttribute('data-familia')
      var ubicacion = button.getAttribute('data-ubicacion')
      var contacto = button.getAttribute('data-contacto')
      var correo = button.getAttribute('data-correo')
      // 
      // 
      //
      // 
      var modalTitle = exampleModal.querySelector('.modal-title')
      var modalBodyid = exampleModal.querySelector('#id')
      var modalBodynombre = exampleModal.querySelector('#nombre')
      var modalBodygrupo = exampleModal.querySelector('#grupo')
      var modalBodyfamilia = exampleModal.querySelector('#familia')
      var modalBodyubicacion = exampleModal.querySelector('#ubicacion')
      var modalBodycontacto = exampleModal.querySelector('#contacto')
      var modalBodycorreo = exampleModal.querySelector('#correo')

      modalTitle.textContent = 'Editar proveedor'
      modalBodyid.value = id
      modalBodynombre.value = nombre
      modalBodygrupo.value = grupo
      modalBodyfamilia.value = familia
      modalBodyubicacion.value = ubicacion
      modalBodycontacto.value = contacto
      modalBodycorreo.value = correo

    })
  </script>

</body>

</html>