-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 12 Des 2015 pada 04.24
-- Versi Server: 5.6.14
-- Versi PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `faunamedia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'cukupadmin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id_faq` int(11) NOT NULL AUTO_INCREMENT,
  `judul` int(11) NOT NULL,
  `isi` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  PRIMARY KEY (`id_faq`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontributor`
--

CREATE TABLE IF NOT EXISTS `kontributor` (
  `id_kontributor` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `alamat` text,
  `kontak` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_kontributor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `kontributor`
--

INSERT INTO `kontributor` (`id_kontributor`, `nama`, `username`, `password`, `alamat`, `kontak`) VALUES
(1, 'adi', 'adi', '', 'adi', '0909099898'),
(2, 'ado', 'ado', 'ado', 'ado', '1231313'),
(4, 'ase', 'asdad', 'asdad', 'asdadad', '13234234'),
(5, 'dadadadad', 'dada', 'adadadadad', 'adadada', '24324234'),
(6, 'fdbfdbddfbd', 'dbdfbdfb', 'dfbdfbdfb', 'dfbdfbdfb', 'dfbdfb'),
(7, 'ddfgdgdfg', 'dfgdgdg', 'dfggdgdgdgdg', 'ioiliiop', '345455646'),
(8, 'ddfgdgdfg', 'dfgdgdg', 'dfggdgdgdgdg', 'ioiliiop', '345455646'),
(9, 'asik', 'asik', 'asik', 'asik', 'asik'),
(10, 'bodat', 'bodat', 'bodat', 'asdaojdaojd', '087127127127'),
(11, 'bodat', 'bodat', 'bodat', 'asdaojdaojd', '087127127127'),
(12, 'asasa', 'asasas', 'asdadadada', 'asdasdad', '93248320489'),
(13, 'bei', 'bei', 'bei', 'beibeibi', '01923938'),
(14, 'bei', 'bei', 'bei', 'beibeibi', '01923938'),
(15, 'bade', 'bade', 'bade', 'bade', '2309482498'),
(20, 'bandot', 'bandot', 'bandot', 'bandot', '8726352162');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `kontributor` varchar(50) NOT NULL,
  `filename` text,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id_news`, `judul`, `isi`, `kategori`, `kontributor`, `filename`) VALUES
(1, 'dfdfgdfg', 'dfgdg', 'KONSERVASI', '0', 'second2.png'),
(2, 'sdfdsfsfsfsf', 'fghgfghfghfhfgh', 'KONSERVASI', ' Bhine', '4th.png'),
(3, 'cxvxvxvxcv', 'cxvvdfgfdgfdg', 'PELIHARAAN', 'Jedah', '7th.png'),
(4, 'Indonesia butuh Konservasi', 'Merdeka.com - Ketua Umum Golkar Munas Ancol Agung Laksono menilai saat ini belum tepat untuk melakukan kocok ulang pimpinan DPR. Desakan kocok ulang itu terkait dugaan Ketua DPR Setya Novanto mencatut nama Presiden Joko Widodo (Jokowi) dan Wapres Jusuf Kalla dalam perpanjangan kontrak Freeport.\r\n\r\nMenurut Agung selama Setya Novanto belum terbukti bersalah maka posisinya sebagai ketua DPR aman dan tidak perlu ada pergantian. Agung juga mengatakan jika Setya Novanto diberhentikan dari jabatannya saat ini maka partai yang sama yang berhak mengisi posisinya.\r\n\r\n"Kocok ulang kan kalau ada yang diberhentikan atau ada yang mengubah UU MD3 (MPR, DPR, DPRD, DPD)," ujar Agung saat menghadiri HUT ke-58 Kosgoro di Jakarta, Jumat (20/11).\r\n\r\nSebelumnya, nama Ketua DPR Setya Novanto disebut-sebut menawarkan sebagai politikus DPR yang jasa dan bantuan untuk perpanjangan kontrak PT Freeport Indonesia dengan mencatut nama sebagai Presiden Jokowi dan Wapres Jusuf Kalla. Polemik ini membuat anggota DPR lainnya geram lantaran Setya Novanto dianggap memperdagangkan jabatannya.\r\n\r\nWakil Ketua Komisi III DPR Desmond Junaidi Mahesa mengkritik keras jika hal itu terbukti benar. Apalagi jika benar memanfaatkan kekuasaan dan jabatannya untuk meminta jatah saham Freeport. Desmond mendesak agar Novanto segera mengundurkan diri.\r\n\r\n"Masih percaya nggak sama DPR kalau pimpinannya memperdagangkan jabatan? Makanya lebih baik saudara Novanto mundur. Kalau gentleman ya mundur, ini kan mempermalukan DPR. Mundur sebagai pimpinan dong," kata Desmond di Kompleks Parlemen DPR RI, Senayan, Jakarta, Selasa (17/11).', 'KONSERVASI', 'IIX', 'unduhan.jpg'),
(5, 'KOMODO endemik Indonesia', ' Merdeka.com - Ketua Umum Golkar Munas Ancol Agung Laksono menilai saat ini belum tepat untuk melakukan kocok ulang pimpinan DPR. Desakan kocok ulang itu terkait dugaan Ketua DPR Setya Novanto mencatut nama Presiden Joko Widodo (Jokowi) dan Wapres Jusuf Kalla dalam perpanjangan kontrak Freeport.\r\n\r\nMenurut Agung selama Setya Novanto belum terbukti bersalah maka posisinya sebagai ketua DPR aman dan tidak perlu ada pergantian. Agung juga mengatakan jika Setya Novanto diberhentikan dari jabatannya saat ini maka partai yang sama yang berhak mengisi posisinya.\r\n\r\n"Kocok ulang kan kalau ada yang diberhentikan atau ada yang mengubah UU MD3 (MPR, DPR, DPRD, DPD)," ujar Agung saat menghadiri HUT ke-58 Kosgoro di Jakarta, Jumat (20/11).\r\n\r\nSebelumnya, nama Ketua DPR Setya Novanto disebut-sebut menawarkan sebagai politikus DPR yang jasa dan bantuan untuk perpanjangan kontrak PT Freeport Indonesia dengan mencatut nama sebagai Presiden Jokowi dan Wapres Jusuf Kalla. Polemik ini membuat anggota DPR lainnya geram lantaran Setya Novanto dianggap memperdagangkan jabatannya.\r\n\r\nWakil Ketua Komisi III DPR Desmond Junaidi Mahesa mengkritik keras jika hal itu terbukti benar. Apalagi jika benar memanfaatkan kekuasaan dan jabatannya untuk meminta jatah saham Freeport. Desmond mendesak agar Novanto segera mengundurkan diri.\r\n\r\n"Masih percaya nggak sama DPR kalau pimpinannya memperdagangkan jabatan? Makanya lebih baik saudara Novanto mundur. Kalau gentleman ya mundur, ini kan mempermalukan DPR. Mundur sebagai pimpinan dong," kata Desmond di Kompleks Parlemen DPR RI, Senayan, Jakarta, Selasa (17/11).', 'PELIHARAAN', 'FF', 'testkomodo.jpg'),
(6, 'AIu', 'saodjsodifjsiodfj', 'HIGHLIGHT', 'asoiasdoijad', 'mockup_awal_project.PNG'),
(7, 'SDFJDOSIFJSOFJ', 'KSDFHSKDFHSKDJFSF', 'PELIHARAAN', 'JJ', 'flash.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
