<?php
  session_start();
  require '../../config/conexion.php';
  if (isset($_SESSION['loginUser'])) {
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include('head.php'); ?>
  </head>
  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

      <?php include("sidebar.php"); ?>

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <?php include("topbar.php"); ?>

          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->

            <!-- Content Row -->
            <div class="row">
              <div class="col-sm-8 pb-3">
                <div id="calendarioRoom" class="calendarView">

                </div>
              </div>
              <div class="col-sm-4">

              </div>
            </div>




          </div>
        </div>
        <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
      </div>
      <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    </div>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#calendarioRoom').fullCalendar({
          header:{
            left:'prev,next,today,MiBoton',
            center:'title',
            right:'month,basicWeek,basicDay'
          },
          customButtons:{
            MiBoton:{
              text:'Boton 1',
              click:function(){
                alertify.success("Agregado con ÉXITO");
              }
            }

          }
        });
      });
    </script>
  </body>
</html>
<?php
  }else{
    header('Location: ../../');
  }
?>
