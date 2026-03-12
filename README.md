# Hasil Test Junior IT Developer - Farid Nur Raidnanda
1. **Soal 1:** Aplikasi simulasi perhitungan angsuran berdasarkan harga OTR, DP, dan Jangka Waktu.
2. **Soal 2:** Query database untuk menghitung total angsuran jatuh tempo per 14 Agustus 2024.
3. **Soal 3:** Kalkulasi denda keterlambatan (0,1% per hari) untuk angsuran yang belum dibayar.

---

## 🛠️ Prasyarat Sistem (Prerequisites)
Sebelum menjalankan aplikasi, pastikan sistem komputer sudah terinstall:
- **PHP** (Minimal versi 8.1 / 8.2 atau yang terbaru)
- **Composer** 
- **MySQL** 

---

## 🚀 Langkah-Langkah Instalasi & Konfigurasi


### 1. Ekstrak File atau Clone Repository
Buka terminal (Command Prompt / PowerShell / Git Bash), lalu arahkan ke folder project ini.

### 2. Install Dependency PHP
Jalankan perintah berikut untuk mengunduh semua *library* yang dibutuhkan oleh Laravel:
```bash
composer install
```
### 3. Setup Environment File (.env)
Copy file .env.example dan ubah namanya menjadi .env. 
### 4. Generate Application Key
Jalankan perintah ini untuk membuat security key aplikasi:
```bash
php artisan key:generate
```
### 5. Konfigurasi Database
Buka phpMyAdmin.

Buat sebuah database baru yang kosong (Samakan nama database dengan yang ada di .env).

### 6. Jalankan Migrasi dan Seeder
Langkah ini akan membuat tabel secara otomatis dan memasukkan data dummy sesuai soal ke dalam database.
```bash
php artisan migrate:fresh --seed
```
### 7. Jalankan Local Server
Jalankan server bawaan Laravel:
```bash
php artisan serve
```

Setelah server berjalan, buka browser dan akses URL berikut:
👉 http://localhost:8000


Terima kasih atas waktu dan kesempatan yang diberikan untuk mengikuti tahapan tes ini.