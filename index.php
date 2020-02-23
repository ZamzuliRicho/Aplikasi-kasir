
<?php
include 'fungsi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kasir makan enak</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      .harga{
          float: right;
          margin-right:  500px;
      }
      .menuka{
        float: left;
      }
      .menuki{
        float: right;
        margin-right: 450px;
      }
      .pesanka{
        width: 170px;
        float: right;
        margin-right: 80px;
      }
      .pesanki{
        width: 170px;
        float: left;
      }
	  
	div.a {
	text-align: center;
	}

    </style>
  </head>
  <body>
 <nav class="navbar-inverse" role="navigation" >
   <div class="container-fluid" class="a">
     <div class="navbar-inverse">
       <a class="navbar-brand" href="#" data-toggle="modal" data-target="#buy"></a>
     </div>

     
   </div><!-- /.container-fluid -->
 </nav>
 <div class="container" style="margin-top:50px;">
   <div class=" panel-success">
     <div class="panel-body bg-primary">
    <div class="container">
	<!--<img src="img/Food.png" height="50px" width="50px">-->
      <h1><center> WELCOME </center></h1>
     <h2> <center> Rumah Makan Enak </center></h2>
    </div>
     </div>
   </div>

  <div class="panel panel-default">
    <div class="panel-body">
      <div class="container">
     <div class="col-md-10" style="width: 800px;">
       <h2 style="float: left;">Harga Makanan:</h2>
       <h2 style="float: right;">Harga Minuman:</h2>
     </div>
       <br><br><br> <h3></h3><br>
       <h3 class="menuka">Nasi bakar</h3><h3 class="menuki" style="margin-right: 470px">Kopi </h3>
       <br><br><br>
       <h4 class="harga">3000</h4><h4>12000</h4>
       <h3 class="menuka">Nasi Kebuli</h3><h3 class="menuki" >Es Jerman </h3>
       <br><br><br>
       <h4 class="harga">4000</h4><h4>12000</h4>
       <h3 class="menuka">Nasi putih</h3><h3 class="menuki" >Nutrisari</h3>
       <br><br><br>
       <h4 class="harga">2000</h4><h4>6000</h4>
      </div>
    </div>
  </div>
 </div>

 <!-- [Modal Form] -->
 <div class=" " id=""  >
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header bg-danger" style="border-radius: 5px 5px 0px 0px;">
         <h4 class="modal-title" id="">Form pembelian</h4>
       </div>
       <div class="modal-body">
       <form class="form-group" action="fungsi.php" method="post">
        
        <div class="input-group pesanki" > 
          <span class="input-group-addon" style="width: 100px;">Makanan</span>
          <span class="form-control">Jumlah</span>
        </div>
        <div class="input-group pesanka" > 
          <span class="input-group-addon" style="width: 100px;">Minuman</span>
          <span class="form-control">Jumlah</span>
        </div>
        <br><br><br>
         <div class="input-group pesanki"  > 
          <span class="input-group-addon" style="width: 100px">Nasi bakar</span>
          <input type="number" class="form-control"  name="bakar">
        </div>

        <div class="input-group pesanka"  > 
          <span class="input-group-addon" style="width: 100px">Kopi</span>
          <input type="number" class="form-control" name="kopi">
        </div>
       <br><br><br>
       <div class="input-group pesanki"  > 
          <span class="input-group-addon" style="width: 100px">Nasi Kebuli</span>
          <input type="number" class="form-control" name="Kebuli">
        </div>

        <div class="input-group pesanka"  > 
          <span class="input-group-addon" style="width: 100px">Es Jerman</span>
          <input type="number" class="form-control" name="jeruk">
        </div>
       <br><br><br>
       <div class="input-group pesanki"  > 
          <span class="input-group-addon" style="width: 100px">Nasi putih</span>
          <input type="number" class="form-control" name="kare">
        </div>

        <div class="input-group pesanka"  > 
          <span class="input-group-addon" style="width: 100px">Nutrisari</span>
          <input type="number" class="form-control" name="marimas">
        </div>
       <br><br><br>


       </div>
       <div class="modal-footer">
         <button type="submit" class="btn btn-primary" name="check" ><i class="fa fa-check"></i> Cek Total</button>
     </form>
       </div>
     </div>
   </div>
 </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
    Include all compiled plugins (below), or include individual files as needed
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>