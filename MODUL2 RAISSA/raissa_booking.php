<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>raissa_booking</title>
    <style>
        
    </style>
</head>
<body>
    <body style="background-color:beige;">
    <nav class="navbar-dark" style="background-color:#8FBC8F;">
      <ul class="nav justify-content-center">

        <li class="nav-item ">
            <h6 style="text-align: center;color:antiquewhite">
          <a class="nav-link active text-light" href="raissa_home.php">
            home
          </a>
            </h6>
        </li>
        <li class="nav-item ">
            <h6 style="text-align: center;color:antiquewhite">
          <a class="nav-link active text-light" href="raissa_booking.php">
            booking
          </a>
          </h6>
        </li>
      </ul>
    </nav>

            <div class = "container style="text-align: center; padding-top: 0.2cm;">
            <br>
            <div class="class text-left mb-5 text-light">
            <p  style= " background-color:#8FBC8F; text-align:center;color:antiquewhite">
            <b>
                Reserve your car now!
            </b> 
            </p>
            </div>

            <div class="container mt-7" style="padding-left: 10%; padding-right:10%" width=100%>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="porsche.jpg"  width="300" style="margin-top: 7cm; margin-bottom:7cm; margin-left:1cm;">
                    </div>
                    <div class="col-md-8">
                    <div class="container mt-5 ">
                    </div>
            
                <div class="row no-gutters">
                <div class="col-md-5" style="margin-top: 1cm; margin-bottom:1cm; margin-left:5cm;">
                    <from action="raissa_booking.php" method="GET">
                        <div class="form-group">
                            <label for="formGroupExampleInput">
                                <b>
                                    Name
                                </b>
                            </label>

                            <input type="text" class="form-control" name="Name" value="RAISSA ARDELIA" readonly>
                        </div>

                        <div class="form-group"> 
                            <label for= "date" >
                                <b>
                                    Book Date:
                                </b>
                            </label>
                            
                            <input type= "date" class= "form-control" name="date" value="mm/dd/yyyy">
                        </div>

                        <div class="form-group">
                            <label for="time">
                                <b>
                                    Start Time
                                </b>             
                        </label>   
                        <input type="time" class="form-control" name="checkin" id="time">
                        </div>

                        <div class="form-group">
                            <label for="Duration">
                                <b>
                                    Duration (Days):
                                </b>
                            </label>
                            <input type="duration" class= "form-control" name="duration" value="">
                        </div>

                        <div class="form-group">
                            <label for="buildtype">
                                <b>
                                    Car Type
                                </b>
                            </label>

                            <select class="custom-select mr-sm-2" name="Duration">
                                <option value="1">
                                    1. AUDI
                                </option>
                                
                                <option value="2">
                                    2. MERCY
                                </option>
                                
                                <option value="3">
                                    3. PORSCHE
                                </option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="phonenumber">
                                <b>
                                    Phone Number
                                </b>
                            </label>

                            <input type= "phonenumber" class= "form-control" name="phonenumber" value="Enter Your Phone Number">

                        </div>
                        <div class="mb-3">
                            <div>
                                <input type="checkbox" name="supir" value="ya" id="radio-ya" />
                                <label for="radio-ya">Health protocol /Rp20.000</label>
                                <br>
                                <input type="checkbox" name="supir" value="ya" id="radio-ya" />
                                <label for="radio-ya">Driver /Rp100.000</label>
                                <br>
                        
                                <br>
                
                            </div>  
                        </div>
                        

                        <form action="raissa_booking.php" method="POST">
                          <button type="submit" class="btn " style=" background-color:#ADD8E6;padding-left: 3%; padding-right: 3%; width: 100%">
                          <a class="nav-link active text-dark" href="raissa_mybooking.php">
                                BOOK
                            </a>
                        </button>
                        </form>
                </div>
                </div>
                <br>
            
                    <footer class=" text-center bg-dark text-white" >RAISSA_1202204265</footer>
</body>
</html>