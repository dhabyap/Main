# Main Project

Portfolio / personal website built with **Laravel 10** (backend) + **TailwindCSS** UI.
Features:
- Hero section with dynamic data from `settings` table
- Tech‑stack marquee
- Services / capabilities grid
- Project registry (grid of projects, dark theme, mint accent)
- Blog listing with skeleton loading while data fetches
- About & contact sections
- Dark mode ready (Tailwind `dark` class)

Data source:
- MySQL database `uhdqgfls_portofolio` (tables: `projects`, `blogs`, `services`, `settings`, …)
- All content (titles, images, tags, etc.) pulled from DB via Eloquent models.

UI style:
- Dark background (`#1A1A1A`) with mint‑orange highlights (`#FF3300`).
- Custom “beam” borders, grain noise overlay, and skeleton shimmer.
- Responsive grid (mobile → tablet → desktop) built with Tailwind utilities.
- Accessible navigation (fixed navbar, mobile slide‑in menu).

Deploy steps (shared hosting):
1. Upload project files **above** `public_html`.
2. Move `public/` contents to `public_html/`.
3. Adjust `public_html/index.php` paths.
4. Create `.env` on server, set `APP_ENV=production`, `APP_DEBUG=false`,
   and DB credentials for the hosted MySQL.
5. Run `php artisan migrate` on server (via SSH or hosting console).
6. Run `npm run build` locally, then upload the generated `public/build/` folder.
7. Set proper permissions on `storage/` & `bootstrap/cache/`.

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
