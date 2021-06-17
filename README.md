# Lab11Web
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

























