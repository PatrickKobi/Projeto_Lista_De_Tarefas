# 📋 Lista de Tarefas - CRUD em PHP com JSON, jQuery e JavaScript

Este é um projeto simples e didático de gerenciamento de tarefas que implementa as 4 operações básicas do **CRUD** (Create, Read, Update, Delete), utilizando **PHP**, **JSON**, **JavaScript** e **jQuery** para uma experiência mais dinâmica no navegador.

## 🚀 Funcionalidades

- ✅ **Criar** novas tarefas com formulário dinâmico
- 📋 **Listar** tarefas usando requisições AJAX e JSON
- ✏️ **Editar** tarefas em tempo real
- 🗑️ **Excluir** tarefas sem recarregar a página

## 🛠️ Tecnologias Utilizadas

- PHP (puro)
- JavaScript (puro e com jQuery)
- JSON (para comunicação entre front e back-end)
- HTML e CSS (básico)
- PostgreSQL (via PDO)
- PDO para conexão com o banco de dados

## 📁 Estrutura do Projeto

│
├── actions/                  # Scripts PHP responsáveis pelas ações do CRUD
│   ├── create.php            # Criação de nova tarefa
│   ├── delete.php            # Exclusão de tarefa
│   ├── update.php            # Atualização de tarefa (título)
│   └── update-progress.php   # Atualização de progresso/status (checkbox)
│
├── database/                 # Conexão com o banco de dados
│   └── conn.php              # Script de conexão PDO
│
├── src/                      # Recursos estáticos do front-end
│   ├── images/               # Imagens utilizadas no projeto
│   ├── javascript/           # Scripts JS e jQuery
│   └── styles/               # Arquivos CSS
│
├── index.php                 # Página principal com a interface da aplicação

## 📦 Banco de Dados

Crie a tabela 'task' com o seguinte SQL:

-> Comando SQL
CREATE TABLE task (
  id SERIAL PRIMARY KEY,
  description VARCHAR(255) NOT NULL,
  completed BOOLEAN
);

## Obrigado por visitar este projeto! 💙

Este gerenciador de tarefas foi desenvolvido com o objetivo de praticar e demonstrar conceitos fundamentais de PHP, AJAX com jQuery, JSON e integração com banco de dados.
Sinta-se à vontade para usar, modificar e contribuir com melhorias. Toda sugestão é bem-vinda!

Se este projeto te ajudou de alguma forma, considere deixar uma estrela ⭐ no repositório ou compartilhá-lo com alguém que possa se beneficiar.

