<?php
// Configuração do banco
$host = "localhost";
$dbname = "sua_base_de_dados";
$user = "seu_usuario";
$password = "sua_senha";

try {
  $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
} catch (PDOException $e) {
  http_response_code(500);
  echo "Erro na conexão com o banco de dados.";
  exit;
}

// Recebe dados
$data = json_decode(file_get_contents("php://input"), true);

$nome = $data['nome'] ?? '';
$telefone = $data['telefone'] ?? '';
$data_agendamento = $data['data'] ?? '';
$servico = $data['servico'] ?? '';

if (!$nome || !$telefone || !$data_agendamento || !$servico) {
  http_response_code(400);
  echo "Dados incompletos.";
  exit;
}

// Inserir no banco
$sql = "INSERT INTO agendamentos (nome, telefone, data_agendamento, servico)
        VALUES (:nome, :telefone, :data_agendamento, :servico)";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':telefone', $telefone);
$stmt->bindParam(':data_agendamento', $data_agendamento);
$stmt->bindParam(':servico', $servico);

if ($stmt->execute()) {
  echo "Agendamento enviado com sucesso!";
} else {
  http_response_code(500);
  echo "Erro ao inserir agendamento.";
}
