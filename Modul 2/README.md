<div align="center">
  <br />
  <h1>LAPORAN PRAKTIKUM <br>APLIKASI BERBASIS PLATFORM</h1>
  <br />
  <h2>MODUL 2 <br>TABEL HTML</h2>
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

HTML (**HyperText Markup Language**) adalah bahasa markup standar yang digunakan untuk membuat dan menyusun halaman web. HTML menggunakan tag-tag khusus untuk mendefinisikan struktur dan konten dari sebuah halaman web.

Salah satu elemen penting dalam HTML adalah **tabel**, yang digunakan untuk menampilkan data secara terstruktur dalam bentuk baris dan kolom. Tabel HTML dibentuk menggunakan beberapa tag utama, yaitu `<table>` untuk mendefinisikan tabel, `<tr>` untuk mendefinisikan baris, `<th>` untuk mendefinisikan sel heading, dan `<td>` untuk mendefinisikan sel data.

---

# 2. Tabel HTML

Pada modul ini dibuat halaman web yang menampilkan data mahasiswa dalam bentuk tabel menggunakan HTML. Tahapan yang dilakukan meliputi pembuatan struktur tabel, penambahan heading kolom, serta pengisian data mahasiswa ke dalam baris tabel.

Tools yang digunakan dalam praktikum ini antara lain:
- **Visual Studio Code**
- **Google Chrome**
- **HTML**

---

## Langkah 1 : Membuat File HTML

Langkah pertama adalah membuat file baru dengan nama `table.html` menggunakan Visual Studio Code, kemudian menuliskan struktur dasar HTML sebagai kerangka halaman web:
```html
<!DOCTYPE html>
<html>
<head>
    <title>Tabel Mahasiswa</title>
</head>
<body>
</body>
</html>
```

Struktur ini berfungsi sebagai kerangka dasar yang wajib ada pada setiap halaman HTML.

---

## Langkah 2 : Menambahkan Judul Halaman

Setelah kerangka dasar terbentuk, langkah berikutnya adalah menambahkan judul tabel di dalam tag `<body>` menggunakan tag `<center>` dan `<h2>` agar judul tampil di tengah halaman:
```html
<center>
    <h2>Tabel Mahasiswa</h2>
</center>
```

Tag `<center>` digunakan untuk memusatkan seluruh konten secara horizontal, sedangkan `<h2>` digunakan untuk menampilkan teks sebagai judul berukuran sedang.

---

## Langkah 3 : Membuat Struktur Tabel

Di dalam tag `<center>`, dibuat tabel dengan atribut `border="1"` agar garis tabel terlihat. Heading kolom didefinisikan menggunakan tag `<th>` di dalam baris pertama:
```html
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
    </tr>
</table>
```

Tag `<table>` mendefinisikan tabel, `<tr>` mendefinisikan baris, dan `<th>` mendefinisikan sel heading yang secara default ditampilkan tebal dan rata tengah.

---

## Langkah 4 : Menambahkan Data Mahasiswa

Setelah heading terbentuk, data mahasiswa ditambahkan menggunakan tag `<tr>` untuk setiap baris dan tag `<td>` untuk setiap sel data:
```html
<tr>
    <td>1</td>
    <td>Religita</td>
    <td>2311102025</td>
</tr>
<tr>
    <td>2</td>
    <td>Jeno</td>
    <td>2311100024</td>
</tr>
```

Setiap `<tr>` mewakili satu baris data mahasiswa, sedangkan `<td>` mewakili isi dari masing-masing kolom pada baris tersebut.

---

## Langkah 5 : Full Code

Berikut adalah keseluruhan kode dari file `table.html`:
```html
<!DOCTYPE html>
<html>
<head>
    <title>Tabel Mahasiswa</title>
</head>
<body>
    <center>
        <h2>Tabel Mahasiswa</h2>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Religita</td>
                <td>2311102025</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jeno</td>
                <td>2311100024</td>
            </tr>
        </table>
    </center>
</body>
</html>
```

---

# 3. Hasil

Halaman web berhasil menampilkan tabel mahasiswa dengan tiga kolom yaitu No, Nama, dan NIM. Tabel ditampilkan di tengah halaman dengan garis border yang terlihat jelas pada setiap sel.
