SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `trochoicauhoi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `trochoicauhoi`;

CREATE TABLE `cau_hinh_app` (
  `id` int(10) UNSIGNED NOT NULL,
  `co_hoi_sai` int(11) NOT NULL,
  `thoi_gian_tra_loi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `cau_hinh_diem_cau_hoi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `diem` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `cau_hinh_tro_giup` (
  `id` int(10) UNSIGNED NOT NULL,
  `loai_tro_giup` int(11) NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `cau_hoi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `linh_vuc_id` int(10) UNSIGNED NOT NULL,
  `phuong_an_a` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phuong_an_b` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phuong_an_c` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phuong_an_d` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dap_an` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `chi_tiet_luot_choi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `luot_choi_id` int(11) NOT NULL,
  `cau_hoi_id` int(11) NOT NULL,
  `phuong_an` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diem` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `goi_credit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_goi_credit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` int(11) NOT NULL,
  `so_tien` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `lich_su_mua_credit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nguoi_choi_id` int(10) UNSIGNED NOT NULL,
  `goi_credit_id` int(10) UNSIGNED NOT NULL,
  `credit` int(11) NOT NULL,
  `so_tien` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `linh_vuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_linh_vuc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `luot_choi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nguoi_choi_id` int(10) UNSIGNED NOT NULL,
  `so_cau` int(11) NOT NULL,
  `diem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_gio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_10_14_140135_create_linh_vucs_table', 1),
(2, '2019_10_14_140227_create_nguoi_chois_table', 1),
(3, '2019_10_14_140253_create_lich_su_mua_credits_table', 1),
(4, '2019_10_14_140306_create_goi_credits_table', 1),
(5, '2019_10_14_140316_create_cau_hois_table', 1),
(6, '2019_10_14_140333_create_chi_tiet_luot_chois_table', 1),
(7, '2019_10_14_140344_create_luot_chois_table', 1),
(8, '2019_10_14_140356_create_cau_hinh_diem_cau_hois_table', 1),
(9, '2019_10_14_140425_create_cau_hinh_apps_table', 1),
(10, '2019_10_14_140437_create_quan_tri_viens_table', 1),
(11, '2019_10_14_140450_create_cau_hinh_tro_giups_table', 1),
(12, '2019_10_14_144847_them_khoa_ngoai_cau_hoi', 1),
(13, '2019_10_15_030915_them_khoa_ngoai_luot_choi', 1);

CREATE TABLE `nguoi_choi` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_dang_nhap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_dai_dien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diem_cao_nhat` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `quan_tri_vien` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_dang_nhap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


ALTER TABLE `cau_hinh_app`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `cau_hinh_diem_cau_hoi`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `cau_hinh_tro_giup`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `cau_hoi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cau_hoi_linh_vuc_id_foreign` (`linh_vuc_id`);

ALTER TABLE `chi_tiet_luot_choi`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `goi_credit`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `lich_su_mua_credit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lich_su_mua_credit_nguoi_choi_id_foreign` (`nguoi_choi_id`);

ALTER TABLE `linh_vuc`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `luot_choi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `luot_choi_nguoi_choi_id_foreign` (`nguoi_choi_id`);

ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `nguoi_choi`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `quan_tri_vien`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `cau_hinh_app`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `cau_hinh_diem_cau_hoi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `cau_hinh_tro_giup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `cau_hoi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `chi_tiet_luot_choi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `goi_credit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `lich_su_mua_credit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `linh_vuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `luot_choi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `nguoi_choi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `quan_tri_vien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;


ALTER TABLE `cau_hoi`
  ADD CONSTRAINT `cau_hoi_linh_vuc_id_foreign` FOREIGN KEY (`linh_vuc_id`) REFERENCES `linh_vuc` (`id`);

ALTER TABLE `lich_su_mua_credit`
  ADD CONSTRAINT `lich_su_mua_credit_nguoi_choi_id_foreign` FOREIGN KEY (`nguoi_choi_id`) REFERENCES `nguoi_choi` (`id`);

ALTER TABLE `luot_choi`
  ADD CONSTRAINT `luot_choi_nguoi_choi_id_foreign` FOREIGN KEY (`nguoi_choi_id`) REFERENCES `nguoi_choi` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
