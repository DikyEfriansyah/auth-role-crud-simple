CATATAN PENTING 

database : https://drive.google.com/file/d/1yS90gRmCTI4pJKFqfFhD48VVHnqMPH6E/view?usp=sharing

### Run Locally
Clone the project

```bash
  git clone https://github.com/DikyEfriansyah/auth-role-crud-simple.git
```

Go to the project directory

```bash
  cd auth-role-crud-simple
```

-   Copy .env.example file to .env and edit database credentials there

```bash
    composer install
```

```bash
    php artisan key:generate
```
### optional if you use file database
```bash
    php artisan migrate:fresh --seed
```
###

### Login
-email    : user@gmail.com
-password : user

-email    : gardener@gmail.com
-password : gardener

-email    :  desaigner@gmail.com
-password : desaigner

-jalankan aplikasi dengan php artisan serve

### Preview Aplikasi

![Screenshot (218)](https://user-images.githubusercontent.com/73789275/226529192-d005b5e9-3337-44e0-a261-b50d0cf9d8c4.png)
![Screenshot (219)](https://user-images.githubusercontent.com/73789275/226529201-6ead52c9-bee5-47f4-a7f5-90e4719c4159.png)
![Screenshot (220)](https://user-images.githubusercontent.com/73789275/226529209-4934b047-a08c-46f2-aef2-11bd142df1a3.png)
