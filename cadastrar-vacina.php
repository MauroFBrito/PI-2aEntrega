<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura e sanitiza os dados
    $id_usuario = intval($_POST['id_usuario']);
    $id_vacina = intval($_POST['id_vacina']);
    $data_aplicacao = $_POST['data_aplicacao'];
    $local_aplicacao = $_POST['local_aplicacao'];
    $lote = $_POST['lote'];
    $responsavel_aplicacao = $_POST['responsavel_aplicacao'];

    // Validação simples
    if (empty($id_usuario) || empty($id_vacina) || empty($data_aplicacao)) {
        die("Campos obrigatórios não preenchidos.");
    }

    // Prepared Statement
    $stmt = $conn->prepare("INSERT INTO vacinacao (id_usuario, id_vacina, data_aplicacao, local_aplicacao, lote, responsavel_aplicacao)
                            VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iissss", $id_usuario, $id_vacina, $data_aplicacao, $local_aplicacao, $lote, $responsavel_aplicacao);

    if ($stmt->execute()) {
        echo "Vacinação cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
