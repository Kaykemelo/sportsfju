# SportsFJU

Projeto desenvolvido em PHP com MySQL, usando HTML, Bootstrap e Programação Orientada a Objetos (POO).

Este sistema permite gerenciar campeonatos esportivos, com controle de:
- Campeonatos
- Categorias
- Times
- Jogadores
- Partidas
- Rodadas

Ele está dividido em duas partes:
1. **Web (pública)**: exibe informações do projeto e mapa de localização.
2. **Administrativa (admin)**: acesso restrito para gerenciamento de todas as entidades (campeonatos, categorias, times, jogadores, etc).

---

## Estrutura do Projeto

Visão geral da estrutura de pastas:

├── assets/ → arquivos estáticos: CSS, imagens etc.
├── conexao/ → configurações de conexão com o banco de dados
├── controller/ → lógicas de controle (controller)
├── model/ → modelos de dados (classes que representam entidades)
├── template/ → templates/views comuns (header, footer, etc.)
├── view/ → views específicas (web pública + admin)
└── index.php → ponto de entrada principal      


---

## Tecnologias Usadas

- PHP
- MySQL
- HTML
- Bootstrap
- POO

---

## Como usar / instalar

1. Clone este repositório:  
   ```bash
   git clone https://github.com/Kaykemelo/sportsfju.git
2.Configure o ambiente local:

- Instale o PHP e MySQL (ou use algo como XAMPP / WAMP / MAMP).

- Crie um banco de dados MySQL.

- Importe o arquivo de dump SQL ou crie as tabelas necessárias.

- No arquivo de configuração de conexão (conexao/), ajuste host, usuário, senha e nome do banco.

3.Coloque os arquivos no diretório público do servidor local (ou use servidor embutido do PHP).

4.Acesse via navegador:

- Web pública: http://localhost/sportsfju/?route=rota&module=web

- Admin: http://localhost/sportsfju/?route=rota 

Funcionalidades Principais

- Gerenciar campeonatos

- Gerenciar categorias (criar, editar, deletar)

- Gerenciar times

- Gerenciar jogadores

- Criar/editar/excluir partidas

- Criar rodadas do campeonato

- Exibir resultados e atualização de tabela

- Interface web pública com mapa de localização do evento/projeto

Capturas de Tela / Demonstrações
Página Web (Pública)

![Página Web](https://github.com/Kaykemelo/sportsfju/blob/main/assets/images/pagina_web.png?raw=true)

[![Página FJU Web](https://github.com/Kaykemelo/sportsfju/blob/main/assets/images/pagina_fju_web.png?raw=true)](https://github.com/Kaykemelo/sportsfju/blob/main/assets/images/pagina_fju_web.png?raw=true)

[![Página de Campeonatos Web](https://github.com/Kaykemelo/sportsfju/blob/main/assets/images/pagina_de_campeonatos-web.png?raw=true)](https://github.com/Kaykemelo/sportsfju/blob/main/assets/images/pagina_de_campeonatos-web.png?raw=true)

[![Página de Contatos Web](https://github.com/Kaykemelo/sportsfju/blob/main/assets/images/pagina_de_contatos-web.png?raw=true)](https://github.com/Kaykemelo/sportsfju/blob/main/assets/images/pagina_de_contatos-web.png?raw=true)


Área Admin
- [![Página de Campeonatos Admin](https://github.com/Kaykemelo/sportsfju/blob/main/assets/images/pagina_de_campeonatos-admin.png?raw=true)](https://github.com/Kaykemelo/sportsfju/blob/main/assets/images/pagina_de_campeonatos-admin.png?raw=true)



Possíveis Melhorias / Extensões Futuras

- Validação e segurança de entradas (evitar SQL Injection, sanitização)

- Sistema de login mais robusto (senha forte, reset, criptografia)

- Dashboard mais visual (gráficos, estatísticas)

- API para permitir integração com apps móveis ou outras plataformas

- Internacionalização / suporte a múltiplos idiomas

## Contato

Se quiser ver mais projetos ou conversar sobre esse, me chama no LinkedIn:  
[LinkedIn](https://www.linkedin.com/in/Kaykeweb10/)
