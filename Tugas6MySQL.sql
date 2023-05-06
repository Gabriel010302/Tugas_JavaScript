MariaDB [dbtoko]> DELIMITER $$
MariaDB [dbtoko]> CREATE TRIGGER status_pembayaran BEFORE INSERT ON pembayaran
    -> FOR EACH ROW
    -> BEGIN
    -> DECLARE total_pesanan double;
    -> DECLARE total_pembayaran double;
    -> SELECT total INTO total_pesanan FROM pesanan WHERE id = NEW.pesanan_id;
    -> SELECT SUM(jumlah) INTO total_pembayaran FROM pembayaran WHERE pesanan_id = NEW.pesanan_id;
    -> IF NEW.jumlah > total_pesanan THEN
    -> SET NEW.status_pembayaran = "lunas";
    -> ELSE
    -> SET NEW.status_pembayaran = "belum lunas";
    -> END IF;
    -> END$$

MariaDB [dbtoko]> INSERT INTO pembayaran (no_kuitansi, tanggal, jumlah, ke, pesanan_id) VALUES
    -> ('P0111','2023-03-03',5000,1,3);

MariaDB [dbtoko]> select * from pembayaran;
+----+-------------+------------+--------+------+------------+-------------------+
| id | no_kuitansi | tanggal    | jumlah | ke   | pesanan_id | status_pembayaran |
+----+-------------+------------+--------+------+------------+-------------------+
|  1 | P0111       | 2023-03-03 |   5000 |    1 |          3 | belum lunas       |
+----+-------------+------------+--------+------+------------+-------------------+