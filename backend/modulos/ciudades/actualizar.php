<?php

require_once '../../class/Ciudad.php';

$id = $_GET['id'];

$ciudad = Ciudad::obtenerPorId($id);

?>


<!doctype html>
<html lang="es">

<body>

<?php
  include('../../header.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Carga de ciudad</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Asegurese de ingresar la ciudad correctamente</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form name="frmDatos" method="POST" action="procesar/modificar.php">
                <div class="card-body">
                    <div class="#">
                      <label for="txtId"></label>
                      <input type="hidden" class="form-control" name="txtId" value="<?php echo $ciudad->getIdCiudad(); ?>">
                    </div>

                  <div class="row">

                     <div class="col-sm-6">
                      <div class="form-group">
                        <label for="txtCodigoPostal">Código Postal:</label>
                        <input type="text" class="form-control" name="txtCodigoPostal" value="<?php echo $ciudad->getCodigoPostal(); ?>">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="txtNombre">Ciudad:</label>
                        <input type="text" class="form-control" name="txtNombre" value="<?php echo $ciudad->getNombre(); ?>">
                      </div>
                    </div>

                  </div>


                </div>
                <!-- /.card-body -->

                <div class="card-body">
                
                      <a href="../barrios/listado.php" class="btn btn-secondary" role="button"><i class="fas fa-arrow-left pt-2"></i> Cancelar</a>
                  
                  
                      <button type="submit" class="btn btn-primary float-right">Guardar <i class="fas fa-save"></i></button>
                   
                </div>
              </form>

            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php 
  include('../../footer.php');
?>
</body>
</html>