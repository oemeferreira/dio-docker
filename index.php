<html>
<head>
    <title>Exemplo PHP</title>
</head>
<body>

<?php
// Configuração de exibição de erros
ini_set("display_errors", 1);
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');

// Variáveis de conexão utilizando variáveis de ambiente
$servername = getenv('DB_SERVER');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$database = getenv('DB_DATABASE');

// Conexão com o banco de dados
$link = new mysqli($servername, $username, $password, $database);

// Verificação de conexão
if ($link->connect_error) {
    die("Falha na conexão: " . $link->connect_error);
}

// Gerar dados aleatórios
$valor_rand1 = rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 0, 8));
$host_name = gethostname();

// Inserir dados na tabela com prepared statements
$stmt = $link->prepare("INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssss", $valor_rand1, $valor_rand2, $valor_rand2, $valor_rand2, $valor_rand2, $host_name);

if ($stmt->execute()) {
    echo "Novo registro criado com sucesso!<br>";
} else {
    echo "Erro ao criar registro: " . $stmt->error . "<br>";
}

// Fechar a conexão
$stmt->close();
$link->close();
?>

</body>
</html>
