# Contoh Laravel Relationship

Contoh Laravel Relationship hubungan antar Model

### One To One = 1 ke 1 model
Contohnya hubungan user dengan preference table.

### One To Many = 1 ke banyak model
Contohnya hubungan antara Movie dan Studio, dimana sebuah Studio dapat memiliki
banyak Movie. Dan satu Movie hanya dimiliki satu Studio (untuk contoh ini kita menganggap
tidak ada Movie yang dibuat oleh beberapa Studio).

### Many To Many = banyak ke banyak relasi
Contohnya seorang
Student (mahasiswa) dapat mengambil berbagai Course (mata kuliah). Dan setiap Course, sangat
mungkin diikuti oleh banyak Student.

### Has Many Through = relasi banyak melalui perantara
Terkadang ada sebuah kondisi dimana kita merelasikan 3 model. Misalnya, model Artist akan
memiliki banyak Album dan model Album akan memiliki banyak Song. Disini, bisa dikatakan sebuah Artist dapat memiliki banyak (Has Many) Song melalui (Through) Album.

## Terima Kasih

* [Rahmat Awaludin](https://github.com/rawaludin/)
