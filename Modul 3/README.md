<div align="center">
  <br />
  <h1>LAPORAN PRAKTIKUM <br>APLIKASI BERBASIS PLATFORM</h1>
  <br />
  <h2>MODUL 3 <br>HTML & CSS</h2>
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

**CSS (Cascading Style Sheets)** adalah bahasa yang digunakan untuk mengatur tampilan dan gaya dari elemen-elemen HTML pada halaman web. Dengan CSS, tampilan halaman web dapat disesuaikan mulai dari warna, ukuran, posisi, hingga animasi.

CSS dapat dituliskan langsung di dalam file HTML menggunakan tag `<style>` di dalam bagian `<head>`, atau disimpan dalam file terpisah dengan ekstensi `.css`. Salah satu fitur CSS yang sering digunakan adalah **animasi**, yang dibuat menggunakan `@keyframes` untuk mendefinisikan perubahan tampilan dari satu kondisi ke kondisi lainnya secara bertahap.

---

# 2. HTML & CSS

Pada modul ini dibuat halaman web bertema Tahun Baru Imlek menggunakan HTML dan CSS. Tahapan yang dilakukan meliputi pembuatan struktur halaman, penerapan styling dengan CSS, serta penggunaan animasi CSS untuk membuat efek lampion bergoyang dan confetti jatuh.

Tools yang digunakan dalam praktikum ini antara lain:
- **Visual Studio Code**
- **Google Chrome**
- **HTML**
- **CSS**

---

## Langkah 1 : Membuat File HTML

Langkah pertama adalah membuat file baru dengan nama `imlek.html`, kemudian menuliskan struktur dasar HTML sebagai kerangka halaman web:
```html
<!DOCTYPE html>
<html>
<head>
    <title>Happy Chinese New Year</title>
</head>
<body>
</body>
</html>
```

Struktur ini berfungsi sebagai kerangka dasar yang wajib ada pada setiap halaman HTML.

---

## Langkah 2 : Menambahkan Styling Background dan Teks

Di dalam tag `<head>`, ditambahkan tag `<style>` untuk mengatur tampilan halaman. Background menggunakan `linear-gradient` dengan warna merah bertingkat, dan seluruh konten diposisikan di tengah menggunakan Flexbox:
```css
body {
    background: linear-gradient(180deg, #8B0000, #B22222, #FF0000);
    height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-family: Arial;
    color: gold;
    text-align: center;
}
h1 {
    font-size: 60px;
    text-shadow: 0 0 10px gold, 0 0 20px gold;
}
p {
    font-size: 24px;
}
```

Property `text-shadow` digunakan untuk menghasilkan efek cahaya keemasan pada judul halaman.

---

## Langkah 3 : Membuat Animasi Lampion

Elemen lampion dibuat menggunakan `<div>` dengan class `.lampion`. Bentuk bulat dibuat menggunakan `border-radius: 50%`, tali lampion dibuat menggunakan pseudo-element `::after`, dan animasi goyang dibuat menggunakan `@keyframes`:
```css
.lampion {
    width: 80px;
    height: 80px;
    background: red;
    border-radius: 50%;
    position: absolute;
    top: 100px;
    animation: goyang 3s infinite alternate;
    box-shadow: 0 0 20px gold;
}
.lampion::after {
    content: "";
    width: 4px;
    height: 60px;
    background: gold;
    position: absolute;
    bottom: -60px;
    left: 38px;
}
.lampion1 { left: 20%; }
.lampion2 { right: 20%; }

@keyframes goyang {
    from { transform: rotate(-10deg); }
    to   { transform: rotate(10deg); }
}
```

Animasi `goyang` membuat lampion berayun secara bergantian dari kiri ke kanan dengan durasi 3 detik secara terus-menerus.

---

## Langkah 4 : Membuat Animasi Confetti

Efek confetti emas dibuat menggunakan `<div>` dengan class `.confetti` yang dianimasikan jatuh dari atas ke bawah layar menggunakan `translateY`:
```css
.confetti {
    position: absolute;
    width: 10px;
    height: 10px;
    background: gold;
    top: -10px;
    animation: jatuh 5s linear infinite;
}
@keyframes jatuh {
    to { transform: translateY(100vh); }
}
```

Nilai `100vh` digunakan agar confetti jatuh hingga mencapai batas bawah layar.

---

## Langkah 5 : Menambahkan Konten ke Body

Di dalam tag `<body>`, ditambahkan elemen lampion, judul, teks, dan confetti:
```html
<div class="lampion lampion1"></div>
<div class="lampion lampion2"></div>
<h1>🧧 Happy Chinese New Year 🧧</h1>
<p>Gong Xi Fa Cai</p>
<p>Semoga tahun ini membawa keberuntungan, kesehatan, dan rezeki berlimpah!</p>
<div class="confetti" style="left:10%"></div>
<div class="confetti" style="left:30%"></div>
<div class="confetti" style="left:50%"></div>
<div class="confetti" style="left:70%"></div>
<div class="confetti" style="left:90%"></div>
```

Lima elemen confetti ditempatkan di posisi horizontal yang berbeda agar tersebar merata di seluruh lebar halaman.

---

## Langkah 6 : Full Code

Berikut adalah keseluruhan kode dari file `imlek.html`:
```html
<!DOCTYPE html>
<html>
<head>
    <title>Happy Chinese New Year</title>
    <style>
        body {
            background: linear-gradient(180deg, #8B0000, #B22222, #FF0000);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: Arial;
            color: gold;
            text-align: center;
        }
        h1 {
            font-size: 60px;
            text-shadow: 0 0 10px gold, 0 0 20px gold;
        }
        p {
            font-size: 24px;
        }
        .lampion {
            width: 80px;
            height: 80px;
            background: red;
            border-radius: 50%;
            position: absolute;
            top: 100px;
            animation: goyang 3s infinite alternate;
            box-shadow: 0 0 20px gold;
        }
        .lampion::after {
            content: "";
            width: 4px;
            height: 60px;
            background: gold;
            position: absolute;
            bottom: -60px;
            left: 38px;
        }
        .lampion1 { left: 20%; }
        .lampion2 { right: 20%; }
        @keyframes goyang {
            from { transform: rotate(-10deg); }
            to   { transform: rotate(10deg); }
        }
        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background: gold;
            top: -10px;
            animation: jatuh 5s linear infinite;
        }
        @keyframes jatuh {
            to { transform: translateY(100vh); }
        }
    </style>
</head>
<body>
    <div class="lampion lampion1"></div>
    <div class="lampion lampion2"></div>
    <h1>🧧 Happy Chinese New Year 🧧</h1>
    <p>Gong Xi Fa Cai</p>
    <p>Semoga tahun ini membawa keberuntungan, kesehatan, dan rezeki berlimpah!</p>
    <div class="confetti" style="left:10%"></div>
    <div class="confetti" style="left:30%"></div>
    <div class="confetti" style="left:50%"></div>
    <div class="confetti" style="left:70%"></div>
    <div class="confetti" style="left:90%"></div>
</body>
</html>
```

---

# 3. Hasil

Halaman web berhasil menampilkan tampilan bertema Imlek dengan background merah gradient, judul bercahaya emas, dua lampion yang beranimasi berayun di kiri dan kanan, serta efek confetti emas yang jatuh dari atas layar.
