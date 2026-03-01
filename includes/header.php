<?php
// Configurações base padrão
$base_url = '/';
?>
<!DOCTYPE html>
<html lang="pt-BR" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento Interno | BGP Consultoria</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Tailwind CSS (CDN for setup) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    colors: {
                        slate: {
                            50: '#f8fafc',
                            800: '#1e293b',
                            900: '#0f172a',
                            950: '#020617',
                        },
                        emerald: {
                            500: '#10b981',
                            600: '#059669',
                        },
                        cyan: {
                            400: '#22d3ee',
                            500: '#06b6d4',
                            600: '#0891b2',
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-slate-950 text-slate-300 font-sans antialiased selection:bg-emerald-500 selection:text-white">

    <!-- Navigation (Simples / Minimalista para páginas internas) -->
    <nav class="fixed w-full z-50 bg-slate-950/80 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <a href="/">
                        <img class="h-10 w-auto" src="../img/logo-transparente.png" alt="BGP Consultoria NOC"
                            onerror="this.onerror=null; this.src='../img/logo-separado.png'">
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-xs font-mono text-emerald-500 font-bold tracking-widest">[ RESTRICTED AREA
                        ]</span>
                </div>
            </div>
        </div>
    </nav>
    <div style="padding-top: 100px;"> <!-- Espaço para o menu fixo -->