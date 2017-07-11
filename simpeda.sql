-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `Admin`;
CREATE TABLE `Admin` (
  `id_admin` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_ktp` char(16) NOT NULL,
  `no_telp` int(13) NOT NULL,
  `password` varchar(16) NOT NULL,
  `Id_pelanggan` varchar(10) NOT NULL,
  PRIMARY KEY (`id_admin`),
  KEY `Id_pelanggan` (`Id_pelanggan`),
  CONSTRAINT `Admin_ibfk_1` FOREIGN KEY (`Id_pelanggan`) REFERENCES `Pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Keuangan`;
CREATE TABLE `Keuangan` (
  `no_laporan` int(3) NOT NULL,
  `tanggal_sewa` date NOT NULL,
  `total` int(20) NOT NULL,
  PRIMARY KEY (`no_laporan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Manager`;
CREATE TABLE `Manager` (
  `id_manager` varchar(10) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`id_manager`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Mobil`;
CREATE TABLE `Mobil` (
  `no_mobil` char(5) NOT NULL,
  `merk` varchar(15) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `harga_sewa` int(10) NOT NULL,
  `kondisi` text NOT NULL,
  `no_plat` varchar(10) NOT NULL,
  `no_mesin` char(17) NOT NULL,
  `status` char(10) NOT NULL,
  PRIMARY KEY (`no_mobil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Pelanggan`;
CREATE TABLE `Pelanggan` (
  `id_pelanggan` varchar(10) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telp` int(13) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_ktp` char(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `scan_ktp_pel` blob NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Pemakaian`;
CREATE TABLE `Pemakaian` (
  `no_transaksi` char(4) NOT NULL,
  `tanggal_sewa` date NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `no_mobil` char(5) NOT NULL,
  `no_supir` char(4) NOT NULL,
  PRIMARY KEY (`no_transaksi`),
  KEY `no_mobil` (`no_mobil`),
  KEY `no_supir` (`no_supir`),
  CONSTRAINT `Pemakaian_ibfk_3` FOREIGN KEY (`no_mobil`) REFERENCES `Mobil` (`no_mobil`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Pemakaian_ibfk_4` FOREIGN KEY (`no_supir`) REFERENCES `Supir` (`no_supir`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Penyewaan`;
CREATE TABLE `Penyewaan` (
  `no_sewa` char(4) NOT NULL,
  `tanggal_sewa` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `jam_kembali` time NOT NULL,
  `jaminan` varchar(10) NOT NULL,
  `no_mobil` char(5) NOT NULL,
  `no_supir` char(4) NOT NULL,
  PRIMARY KEY (`no_sewa`),
  KEY `no_mobil` (`no_mobil`),
  KEY `no_supir` (`no_supir`),
  CONSTRAINT `Penyewaan_ibfk_3` FOREIGN KEY (`no_mobil`) REFERENCES `Mobil` (`no_mobil`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Penyewaan_ibfk_4` FOREIGN KEY (`no_supir`) REFERENCES `Supir` (`no_supir`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Supir`;
CREATE TABLE `Supir` (
  `no_supir` char(4) NOT NULL,
  `no_ktp` char(16) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  PRIMARY KEY (`no_supir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Tagihan`;
CREATE TABLE `Tagihan` (
  `no_tagihan` char(3) NOT NULL,
  `jumlah_total` int(10) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `total_sewa_mobil` int(10) NOT NULL,
  `biaya_supir` int(6) DEFAULT NULL,
  `no_sewa` char(4) DEFAULT NULL,
  PRIMARY KEY (`no_tagihan`),
  KEY `no_sewa` (`no_sewa`),
  CONSTRAINT `Tagihan_ibfk_2` FOREIGN KEY (`no_sewa`) REFERENCES `Penyewaan` (`no_sewa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2017-07-11 08:02:57
