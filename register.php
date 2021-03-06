<!-- signin.php -->
<?php include 'template/header.php'; ?>
  <body>
    
    <?php include 'template/nav-bar.php'; ?>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel" style="height: 400px;">
      <div class="slider-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 col-sm-12 ftco-animate text-center" style="padding-bottom: 25%;">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Inicio</a></span> <span>Registrarse</span></p>
              <h1 class="mb-3">Registrarse</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Registrarse</span>
            <h2>Registrate en nuestro sitio web</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 dish-menu">

            <div class="nav nav-pills justify-content-center ftco-animate" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link py-3 px-4 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="flaticon-meat"></span> Como cliente</a>
              <a class="nav-link py-3 px-4" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="flaticon-cutlery"></span> Como restaurante</a>
            </div>

            <!--register as customer-->
            <div class="tab-content py-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="row">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8">
                    <div class="menus d-flex ftco-animate" style="background: white;">
                      <div class="row" style="width: 100%">
                  <div class="col-md-12">
                    
                      <!-- register as customer -->
                      <form action="manage-insert.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <input type="text" name="fullname" class="form-control" required="" placeholder="Su nombre">
                        </div>
                        <div class="form-group">
                          <input type="email" name="email" class="form-control" required="" placeholder="Su correo">
                        </div>
                        <div class="form-group">
                          <input type="text" name="phone" class="form-control" required="" placeholder="Su telefono">
                        </div>
                        <div class="form-group">
                          <textarea name="address" id="" cols="30" rows="2" class="form-control" placeholder="Direccion"></textarea>
                        </div>
                        <div class="form-group">
                          <input type="password" name="password" class="form-control" required="" placeholder="Su contrasena">
                        </div>
                        <div class="form-group">
                          <input type="file" name="image" class="form-control" required="" >
                        </div>
                        <div class="form-group">
                          <input type="submit" value="Register" name="regascus" class="btn btn-primary py-3 px-5">
                        </div>
                      </form>
                      <p class="text-center">Para iniciar sesion <a href="login.php">Click aqui</a> </p>
                  </div>
              </div>
                  </div>
                  </div>
                </div>
              </div><!-- END -->

              <!--register as restaurant-->
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="row">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8">
                    <div class="menus d-flex ftco-animate" style="background: white;">
                      <div class="row" style="width: 100%">
                  <div class="col-md-12">
                      <form action="manage-insert.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <input type="text" name="fullname" class="form-control" required="" placeholder="Nombre del restaurante">
                        </div>
                        <div class="form-group">
                          <input type="email" name="email" class="form-control" required="" placeholder="Email del restaurante">
                        </div>
                        <div class="form-group">
                          <input type="text" name="phone" class="form-control" required="" placeholder="Telefono del restaurante">
                        </div>
                 <!--        <div class="form-group">
                          <input type="text" name="bkashnumber" class="form-control" required="" placeholder="Restaurant Bkash Number">
                        </div> -->
                        <div class="form-group">
                          <select class="form-control " name="area" required="">
                            <option value=""> -Seleccionar area del restaurante- </option>
                            <?php 
                              include 'dbCon.php';
                              $con = connect();
                              $sql = "SELECT * FROM `locations`;";
                              $result = $con->query($sql);
                              foreach ($result as $r) {
                            ?>
                              <option value="<?php echo $r['id']; ?>"><?php echo $r['location_name']; ?></option>
                            <?php } ?>
                         </select>
                        </div>
                        <div class="form-group">
                          <textarea name="address" id="" cols="30" rows="2" class="form-control" placeholder="Direccion del restaurante"></textarea>
                        </div>
                        <div class="form-group">
                          <input type="password" name="password" class="form-control" required="" placeholder="Contrasena">
                        </div>
                        <div class="form-group">
                          <input type="file" name="image" class="form-control" required="" >
                        </div>
                        <div class="form-group">
                          <input type="submit" value="Register" name="regasres" class="btn btn-primary py-3 px-5">
                        </div>
                      </form>
                      <p class="text-center">Para iniciar sesion <a href="login.php">Click aqui</a> </p>
                  </div>
              </div>
                  </div>
                  </div>
                </div>
              </div><!-- END -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include 'template/instagram.php'; ?>

    <?php include 'template/footer.php'; ?>
    
    <?php include 'template/script.php'; ?>
    
  </body>
</html>