// No 2.1
// Tampilkan seluruh data produk diurutkan berdasarkan harga_jual mulai dari yang termahal
1. SELECT * FROM produk ORDER BY harga_jual DESC;
// Tampilkan data kode, nama, tmp_lahir, tgl_lahir dari table pelanggan
2. Select kode, nama_pelanggan, tmp_lahir, tgl_lahir FROM pelanggan;
// Tampilkan kode,nama,stok dari table produk yang stok-nya hanya 4
3. SELECT kode,nama, stok from produk WHERE stok=4;
// Tampilkan seluruh data pelanggan yang tempat lahirnya Jakarta
4. SELECT * from pelanggan WHERE tmp_lahir='jakarta';
// Tampilkan kode, nama, tmp_lahir, tgl_lahir dari pelanggan diurutkan dari yang paling muda usianya
5. SELECT kode, nama_pelanggan, tmp_lahir, tgl_lahir FROM pelanggan ORDER BY tgl_lahir DESC;

// No 2.2

// Tampilkan data produk yang stoknya 3 dan 10
1. SELECT * FROM produk WHERE stok=3 OR stok=10;
// Tampilkan data produk yang harga jualnya kurang dari 5 juta tetapi lebih dari 500 ribu
2. SELECT * FROM produk WHERE harga_jual < 5000000 AND harga_jual > 500000;
// Tampilkan data produk yang harus segera ditambah stoknya
3. SELECT * FROM produk WHERE min_stok > stok;
// Tampilkan data pelanggan mulai dari yang paling muda
4. SELECT * FROM pelanggan ORDER BY tgl_lahir DESC;
// Tampilkan data pelanggan yang lahirnya di Jakarta dan gendernya perempuan
5. SELECT * FROM pelanggan WHERE tmp_lahir='jakarta' AND jk='P';
// Tampilkan data pelanggan yang ID nya 2, 4 dan 6
6. SELECT * from pelanggan WHERE id IN (2,4,6);
// Tampilkan data produk yang harganya antara 500 ribu sampai 6 juta
7. SELECT * FROM produk WHERE harga_jual >= 500000 AND harga_jual<= 6000000;

2.3
// Tampilkan produk yang kode awalnya huruf K dan huruf M
1. SELECT * FROM produk WHERE kode LIKE 'K%' OR kode LIKE 'M%';
// Tampilkan produk yang kode awalnya bukan huruf M
2. SELECT * FROM produk where kode not like 'M%';
// Tampilkan produk-produk televisi
3. SELECT * FROM produk WHERE nama like 'TV%';
// Tampilkan pelanggan mengandung huruf 'SA'
4. SELECT * FROM pelanggan WHERE nama_pelanggan LIKE '%SA%';
// Tampilkan pelanggan yang lahirnya bukan di Jakarta dan mengandung huruf ‘yo‘
5. SELECT * FROM pelanggan WHERE tmp_lahir != 'Jakarta' AND tmp_lahir LIKE '%yo%';
// Tampilkan pelanggan yang karakter huruf ke – 2 nya adalah A
6. SELECT * FROM pelanggan WHERE nama_pelanggan LIKE '_A%';

// No 2.4
// Tampilkan 2 data produk termahal
1. SELECT *FROM produk ORDER BY harga_beli DESC LIMIT 2;
// Tampilkan produk yang paling murah
2. SELECT * FROM produk ORDER BY harga_beli LIMIT 1;
// Tampilkan produk yang stoknya paling banyak
3. SELECT * FROM produk ORDER BY stok DESC LIMIT 1;
// Tampilkan dua produk yang stoknya paling sedikit
4. SELECT * FROM produk ORDER BY stok ASC LIMIT 2;
// Tampilkan pelanggan yang paling muda
5. SELECT * FROM pelanggan ORDER BY tgl_lahir DESC LIMIT 1;
// ampilkan pelanggan yang paling tua
6. SELECT * FROM pelanggan ORDER BY tgl_lahir ASC LIMIT 1;