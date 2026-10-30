# Lab Activity 9 - Barangay Bakuna Tracker: Blade, Tailwind & Vite

**Course:** 4-334 Full-Stack Web Development  
**Student Name:** Christian Mari Civiles  
**Repository Name:** LabActivity9-Civiles  
**Dashboard Title:** Bakuna Tracker - Purok Civiles  

---

## Overview
This project upgrades the Barangay Matina Crossing Health Center vaccination desk dashboard into a modular Laravel presentation layer using Blade directives, `@yield` master layouts, Blade components, and Tailwind CSS v3 via the Vite asset pipeline.

---

## Seeded Health Worker Credentials
To test authentication and protected routes (`/dashboard` and `/schedule`), sign in using the seeded health worker credentials:

* **Email:** `nurse.civiles@bakuna.test`
* **Password:** `bakuna2026`

---

## Step-by-Step Setup Instructions

1. **Install PHP and Node dependencies:**
   ```bash
   composer install
   npm install
   ```

2. **Run database migrations and seed data:**
   ```bash
   php artisan migrate:fresh --seed
   ```

3. **Start the asset pipeline and local server in separate terminals:**

   * **Terminal 1 (Vite Asset Pipeline):**
     ```bash
     npm run dev
     ```

   * **Terminal 2 (Laravel Artisan Server):**
     ```bash
     php artisan serve
     ```

4. **Access the application:**  
   Open `http://127.0.0.1:8000` in your browser. You will be redirected to `/login`.
