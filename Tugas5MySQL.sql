// Buat fungsi inputPelanggan(), setelah itu panggil fungsinya
DELIMITER $$
CREATE PROCEDURE inputPelanggan(IN kode VARCHAR(12), IN nama_pelanggan VARCHAR(22), IN jk VARCHAR(1), tmp_lahir VARCHAR(22), tgl_lahir DATE, alamat VARCHAR(22), email VARCHAR(22), kartu_id INT(11))
    -> BEGIN
    -> INSERT INTO pelanggan (kode, nama_pelanggan, jk, tmp_lahir, tgl_lahir, alamat, email, kartu_id) VALUES (kode, nama_pelanggan, jk, tmp_lahir, tgl_lahir, alamat, email, kartu_id);
    -> END$$
DELIMITER ;
CALL inputPelanggan('01107','Julian','L','Bekasi','1999-06-04','Mutiara Gading','julian@gmail.com','2');

// Buat fungsi showPelanggan(), setelah itu panggil fungsinya
DELIMITER $$
CREATE PROCEDURE showPelanggan()
    -> BEGIN
    -> SELECT * FROM pelanggan;
    -> END$$

DELIMITER ;
call showPelanggan;

//  Buat fungsi inputProduk(), setelah itu panggil fungsinya
DELIMITER $$
CREATE PROCEDURE inputProduk(IN kode VARCHAR(12), nama VARCHAR(22), harga_beli DOUBLE, harga_jual DOUBLE, stok INT(11), jenis_produk_id INT(11), min_stok INT(11))
    -> BEGIN
    -> INSERT INTO produk (kode, nama, harga_beli, harga_jual, stok, jenis_produk_id, min_stok) VALUES (kode, nama, harga_beli, harga_jual, stok, jenis_produk_id, min_stok);
    -> END$$

DELIMITER ;
CALL inputProduk('Kulkas','Kulkas',5000000,5500000,5,1,3);

// Buat fungsi showProduk(), setelah itu panggil fungsinya
DELIMITER $$
CREATE PROCEDURE showProduk()
    -> BEGIN
    -> SELECT * FROM produk;
    -> END$$
DELIMITER ;
CALL showProduk();

//  Buat fungsi totalPesanan(), setelah itu panggil fungsinya
DELIMITER $$
BEGIN
    -> SELECT pelanggan.id as id_pelanggan, pelanggan.nama_pelanggan, SUM(pesanan_items.qty) as total_produk
    -> from pelanggan
    -> join pelanggan ON pelanggan_items.pesanan.id = pelanggan.id
    -> join pelanggan ON pelanggan.pelanggan_id = pelanggan.id
    -> GROUP BY pelanggan.id, pelanggan.nama_pelanggan;
    -> END$$

DELIMITER ;
CALL totalPesanan();

// buatkan query panjang di atas menjadi sebuah view baru: pesanan_produk_vw (menggunakan join dari table pesanan,pelanggan dan produk)
CREATE VIEW pesanan_produk_vw AS
    -> SELECT pesanan.id AS pesanan_id, pesanan.tanggal, pelanggan.kode AS pelanggan_kode, pelanggan.nama_pelanggan, produk.kode AS produk_kode, produk.nama AS nama_produk, pesanan_items.qty, produk.harga_jual, SUM(pesanan_items.qty * pesanan_items.harga) AS total_harga
    -> FROM pesanan
    -> JOIN pelanggan ON pesanan.pelanggan_id = pelanggan.id
    -> JOIN pesanan_items ON pesanan.id = pesanan_items.pesanan_id
    -> JOIN produk ON pesanan_items.produk_id = produk.id
    -> GROUP BY pesanan.id, produk.id, pesanan_items.id, pelanggan.id;


SELECT * FROM pesanan_produk_vw;

