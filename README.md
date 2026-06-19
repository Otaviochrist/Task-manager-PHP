# TaskManager — Gerenciador de Chamados

🇧🇷 Português | 🇺🇸 English

---

## 🇧🇷 Português

### Sobre o projeto

Exercício prático desenvolvido para fixar padrões profissionais de OOP em PHP — Repository Pattern e Service Layer.

O programa gerencia chamados de suporte, permitindo adicionar, buscar e listar de forma organizada e encapsulada.

### Como usar

1. Cria um chamado novo
2. Adiciona ao repositório
3. Busca ou lista conforme necessário

### Exemplo

```php
$repo = new ChamadosRepository();

$chamado1 = new Chamados(123, "Notebook Dell", "teclado não funciona");
$chamado2 = new Chamados(456, "Mouse", "clique duplo lento");

$repo->adicionar($chamado1);
$repo->adicionar($chamado2);

$service = new ChamadosService($repo);
$service->exibirTodos();
```

### O que aprendi desenvolvendo este projeto

- Encapsulamento com propriedades `private` e getters/setters
- Repository Pattern — gerenciar coleções de objetos
- Service Layer — lógica de negócio centralizada
- Injeção de dependência via construtor
- Separação de responsabilidades

### Tecnologias

- PHP 8.5.6
- Git

---

## 🇺🇸 English

### About the project

A hands-on exercise to reinforce professional OOP patterns in PHP Repository Pattern and Service Layer.

The program manages support tickets, allowing you to add, search, and list in an organized and encapsulated way.

### How to use

1. Create a new ticket
2. Add it to the repository
3. Search or list as needed

### Example

```php
$repo = new ChamadosRepository();

$chamado1 = new Chamados(123, "Dell Notebook", "keyboard not working");
$chamado2 = new Chamados(456, "Mouse", "double-click slow");

$repo->adicionar($chamado1);
$repo->adicionar($chamado2);

$service = new ChamadosService($repo);
$service->exibirTodos();
```

### What I learned building this project

- Encapsulation with `private` properties and getters/setters
- Repository Pattern — manage object collections
- Service Layer — centralized business logic
- Dependency injection via constructor
- Separation of concerns

### Tech stack

- PHP 8.5.6
- Git
