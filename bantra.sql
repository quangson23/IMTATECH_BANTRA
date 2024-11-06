-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 28, 2024 lúc 07:35 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bantra`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `image`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'uploads/sanpham/yeDy4RGZ6tFYx0sDLCnKBN469c0Lxmofraq0ASCH.jpg', 'ádasđsad', NULL, NULL),
(2, 'uploads/sanpham/iz5FFErcxFX9oFHz9rTtAHY1Dc6RZjibSC2DB6tH.jpg', 'jjh', NULL, NULL),
(3, 'uploads/sanpham/8YJy119GFmH2T021EJuMK4R9x04RP36rKHEEOCVQ.jpg', 'xvxcv', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `categories_description` text NOT NULL,
  `categories_status` tinyint(1) NOT NULL DEFAULT 1,
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `categories_name`, `categories_description`, `categories_status`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'Trà tuyết shan', '<p>Trà tuyết shan<br></p>', 1, 'uploads/sanpham/JQklUyllVfNFWlG81Spu51GkOOYN5aN8Dsc2Cwaj.jpg', NULL, NULL),
(2, 'Dụng cụ pha trà', '<p>Dụng cụ pha trà<br></p>', 0, 'uploads/sanpham/sV6Q2b2ySFC8v0f0SCKCaaLAYgZBmFIEv6PzXoyC.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(255) NOT NULL,
  `coupon_condition` tinyint(1) NOT NULL DEFAULT 1,
  `coupon_price` double DEFAULT NULL,
  `coupon_number` bigint(20) UNSIGNED NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_condition`, `coupon_price`, `coupon_number`, `coupon_code`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'giáng sinh', 1, 10, 334, 'GSSDJ', '2024-09-28', '2024-10-04', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_23_153556_create_banner_table', 1),
