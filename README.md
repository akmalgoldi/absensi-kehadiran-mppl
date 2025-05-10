# 🎯 QuizHub
QuizHub adalah aplikasi kuis online berbasis web, dengan fitur yang lebih sederhana dan ringan. Aplikasi ini memungkinkan seorang **host** untuk membuat dan menjalankan kuis secara langsung, serta membagikan PIN kepada peserta. Peserta (**player**) dapat bergabung dengan mudah hanya menggunakan **PIN dan nickname**, tanpa perlu melakukan login. Aplikasi ini dirancang untuk interaksi kuis yang cepat, praktis, dan menyenangkan, baik untuk kegiatan pembelajaran maupun hiburan.

---

## 📌 Fitur Utama

### 👨‍🏫 Host
- Register / Login
- Dashboard Host
- Membuat kuis baru
- Menambahkan pertanyaan dan jawaban
- Memulai sesi kuis dan generate PIN
- Melihat skor dan hasil akhir peserta
  
### 🧑‍🎓 Player
- Join kuis menggunakan PIN
- Memasukkan nickname
- Menunggu kuis dimulai
- Menjawab pertanyaan satu per satu secara live
- Melihat skor akhir atau peringkat

---

## 💻 Teknologi
- PHP Native
- MySQL (via phpMyAdmin)
- HTML, CSS, JavaScript (basic)
- Tanpa framework (sederhana)

---

## 🧩 Model Pengembangan
Proyek ini dikembangkan menggunakan **Model Iteratif**, yang memungkinkan tim membangun versi awal aplikasi secara cepat, lalu menyempurnakannya melalui beberapa iterasi berdasarkan feedback dan pengujian internal.

---

## ⚙️ Cara Menjalankan

1. Clone repo ini:
   ```bash
   git clone https://github.com/akmalgoldi/quizhub.git
   ```
2. Import file database.sql ke phpMyAdmin.
3. Atur koneksi database di: `config/db.php`
4. Jalankan project menggunakan XAMPP.
5. Buka browser dan akses:
   ```
   http://localhost/quizhub/public/

---

## 👥 Anggota Kelompok

- **Akmal Goldi Bazarghan**  
- **M. Alan Daulay**  
- **Muhammad Dzaky Danarta**  
- **Muhammad Yusran Abdullah**

---

## 🔧 Peran Anggota

### 🔸 **Owner – Akmal Goldi Bazarghan**  
Bertanggung jawab atas pengelolaan utama proyek di GitHub, memastikan seluruh proses pengembangan berjalan sesuai rencana, serta mengkoordinasi pembagian tugas tiap anggota dan menjaga kualitas keseluruhan proyek.

### 🔸 **Maintainer – M.Alan Daulay**  
Menjaga kualitas kode, melakukan pengecekan terhadap pull request, dan memastikan proyek tetap berjalan dengan struktur yang rapi serta bebas dari error saat dijalankan. Berperan dalam pemeliharaan dan perbaikan aplikasi.

### 🔸 **Developer – Muhammad Dzaky Danarta**  
Bertugas mengembangkan sisi antarmuka pengguna (frontend) aplikasi kuis online, memastikan tampilan mudah digunakan dan sesuai dengan kebutuhan pengguna serta mengintegrasikan tampilan dengan fungsionalitas dasar aplikasi kuis.

### 🔸 **Reporter – Muhammad Yusran Abdullah**  
Mendokumentasikan seluruh proses pengembangan, membuat laporan proyek, serta mengumpulkan file deskripsi tugas anggota. Bertanggung jawab dalam melaporkan kemajuan kepada dosen dan menambahkan dosen sebagai reporter ke repositori.

---
