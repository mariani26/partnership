-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Feb 2023 pada 18.39
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unp-link`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar1` varchar(255) DEFAULT NULL,
  `gambar2` varchar(255) DEFAULT NULL,
  `gambar3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `title`, `isi`, `gambar1`, `gambar2`, `gambar3`) VALUES
(1, 'About Us', '<b>Partnership UNP</b> merupakan sebuah platform kerja sama UNP dengan berbagai perguruan tinggi dan sekolah. Tak hanya terbatas di bidang pendidikan, Universitas Negeri Padang juga bekerja sama dengan bidang-bidang lain, seperti industri, pemerintahan, NPO dan organisasi-organisasi lain. Kerja sama ini tak hanya terbatas di dalam negeri, namun juga terdapat di luar negeri. <br><br>\r\n\r\nUNP menyediakan platform untuk memudahkan pihak yang ingin bekerja sama dengan UNP. Pihak yang ingin bekerja sama dapat mendaftar melalui platform ini. Partnership UNP menjadi salah satu solusi komunikasi yang mudah bagi pihak lain yang ingin mengetahui seputar partnership UNP. Baik yang sudah terikat maupun yang belum atau akan bekerja sama dengan UNP.', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `about_eng`
--

CREATE TABLE `about_eng` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar1` varchar(255) DEFAULT NULL,
  `gambar2` varchar(255) DEFAULT NULL,
  `gambar3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about_eng`
--

