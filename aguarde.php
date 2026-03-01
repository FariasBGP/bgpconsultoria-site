<!DOCTYPE html>
<html lang="pt-BR" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BGP Consultoria | Ferramentas em Atualização</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap"
        rel="stylesheet">

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

<body
    class="bg-slate-950 text-slate-300 font-sans antialiased selection:bg-emerald-500 selection:text-white min-h-screen flex flex-col justify-center relative overflow-hidden">

    <!-- Background Grid -->
    <div class="absolute inset-0 bg-grid-slate-900/[0.04] bg-[bottom_1px_center] dark:bg-grid-slate-900/[0.2] dark:bg-[bottom_1px_center]"
        style="mask-image:linear-gradient(to_bottom,transparent,black)"></div>

    <div class="relative z-10 max-w-3xl mx-auto px-4 text-center">
        <div
            class="inline-flex items-center rounded-full px-3 py-1 text-sm font-mono font-medium text-cyan-400 border border-cyan-400/20 mb-8 bg-slate-900">
            <span class="flex h-2 w-2 rounded-full bg-cyan-400 mr-2 animate-pulse"></span>
            SISTEMA EM MANUTENÇÃO
        </div>

        <h1 class="text-3xl md:text-5xl font-bold text-white tracking-tight mb-6">
            Padrão de <span class="text-emerald-500">Alta Densidade 2026</span>
        </h1>

        <p class="mt-4 text-xl text-slate-400 font-light leading-relaxed mb-10">
            Estamos refatorando nossas ferramentas para o padrão de alta densidade 2026. Disponível em breve.
        </p>

        <a href="index.php"
            class="inline-flex justify-center items-center px-8 py-4 text-sm font-mono font-medium rounded-md text-slate-950 bg-emerald-500 hover:bg-emerald-400 transition-colors shadow-[0_0_15px_rgba(16,185,129,0.2)]">
            &lt; RETORNAR AO MENU PRINCIPAL
        </a>
    </div>

</body>

</html>