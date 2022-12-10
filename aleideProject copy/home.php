<?php

// Initialize the session
include_once('./config.php');
$pdo = pdo_connect_mysql();


//select id and name from richiestaTable
 $stmt = $pdo->prepare('SELECT id , name FROM richiesta_table ');
 $stmt->execute();
 $richieste = $stmt->fetchAll(PDO::FETCH_ASSOC);





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
        <?php include("./header.php"); ?>
        <!-- testing to see if i could pass it directly or through header -->
        <!-- <a class="nav-link" href=""><?php echo htmlspecialchars('Hi'  . ' ' .  $_SESSION["user"]["username"] . '!'); ?></a> -->

    </header>
    <h1 class="text-center mt-4" style="font-weight: bold; text-transform:uppercase">Vedi le tue richieste</h1>


    <div class="container">
    <div class="">
        <!-- i used a javascript library for the tables so even if we have multiple datas we can access them smoothly without a page breaking -->
    <table id="myTable" class="display" style="width:100%">
        <thead>
            
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
           
            </tr>
        </thead>
        <tbody>
        <?php

        
        
        
        foreach ($richieste as $r): 
        
        ?>
<!-- to verify if its not empty -->
            <?php if (($r['id'] > 0)) : ?>

                <tr>
           
           <td><?=$r['id']?></td>
          <td><?=$r['name']?></td>

          <td ><button  class="btn btn-success"><a href="dettaglio_richiesta.php?page=&id=<?=$r['id']?>" class="product"> <small style="color: white;">Vedi dettaglio richiesta</small> </button></td>
     
      </tr>

          
   
            <?php else : ?>
            
                <?php endif; ?>

       
           
            <?php endforeach; ?> 

            
            
        </tbody>
       
    </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
        






       

    </div>





</body>

</html>