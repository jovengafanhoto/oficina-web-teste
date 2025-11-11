<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meu App PHP</title>
    <style>
        body { font-family: sans-serif; display: grid; place-items: center; min-height: 90vh; background: #f0f2f5; }
        .container { text-align: center; padding: 2rem; background: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        .php-info { font-size: 1.3rem; color: #007bff; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Meu App PHP está no Ar!</h1>
        <p>Esta informação foi processada pelo servidor:</p>
        <div class="php-info">
            <?php
                date_default_timezone_set('America/Sao_Paulo');
                echo "Hora no servidor: " . date('H:i:s');
            ?>
        </div>
    </div>
</body>
</html>
