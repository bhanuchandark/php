<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Electronic Gadgets</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
    <h3 class="heading center" style="text-align:center">Electronic Gadgets</h3>  
    </header>
       <section class="container-fluid mysection1">
           
           <div class="flexbox">
               <?php
                include("../scripts/fetchData.php");
               if($resultset->num_rows > 0)
                {
                   while($row = $resultset->fetch_assoc())
                   { ?>
                        <div class="card" style="width: 18rem;">
                        <div class="center"><img src="<?php echo $row["image"]?>" class="card-img-top mycardimg" alt="product image"></div>                            <div class="card-body">
                            <h5 class="card-title" id="mobilename"><?php echo $row["name"]?></h5>
                            <p style="text-align: right;"><span class="badge badge-pill badge-danger" style="font-size: 1em;">&#8377;<?php echo $row["price"] ?></span></p>
                            <div>
                                <a href="#" class="btn btn-success mybtn">Add to cart</a>
                                <a href="#" class="btn btn-info mybtn">Details</a>
                            </div>
                            </div>
                        </div>  
                        <?php
                     }
                }
                ?>
            
           </div>
        </section>  
</body>
</html>