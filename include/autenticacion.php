<?php      
    include('conexion.php');  

    $email = $_POST['email'];  
    $contraseña = $_POST['contraseña'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $contraseña = stripcslashes($contraseña);  
        $email = mysqli_real_escape_string($con, $email);  
        $contraseña = mysqli_real_escape_string($con, $contraseña);  
      
        $sql = "SELECT * FROM usuarioss where email = '$email' and contraseña = '$contraseña'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Has ingresado con exito</center></h1>";  
        }  
        else{  
            echo "<h1><center>Los datos no son correcto.</center></h1>";  
        }     
?>