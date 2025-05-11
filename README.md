
# 📊 DataWarga: Sistem Pendataan Digital RT/RW

![PHP](https://img.shields.io/badge/PHP-8.1%2B-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.0%2B-4479A1?logo=mysql&logoColor=white)
![GitHub License](https://img.shields.io/badge/License-MIT-blue?logo=github)
![Contributors](https://img.shields.io/badge/Contributors-4-2ea44f)

**DataWarga** adalah aplikasi web yang memodernisasi pendataan warga tingkat RT/RW dengan fitur manajemen data, analisis demografi, dan generator surat resmi. Dibangun menggunakan **PHP Native** dan **MySQL**, aplikasi ini dirancang untuk kemudahan penggunaan dan keamanan data.

---

## 🔁 Model Pengembangan

Proyek ini menggunakan **Iterative Model** sebagai pendekatan pengembangan perangkat lunak. 
Model ini memungkinkan pengembangan bertahap dalam siklus yang berulang, sehingga setiap versi aplikasi dapat diperbaiki dan ditingkatkan berdasarkan umpan balik pengguna dan pengujian sebelumnya. 
Setiap iterasi mencakup tahap analisis kebutuhan, perancangan, implementasi, dan evaluasi.

---

## 🚀 Fitur Unggulan

| Fitur                    | Deskripsi                                                                 |
|--------------------------|---------------------------------------------------------------------------|
| 🔒 **Autentikasi Admin** | Login/logout dengan manajemen sesi dan validasi peran RT/RW.              |
| 📝 **CRUD Data Warga**   | Tambah, edit, dan hapus data warga serta keluarga dengan validasi NIK unik.|
| 📈 **Analisis Demografi**| Statistik usia, jenis kelamin, pekerjaan, dan status perkawinan.          |
| 📄 **Generator Surat**   | Otomatisasi pembuatan surat (SKTM, nikah, domisili, dll).                 |
| 🔍 **Pencarian Cepat**   | Cari warga berdasarkan NIK, nama, atau filter tertentu.                   |

---

## 🛠️ Teknologi yang Digunakan

- **Frontend**: HTML5, CSS3, JavaScript  
- **Backend**: PHP  
- **Database**: MySQL  
- **Tools**: XAMPP, phpMyAdmin, GitHub  

---

## 📥 Instalasi

### 🔧 Prasyarat

- Web server seperti **XAMPP**, **LAMPP**, atau **MAMP**
- **PHP** versi ≥ 8.1
- **MySQL** versi ≥ 8.0

### 🚀 Langkah Instalasi

1. **Clone Repositori**
   ```bash
   git clone https://github.com/DataWarga-Team/DataWarga.git
   cd DataWarga
   ```

2. **Setup Database**
   - Buat database baru dengan nama `datawarga_db` di phpMyAdmin
   - Import skema database:
     ```bash
     mysql -u [username] -p datawarga_db < database/schema.sql
     ```
     Ganti `[username]` dengan username MySQL Anda.

3. **Konfigurasi Koneksi**
   - Salin file konfigurasi contoh:
     ```bash
     cp app/config/koneksi.example.php app/config/koneksi.php
     ```
   - Edit file `app/config/koneksi.php` sesuai kredensial Anda:
     ```php
     <?php
     $host     = "localhost";
     $user     = "root";
     $password = "";
     $database = "datawarga_db";
     ?>
     ```

4. **Jalankan Aplikasi**
   - Akses via browser:
     ```
     http://localhost/DataWarga/public/
     ```

---

## 👥 Tim Pengembang

| Nama                     | Peran                | 
|--------------------------|----------------------|
| Akmal Goldi Bazarghan    | Project Owner        | 
| M. Alan Daulay           | Backend & Maintainer | 
| Muhammad Dzaky Danarta   | Database Architect   | 
| Muhammad Yusran Abdullah | Frontend & Reporter  |

---

