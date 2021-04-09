
  
<?php
    ////development
    $host = '127.0.0.1';
    $db = 'opanda2';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

   

    //pdo related to connectivity
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo '<h3 class="text-success">Database connected</h3>';


    } catch (PDOException $e) {
        echo '<h3 class="text-danger">No Database Found</h3>';
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    
    $crud = new crud($pdo);
    // $auth = new auth($pdo);

    // $result = $auth->insertUser("admin", "password");
    // echo $result;