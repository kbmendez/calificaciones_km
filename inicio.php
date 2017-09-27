<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ITQ</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/clase2.css" rel="stylesheet">

  </head>

  <body style="background: mistyrose">
    <header class="container-fluid">
      <div class="container">
         <h1 style="color:orange" class="text-center">Instituto Tecnológico de Querétaro</h1>
       
        <h1 style="color:purple" class="text-center">- "B i e n v e n i d o" -</h1>


      </div>
    </header>
    <div class="col-md-4 col-md-offset-4">
      
    </div>
 <div class="container">
    <div class="row">
    <div class="col-md-16">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
      width: 30%;
      margin: auto;
    }
  </style>
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
   
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img align="center" src="imagenes/01.jpeg"  height="300" width="300" class="img img-responsive" HSPACE=150>
    </div>

    <div class="item" align="center">
      <img align="center" src="imagenes/02.png"  height="300" width="300" class="img img-responsive" HSPACE=150>
    </div>

    <div class="item" align="center">
      <img align="center" src="imagenes/03.gif"  height="300" width="300"  class="img img-responsive">
    </div>
    <br>
    <br>
  </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<center>
<div class="row"> 
  <center>      <div class="col-md-5 mv">
        <center><h3>Mission</h3></center>
        <p>A leading green institution in higher and continuing education committed to engage in quality instruction, development-oriented research, sustainable lucrative economic enterprise, and responsive extension and training services through relevant academic programs to empower a human resource that responds effectively to challenges in life and act as catalyst in the holistic development of a humane society.</p>
      </div>
      <div class="col-md-5 mv">
        <center><h3>Vision</h3></center>
        <p>GREEN CHMSC EXCELS
          Excellence, Competence, and Educational Leadership in Science and Technology.</p>
        </div>
      </div>
    </div>
    </center>
    </center>


   



<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      

      <!-- Collect the nav links, forms, and other content for toggling -->
        <center>
        <button aling="center" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-dept" style="margin-top: 6px;">Log in </button>
        </center>
        
        <!-- Modal -->
        <div class="modal fade" id="modal-dept">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <!-- modal header -->
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3>Log in</h3>
              </div>
              <!-- modal body -->
              <div class="modal-body">
                <ul class="nav nav-pills">
                  <li class="active"><a data-toggle="pill" href="#home">Director</a></li>
                  <li><a data-toggle="pill" href="#menu3">Coordinador</a></li>
                  <li><a data-toggle="pill" href="#menu2">Docente</a></li>
                  <li><a data-toggle="pill" href="#menu1">Estudiante</a></li>
                 

                </ul>
                <div class="tab-content">
                  <!-- Department -->
                  <div id="home" class="tab-pane fade in active">
                    <h3>Director</h3>
                    <form action="validar.php" method="post">
                      <div class="form-group">
                        <input type="text" class="form-control" name="usuario" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" name="clave" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-block btn-primary signin-button-department">Log in</button>
                        <button class="btn btn-block btn-danger signin-button">Cancel</button>
                      </div>
                    </form>
                  </div>
                  <!-- Admin -->
                  <div id="menu3" class="tab-pane fade">
                    <h3>Coordinador</h3>
                    <form action="validarc.php" method="post">
                      <div class="form-group">
                        <input type="text" class="form-control" name="usuario" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" name="clave" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-block btn-primary signin-button-admin">Log in</button>
                        <button class="btn btn-block btn-danger signin-button">Cancel</button>
                      </div>
                    </form>
                  </div>

                     <div id="menu2" class="tab-pane fade">
                    <h3>Docente</h3>
                    <form action="validard.php" method="post">
                      <div class="form-group">
                        <input type="text" class="form-control" name="usuario" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" name="clave" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-block btn-primary signin-button-admin">Log in</button>
                        <button class="btn btn-block btn-danger signin-button">Cancel</button>
                      </div>
                    </form>
                  </div>
                  <!-- Teacher -->
                  <div id="menu1" class="tab-pane fade">
                    <h3>Estudiante</h3>
                    <form action="validare.php" method="post">
                      <div class="form-group">
                        <input type="text" class="form-control" name="usuario" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" name="clave" placeholder="Password">
                      </div>
                      <!-- <div class="form-group">
                        <input type="password" class="form-control" name="new_password" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" name="new_cpassword" placeholder="Password">
                      </div> -->
                      <div class="form-group">
                        <button class="btn btn-block btn-primary signin-button-faculty">Log in</button>
                        <button class="btn btn-block btn-danger signin-button">Cancel</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- ENNNNNNNNNND MODAL-->       

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  
    
    <script src="js/jquery-1.12.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script>
      $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
</script>



  
  </div>
</div>


</div>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    
  </body>
</html>