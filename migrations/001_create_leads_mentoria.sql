CREATE DATABASE IF NOT EXISTS BGP_Consultoria_ISP;
USE BGP_Consultoria_ISP;

CREATE TABLE IF NOT EXISTS leads_mentoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    whatsapp VARCHAR(20),
    empresa_isp VARCHAR(255),
    qtd_assinantes VARCHAR(50),
    resp_1 TEXT, -- Diferencial
    resp_2 TEXT, -- Transformação
    resp_3 TEXT, -- Resultado Real
    resp_4 TEXT, -- Palavras Associadas
    resp_5 TEXT, -- Problemas Resolvidos
    resp_6 TEXT, -- O que torna único
    resp_7 TEXT, -- Proposta de Valor
    resp_8 TEXT, -- Cliente Ideal
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
