# KoreaStyle - Website Penjualan Pakaian dan Tas

KoreaStyle adalah sebuah website yang menjual berbagai pakaian dan tas dengan gaya Korea. Website ini dibangun untuk memberikan kemudahan dalam berbelanja online serta memberikan pengalaman yang menarik bagi pengguna dalam memilih produk fashion terkini.


## Panduan Penggunaan

1. **Buka Website:**
   - Akses website melalui link berikut: [https://laila.sgp.dom.my.id/].
   - Jika muncul notifikasi, tekan tanda centang hijau ✅ untuk melanjutkan.

2. **Login Sebagai Member:**
   - Akses halaman login member di: [https://laila.sgp.dom.my.id/member] atau tekan ikon orang di pojok kanan atas.
   - **Username:** falah@gmail.com
   - **Password:** falah
   - Setelah login, Anda dapat melakukan pembelian produk. **Namun, harap dicatat bahwa pembelian hanya bisa dilakukan untuk satu produk saja.** Jika Anda memilih lebih dari satu produk, maka akan muncul pesan error.

3. **Login Sebagai Admin:**
   - Untuk mengakses halaman admin, gunakan link berikut: [https://laila.sgp.dom.my.id/auth].
   - **Username:** laila@gmail.com
   - **Password:** laila
   - Di halaman admin, Anda dapat melakukan pengaturan terkait produk, kategori, dan manajemen pengguna.

## Fitur Utama
- **Penjualan Pakaian dan Tas:** Menyediakan pilihan pakaian dan tas dengan gaya Korea.
- **Sistem Login:** Tersedia akses login sebagai member dan admin.
- **Pengelolaan Produk:** Admin dapat menambahkan, mengedit, dan menghapus produk melalui halaman admin.
- **Pembelian Terbatas:** Pembelian dibatasi untuk satu produk per transaksi untuk menghindari kesalahan pemesanan.

## Teknologi yang Digunakan
- **Framework:** CodeIgniter 3
- **Front-end:** HTML, CSS, JavaScript, Bootstrap
- **Back-end:** PHP (CodeIgniter 3)
- **Database:** MySQL

## Cara Menjalankan Proyek

### Persyaratan Sistem
1. **Web Server** (misalnya XAMPP, LAMP, WAMP, dll.)
2. **PHP** versi 5.6 atau lebih tinggi
3. **MySQL**

### Instalasi Proyek
1. Clone repository ini:
    ```bash
    git clone <repository-url>
    ```
2. Pindahkan folder proyek ke dalam folder `htdocs` (jika menggunakan XAMPP atau server lokal lainnya).
3. Buat database baru di MySQL dan impor file SQL yang ada di folder `database` proyek ini.
4. Konfigurasikan database di `application/config/database.php` sesuai dengan kredensial MySQL Anda.
    ```php
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => '<nama_database>',
    ```
5. Jalankan server lokal (misalnya melalui XAMPP) dan akses website melalui URL:
    ```
    http://localhost/koreastyle
    ```

## Struktur Folder Penting
- **application/**: Berisi semua konfigurasi, controller, model, dan view dari aplikasi.
- **system/**: Berisi inti dari framework CodeIgniter.
- **assets/**: Berisi file statis seperti CSS, JavaScript, dan gambar yang digunakan dalam tampilan website.

## Pengembang
- **Nama:** Muhammad Falah Haqiqi
- **Institut:** Institut Widya Pratama

## Lisensi
Proyek ini dikembangkan untuk tujuan pembelajaran dan akademik.
