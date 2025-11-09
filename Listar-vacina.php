<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id_usuario'])) {
    $id_usuario = intval($_GET['id_usuario']);

    $stmt = $conn->prepare("SELECT id_vacina, data_aplicacao, local_aplicacao, lote, responsavel_aplicacao FROM vacinacao WHERE id_usuario = ?");
    $stmt->bind_param("i", $id_usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Vacina: " . htmlspecialchars($row["id_vacina"]) .
                 " - Data: " . htmlspecialchars($row["data_aplicacao"]) .
                 " - Local: " . htmlspecialchars($row["local_aplicacao"]) .
                 " - Lote: " . htmlspecialchars($row["lote"]) .
                 " - Responsável: " . htmlspecialchars($row["responsavel_aplicacao"]) . "<br>";
        }
    } else {
        echo "Nenhuma vacinação encontrada.";
    }

    $stmt->close();
    $conn->close();
}
?>