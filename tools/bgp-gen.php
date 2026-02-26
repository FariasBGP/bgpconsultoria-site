<?php
// BGP Generator Tool (RouterOS v7)
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
    $local_asn = filter_input(INPUT_POST, 'local_asn', FILTER_VALIDATE_INT);
    $remote_asn = filter_input(INPUT_POST, 'remote_asn', FILTER_VALIDATE_INT);
    $local_ip = filter_input(INPUT_POST, 'local_ip', FILTER_SANITIZE_STRING);
    $remote_ip = filter_input(INPUT_POST, 'remote_ip', FILTER_SANITIZE_STRING);
    $session_name = filter_input(INPUT_POST, 'session_name', FILTER_SANITIZE_STRING) ?: "BGP-PEER";

    if ($local_asn && $remote_asn && $local_ip && $remote_ip) {
        $output = "/routing/bgp/connection\n";
        $output .= "add name=\"{$session_name}\" local.address={$local_ip} local.role=" . ($local_asn == $remote_asn ? "ibgp" : "ebgp") . "\n";
        $output .= "  remote.address={$remote_ip} remote.as={$remote_asn}\n";
        $output .= "  routing-table=main as={$local_asn} out.filter-chain={$session_name}-out in.filter-chain={$session_name}-in\n";
    } else {
        $output = "Erro: Por favor preencha todos os campos obrigatórios corretamente.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR" class="dark">

<head>
    <meta charset="UTF-8">
    <title>Gerador BGP RouterOS 7 | BGP Consultoria</title>
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
                <h1 class="text-2xl font-bold text-white mb-2">Gerador BGP Mikrotik (ROS v7)</h1>
                <p class="text-sm text-slate-400">Gere scripts base para sessões eBGP/iBGP rapidamente.</p>
            </div>
            <a href="../index.php" class="text-emerald-500 hover:text-emerald-400 text-sm font-mono">&lt; VOLTAR</a>
        </div>

        <form method="POST" class="space-y-6">
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1">Local ASN</label>
                    <input type="number" name="local_asn" required
                        class="w-full bg-slate-800 border border-slate-600 rounded-md py-2 px-3 text-white focus:outline-none focus:border-emerald-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1">Remote ASN</label>
                    <input type="number" name="remote_asn" required
                        class="w-full bg-slate-800 border border-slate-600 rounded-md py-2 px-3 text-white focus:outline-none focus:border-emerald-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1">Local IP</label>
                    <input type="text" name="local_ip" required placeholder="Ex: 192.168.1.1"
                        class="w-full bg-slate-800 border border-slate-600 rounded-md py-2 px-3 text-white focus:outline-none focus:border-emerald-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1">Remote IP</label>
                    <input type="text" name="remote_ip" required placeholder="Ex: 192.168.1.2"
                        class="w-full bg-slate-800 border border-slate-600 rounded-md py-2 px-3 text-white focus:outline-none focus:border-emerald-500">
                </div>
                <div class="col-span-2">
                    <label class="block text-sm font-medium text-slate-300 mb-1">Nome da Sessão (Ex:
                        TRANSITO-IX)</label>
                    <input type="text" name="session_name"
                        class="w-full bg-slate-800 border border-slate-600 rounded-md py-2 px-3 text-white focus:outline-none focus:border-emerald-500">
                </div>
            </div>
            <button type="submit"
                class="w-full bg-emerald-500 hover:bg-emerald-600 text-slate-950 font-bold py-3 px-4 rounded-md transition-colors">
                Gerar Script
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