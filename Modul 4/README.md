<div align="center">
  <br />
  <h1>LAPORAN PRAKTIKUM <br>APLIKASI BERBASIS PLATFORM</h1>
  <br />
  <h2>MODUL 4 <br>BOOTSTRAP</h2>
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

**Bootstrap** adalah framework CSS open-source yang digunakan untuk mempermudah pembuatan tampilan halaman web yang responsif dan konsisten. Bootstrap menyediakan berbagai komponen siap pakai seperti navbar, card, grid system, button, dan lainnya yang dapat langsung digunakan hanya dengan menambahkan class tertentu pada elemen HTML.

Salah satu keunggulan Bootstrap adalah **sistem grid** berbasis 12 kolom yang memungkinkan tampilan halaman menyesuaikan diri secara otomatis pada berbagai ukuran layar, mulai dari perangkat mobile hingga desktop. Bootstrap dapat dipanggil melalui **CDN (Content Delivery Network)** tanpa perlu mengunduh file secara lokal.

---

# 2. Bootstrap

Pada modul ini dibuat halaman web bertema Ramadan Mubarak menggunakan Bootstrap 5 tanpa native CSS. Tahapan yang dilakukan meliputi pembuatan navbar, hero section, card section, dan footer dengan memanfaatkan class-class bawaan Bootstrap.

Tools yang digunakan dalam praktikum ini antara lain:
- **Visual Studio Code**
- **Google Chrome**
- **HTML**
- **Bootstrap 5**

---

## Langkah 1 : Membuat File HTML dan Memanggil Bootstrap CDN

Langkah pertama adalah membuat file baru dengan nama `ramadan.html`, kemudian memanggil Bootstrap melalui CDN di dalam tag `<head>` agar seluruh class Bootstrap dapat digunakan tanpa perlu mengunduh file secara lokal:
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ramadan Mubarak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
</body>
</html>
```

Bootstrap dipanggil melalui CDN sehingga tidak perlu mengunduh file Bootstrap secara manual ke dalam project.

---

## Langkah 2 : Membuat Navbar

Navbar dibuat menggunakan class Bootstrap `navbar`, `navbar-expand-lg`, `navbar-dark`, dan `bg-success` untuk menghasilkan navigasi berwarna hijau dengan teks putih:
```html
<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="#">
            🌙 Ramadan Kareem
        </a>
    </div>
</nav>
```

Class `shadow` digunakan untuk menambahkan efek bayangan pada navbar agar tampak lebih menonjol dari konten di bawahnya.

---

## Langkah 3 : Membuat Hero Section

Hero section berisi judul utama dan deskripsi singkat yang ditampilkan di tengah halaman. Class `display-2` digunakan untuk ukuran teks yang besar, `text-warning` untuk warna kuning keemasan, dan `fw-bold` untuk ketebalan teks:
```html
<div class="container text-center mt-5">
    <h1 class="display-2 text-warning fw-bold mb-4">
        Ramadan Mubarak
    </h1>
    <p class="lead mb-4">
        Semoga bulan suci ini membawa keberkahan, kedamaian, dan kebahagiaan bagi kita semua.
    </p>
</div>
```

Class `lead` digunakan untuk membuat paragraf deskripsi tampil lebih besar dari teks biasa, sedangkan `mt-5` dan `mb-4` mengatur jarak atas dan bawah elemen.

---

## Langkah 4 : Membuat Card Section dengan Bootstrap Grid

Tiga card dibuat menggunakan sistem grid Bootstrap dengan class `row` dan `col-md-4` agar setiap card menempati sepertiga lebar halaman pada layar medium ke atas:
```html
<div class="container mt-5">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card text-center shadow">
                <div class="card-body">
                    <h4 class="card-title">🌙 Puasa</h4>
                    <p class="card-text">
                        Menahan diri dari makan, minum, dan hawa nafsu dari subuh hingga maghrib.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center shadow">
                <div class="card-body">
                    <h4 class="card-title">📖 Ibadah</h4>
                    <p class="card-text">
                        Memperbanyak membaca Al-Quran, dzikir, dan sholat tarawih.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center shadow">
                <div class="card-body">
                    <h4 class="card-title">🤝 Berbagi</h4>
                    <p class="card-text">
                        Berbagi rezeki dengan sedekah dan membantu sesama.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
```

Setiap card menggunakan komponen bawaan Bootstrap serta class `shadow` untuk efek bayangan. Class `g-4` digunakan untuk mengatur jarak antar card.

---

## Langkah 5 : Membuat Footer

Footer dibuat menggunakan class `bg-success` untuk warna hijau, `text-center` untuk memusatkan teks, dan `p-3` untuk padding:
```html
<footer class="text-center p-3 bg-success">
    <p class="mb-0">
        Selamat menjalankan ibadah puasa 🌙
    </p>
</footer>
```

Class `mb-0` digunakan untuk menghilangkan margin bawah default pada tag `<p>` agar footer tidak memiliki ruang kosong di bagian bawah.

---

## Langkah 6 : Full Code

Berikut adalah keseluruhan kode dari file `ramadan.html`:
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ramadan Mubarak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #1f2327;
            color: white;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
        }
        footer {
            margin-top: auto;
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="#">
                🌙 Ramadan Kareem
            </a>
        </div>
    </nav>
    <!-- HERO -->
    <div class="container text-center mt-5">
        <h1 class="display-2 text-warning fw-bold mb-4">
            Ramadan Mubarak
        </h1>
        <p class="lead mb-4">
            Semoga bulan suci ini membawa keberkahan, kedamaian, dan kebahagiaan bagi kita semua.
        </p>
    </div>
    <!-- CARD SECTION -->
    <div class="container mt-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <h4 class="card-title">🌙 Puasa</h4>
                        <p class="card-text">
                            Menahan diri dari makan, minum, dan hawa nafsu dari subuh hingga maghrib.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <h4 class="card-title">📖 Ibadah</h4>
                        <p class="card-text">
                            Memperbanyak membaca Al-Quran, dzikir, dan sholat tarawih.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <h4 class="card-title">🤝 Berbagi</h4>
                        <p class="card-text">
                            Berbagi rezeki dengan sedekah dan membantu sesama.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <footer class="text-center p-3 bg-success">
        <p class="mb-0">
            Selamat menjalankan ibadah puasa 🌙
        </p>
    </footer>
</body>
</html>
```

---

# 3. Hasil

Halaman web berhasil menampilkan tampilan bertema Ramadan dengan navbar hijau di bagian atas, judul utama berwarna kuning keemasan, tiga card yang tersusun rapi menggunakan Bootstrap Grid, serta footer hijau di bagian bawah halaman. Seluruh tampilan dibangun menggunakan class Bootstrap tanpa mengandalkan native CSS secara penuh.
