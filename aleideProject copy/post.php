<?php 

function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = 'root';
    $DATABASE_NAME = 'aleide';
    try {
    	return  $conn = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	die ('Failed to connect to database!');
    }


}

$pdo = pdo_connect_mysql();



if(isset($_POST["submit"]))
{

        //cleaning of strings in the validation form for 
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $cognome = filter_input(INPUT_POST, 'cognome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $data_di_nascita = filter_input(INPUT_POST, 'data_di_nascita', FILTER_VALIDATE_EMAIL);
        $provincia_id = filter_input(INPUT_POST, 'provincia_id', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $comuni_id = filter_input(INPUT_POST, 'comuni_id', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $richiesta = filter_input(INPUT_POST, 'richiesta', FILTER_SANITIZE_FULL_SPECIAL_CHARS);




    $name = $_POST["name"];
            $cognome = $_REQUEST["cognome"];
            $data_di_nascita =$_POST["data_di_nascita"];
            $provincia_id = $_POST["provincia_id"];
            $comuni_id = $_POST["comuni_id"];
            $richiesta = $_POST["richiesta"];


		try{
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$stmt = $pdo->prepare("INSERT INTO `richiesta_table`(name ,cognome ,data_di_nascita , provincia_id , comuni_id , richiesta) values (:name , :cognome , :data_di_nascita , :provincia_id, :comuni_id ,:richiesta)");

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':cognome',$cognome );
            $stmt->bindParam(':data_di_nascita' ,$data_di_nascita);
            $stmt->bindParam(':provincia_id' ,$provincia_id);
            $stmt->bindParam(':comuni_id' ,$comuni_id);
            $stmt->bindParam(':richiesta' ,$richiesta);





            $stmt->execute();
            echo 'New records created successfully';
            header("location: grazie.php");

		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
		$conn = null;
		

                    
        

        }








?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- bootstrap link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- bootstrap link -->
        <link rel="stylesheet" href="./css/styles.css">

    <title>Document</title>
    <div class="container">
       <?php
          
           echo 'thank you';



       
       ?>
    </div>



</head>
<body>

</body>
</html>