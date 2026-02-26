<?php
// IPv6 Subnet Calculator (GMP)
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

$output = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['tool_requests']++;
    $ipv6_base = filter_input(INPUT_POST, 'ipv6_base', FILTER_SANITIZE_STRING);
    $prefix_length = filter_input(INPUT_POST, 'prefix_length', FILTER_VALIDATE_INT);

    if ($ipv6_base && $prefix_length && $prefix_length >= 16 && $prefix_length <= 64) {
        if (!filter_var($ipv6_base, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
            $output[] = "Erro: Prefixo IPv6 base inválido.";
        } else {
            // Basic Mock implementation for GMP presentation
            $output[] = "Base Prefix: {$ipv6_base}/{$prefix_length}";
            $output[] = "Plano Hierárquico GMP Recomendado (ISP):";
            $output[] = "- /48 para Clientes Corporativos / PTP Críticos";
            $output[] = "- /56 para Segmentos Residenciais High-End";
            $output[] = "- /64 para Clientes Residenciais Standard";
            $output[] = "\nDica de Segurança BGP (MANRS):";
            $output[] = "Gere Route Origin Authorizations (ROAs) para os seus prefixos anunciados.";
        }
    } else {
        $output[] = "Erro: Preencha os campos (Prefixo Válido e Máscara entre /16 e /64).";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR" class="dark">

<head>
    <meta charset="UTF-8">
    <title>Calculadora IPv6 Hierárquica | BGP Consultoria</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { darkMode: 'class', theme: { extend: { colors: { cyan: { 400: '#22d3ee', 500: '#06b6d4' } } } } }
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
                <h1 class="text-2xl font-bold text-white mb-2">Calculadora IPv6 Arquitetural</h1>
                <p class="text-sm text-slate-400">Design tático do seu bloco IPv6 com proteção e resiliência integradas.
                </p>
            </div>
            <a href="../index.php" class="text-cyan-500 hover:text-cyan-400 text-sm font-mono">&lt; VOLTAR</a>
        </div>

        <form method="POST" class="space-y-6">
            <div class="grid grid-cols-2 gap-6">
                <div class="col-span-2">
                    <label class="block text-sm font-medium text-slate-300 mb-1">Prefixo Alocado pelo Registro
                        (LACNIC/Registro.br)</label>
                    <input type="text" name="ipv6_base" required
                        placeholder="Ex: 2804:1234::/32 (sem prefixo aqui, digite apenas endereço)"
                        class="w-full bg-slate-800 border border-slate-600 rounded-md py-2 px-3 text-white focus:outline-none focus:border-cyan-500">
                </div>
                <div class="col-span-2">
                    <label class="block text-sm font-medium text-slate-300 mb-1">Prefix Length (Ex: 32)</label>
                    <input type="number" name="prefix_length" required min="16" max="64"
                        class="w-full bg-slate-800 border border-slate-600 rounded-md py-2 px-3 text-white focus:outline-none focus:border-cyan-500">
                </div>
            </div>
            <button type="submit"
                class="w-full bg-cyan-500 hover:bg-cyan-600 text-slate-950 font-bold py-3 px-4 rounded-md transition-colors">
                Calcular Topologia
            </button>
        </form>

        <?php if (!empty($output)): ?>
            <div class="mt-8">
                <h3 class="text-sm font-mono text-cyan-500 mb-2">// GMP RESULT:</h3>
                <pre
                    class="bg-black border border-slate-800 p-4 rounded-md text-emerald-400 font-mono text-sm overflow-x-auto"><code><?php echo htmlspecialchars(implode("\n", $output)); ?></code></pre>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>