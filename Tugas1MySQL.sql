// Membuat Table produk
MariaDB [dbtoko]> create table produk(
    ->  id int NOT NULL auto_increment primary key,
    ->  kode varchar(10) unique,
    ->  nama varchar(45) NOT NULL,
    ->  harga_beli double,
    -> harga_jual double,
    -> stok int,
    -> jenis_produk_id int NOT NULL REFERENCES jenis_produk(id));

// Membuat Table pesanan_items
MariaDB [dbtoko]> create table pesanan_items(
    -> id int NOT NULL auto_increment primary key,
    -> produk_id int NOT NULL REFERENCES produk(id),
    -> pesanan_id int NOT NULL REFERENCES pesanan(id),
    -> qty int,
    -> harga double);

// Membuat Table vendor
MariaDB [dbtoko]> create table vendor(
    -> id int NOT NULL auto_increment primary key,
    -> nomor varchar(4) unique,
    -> nama varchar(40) NOT NULL,
    -> kota varchar(30),
    -> kontak varchar(30));

// Membuat Table pembelian
MariaDB [dbtoko]> create table pembelian(
    -> id int NOT NULL auto_increment primary key,
    -> tanggal varchar(45),
    -> nomor varchar(10) unique,
    ->  produk_id int NOT NULL REFERENCES produk(id),
    -> jumlah int,
    -> harga double,
    -> vendor_id int NOT NULL REFERENCES vendor(id));

// Menambahkan Kolom alamat pada table pelanggan
MariaDB [dbtoko]> alter table pelanggan
    -> ADD COLUMN alamat varchar(40) after tgl_lahir;

// Mengubah nama menjadi nama_pelanggan pada table pelanggan
MariaDB [dbtoko]> alter table pelanggan
    -> CHANGE nama nama_pelanggan varchar(45);

// Mengubah tipe data nama_pelanggan menjadi varchar(50)
MariaDB [dbtoko]> alter table pelanggan
    -> MODIFY nama_pelanggan varchar(50);