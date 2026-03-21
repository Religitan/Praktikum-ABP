<div align="center">
  <br />
  <h1>LAPORAN PRAKTIKUM <br>APLIKASI BERBASIS PLATFORM</h1>
  <br />
  <h2>MODUL 6 <br>TUGAS COTS - WEB CRUD PRODUK</h2>
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

**CRUD** adalah singkatan dari *Create, Read, Update, Delete* yang merupakan operasi dasar dalam pengelolaan data pada sebuah sistem. Dalam pengembangan web, CRUD sering diimplementasikan untuk mengelola data secara dinamis tanpa perlu me-refresh halaman.

**jQuery DataTables** adalah plugin jQuery yang digunakan untuk menambahkan fitur interaktif pada tabel HTML, seperti pencarian data, pagination, dan pengurutan kolom secara otomatis. **LocalStorage** adalah fitur browser yang memungkinkan penyimpanan data secara lokal di sisi klien tanpa memerlukan server atau database eksternal.

---

# 2. Tugas COTS - Web CRUD Produk

Pada tugas ini dibuat sebuah halaman web sederhana untuk menampilkan dan mengelola data produk. Halaman web memiliki form input produk dan tabel data produk yang menggunakan jQuery DataTables.

Teknologi yang digunakan dalam tugas ini antara lain:
- **HTML**
- **CSS**
- **JavaScript**
- **Bootstrap**
- **jQuery**
- **DataTables**

---

# 3. Fitur Sistem

Sistem yang dibangun memiliki fitur-fitur sebagai berikut:
- Form input data produk
- Menampilkan data produk dalam tabel
- Fitur pencarian (search)
- Pagination pada tabel
- Tombol hapus data
- CRUD sederhana menggunakan object mapping
- Penyimpanan data menggunakan LocalStorage

---

# 4. Struktur Folder

Berikut adalah struktur folder dari project tugas COTS:
```
COTS/
├── index.html
├── css/
│   └── style.css
└── js/
    └── script.js
```

---

# 5. Cara Menjalankan Program

Berikut adalah langkah-langkah untuk menjalankan program:

1. Buka file `index.html` di browser
2. Masukkan data produk pada form yang tersedia
3. Klik tombol **Tambah Produk**
4. Data akan tampil secara otomatis di tabel
5. Data dapat dihapus menggunakan tombol **Hapus** pada baris yang dipilih

---

# 6. Kesimpulan

Program berhasil membuat sistem sederhana untuk mengelola data produk menggunakan teknologi web dasar dengan tampilan Bootstrap dan fitur tabel interaktif dari jQuery DataTables. Data yang dimasukkan tersimpan secara lokal menggunakan LocalStorage sehingga tetap tersedia meskipun halaman di-refresh.
