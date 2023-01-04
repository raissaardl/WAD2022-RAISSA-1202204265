<!doctype html>
    <html lang="en">
        <head>
            <title>Booking Camera Elektornik</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
            <?php $typeCamera=$_GET["typeCamera"]?>
        </head>
        <body>
    <body style="background-color:#eddcd2; ">
    <nav style="background:#E9967A; ">
      <ul class="nav justify-content-center">

        <li class="nav-item ">
            <h6 style="text-align: center;color:antiquewhite">
          <a class="nav-link active text-light" href="raissahome.php">
            home
          </a>
            </h6>
        </li>
        <li class="nav-item ">
            <h6 style="text-align: center;color:antiquewhite">
          <a class="nav-link active text-light" href="raissabooking.php">
            booking
          </a>
          </h6>
        </li>
         </ul>
    </nav>
            <br>
            <br>
            <h2 align="center">Sewa Barang Pilihan Anda</h2>
            <br>
            <div class="container">
                <div class="row">
                  <div class="col">
                    <img size="50%" src="<?php if ($typeCamera=='analog'){
                        echo 'analog.jpg';
                    }elseif($typeCamera == 'polaroid'){
                        echo 'polaroidbaru.jfif';
                    }elseif($typeCamera == 'handycam'){
                        echo 'handycamfix.jpg';
                    }?>" class="card-img-top">
                  </div>
                  <div class="col">
                    <form action="raissamybooking.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nama_NIM">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Book Date</label>
                            <input type="date" class="form-control" name="date" id="date" placeholder="dd/mm/yyyy">
                        </div>
                        <div class="mb-3">
                            <label for="time" class="form-label">Start Time</label>
                            <input type="time" class="form-control" name="time" id="time" placeholder="--:--">
                        </div>
                        <div class="mb-3">
                            <label for="number" class="form-label">Duration (Days)</label>
                            <input type="number" class="form-control" name="number" id="number">
                        </div>
                        <div class="mb-3">
                            <label for="cameratype" class="form-label">Type</label>
                            <select class="form-select" name="cameratype">
                                <option selected>Select Type Camera</option>
                                <option <?php if ($typeCamera == "analog"){echo "selected";}?> value="analog">analog</option>
                                <option <?php if ($typeCamera == "polaroid"){echo "selected";}?> value="polaroid">polaroid</option>
                                <option <?php if ($typeCamera == "handyccam"){echo "selected";}?> value="hadycam">hadycam</option>
                          </select>
                        </div>
                        <div class="mb-3">
                            <label for="phonenumber" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" name="phonenumber" id="phonenumber">
                        </div>
                        <label class="form-label">Add Service(s)</label>
                        <div for="" class="form-check">
                            <input class="form-check-input" type="checkbox" value="Tamabahan Baterai" id="flexCheckDefault" name="checkbox[]">
                            <label class="form-check-label" for="flexCheckDefault">Tamabahan Baterai / Rp25.000</label>
                            </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Tas Kamera" id="flexCheckDefault" name="checkbox[]">
                            <label class="form-check-label" for="flexCheckDefault">Tas Kamera/ Rp50.000</label>
                        </div>
                        </div>
                        <br>
                        <div class="d-grid gap-2">
                            <button class="btn btn-success" type="submit">Book</button>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <br>
        </body>
        <footer class="bg-light" align="center">
            <br>
            <p>Created By Raissa Ardelia_1202204265</p>
        </footer>
    </html>
