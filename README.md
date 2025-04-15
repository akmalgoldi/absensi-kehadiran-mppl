# 📚 Aplikasi Kuis Online Sederhana

## 📝 Deskripsi Proyek
**Aplikasi Kuis Online** adalah Sistem berbasis web yang memungkinkan pengguna mengerjakan kuis secara digital, dengan fitur registrasi, login, pengerjaan soal, dan penilaian otomatis. Admin dapat menambahkan soal melalui dashboard, sementara pengguna dapat melihat riwayat skor. Dibangun menggunakan PHP, MySQL, HTML, dan CSS, 

---

## 🎯 Fitur Utama
- Registrasi dan login pengguna
- Input soal kuis (pertanyaan, pilihan, jawaban benar)
- Menjawab soal satu per satu
- Penilaian otomatis
- Penyimpanan skor dan riwayat skor per user
- Logout akun

## 🛠️ Teknologi yang Digunakan
- **Bahasa Pemrograman:** PHP
- **Database:** MySQL
- **Frontend:** HTML, CSS

## 📁 Struktur Folder
kuis-online/
│
├── config/
│   └── koneksi.php               # file koneksi ke database
│
├── auth/
│   ├── register.php              # proses registrasi
│   ├── login.php                 # proses login
│   └── logout.php                # proses logout
│
├── soal/
│   ├── tambah.php                # form input soal kuis
│   ├── simpan.php                # proses simpan soal ke DB
│   └── tampil.php                # tampilkan soal satu per satu
│
├── hasil/
│   ├── penilaian.php             # proses penilaian otomatis
│   └── riwayat.php               # tampilkan riwayat skor user
│
├── index.php                     # halaman utama (login / redirect)
├── dashboard.php                 # setelah login
├── kuis.php                      # halaman kuis
├── skor.php                      # tampilkan skor langsung
└── style.css                     # styling dasar

## 👥 Anggota Kelompok

- Akmal Goldi Bazarghan – Back-End  
- Mulya Adi Putra – Front-End  
- Nabil Mihalli Atstsaqiv – Front-End  
- M. Alan Daulay – UI/UX Designer  
- Muhammad Dzaky Danarta – Back-End

## 🔧 Peran Anggota

### 🔸 Owner – Akmal Goldi Bazarghan  
Bertanggung jawab atas pengelolaan utama proyek di GitHub, memastikan seluruh proses pengembangan berjalan sesuai rencana, serta mengkoordinasi pembagian tugas tiap anggota.

### 🔸 Maintainer – Muhammad Dzaky Danarta  
Menjaga kualitas kode, melakukan pengecekan terhadap pull request, dan memastikan proyek tetap berjalan dengan struktur yang rapi serta bebas dari error saat dijalankan.

### 🔸 Developer – Mulya Adi Putra  
Bertugas mengembangkan sisi antarmuka pengguna (frontend) aplikasi kuis online, memastikan tampilan mudah digunakan dan sesuai dengan kebutuhan pengguna.

### 🔸 Developer – Nabil Mihalli Atstsaqiv  
Bertugas membantu pengembangan frontend, serta mengintegrasikan tampilan dengan fungsionalitas dasar aplikasi kuis.

### 🔸 Reporter – M. Alan Daulay  
Mendokumentasikan seluruh proses pengembangan, membuat laporan, serta mengumpulkan file deskripsi tugas anggota. Juga bertugas menambahkan dosen sebagai reporter ke repositori.