(6, '2024_07_23_191229_create_categories_table', 1),
(7, '2024_07_23_192345_create_products_table', 1),
(8, '2024_07_23_203117_update_users_table', 1),
(9, '2024_07_26_145241_create_coupons_table', 1),
(10, '2024_07_28_014553_create_promotions_table', 1),
(11, '2024_07_28_014627_change_foreign_products_table', 1),
(12, '2024_07_31_132655_create_orders_table', 1),
(13, '2024_07_31_132831_create_order_details_table', 1),
(14, '2024_07_31_133053_update_users_table', 1),
(15, '2024_07_31_202139_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_oder` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `recipient_name` varchar(255) NOT NULL,
  `recipient_email` varchar(255) NOT NULL,
  `recipient_phone` varchar(255) NOT NULL,
  `recipient_address` varchar(255) NOT NULL,
  `note` text DEFAULT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT 'cho_xac_nhan',
  `payment_status` varchar(255) NOT NULL DEFAULT 'chua_thanh_toan',
  `item_price` double NOT NULL,
  `shipping_cost` double NOT NULL,
  `total_amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `unit_price` double NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `total_amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `regular_price` double NOT NULL,
  `discount_price` double DEFAULT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `product_description` text NOT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `view` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `product_note` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `tag` tinyint(1) NOT NULL DEFAULT 1,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `promotions_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `product_name`, `regular_price`, `discount_price`, `quantity`, `short_description`, `product_description`, `sku`, `view`, `created_by`, `updated_by`, `product_note`, `image`, `tag`, `category_id`, `promotions_id`, `created_at`, `updated_at`) VALUES
(1, 'Trà xanh Viên hộp 80G', 320000, NULL, 33, 'fsdf', '<p>\r\nTrà Xanh Viên là sản phẩm trà cao cấp của thương hiệu Shanam, được tuyển chọn từ nguyên liệu 1 tôm 2 lá của cây chè Shan Tuyết Cổ Thụ 100 năm tuổi trên đỉnh Tà Xùa. Trà Xanh Viên mang vị chát mạnh, ngọt hậu và lưu vị rất sâu. thích hợp cho những người chuyên uống trà lâu năm. Viên không chỉ đại diện cho hình dáng sản phẩm mà còn là sự viên mãn, tròn đầy dành cho người uống.</p>', NULL, NULL, NULL, NULL, NULL, 'uploads/sanpham/jo95Wh7xbdsURclPnisjEMRmstJIV6hO93egjBL5.webp', 1, 1, 1, '2024-09-13 17:00:00', NULL),
(2, 'TRÀ XANH MÂY HỘP 80G', 285000, 200000, 34, 'Tà Xùa được mệnh danh là “thiên đường”', '<p><br></p><p><span style=\"font-weight: bolder; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252);\">Tà Xùa&nbsp;</span><span style=\"color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252);\">được mệnh danh là&nbsp;</span><span style=\"font-weight: bolder; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252);\">“thiên đường” Mây</span><span style=\"color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252);\">&nbsp;toàn vùng Tây Bắc, mây ở đây quanh năm vờn đỉnh núi, tạo thành biển mây đầy ấn tượng. Trên đỉnh cao&nbsp;</span><span style=\"font-weight: bolder; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252);\">2.800m</span><span style=\"color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252);\">&nbsp;ở Tà Xùa, hiện hữu một quần thể rừng trà&nbsp;</span><span style=\"font-weight: bolder; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252);\">Shan Tuyết Cổ Thụ</span><span style=\"color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252);\">&nbsp;được Hội đồng Cây Di sản Việt Nam xác định có tuổi đời trung bình&nbsp;</span><span style=\"font-weight: bolder; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252);\">trên 150 năm.</span><br></p>', NULL, NULL, NULL, NULL, NULL, 'uploads/sanpham/C8oHkQVYscjqT5PCeXUHGN2U3dV5ZKRA25BiCDrX.webp', 1, 1, 1, '2024-09-25 17:00:00', NULL),
(3, 'TRÀ XANH THỨC HỘP 80G', 285000, 280000, 2222, 'Mỗi ấm trà xanh Thức', '<p><br></p><p><span style=\"color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252);\">Mỗi ấm&nbsp;</span><span style=\"font-weight: bolder; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252);\">trà xanh Thức</span><span style=\"color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252);\">&nbsp;pha được&nbsp;</span><span style=\"font-weight: bolder; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252);\">08 lần nước</span><span style=\"color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252);\">.&nbsp;Vị chát rất mạnh, đậm, êm, ngọt hậu rất lâu. Hương thơm nhẹ, tự nhiên.&nbsp;Nước trà màu vàng, trong, không đổi màu nước khi nguội.&nbsp;Búp trà cong, hình bán nguyệt. Bã trà sau khi pha màu vàng.&nbsp;Nguyên liệu trà xanh Thức búp 1 tôm 2 lá, từ cây chè&nbsp;</span><span style=\"font-weight: bolder; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252);\">Shan tuyết cổ thụ&nbsp;</span><span style=\"color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252);\">trên 100 năm tuổi.&nbsp;Chè được diệt men theo công nghệ chế biến Trà Xanh hiện đại,&nbsp;</span><span style=\"font-weight: bolder; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252);\">100% tự nhiên</span><span style=\"color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252);\">, không hóa chất.</span><br></p>', NULL, NULL, NULL, NULL, NULL, 'uploads/sanpham/ZCHrKEo6TQGo1QMEibbbepM9QYGTQ69zolmSIDXF.webp', 1, 1, 1, '2024-09-24 17:00:00', NULL),
(4, 'TRÀ XANH TRÚC HỘP 100G', 370000, 360000, 545, 'Trà Xanh Trúc có vị chát đậm vừa,', '<p><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252); text-align: justify;\"><span style=\"font-weight: bolder;\">Trà&nbsp;Xanh Trúc&nbsp;</span>có vị chát đậm vừa, rất êm, ngọt hậu lâu, không đắng, gắt. Hương thơm tự nhiên, nước trà màu vàng, trong, không đổi màu nước khi nguội.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252); text-align: justify;\">Búp trà dài, hình lá trúc, đốm trắng, bã trà sau khi pha có màu vàng. Búp chè Trúc 1 tôm và 2 lá được người dân tộc H’Mông bản địa hái bằng tay từ cây chè trên 100 năm tuổi, 100% tự nhiên.</p>', NULL, NULL, NULL, NULL, NULL, 'uploads/sanpham/AWoQadzpMdpct1Jq0A7Z3TdUfRgdJrOlBZe1pUTu.webp', 1, 1, 1, '2024-09-26 17:00:00', NULL),
(5, 'TRÀ XANH THỨC HỘP 100G', 350000, 300000, 432, 'ị chát rất mạnh, đậm, êm, ngọt hậu rất lâu', '<p><br></p><p><span style=\"color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; text-align: justify; background-color: rgb(252, 251, 252);\">Mỗi ấm&nbsp;</span><span style=\"font-weight: bolder; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; text-align: justify; background-color: rgb(252, 251, 252);\">trà xanh Thức</span><span style=\"color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; text-align: justify; background-color: rgb(252, 251, 252);\">&nbsp;pha được&nbsp;</span><span style=\"font-weight: bolder; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; text-align: justify; background-color: rgb(252, 251, 252);\">08 lần nước</span><span style=\"color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; text-align: justify; background-color: rgb(252, 251, 252);\">.&nbsp;Vị chát rất mạnh, đậm, êm, ngọt hậu rất lâu. Hương thơm nhẹ, tự nhiên.&nbsp;Nước trà màu vàng, trong, không đổi màu nước khi nguội.&nbsp;Búp trà cong, hình bán nguyệt. Bã trà sau khi pha màu vàng.&nbsp;Nguyên liệu trà xanh Thức búp 1 tôm 2 lá, từ cây chè&nbsp;</span><span style=\"font-weight: bolder; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; text-align: justify; background-color: rgb(252, 251, 252);\">Shan tuyết cổ thụ&nbsp;</span><span style=\"color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; text-align: justify; background-color: rgb(252, 251, 252);\">trên 100 năm tuổi.&nbsp;Chè được diệt men theo công nghệ chế biến Trà Xanh hiện đại,&nbsp;</span><span style=\"font-weight: bolder; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; text-align: justify; background-color: rgb(252, 251, 252);\">100% tự nhiên</span><span style=\"color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; text-align: justify; background-color: rgb(252, 251, 252);\">, không hóa chất.</span><br></p>', NULL, NULL, NULL, NULL, NULL, 'uploads/sanpham/1F4OZNDSIfRQHZCp6tY8ZQmPrObnGcip3gk2RHs3.webp', 1, 1, 1, '2024-09-26 17:00:00', NULL),
(6, 'TRÀ XANH VIÊN HỘP 100G', 400000, 380000, 4444, 'Trà Xanh Viên là sản phẩm trà cao cấp', '<p><br></p><p><span style=\"font-weight: bolder; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; text-align: justify; background-color: rgb(252, 251, 252);\">Trà Xanh Viên</span><span style=\"color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; text-align: justify; background-color: rgb(252, 251, 252);\">&nbsp;là sản phẩm trà cao cấp của thương hiệu Shanam, được tuyển chọn từ nguyên liệu 1 tôm 2 lá của cây chè</span><span style=\"font-weight: bolder; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; text-align: justify; background-color: rgb(252, 251, 252);\">&nbsp;Shan Tuyết Cổ Thụ</span><span style=\"color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; text-align: justify; background-color: rgb(252, 251, 252);\">&nbsp;100 năm tuổi trên đỉnh Tà Xùa. Trà Xanh Viên&nbsp;mang vị chát mạnh, ngọt hậu và lưu vị rất sâu. thích hợp cho những người chuyên uống trà lâu năm.&nbsp;</span><span style=\"font-weight: bolder; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; text-align: justify; background-color: rgb(252, 251, 252);\">Viên</span><span style=\"color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; text-align: justify; background-color: rgb(252, 251, 252);\">&nbsp;không chỉ đại diện cho hình dáng sản phẩm mà còn là sự viên mãn, tròn đầy dành cho người uống.</span><br></p>', NULL, NULL, NULL, NULL, NULL, 'uploads/sanpham/0wsleHuHrT43HqITe0CWWifQ0q685VZ95SxCz8DO.webp', 1, 1, 1, '2024-09-26 17:00:00', NULL),
(7, 'TRÀ XANH THIỆN TÚI 80G', 450000, 400000, 4343, 'Trà Xạnh Thiện được làm từ nguyên liệu cây chè Shan', '<p><br></p><p><span style=\"font-weight: bolder; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252);\">Trà Xạnh Thiện</span><span style=\"color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; background-color: rgb(252, 251, 252);\">&nbsp;được làm từ nguyên liệu cây chè Shan Tuyết Cổ Thụ Tà Xùa trên 200 năm tuổi, sinh trưởng tự nhiên ở&nbsp;độ cao gần 2000m so với mực nước biển. Búp chè 1 tôm và 1 đến 2 lá non được người dân tộc H’Mông bản địa tuyển chọn và hái bằng tay.Trà Thiện pha được 8 lần nước, vị chát dịu, rất êm, ngọt hậu rất lâu, không đắng, gắt. Hương thơm tự nhiên. Nước trà màu vàng, trong, không đổi</span><br></p>', NULL, NULL, NULL, NULL, NULL, 'uploads/sanpham/tqSmSFx4KgCnCwIJ12HEJmJoBtnV0KJduWXjf6e0.webp', 1, 1, 1, '2024-09-26 17:00:00', NULL),
(8, 'TRÀ XANH VIÊN TÚI 100G', 400000, 300000, 777, 'Trà Xanh Viên là sản phẩm trà cao cấp', '<p><br></p><p><div class=\"form-product\" style=\"box-sizing: border-box; padding: 0px; margin-bottom: 17px; width: 584.35px; float: left; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(252, 251, 252); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"price-box clearfix\" style=\"box-sizing: border-box; margin: 0px; width: 584.35px; float: left; position: relative;\"></div></div></p><div class=\"fw w_100\" style=\"box-sizing: border-box; float: left; width: 584.35px; color: rgb(40, 40, 40); font-family: &quot;UTM dax&quot;; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(252, 251, 252); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><div class=\"product-summary\" style=\"box-sizing: border-box; padding: 0px; width: 584.35px; float: left;\"><div class=\"rte\" style=\"box-sizing: border-box; font-family: &quot;UTM dax&quot;; font-size: 14px; color: rgb(40, 40, 40); line-height: 22px; font-weight: 400;\"><p style=\"box-sizing: border-box; margin: 0px; text-align: justify;\"><span style=\"box-sizing: border-box; font-family: &quot;Times New Roman&quot;, Times, serif;\"><strong style=\"box-sizing: border-box; font-weight: bolder;\">Trà Xanh Viên</strong><span>&nbsp;</span>là sản phẩm trà cao cấp của thương hiệu Shanam, được tuyển chọn từ nguyên liệu 1 tôm 2 lá của cây chè<strong style=\"box-sizing: border-box; font-weight: bolder;\"><span>&nbsp;</span>Shan Tuyết Cổ Thụ</strong><span>&nbsp;</span>100 năm tuổi trên đỉnh Tà Xùa. Trà Xanh Viên&nbsp;mang vị chát mạnh, ngọt hậu và lưu vị rất sâu. thích hợp cho những người chuyên uống trà lâu năm.&nbsp;<strong style=\"box-sizing: border-box; font-weight: bolder;\">Viên</strong><span>&nbsp;</span>không chỉ đại diện cho hình dáng sản phẩm mà còn là sự viên mãn, tròn đầy dành cho người uống.</span></p></div></div></div>', NULL, NULL, NULL, NULL, NULL, 'uploads/sanpham/1am81y3TcMszBynuKobreMtM7dZgMReF658Cvghz.webp', 1, 1, 1, '2024-10-04 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `promotions_name` varchar(255) NOT NULL,
  `promotions_description` text DEFAULT NULL,
  `promotions_condition` tinyint(1) NOT NULL DEFAULT 1,
  `promotions_price` double DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `promotions`
--

INSERT INTO `promotions` (`id`, `promotions_name`, `promotions_description`, `promotions_condition`, `promotions_price`, `start_date`, `end_date`, `status`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'Chào hè', 'Chào hè ...', 0, 100000, '2024-09-13', '2024-10-05', 1, 'uploads/sanpham/E4M2YtuDsBZQtmn5hwc2eTT72vLgYSZrTDaz55ir.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Admin','User','Staff') NOT NULL DEFAULT 'User',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `address`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, 'nguyenquangson23022004@gmail.com', NULL, NULL, '$2y$10$YyECMeVi8MM3hrCHfrvKb.EFCQTs9fy38JppRyKMr4NIyRbFpCXyu', 'Admin', NULL, '2024-09-28 10:05:41', '2024-09-28 10:05:41'),
(2, 'Hoa hồng2', NULL, 'nguyen@gmail.com', NULL, NULL, '$2y$10$dhdNmCjK4quXHnDhyK3g5efRU2/cMtaMOkU2ekUOGmWtAxXBHMW5i', 'User', NULL, '2024-09-28 10:29:03', '2024-09-28 10:29:03');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_code_oder_unique` (`code_oder`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_promotions_id_foreign` (`promotions_id`);

--
-- Chỉ mục cho bảng `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_promotions_id_foreign` FOREIGN KEY (`promotions_id`) REFERENCES `promotions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
