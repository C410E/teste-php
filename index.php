<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão PHP com PostgreSQL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="content">
       <h1> 

    <?php
        $host = 'localhost';
        $dbname = 'teste_php';
        $user = 'postgres';
        $password = '654789123';

        $dsn = "pgsql:host=$host;dbname=$dbname;user=$user;password=$password";

        try {
            $pdo = new PDO($dsn);

            $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt  =  $pdo->query('select * from usuarios');

            while ($row = $stmt->fetch()) {
                echo 'id' . ' ';
                echo 'nome' . ' ';
                echo 'idade' . ' ';
                echo 'email' . ' ';
                echo  'senha' . '<br>';

                echo $row['id'] . ', ';
                echo $row['nome'] . ', ';
                echo $row['idade'] . ',  ';
                echo $row['email'] . ', ';
                echo $row['senha'] . ' ';
            }
        } catch (PDOException $e) {
            
            echo 'Erro de conexão: ' . $e->getMessage();
        }
    ?>
    </h1>
    </div>
</body>
</html>
