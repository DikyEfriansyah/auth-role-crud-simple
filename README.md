CATATAN PENTING 

Setelah clone dari github ada beberapa langkah yang harus dijalankan yaitu:

- ketik php artisan key:generate untuk generate APP_KEY
- lalu buat database baru pada localhost (phpmyadmin atau yang lain)
- ubah pada file .env pada tulisan DB_DATABASE menjadi nama database yang sudah dibuat (jika tidak ada DB_USERNAME dan DB_PASSWORD maka biarkan default)
- ketik perintah php artisan db:migrate untuk migration table ke database
- ketik php artisan db:seed untuk memasukan data dummy untuk Auth
data pada auth yaitu:

user@gmail.com
user

gardener@gmail.com
gardener

desaigner@gmail.com
desaigner

-jalankan aplikasi dengan php artisan serve
