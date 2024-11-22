# **Projeto de Microserviços com Docker**

Este repositório contém a implementação de um sistema baseado em microserviços utilizando Docker. O projeto inclui um servidor NGINX configurado para balanceamento de carga, uma aplicação PHP para inserção de dados em um banco MySQL, e a orquestração de todos os serviços via Docker Compose.

---

## **📋 Funcionalidades**
- Servidor NGINX configurado para balanceamento de carga.
- Aplicação PHP que insere dados aleatórios em uma tabela no MySQL.
- Banco de dados MySQL inicializado automaticamente com um script SQL.
- Orquestração completa dos serviços com Docker Compose.
- Conexões seguras e configuração modular para fácil manutenção.

---

## **🛠️ Tecnologias Utilizadas**
- **Docker**: Para criação e gerenciamento dos containers.
- **Docker Compose**: Para orquestração dos serviços.
- **PHP**: Para a aplicação principal.
- **NGINX**: Como servidor web e balanceador de carga.
- **MySQL**: Como banco de dados relacional.
- **Ubuntu**: Sistema operacional base para execução do projeto.

---

## **📂 Estrutura do Projeto**
```plaintext
.
├── Dockerfile               # Configuração do container PHP
├── docker-compose.yml       # Orquestração dos serviços
├── index.php                # Aplicação PHP
├── nginx.conf               # Configuração do NGINX
├── banco.sql                # Script SQL para inicializar o banco
├── README.md                # Documentação do projeto
```

## 📈 Estrutura de Rede
- NGINX funciona como proxy reverso e balanceador de carga.
- PHP-FPM (app) é acessado apenas pelo NGINX.
- MySQL (db) é acessado pelo PHP-FPM para persistir os dados.

## 📖 Próximos Passos
- HTTPS: Implementar suporte a HTTPS usando certificados (ex.: Let's Encrypt).
- Logs: Configurar um sistema centralizado para logs dos containers.
- Escalabilidade: Escalar o serviço app para múltiplas instâncias.
- Kubernetes: Migrar para Kubernetes para gerenciar os serviços em larga escala.
