<?php require 'includes/header.php'; ?>

<div class="max-w-4xl mx-auto px-4 py-20">
    <div class="bg-slate-900 border border-slate-700 rounded-2xl p-8 shadow-2xl">
        <h1 class="text-3xl font-bold font-mono text-emerald-500 mb-2">[APLICAÇÃO: MENTORIA ELITE]</h1>
        <p class="text-slate-400 mb-8 border-b border-slate-800 pb-8">Preencha o formulário abaixo com atenção. Nossa
            equipe técnica avaliará o perfil do seu ISP para garantir o alinhamento estratégico com o Método dos 15K.
        </p>

        <?php if (isset($_GET['erro'])): ?>
            <div class="mb-8 p-4 bg-red-500/10 border border-red-500/20 rounded-md text-red-500 font-mono text-sm">
                [ERRO]
                <?php echo $_GET['erro'] === 'email_invalido' ? 'E-mail corporativo inválido ou dados incompletos.' : 'Falha na comunicação com os servidores. Tente novamente.'; ?>
            </div>
        <?php endif; ?>

        <form action="api/processa_aplicacao.php" method="POST" class="space-y-6">

            <!-- Dados Básicos -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div>
                    <label class="block text-sm font-mono text-emerald-500 mb-2">NOME COMPLETO *</label>
                    <input type="text" name="nome" required
                        class="w-full bg-slate-950 border border-slate-700 rounded-md py-3 px-4 text-white focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors">
                </div>
                <div>
                    <label class="block text-sm font-mono text-emerald-500 mb-2">EMAIL CORPORATIVO *</label>
                    <input type="email" name="email" required
                        class="w-full bg-slate-950 border border-slate-700 rounded-md py-3 px-4 text-white focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors">
                </div>
                <div>
                    <label class="block text-sm font-mono text-emerald-500 mb-2">WHATSAPP *</label>
                    <input type="tel" name="whatsapp" required
                        class="w-full bg-slate-950 border border-slate-700 rounded-md py-3 px-4 text-white focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors">
                </div>
                <div>
                    <label class="block text-sm font-mono text-emerald-500 mb-2">EMPRESA / ISP *</label>
                    <input type="text" name="empresa" required
                        class="w-full bg-slate-950 border border-slate-700 rounded-md py-3 px-4 text-white focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors">
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-mono text-emerald-500 mb-2">QTD. DE ASSINANTES ATUAL *</label>
                    <select name="assinantes" required
                        class="w-full bg-slate-950 border border-slate-700 rounded-md py-3 px-4 text-white focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors">
                        <option value="">Selecione...</option>
                        <option value="Menos de 1.000">Menos de 1.000</option>
                        <option value="1.000 a 3.000">1.000 a 3.000</option>
                        <option value="3.001 a 5.000">3.001 a 5.000</option>
                        <option value="5.001 a 10.000">5.001 a 10.000</option>
                        <option value="10.001 a 15.000">10.001 a 15.000</option>
                        <option value="Mais de 15.000">Mais de 15.000</option>
                    </select>
                </div>
            </div>

            <!-- Perguntas Estratégicas -->
            <div class="border-t border-slate-800 pt-8 space-y-8">
                <h2 class="text-xl font-bold text-white mb-6">Diagnóstico Estratégico</h2>

                <div>
                    <label class="block text-sm font-mono text-emerald-500 mb-2">1. Qual o seu diferencial? (Baseado nos
                        20 anos de campo e Lázaro) *</label>
                    <textarea name="resp_1" rows="3" required
                        class="w-full bg-slate-950 border border-slate-700 rounded-md py-3 px-4 text-white focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors"></textarea>
                </div>

                <div>
                    <label class="block text-sm font-mono text-emerald-500 mb-2">2. Qual a grande transformação que você
                        pode gerar? (Foco no salto 3k para 15k) *</label>
                    <textarea name="resp_2" rows="3" required
                        class="w-full bg-slate-950 border border-slate-700 rounded-md py-3 px-4 text-white focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors"></textarea>
                </div>

                <div>
                    <label class="block text-sm font-mono text-emerald-500 mb-2">3. Qual o resultado real que você pode
                        prometer para seus clientes? (Visibilidade, Resiliência e Governança) *</label>
                    <textarea name="resp_3" rows="3" required
                        class="w-full bg-slate-950 border border-slate-700 rounded-md py-3 px-4 text-white focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors"></textarea>
                </div>

                <div>
                    <label class="block text-sm font-mono text-emerald-500 mb-2">4. Quais palavras podem ser associadas
                        a essa transformação? *</label>
                    <input type="text" name="resp_4" required
                        class="w-full bg-slate-950 border border-slate-700 rounded-md py-3 px-4 text-white focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors">
                </div>

                <div>
                    <label class="block text-sm font-mono text-emerald-500 mb-2">5. Quais são os problemas que você
                        resolve? (Cegueira de tráfego, gargalos e quedas) *</label>
                    <textarea name="resp_5" rows="3" required
                        class="w-full bg-slate-950 border border-slate-700 rounded-md py-3 px-4 text-white focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors"></textarea>
                </div>

                <div>
                    <label class="block text-sm font-mono text-emerald-500 mb-2">6. O que te torna único?
                        (Arquiteto-Desenvolvedor) *</label>
                    <textarea name="resp_6" rows="3" required
                        class="w-full bg-slate-950 border border-slate-700 rounded-md py-3 px-4 text-white focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors"></textarea>
                </div>

                <div>
                    <label class="block text-sm font-mono text-emerald-500 mb-2">7. Proposta de valor e efetividade.
                        *</label>
                    <textarea name="resp_7" rows="3" required
                        class="w-full bg-slate-950 border border-slate-700 rounded-md py-3 px-4 text-white focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors"></textarea>
                </div>

                <div>
                    <label class="block text-sm font-mono text-emerald-500 mb-2">8. Perfil do cliente ideal. *</label>
                    <textarea name="resp_8" rows="3" required
                        class="w-full bg-slate-950 border border-slate-700 rounded-md py-3 px-4 text-white focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition-colors"></textarea>
                </div>
            </div>

            <!-- Anti-spam Honeypot -->
            <input type="text" name="hp_field" style="display:none" tabindex="-1" autocomplete="off">

            <div class="pt-8">
                <button type="submit"
                    class="w-full py-4 bg-emerald-500 text-slate-950 font-bold rounded-md hover:bg-emerald-400 transition-colors shadow-lg shadow-emerald-500/30 text-lg">
                    [ SUBMETER APLICAÇÃO PARA ANÁLISE ]
                </button>
            </div>

        </form>
    </div>
</div>

<?php require 'includes/footer.php'; ?>