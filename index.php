<!DOCTYPE html>
<html lang="pt-BR" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BGP Consultoria | Governe sua rede, Escale sem medo</title>
    <meta name="description"
        content="A arquitetura de elite e inteligência de borda que preparam seu ISP para superar 15.000 assinantes com estabilidade.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

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

    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-slate-950/80 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <img class="h-10 w-auto" src="img/logo-transparente.png" alt="BGP Consultoria"
                        onerror="this.onerror=null; this.src='img/logo-separado.png'">
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#lazaro"
                        class="text-sm font-medium text-slate-300 hover:text-white transition-colors">Lázaro NOS</a>
                    <a href="#solucoes"
                        class="text-sm font-medium text-slate-300 hover:text-white transition-colors">Soluções de
                        Escala</a>
                    <a href="#elite"
                        class="text-sm font-medium text-slate-300 hover:text-white transition-colors">Mentoria Elite</a>
                    <a href="#ferramentas"
                        class="text-sm font-medium text-slate-300 hover:text-white transition-colors">Free Tools</a>
                    <a href="#diagnostico"
                        class="inline-flex items-center px-4 py-2 border border-emerald-500 text-sm font-mono font-medium rounded text-emerald-500 hover:bg-emerald-500 hover:text-slate-950 transition-all">
                        &gt; INIT_DIAGNOSTICO
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-slate-950 px-4">
        <!-- Background Grid -->
        <div class="absolute inset-0 bg-grid-slate-900/[0.04] bg-[bottom_1px_center] dark:bg-grid-slate-900/[0.2] dark:bg-[bottom_1px_center]"
            style="mask-image:linear-gradient(to_bottom,transparent,black)"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div
                class="inline-flex items-center rounded-full px-3 py-1 text-sm font-mono font-medium text-cyan-400 bg-cyan-400/10 border border-cyan-400/20 mb-8">
                <span class="flex h-2 w-2 rounded-full bg-cyan-400 mr-2 animate-pulse"></span>
                SISTEMA ONLINE. TELEMETRIA ATIVA.
            </div>

            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white tracking-tight mb-6">
                Governe sua rede.<br>
                Proteja seu lucro.<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-cyan-500">Escale sem
                    medo.</span>
            </h1>

            <p class="mt-4 text-xl md:text-2xl text-slate-400 max-w-3xl mx-auto font-light leading-relaxed mb-10">
                A arquitetura de elite e a inteligência de borda que preparam o seu ISP para superar os <strong
                    class="text-white font-medium">15.000 assinantes</strong> com estabilidade total.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#diagnostico"
                    class="inline-flex justify-center items-center px-8 py-4 text-base font-medium rounded-md text-slate-950 bg-emerald-500 hover:bg-emerald-400 transition-colors shadow-[0_0_20px_rgba(16,185,129,0.3)] hover:shadow-[0_0_30px_rgba(16,185,129,0.5)]">
                    Agendar Diagnóstico de Escalabilidade
                </a>
                <a href="#lazaro"
                    class="inline-flex justify-center items-center px-8 py-4 text-base font-medium rounded-md text-white border border-slate-700 hover:bg-slate-800 transition-colors">
                    Conhecer a Tecnologia
                </a>
            </div>

            <!-- Terminal Mockup for Hero -->
            <div
                class="mt-20 max-w-4xl mx-auto rounded-lg overflow-hidden border border-slate-800 bg-[#0f172a] shadow-2xl">
                <div class="flex items-center px-4 py-3 border-b border-slate-800 bg-slate-900">
                    <div class="flex space-x-2">
                        <div class="w-3 h-3 rounded-full bg-slate-700"></div>
                        <div class="w-3 h-3 rounded-full bg-slate-700"></div>
                        <div class="w-3 h-3 rounded-full bg-slate-700"></div>
                    </div>
                    <div class="mx-auto text-xs font-mono text-slate-500">root@bgp-core-01:~# lazaro-cli status</div>
                </div>
                <div
                    class="p-6 text-left font-mono text-sm sm:text-base leading-relaxed overflow-x-auto text-slate-300">
                    <div class="flex"><span class="text-emerald-500 mr-2">➜</span> <span class="text-cyan-400">BGP
                            Sessions:</span> <span class="ml-2">12/12 ESTABLISHED</span></div>
                    <div class="flex"><span class="text-emerald-500 mr-2">➜</span> <span class="text-cyan-400">Total
                            Prefix:</span> <span class="ml-2">948,321 (IPv4), 192,405 (IPv6)</span></div>
                    <div class="flex mt-2"><span class="text-emerald-500 mr-2">➜</span> <span
                            class="text-cyan-400">Traffic (Aggregated):</span> <span class="ml-2">42.8 Gbps Rx / 8.2
                            Gbps Tx</span></div>
                    <div class="flex mt-2"><span class="text-emerald-500 mr-2">➜</span> <span class="text-cyan-400">DDoS
                            Mitigation:</span> <span class="ml-2 text-emerald-500">ARMED (Auto-Blackhole Enabled)</span>
                    </div>
                    <div class="flex mt-4 animate-pulse"><span class="text-slate-500">Waiting for anomalies..._</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Secção Lázaro (O Diferencial Exclusivo) -->
    <section id="lazaro" class="py-24 bg-slate-900 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-emerald-500 font-mono font-medium tracking-widest text-sm mb-3">LÁZARO NOS (NEURAL
                    OPERATION SYSTEM)</h2>
                <h3 class="text-3xl md:text-5xl font-bold text-white mb-6">Visibilidade Total. Reação em Milissegundos.
                </h3>
                <p class="text-xl text-slate-400 max-w-3xl mx-auto mb-6">Não é apenas monitoramento. O Lázaro é o
                    sistema
                    neuro-operacional que automatiza a inteligência do seu core, protegendo sua banda contra ataques
                    volumétricos em menos de 3 segundos.</p>
                <div
                    class="inline-flex items-center px-4 py-2 rounded-full border border-emerald-500/30 bg-emerald-500/10 text-emerald-400 font-mono text-lg">
                    A partir de R$ 497/mês
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="space-y-10">
                        <div class="flex">
                            <div class="flex-shrink-0 mt-1">
                                <div
                                    class="flex items-center justify-center w-12 h-12 rounded-md bg-slate-800 border border-slate-700 text-cyan-400 font-mono">
                                    01</div>
                            </div>
                            <div class="ml-6">
                                <h4 class="text-xl font-semibold text-white mb-2">Engenharia de Tráfego por ASN</h4>
                                <p class="text-slate-400">Desvende exatamente para onde a sua banda está indo. Gráficos
                                    granulares que permitem otimização de peering e economia drástica em trânsito IP.
                                </p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-shrink-0 mt-1">
                                <div
                                    class="flex items-center justify-center w-12 h-12 rounded-md bg-slate-800 border border-slate-700 text-cyan-400 font-mono">
                                    02</div>
                            </div>
                            <div class="ml-6">
                                <h4 class="text-xl font-semibold text-white mb-2">Mitigação de DDoS em &lt; 3s</h4>
                                <p class="text-slate-400">Detecção e blackhole automatizados. Quando o ataque atinge o
                                    limiar, a rotação BGP bloqueia a anomalia silenciosamente (Sem impacto na navegação
                                    global).</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-shrink-0 mt-1">
                                <div
                                    class="flex items-center justify-center w-12 h-12 rounded-md bg-slate-800 border border-slate-700 text-cyan-400 font-mono">
                                    03</div>
                            </div>
                            <div class="ml-6">
                                <h4 class="text-xl font-semibold text-white mb-2">Automação Multi-Vendor</h4>
                                <p class="text-slate-400">Integração transparente com Huawei, Cisco, Juniper e Mikrotik.
                                    Governe equipamentos massivos através de uma única interface neural.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-emerald-500 to-cyan-500 rounded-lg blur opacity-20">
                    </div>
                    <img src="img/Principal.png" alt="Dashboard Lázaro"
                        class="relative rounded-lg shadow-2xl border border-slate-700 object-cover w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Secção Soluções de Escala -->
    <section id="solucoes" class="py-24 bg-slate-50 text-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="flex justify-center mb-8">
                    <img src="img/logo1.png" alt="BGP Logo" class="h-24 w-auto drop-shadow-sm">
                </div>
                <h2 class="text-cyan-600 font-mono font-medium tracking-widest text-sm mb-3">INFRAESTRUTURA HIGH DENSITY
                </h2>
                <h3 class="text-3xl md:text-5xl font-bold mb-6">Arquitetura Desenhada para a Próxima Fase</h3>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto">ISPs que rompem a barreira dos 3k-5k assinantes
                    precisam de um Core remodelado. Pare de usar topologias amadoras. Implementamos a base que os
                    grandes players utilizam para gerenciar mais de 15.000 clientes.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-lg border border-slate-200 hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-14 h-14 bg-slate-950 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-3">BGP &amp; Peering</h4>
                    <p class="text-slate-600">Engenharia fina de tráfego. Participação em IX (IX.br) estratégica,
                        balanceamento assimétrico e tuning de rotas PTT.</p>
                </div>
                <!-- Card 2 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-lg border border-slate-200 hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-14 h-14 bg-slate-950 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Core MPLS/LDP</h4>
                    <p class="text-slate-600">Transporte resiliente. Segmentação de domínios, túneis TE, VPLS e L3VPN
                        para isolamento brutal do seu Backbone.</p>
                </div>
                <!-- Card 3 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-lg border border-slate-200 hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-14 h-14 bg-slate-950 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Zero Trust &amp; MANRS</h4>
                    <p class="text-slate-600">RPKI ativo, BCP 38, Filtros de Bogons estritos. Deixe a sua rede limpa,
                        auditable e livre de sequestro de rotas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Secção Mentoria Elite (O Método) -->
    <section id="elite" class="py-24 bg-slate-900 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-emerald-500 font-mono font-medium tracking-widest text-sm mb-3">MENTORIA ELITE</h2>
                <h3 class="text-3xl md:text-5xl font-bold text-white mb-6">O Método dos 15K:<br>Governança Técnica para
                    Donos de ISPs.</h3>
                <p class="text-xl text-slate-400 leading-relaxed mb-10">
                    Aprenda a arquitetura de core, BGP estratégico e segurança de borda com quem tem 20 anos de campo.
                    Não ensinamos comandos, ensinamos você a dominar sua infraestrutura.
                </p>
                <a href="#diagnostico"
                    class="inline-flex justify-center items-center px-8 py-4 text-base font-medium rounded-md text-slate-950 bg-emerald-500 hover:bg-emerald-400 transition-colors shadow-[0_0_20px_rgba(16,185,129,0.3)] hover:shadow-[0_0_30px_rgba(16,185,129,0.5)]">
                    Aplicar para a Mentoria
                </a>
            </div>
        </div>
    </section>

    <!-- Secção Autoridade -->
    <section id="autoridade" class="py-24 bg-slate-950 overflow-hidden relative border-t border-slate-800">
        <div class="absolute inset-y-0 right-0 w-1/2 bg-slate-900 border-l border-slate-800 hidden lg:block"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="w-full lg:w-5/12 mb-12 lg:mb-0 space-y-8">
                    <img src="img/logo-separado.png" alt="BGP Logotipo" class="h-16 w-auto mb-8 rounded-md bg-white p-2"
                        onerror="this.onerror=null; this.src='img/logo.jpg'">
                    <h3 class="text-3xl md:text-5xl font-bold text-white leading-tight">20 Anos Dominando Ambientes de
                        Missão Crítica</h3>
                    <p class="text-lg text-slate-400">
                        Nós orquestramos as transições mais difíceis no mercado de ISPs. Somos a equipe técnica por trás
                        das operadoras que realizaram agressive scale-up de 3k para 15k assinantes em tempo recorde. Nós
                        compreendemos a dor do downtime, a frustração com latência, e a urgência do crescimento.
                    </p>
                    <div class="grid grid-cols-2 gap-6 pt-4 border-t border-slate-800">
                        <div>
                            <div class="text-3xl font-mono font-bold text-emerald-500">100%</div>
                            <div class="text-sm text-slate-400 mt-1">Conformidade BGP</div>
                        </div>
                        <div>
                            <div class="text-3xl font-mono font-bold text-cyan-400">&gt;200</div>
                            <div class="text-sm text-slate-400 mt-1">Cores Modificados</div>
                        </div>
                    </div>
                </div>

                <div
                    class="w-full lg:w-6/12 bg-slate-900 p-8 md:p-12 rounded-2xl border border-slate-800 shadow-xl relative">
                    <div
                        class="absolute -top-6 -right-6 w-24 h-24 bg-gradient-to-br from-emerald-500 to-cyan-500 rounded-full blur-2xl opacity-30">
                    </div>
                    <div class="flex items-center mb-8">
                        <div
                            class="w-24 h-24 rounded-full border-2 border-slate-700 bg-slate-800 flex items-center justify-center relative overflow-hidden group">
                            <span class="text-slate-500 text-xs text-center px-2 z-10 transition-opacity">Espaço p/ nova
                                foto</span>
                            <!-- Placeholder para a foto oficial: uncomment após upload -->
                            <!-- <img src="img/nova-foto.jpg" alt="Farias" class="absolute inset-0 w-full h-full object-cover z-20"> -->
                        </div>
                        <div class="ml-6">
                            <h4 class="text-xl font-bold text-white">Engenharia BGP Consultoria</h4>
                            <p class="text-emerald-500 font-mono text-sm">ARCHITECTS &amp; FOUNDERS</p>
                        </div>
                    </div>
                    <p class="text-slate-300 text-lg italic border-l-4 border-emerald-500 pl-6 py-2 mb-8">
                        "O grande salto de um provedor não vem apenas de vender mais banda, mas de ter um alicerce
                        tecnológico que não desmorone quando os contratos massivos chegam."
                    </p>
                    <a href="#diagnostico"
                        class="inline-flex w-full justify-center items-center px-6 py-3 text-sm font-bold uppercase tracking-wider rounded-md text-slate-950 bg-white hover:bg-slate-200 transition-colors">
                        Fale com nossa equipe técnica
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Secção Ferramentas (Lead Magnet) -->
    <section id="ferramentas" class="py-24 bg-slate-900 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-cyan-400 font-mono font-medium tracking-widest text-sm mb-3">FREE TOOLS / UTILIDADES
                </h2>
                <h3 class="text-3xl md:text-4xl font-bold text-white mb-6">Engenharia Expressa para seu ISP</h3>
                <p class="text-xl text-slate-400 max-w-2xl mx-auto">Precisa arrumar configurações urgentes? Utilize
                    nossos geradores e calculadoras exclusivas construídas pelos nossos especialistas.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Tool 1 -->
                <div
                    class="bg-slate-950 p-8 rounded-xl border border-slate-800 hover:border-emerald-500/50 transition-colors group">
                    <div class="text-emerald-500 mb-4">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-2">Gerador BGP (RouterOS 7)</h4>
                    <p class="text-slate-400 text-sm mb-6">Gere os scripts base para sessões iBGP e eBGP diretamente no
                        formato nativo da Mikrotik v7.</p>
                    <a href="aguarde.php"
                        class="inline-flex items-center text-emerald-500 font-mono text-sm group-hover:text-emerald-400">
                        EXECUTAR_TOOL <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </a>
                </div>

                <!-- Tool 2 -->
                <div
                    class="bg-slate-950 p-8 rounded-xl border border-slate-800 hover:border-cyan-500/50 transition-colors group">
                    <div class="text-cyan-400 mb-4">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m14-6h2m-2 6h2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-2">Calculadora IPv6 (GMP)</h4>
                    <p class="text-slate-400 text-sm mb-6">Planejamento e design hierárquico das suas sub-redes IPv6 já
                        com mitigação e segurança implementada.</p>
                    <a href="aguarde.php"
                        class="inline-flex items-center text-cyan-400 font-mono text-sm group-hover:text-cyan-300">
                        EXECUTAR_TOOL <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </a>
                </div>

                <!-- Tool 3 -->
                <div
                    class="bg-slate-950 p-8 rounded-xl border border-slate-800 hover:border-emerald-500/50 transition-colors group">
                    <div class="text-emerald-500 mb-4">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-2">Script CGNAT (Netmap)</h4>
                    <p class="text-slate-400 text-sm mb-6">Calculadora determinística robusta de traduções massivas.
                        Escalabilidade total de escassez IPv4.</p>
                    <a href="aguarde.php"
                        class="inline-flex items-center text-emerald-500 font-mono text-sm group-hover:text-emerald-400">
                        EXECUTAR_TOOL <span class="ml-2 group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Tabela de Preços (Oferta High Ticket) -->
    <section id="pricing" class="py-24 bg-slate-950 border-t border-slate-800 relative">
        <div class="absolute inset-0 bg-grid-slate-900/[0.2] bg-[bottom_1px_center]"
            style="mask-image:linear-gradient(to_bottom,black,transparent)"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-white text-3xl md:text-5xl font-bold mb-4">Escolha a Resiliência do seu NOC</h2>
                <p class="text-slate-400 text-lg max-w-2xl mx-auto">Seu patrimônio exige estruturas de proteção e gestão
                    corporativa. Soluções High-Ticket para provedores que levam disponibilidade a sério.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

                <!-- Plan 1 -->
                <div class="bg-slate-900 rounded-2xl border border-slate-700 p-8 flex flex-col">
                    <h3 class="text-2xl font-bold text-white mb-2">Lázaro SaaS Core</h3>
                    <p class="text-slate-400 text-sm mb-6 h-10">Inteligência, visibilidade e anti-DDoS para provedores
                        independentes.</p>
                    <div class="mb-6">
                        <span class="text-3xl font-bold text-white">R$ 497</span>
                        <span class="text-slate-400"> a R$ 997 /mês (POR POP)</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-1">
                        <li class="flex text-slate-300">
                            <span class="text-emerald-500 mr-2">✓</span> Visibilidade Total (ASN)
                        </li>
                        <li class="flex text-slate-300">
                            <span class="text-emerald-500 mr-2">✓</span> Mitigação DDoS Automática
                        </li>
                        <li class="flex text-slate-300">
                            <span class="text-emerald-500 mr-2">✓</span> Dashboard Real-Time
                        </li>
                    </ul>
                    <a href="#"
                        class="block w-full text-center py-3 px-4 border border-slate-600 rounded-md text-white font-medium hover:bg-slate-800 transition-colors">
                        Solicitar Acesso
                    </a>
                </div>

                <!-- Plan 2: HIGHLIGHT -->
                <div
                    class="bg-[#0f172a] rounded-2xl border border-emerald-500 shadow-[0_0_30px_rgba(16,185,129,0.15)] relative transform md:-translate-y-4 p-8 flex flex-col">
                    <div class="absolute top-0 inset-x-0 flex justify-center -mt-3">
                        <span
                            class="bg-emerald-500 text-slate-950 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                            Mais Assinado (Scale-Up)
                        </span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Managed Resiliency</h3>
                    <p class="text-slate-400 text-sm mb-6 h-10">Todo o poder do Lázaro unificado com Consultoria Estrita
                        da nossa equipe.</p>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-white">R$ 2.500</span>
                        <span class="text-slate-400 block text-sm mt-1">até R$ 7.000 /mês</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-1">
                        <li class="flex text-slate-300">
                            <span class="text-emerald-500 mr-2">✓</span> Lázaro NOS Completo
                        </li>
                        <li class="flex text-slate-300">
                            <span class="text-emerald-500 mr-2">✓</span> Gestão Consultiva Permanente
                        </li>
                        <li class="flex text-slate-300">
                            <span class="text-emerald-500 mr-2">✓</span> Engenharia de Peering Mensal
                        </li>
                        <li class="flex text-slate-300">
                            <span class="text-emerald-500 mr-2">✓</span> SLA Premium &amp; Intervenção Ativa
                        </li>
                    </ul>
                    <a href="#diagnostico"
                        class="block w-full text-center py-3 px-4 bg-emerald-500 text-slate-950 font-bold rounded-md hover:bg-emerald-400 transition-colors shadow-lg shadow-emerald-500/30">
                        Agendar Diagnóstico VIP
                    </a>
                </div>

                <!-- Plan 3 -->
                <div class="bg-slate-900 rounded-2xl border border-slate-700 p-8 flex flex-col">
                    <h3 class="text-2xl font-bold text-white mb-2">Elite Setup</h3>
                    <p class="text-slate-400 text-sm mb-6 h-10">Reestruturação absoluta On-Premise do Backbone (Projeto
                        pontual).</p>
                    <div class="mb-6">
                        <span class="text-3xl font-bold text-white">R$ 15.000</span>
                        <span class="text-slate-400 block text-sm mt-1">até R$ 50.000 /projeto</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-1">
                        <li class="flex text-slate-300">
                            <span class="text-emerald-500 mr-2">✓</span> Blueprint de Arquitetura Core
                        </li>
                        <li class="flex text-slate-300">
                            <span class="text-emerald-500 mr-2">✓</span> L3VPN, MPLS/LDP, BGP Tuning
                        </li>
                        <li class="flex text-slate-300">
                            <span class="text-emerald-500 mr-2">✓</span> Security Zero Trust (RPKI, MANRS)
                        </li>
                        <li class="flex text-slate-300">
                            <span class="text-emerald-500 mr-2">✓</span> Treinamento Transferência de Know-how
                        </li>
                    </ul>
                    <a href="#"
                        class="block w-full text-center py-3 px-4 border border-slate-600 rounded-md text-white font-medium hover:bg-slate-800 transition-colors">
                        Requisitar Escopo
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-950 border-t border-slate-800 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <img src="img/logo-transparente.png" alt="BGP Consultoria"
                        class="h-8 w-auto mb-4 opacity-50 hover:opacity-100 transition-opacity"
                        onerror="this.onerror=null; this.src='img/logo.jpg'">
                    <p class="text-slate-500 text-sm">© <?php echo date('Y'); ?> BGP Consultoria. Arquitetura de Redes
                        Elite.</p>
                </div>
                <div class="flex flex-wrap gap-6 justify-center text-sm font-medium text-slate-400">
                    <a href="#" class="hover:text-white transition-colors">Aviso de Privacidade</a>
                    <a href="#" class="hover:text-white transition-colors">Termos de Uso</a>
                    <a href="#" class="hover:text-white transition-colors">Portal do Cliente Lázaro</a>
                </div>
            </div>
            <div class="mt-8 text-center md:text-left border-t border-slate-800 pt-8">
                <p class="font-mono text-xs text-slate-600" id="api-status-indicator">SYS_STATUS: VERIFYING... |
                    BGP_SESSIONS: UP | NOC_READY: TRUE
                </p>
            </div>
        </div>
    </footer>

    <!-- Lázaro API Status Check -->
    <script>
        document.addEventListener('DOMContentLoaded', async () => {
            const indicator = document.getElementById('api-status-indicator');
            try {
                // Endpoint provided: https://lazaro.bgpconsultoria.com.br/api/v1
                const response = await fetch('https://lazaro.bgpconsultoria.com.br/api/v1', { mode: 'no-cors' });
                // Even with no-cors, if it doesn't throw a network error, it's alive.
                indicator.innerHTML = 'SYS_STATUS: <span class="text-emerald-500">SISTEMA ATIVO</span> | BGP_SESSIONS: UP | NOC_READY: TRUE';
            } catch (e) {
                indicator.innerHTML = 'SYS_STATUS: <span class="text-slate-500">OFFLINE</span> | BGP_SESSIONS: UP | NOC_READY: TRUE';
            }
        });
    </script>
</body>

</html>