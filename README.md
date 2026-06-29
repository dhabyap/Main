# Main Project

This project is a portfolio application built with Laravel and Next.js.

## Prerequisites

- PHP 8.2+
- Composer
- Node.js & NPM
- MySQL

## Local Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/dhabyap/Main.git
   cd Main
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment Configuration**
   - Copy the example environment file:
     ```bash
     cp .env.example .env
     ```
   - Update `.env` with your local database credentials.

4. **Generate App Key**
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations**
   ```bash
   php artisan migrate
   ```

6. **Build Assets**
   ```bash
   npm run build
   ```

7. **Serve**
   ```bash
   php artisan serve
   ```

## Shared Hosting Deployment

1. **Upload Files**: Upload project files to your server (above `public_html`).
2. **Public Folder**: Move contents of `public/` to `public_html/`.
3. **Index.php**: Update the `require` paths in `public_html/index.php` to point to the project root.
4. **Environment**: Create a `.env` file on the server with `APP_ENV=production` and `APP_DEBUG=false`.
5. **Permissions**: Set 775 permissions for `storage/` and `bootstrap/cache/`.
