<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>raissa_mybooking</title>
</head>
<body>
    <body style="background-color:beige;">
    <nav style="background-color:#8FBC8F; ">
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

        <div class = "container style="text-align: center; padding-top: 0.5cm;">

            <div class="class text-center mb-5 text-primary">
                <h6 style="text-align: center;color:grey">
                   <p>
                   Thank You RAISSA_1202204265 for Reserving
                   <br>
                   Please double check your reservation details
                   </p> 
                </h6>

<table class="table">
  <thead>
    <tr>
      <th scope="col">
          <b>
              booking Number
          </b>
      </th>
      <th scope="col">
          <b>
              Name
          </b>
      </th>
      <th scope="col">
          <b>
              Check-in
          </b>
      </th>
      <th scope="col">
          <b>
                Check-out
          </b>
      </th>

      <th scope="col">
          <b>
                Car Type
          </b>
      </th>

      <th scope="col">
          <b>
                Phone Number
          </b>
      </th>

      <th scope="col">
          <b>
                Service(s)
          </b>
      </th>

      <th scope="col">
          <b>
                Total Price
          </b>
      </th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
          <?php 
          echo rand();
          ?></th>
      <td>RAISSA ARDELIA</td>
      <td>10-06-2022 07:00:00</td>
      <td>11-06-2022 07:00:00</td>
      <td>PORSCHE</td>
      <td>081344590489</td>
      <td>- DRIVER
        <br>
      </td>
      <td>Rp.7.100.000</td>
    </tr>

  </tbody>
</table>
<br>
<br>
<br>
<footer style="text-align: center;color:black">
    <b>
        (created by :RAISSA ARDELIA_1202204265)
    </b>
</footer>
</body>
</html>