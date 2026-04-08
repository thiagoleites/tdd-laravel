# 📰 Laravel News Portal (TDD)

![Laravel](https://img.shields.io/badge/Laravel-13-red)
![PHP](https://img.shields.io/badge/PHP-8.3+-blue)
![Pest](https://img.shields.io/badge/Tests-Pest-green)
![SQLite](https://img.shields.io/badge/Database-SQLite-lightgrey)
![TDD](https://img.shields.io/badge/Development-TDD-purple)
![Status](https://img.shields.io/badge/Status-In%20Progress-yellow)

Portal de notícias desenvolvido com **Laravel 13** utilizando **Test-Driven Development (TDD)**.

O projeto é construído seguindo o ciclo clássico:

**Red → Green → Refactor**

Cada funcionalidade nasce a partir de **testes automatizados**, garantindo maior qualidade de código, previsibilidade e segurança.

---

# 🌐 Aplicação

Acesse o projeto em:

**https://laravel.testeprovisorio.com.br**

---

# 🎯 Objetivo

Este projeto foi criado com foco educacional para demonstrar:

* desenvolvimento **orientado a testes**
* construção incremental de software
* boas práticas em **Laravel**
* arquitetura limpa e organizada
* uso de **factories e database testing**

---

# 🧠 Conceitos aplicados

* Test Driven Development (TDD)
* Clean Code
* Feature Testing
* Database Testing
* Factory States
* Role Based Authorization
* Domain Driven Thinking

---

# ⚙️ Stack

| Tecnologia   | Descrição           |
| ------------ | ------------------- |
| Laravel 13   | Framework principal |
| PHP 8.3+     | Linguagem backend   |
| Pest         | Framework de testes |
| SQLite       | Banco de dados      |
| Eloquent ORM | ORM do Laravel      |

---

# 🧪 Estratégia de Testes

O projeto utiliza **SQLite em memória** para executar testes rapidamente.

```bash
php artisan test
```

Fluxo de desenvolvimento:

```
1. RED
escrever teste que falha

2. GREEN
implementar o mínimo para passar

3. REFACTOR
melhorar código sem quebrar testes
```

---

# 🏗 Arquitetura do Projeto

```
app
 ├ Models
 ├ Http
 │   ├ Controllers
 │   ├ Requests
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

# 🧱 Módulos do sistema

## 👤 Usuários

* criação de usuários
* roles (admin, author)
* controle de status ativo/inativo
* factories para testes

---

## 🔐 Autenticação

* login
* logout
* proteção de rotas
* middleware de autenticação

---

## 🗂 Categorias

* CRUD completo
* slug único
* categorias ativas/inativas

---

## 📰 Posts

* criação de posts
* suporte para blog e notícias
* publicação programada
* autoria por usuário

---

## 🌍 Portal público

* listagem de notícias
* página individual por slug
* filtro por categoria
* paginação

---

## ⚙️ Painel administrativo

* gerenciamento de posts
* gerenciamento de categorias
* gerenciamento de usuários

---

# 🗄 Estrutura do banco

### users

```
id
name
email
password
role
is_active
timestamps
```

### categories

```
id
name
slug
description
is_active
timestamps
```

### posts

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

# 📊 Progresso do Projeto

| Módulo             | Progresso       |
| ------------------ | --------------- |
| Infraestrutura TDD | ██████████ 100% |
| Usuários           | ██████████ 100% |
| Autenticação       | █░░░░░░░░░ 10%  |
| Categorias         | ░░░░░░░░░░ 0%   |
| Posts              | ░░░░░░░░░░ 0%   |
| Portal público     | ░░░░░░░░░░ 0%   |
| Painel admin       | ░░░░░░░░░░ 0%   |
| Autorização        | ░░░░░░░░░░ 0%   |
| Busca              | ░░░░░░░░░░ 0%   |

---

# 🚀 Roadmap

### Fase 1

* Users
* Authentication
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

# 🧑‍💻 Desenvolvimento

Clonar o projeto

```bash
git clone https://github.com/seu-repositorio/news-portal
```

Entrar no diretório

```bash
cd news-portal
```

Instalar dependências

```bash
composer install
```

Rodar migrations

```bash
php artisan migrate
```

Executar aplicação

```bash
php artisan serve
```

---

# 🧪 Rodar testes

```bash
php artisan test
```

ou

```bash
./vendor/bin/pest
```

---

# 👨‍💻 Autor

Thiago Leite
FullStack Developer

---

# 📜 Licença

Projeto criado para fins educacionais para estudo de **Laravel + TDD**.
