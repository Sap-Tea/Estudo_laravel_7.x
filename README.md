# Estudo Laravel 7.x

Repositório dedicado ao estudo do framework Laravel 7.x.

## 📋 Requisitos

- PHP >= 7.2.5
- Composer
- Extensões PHP necessárias para o Laravel
- Node.js e NPM (para frontend)

## 🚀 Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/Sap-Tea/estudo_laravel_7.x.git
   cd estudo_laravel_7.x
   ```

2. Instale as dependências do PHP:
   ```bash
   composer install
   ```

3. Configure o arquivo `.env`:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure o banco de dados no arquivo `.env`

5. Execute as migrações:
   ```bash
   php artisan migrate
   ```

6. Instale as dependências do frontend:
   ```bash
   npm install
   npm run dev
   ```

7. Inicie o servidor de desenvolvimento:
   ```bash
   php artisan serve
   ```

## 📝 Licença

Este projeto está sob a licença MIT - veja o arquivo [LICENSE](LICENSE) para mais detalhes.

## 🤝 Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues e enviar pull requests.
