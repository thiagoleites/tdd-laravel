# 📰 News Portal — Laravel + TDD

![Laravel](https://img.shields.io/badge/Laravel-13-red)
![PHP](https://img.shields.io/badge/PHP-8.3+-blue)
![Tests](https://img.shields.io/badge/Tests-Pest-green)
![Database](https://img.shields.io/badge/Database-SQLite-lightgrey)
![Status](https://img.shields.io/badge/Status-In%20Development-yellow)

Portal de notícias desenvolvido com **Laravel 13** utilizando **TDD (Test-Driven Development)**.

Este projeto tem como objetivo demonstrar a construção de um sistema completo seguindo o ciclo clássico de TDD:

**Red → Green → Refactor**

Cada funcionalidade é criada **a partir de testes automatizados**, garantindo maior qualidade de código, segurança e facilidade de manutenção.

---

# 🌐 Demo

A aplicação pode ser acessada em:

**https://laravel.testeprovisorio.com.br**

---

# 🎯 Objetivo do projeto

Este projeto foi criado para:

* praticar **TDD com Laravel**
* demonstrar **boas práticas de arquitetura**
* construir um **portal de notícias completo**
* utilizar **testes automatizados com Pest**
* evoluir o sistema de forma incremental

---

# 🧠 Conceitos aplicados

* Test Driven Development (TDD)
* Clean Code
* Domain driven structure
* Feature testing
* Database testing
* Factory states
* Role based authorization

---

# ⚙️ Stack utilizada

| Tecnologia   | Descrição           |
| ------------ | ------------------- |
| Laravel 13   | Framework principal |
| PHP 8.3+     | Linguagem backend   |
| Pest         | Framework de testes |
| SQLite       | Banco de dados      |
| Eloquent ORM | ORM do Laravel      |

---

# 🧪 Testes

Os testes são executados utilizando **Pest** e banco **SQLite em memória**, garantindo rapidez e isolamento.

```bash
php artisan test
```

Estratégia aplicada:

```
RED → escrever teste
GREEN → implementar mínimo necessário
REFACTOR → melhorar código
```

---

# 📦 Estrutura do projeto

```
app
 ├ Models
 ├ Http
 │   ├ Controllers
 │   └ Middleware
 ├ Policies
 └ Services

database
 ├ migrations
 ├ factories
 └ seeders

tests
 ├ Feature
 └ Unit
```

---

# 🧱 Funcionalidades

## Autenticação

* Login
* Logout
* Proteção de rotas
* Controle de usuários ativos/inativos

## Usuários

* criação de usuários
* roles (admin, author)
* factories para testes

## Categorias

* CRUD completo
* slug único
* categorias ativas/inativas

## Posts / Notícias

* criação de posts
* suporte para blog e notícias
* status de publicação
* autoria

## Portal público

* listagem de notícias
* página individual por slug
* filtro por categoria
* paginação

## Painel administrativo

* gerenciamento de posts
* gerenciamento de categorias
* gerenciamento de usuários

---

# 🗂 Estrutura do banco

## users

```
id
name
email
password
role
is_active
timestamps
```

## categories

```
id
name
slug
description
is_active
timestamps
```

## posts

```
id
type
title
slug
excerpt
content
cover_image
status
published_at
user_id
category_id
timestamps
```

---

# 📊 Progresso do projeto

| Módulo             | Progresso |
| ------------------ | --------- |
| Infraestrutura TDD | 100%      |
| Usuários           | 100%      |
| Autenticação       | 0%        |
| Categorias         | 0%        |
| Posts              | 0%        |
| Portal público     | 0%        |
| Painel admin       | 0%        |
| Autorização        | 0%        |
| Busca e filtros    | 0%        |

---

# 🚀 Roadmap

### Fase 1

* Users
* Auth
* Categories

### Fase 2

* Posts
* Public portal
* Slugs

### Fase 3

* Admin dashboard
* Policies
* Permissions

### Fase 4

* Search
* SEO
* Comments
* API

---

# 📚 Aprendizado

Este projeto demonstra na prática:

* como aplicar **TDD em Laravel**
* como estruturar **testes de feature**
* como usar **factories e states**
* como evoluir um sistema de forma incremental

---

# 👨‍💻 Autor

Thiago Leite
FullStack Developer

---

# 📜 Licença

Projeto criado para fins educacionais.