INSERT INTO `about_eng` (`id`, `title`, `isi`, `gambar1`, `gambar2`, `gambar3`) VALUES
(2, 'About Us', '<span>The UNP Partnership</span> is a UNP collaboration platform with various universities and schools. Not only limited to the field of education, Padang State University also collaborates with other fields, such as industry, government, NPOs, and other organizations. This cooperation is not only limited to the country but also exists abroad. <br><br>\r\n\r\nUNP provides a platform to make it easier for parties who want to work with UNP. Parties who wish to cooperate can register through this platform. The UNP Partnership is one of the easy communication solutions for other parties who want to know about the UNP partnership. Both those who are bound and those who have not or will cooperate with UNP.\r\n', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `choose`
--

CREATE TABLE `choose` (
  `id` int(11) NOT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `choose`
--

INSERT INTO `choose` (`id`, `title1`, `title2`, `isi`) VALUES
(1, 'OPTIMIZED FOR', 'New Information', 'Partnership UNP menyediakan informasi hangat dan terbaru.'),
(2, 'THE MOST', 'Solid and High Quality', 'Kerja sama yang solid dan berkualitas.'),
(3, 'TOP DESIGNS CREATED BY', 'Usability Specialists', 'Desain dirancang oleh desainer profesional dengan standar modern.'),
(4, 'THE BEST', 'Partner Experience', 'Terjalinnya kerja sama yang saling memuaskan.'),
(5, 'WORKS PERFECTLY WITH', 'Partnership UNP', 'Partnership UNP memudahkan urusan sehingga Anda dapat bekerja dengan cermat dan perfect.'),
(6, 'ALWAYS KEEP', 'Partnership UNP Updates', 'Nantikan update terbaru seputar Partnership UNP.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `choose_eng`
--

CREATE TABLE `choose_eng` (
  `id` int(11) NOT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `choose_eng`
--

INSERT INTO `choose_eng` (`id`, `title1`, `title2`, `isi`) VALUES
(1, 'OPTIMIZED FOR', 'New Information', 'Partnership UNP provides the lates information from the campus.'),
(2, 'THE MOST', 'Solid and High Quality', 'Sold and quality cooperation.'),
(3, 'TOP DESIGNS CREATED BY', 'Usability Specialists', 'The design are designed by professional designers to modern standard.'),
(4, 'THE BEST', 'Partner Experience', 'The establishment of mutually satisfying cooperation.'),
(5, 'WORKS PERFECTLY WITH', 'Partnership UNP', 'The UNP Partnership makes things easy so you can work carefully and perfectly.'),
(6, 'ALWAYS KEEP', 'Partnership UNP Updates', 'Look forward to the latest updates about the UNP Partnership.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `faq`
--

INSERT INTO `faq` (`id`, `title`, `isi`) VALUES
(1, 'Partnership UNP itu apa?', 'Partnership UNP adalah sebuah platform tentang kerja sama Universitas Negeri Padang dengan berbagai bidang atau sektor.'),
(2, 'Mengapa harus partnership UNP?', 'Partnership UNP menyediakan informasi terkait dengan berbagai kerja sama UNP.'),
(3, 'Apa keuntungan bekerja sama dengan UNP melalui partnership UNP?', 'Melalui website ini, pihak lain yang ingin bekerja sama dengan UNP bisa mengajukannya. Pihak tersebut juga dapat mengakses berbagai informasi sebelum menjalin kerja sama.'),
(4, 'Di bidang apa saja partnership UNP bergerak?', '1. Industri<br>\r\n2. Sekolah<br>\r\n3. Perguruan Tinggi<br>\r\n4. Pemerintah<br>\r\n5. Organisasi Nirlaba<br>\r\n6. Organisasi'),
(5, 'Apakah partnership UNP hanya di dalam negeri?', 'UNP tak hanya menjalin kerja sama di dalam negeri, melainkan juga di luar negeri.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq_eng`
--

CREATE TABLE `faq_eng` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `faq_eng`
--

INSERT INTO `faq_eng` (`id`, `title`, `isi`) VALUES
(6, 'What is the UNP Partnership?', 'The UNP Partnership is a platform for cooperation between Padang State University and various fields or sectors.\r\n'),
(7, 'Why does it have to be a UNP partnership?', 'UNP Partnership provides information related to various UNP collaborations.\r\n'),
(8, 'What are the advantages of working with UNP through a UNP partnership?', 'Through this website, other parties who wish to work with UNP can apply. These parties can also access various information before entering into cooperation.'),
(9, 'In what areas is UNP\'s partnership engaged?', '1. Industry<br>\r\n2. School<br>\r\n3. College<br>\r\n4. Government<br>\r\n5. Non-profit Organizations<br>\r\n6. Organization\r\n'),
(10, 'Is the UNP partnership only domestic?', 'UNP does not only cooperate domestically but also abroad.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1673178877);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dinas`
--

CREATE TABLE `tb_dinas` (
  `id` int(11) NOT NULL,
  `nama_dinas` varchar(255) NOT NULL,
  `bidang_kerjasama` varchar(255) DEFAULT NULL,
  `judul_kerjasama` varchar(255) DEFAULT NULL,
  `jenis_kerjasama` varchar(255) DEFAULT NULL,
  `no_thn_kerjasama` varchar(255) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `dok_mou` varchar(255) DEFAULT NULL,
  `dok_moa` varchar(255) DEFAULT NULL,
  `dok_imp` varchar(255) DEFAULT NULL,
  `inisiator` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `email_utama` varchar(255) NOT NULL,
  `no_telp` varchar(16) DEFAULT NULL,
  `no_fax` varchar(25) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kelurahan` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(15) DEFAULT NULL,
  `rt_rw` varchar(10) DEFAULT NULL,
  `kontak_person` varchar(25) DEFAULT NULL,
  `link_maps` text DEFAULT NULL,
  `link_facebook` text DEFAULT NULL,
  `link_instagram` text DEFAULT NULL,
  `link_twitter` text DEFAULT NULL,
  `link_youtube` text DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dinas`
--

INSERT INTO `tb_dinas` (`id`, `nama_dinas`, `bidang_kerjasama`, `judul_kerjasama`, `jenis_kerjasama`, `no_thn_kerjasama`, `tgl_mulai`, `tgl_akhir`, `dok_mou`, `dok_moa`, `dok_imp`, `inisiator`, `keterangan`, `email_utama`, `no_telp`, `no_fax`, `website`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `kode_pos`, `rt_rw`, `kontak_person`, `link_maps`, `link_facebook`, `link_instagram`, `link_twitter`, `link_youtube`, `id_user`) VALUES
(310, 'DPR RI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'drp21@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1360),
(311, 'Kementrian Agama', 'Magang Merdeka', 'MBKM', 'Magang', '2022', '2023-02-02', '2023-06-02', NULL, NULL, 'SURAT PERMOHONAN penambahan waktu input nilai pkl.pdf', '', '', 'kemenag@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1368),
(312, 'Pendiidikan', '', '', '', '', NULL, NULL, '12-Article Text-40-1-10-20220719.pdf', '', '', '', '', 'pendidikan@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1339);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dinas_eng`
--

CREATE TABLE `tb_dinas_eng` (
  `id` int(11) NOT NULL,
  `agency_name` varchar(255) NOT NULL,
  `cooperation_field` varchar(255) DEFAULT NULL,
  `collaboration_title` varchar(255) DEFAULT NULL,
  `type_of_cooperation` varchar(255) DEFAULT NULL,
  `collaboration_year_number` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `doc_mou` varchar(255) DEFAULT NULL,
  `doc_moa` varchar(255) DEFAULT NULL,
  `doc_imp` varchar(255) DEFAULT NULL,
  `initiator` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `main_email` varchar(255) NOT NULL,
  `phone_number` varchar(16) DEFAULT NULL,
  `fax_number` varchar(25) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `zipcode` varchar(15) DEFAULT NULL,
  `contact_person` varchar(25) DEFAULT NULL,
  `map_link` text DEFAULT NULL,
  `facebook_link` text DEFAULT NULL,
  `instagram_link` text DEFAULT NULL,
  `twitter_link` text DEFAULT NULL,
  `youtube_link` text DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dinas_eng`
--

INSERT INTO `tb_dinas_eng` (`id`, `agency_name`, `cooperation_field`, `collaboration_title`, `type_of_cooperation`, `collaboration_year_number`, `start_date`, `end_date`, `doc_mou`, `doc_moa`, `doc_imp`, `initiator`, `description`, `main_email`, `phone_number`, `fax_number`, `website`, `address`, `city`, `state`, `country`, `zipcode`, `contact_person`, `map_link`, `facebook_link`, `instagram_link`, `twitter_link`, `youtube_link`, `user_id`) VALUES
(315, 'Dinasti Tiongkok', 'Coo', 'Coll', '', '', NULL, NULL, 'e-Rapor XII RPL.pdf', NULL, NULL, '', '', 'dns@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1375);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_industri`
--

CREATE TABLE `tb_industri` (
  `id` int(11) NOT NULL,
  `nama_industri` varchar(255) NOT NULL,
  `no_identitas` varchar(255) NOT NULL,
  `identitas_derektur` varchar(255) NOT NULL,
  `bidang_usaha` varchar(255) DEFAULT NULL,
  `judul_kerjasama` varchar(255) DEFAULT NULL,
  `jenis_kerjasama` varchar(255) DEFAULT NULL,
  `no_thn_kerjasama` varchar(255) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `dok_mou` varchar(255) DEFAULT NULL,
  `dok_moa` varchar(255) DEFAULT NULL,
  `dok_imp` varchar(255) DEFAULT NULL,
  `inisiator` varchar(255) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `email_utama` varchar(255) DEFAULT NULL,
  `email_cadangan` varchar(255) DEFAULT NULL,
  `no_telp` varchar(16) DEFAULT NULL,
  `no_fax` varchar(25) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kelurahan` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(15) DEFAULT NULL,
  `rt_rw` varchar(10) DEFAULT NULL,
  `kontak_person` varchar(25) DEFAULT NULL,
  `link_maps` text DEFAULT NULL,
  `link_facebook` text DEFAULT NULL,
  `link_instagram` text DEFAULT NULL,
  `link_twitter` text DEFAULT NULL,
  `link_youtube` text DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_industri`
--

INSERT INTO `tb_industri` (`id`, `nama_industri`, `no_identitas`, `identitas_derektur`, `bidang_usaha`, `judul_kerjasama`, `jenis_kerjasama`, `no_thn_kerjasama`, `tgl_mulai`, `tgl_akhir`, `dok_mou`, `dok_moa`, `dok_imp`, `inisiator`, `keterangan`, `email_utama`, `email_cadangan`, `no_telp`, `no_fax`, `website`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `kode_pos`, `rt_rw`, `kontak_person`, `link_maps`, `link_facebook`, `link_instagram`, `link_twitter`, `link_youtube`, `id_user`) VALUES
(221, 'Akatrust', '1111', '122', 'CV', 'jasa', 'Pertukaran Pelajar', '2021', '2022-01-12', '2024-01-12', 'Kelas_11_SMK_Basis_Data_1.pdf', 'RPP kd 3.4 basis data.pdf', 'HALAMAN PENGESAHAN.docx', '', 'biar bnyak uang', 'nuraddina9@gmail.com', 'nuraddina563@gmail.com', '08318273363', '1234', '', 'Kuranji', '', '', '', '23571', '03/06', '', '', 'hjfjfjy', '', '', '', 1339),
(223, 'Garuda Cyber', '1234123', '124241321', '', '', '', '', NULL, NULL, 'SURAT PERMOHONAN penambahan waktu input nilai pkl.pdf', 'userguide-mahasiswa.pdf', 'UH2.pdf', '', '', '', '', '', '', '', 'Kuranji', '', '', '', '', '03/05', '', '', '', '', '', '', 1356),
(226, 'Argenesia', '88369382', '973693', 'Developer', '', '', '', NULL, NULL, 'Jobsheet 4.pdf', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1338),
(228, 'Pt Lembah Karet', '123', '973693', 'Perdagangan', '', '', '', NULL, NULL, 'smahfudy,+1.+page+1-13.pdf', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1338),
(229, 'Pt Lembah Karet', '1213', '121', 'dwd', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1338),
(230, 'Pt Lembah Karet', '1213', '121', 'dwd', '', '', '', NULL, NULL, 'e-Rapor XI RPL B.pdf', 'e-Rapor XII RPL.pdf', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1338),
(231, 'Pt Lembah Karet', '1213', '121', 'dwd', '', '', '', NULL, NULL, 'e-Rapor XII RPL.pdf', 'e-Rapor XI RPL B.pdf', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1338),
(232, 'Pt Lembah Karet', '1213', '121', 'dwd', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1338),
(233, 'Pt Lembah Karet', '1213', '121', 'dwd', '', '', '', NULL, NULL, 'e-Rapor XI RPL B.pdf', 'e-Rapor XII RPL.pdf', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1338),
(234, 'Mediatama web', '1313132121', '1213313', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', 'Padang', '', '', '', '', '', '', '', '', 1338),
(235, 'rr', 'gg', 'hff', '', '', '', '', NULL, NULL, 'e-Rapor XI RPL A.pdf', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1338),
(236, 'lurry', '12121212', '1212121', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1384);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_industri_eng`
--

CREATE TABLE `tb_industri_eng` (
  `id` int(11) NOT NULL,
  `industry_name` varchar(255) NOT NULL,
  `identity_number` varchar(255) NOT NULL,
  `director_identity` varchar(255) NOT NULL,
  `business_fields` varchar(255) DEFAULT NULL,
  `collaboration_title` varchar(255) DEFAULT NULL,
  `type_of_cooperation` varchar(255) DEFAULT NULL,
  `collaboration_year_number` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `doc_mou` varchar(255) DEFAULT NULL,
  `doc_moa` varchar(255) DEFAULT NULL,
  `doc_imp` varchar(255) DEFAULT NULL,
  `initiator` varchar(255) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `main_email` varchar(255) DEFAULT NULL,
  `backup_email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(16) DEFAULT NULL,
  `fax_number` varchar(25) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `zipcode` varchar(15) DEFAULT NULL,
  `contact_person` varchar(25) DEFAULT NULL,
  `map_link` text DEFAULT NULL,
  `facebook_link` text DEFAULT NULL,
  `instagram_link` text DEFAULT NULL,
  `twitter_link` text DEFAULT NULL,
  `youtube_link` text DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_npo`
--

CREATE TABLE `tb_npo` (
  `id` int(11) NOT NULL,
  `nama_npo` varchar(255) NOT NULL,
  `bidang_npo` varchar(255) DEFAULT NULL,
  `judul_kerjasama` varchar(255) DEFAULT NULL,
  `jenis_kerjasama` varchar(255) DEFAULT NULL,
  `no_thn_kerjasama` varchar(255) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `dok_mou` varchar(255) DEFAULT NULL,
  `dok_moa` varchar(255) DEFAULT NULL,
  `dok_imp` varchar(255) DEFAULT NULL,
  `inisiator` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_telp` varchar(16) DEFAULT NULL,
  `no_fax` varchar(25) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kelurahan` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(15) DEFAULT NULL,
  `rt_rw` varchar(10) DEFAULT NULL,
  `kontak_person` varchar(25) DEFAULT NULL,
  `link_maps` text DEFAULT NULL,
  `link_facebook` text DEFAULT NULL,
  `link_instagram` text DEFAULT NULL,
  `link_twitter` text DEFAULT NULL,
  `link_youtube` text DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_npo`
--

INSERT INTO `tb_npo` (`id`, `nama_npo`, `bidang_npo`, `judul_kerjasama`, `jenis_kerjasama`, `no_thn_kerjasama`, `tgl_mulai`, `tgl_akhir`, `dok_mou`, `dok_moa`, `dok_imp`, `inisiator`, `keterangan`, `email`, `no_telp`, `no_fax`, `website`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `kode_pos`, `rt_rw`, `kontak_person`, `link_maps`, `link_facebook`, `link_instagram`, `link_twitter`, `link_youtube`, `id_user`) VALUES
(3, 'Dompet Muda', 'Amalan', 'Bantuan', 'Sosial', '2022/1218/amalan', NULL, NULL, '', '', '', '', '', 'amalan@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1338),
(4, 'Smart Mangrove', 'Wisata', 'Pariwisata', 'Hiburan', '2022/123728/wisata', NULL, NULL, '', '', '', '', '', 'wisata@gmail.com', '', '', '', '', '', '', 'Bukittinggi', '', '', '', '', '', '', '', '', 1338);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_npo_eng`
--

CREATE TABLE `tb_npo_eng` (
  `id` int(11) NOT NULL,
  `npo_name` varchar(255) NOT NULL,
  `npo_field` varchar(255) DEFAULT NULL,
  `collaboration_title` varchar(255) DEFAULT NULL,
  `type_of_cooperation` varchar(255) DEFAULT NULL,
  `collaboration_year_number` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `doc_mou` varchar(255) DEFAULT NULL,
  `doc_moa` varchar(255) DEFAULT NULL,
  `doc_imp` varchar(255) DEFAULT NULL,
  `initiator` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(16) DEFAULT NULL,
  `fax_number` varchar(25) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `zipcode` varchar(15) DEFAULT NULL,
  `contact_person` varchar(25) DEFAULT NULL,
  `map_link` text DEFAULT NULL,
  `facebook_link` text DEFAULT NULL,
  `instagram_link` text DEFAULT NULL,
  `twitter_link` text DEFAULT NULL,
  `youtube_link` text DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_organisasi`
--

CREATE TABLE `tb_organisasi` (
  `id` int(11) NOT NULL,
  `nama_organisasi` varchar(255) NOT NULL,
  `bidang_organisasi` varchar(255) DEFAULT NULL,
  `judul_kerjasama` varchar(255) DEFAULT NULL,
  `jenis_kerjasama` varchar(255) DEFAULT NULL,
  `no_thn_kerjasama` varchar(255) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `dok_mou` varchar(255) DEFAULT NULL,
  `dok_moa` varchar(255) DEFAULT NULL,
  `dok_imp` varchar(255) DEFAULT NULL,
  `inisiator` varchar(255) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `email_utama` varchar(255) DEFAULT NULL,
  `no_telp` varchar(16) DEFAULT NULL,
  `no_fax` varchar(25) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kelurahan` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(15) DEFAULT NULL,
  `rt_rw` varchar(10) DEFAULT NULL,
  `kontak_person` varchar(15) DEFAULT NULL,
  `link_maps` text DEFAULT NULL,
  `link_facebook` text DEFAULT NULL,
  `link_instagram` text DEFAULT NULL,
  `link_twitter` text DEFAULT NULL,
  `link_youtube` text DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_organisasi`
--

INSERT INTO `tb_organisasi` (`id`, `nama_organisasi`, `bidang_organisasi`, `judul_kerjasama`, `jenis_kerjasama`, `no_thn_kerjasama`, `tgl_mulai`, `tgl_akhir`, `dok_mou`, `dok_moa`, `dok_imp`, `inisiator`, `keterangan`, `email_utama`, `no_telp`, `no_fax`, `website`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `kode_pos`, `rt_rw`, `kontak_person`, `link_maps`, `link_facebook`, `link_instagram`, `link_twitter`, `link_youtube`, `id_user`) VALUES
(3, 'Akama FT', 'Wirausaha', 'PKM', 'Wirausaha', '2022/102/292/akama', NULL, NULL, '', '', '', '', 'UNP', 'akama@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1338),
(4, 'UKFF', 'Wirausaha', 'PKM', 'Fotografi', '2022/102/292/akama', NULL, NULL, '', '', '', '', 'UNP', 'ukff@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1338),
(5, 'UKKP UNP', 'Wirausaha', 'PKM', 'Penyiaran', '2022/102/292/ukkp', NULL, NULL, '', '', '', '', 'UNP', 'ukkp@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1338),
(6, '', NULL, NULL, NULL, NULL, NULL, NULL, 'e-Rapor XI RPL A.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1380);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_organisasi_eng`
--

CREATE TABLE `tb_organisasi_eng` (
  `id` int(11) NOT NULL,
  `organization_name` varchar(255) NOT NULL,
  `organizational_field` varchar(255) DEFAULT NULL,
  `collaboration_title` varchar(255) DEFAULT NULL,
  `type_of_cooperation` varchar(255) DEFAULT NULL,
  `collaboration_year_number` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `doc_mou` varchar(255) DEFAULT NULL,
  `doc_moa` varchar(255) DEFAULT NULL,
  `doc_imp` varchar(255) DEFAULT NULL,
  `initiator` varchar(255) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `main_email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(16) DEFAULT NULL,
  `fax_number` varchar(25) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `zipcode` varchar(15) DEFAULT NULL,
  `contact_person` varchar(15) DEFAULT NULL,
  `map_link` text DEFAULT NULL,
  `facebook_link` text DEFAULT NULL,
  `instagram_link` text DEFAULT NULL,
  `twitter_link` text DEFAULT NULL,
  `youtube_link` text DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perguruan_tinggi`
--

CREATE TABLE `tb_perguruan_tinggi` (
  `id` int(11) NOT NULL,
  `nama_peguruan_tinggi` varchar(255) NOT NULL,
  `bidang_kerjasama` varchar(255) DEFAULT NULL,
  `judul_kerjasama` varchar(255) DEFAULT NULL,
  `jenis_kerjasama` varchar(255) DEFAULT NULL,
  `no_thn_kerjasama` varchar(255) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `dok_mou` varchar(255) DEFAULT NULL,
  `dok_moa` varchar(255) DEFAULT NULL,
  `dok_imp` varchar(255) DEFAULT NULL,
  `inisiator` varchar(255) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `fakultas` varchar(255) DEFAULT NULL,
  `email_utama` varchar(255) DEFAULT NULL,
  `no_telp` varchar(16) DEFAULT NULL,
  `no_fax` varchar(25) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kelurahan` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(15) DEFAULT NULL,
  `rt_rw` varchar(10) DEFAULT NULL,
  `kontak_person` varchar(15) DEFAULT NULL,
  `link_maps` text DEFAULT NULL,
  `link_facebook` text DEFAULT NULL,
  `link_instagram` text DEFAULT NULL,
  `link_twitter` text DEFAULT NULL,
  `link_youtube` text DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_perguruan_tinggi`
--

INSERT INTO `tb_perguruan_tinggi` (`id`, `nama_peguruan_tinggi`, `bidang_kerjasama`, `judul_kerjasama`, `jenis_kerjasama`, `no_thn_kerjasama`, `tgl_mulai`, `tgl_akhir`, `dok_mou`, `dok_moa`, `dok_imp`, `inisiator`, `keterangan`, `fakultas`, `email_utama`, `no_telp`, `no_fax`, `website`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `kode_pos`, `rt_rw`, `kontak_person`, `link_maps`, `link_facebook`, `link_instagram`, `link_twitter`, `link_youtube`, `id_user`) VALUES
(1, 'Univeristas Andalas', 'Studi Independen', 'Pertukaran pelajar', 'MBKM', '12131/2022/unandrangers', '2022-02-26', '2022-06-21', '', '', '', 'UNP', '', '', 'unand@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1379),
(2, 'Univeristas Ekasakti', 'Studi Independen', 'Magang Merdeka', 'MBKM', '', NULL, NULL, '', '', '', 'UNP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1338),
(3, 'UIN Imam Bonjol', 'Magang ', 'Magang Merdeka', 'MBKM', '', '2022-02-26', NULL, '', '', '', 'UNP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1338);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perguruan_tinggi_eng`
--

CREATE TABLE `tb_perguruan_tinggi_eng` (
  `id` int(11) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `collaboration_title` varchar(255) DEFAULT NULL,
  `cooperation_field` varchar(255) DEFAULT NULL,
  `type_of_cooperation` varchar(255) DEFAULT NULL,
  `collaboration_year_number` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `doc_mou` varchar(255) DEFAULT NULL,
  `doc_moa` varchar(255) DEFAULT NULL,
  `doc_imp` varchar(255) DEFAULT NULL,
  `initiator` varchar(255) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `faculty` varchar(255) DEFAULT NULL,
  `main_email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(16) DEFAULT NULL,
  `fax_number` varchar(25) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `zipcode` varchar(15) DEFAULT NULL,
  `contact_person` varchar(15) DEFAULT NULL,
  `map_link` text DEFAULT NULL,
  `facebook_link` text DEFAULT NULL,
  `instagram_link` text DEFAULT NULL,
  `twitter_link` text DEFAULT NULL,
  `youtube_link` text DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `bidang_kerjasama` varchar(255) DEFAULT NULL,
  `judul_kerjasama` varchar(255) DEFAULT NULL,
  `jenis_kerjasama` varchar(255) DEFAULT NULL,
  `no_thn_kerjasama` varchar(255) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `dok_mou` varchar(255) DEFAULT NULL,
  `dok_moa` varchar(255) DEFAULT NULL,
  `dok_imp` varchar(255) DEFAULT NULL,
  `inisiator` varchar(255) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `email_utama` varchar(255) NOT NULL,
  `no_telp` varchar(16) DEFAULT NULL,
  `no_fax` varchar(25) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kelurahan` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(15) DEFAULT NULL,
  `rt_rw` varchar(10) DEFAULT NULL,
  `kontak_person` varchar(25) DEFAULT NULL,
  `link_maps` text DEFAULT NULL,
  `link_facebook` text DEFAULT NULL,
  `link_instagram` text DEFAULT NULL,
  `link_twitter` text DEFAULT NULL,
  `link_youtube` text DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`id`, `nama_sekolah`, `bidang_kerjasama`, `judul_kerjasama`, `jenis_kerjasama`, `no_thn_kerjasama`, `tgl_mulai`, `tgl_akhir`, `dok_mou`, `dok_moa`, `dok_imp`, `inisiator`, `keterangan`, `email_utama`, `no_telp`, `no_fax`, `website`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `kode_pos`, `rt_rw`, `kontak_person`, `link_maps`, `link_facebook`, `link_instagram`, `link_twitter`, `link_youtube`, `id_user`) VALUES
(161, 'SMKN 4 PADANG', '', '', '', '', NULL, NULL, NULL, 'Alur_Penerimaan_Mahasiswa_Asing[1].docx', NULL, '', '', 'nuraddina9@gmail.com', '', '', '', '', '', '', '', '', '', '', '', 'qwqwq', '', '', '', 1355),
(164, 'SMKN 3 PARIAMAN', 'Studi independen', 'MBKM', 'Belajar', '1231/2022/727Smkn3prm', NULL, NULL, NULL, NULL, NULL, 'UNP', '', 'smkn3@gmail.com', '07382323723', '', '', 'Pariaman', 'Manggung', 'Pariaman Timur', 'Pariaman', '', '03/05', '', '', '', 'https://instagram.smkn3prm', '', '', 1378),
(165, 'lala', 'da', 'ad', 'ad', 'ad', '0000-00-00', '0000-00-00', 'we', 'ww', 'dsd', 'sdd', 'sdsds', 'dsdd', 'sds', 'dsd', 'sd', 'sd', 'sds', 'sd', 'sdsd', 's', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1338),
(166, 'dsds', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1382);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sekolah_eng`
--

CREATE TABLE `tb_sekolah_eng` (
  `id` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `cooperation_field` varchar(255) DEFAULT NULL,
  `collaboration_title` varchar(255) DEFAULT NULL,
  `type_of_cooperation` varchar(255) DEFAULT NULL,
  `collaboration_year_number` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `doc_mou` varchar(255) DEFAULT NULL,
  `doc_moa` varchar(255) DEFAULT NULL,
  `doc_imp` varchar(255) DEFAULT NULL,
  `initiator` varchar(255) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `main_email` varchar(255) NOT NULL,
  `phone_number` varchar(16) DEFAULT NULL,
  `fax_number` varchar(25) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `zipcode` varchar(15) DEFAULT NULL,
  `contact_person` varchar(25) DEFAULT NULL,
  `map_link` text DEFAULT NULL,
  `facebook_link` text DEFAULT NULL,
  `instagram_link` text DEFAULT NULL,
  `twitter_link` text DEFAULT NULL,
  `youtube_link` text DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sekolah_eng`
--

INSERT INTO `tb_sekolah_eng` (`id`, `school_name`, `cooperation_field`, `collaboration_title`, `type_of_cooperation`, `collaboration_year_number`, `start_date`, `end_date`, `doc_mou`, `doc_moa`, `doc_imp`, `initiator`, `description`, `main_email`, `phone_number`, `fax_number`, `website`, `address`, `city`, `state`, `country`, `zipcode`, `contact_person`, `map_link`, `facebook_link`, `instagram_link`, `twitter_link`, `youtube_link`, `user_id`) VALUES
(1, 'International School', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', 'intschool@gmail.com', '+210078', '', '', '', '', '', '', '', '', '', '', '', '', '', 1377);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_student`
--

CREATE TABLE `tb_student` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `negara` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `asal_pt` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_telp` varchar(16) DEFAULT NULL,
  `spermohonan` varchar(255) DEFAULT NULL,
  `biodata` varchar(255) DEFAULT NULL,
  `pas_photo` varchar(255) DEFAULT NULL,
  `ijazah` varchar(255) DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `sjaminan_keuangan` varchar(255) DEFAULT NULL,
  `sket_kesehatan` varchar(255) DEFAULT NULL,
  `spernyataan_tbekerja` varchar(255) DEFAULT NULL,
  `surat_rekomendasi_kampus` varchar(255) DEFAULT NULL,
  `prestasi` varchar(255) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_student_eng`
--

CREATE TABLE `tb_student_eng` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `major` varchar(255) DEFAULT NULL,
  `original_college` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(16) DEFAULT NULL,
  `application_letter` varchar(255) DEFAULT NULL,
  `biodata` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `certificate` varchar(255) DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `financial_guarantee_letter` varchar(255) DEFAULT NULL,
  `health_certificate` varchar(255) DEFAULT NULL,
  `statement_letter` varchar(255) DEFAULT NULL,
  `campus_recommendation_letter` varchar(255) DEFAULT NULL,
  `achievement` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto_profil` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `lokasi_pti` int(11) DEFAULT NULL,
  `lokasi_dinas` int(11) DEFAULT NULL,
  `gelar_depan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gelar_belakang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`, `role`, `foto_profil`, `lokasi_pti`, `lokasi_dinas`, `gelar_depan`, `gelar_belakang`) VALUES
(1338, 'superadmin', NULL, 'T67tV_UsuX3Eod_ro6R4eOVLSDY0N_C7', '$2y$13$U0edyHr98bATwL7Gc8/YneyqtBzRa.goouoSIT/FU9pRJ3tz.CZl6', NULL, 'superadmin@gmail.com', 10, 1673183638, 1673183638, 'GxyBylrUUojEeYLQMpyFUzq6vMbgPwjl_1673183638', 'superadmin', NULL, NULL, NULL, NULL, NULL),
(1339, 'akatrust', 'Perusahaan Akatrust', 'RfgHBw6Ux2saeADq_W7aqnuGe14cMag_', '$2y$13$fEFlh/KIZ42DjcnooTg7W.zUnJDb/Rl2lw/3lPks1GOnsbpIiMYlO', NULL, 'aka@gmail.com', 10, 1673406437, 1673406437, 'kiLTPCVxwUpqCDT---07nr2WkalHCThB_1673406437', 'industri', 'btk3 bangau.jpg', NULL, NULL, 'PT', '.com'),
(1355, 'smkn4', 'smkn4', 'QZpOeK1g7GAA9HL5k9k0AI-yFeOS90nN', '$2y$13$xh0o.xNLqy5XSMKeBRbut.TxYIv7ukA7R.poDRzqgj2kAGI74L7me', NULL, 'smkn4@gmail.com', 10, 1673545543, 1673545543, 'JrYn12rXbKyBScy44789KU0QVZvKQfj7_1673545543', 'sekolah', 'btk2.jpg', NULL, NULL, '', '-'),
(1356, 'garuda', 'Garuda Cybere', 'CSgai0dfbh7eAHzWeQt257goySNZxufs', '$2y$13$fmYLcS/f8WJYLdiR/ljq4ebd44p6sicB80SMMm4okFW8Iwfp.DrR.', NULL, 'garuda@gmail.com', 10, 1673546231, 1673546231, '2j1lLurjOzfMghm_BibaY_YAAaeCgpuQ_1673546231', 'industri', '', NULL, NULL, '', ''),
(1357, 'ui', 'Universitas Indonesia', 'wjHbYvkb789YE5bIEU_i-va_Ky-cnh5H', '$2y$13$QBGOdrEPc8xg.kJOazlfreY8BszAtboZvYWMYDfKHzsD4ab8eozgu', NULL, 'ui@gmail.com', 10, 1673584561, 1673584561, 'gPZmFfRKMwCRTGiJ_vXyiPXUmkF4Q1LK_1673584561', 'PT', NULL, NULL, NULL, NULL, NULL),
(1360, 'dprri', 'DPR', 'yl1hyiA1D0S0q9AOnbdSS2sWon9V_BFP', '$2y$13$pRsxriygzCYJM3k2.7a/R.7ot.Qd2BCJazW9z95/fFFMEJbAhAAFm', NULL, 'dpr@gmail.com', 10, 1673586505, 1673586505, 'fyHRYYUwPAmyfVAVUixPbZg9GjeqyRfj_1673586505', 'dinas', NULL, NULL, NULL, NULL, NULL),
(1365, 'duafaa', 'Duafa', 'djWUqvxdIUQjfRSZY2JqPqKTATkXr1up', '$2y$13$VBuDfBLxGL8PXBmeyuFyl.ob6/qC5dLE5Y5RmhLTUNO5qgqt8mhfK', NULL, 'duafaa@gmail.com', 10, 1673879528, 1673879528, 'eGQo_srkApFiRjUK1CQOKS9grx6YVWg1_1673879528', 'NPO', NULL, NULL, NULL, NULL, NULL),
(1366, 'duafapadg', 'Duafa_padang', 'E5zy-ux6BhbRqCiL4x1dlbwVMYSjAo1z', '$2y$13$X.hwm64PERMqewjxgXHTc.Cnsk1hW03VJ7CyNaiAurA970aRLJl/a', NULL, 'duafa_pdg@gmail.com', 10, 1673879608, 1673879608, 'Vvs_K9esd-fitcH88i_uZRyH8Mo2EYWi_1673879608', 'NPO', NULL, NULL, NULL, NULL, NULL),
(1367, 'ikbm', 'IKBM', 'g1XcNBoQCuFATfV0FOHlVwhSCDj0Gmkf', '$2y$13$R7wrtGMRYGTeFqFiuu61..wR97vwYU9.6mev0R2amyAWfmfAi9l/S', NULL, 'ikbm@gmail.com', 10, 1673928723, 1673928723, '_MESV27dvBcTGQKvAirYqezQWJ9H6YTo_1673928723', 'organisasi', NULL, NULL, NULL, NULL, NULL),
(1368, 'kemenag', 'Kementrian Agama', 'mQZ1Nvv1UmYceeU5EjBquJy-d6g4FKh6', '$2y$13$A09AJd62tFEFj2iqVNvZKe6OCHn43WfEHCy2etVC8ZyzIr7s3r6a.', NULL, 'kemenag@gmail.com', 10, 1674063090, 1674063090, 'DdiIQZrHIGO4dYmlzVZiTQWAAGHX_TvN_1674063090', 'dinas', NULL, NULL, NULL, NULL, NULL),
(1369, 'mediatama', 'Mediatama Web', 'IlnrpGvESa4YbVakOuGE59OxXSnwWTkI', '$2y$13$j/dxYyXK60mbwR6znkCoN.DCR8ZHX.P0h66r.l4RjVutOG92T2sPm', NULL, 'mediatama@gmail.com', 10, 1674115142, 1674115142, '0bPx3cz9Ibz4HWaDyW22tRLvyEFwfdjU_1674115142', 'industri', NULL, NULL, NULL, NULL, NULL),
(1372, 'Hs', 'High School', '5ef8Rwh1iUY35qnt3W8UArFQfn8eCHZh', '$2y$13$091RRM9Wbr/6woY619zPeurkZdGiUukIgsEylNkLkcfDmk1a6XnJa', NULL, 'hs@gmail.com', 10, 1675155062, 1675155062, '4MJuob644OVgg3dUP4w49QElcJRKk9c2_1675155062', 'studenteng', NULL, NULL, NULL, NULL, NULL),
(1373, 'oxford', 'Oxford University', 'AR0BVhvsZANaZbDK2_EB79s7GPOIuJCt', '$2y$13$K.Lk88tq31et4pxF4bI3CuwiVp3JK9WSjgxU0ri.J2pmIaN8mSSrK', NULL, 'ox@gmail.com', 10, 1675155357, 1675155357, 'PKEV7aOJu9RY0yDqcf2nfTqnTLvNGLRY_1675155357', 'PTeng', NULL, NULL, NULL, NULL, NULL),
(1375, 'dinasti', 'Dinasti Tiongkok', 'GI2bW6hVTgF8fZ7nBE28bZ6Fbz68YWaJ', '$2y$13$WlOnBRM.dkAeS5BhSCVpjereU/1gwskn9OuNh6X7MRArAImNvtYnS', NULL, 'dinasti@gmail.com', 10, 1675155771, 1675155771, 'N0O1PxpumMu5z5qoWsAws2n_ilZd3YOE_1675155771', 'dinaseng', 'btk3 bangau.jpg', NULL, NULL, '', 'Tk'),
(1377, 'inschool', 'International School', 'wAHsEghPPeuvXdPQkKIvjhJp6ObBWmkY', '$2y$13$JciP06YLBJ0cMuuV2qoHE.ie5Hvtnj3egy/euwsW.vJTPIn0wwof2', NULL, 'intschool@gmail.com', 10, 1675397933, 1675397933, '3I_3SY_6aYjgvsEt9cualUFOfI2wvWSa_1675397933', 'sekolaheng', NULL, NULL, NULL, NULL, NULL),
(1378, 'smkn3prm', 'SMKN 3 Pariaman', '7pMn2etvun7w-51TLML16jdz30-rpR3j', '$2y$13$oWi6OHE2M0oN50eku/QXSOsOLbhkk0vzIKgGklRF/PZ5Im5pZhtu2', NULL, 'smkn3@gmail.com', 10, 1675402231, 1675402231, 'SElgoebiUCZB1ARo9brSBjO-nysfI-i7_1675402231', 'sekolah', NULL, NULL, NULL, NULL, NULL),
(1379, 'unand', 'Universitas Andalas', '6NfN5PQW8FA2oHODl4i-FiQo6sTAY4x6', '$2y$13$v91RHvlfRCiLdKwzpbDWwu3MJ9Ghoo6nxQBXlud4I3Jo93OsR1AYO', NULL, 'unand@gmail.com', 10, 1675402474, 1675402474, '5hdGig-ExxW09nDEy_fCYIiTIXc7XPgq_1675402474', 'PT', NULL, NULL, NULL, NULL, NULL),
(1380, 'bidikmisi', 'bidikmisi', '1HqIVJ1-SQLT-NMOtYJUrSMarfTfNi9m', '$2y$13$pP4aphJYuKymvCz1h8gQPugntP1ILg6L08yL3fAVK2P.acJw3XMkm', NULL, 'bidikmisi@gmail.com', 10, 1675415895, 1675415895, 'zxJoex9NfhcyR3fDWvD0r5jmOdyI0tjZ_1675415895', 'organisasi', NULL, NULL, NULL, NULL, NULL),
(1381, 'admin_eng', NULL, '-_YG9IorEmYnrK8V4i_-LIkaatbt5BlH', '$2y$13$jYh5fv9vJBoRND1p5XSRJ.EC2fka06f1wZOBtBTemx9KB2GiKXEfq', NULL, 'admineng@gmail.com', 10, 1675417195, 1675417195, 'imrbo9yqGItapRHBiOP3OUMwHqhcs0Cv_1675417195', 'admin_eng', NULL, NULL, NULL, NULL, NULL),
(1382, 'admin_ind', NULL, 'QgRBjy_-KG2QQMekiU58Aabped_93ks6', '$2y$13$yECIO207Ppk4q5W5PFCs/.NFWCaJga83dVu5y.ExbQf5rsWDBbsQ2', NULL, 'adminind@gmail.com', 10, 1675417277, 1675417277, '61s8JdA9jvnRJqRQUNqI_yGJeb0RjOAv_1675417277', 'admin_ind', NULL, NULL, NULL, NULL, NULL),
(1384, 'lury', 'lury', 'Sgpb25ifMbTbrH5KL5Wa3b42Pi_0m5zs', '$2y$13$c5Toj/pQwq/iHRUQzuonN.giNuCpJckPIQj2wXkneQPu6T2bYJ2WS', NULL, 'lr@gmail.com', 10, 1675681462, 1675681462, 'UvdpnYJMydZuZ5Hv7m7nkvOfOENpdN6E_1675681462', 'industri', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `about_eng`
--
ALTER TABLE `about_eng`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `choose`
--
ALTER TABLE `choose`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `choose_eng`
--
ALTER TABLE `choose_eng`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `faq_eng`
--
ALTER TABLE `faq_eng`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indeks untuk tabel `tb_dinas`
--
ALTER TABLE `tb_dinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tb_industri` (`id_user`);

--
-- Indeks untuk tabel `tb_dinas_eng`
--
ALTER TABLE `tb_dinas_eng`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tb_industri` (`user_id`);

--
-- Indeks untuk tabel `tb_industri`
--
ALTER TABLE `tb_industri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tb_industri` (`id_user`);

--
-- Indeks untuk tabel `tb_industri_eng`
--
ALTER TABLE `tb_industri_eng`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tb_industri` (`user_id`);

--
-- Indeks untuk tabel `tb_npo`
--
ALTER TABLE `tb_npo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_npo_eng`
--
ALTER TABLE `tb_npo_eng`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`user_id`);

--
-- Indeks untuk tabel `tb_organisasi`
--
ALTER TABLE `tb_organisasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_organisasi_eng`
--
ALTER TABLE `tb_organisasi_eng`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`user_id`);

--
-- Indeks untuk tabel `tb_perguruan_tinggi`
--
ALTER TABLE `tb_perguruan_tinggi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_perguruan_tinggi_eng`
--
ALTER TABLE `tb_perguruan_tinggi_eng`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`user_id`);

--
-- Indeks untuk tabel `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tb_industri` (`id_user`);

--
-- Indeks untuk tabel `tb_sekolah_eng`
--
ALTER TABLE `tb_sekolah_eng`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tb_industri` (`user_id`);

--
-- Indeks untuk tabel `tb_student`
--
ALTER TABLE `tb_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_student_eng`
--
ALTER TABLE `tb_student_eng`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`user_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD KEY `FK_user` (`lokasi_dinas`),
  ADD KEY `FK_user2` (`lokasi_pti`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `about_eng`
--
ALTER TABLE `about_eng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `choose`
--
ALTER TABLE `choose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `choose_eng`
--
ALTER TABLE `choose_eng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `faq_eng`
--
ALTER TABLE `faq_eng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_dinas`
--
ALTER TABLE `tb_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT untuk tabel `tb_dinas_eng`
--
ALTER TABLE `tb_dinas_eng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT untuk tabel `tb_industri`
--
ALTER TABLE `tb_industri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT untuk tabel `tb_industri_eng`
--
ALTER TABLE `tb_industri_eng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_npo`
--
ALTER TABLE `tb_npo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_npo_eng`
--
ALTER TABLE `tb_npo_eng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_organisasi`
--
ALTER TABLE `tb_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_organisasi_eng`
--
ALTER TABLE `tb_organisasi_eng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_perguruan_tinggi`
--
ALTER TABLE `tb_perguruan_tinggi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_perguruan_tinggi_eng`
--
ALTER TABLE `tb_perguruan_tinggi_eng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT untuk tabel `tb_sekolah_eng`
--
ALTER TABLE `tb_sekolah_eng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_student`
--
ALTER TABLE `tb_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_student_eng`
--
ALTER TABLE `tb_student_eng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1385;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_dinas`
--
ALTER TABLE `tb_dinas`
  ADD CONSTRAINT `FK_tb_dinas` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_dinas_eng`
--
ALTER TABLE `tb_dinas_eng`
  ADD CONSTRAINT `tb_dinas_eng_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_industri`
--
ALTER TABLE `tb_industri`
  ADD CONSTRAINT `FK_tb_industri` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_industri_eng`
--
ALTER TABLE `tb_industri_eng`
  ADD CONSTRAINT `tb_industri_eng_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_npo`
--
ALTER TABLE `tb_npo`
  ADD CONSTRAINT `tb_npo_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_npo_eng`
--
ALTER TABLE `tb_npo_eng`
  ADD CONSTRAINT `tb_npo_eng_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_organisasi`
--
ALTER TABLE `tb_organisasi`
  ADD CONSTRAINT `tb_organisasi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_organisasi_eng`
--
ALTER TABLE `tb_organisasi_eng`
  ADD CONSTRAINT `tb_organisasi_eng_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_perguruan_tinggi`
--
ALTER TABLE `tb_perguruan_tinggi`
  ADD CONSTRAINT `tb_perguruan_tinggi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_perguruan_tinggi_eng`
--
ALTER TABLE `tb_perguruan_tinggi_eng`
  ADD CONSTRAINT `tb_perguruan_tinggi_eng_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD CONSTRAINT `FK_tb_sekolah` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_sekolah_eng`
--
ALTER TABLE `tb_sekolah_eng`
  ADD CONSTRAINT `tb_sekolah_eng_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_student`
--
ALTER TABLE `tb_student`
  ADD CONSTRAINT `tb_student_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_student_eng`
--
ALTER TABLE `tb_student_eng`
  ADD CONSTRAINT `tb_student_eng_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
