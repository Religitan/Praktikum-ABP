# Modul 1 – Setup Repository Menggunakan Command Line

## Deskripsi

Pada modul ini dilakukan proses pembuatan dan konfigurasi repository Git menggunakan Command Line Interface (CLI) pada sistem operasi Windows. Tahapan yang dilakukan meliputi inisialisasi repository secara lokal, menghubungkannya dengan repository yang telah dibuat di GitHub, serta mengunggah struktur folder praktikum ke dalam repository tersebut.

Tools yang digunakan dalam proses ini antara lain:

* Git
* Command Prompt (CMD)
* GitHub

## Langkah-langkah

### 1. Inisialisasi Repository Lokal

Langkah pertama adalah membuka Command Prompt (CMD) kemudian masuk ke direktori project. Setelah berada di dalam folder project, repository Git diinisialisasi menggunakan perintah berikut:

```
git init
```

Perintah tersebut digunakan untuk membuat repository Git lokal pada folder project yang sedang digunakan.

### 2. Menghubungkan Repository Lokal dengan GitHub

Setelah repository lokal berhasil dibuat, langkah berikutnya adalah menghubungkannya dengan repository yang sudah dibuat sebelumnya di GitHub menggunakan perintah berikut:

```
git remote add origin https://github.com/nisaalj/Praktikum-ABP.git
```

Perintah tersebut berfungsi untuk menambahkan alamat repository GitHub sebagai remote repository.

### 3. Membuat Struktur Folder Modul

Selanjutnya dibuat struktur folder untuk setiap modul praktikum secara langsung melalui CMD menggunakan perintah berikut:

```
mkdir "Modul 1" "Modul 2" "Modul 3" "Modul 4" "Modul 5"
```

Perintah ini bertujuan untuk membuat struktur folder yang terorganisir agar setiap tugas praktikum dapat dipisahkan berdasarkan modul.

### 4. Mengunggah File ke Repository GitHub

Setelah seluruh folder dan file selesai dibuat, langkah berikutnya adalah melakukan proses upload ke repository GitHub dengan menjalankan perintah berikut:

```
git add .
git commit -m "Menambahkan struktur folder modul praktikum"
git push origin main
```

Perintah tersebut akan menyimpan perubahan yang telah dilakukan dan mengirimkannya ke repository GitHub.

## Hasil

Repository berhasil dibuat dan terhubung dengan GitHub. Struktur folder untuk setiap modul juga telah berhasil dibuat dan diunggah sehingga repository memiliki susunan file yang lebih rapi dan terstruktur.

![SS 1](ss-1.png)

![SS 2](ss-2.png)

![SS 3](ss-3.png)
