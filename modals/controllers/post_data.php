<?php 
    require_once './app.php';
    if (isset($_POST)){
        $camper = $_POST['nombrecamper'];
        print_r($_POST);
        $consulta("INSERT INTO campers (nombrecamper) VALUES (:nombrecamper)");
        $send = $connection->prepare($consulta);
        echo '';
        $send->bindparam(':nombrecamper',$camper);
        $send->execute();
        echo 'exito';
    }

?>