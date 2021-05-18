<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display.com</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">




  <style>
    h2,
    p {

      text-align: center;
    }

    .container {
      margin-top: 20px;
    }

    .btn {
      transition: 1.5s;


    }

    button:hover {
      background-color: #616c6f;
      color: white;

    }

    img {
      border-radius: 15px;
    }

    .footer {
      height: 50px;
    }

    .footer h6 {
      line-height: 40px;
      font-size: 20px;
      font-weight: bold;
    }
  </style>






</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="index.php">
      <img src="banklogo.jpg" alt="akshu" width="70px;" height="70px;">


    </a>
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php"> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.thesparksfoundationsingapore.org/">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transfermoney.php">Transfer Money</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transactionhistory.php">Transaction History</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>






  <?php
                       
                       include 'connection.php';
      
     
     
                       $selectquery = "  select *from bank  ";
     
                    $query = mysqli_query($conn,$selectquery);
     
                       
     
     ?>
  <div class="container">
    <img src="banklogo.jpg" alt="aakash" width="100px;" height="100px">


    <h2> Customers Record</h2>
    <p>List of All Customers</p>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Mobileno</th>
          <th>Amount($)</th>

          <th>Operation</th>
        </tr>
      </thead>
      <tbody>

        <?php
                       while($res = mysqli_fetch_assoc($query))
                       {

                        ?>

        <tr>
          <td>
            <?php  echo  $res['id'];   ?>
          </td>
          <td>
            <?php  echo  $res['Name'];   ?>
          </td>
          <td>
            <?php    echo $res['Email'] ;  ?>
          </td>
          <td>
            <?php   echo $res['Mobileno'];   ?>
          </td>
          <td>
            <?php    echo $res['balance'];   ?>
          </td>
          <td> <a href="selectuserdetail.php?id= <?php echo $res['id']; ?>">
              <button type="button" class="btn btn-primary"> Pay To </button>

          </td>




        </tr>
        <?php
        
    }

 ?>

      </tbody>
    </table>
  </div>


  <!--- Responsive footer -->
  <footer class="page-footer bg-dark">

    <div class="bg-success">

      <div class="container">
        <div class="row py-4  d-flex align-item-center">
          <div class="col md-12 text-center">
            <a href=""> <i class="fab fa-facebook-f text-white mr-4"> </i> </a>
            <a href=""> <i class="fab fa-twitter text-white mr-4"> </i> </a>
            <a href=""> <i class="fab fa-google-plus-g text-white mr-4"> </i> </a>
            <a href=""> <i class="fab fa-linkedin-in text-white mr-4"> </i> </a>
            <a href=""> <i class="fab fa-instagram text-white mr-4"> </i> </a>


          </div>




        </div>




      </div>


    </div>
    <div class="container text-center text-md-left mt-5">
      <div class="row">

        <div class="col-md-2 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold"> providers</h6>
          <hr class="bg-success mb-4 mt-0  d-inline-block mx-auto" style="width:125px; height:2px;">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus libero numquam
            non aspernatur totam cumque
            tempore corrupti! Nulla quis iure reiciendis ratione, tempora placeat ut totam,
            quia obcaecati fuga quae impedit
            Dolorem facere minima ab! </p>


        </div>
        <div class="col-md-2 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold"> providers</h6>
          <hr class="bg-success mb-4 mt-0  d-inline-block mx-auto" style="width:85px; height:2px;">
          <ul class="list-unstyled">

            <li class="my-2"> <a href=""> Home</a> </li>
            <li class="my-2"> <a href=""> About us</a> </li>
            <li class="my-2"> <a href=""> Contact us</a> </li>
            <li class="my-2"> <a href=""> Services</a> </li>



          </ul>



        </div>

        <div class="col-md-2 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold"> providers</h6>
          <hr class="bg-success mb-4 mt-0  d-inline-block mx-auto" style="width:70px; height:2px;">
          <ul class="list-unstyled">

            <li class="my-2"> <a href=""> Html 5</a> </li>
            <li class="my-2"> <a href=""> CSS</a> </li>
            <li class="my-2"> <a href=""> Javascript</a> </li>
            <li class="my-2"> <a href=""> Php</a> </li>



          </ul>


        </div>
        <div class="col-md-3 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold"> Contact us</h6>
          <hr class="bg-success mb-4 mt-0  d-inline-block mx-auto" style="width:70px; height:2px;">
          <ul class="list-unstyled">

            <li class="my-2"> <i class="fa fa-home mr-3"></i> Singapore,Andheri street </li>
            <li class="my-2"> <i class="fa fa-envelope mr-3"></i> spark@gmail.com </li>

            <li class="my-2"> <i class="fa fa-phone mr-3"></i> +918505800364 </li>

            <li class="my-2"> <i class="fa fa-print mr-3"></i> +00062655 </li>





          </ul>


        </div>



      </div>


    </div>




    </div>
    <div class="footer-copyright text-center py-3">
      <p> Designed By </p>
      <p> <a href="thespark.com"> theparkfoundation.com </a> </p>

      <h6 class="text-center"> © 2021 ‐ The Spark Foundation Bank - Design by (Aakash)
        working as a web deveeloper Intern in (TSF) </h6>




    </div>







  </footer>























  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH
 0lsSSs5nCTpuj/zy4C+OGpamo
 FVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

  !-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>










</body>

</html>