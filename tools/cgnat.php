<?php
// CGNAT Netmap Script Generator
session_start();
// Prevent Brute Force Simple Rate Limiting
if (!isset($_SESSION['tool_requests'])) {
    $_SESSION['tool_requests'] = 0;
    $_SESSION['first_request'] = time();
}
if (time() - $_SESSION['first_request'] > 3600) {
    $_SESSION['tool_requests'] = 0;
    $_SESSION['first_request'] = time();
}
if ($_SESSION['tool_requests'] > 50) {
    die("Rate limit exceeded. Try again later.");
}

$output = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['tool_requests']++;
    $private_subnet = filter_input(INPUT_POST, 'private_subnet', FILTER_SANITIZE_STRING);
    $public_subnet = filter_input(INPUT_POST, 'public_subnet', FILTER_SANITIZE_STRING);

    if ($private_subnet && $public_subnet) {
        $output = "/ip firewall nat\n";
        $output .= "add action=netmap chain=srcnat src-address={$private_subnet} to-addresses={$public_subnet}\n";
        $output .= "add action=netmap chain=dstnat dst-address={$public_subnet} to-addresses={$private_subnet}\n";
        $output .= "\n# Aviso: Lembre-se de verificar o rastreamento determinístico e logs de portas (PBA).";
    } else {
        $output = "Erro: Sub-redes inválidas.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR" class="dark">

<head>
    <meta charset="UTF-8">
    <title>Gerador de CGNAT Netmap | BGP Consultoria</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { darkMode: 'class', theme: { extend: { colors: { emerald: { 500: '#10b981' } } } } }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0f172a;
            color: #cbd5e1;
        }
    </style>
</head>

<body class="p-8">
    <div class="max-w-3xl mx-auto bg-slate-900 border border-slate-700 p-8 rounded-xl shadow-xl">
        <div class="mb-8 border-b border-slate-700 pb-4 flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-white mb-2">Gerador de CGNAT (Mikrotik Netmap)</h1>
                <p class="text-sm text-slate-400">Escalabilidade determinística para limitação IPv4 (Carrier-Grade NAT).
                </p>
            </div>
            <a href="../index.php" class="text-emerald-500 hover:text-emerald-400 text-sm font-mono">&lt; VOLTAR</a>
        </div>

        <form method="POST" class="space-y-6">
            <div class="grid grid-cols-2 gap-6">
                <div class="col-span-2">
                    <label class="block text-sm font-medium text-slate-300 mb-1">Sub-rede Privada (Ex:
                        100.64.0.0/22)</label>
                    <input type="text" name="private_subnet" required
                        class="w-full bg-slate-800 border border-slate-600 rounded-md py-2 px-3 text-white focus:outline-none focus:border-emerald-500">
                </div>
                <div class="col-span-2">
                    <label class="block text-sm font-medium text-slate-300 mb-1">Sub-rede Pública (Ex:
                        203.0.113.0/29)</label>
                    <input type="text" name="public_subnet" required
                        class="w-full bg-slate-800 border border-slate-600 rounded-md py-2 px-3 text-white focus:outline-none focus:border-emerald-500">
                </div>
            </div>
            <button type="submit"
                class="w-full bg-emerald-500 hover:bg-emerald-600 text-slate-950 font-bold py-3 px-4 rounded-md transition-colors">
                Gerar Script de Core
            </button>
        </form>

        <?php if ($output): ?>
            <div class="mt-8">
                <h3 class="text-sm font-mono text-emerald-500 mb-2">// OUTPUT</h3>
                <pre
                    class="bg-black border border-slate-800 p-4 rounded-md text-cyan-400 font-mono text-sm overflow-x-auto"><code><?php echo htmlspecialchars($output); ?></code></pre>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>