<div align="center">
  <br />
  <h1>LAPORAN PRAKTIKUM <br>APLIKASI BERBASIS PLATFORM</h1>
  <br />
  <h2>MODUL 7 <br>TUGAS 2 - WEB CRUD MANAJEMEN PRODUK</h2>
  <br />
  <br />
  <img src="Logo_Telkom.png" alt="Logo Telkom" width="300">
  <br />
  <br />
  <br />
  <h3>Disusun Oleh :</h3>
  <p>
    <strong>Reli Gita Nurhidayati</strong><br>
    <strong>2311102025</strong><br>
    <strong>S1 IF-11-REG 01</strong>
  </p>
  <br />
  <h3>Dosen Pengampu :</h3>
  <p>
    <strong>Dimas Fanny Hebrasianto Permadi, S.ST., M.Kom</strong>
  </p>
  <br />
  <br />
  <h4>Asisten Praktikum :</h4>
  <strong>Apri Pandu Wicaksono</strong><br>
  <strong>Rangga Pradarrell Fathi</strong>
  <br /><br />
  <h2>LABORATORIUM HIGH PERFORMANCE
  <br>FAKULTAS INFORMATIKA
  <br>UNIVERSITAS TELKOM PURWOKERTO
  <br>2026</h2>
</div>

---

# 1. Dasar Teori

**CodeIgniter 4** adalah framework PHP berbasis MVC (Model-View-Controller) yang ringan dan cepat untuk membangun aplikasi web dinamis. Framework ini menyediakan struktur yang terorganisir sehingga memudahkan pengembangan aplikasi secara terstruktur.

**MVC (Model-View-Controller)** adalah pola arsitektur perangkat lunak yang memisahkan aplikasi menjadi tiga komponen utama. Model bertugas mengelola data dan logika bisnis, View bertugas menampilkan data kepada pengguna, dan Controller bertugas menjadi penghubung antara Model dan View.

**jQuery DataTables** adalah plugin jQuery yang digunakan untuk menambahkan fitur interaktif pada tabel HTML seperti pencarian data, pagination, dan pengurutan kolom secara otomatis. Data yang ditampilkan pada tabel menggunakan format **JSON** yang diambil dari server melalui AJAX.

**Bootstrap 5** adalah framework CSS yang digunakan untuk mempercepat pembuatan tampilan web yang responsif dan modern. **SweetAlert2** adalah jQuery plugin yang digunakan untuk menampilkan dialog konfirmasi yang lebih menarik dibandingkan dialog bawaan browser.

---

# 2. Tugas Praktikum - Web CRUD Manajemen Produk

Pada tugas ini dibuat sebuah aplikasi web untuk mengelola data produk menggunakan framework CodeIgniter 4 dengan database MySQL. Aplikasi memiliki 3 halaman fungsional yaitu halaman tabel data, halaman form tambah produk, dan halaman form edit produk.

Teknologi yang digunakan dalam tugas ini antara lain:
- **PHP** dengan Framework **CodeIgniter 4**
- **MySQL** sebagai database
- **Bootstrap 5** sebagai framework CSS
- **jQuery** dan **jQuery DataTables**
- **SweetAlert2** sebagai jQuery plugin
- **JSON** sebagai format data pada DataTables

---

# 3. Fitur Sistem

Sistem yang dibangun memiliki fitur-fitur sebagai berikut:
- Halaman tabel data produk dengan jQuery DataTables (JSON)
- Halaman form tambah produk
- Halaman form edit produk
- Fitur hapus data dengan konfirmasi SweetAlert2
- Fitur pencarian (search) pada tabel
- Pagination pada tabel
- CRUD lengkap (Create, Read, Update, Delete)
- Koneksi database MySQL menggunakan CodeIgniter Model

---

# 4. Struktur Folder

Berikut adalah struktur folder dari project:
```
manajemen-produk/
├── app/
│   ├── Config/
│   │   ├── Database.php
│   │   └── Routes.php
│   ├── Controllers/
│   │   └── ProdukController.php
│   ├── Models/
│   │   └── ProdukModel.php
│   └── Views/
│       └── produk/
│           ├── layout.php
│           ├── index.php
│           └── form.php
├── public/
├── vendor/
└── writable/
```

---

# 5. Cara Menjalankan Program

Berikut adalah langkah-langkah untuk menjalankan program:

1. Pastikan **XAMPP** sudah terinstall
2. Buka **XAMPP Control Panel** → Start **Apache** dan **MySQL**
3. Buka **phpMyAdmin** → buat database `manajemen_produk`
4. Jalankan query berikut untuk membuat tabel:
```sql
CREATE TABLE produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    kategori VARCHAR(50) NOT NULL,
    harga DECIMAL(10,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
5. Buka **CMD** → arahkan ke folder project:
```
cd C:\xampp\htdocs\manajemen-produk
```
6. Jalankan server:
```
php spark serve
```
7. Buka browser → akses:
```
http://localhost:8080/index.php/produk
```

---

# 6. Kesimpulan

Aplikasi web Manajemen Produk berhasil dibangun menggunakan framework CodeIgniter 4 dengan menerapkan pola arsitektur MVC. Aplikasi memiliki fungsionalitas CRUD yang lengkap dengan tampilan Bootstrap 5 yang responsif. Data produk ditampilkan menggunakan jQuery DataTables dengan format JSON sehingga tampilan tabel menjadi lebih interaktif. Fitur konfirmasi hapus data menggunakan SweetAlert2 sebagai implementasi jQuery plugin sesuai dengan spesifikasi teknis yang diberikan.
