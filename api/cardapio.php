<?php
// Inclua este arquivo se precisar de alguma configuração ou funções auxiliares
// include '../config.php';

header('Content-Type: application/json');

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch($action) {
    case 'read':
        echo file_get_contents('../data/cardapio.json');
        break;

    case 'create':
        // Suponha que você está enviando um JSON com 'nome' e 'imagem'
        $input = file_get_contents('php://input');
        $data = json_decode($input, true);

        if ($data && isset($data['nome']) && isset($data['imagem'])) {
            $cardapio = json_decode(file_get_contents('../data/cardapio.json'), true);
            $cardapio[] = $data;
            file_put_contents('../data/cardapio.json', json_encode($cardapio, JSON_PRETTY_PRINT));
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Dados inválidos']);
        }
        break;

    case 'update':
        // Este exemplo não inclui uma função de atualização, mas você pode adicionar conforme necessário
        echo json_encode(['status' => 'error', 'message' => 'Atualização não implementada']);
        break;

    case 'delete':
        // Suponha que você está enviando um JSON com 'nome' para deletar
        $input = file_get_contents('php://input');
        $data = json_decode($input, true);
        
        if ($data && isset($data['nome'])) {
            $cardapio = json_decode(file_get_contents('../data/cardapio.json'), true);
            $cardapio = array_filter($cardapio, function($item) use ($data) {
                return $item['nome'] !== $data['nome'];
            });
            file_put_contents('../data/cardapio.json', json_encode($cardapio, JSON_PRETTY_PRINT));
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Dados inválidos']);
        }
        break;

    default:
        echo json_encode(['status' => 'error', 'message' => 'Ação não reconhecida']);
        break;
}
?>
