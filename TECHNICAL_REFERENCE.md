# Referência Técnica: BGP Consultoria Landing Page (High Ticket)

## Arquitetura Geral

- **Frontend:** HTML5, TailwindCSS (CDN), fontes Inter e JetBrains Mono (padrão NOC Standard 5.1). Dark e Light mode integrado via selectors Tailwind.
- **Backend:** PHP 8 nativo processando webhooks e lógicas das ferramentas da lead magnet.
- **Integração:** Webhook HMAC SHA256 com a API Lázaro (`lazaro.bgpconsultoria.com.br/api/v1/leads`).

## Credenciais & Variáveis de Ambiente
>
> [!IMPORTANT]
> As credenciais documentadas abaixo são utilizadas para assinaturas de webhook e segurança interna dos endpoints.

| Serviço | Chave/Constante | Valor em Uso (Atual de Código) |
| --- | --- | --- |
| Lázaro Webhook HMAC | `WEBHOOK_SECRET` | `bgp_noc_secret_key_2026` |
| Endpoint Lázaro API | `FASTAPI_URL` | `https://lazaro.bgpconsultoria.com.br/api/v1/leads` |

*O Webhook Secret deve ser sincronizado com a configuração da API FastAPI no servidor backend principal.*

## Ferramentas Gravadas (Lead Magnet)

- **Gerador BGP (RouterOS 7):** Localizado em `tools/bgp-gen.php`. Gera configurações de eBGP/iBGP based em ASN local/remoto e IPs de PTP.
- **Calculadora IPv6 (GMP):** Localizado em `tools/ipv6-calc.php`. Estruturação tática de bloco IPv6 (v1).
- **Scanner CGNAT Netmap:** Localizado em `tools/cgnat.php`. Cria regras netmap 1:1 NAT para Mikrotik.

## Segurança

- Proteção Anti-Brute Force via Rate Limiting de sessão (`$_SESSION['tool_requests'] < 50` por hora) embutida nativamente nos endpoints de ferramentos web. Adicionado filter_inputs em todos os campos.
