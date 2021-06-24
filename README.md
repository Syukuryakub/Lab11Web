# Lab11Web dan Framework Lanjutan (CRUD )
Nama   : Syukur Yakub

Kelas  : TI.19.C1

Nim    : 311910696

Matkul : Pemrograman Web

# Langkah-langkah Praktikum
# Buat folder baru dengan nama lab11_php_ci pada docroot webserver (htdocs)
![1](https://user-images.githubusercontent.com/56242226/122332640-f1794a00-cf60-11eb-905a-3511bc253c3f.PNG)

# Untuk mengaktifkan ekstentsi tersebut, melalu XAMPP Control Panel, pada bagian Apache klik Config -> PHP.ini
![2](https://user-images.githubusercontent.com/56242226/122332673-07870a80-cf61-11eb-930f-da3cff7b949f.png)
# Pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server.
![3b](https://user-images.githubusercontent.com/56242226/122392953-9108fd80-cf9e-11eb-8044-31119939a622.PNG)
# Instalasi Codeigniter 4
Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara manual.

![4](https://user-images.githubusercontent.com/56242226/122393093-b85fca80-cf9e-11eb-8f91-66ac3f5ff5a4.PNG)
# Menjalankan CLI (Command Line Interface)
Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal/command prompt. 
Arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (xampp/htdocs/lab11_php_ci/ci4/) 
Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah: ( php spark )

![5a](https://user-images.githubusercontent.com/56242226/122393526-299f7d80-cf9f-11eb-9d0e-fd02178164bb.PNG)
# Mengaktifkan Mode Debugging
Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program.
Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.

![5b](https://user-images.githubusercontent.com/56242226/122393694-58b5ef00-cf9f-11eb-95a9-fa9232fdaa39.PNG)

# Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variable CI_ENVIRINMENT menjadi development
![6](https://user-images.githubusercontent.com/56242226/122393818-7c793500-cf9f-11eb-9f3a-c3732f68e653.PNG)

# Contoh error yang terjadi. Untuk mencoba error tersebut, ubah kode pada file app/Controller/Home.php hilangkan titik koma pada akhir kode.
![7](https://user-images.githubusercontent.com/56242226/122393979-a9c5e300-cf9f-11eb-91e5-618f12837ae2.PNG)

# Routing dan Controller
Router terletak pada file app/config/Routes.php

![8](https://user-images.githubusercontent.com/56242226/122394243-f3aec900-cf9f-11eb-9f83-dfc61dbe0a83.PNG)

# Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah berikut. 
# yaitu php spark
![9](https://user-images.githubusercontent.com/56242226/122394380-1d67f000-cfa0-11eb-8686-1cdb285a28b9.PNG)

# Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about
![9a](https://user-images.githubusercontent.com/56242226/122394476-3bcdeb80-cfa0-11eb-86a1-a89df6715a29.PNG)

# Membuat Controller
Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama page.php pada direktori Controller kemudian isi kodenya seperti berikut.

![10](https://user-images.githubusercontent.com/56242226/122394552-51431580-cfa0-11eb-9d93-17bf07f36f5f.PNG)

Selanjutnya refresh Kembali browser, maka akan ditampilkan hasilnya yaotu halaman sudah dapat diakses.

![10a](https://user-images.githubusercontent.com/56242226/122394645-6a4bc680-cfa0-11eb-98d7-29c29e5a2ef1.PNG)

# Tambahkan method baru pada Controller Page seperti berikut.
![11a](https://user-images.githubusercontent.com/56242226/122394885-a3843680-cfa0-11eb-838d-4754a82e550d.PNG)

# Method ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan alamat: http://localhost:8080/page/tos
![11](https://user-images.githubusercontent.com/56242226/122394967-b72f9d00-cfa0-11eb-9d94-3b29f33e86dd.PNG)

# Ubah method about pada class Controller Page menjadi seperti berikut:
![12](https://user-images.githubusercontent.com/56242226/122396433-2e196580-cfa2-11eb-8168-37db5f2c2f25.PNG)

# Buat file css pada direktori public dengan nama style.css (copy file dari praktikum lab4_layout. Kita akan gunakan layout yang pernah dibuat pada praktikum 4.
![13](https://user-images.githubusercontent.com/56242226/122396548-4ab59d80-cfa2-11eb-86b0-ca0a728808df.PNG)

# Kemudian buat folder template pada direktori view kemudian buat file header.php dan footer.php
![14](https://user-images.githubusercontent.com/56242226/122396647-64ef7b80-cfa2-11eb-8d42-8f0ebd2a569d.PNG)

# Kemudian ubah file app/view/about.php seperti berikut
![14a](https://user-images.githubusercontent.com/56242226/122396731-80f31d00-cfa2-11eb-8e0a-e88a4bda4921.PNG)

# Selanjutnya refresh tampilan pada alamat http://localhost:8080/about
![14b](https://user-images.githubusercontent.com/56242226/122396829-98320a80-cfa2-11eb-803c-b7f542b1f999.PNG)

# Pertanyaan dan Tugas
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga 
semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.

# Halaman About 
![15](https://user-images.githubusercontent.com/56242226/122396996-bb5cba00-cfa2-11eb-827c-9882072ee5c4.PNG)

# Halaman Contact
![16](https://user-images.githubusercontent.com/56242226/122397063-cdd6f380-cfa2-11eb-8582-db5c2508a2f0.PNG)

# Praktikum 12: Framework Lanjutan (CRUD)
# Langkah-langkah Praktikum
Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah 
database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan 
melalui XAMPP.
# Membuat Database dan Membuat Tabel
![1](https://user-images.githubusercontent.com/56242226/123265954-c32dd880-d525-11eb-8482-8e7061725a63.PNG)
# Konfigurasi koneksi database
Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server. 
Konfigurasi dapat dilakukan dengan du acara, yaitu pada file app/config/database.php
atau menggunakan file .env. Pada praktikum ini kita gunakan konfigurasi pada file .env. 

![2a](https://user-images.githubusercontent.com/56242226/123266120-ebb5d280-d525-11eb-8b1d-205257065232.PNG)
# Membuat Model
Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada direktori app/Models dengan nama ArtikelModel.php

![3](https://user-images.githubusercontent.com/56242226/123266380-291a6000-d526-11eb-9d5d-4a67f7d12081.PNG)
# Membuat Controller
Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers.

![4](https://user-images.githubusercontent.com/56242226/123266466-42231100-d526-11eb-8e8b-245dfddbd593.PNG)
# Membuat View
Buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file baru dengan nama index.php. 

![5](https://user-images.githubusercontent.com/56242226/123266591-61ba3980-d526-11eb-9623-d0deb6c256cf.PNG)

# Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel
![5a](https://user-images.githubusercontent.com/56242226/123266721-7bf41780-d526-11eb-8ecd-755429a43a75.PNG)

# Belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada database agar dapat ditampilkan datanya.
![6](https://user-images.githubusercontent.com/56242226/123267066-c8d7ee00-d526-11eb-90e6-b68ac9689909.PNG)

# Refresh kembali browser, sehingga akan ditampilkan hasilnya.
![6a](https://user-images.githubusercontent.com/56242226/123267129-dd1beb00-d526-11eb-94ec-9819d341f0ae.PNG)
# Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada Controller Artikel dengan nama view().

![7](https://user-images.githubusercontent.com/56242226/123267238-fae95000-d526-11eb-892e-edcfeafd202d.PNG)
# Membuat View Detail
Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php.

![8](https://user-images.githubusercontent.com/56242226/123267321-12c0d400-d527-11eb-984e-b050d35ee41e.PNG)
# Membuat Routing untuk artikel detail
Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail.

![9](https://user-images.githubusercontent.com/56242226/123267389-2835fe00-d527-11eb-99cd-709de5be4b61.PNG)
# Kemudian Refresh kembali 
![9a](https://user-images.githubusercontent.com/56242226/123267591-629f9b00-d527-11eb-9ed7-7a701bf03ea9.PNG)


















