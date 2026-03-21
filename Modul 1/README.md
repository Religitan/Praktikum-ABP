<div align="center">
  <br />
  <h1>LAPORAN PRAKTIKUM <br>APLIKASI BERBASIS PLATFORM</h1>
  <br />
  <h2>MODUL 1 <br>SETUP REPOSITORY MENGGUNAKAN COMMAND LINE</h2>
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

Git adalah sebuah **sistem pengontrol versi (Version Control System)** yang digunakan untuk mencatat perubahan pada file dalam suatu proyek. Dengan Git, setiap perubahan yang dilakukan dapat disimpan sehingga riwayat pengembangan proyek dapat dilihat kembali.

Git sangat membantu dalam pengembangan perangkat lunak karena memudahkan pengelolaan versi kode, mendukung kolaborasi tim, serta memungkinkan pengembang kembali ke versi sebelumnya apabila terjadi kesalahan.

Salah satu keunggulan Git adalah sistemnya yang **terdistribusi**, dimana setiap pengguna memiliki salinan repository lengkap pada komputer masing-masing. Hal ini membuat proses pengembangan tetap dapat dilakukan secara lokal tanpa selalu terhubung ke internet.

---

# 2. Setup Repository Menggunakan Command Line

Pada modul ini dilakukan proses pembuatan dan konfigurasi repository Git menggunakan **Command Line Interface (CLI)** pada sistem operasi Windows. Tahapan yang dilakukan meliputi inisialisasi repository secara lokal, menghubungkannya dengan repository yang telah dibuat di GitHub, serta mengunggah struktur folder praktikum ke dalam repository tersebut.

Tools yang digunakan dalam praktikum ini antara lain:
- **Git**
- **Command Prompt (CMD)**
- **GitHub**

---

## Langkah 1 : Masuk ke Folder Project

Langkah pertama adalah membuka Command Prompt (CMD) kemudian masuk ke folder project praktikum menggunakan perintah berikut:
```bash
cd Documents
cd "PRAKTIKUM ABP"
```

Perintah tersebut digunakan untuk berpindah ke direktori tempat project praktikum disimpan.

---

## Langkah 2 : Membuat Folder Modul

Setelah berada di dalam folder project, langkah berikutnya adalah membuat struktur folder untuk setiap modul menggunakan perintah berikut:
```bash
mkdir "Modul 1" "Modul 2" "Modul 3" "Modul 4" "Modul 5"
```

Perintah ini digunakan untuk membuat folder yang akan digunakan untuk menyimpan setiap tugas praktikum berdasarkan modul.

---

## Langkah 3 : Membuat File di Dalam Folder Modul

Karena Git tidak dapat menyimpan folder kosong, maka perlu dibuat file di dalam setiap folder modul. Contohnya pada Modul 1:
```bash
cd "Modul 1"
type nul > README.md
cd ..
```

Langkah ini dilakukan agar setiap folder memiliki file yang dapat di-track oleh Git.

---

## Langkah 4 : Mengunggah File ke Repository GitHub

Setelah seluruh folder dan file berhasil dibuat, langkah selanjutnya adalah mengunggah semua perubahan ke repository GitHub menggunakan perintah berikut:
```bash
git add .
git commit -m "Menambahkan struktur folder Modul 1 sampai Modul 5"
git push origin main
```

Perintah tersebut digunakan untuk menambahkan semua file ke staging area, membuat commit perubahan, serta mengirimkannya ke repository GitHub milik pengguna dengan username **Religitan**.

---

# 3. Hasil

Repository GitHub berhasil diperbarui dengan struktur folder Modul 1 sampai Modul 5. Setiap folder telah berisi file yang dapat di-track oleh Git sehingga repository memiliki susunan yang lebih rapi dan terorganisir.
