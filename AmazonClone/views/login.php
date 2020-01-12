<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <title>login.php</title>
</head>
<body>
    <?php
    $server = "localhost";
    $user = "root";
    $pwd = "";
    $dbName = "dark";
    $cxConn = mysqli_connect($server,$user,$pwd,$dbName);
    //$cxQuery = "select * from customers";
   // $cxResult = $cxConn->query($cxQuery);

  //  Details of all customers present in Data base
    // if ($cxResult->num_rows > 0) {
    //         // output data of each row
    //         while($row = $cxResult->fetch_assoc()) {
    //             echo "id: " . $row["RegId"]. " - Name: " . $row["CxName"]. " " . $row["CxEmail"]. "<br>";
    //         }
    //     } else {
    //         echo "0 results";
    //     }

    if(isset($_REQUEST["submit"])){
      $CxEmail = $_REQUEST["CxEmail"];
      $CxMobile= $_REQUEST["CxMobile"];
      $cxquery="select * from customers where CxEmail='$CxEmail' && CxMobile='$CxMobile'";
      $cxResult=$cxConn->query($cxquery);
      if($cxResult == true ){
        echo "Cx email and pwd is true";
      }else{
        echo "false";
      }

    }
    ?>
<div class="container" id="logincontainer">
    <h4 style="margin-left:60vh">Sign in</h4>
    <section class="a">
  <div class="form-group">
    <form action="#" method="POST">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="CxEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name ="$CxMobile" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Save password</label>
  </div>
  <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
  </form>
</section>
</div>
</body>
</html>