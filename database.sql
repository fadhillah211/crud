create database test;

use test;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);


CREATE TABLE `barang` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
);

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL auto_increment,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY  (`id`)
);