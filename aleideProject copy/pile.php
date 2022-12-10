<?php
//()h
include_once('./config.php');
$pdo = pdo_connect_mysql();

//to retrieve provincia tb
 $stmt = $pdo->prepare('SELECT * FROM provincia ');

 $stmt->execute();
 $users = $stmt->fetchAll(PDO::FETCH_ASSOC);






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
</head>

<body>
    <header>
      
    </header>
    <h1 class="text-center mt-4" style="font-weight: bold; text-transform:uppercase">Invia la tua richiesta</h1>


    <div class="container">
        
    <h6>Do you want to see the richieste? Only for Admins</h6>
    <a href="login.php"> Login </a>

        <form action="post.php" method="post">
  <div class="row mt-3">
    <div class="col-12 mb-3">
    <label for="">Name</label>
      <input type="text" class="form-control" placeholder="First name" name="name">
    </div>
    <div class="col-12 mb-3">
    <label for="">Surname</label>

      <input type="text" class="form-control" placeholder="Last name"  name="cognome">
    </div>
    <div class="col-12 mb-3">
        <label for="">Data di Nascita</label>
      <input type="datetime-local" class="form-control"   name="data_di_nascita">
    </div>
    <div class="col-6 offset-lg-12 mb-3">
    <label for="" class="form-label">Provincia :</label>
    <select class="form-control" name="provincia_id" id="">

    <?php
    $sql = "SELECT * FROM `provincia`";
       $query = $pdo->prepare($sql);
       $query->execute();
       
       while($fetch = $query->fetch()){
         
   ?>
   
    
             <option id="provincia_id" name="provincia_id" value="<?php echo $fetch['id']?>"><?php echo $fetch['nome']?></option>
   
             <?php
     }
   ?>
                </select>

    </div>
  


    
    <div class="col-6 offset-lg-12 mb-3">
    <label for="" class="form-label">Comune :</label>
        <select class="form-control" name="comuni_id" id="comuni_id">
          <?php
        $sql = "SELECT * FROM `comuni`
        inner join richiesta_table as pr
        on comuni.provincia_id =pr.provincia_id
         ";
    $query = $pdo->prepare($sql);
    $query->execute();
    
    while($fetch = $query->fetch()){

?>
 
          <option id="comuni_id" name="comuni_id" value="<?php echo $fetch['id']?>"><?php echo $fetch['nome']?></option>

          <?php
  }
?>
           
      

        </select>

    </div>
    <div class="col-12 mb-2">
    <label for="">Richiesta</label>
        <textarea class="form-control" aria-live="rtrim" required  name="richiesta" id="richiesta" cols="30" rows="3">
        </textarea>
    </div>

  </div>
  <button type="submit" name="submit" class=" btn btn-warning">INVIA</button>

</form>





       

    </div>


   





    
</body>
</html>