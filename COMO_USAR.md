# 📻 VIVAM HOSTING • Plataforma Completa de Apps de Rádio & TV

Este ecossistema foi construído para atender exatamente às necessidades do seu pai:
1. **Painel Master (Dashboard SaaS)** para ele criar, gerenciar e armazenar todos os aplicativos de rádios e TV criados.
2. **Painel Administrativo do Cliente com Login e Senha** para o cliente gerenciar a própria rádio sem precisar de ajuda técnica.
3. **Aplicativo do Ouvinte (Player PWA)** ultra-moderno com equalizador radial 360°, logo estática no centro, TV ao vivo, PIX e grade de horários.

---

## 🔗 Links de Acesso Local no Navegador

- 🚀 **Painel Master do Pai (Dashboard & Criador)**: [http://localhost:3333/gerador.html](http://localhost:3333/gerador.html)
- ⚙️ **Painel Administrativo do Cliente (Com Login)**: [http://localhost:3333/admin.html](http://localhost:3333/admin.html)
- 📻 **Aplicativo da Rádio Vivam no Ar**: [http://localhost:3333/index.html](http://localhost:3333/index.html)

---

## 🛠️ Como Funciona o Sistema Completo

### 1. Painel Master do seu Pai (`gerador.html`)
- **Dashboard Geral**: Mostra cards com o total de rádios criadas, transmissões de áudio ativas, canais de TV e clientes cadastrados.
- **Gerenciador de Aplicativos**: Cada rádio criada fica guardada com seu logo, nome, cidade e **dados de acesso (login e senha do cliente)**.
- **Botão "Acesso WhatsApp"**: Copia uma mensagem pronta e formatada com os links e credenciais para ele enviar direto no WhatsApp do cliente com 1 clique!
- **Botão "Baixar Pacote ZIP"**: Gera na hora um arquivo `.zip` com o `index.html` (player) e o `admin.html` (painel do cliente já configurado com a senha dele).
- **Criador com Simulador de Smartphone**: Ele pode criar novas rádios com prévia em tempo real dentro de um iPhone na tela.

### 2. Painel Administrativo do Cliente (`admin.html`)
- **Protegido por Login e Senha**: Ao abrir, exige o usuário e senha definidos pelo seu pai.
  *(Padrão inicial da Rádio Vivam: Usuário `admin` | Senha `vivam123`)*.
- **Área de Gestão do Cliente**:
  - Trocar a **Logomarca** (upload direto do computador).
  - Trocar o **Pano de Fundo (Wallpaper)** com fotos da igreja ou rádio.
  - Alterar o **Streaming de Áudio e Canal de TV**.
  - Gerenciar a **Campanha de Doação / PIX** ("Projeto Bíblia Sagrada para Todos").
  - Configurar **WhatsApp, Instagram, YouTube e Facebook**.
  - Editar os horários e nomes da **Grade de Programação**.
  - Botão de **Logout / Sair** no rodapé.

### 3. Aplicativo dos Ouvintes (`index.html`)
- Design Apple Obsidian Dark.
- **Logo central estática e fixa** com o efeito de retângulos radiais em 360° no fundo reagindo ao som.
- Player de TV ao vivo embutido em card dedicado.
- Mural de recados e pedidos de oração direto no WhatsApp.
