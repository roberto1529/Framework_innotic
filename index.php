<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="styles/login.css" rel="stylesheet">
    <link  rel="icon"   href="res/logo_png.png" type="image/png" />

    <title>SUPER SALUD | CENTRO DE RECONOCIMIENTO DE CONDUCTORES</title>
  </head>
  <body>
    
    <div class="row position-relative">
        <div class="col col_iz">

                   
                    <center>
                        <img src="res/logo_png.png" class="img-thumbnail" alt="...">
                        <br>
                        <h1 class="Titulo_"> CENTRO DE RECONOCIMIENTO DE CONDUCTORES</h1>
                    </center>   
           <br><br><br><br><br><br><br>

        </div>
        <div class="col">
              
              <div class="container">
                <center>
                <main class="form-signin">
                      <form class="shadow p-3 mb-5 bg-body" action="services/auntenticator.php" method="POST" enctype="application/x-www-form-urlencoded">
                        <img class="mb-4" src="res/user.svg" alt="" width="72" height="57">
                        <h1 class="h3 mb-3 fw-normal">Ingrese Credenciales</h1>

                        <div class="form-floating">
                          <input type="text" name="user" class="form-control" id="floatingInput" placeholder="user">
                          <label for="floatingInput">Usuario</label>
                        </div>
                        <div class="form-floating">
                          <input type="password" name="pin" class="form-control" id="floatingPassword" placeholder="Password" maxlength="4">
                          <label for="floatingPassword">Pin</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-orange" type="submit">Ingresar</button>
                        <p class="mt-5 mb-3 text-muted">CRC © 2021</p>
                        <br>
                        <?php
                            session_start();
                            error_reporting(0);
                            $rs = $_SESSION['alert'];
                            if (empty($rs)) {

                                echo'<div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                                
                            <strong>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-check-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm8.854-9.646a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                          </svg> </strong> Bienvenido al software crc super salud ingresa tus datos.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
                            }else {
                              echo'<div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                                
                            <strong>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-x" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6.146 5.146a.5.5 0 0 1 .708 0L8 6.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 7l1.147 1.146a.5.5 0 0 1-.708.708L8 7.707 6.854 8.854a.5.5 0 1 1-.708-.708L7.293 7 6.146 5.854a.5.5 0 0 1 0-.708z"/>
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                          </svg></strong> Datos errados y/o incorrectos.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>'; 
                            }
                          ?>
                      </form>
                    </main>
                </center>
              </div>
        
        </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>