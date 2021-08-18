-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 07:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitehoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_hd`
--

CREATE TABLE `chitiet_hd` (
  `ma_chitiet_hd` int(11) NOT NULL,
  `ma_hd` int(11) NOT NULL,
  `masanpham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `gia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitiet_hd`
--

INSERT INTO `chitiet_hd` (`ma_chitiet_hd`, `ma_hd`, `masanpham`, `so_luong`, `don_gia`, `gia`) VALUES
(8, 16, 103, 5, 830000, 4150000),
(9, 16, 104, 4, 1300000, 5200000),
(10, 17, 102, 2, 1500000, 3000000),
(11, 17, 202, 1, 1340000, 1340000),
(12, 18, 101, 2, 420000, 840000),
(13, 19, 106, 2, 1460000, 2920000),
(14, 19, 1218, 2, 500000, 1000000),
(15, 20, 101, 2, 420000, 840000),
(16, 20, 104, 10, 1300000, 13000000);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `mahd` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ten_kh` varchar(50) NOT NULL,
  `dia_chi` varchar(50) NOT NULL,
  `dien_thoai` varchar(20) NOT NULL,
  `ngay_dat` date NOT NULL,
  `tong_tien` float NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`mahd`, `ma_kh`, `ten_kh`, `dia_chi`, `dien_thoai`, `ngay_dat`, `tong_tien`, `trang_thai`) VALUES
(16, 1, 'hoàng văn hòa', '25 ngõ 195 trần cung', '0328392783', '2021-06-09', 9350000, 2),
(17, 1, 'hoàng văn hòa', '25 ngõ 195 trần cung', '0328392783', '2021-06-11', 4340000, 1),
(18, 7, 'hung', '1so', '019282828', '2021-06-16', 840000, 1),
(19, 1, 'hoàng văn hòa', '25 ngõ 195 trần cung', '0328392783', '2021-06-16', 3920000, 1),
(20, 1, 'hoàng văn hòa', '25 ngõ 195 trần cung', '0328392783', '2021-06-17', 13840000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(255) NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`maloai`, `tenloai`, `thu_tu`, `trang_thai`) VALUES
(123, 'lãng hoa', 7, 1),
(1000, 'hoa tươi', 2, 0),
(2000, 'hoa sinh nhật', 3, 0),
(3000, 'hoa khai trương', 4, 0),
(4000, 'Quà tặng', 5, 0),
(4002, 'vòng hoa', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `diachi` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `phanquyen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`diachi`, `id`, `hoten`, `username`, `password`, `sdt`, `phanquyen`) VALUES
('25 ngõ 195 trần cung', 1, 'hoàng văn hòa', 'hoathan', '210920', '0328392783', 2),
('', 2, '', 'admin', 'admin', '', 1),
('tokyo', 4, 'chocola', 'mabu', '22012009', '015677894', 3),
('hhhhh', 6, 'hoan', 'addd', '123', '01010101010', 2),
('1so', 7, 'hung', '12', '12', '019282828', 2),
('hà nội', 8, 'hòa', '123', '1', '012345', 2),
('hà nội', 9, 'hòa', '1234', '1', '012345', 2),
('11', 14, '11', '111', '11', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masanpham` int(11) NOT NULL,
  `ghichu` varchar(255) NOT NULL,
  `gia` varchar(255) NOT NULL,
  `hinh` text NOT NULL,
  `maloai` int(11) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tensanpham` varchar(255) NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masanpham`, `ghichu`, `gia`, `hinh`, `maloai`, `mota`, `soluong`, `tensanpham`, `trang_thai`) VALUES
(100, '12 bông hồng đỏHoa chuỗi ngọc đỏCác loại lá phụ khác', '400000', 'https://www.flowercorner.vn/image/catalog/New_Product_March/luon-ben-em.jpg', 2000, 'Giữa cuộc sống với bao nhiêu khó khăn, căng thẳng và tấp nập, một chút nhẹ nhàng, hồn nhiên của đóa hồng đỏ chắc chắn sẽ mang đến niềm vui khó tả cho một ai đó. Sống chậm lại và yêu thương nhiều hơn, chia sẻ nhiều hơn và quan tâm nhiều hơn, hãy để bó hồn', 29, 'Luôn Bên Em', 0),
(101, '15 bông hồng phun xanh đương\r\nCác loại lá phụ khác\r\n', '420000', 'https://www.flowercorner.vn/image/catalog/New_Feb/JPG/BOUQUET-4183_June.jpg', 1000, 'Dịu dàng mà đầy tươi vui. Bó hoa được kết hợp từ những bông hồng phun xan xinh tươi nhất cùng những loài hoa lá phụ nhỏ xinh khác là một món quà đặc biệt thích hợp tặng đồng nghiệp, bạn bè, cô giáo hay cô bạn gái đáng yêu của bạn. Nhỏ nhắn nhưng đầy ý ngh', 42, 'Only You', 0),
(102, '10 cành sen hồng\r\n3 cành ly vàng\r\nCác loại lá phụ khác.', '1500000', 'https://www.flowercorner.vn/image/catalog/New_May/BOUQUET-5529.jpg', 1000, 'Nét đặc biệt của hoa sen chính là nằm ở vẻ đẹp đầy thanh tao và tinh tế nhưng cũng đầy mạnh mẽ. Một bó hoa từ hoa sen thay cho một lời nhắn dù có khó khăn, thử thách trong cuộc sống, chỉ cần tự tin, tin vào bản thân mình và cố gắng thì sẽ mang lại kết quả', 39, 'Hương Sen', 0),
(103, '3 cành sen trắng,\r\n8 bông hồng trắng\r\nHoa cát tường\r\nHoa cúc trắng\r\nLá môn xanh\r\nCác loại lá phụ khác\r\n', '830000', 'https://www.flowercorner.vn/image/catalog/New_Oct/FCProducts_Oct_4191x.jpg', 1000, 'Bông sen trắng luôn nổi tiếng là biểu tượng của vẻ đẹp thuần khiết và thanh cao. Bó hoa được thiết kế từ những sắc độ tinh tế khác nhau từ hoa hồng, cát tường, cúc nhật nhí, và lá môn xanh, tạo nên một bức tranh tuyệt hảo. Đây sẽ là một món quà đầy ý nghĩ', 20, 'Một Góc Trời', 0),
(104, 'Hoa tulip tím   \r\nHoa tulip hồng\r\nHoa cẩm chướng trắng\r\nCác loại lá phụ khác', '1300000', 'https://www.flowercorner.vn/image/catalog/New_Sep/FCArrang_Sep_4266.jpg', 1000, 'Sống chậm lại và yêu thương nhiều hơn. Lẵng hoa tulip này đại diện cho tinh thần ấy. Vẻ đẹp thanh cao mang trong mình sự dịu dàng và yên bình đến lạ của tulip sẽ là món quà tuyệt vời làm ấm lòng những người quan trọng nhất trong cuộc đời bạn. Lẵng hoa cũn', 30, 'Khởi Sắc', 0),
(105, '10 cành tulip vàng\r\n10 cành hoa hồng kem pastel\r\nLá đuôi chồn\r\nCác loại lá phụ khác', '1890000', 'https://www.flowercorner.vn/image/catalog/New-July/FCBouquet_July_4258.jpg', 1000, 'Bó hoa là sự kết hợp đầy đặc biệt giữa những đóa hồng kem xinh xắn cùng tulip vàng đầy nỗi bật. Sắc hồng và sắc vàng hòa quyện tạo nên một tông màu thật rực rỡ, ấm áp, nhiều sức sống như những hạt nắng thật lung linh và tươi vui. Dù là dịp sinh nhật, kỷ n', 50, 'My Angel', 0),
(106, '15 cành tulip hồng\r\nHoa thủy tiên hồng\r\nHoa tú cầu xanh bơ\r\nCác loại lá phụ trang trí khác', '1460000', 'https://www.flowercorner.vn/image/catalog/New_Aug/BOUQUET-5537.jpg', 1000, 'Một bó hoa với sắc hồng nhẹ nhàng, quý phái và hững hờ từ hoa tulip, khiến gợi nhớ về một mùa thu đầy lãng mạn và tràn ngập kỉ niệm. Bó hoa này sẽ là một món quà ý nghĩa dành tặng cho người bạn mà bạn yêu quý. Hãy cùng ôn lại những kỷ niệm xưa và cùng rút', 60, 'Hương Tulip', 0),
(107, 'Hoa baby phun nhiều màu rực rỡ', '1280000', 'https://www.flowercorner.vn/image/catalog/New_Nov/FCProducts_Novx_4276.jpg', 1000, 'Một bó hoa thật to với tông màu hồng và xanh ngọt ngào thanh mát, cảm giác thật tươi vui, mà cũng vô cùng sang trọng. Baby hồng được tô điểm và làm nổi bật bởi những cành baby xanh tạo nên một món quà cực kỳ thích hợp cho những cô gái năng động, dễ thương', 40, 'Làn Gió Mới', 0),
(108, 'Hoa baby phun hồng', '500000', 'https://www.flowercorner.vn/image/catalog/New_Jul/BOUQUET-5210_Jul_2020.jpg', 1000, 'Bồng bềnh như chùm kẹo bông gòn ngọt ngào và mộng mơ, bó hoa Mellow Pink được tạo nên từ những cành hoa baby phun nhiều sắc hồng, lan chuyển từ đậm ngọt đến nhạt nhè nhẹ. Bó hoa chắc chắn là một món quà đặc biệt giúp tâm trạng của ai đó vui tươi tức thì c', 40, 'Mellow Pink', 0),
(109, 'Hoa hồng kem\r\nHoa hồng tím\r\nHoa đồng tiền trắng\r\nHoa ly hồng\r\nMõm sói trắng\r\nCác loại lá phụ trang trí khác', '1750000', 'https://www.flowercorner.vn/image/catalog/New_Aug/ARRANG-4356.jpg', 1000, 'Lẵng Hoa Ban Mai Dịu Dàng được thiết kế kết hợp giữa các loại hoa gần gũi và quen thuộc: hoa hồng, hoa đồng tiền, hoa ly, hoa cát tường,..tạo nên một tác phẩm hài hòa, nhẹ nhàng nhưng không kém phần ấn tượng. Tặng lẵng hoa này như 1 món quà tri ân, cảm ơn', 10, 'Lẵng Hoa Ban Mai Dịu Dàng', 0),
(200, '3 cành mẫu đơn hồng\r\n5 cành hồng kem pastel\r\nHoa cát tường trắng\r\nHoa baby trắng xen kẽ\r\nCác loại lá phụ khác', '1480000', 'https://www.flowercorner.vn/image/catalog/New_May/BOUQUET-4179.jpg', 2000, 'Đối với những cô nàng yêu hoa và luôn cập nhật xu hướng thì một bó hoa mẫu đơn là món quà tuyệt vời nhất. Hoa mẫu đơn là loại hoa cao cấp được nhập khẩu và là biểu tượng của sự thịnh vượng, giàu sang và vẻ đẹp sang trọng nhất. Hãy gửi người bạn yêu bó hoa', 50, 'Dành Riêng Em', 0),
(201, '100 hoa hồng đỏ', '1360000', 'https://www.flowercorner.vn/image/catalog/New_May/BOUQUET-4174.jpg', 2000, 'Tình yêu chính là từ những quan tâm dành cho nhau, sự thấu hiểu nhau, cảm thông và san sẻ - một cách tình nguyện, một cách chân thành, một cách giản đơn nhưng vô cùng tinh tế. Đôi khi để đối phương thấy được sự quan tâm đấy chính là nhờ một lẵng hoa ngập ', 33, 'True Love (100 Bông Hồng)', 0),
(202, '100 hoa hồng đỏ và hoa hồng trắng xếp trái tim\r\nHoa sao tím viền xung quanh\r\n', '1340000', 'https://www.flowercorner.vn/image/catalog/New_June/BOUQUET-4248_June.jpg', 2000, 'Hoa hồng đỏ vốn hình ảnh tượng trưng cho một tình yêu nồng nhiệt, kết hợp với hoa hồng trắng thể hiện cho sự tinh khiết. Bó hoa như nói lên niềm khao khát được bày tỏ một tình yêu vừa mạnh mẽ, lại vừa rất trong sáng và thuần khiết. Trong cuộc đời mỗi ngườ', 40, 'Sweet Heart', 0),
(203, '100 hoa hồng phun xanh\r\nHoa baby xanh viền ngoài ', '1560000', 'https://www.flowercorner.vn/image/catalog/New_June/BOUQUET-4318_June.jpg', 2000, 'Những bông hồng phun xanh đầy lãng mạn kết hợp với hoa bi tinh khôi xanh tươi tạo nên sức hấp dẫn đầy quyến rũ. Bó hoa này là một lời nhắn đầy lãng mạn mà cũng đầy tinh tế cho người bạn yêu thương nhất. Hãy sống chậm lại và gửi chút yêu thương đến người ấ', 20, 'Quyến Rũ', 0),
(204, '20 hoa hồng đỏ\r\nLá bạc\r\nCác loại hoa lá phụ khác', '670000', 'https://www.flowercorner.vn/image/catalog/New_Jul/BOUQUET-4366.jpg', 2000, 'P/S I Love You là một mẫu hoa được thiết kế lấy cảm hứng thiết kế từ những đóa hồng đỏ đầy tinh tế. Hoa đỏ thể hiện một tình yêu cháy bổng, nồng nàn, và luôn nhiệt huyết. Nếu bạn muốn cho ai đó thấy rằng tình cảm của bạn là xuất phát từ trái tim chân thàn', 50, 'P/S I LOVE YOU', 0),
(205, 'Hoa hoa hồng đỏ\r\nHoa cấm chướng hồng\r\nHoa thủy tiên\r\nCác loại lá phụ khác\r\nSocola viên\r\nGấu bông nhỏ (20cm) ', '1690000', 'https://www.flowercorner.vn/image/catalog/New_Oct/FCProducts_Oct_4260.jpg', 2000, 'Hoa hồng đỏ tượng trưng cho tình yêu mãnh liệt, chân thành và đầy trưởng thành. Một lẵng hoa đẹp sang trọng từ những hoa hồng đỏ tươi và rực rỡ nhất, kết hợp cùng cẩm chướng và thủy tiên hồng thật lãng mạn, Càng đặc biệt hơn, lẵng hoa được gắn thêm chú gấ', 30, 'Món Quà Ấn Tượng', 0),
(206, 'Hoa hồng hột gà\r\nHoa hồng đỏ\r\nHồng kem pastel\r\nHoa cát tường trắng\r\nHoa cúc cali vàng\r\nHoa tú cầu xanh\r\nCác loại lá phụ khác', '1720000', 'https://www.flowercorner.vn/image/catalog/New_June/ARRANG-4288_1.jpg', 2000, 'Sắc đỏ rực tượng trưng cho sự rực rỡ của mặt trời trong khi hồng kem đẹp như màu của mây vào lúc bình minh. Giỏ hoa cùng những loại hoa khác nhau, thiết kế dựa theo vẻ đẹp của bình minh và gửi gắm đi thông điệp về một sự bắt đầu của những gì tươi mới và t', 15, 'Bình Minh', 0),
(207, '99 hồng sen mới, hồng kem pastel và hoa hông tím xem kẽ', '2500000', 'https://www.flowercorner.vn/image/catalog/New_Product_March/BOUQUET-4159_Mar.png', 2000, 'Bó hồng 99 bông hồng dâu và hồng tím kết hợp đẹp như một giấc mơ tình yêu mà bạn luôn mong được xây dựng cùng người ấy. Tông màu cùng phong cách gói trang nhã và hiện đại sẽ giúp bạn ghi điểm trong mắt người ta đó. Ngay cả khi không có dịp đặc biệt nào bạ', 50, 'Khoảnh Khắc', 0),
(208, 'Hoa hồng trắng\r\nHoa hồng tím\r\nHoa hồng đỏ\r\nCác loại lá phụ khác\r\n', '1420000', 'https://www.flowercorner.vn/image/catalog/hinh%20sua/spmoi/FC54ARRANG4307.jpg', 2000, 'Lẵng hoa được các thợ hoa chuyên nghiệp tạo thành hình trái tim hết sức ấn tượng. Lẵng hoa chứa đầy tình yêu này được tạo nên từ những đoá hồng tươi rói nhiều màu sắc và cực kỳ lãng mạn. Đây là món quà vô cùng phù hợp nếu như bạn muốn tạo một ấn tượng khô', 32, 'Đong Đầy Yêu Thương', 0),
(209, '5 cành mẫu đơn hồng\r\nHoa sao tím \r\nCác loại lá khác', '1230000', 'https://www.flowercorner.vn/image/catalog/New-July/FCBouquet_Jul_Peonies_4269.jpg', 2000, 'Bó hoa được thiết kế đặc biệt bởi những cánh mẫu đơn bung nở cùng tông màu hồng đáng yêu và tinh khôi gợi nhắc cho ta nhớ đến một chiều mùa thu trong trẻo. Một ngày có nắng, có gió, có cả mây và sương, anh đã được gặp em.', 19, 'Mùa Thu (Mẫu Đơn)', 0),
(1200, 'Hoa hướng dương\r\nHoa hồng vàng\r\nHoa hồng tím\r\nHoa tú cầu xanh\r\nHoa cúc xanh', '1000000', 'https://838499066c.vws.vegacdn.vn/image/cache/catalog/New_May/FCArrangement_May_4259-500x500.jpg', 3000, 'Trên con đường sự nghiệp thành công của mỗi người luôn có sự chung tay, giúp đỡ từ phía những người bạn, những người đối tác hay doanh nghiệp. Vì vậy đôi lúc một lời cảm ơn hay một lời chúc mừng sẽ thắt chặt tình cảm giữa mọi người hơn đấy. Lẵng hoa chúc ', 20, 'Hoa Chúc Mừng Vươn Lên', 0),
(1210, 'Chiều dài sản phẩm 160cm\r\nCó 1 áo len kèm theo\r\nLông màu nâu sáng\r\n*** Sản phẩm hiện có ở thành phố Hồ Chí Minh, các tỉnh thành khác vui lòng liên hệ (xem thêm phần \"Liên Hệ\")', '1320000', 'https://838499066c.vws.vegacdn.vn/image/cache/catalog/New_Product_March/TEDDY-4049-500x500.png', 4000, 'Gấu bông khổng lồ luôn là một món quà đầy lãng mạn, tinh tế và dễ thương. Mang màu lông sáng tươi và khoác chiếc áo len sọc đầy dễ thương,chú gấu teddy không chỉ cực kỳ đáng yêu mà còn được kiểm định an toàn cho sức khỏe người tiêu dùng sẽ la một món quà ', 50, 'Gấu Yêu Thương', 0),
(1215, 'HHHHH', '23456', '12hk', 1000, 'HHHHH', 20, 'hhhhh', 1),
(1216, 'hiiibbi', '2000000', '6666', 1002, 'yyyuygubjb', 10, 'maii', 1),
(1217, 'niuhoii', '2000000', '1112222', 1001, 'hoiajsiuduhsa', 20, 'hoa', 1),
(1218, 'giỏ hoa', '500000', 'https://shophoahanoi.net/userfiles/image/11_03_2018/101.jpg', 123, 'hoa tươi', 10, 'hoa tươi 101', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiet_hd`
--
ALTER TABLE `chitiet_hd`
  ADD PRIMARY KEY (`ma_chitiet_hd`),
  ADD UNIQUE KEY `uq_ma_hd_masanpham` (`ma_hd`,`masanpham`),
  ADD KEY `idx_ma_hd` (`ma_hd`),
  ADD KEY `idx_masanpham` (`masanpham`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`mahd`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masanpham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiet_hd`
--
ALTER TABLE `chitiet_hd`
  MODIFY `ma_chitiet_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4003;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1219;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiet_hd`
--
ALTER TABLE `chitiet_hd`
  ADD CONSTRAINT `chitiet_hd_ibfk_1` FOREIGN KEY (`ma_hd`) REFERENCES `hoa_don` (`mahd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
