-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 01, 2021 lúc 01:14 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thegioituixach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id`, `name`) VALUES
(1, 'Macat'),
(2, 'Nohoo'),
(3, 'Simple Carry'),
(4, 'Lavar'),
(5, 'Tiger Family'),
(6, 'Tomi'),
(7, 'Eddas'),
(8, 'Trip');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(0, 'Tất cả sản phẩm'),
(1, 'Balo'),
(2, 'Túi Xách'),
(3, 'Cặp'),
(4, 'Valli'),
(5, 'Combo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `brand_id`, `price`, `image`, `detail`, `content`) VALUES
(1, 'Vali Doanh Nhân Macat BY15XS', 4, 1, 2900000, './Public/images/Product/1', 'Kích thước: 44 x 41 x 21cm – Size Air cabin./Dung tích: 35 lit./Với 3 màu: Đen, Nâu, và Đen phối Nâu./Bào hành 8 năm toàn quốc.', 'Cùng với nhịp sống nhanh và năng động, đòi hỏi các sản phẩm hành lý di chuyển cũng phải đáp ứng bắt kịp nhu cầu đó. Thế hệ vali nhựa 4 bánh xoay ra đời gần đây là xu thế tất yếu, và dòng sản phẩm Macat Plastic Luggage (PL) phổ thông ra mắt không phụ lòng mong đợi của người tiêu dùng./\r\nVới 5 gam màu ; Bạc, Vàng, Vàng Hồng, đặc biệt là mầu Metal & Vân tím trên lớp vỏ cứng cáp từ chất liệu poly-abs làm tôn lên vẻ sang trọng & hiện đại của dòng sản phẩm PL của Macat./\r\nCác thiết kế đường gân dọc để giảm thiểu độ ma sát và trầy xước , đồng thời tăng thêm tính mạnh mẽ của sản phẩm. Cần kéo hợp kim nhôm chắc chắn. Ngoài quai xách đứng còn phụ trợ quai hông giúp thuận tiện xách hành lý lên bậc cầu thang.  Hệ thống 4 bánh xe đôi  xoay 360 độ, vận hành êm ái và di chuyển nhẹ nhàng. Không gian chứa hành lý được thiết kế tối ưu với lồng khoang rộng.'),
(2, 'Vali Siêu Tải Macat T7H -28 inch', 4, 1, 1699000, './Public/images/Product/2', 'Tên sản phẩm: Vali kéo MACAT T7H/\r\nMàu sắc: Đen – Tím – Đỏ – Xanh Navy/\r\nCần kéo: Hệ thống cần kéo, 4 bánh xoay Namsao Trolley/\r\nKích thước tổng thể: 76 x 46 x 28 cm/\r\nThương hiệu: MACAT/\r\nXuất xứ: Việt Nam', 'Cùng với nhịp sống nhanh và năng động, đòi hỏi các sản phẩm hành lý di chuyển cũng phải đáp ứng bắt kịp nhu cầu đó. Thế hệ vali nhựa 4 bánh xoay ra đời gần đây là xu thế tất yếu, và dòng sản phẩm Macat Plastic Luggage (PL) phổ thông ra mắt không phụ lòng mong đợi của người tiêu dùng./\r\nVới 5 gam màu ; Bạc, Vàng, Vàng Hồng, đặc biệt là mầu Metal & Vân tím trên lớp vỏ cứng cáp từ chất liệu poly-abs làm tôn lên vẻ sang trọng & hiện đại của dòng sản phẩm PL của Macat./\r\nCác thiết kế đường gân dọc để giảm thiểu độ ma sát và trầy xước , đồng thời tăng thêm tính mạnh mẽ của sản phẩm. Cần kéo hợp kim nhôm chắc chắn. Ngoài quai xách đứng còn phụ trợ quai hông giúp thuận tiện xách hành lý lên bậc cầu thang.  Hệ thống 4 bánh xe đôi  xoay 360 độ, vận hành êm ái và di chuyển nhẹ nhàng. Không gian chứa hành lý được thiết kế tối ưu với lồng khoang rộng.'),
(3, 'Vali Trip P806', 4, 8, 1150000, './Public/images/Product/3', 'Màu sắc: Xanh Navy, xám, đen, nâu , đỏ /\r\nKích thước: 41cm x 27cm x 10.5cm/\r\nCân nặng: 0.8 kg ;Tải trọng tối đa: 25 kg/\r\nChất liệu vải: Polyester trượt nước/\r\nSố ngăn: 1 ngăn chính, 3 ngăn phụ/\r\nNgăn trong: Ngăn dắt viết, điện thoại, ngăn đựng laptop riêng biệt với lớp mút PE chống sốc, ngăn lưới đựng adapter, 2 túi hông đựng bình nước...', 'Cùng với nhịp sống nhanh và năng động, đòi hỏi các sản phẩm hành lý di chuyển cũng phải đáp ứng bắt kịp nhu cầu đó. Thế hệ vali nhựa 4 bánh xoay ra đời gần đây là xu thế tất yếu, và dòng sản phẩm Macat Plastic Luggage (PL) phổ thông ra mắt không phụ lòng mong đợi của người tiêu dùng./\r\nVới 5 gam màu ; Bạc, Vàng, Vàng Hồng, đặc biệt là mầu Metal & Vân tím trên lớp vỏ cứng cáp từ chất liệu poly-abs làm tôn lên vẻ sang trọng & hiện đại của dòng sản phẩm PL của Macat./\r\nCác thiết kế đường gân dọc để giảm thiểu độ ma sát và trầy xước , đồng thời tăng thêm tính mạnh mẽ của sản phẩm. Cần kéo hợp kim nhôm chắc chắn. Ngoài quai xách đứng còn phụ trợ quai hông giúp thuận tiện xách hành lý lên bậc cầu thang.  Hệ thống 4 bánh xe đôi  xoay 360 độ, vận hành êm ái và di chuyển nhẹ nhàng. Không gian chứa hành lý được thiết kế tối ưu với lồng khoang rộng.'),
(4, 'Balo laptop Simple Carry E-CITY', 1, 3, 590000, './Public/images/Product/4', 'Màu sắc: Đỏ, đen, xám , navy, nâu, xanh, xám đậm /\r\nKích thước: 41 x 30 x 13 cm/\r\nCân nặng: 0.7 kg ;Tải trọng tối đa: 25 kg/\r\nChất liệu vải: Polyester trượt nước/\r\nSố ngăn: 1 ngăn chính, 3 ngăn phụ', 'Cùng với nhịp sống nhanh và năng động, đòi hỏi các sản phẩm hành lý di chuyển cũng phải đáp ứng bắt kịp nhu cầu đó. Thế hệ vali nhựa 4 bánh xoay ra đời gần đây là xu thế tất yếu, và dòng sản phẩm Macat Plastic Luggage (PL) phổ thông ra mắt không phụ lòng mong đợi của người tiêu dùng./\r\nVới 5 gam màu ; Bạc, Vàng, Vàng Hồng, đặc biệt là mầu Metal & Vân tím trên lớp vỏ cứng cáp từ chất liệu poly-abs làm tôn lên vẻ sang trọng & hiện đại của dòng sản phẩm PL của Macat./\r\nCác thiết kế đường gân dọc để giảm thiểu độ ma sát và trầy xước , đồng thời tăng thêm tính mạnh mẽ của sản phẩm. Cần kéo hợp kim nhôm chắc chắn. Ngoài quai xách đứng còn phụ trợ quai hông giúp thuận tiện xách hành lý lên bậc cầu thang.  Hệ thống 4 bánh xe đôi  xoay 360 độ, vận hành êm ái và di chuyển nhẹ nhàng. Không gian chứa hành lý được thiết kế tối ưu với lồng khoang rộng.'),
(5, 'Balo laptop Simple Carry B2B02', 1, 3, 550000, './Public/images/Product/5', 'Màu sắc: Xanh Navy, xám, đen, nâu , đỏ /\r\nKích thước: 41cm x 27cm x 10.5cm/\r\nCân nặng: 0.8 kg ;Tải trọng tối đa: 25 kg/\r\nChất liệu vải: Polyester trượt nước/\r\nSố ngăn: 1 ngăn chính, 3 ngăn phụ/\r\nNgăn trong: Ngăn dắt viết, điện thoại, ngăn đựng laptop riêng biệt với lớp mút PE chống sốc, ngăn lưới đựng adapter, 2 túi hông đựng bình nước...', 'Cùng với nhịp sống nhanh và năng động, đòi hỏi các sản phẩm hành lý di chuyển cũng phải đáp ứng bắt kịp nhu cầu đó. Thế hệ vali nhựa 4 bánh xoay ra đời gần đây là xu thế tất yếu, và dòng sản phẩm Macat Plastic Luggage (PL) phổ thông ra mắt không phụ lòng mong đợi của người tiêu dùng./\r\nVới 5 gam màu ; Bạc, Vàng, Vàng Hồng, đặc biệt là mầu Metal & Vân tím trên lớp vỏ cứng cáp từ chất liệu poly-abs làm tôn lên vẻ sang trọng & hiện đại của dòng sản phẩm PL của Macat./\r\nCác thiết kế đường gân dọc để giảm thiểu độ ma sát và trầy xước , đồng thời tăng thêm tính mạnh mẽ của sản phẩm. Cần kéo hợp kim nhôm chắc chắn. Ngoài quai xách đứng còn phụ trợ quai hông giúp thuận tiện xách hành lý lên bậc cầu thang.  Hệ thống 4 bánh xe đôi  xoay 360 độ, vận hành êm ái và di chuyển nhẹ nhàng. Không gian chứa hành lý được thiết kế tối ưu với lồng khoang rộng.'),
(6, 'Balo Laptop Simple Carry A-CITY', 1, 3, 649000, './Public/images/Product/6', 'Màu sắc: Xám đậm, xám , đen/\r\nKích thước: 44 x 32 x 16 cm/\r\nCân nặng: 0.9 Kg ; Tải trọng tối đa: 30 kg/\r\nChất liệu vải: Polyester trượt nước/\r\nSố ngăn: 1 ngăn chính, 3 ngăn phụ/\r\nNgăn trong: Ngăn dắt viết, điện thoại, ngăn đựng laptop riêng biệt với lớp mút PE chống sốc, ngăn lưới đựng adapter/\r\nThân sau: Phần lưng có lớp lưới Air Mesh thoát hơi nhanh, in logo tròn của SimpleCarry', 'Cùng với nhịp sống nhanh và năng động, đòi hỏi các sản phẩm hành lý di chuyển cũng phải đáp ứng bắt kịp nhu cầu đó. Thế hệ vali nhựa 4 bánh xoay ra đời gần đây là xu thế tất yếu, và dòng sản phẩm Macat Plastic Luggage (PL) phổ thông ra mắt không phụ lòng mong đợi của người tiêu dùng./\r\nVới 5 gam màu ; Bạc, Vàng, Vàng Hồng, đặc biệt là mầu Metal & Vân tím trên lớp vỏ cứng cáp từ chất liệu poly-abs làm tôn lên vẻ sang trọng & hiện đại của dòng sản phẩm PL của Macat./\r\nCác thiết kế đường gân dọc để giảm thiểu độ ma sát và trầy xước , đồng thời tăng thêm tính mạnh mẽ của sản phẩm. Cần kéo hợp kim nhôm chắc chắn. Ngoài quai xách đứng còn phụ trợ quai hông giúp thuận tiện xách hành lý lên bậc cầu thang.  Hệ thống 4 bánh xe đôi  xoay 360 độ, vận hành êm ái và di chuyển nhẹ nhàng. Không gian chứa hành lý được thiết kế tối ưu với lồng khoang rộng.'),
(7, 'Túi Kéo 4 Bánh Đa Năng Macat CTB', 2, 1, 757000, './Public/images/Product/7', 'Chất liệu PU-canvas hạn chế thấm nước/\r\nCần kéo NS trolley/\r\nTrọng lượng : 2.2 Kg/\r\nKích thước : 46 X 40 X 27 CM/\r\nBảo Hành: 8 năm', 'Cùng với nhịp sống nhanh và năng động, đòi hỏi các sản phẩm hành lý di chuyển cũng phải đáp ứng bắt kịp nhu cầu đó. Thế hệ vali nhựa 4 bánh xoay ra đời gần đây là xu thế tất yếu, và dòng sản phẩm Macat Plastic Luggage (PL) phổ thông ra mắt không phụ lòng mong đợi của người tiêu dùng./\r\nVới 5 gam màu ; Bạc, Vàng, Vàng Hồng, đặc biệt là mầu Metal & Vân tím trên lớp vỏ cứng cáp từ chất liệu poly-abs làm tôn lên vẻ sang trọng & hiện đại của dòng sản phẩm PL của Macat./\r\nCác thiết kế đường gân dọc để giảm thiểu độ ma sát và trầy xước , đồng thời tăng thêm tính mạnh mẽ của sản phẩm. Cần kéo hợp kim nhôm chắc chắn. Ngoài quai xách đứng còn phụ trợ quai hông giúp thuận tiện xách hành lý lên bậc cầu thang.  Hệ thống 4 bánh xe đôi  xoay 360 độ, vận hành êm ái và di chuyển nhẹ nhàng. Không gian chứa hành lý được thiết kế tối ưu với lồng khoang rộng.'),
(8, 'Túi Kéo Du Lịch Dã Ngoại Macat CT6', 2, 1, 389000, './Public/images/Product/8', 'Chất liệu Poly-canvas hạn chế thấm nước/\r\nCần kéo NS trolley/\r\nTrọng lượng : 2.2 Kg/\r\nKích thước : 50 X 34 X 20 CM/\r\nSức chứa : 20 lít / 12 Kg/\r\nBảo Hành: 8 năm/', 'Cùng với nhịp sống nhanh và năng động, đòi hỏi các sản phẩm hành lý di chuyển cũng phải đáp ứng bắt kịp nhu cầu đó. Thế hệ vali nhựa 4 bánh xoay ra đời gần đây là xu thế tất yếu, và dòng sản phẩm Macat Plastic Luggage (PL) phổ thông ra mắt không phụ lòng mong đợi của người tiêu dùng./\r\nVới 5 gam màu ; Bạc, Vàng, Vàng Hồng, đặc biệt là mầu Metal & Vân tím trên lớp vỏ cứng cáp từ chất liệu poly-abs làm tôn lên vẻ sang trọng & hiện đại của dòng sản phẩm PL của Macat./\r\nCác thiết kế đường gân dọc để giảm thiểu độ ma sát và trầy xước , đồng thời tăng thêm tính mạnh mẽ của sản phẩm. Cần kéo hợp kim nhôm chắc chắn. Ngoài quai xách đứng còn phụ trợ quai hông giúp thuận tiện xách hành lý lên bậc cầu thang.  Hệ thống 4 bánh xe đôi  xoay 360 độ, vận hành êm ái và di chuyển nhẹ nhàng. Không gian chứa hành lý được thiết kế tối ưu với lồng khoang rộng.'),
(9, 'Túi Xách Thời Trang Lavar LC', 2, 4, 499000, './Public/images/Product/9', 'Túi xách thời trang xách tay hoặc đeo vai tiện dụng/\r\nQuai túi chắc chắn và nhẹ nhàng/\r\nPhong cách sang trọng/\r\nChất liệu da mềm mại/\r\nĐường chỉ may tỉ mỉ chắc chắn/', 'Cùng với nhịp sống nhanh và năng động, đòi hỏi các sản phẩm hành lý di chuyển cũng phải đáp ứng bắt kịp nhu cầu đó. Thế hệ vali nhựa 4 bánh xoay ra đời gần đây là xu thế tất yếu, và dòng sản phẩm Macat Plastic Luggage (PL) phổ thông ra mắt không phụ lòng mong đợi của người tiêu dùng./\r\nVới 5 gam màu ; Bạc, Vàng, Vàng Hồng, đặc biệt là mầu Metal & Vân tím trên lớp vỏ cứng cáp từ chất liệu poly-abs làm tôn lên vẻ sang trọng & hiện đại của dòng sản phẩm PL của Macat./\r\nCác thiết kế đường gân dọc để giảm thiểu độ ma sát và trầy xước , đồng thời tăng thêm tính mạnh mẽ của sản phẩm. Cần kéo hợp kim nhôm chắc chắn. Ngoài quai xách đứng còn phụ trợ quai hông giúp thuận tiện xách hành lý lên bậc cầu thang.  Hệ thống 4 bánh xe đôi  xoay 360 độ, vận hành êm ái và di chuyển nhẹ nhàng. Không gian chứa hành lý được thiết kế tối ưu với lồng khoang rộng.'),
(10, 'Cặp Học Sinh Tomi F20_Blue', 3, 6, 559000, './Public/images/Product/10', 'Cặp dành cho bé lớp 3 đến lớp 5/\r\nSize:  37 x 25 x 14 cm/\r\nTrọng lượng cặp:  0.8kg', 'Cùng với nhịp sống nhanh và năng động, đòi hỏi các sản phẩm hành lý di chuyển cũng phải đáp ứng bắt kịp nhu cầu đó. Thế hệ vali nhựa 4 bánh xoay ra đời gần đây là xu thế tất yếu, và dòng sản phẩm Macat Plastic Luggage (PL) phổ thông ra mắt không phụ lòng mong đợi của người tiêu dùng./\r\nVới 5 gam màu ; Bạc, Vàng, Vàng Hồng, đặc biệt là mầu Metal & Vân tím trên lớp vỏ cứng cáp từ chất liệu poly-abs làm tôn lên vẻ sang trọng & hiện đại của dòng sản phẩm PL của Macat./\r\nCác thiết kế đường gân dọc để giảm thiểu độ ma sát và trầy xước , đồng thời tăng thêm tính mạnh mẽ của sản phẩm. Cần kéo hợp kim nhôm chắc chắn. Ngoài quai xách đứng còn phụ trợ quai hông giúp thuận tiện xách hành lý lên bậc cầu thang.  Hệ thống 4 bánh xe đôi  xoay 360 độ, vận hành êm ái và di chuyển nhẹ nhàng. Không gian chứa hành lý được thiết kế tối ưu với lồng khoang rộng.'),
(11, 'Cặp Học Sinh Tomi F20_Navy', 3, 6, 559000, './Public/images/Product/11', 'Cặp dành cho bé lớp 3 đến lớp 5/\r\nSize:  37 x 25 x 14 cm/\r\nTrọng lượng cặp:  0.8 kg.', 'Cùng với nhịp sống nhanh và năng động, đòi hỏi các sản phẩm hành lý di chuyển cũng phải đáp ứng bắt kịp nhu cầu đó. Thế hệ vali nhựa 4 bánh xoay ra đời gần đây là xu thế tất yếu, và dòng sản phẩm Macat Plastic Luggage (PL) phổ thông ra mắt không phụ lòng mong đợi của người tiêu dùng./\r\nVới 5 gam màu ; Bạc, Vàng, Vàng Hồng, đặc biệt là mầu Metal & Vân tím trên lớp vỏ cứng cáp từ chất liệu poly-abs làm tôn lên vẻ sang trọng & hiện đại của dòng sản phẩm PL của Macat./\r\nCác thiết kế đường gân dọc để giảm thiểu độ ma sát và trầy xước , đồng thời tăng thêm tính mạnh mẽ của sản phẩm. Cần kéo hợp kim nhôm chắc chắn. Ngoài quai xách đứng còn phụ trợ quai hông giúp thuận tiện xách hành lý lên bậc cầu thang.  Hệ thống 4 bánh xe đôi  xoay 360 độ, vận hành êm ái và di chuyển nhẹ nhàng. Không gian chứa hành lý được thiết kế tối ưu với lồng khoang rộng.'),
(12, 'Cặp Công Sở Macat VIP8', 3, 1, 868000, './Public/images/Product/12', 'Chất liệu: vải Nylon trượt nước/\r\nKích thước: 40 x 30 x 10 cm/\r\nTrọng lượng: 1.05kg/\r\nMàu sắc: Đen', 'Cùng với nhịp sống nhanh và năng động, đòi hỏi các sản phẩm hành lý di chuyển cũng phải đáp ứng bắt kịp nhu cầu đó. Thế hệ vali nhựa 4 bánh xoay ra đời gần đây là xu thế tất yếu, và dòng sản phẩm Macat Plastic Luggage (PL) phổ thông ra mắt không phụ lòng mong đợi của người tiêu dùng./\r\nVới 5 gam màu ; Bạc, Vàng, Vàng Hồng, đặc biệt là mầu Metal & Vân tím trên lớp vỏ cứng cáp từ chất liệu poly-abs làm tôn lên vẻ sang trọng & hiện đại của dòng sản phẩm PL của Macat./\r\nCác thiết kế đường gân dọc để giảm thiểu độ ma sát và trầy xước , đồng thời tăng thêm tính mạnh mẽ của sản phẩm. Cần kéo hợp kim nhôm chắc chắn. Ngoài quai xách đứng còn phụ trợ quai hông giúp thuận tiện xách hành lý lên bậc cầu thang.  Hệ thống 4 bánh xe đôi  xoay 360 độ, vận hành êm ái và di chuyển nhẹ nhàng. Không gian chứa hành lý được thiết kế tối ưu với lồng khoang rộng.'),
(13, 'Bộ Vali Balo Du Lịch Macat AC19T - 19 inch\r\n', 5, 1, 1150000, './Public/images/Product/13', 'Loại SP: bộ Vali du lịch - balo laptop/\r\nMã: AC19T/\r\nNhãn hiệu Macat/\r\nKích thước: Air cabin size 56 x 36 x 23 cm; balo 42 x 35 x 13 cm/\r\nTrọng lượng: Vali 2,4 kg; balo:  0.5 kg/\r\nDung tích: Vali 40 lit; balo 10 lit/\r\nMàu: Đỏ, Xanh navy, Tím lam', 'Cùng với nhịp sống nhanh và năng động, đòi hỏi các sản phẩm hành lý di chuyển cũng phải đáp ứng bắt kịp nhu cầu đó. Thế hệ vali nhựa 4 bánh xoay ra đời gần đây là xu thế tất yếu, và dòng sản phẩm Macat Plastic Luggage (PL) phổ thông ra mắt không phụ lòng mong đợi của người tiêu dùng./\r\nVới 5 gam màu ; Bạc, Vàng, Vàng Hồng, đặc biệt là mầu Metal & Vân tím trên lớp vỏ cứng cáp từ chất liệu poly-abs làm tôn lên vẻ sang trọng & hiện đại của dòng sản phẩm PL của Macat./\r\nCác thiết kế đường gân dọc để giảm thiểu độ ma sát và trầy xước , đồng thời tăng thêm tính mạnh mẽ của sản phẩm. Cần kéo hợp kim nhôm chắc chắn. Ngoài quai xách đứng còn phụ trợ quai hông giúp thuận tiện xách hành lý lên bậc cầu thang.  Hệ thống 4 bánh xe đôi  xoay 360 độ, vận hành êm ái và di chuyển nhẹ nhàng. Không gian chứa hành lý được thiết kế tối ưu với lồng khoang rộng.'),
(14, 'Combo Vali Du Lịch Gia Đình Macat No.2', 5, 1, 1650000, './Public/images/Product/14', '1. Vali MACAT siêu tải X6C:/\r\nDung tích: 60 lít/\r\nTải trọng: 36 kg/\r\nKích thước Vali: 63 x 40 x 29 cm/\r\nTrọng lượng: 3.7 kg/\r\n2. Vali MACAT M19BC/\r\nKích thước Vali 53x34x24cm, Kích thước túi Tote: 33x25x15 cm/\r\nTrọng lượng Vali 2.6 kg, Túi tote 0.4 kg/\r\n3. Balo XD17A/\r\nKích thước: 40 x 30 x16 cm/\r\nTrọng lượng: 1 kg', 'Cùng với nhịp sống nhanh và năng động, đòi hỏi các sản phẩm hành lý di chuyển cũng phải đáp ứng bắt kịp nhu cầu đó. Thế hệ vali nhựa 4 bánh xoay ra đời gần đây là xu thế tất yếu, và dòng sản phẩm Macat Plastic Luggage (PL) phổ thông ra mắt không phụ lòng mong đợi của người tiêu dùng./\r\nVới 5 gam màu ; Bạc, Vàng, Vàng Hồng, đặc biệt là mầu Metal & Vân tím trên lớp vỏ cứng cáp từ chất liệu poly-abs làm tôn lên vẻ sang trọng & hiện đại của dòng sản phẩm PL của Macat./\r\nCác thiết kế đường gân dọc để giảm thiểu độ ma sát và trầy xước , đồng thời tăng thêm tính mạnh mẽ của sản phẩm. Cần kéo hợp kim nhôm chắc chắn. Ngoài quai xách đứng còn phụ trợ quai hông giúp thuận tiện xách hành lý lên bậc cầu thang.  Hệ thống 4 bánh xe đôi  xoay 360 độ, vận hành êm ái và di chuyển nhẹ nhàng. Không gian chứa hành lý được thiết kế tối ưu với lồng khoang rộng.'),
(15, 'Cặp HS chống gù Nhện vui tính', 3, 5, 1399000, './Public/images/Product/15', 'Kích thước: 35 x 31 x 19cm/\r\nTrọng lượng: 0.8 kg/\r\nĐệm chồng gù nâng cao, trợ lực cột sống', 'Cùng với nhịp sống nhanh và năng động, đòi hỏi các sản phẩm hành lý di chuyển cũng phải đáp ứng bắt kịp nhu cầu đó. Thế hệ vali nhựa 4 bánh xoay ra đời gần đây là xu thế tất yếu, và dòng sản phẩm Macat Plastic Luggage (PL) phổ thông ra mắt không phụ lòng mong đợi của người tiêu dùng./\r\nVới 5 gam màu ; Bạc, Vàng, Vàng Hồng, đặc biệt là mầu Metal & Vân tím trên lớp vỏ cứng cáp từ chất liệu poly-abs làm tôn lên vẻ sang trọng & hiện đại của dòng sản phẩm PL của Macat./\r\nCác thiết kế đường gân dọc để giảm thiểu độ ma sát và trầy xước , đồng thời tăng thêm tính mạnh mẽ của sản phẩm. Cần kéo hợp kim nhôm chắc chắn. Ngoài quai xách đứng còn phụ trợ quai hông giúp thuận tiện xách hành lý lên bậc cầu thang.  Hệ thống 4 bánh xe đôi  xoay 360 độ, vận hành êm ái và di chuyển nhẹ nhàng. Không gian chứa hành lý được thiết kế tối ưu với lồng khoang rộng.'),
(16, 'Cặp HS Nature Quest (Rex)', 3, 5, 1050000, './Public/images/Product/16', 'Thương hiệu:Tiger Family - Hồng Kông/\r\nTiêu chuẩn chất lượng châu Âu/\r\nKích thước: 35 x 31 x 19 cm/\r\nTrọng lượng: 730g', 'Cùng với nhịp sống nhanh và năng động, đòi hỏi các sản phẩm hành lý di chuyển cũng phải đáp ứng bắt kịp nhu cầu đó. Thế hệ vali nhựa 4 bánh xoay ra đời gần đây là xu thế tất yếu, và dòng sản phẩm Macat Plastic Luggage (PL) phổ thông ra mắt không phụ lòng mong đợi của người tiêu dùng./\r\nVới 5 gam màu ; Bạc, Vàng, Vàng Hồng, đặc biệt là mầu Metal & Vân tím trên lớp vỏ cứng cáp từ chất liệu poly-abs làm tôn lên vẻ sang trọng & hiện đại của dòng sản phẩm PL của Macat./\r\nCác thiết kế đường gân dọc để giảm thiểu độ ma sát và trầy xước , đồng thời tăng thêm tính mạnh mẽ của sản phẩm. Cần kéo hợp kim nhôm chắc chắn. Ngoài quai xách đứng còn phụ trợ quai hông giúp thuận tiện xách hành lý lên bậc cầu thang.  Hệ thống 4 bánh xe đôi  xoay 360 độ, vận hành êm ái và di chuyển nhẹ nhàng. Không gian chứa hành lý được thiết kế tối ưu với lồng khoang rộng.'),
(17, 'Cặp HS chống gù Spider Man', 3, 5, 1399000, './Public/images/Product/17', 'Kích thước: 35 x 31 x 19cm/\r\nTrọng lượng: 0.8 kg/\r\nĐệm chồng gù nâng cao, trợ lực cột sống', 'Cùng với nhịp sống nhanh và năng động, đòi hỏi các sản phẩm hành lý di chuyển cũng phải đáp ứng bắt kịp nhu cầu đó. Thế hệ vali nhựa 4 bánh xoay ra đời gần đây là xu thế tất yếu, và dòng sản phẩm Macat Plastic Luggage (PL) phổ thông ra mắt không phụ lòng mong đợi của người tiêu dùng./\r\nVới 5 gam màu ; Bạc, Vàng, Vàng Hồng, đặc biệt là mầu Metal & Vân tím trên lớp vỏ cứng cáp từ chất liệu poly-abs làm tôn lên vẻ sang trọng & hiện đại của dòng sản phẩm PL của Macat./\r\nCác thiết kế đường gân dọc để giảm thiểu độ ma sát và trầy xước , đồng thời tăng thêm tính mạnh mẽ của sản phẩm. Cần kéo hợp kim nhôm chắc chắn. Ngoài quai xách đứng còn phụ trợ quai hông giúp thuận tiện xách hành lý lên bậc cầu thang.  Hệ thống 4 bánh xe đôi  xoay 360 độ, vận hành êm ái và di chuyển nhẹ nhàng. Không gian chứa hành lý được thiết kế tối ưu với lồng khoang rộng.'),
(18, 'Vali Nhựa Eddas EP-305 25 inch', 4, 7, 1450000, './Public/images/Product/18', 'Màu sắc: Tím, Xanh,/\r\nKích thước: 25 inch/\r\n', 'Cùng với nhịp sống nhanh và năng động, đòi hỏi các sản phẩm hành lý di chuyển cũng phải đáp ứng bắt kịp nhu cầu đó. Thế hệ vali nhựa 4 bánh xoay ra đời gần đây là xu thế tất yếu, và dòng sản phẩm Macat Plastic Luggage (PL) phổ thông ra mắt không phụ lòng mong đợi của người tiêu dùng./\r\nVới 5 gam màu ; Bạc, Vàng, Vàng Hồng, đặc biệt là mầu Metal & Vân tím trên lớp vỏ cứng cáp từ chất liệu poly-abs làm tôn lên vẻ sang trọng & hiện đại của dòng sản phẩm PL của Macat./\r\nCác thiết kế đường gân dọc để giảm thiểu độ ma sát và trầy xước , đồng thời tăng thêm tính mạnh mẽ của sản phẩm. Cần kéo hợp kim nhôm chắc chắn. Ngoài quai xách đứng còn phụ trợ quai hông giúp thuận tiện xách hành lý lên bậc cầu thang.  Hệ thống 4 bánh xe đôi  xoay 360 độ, vận hành êm ái và di chuyển nhẹ nhàng. Không gian chứa hành lý được thiết kế tối ưu với lồng khoang rộng.'),
(19, 'Vali Nhựa Eddas EP-307 25 inch', 4, 7, 1380000, './Public/images/Product/19', 'Màu: Gold và Silver/\r\nSize: 25\"/\r\nKích thước: 41(Length) x 61(Height) x 27(Width) (cm)/\r\nChất liệu: 100% PC (Polycarbonate)/\r\nCần kéo: cần đôi Nhôm/\r\nBánh xe: PU/\r\nTrọng lượng: 3.7Kg', 'Cùng với nhịp sống nhanh và năng động, đòi hỏi các sản phẩm hành lý di chuyển cũng phải đáp ứng bắt kịp nhu cầu đó. Thế hệ vali nhựa 4 bánh xoay ra đời gần đây là xu thế tất yếu, và dòng sản phẩm Macat Plastic Luggage (PL) phổ thông ra mắt không phụ lòng mong đợi của người tiêu dùng./\r\nVới 5 gam màu ; Bạc, Vàng, Vàng Hồng, đặc biệt là mầu Metal & Vân tím trên lớp vỏ cứng cáp từ chất liệu poly-abs làm tôn lên vẻ sang trọng & hiện đại của dòng sản phẩm PL của Macat./\r\nCác thiết kế đường gân dọc để giảm thiểu độ ma sát và trầy xước , đồng thời tăng thêm tính mạnh mẽ của sản phẩm. Cần kéo hợp kim nhôm chắc chắn. Ngoài quai xách đứng còn phụ trợ quai hông giúp thuận tiện xách hành lý lên bậc cầu thang.  Hệ thống 4 bánh xe đôi  xoay 360 độ, vận hành êm ái và di chuyển nhẹ nhàng. Không gian chứa hành lý được thiết kế tối ưu với lồng khoang rộng.'),
(20, 'Vali Nhựa TRIP P11 -20 inch', 4, 8, 1450000, './Public/images/Product/20', 'Nhựa 3D (Polycarbonate + ABS + Nilon bóng)\r\n04 Bánh xe 360 độ/\r\nKhóa mật mã 3 số chìm bảo mật + khóa TSA/\r\nMàu sắc : Xanh nhạt, Xanh đậm, Cam dâu/\r\nBảo hành: 3 năm\r\n', 'Cùng với nhịp sống nhanh và năng động, đòi hỏi các sản phẩm hành lý di chuyển cũng phải đáp ứng bắt kịp nhu cầu đó. Thế hệ vali nhựa 4 bánh xoay ra đời gần đây là xu thế tất yếu, và dòng sản phẩm Macat Plastic Luggage (PL) phổ thông ra mắt không phụ lòng mong đợi của người tiêu dùng./\r\nVới 5 gam màu ; Bạc, Vàng, Vàng Hồng, đặc biệt là mầu Metal & Vân tím trên lớp vỏ cứng cáp từ chất liệu poly-abs làm tôn lên vẻ sang trọng & hiện đại của dòng sản phẩm PL của Macat./\r\nCác thiết kế đường gân dọc để giảm thiểu độ ma sát và trầy xước , đồng thời tăng thêm tính mạnh mẽ của sản phẩm. Cần kéo hợp kim nhôm chắc chắn. Ngoài quai xách đứng còn phụ trợ quai hông giúp thuận tiện xách hành lý lên bậc cầu thang.  Hệ thống 4 bánh xe đôi  xoay 360 độ, vận hành êm ái và di chuyển nhẹ nhàng. Không gian chứa hành lý được thiết kế tối ưu với lồng khoang rộng.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
