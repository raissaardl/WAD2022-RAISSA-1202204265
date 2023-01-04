<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Penyewaan Barang Elektronik</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <?php
            $name = $_POST['name'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $number = $_POST['number'];
            $checkIn = date("d-m-Y H:m", strtotime("$date $time"));
            $duration = $number * 86400;
            $timing = strtotime($date." ".$time);
            $newTime = $timing + $duration;
            $checkOut = date('d-m-Y H:m', $newTime);
            $cameratype = $_POST['cameratype'];
            $phonenumber = $_POST['phonenumber'];
            $total = 0;
            $price = 0;
            
            if ($cameratype == 'analog'){
                $price = 100000;
            }elseif($cameratype == 'polaroid'){
                $price = 150000;
            }elseif($cameratype == 'handycam'){
                $price = 200000;
            }

            $price = (int)$price * (int)$number;
            $total = (int)$price;

            if (isset($_POST['checkbox'])){
                $addOns = $_POST['checkbox'];
                foreach ($addOns as $service){
                    if ($service == "Tambahan Baterai"){
                        $total = $total + 25000;
                    }
                    elseif($service == "Tas Kamera"){
                        $tas = 50000 * (int)$number;
                        $total = $total + $tas;
                    }

                    else{
                        $total = $total;
                    }
                }
            }
        ?>
      <nav style="background:#E9967A;">
            <div class="container-fluid">
                    <div class="navbar-nav">            
                        <a class="nav-link" href="raissahome.php">Home</a>
                        <a class="nav-link" href="raissabooking.php?typeCamera=?">Booking</a>
                    </div>
                </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <br>
            <h3 class="text-center">Thank you <?php echo $name ?> for Reserving</h3>
            <p class="text-black-50 text-center">Please double check your reservation details.</p>
            <br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Booking Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Check In</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Camera Type</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Service(s)</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?php {echo rand();}?></th>
                        <td><?php echo $name ?></td>
                        <td><?php echo $checkIn ?></td>
                        <td><?php echo $checkOut ?></td>
                        <td><?php echo $cameratype ?></td>
                        <td><?php echo $phonenumber ?></td>
                        <td><?php if (isset($_POST['checkbox'])){
                                    foreach($_POST['checkbox'] as $checkbox){
                                        echo "- $checkbox <br>";
                                    }
                                    }else{ echo "No Service";}?></td>
                        <td><?php echo $total?></td> 
                    </tr>
                </tbody>
            </table>
        </div>
        <nav class="navbar fixed-bottom bg-light">
            <div class="container-fluid">
                <div class="mx-auto">
                    <p>Created By Raissa Ardelia_1202204265</p>
                </div>
            </div>
        </nav>
    </body>
</html>