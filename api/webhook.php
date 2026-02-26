<?php
// webhook.php - Endpoint to receive leads and send to internal FastAPI
define('WEBHOOK_SECRET', 'bgp_noc_secret_key_2026'); // Must match FastAPI configuration
define('FASTAPI_URL', 'https://lazaro.bgpconsultoria.com.br/api/v1/leads');

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
    exit;
}

// Get the raw POST data
$payload = file_get_contents('php://input');
if (!$payload) {
    http_response_code(400);
    echo json_encode(['error' => 'Empty payload']);
    exit;
}

$data = json_decode($payload, true);
if (!$data || !isset($data['email']) || !isset($data['nome'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid JSON or missing required fields']);
    exit;
}

// Generate HMAC signature
$signature = hash_hmac('sha256', $payload, WEBHOOK_SECRET);

// Send to FastAPI
$ch = curl_init(FASTAPI_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'X-Hub-Signature-256: sha256=' . $signature
));

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curl_error = curl_error($ch);
curl_close($ch);

if ($http_code >= 200 && $http_code < 300) {
    echo json_encode(['status' => 'success', 'message' => 'Lead processed via Lázaro API.']);
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to forward to backend API', 'details' => $curl_error]);
}
?>