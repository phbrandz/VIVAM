# 📻 Rádio Vivam & VIVAM HOSTING • Sistema Completo

Sistema completo de transmissão, gerenciamento e geração de aplicativos PWA e players para rádios web e emissoras FM.

---

## 🔗 Links Rápidos de Acesso Local

1. 📻 **Rádio Vivam no Ar**: [http://localhost:3333/index.html](http://localhost:3333/index.html)  
   *Player moderno com equalizador radial 360°, logo central estática, grade de programação oficial, chat e TV Vivam.*

2. ⚙️ **Painel do Cliente (Admin da Rádio)**: [http://localhost:3333/admin.html](http://localhost:3333/admin.html)  
   *Painel visual para o administrador da rádio trocar imagem de fundo, logo, PIX do projeto missionário, campanhas e grade.*

3. 🚀 **Gerador de Apps & Players (Estilo Base44 Aprimorado)**: [http://localhost:3333/gerador.html](http://localhost:3333/gerador.html) *(ou [http://localhost:3333/apps.html](http://localhost:3333/apps.html))*  
   *A plataforma completa para criar, salvar e gerar aplicativos PWA e códigos de embed para clientes e outras rádios!*

---

## 🛠️ O Novo Gerador de Apps (`gerador.html`): O que foi Corrigido em Relação ao Base44

Criamos uma réplica profissional da página `/apps` da Base44, resolvendo todos os problemas técnicos e operacionais que travavam o negócio do seu pai:

### 1. Fim do Erro 403 Forbidden!
- **O problema antigo no Base44**: O código gerado fazia requisições para a API do Base44 para buscar o PIX, doações e promoções. Como o Base44 exige autenticação, quando o cliente colocava o código na hospedagem dele (`app.noar.net.br` ou cPanel), retornava erro 403 e ficava tudo em branco.
- **Como está agora**: O gerador embuti todos os dados de forma **100% auto-contida e auto-suficiente**. Não depende de nenhum servidor intermediário e nunca dá erro 403!

### 2. Simulador de Smartphone em Tempo Real
- Na coluna da direita, há um mockup realista de smartphone (com Dynamic Island e vidro).
- Qualquer letra que você digitar no formulário da esquerda, ou qualquer cor que trocar, **o player dentro do celular atualiza instantaneamente**!
- Você pode dar Play e ouvir o streaming tocando ao vivo dentro da moldura do celular!

### 3. Upload Direto de Fotos do Computador
- Em vez de obrigar o cliente ou seu pai a caçar links externos de imagens na internet, agora basta clicar em **"Escolher Imagem"** ou **"Escolher Logo"** e selecionar a foto do computador. O sistema converte automaticamente em Base64 e já salva tudo dentro do player!

### 4. Gerenciador de Clientes (Rádios Salvas)
- O seu pai pode salvar quantas rádios quiser (Rádio Vivam, Rádio Gospel, Rádio da Igreja X...).
- Todas ficam guardadas na aba **"Rádios Salvas"**. Ele pode alternar entre clientes, carregar, editar, duplicar ou excluir com 1 clique!
- Possui ferramenta de **Exportar / Importar Backup JSON**, para ele nunca perder a lista de rádios salvas.

### 5. Exportação em 1 Clique para a Hospedagem
- **"Copiar Embed (Iframe)"**: Para quem quer incorporar o player em um site WordPress ou portal.
- **"Baixar index.html Pronto"**: Gera o arquivo completo pronto para subir na hospedagem do cliente.
- **"Abrir em Nova Aba"**: Abre o player em tela cheia para testar antes de entregar ao cliente.

---

## 📂 Arquivos no Projeto

```
radio-vivam/
├── index.html              <- Aplicativo Web da Rádio Vivam (Logo estática + Radial 360°)
├── admin.html              <- Painel Administrativo para a Rádio Vivam
├── gerador.html            <- NOVO: Gerador de Apps PWA & Embeds para Clientes
├── apps.html               <- Atalho para o gerador (rota /apps)
├── config.json             <- Configurações padrão
├── salvar_config.php       <- Script de salvamento automático no servidor
├── COMO_USAR.md            <- Manual explicativo
└── assets/                 <- Imagens, logos e QR Codes
```
