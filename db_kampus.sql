-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2021 pada 17.10
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kampus`
--

CREATE TABLE `tbl_kampus` (
  `id` varchar(255) NOT NULL,
  `nama_kampus` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kampus`
--

INSERT INTO `tbl_kampus` (`id`, `nama_kampus`, `kecamatan`, `latitude`, `longitude`) VALUES
('1', 'Universitas Negeri Surabaya (Ketintang)', 'Gayungan', '-7.3098004', '112.7268992'),
('2', 'LaSalle College Surabaya', 'Wonokromo', '-7.291198663529082', '112.74176222554301'),
('3', 'PPM School of Management', 'Gayungan', '-7.3197982909300245', '112.73156305437824'),
('4', 'Universitas Wijaya Kusuma Surabaya', 'Dukuh Pakis', '-7.28212462196152', '112.71154358136806'),
('5', 'Sekolah Tinggi Ilmu Ekonomi Indonesia Surabaya', 'Sukolilo', '-7.2887096255534045', '112.76651471204801'),
('6', 'Universitas Islam Negeri Sunan Ampel', 'Wonocolo', '-7.322415125424153', '112.73421891020345'),
('7', 'Politeknik Pelayaran Surabaya Kampus 1', 'Sukolilo', '-7.223651202860783', '112.74054318136746'),
('8', 'Politeknik Pelayaran Surabaya Kampus 2', 'Gunung Anyar', '-7.344929837940515', '112.7948623120486'),
('9', 'Universitas Katolik Widya Mandala (UKWM) Surabaya', 'Mulyorejo', '-7.270826173246712', '112.81228726787276'),
('10', 'Institut Teknologi Sepuluh November (ITS)', 'Sukolilo', '-7.282483702221477', '112.79482873719311'),
('11', 'Universitas Hang Tuah (UHT)', 'Sukolilo', '-7.292721679987579', '112.79295023292265'),
('12', 'Politeknik Kesehatan Kemenkes Surabaya', 'Gubeng', '-7.28384239190373', '112.76158409670808'),
('13', 'Politeknik Elektronika Negeri Surabaya (PENS)', 'Sukolilo', '-7.275655530664874', '112.79374496787293'),
('14', 'Akademi Gizi Surabaya', 'Wonocolo', '-7.305887643575201', '112.74664692554316'),
('15', 'Universitas Negeri Surabaya Kampus Lidah Wetan', 'Lakarsantri', '-7.300362883071514', '112.67258476787318'),
('16', 'UPN Veteran Jatim', 'Gunung Anyar', '-7.333338794700155', '112.78842666418369'),
('17', 'Universitas Airlangga Kampus A', 'Tambaksari', '-7.265303599688568', '112.75855450651301'),
('18', 'Universitas Airlangga Kampus B', 'Gubeng', '-7.272055267135642', '112.75879192738775'),
('19', 'Universitas Airlangga Kampus C', 'Mulyorejo', '-7.268478883311565', '112.78377914884312'),
('20', 'Universitas 17 Agustus 1945 Surabaya', 'Sukolilo', '-7.298366959440826', '112.7667650967082'),
('21', 'Perbanas Surabaya Kampus 1', 'Sukolilo', '-7.300063857351387', '112.76516396787316'),
('22', 'Perbanas Surabaya Kampus 2', 'Rungkut', '-7.308196011257085', '112.79510733903832'),
('23', 'Universitas Muhammadiyah Surabaya', 'Mulyorejo', '-7.260221280971131', '112.78890296602783'),
('24', 'Universitas Nahdlatul Ulama Surabaya', 'Wonokromo', '-7.303946286247501', '112.73328845740475'),
('25', 'Politeknik Perkapalan Negeri Surabaya', 'Sukolilo', '-7.277206480022265', '112.79587496787292'),
('26', 'Universitas Merdeka Surabaya', 'Jambangan', '-7.320092501328034', '112.71823772554345'),
('27', 'Universitas Kristen Petra', 'Wonocolo', '-7.339291171393104', '112.7375102525337'),
('28', 'Universitas Ciputra Surabaya', 'Sambikerep', '-7.285416919257548', '112.63158013903806'),
('29', 'Universitas Bhayangkara Surabaya', 'Wonocolo', '-7.336157615549601', '112.73026824088355'),
('30', 'Institut Teknologi Sepuluh Nopember 2', 'Mulyorejo', '-7.286540967051633', '112.76381021946777'),
('31', 'Institut Teknologi Telkom Surabaya', 'Gayungan', '-7.311117212228635', '112.7288737677888');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
