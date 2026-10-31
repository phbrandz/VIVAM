<?php
// salvar_config.php - Salva automaticamente as configurações no servidor cPanel/Hospedagem
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = file_get_contents('php://input');
    if (!empty($input)) {
        $decoded = json_decode($input);
        if ($decoded !== null) {
            $saved = file_put_contents(__DIR__ . '/config.json', json_encode($decoded, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
            if ($saved !== false) {
                echo json_encode(['success' => true, 'message' => 'Configurações salvas no servidor com sucesso!']);
                exit;
            }
        }
    }
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Erro ao processar dados JSON.']);
    exit;
}
?>
