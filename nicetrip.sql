-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 30, 2021 lúc 03:40 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nicetrip`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `NameAdmin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`AdminID`, `NameAdmin`, `Email`, `Phone`, `Password`) VALUES
(1, 'HoangThien', 'admin', '123', '0387878335');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `ID` int(11) NOT NULL,
  `NameBanner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Detail` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TypeTourID` int(11) NOT NULL,
  `TourID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`ID`, `NameBanner`, `Detail`, `Image`, `TypeTourID`, `TourID`) VALUES
(12, 'Du lịch Hà Lan', 'Du lịch Hà Lan', 'view/images/banner/18.jpg', 1, 1),
(13, 'Du lịch Hà Giang', 'Du lịch Hà Giang', 'view/images/banner/ha-giang-kynghidongduong.vn (36).jpg', 2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bookingtour`
--

CREATE TABLE `bookingtour` (
  `ID` int(11) NOT NULL,
  `BookingID` int(11) NOT NULL,
  `TourID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `NumberTicketAdult` int(11) NOT NULL,
  `NumberTicketChildren` int(11) NOT NULL,
  `NumberTicketBaby` int(11) NOT NULL,
  `NumberTicketInfant` int(11) NOT NULL,
  `PriceTotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bookingtour`
--

INSERT INTO `bookingtour` (`ID`, `BookingID`, `TourID`, `CustomerID`, `NumberTicketAdult`, `NumberTicketChildren`, `NumberTicketBaby`, `NumberTicketInfant`, `PriceTotal`) VALUES
(1, 0, 1, 1, 5, 4, 3, 2, 500);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `NameCustomer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`CustomerID`, `NameCustomer`, `Email`, `Phone`, `Password`) VALUES
(1, 'Võ Đức Mạnh', 'voducmanh963@gmail.com', '0869029472', '0869029472Manh'),
(2, 'Anh Trung', 'trung@gmail.com', '0869029472', '1234'),
(3, 'Hải', 'haikute@gmail.com', '0869029472', '123'),
(4, 'Lăng Chi Nhiều', 'chinhieu@gmail.com', '0869029472', '123'),
(6, 'Đào Hữu Hải', 'huuhai@gmail.com', '0869029472', '123'),
(9, 'Trần Thiện Trung', 'thientrung@gmail.com', '0869029472', '123'),
(10, 'Trần Bá Hộ', 'tranbaho@gmail.com', '0869029472', '123'),
(11, 'Phạm Văn A', 'phamvana@gmail.com', '0869029472', '123'),
(12, 'Nguyễn Thị B', 'nguyenthiB@gmail.com', '0869029472', '123'),
(15, 'Trần Hoàng Thiên', 'trhoangthien1999@gmail.com', '0387878335', '264534296');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detailtour`
--

CREATE TABLE `detailtour` (
  `ID` int(11) NOT NULL,
  `TourID` int(11) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `PriceLocation` int(11) NOT NULL,
  `DescriptionLocation` text NOT NULL,
  `ImageLocation` varchar(255) NOT NULL,
  `Vehicle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `detailtour`
--

INSERT INTO `detailtour` (`ID`, `TourID`, `Location`, `PriceLocation`, `DescriptionLocation`, `ImageLocation`, `Vehicle`) VALUES
(21, 1, 'Công viên Quốc gia Hoge Veluwe ', 70, 'Tọa lạc tại rìa đông nam Veluwe của tỉnh Gelderland, vườn quốc gia Hoge Veluwe là một trong những khu bảo tồn thiên nhiên lớn nhất trải rộng liên tục trên khu đất có diện tích 50 km2 của Hà Lan. Cảnh quan Hoge Veluwe gồm các khu rừng nguyên sinh, cao nguyên, cồn cát và rất nhiều loài động vật như hươu đỏ, trâu bò, lợn rừng sinh sống.', 'view/images/tour-ListImage/thanhhuong-183324053351-xe-dap-ha-lan.jpg', 'Xe khách'),
(22, 1, 'KÊNH ĐÀO AMSTERDAM', 70, 'Ngay từ thế kỷ 17, thời kỳ hoàng kim của người Hà Lan, Amsterdam - “Thành phố Venice của phương Bắc”, đã bắt đầu được xây dựng với hệ thống kênh trị thủy tầm cỡ, gồm 3 kênh đào chính là Herengracht, Prinsengracht và Keizersgracht, tạo thành một vành đai che chắn vững chắc bảo vệ thành phố thủ đô khỏi sự ăn mòn và xân lấm của nước biển. Ngày nay, dọc theo 3 kênh đào chính này là 1.550 công trình tưởng niệm cùng 1.500 cây cầu và rất nhiều con kênh dài hơn 100 km mọc lên, được UNESCO công nhận là Di sản Thế giới năm 2006.', 'view/images/tour-ListImage/thanhhuong-183524053555-hoge-veluwe-national-park.jpg', 'Xe khách'),
(23, 1, 'KHU VƯỜN KEUKENHOF', 70, 'Nổi tiếng là điểm thu hút nhiều du khách nhất Hà Lan, vườn hoa Keukenhof - vườn hoa lớn nhất thế giới, cách thủ đô Amsterdam 30 km về hướng tây nam, trải dài trên khuôn đất rộng 30 ha là nơi khoe sắc của hàng chục nghìn bông hoa đủ sắc màu tươi tắn, là nơi hàng trăm loài tulip - biểu tượng của đất nước Hà Lan xinh đẹp kiêu hãnh ngự trị, “dải lụa” ngút ngàn ngát hương, lung linh sắc màu này thực sự mang đến cho du khách cảm giác tựa chốn “bồng lai tiên cảnh” nơi trần thế.', 'view/images/tour-ListImage/thanhhuong-183624053636-Amsterdam.jpg', 'Xe khách'),
(24, 1, 'Mua sắm ở Hà Lan ', 80, 'Mua sắm ở Hà Lan bao giờ cũng là một trong những hoạt động háo hức và đầy mong đợi của hầu hết du khách khi đặt chân đến đất nước này. Dù du khách có sở thích gì và như thế nào, Hà Lan có đủ các cửa hàng, trung tâm mua sắm đa dạng như vậy để phục vụ đúng sở thích của từng người', 'view/images/tour-ListImage/thanhhuong-183824053834-Keukenhof.jpg', 'Xe khách'),
(25, 1, 'Kênh Leiden', 70, 'Cũng thuộc tỉnh South Holland, thành phố Leiden - một trong những trung tâm lớn nhất có từ thế kỷ 17, nổi tiếng không chỉ bởi có ngôi trường đại học Leiden lâu đời nhất Hà Lan, không chỉ bởi là quê hương của danh họa Rembrandt van Rijn mà còn bởi bờ kênh hợp từ hai nhánh con sông Rhine xanh mướt, êm đềm chảy theo năm tháng. Hàng năm, Leiden tổ chức lễ hội thường niên vào ngày 3/10 nhằm kỷ niệm kết thúc cuộc bao vây của thực dân Tây Ban Nha năm 1574.', 'view/images/tour-ListImage/thanhhuong-183924053900-Magna-Plaza.jpg', 'Xe khách'),
(26, 2, 'Thung Lũng Sủng Là – Lũng Cẩm ', 100, 'Thung lũng Sủng Là (Đồng Văn) – nơi có làng văn hóa Lũng Cẩm - trong những năm gần đây được biết tới nhiều hơn qua bộ phim ‘Chuyện của Pao’. Nơi đây luôn hiện lên với khung cảnh bình dị, lặng lẽ của người dân và vẻ đẹp ‘gai góc’ của những ngôi nhà đá Trình Tường. Dù chỉ là một bản làng nhỏ nhưng khách đi tour Hà Giang 3 ngày 2 đêm thường dành kha khá thời gian ở đây để check-in, ‘sống ảo’, cho ra những bức ảnh để đời bên những ngôi nhà đơn sơ này.', 'view/images/tour-ListImage/ha-giang-kynghidongduong.vn (36).jpg', 'Xe khách'),
(27, 2, 'Đèo Mã Pí Lèng', 100, 'Đi theo tour Hà Giang giá rẻ đến đây, đứng trên trạm nghỉ chân giữa đèo bạn sẽ được trải nghiệm cảm giác “bắt mây” lùa qua tay, ngắm những đồi hoa tam giác mạch lay lay trong gió, cảnh núi non hùng vĩ của đỉnh Mã Pí Lèng, con sông Nho Quế dịu êm cùng hẻm Tu Sản hùng vĩ.', 'view/images/tour-ListImage/hoa-gao-ha-giang-kynghidongduong.vn (05).jpg', 'Xe khách'),
(28, 2, 'Sông Nho Quế ', 100, 'Sông Nho Quế bắt nguồn từ Vân Nam, Trung Quốc rồi chảy xuống xã Lũng Cú, Hà Giang. Tới hẻm Tu Sản, Sông Nho Quế chảy tiếp qua núi Mã Pì Lèng, đến Mèo Vạc thì tách làm 2 nhánh, chảy sang Cao Bằng, tiếp tục hành trình hòa vào cùng sông Gâm ở ngã ba Nà Mát.', 'view/images/tour-ListImage/hoang-su-phi-ha-giang-kynghidongduong.vn (01).jpg', 'Xe khách'),
(29, 2, 'Rừng thông Yên Minh ', 100, 'Nếu bạn đang muốn ngắm những rừng thông Đà Lạt lặng lẽ nhưng bạn lại ở tận miền Bắc, không có quá nhiều ngày nghỉ để đến đó tận hưởng thì hãy đặt ngay một chuyến đi tour Hà Giang từ Hà Nội để đến rừng thông Yên Minh ở Hà Giang nhé! Không gian ở đây cũng ẩn hiện trong sương mù, ‘khoác’ một màu áo nâu trầm lắng không khác gì Đà Lạt mộng mơ đâu! Rừng thông này rất gần với những điểm du lịch ở Đồng Văn, Mèo Vạc nên hoàn toàn có thể thoải mái đi trong ngày nhé!', 'view/images/tour-ListImage/rung-thong-yen-minh-ha-giang-kynghidongduong.vn(01).jpg', 'Xe khách'),
(30, 2, 'Hoàng Su Phì ', 100, 'Nói đến những thửa ruộng bậc thang đẹp nhất Việt Nam, ngoài Mù Cang Chải, Sapa hay Tuyên Quang thì không thể không kể đế Hoàng Su Phì ở Hà Giang. Ở đây có 2 thời điểm đẹp nhất, ấy là mùa nước đổ (khoảng tháng 5, tháng 6) và mùa lúa chín (khoảng tháng 8, tháng 9). Mùa lúa chín thì chắc chắn nhiều người có thể tưởng tượng ra, nhắc đến ruộng bậc thang là có thể hình dung ngay ra những thửa ruộng xanh ngắt đến tận chân trời hoặc vàng rực rỡ.', 'view/images/tour-ListImage/song-nho-que-ha-giang-kynghidongduong.vn (30).jpg', 'Xe khách');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gallery`
--

CREATE TABLE `gallery` (
  `GalleryID` int(11) NOT NULL,
  `NameGallery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gallery`
--

INSERT INTO `gallery` (`GalleryID`, `NameGallery`, `Image`) VALUES
(2, 'Brazil', 'view/images/gallery/popular_1.jpg'),
(3, 'Canada', 'view/images/gallery/popular_2.jpg'),
(4, 'Malaysia', 'view/images/gallery/popular_3.jpg'),
(5, 'Japan', 'view/images/gallery/popular_4.jpg'),
(6, 'Việt Nam', 'view/images/gallery/popular_5.jpg'),
(7, 'Lào', 'view/images/gallery/popular_6.jpg'),
(8, 'Campuchia', 'view/images/gallery/popular_7.jpg'),
(9, 'Myanma', 'view/images/gallery/popular_8.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `imagetour`
--

CREATE TABLE `imagetour` (
  `ID` int(11) NOT NULL,
  `TourID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `NewsID` int(11) NOT NULL,
  `NameNews` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Detail` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`NewsID`, `NameNews`, `Description`, `Detail`, `Image`) VALUES
(2, 'Hội Thảo Chia Sẻ Kinh Nghiệm', 'Vào học các trường công tại Singapore là ước mơ của nhiều học sinh Tiểu học và Trung học Việt Nam.', 'Đó là nội dung của buổi Hội thảo do Văn phòng Du học Saigontourist tổ chức tại Văn phòng 102 Nguyễn Huệ (Q.1, TP.HCM) vào lúc 3 giờ chiều thứ Bảy ngày 01/12. Đại diện tuyển sinh của Học Viện SSTC Singapore - Ông  Đinh Hoàng Hà (Kevin Dinh) - là diễn giả chính của buổi hội thảo này,\r\nÔng Kevin Dinh vừa là Đại diện tuyển sinh của Học Viện SSTC Singapore và cũng là một phụ huynh có con đang học tại trường công lập Singapore. Vì thế, Ông thấu hiểu sâu sắc nỗi lo lắng của các phụ huynh khi đầu tư cho con học luyện thi vào trường công.\r\nTại buổi hội thảo, ông Kevin Dinh sẽ giải đáp tất cả các thắc mắc của phụ huynh và học sinh. Ngoài ra, ông còn chia sẻ về nhiều vấn đề có liên quan, như Chương trình Trung học công lập Singapore và những ưu điểm nối bật; Chi tiết về chương trình và tổng chi phí luyện thi vào công lập của SSTC; lộ trình luyện thi và chi phí phù hợp cho từng học sinh. Các thắc mắc của phụ huynh khi cho con nhỏ đi du học xa nhà và học sinh nhỏ tuổi liệu có thể thích nghi được với cuộc sống tại Singapore không… cũng sẽ được giải đáp tường tận.\r\nSSTC là một trong những nơi cung cấp các khóa học luyện thi vào hệ thống trường công lập tốt nhất tại Singapore. Được thành lập từ năm 1973 và tọa lạc ngay trung tâm đảo quốc Singapore, Học viện có hơn 40 năm kinh nghiệm trong việc giảng dạy và được nhận danh hiệu Edutrust 4 năm trong nhiều năm liền. Bên cạnh chất lượng giảng dạy cao, Học viện còn cung cấp cho học sinh dịch vụ lưu trú tại ký túc xá hoặc homestay.', 'view/images/news/news.jpg'),
(3, 'Tháp Eiffel Có Áo Mới', 'Kể từ thời điểm này, nếu bạn đến Paris và ghé thăm tháp Eiffel ở cự ly gần sẽ được nhìn thấy một bức tường kính ngay dưới chân tháp. ', 'Bức tường bao quanh khu vực đài tưởng niệm ra đời với mục đích bảo vệ biểu tượng của thành phố Paris khỏi các cuộc tấn công khủng bố. Bạn đừng lo bộ áo mới sẽ khiến việc chụp ảnh tháp Eiffel bớt đẹp, bức tường bằng kính chống đạn trị giá lên đến 40 triệu đô-la Mỹ này hoàn toàn trong suốt nên không ảnh hưởng đến cảnh quan. Tham khảo các hành trình đến Pháp tại: ', 'view/images/news/news_2.jpg'),
(4, 'NHỮNG ĐỊA ĐIỂM VUI CHƠI Ở SENTOSA SINGAPORE TUYỆT ĐỐI KHÔNG THỂ BỎ LỠ', 'Toàn bộ Sentosa có 4 khu giải trí và nghỉ dưỡng, bao gồm: Imbiah Lookout, Siloso Point, Beaches và Resorts World Sentosa với nhiều khu vui chơi giải trí phù hợp với nhu cầu của khách tham quan.', 'Không cần phải lặn lội đến tận nước Mỹ với chi phí đắt đỏ mới có thể chiêm ngưỡng những hình ảnh quen thuộc trong các bộ phim điện ảnh nổi tiếng của kinh đô Hollywood, đến với Universal Studios Singgapore là bạn đã thỏa mãn ước mơ của mình rồi.\r\nVới 24 đại cảnh theo 7 chủ đề phim nổi tiếng, Universal Studios Singapore là một thế giới thần tiên thu nhỏ dành cho trẻ em và cả người lớn. Vừa bước chân qua cánh cổng lớn, bạn sẽ gặp ngay những nhân vật trong phim hoạt hình, viễn tưởng yêu thích và còn nhiều bất ngờ đang chờ đón du khách. Đặc biệt, mỗi khu trò chơi đều có gian hàng bán đồ lưu niệm riêng với thiết kế dễ thương làm quà hay giữ kỷ niệm sau chuyến đi chơi.\r\n\r\nThủy cung S.E.A Aquarium\r\n\r\nThủy cung S.E.A. Aquarium đưa du khách đến với thế giới đại dương bao la tuyệt đẹp với hơn 100.000 sinh vật biển thuộc 800 loài và hơn 20.000 loại san hô sinh sống tại đây. Thủy cung cũng là nơi có dòng sông lười dài nhất thế giới (620m) và bộ sưu tập cá đuối lớn nhất thế giới.\r\n\r\nBên cạnh các bể nước là màn hình chiếu các đoạn phim về đời sống sinh vật biển, bảng thông tin cho du khách về từng loài sinh vật sống tại thủy cung.\r\n\r\nNgoài ra, du khách có thể trải nghiệm bữa tối tại nhà hàng Đại dương tại S.E.A Aquarium và nhìn ngắm những sinh vật biển bơi lội tung tăng xung quanh bàn ăn.', 'view/images/news/Universal-Studios_766231354.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tableprice`
--

CREATE TABLE `tableprice` (
  `ID` int(11) NOT NULL,
  `TourID` int(11) NOT NULL,
  `PriceAdult` int(11) NOT NULL,
  `PriceChildren` int(11) NOT NULL,
  `PriceBaby` int(11) NOT NULL,
  `PriceInfant` int(11) NOT NULL,
  `NumberTicketLimit` int(11) NOT NULL,
  `NumberTicketEmpty` int(11) NOT NULL,
  `TypeTourID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tableprice`
--

INSERT INTO `tableprice` (`ID`, `TourID`, `PriceAdult`, `PriceChildren`, `PriceBaby`, `PriceInfant`, `NumberTicketLimit`, `NumberTicketEmpty`, `TypeTourID`) VALUES
(17, 2, 100, 80, 60, 0, 30, 28, 2),
(19, 1, 320, 280, 200, 0, 30, 25, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `TourID` int(11) NOT NULL,
  `NameTour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Detail` text COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Day_Start` date NOT NULL,
  `Day_End` date NOT NULL,
  `Price` int(11) NOT NULL,
  `Discount` int(10) NOT NULL,
  `TimeTour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TypeTourID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`TourID`, `NameTour`, `Description`, `Detail`, `Image`, `Day_Start`, `Day_End`, `Price`, `Discount`, `TimeTour`, `TypeTourID`) VALUES
(2, 'Hà Giang', 'Hành trình Du lịch Hà Giang không chỉ đến nơi thiên nhiên hùng vỹ mà còn là trải nghiệm một vùng đất của văn hóa các dân tộc cũng như lịch sử cách mạng hào hùng của đất nước. Vậy nơi đây có những điểm đến nào nổi tiếng nhất mà khách Tour Hà Giang thường ghé tới?', 'Thung Lũng Sủng Là – Lũng Cẩm - Sông Nho Quế - Rừng thông Yên Minh - Hoàng Su Phì - Mùa nước đổ ải ở Hà Giang', 'view/images/tour/ha-giang-kynghidongduong.vn (32).jpg', '2020-12-21', '2020-12-22', 100, 5, '2 ngày', 2),
(3, 'Ninh Thuận', 'Ninh Thuận thuộc duyên hải Nam Trung Bộ, nơi có những cánh đồng muối trắng thênh thang và bãi biển hoang sơ tuyệt đẹp. Du khách có thể đến đây bất cứ thời điểm nào, tuy nhiên, từ tháng 4 đến tháng 6 là lúc thích hợp để thưởng ngoạn mùa hè sôi động trên biển. Tháng 8, 9, 10 là thời điểm cho mùa nho chín và các lễ hội độc đáo của người Chăm bản địa.', 'Núi Phú Sỹ - Tháp Tokyo Tower  - Đền Kinkaku-ji ở Kyoto - Khu tưởng niệm hòa bình Hiroshima – Genbaku Dome - Công viên khỉ Jigoku Dani', 'view/images/tour/thanhhuong-183324053351-xe-dap-ha-lan.jpg', '2021-01-05', '2021-01-06', 200, 5, '2 ngày', 2),
(4, 'Khánh Hòa', 'Hàn Quốc có rất nhiều thứ để khám phá, mà có khi đã tới rồi lại muốn tới lần nữa rồi lại thêm lần nữa. Nhưng theo kinh nghiệm du lịch tự túc Hàn Quốc của bọn mình thì nếu muốn khám phá Seoul cùng những nơi gần quanh đó thì chắc khoảng 5-6 ngày là nhớ cơm mẹ nấu lắm rồi', 'Đồi Cát Nam Cương - Biển NInh Chữ - Vịnh Vĩnh Hy - Hang Rái', 'view/images/tour/thanhhuong-183524053555-hoge-veluwe-national-park.jpg', '2021-01-05', '2021-01-06', 200, 4, '2 ngày', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tourlocation`
--

CREATE TABLE `tourlocation` (
  `ID` int(11) NOT NULL,
  `TourID` int(11) NOT NULL,
  `Location` text COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `PriceLocation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tourpayment`
--

CREATE TABLE `tourpayment` (
  `PayID` int(11) NOT NULL,
  `TourID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Price` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `DayPayment` date NOT NULL,
  `TypePayment` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tourreview`
--

CREATE TABLE `tourreview` (
  `ID` int(11) NOT NULL,
  `TourID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `StarVote` int(11) NOT NULL,
  `Review` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tourstatistic`
--

CREATE TABLE `tourstatistic` (
  `ID` int(11) NOT NULL,
  `TourID` int(11) NOT NULL,
  `LikeNumbers` int(11) NOT NULL,
  `ViewNumbers` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Vote1star` int(11) NOT NULL,
  `Vote2star` int(11) NOT NULL,
  `Vote3star` int(11) NOT NULL,
  `Vote4star` int(11) NOT NULL,
  `Vote5star` int(11) NOT NULL,
  `StarAverage` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `typetour`
--

CREATE TABLE `typetour` (
  `TypeTourID` int(11) NOT NULL,
  `NameTypeTour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `typetour`
--

INSERT INTO `typetour` (`TypeTourID`, `NameTypeTour`, `Sort`) VALUES
(1, 'Tour ngoài nước', 1),
(2, 'Tour trong nước', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_loaibanner` (`TypeTourID`);

--
-- Chỉ mục cho bảng `bookingtour`
--
ALTER TABLE `bookingtour`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Chỉ mục cho bảng `detailtour`
--
ALTER TABLE `detailtour`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`GalleryID`);

--
-- Chỉ mục cho bảng `imagetour`
--
ALTER TABLE `imagetour`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`NewsID`);

--
-- Chỉ mục cho bảng `tableprice`
--
ALTER TABLE `tableprice`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`TourID`),
  ADD KEY `fk_loaitour` (`TypeTourID`);

--
-- Chỉ mục cho bảng `tourlocation`
--
ALTER TABLE `tourlocation`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tourpayment`
--
ALTER TABLE `tourpayment`
  ADD PRIMARY KEY (`PayID`);

--
-- Chỉ mục cho bảng `tourreview`
--
ALTER TABLE `tourreview`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tourstatistic`
--
ALTER TABLE `tourstatistic`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `typetour`
--
ALTER TABLE `typetour`
  ADD PRIMARY KEY (`TypeTourID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `bookingtour`
--
ALTER TABLE `bookingtour`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `detailtour`
--
ALTER TABLE `detailtour`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `gallery`
--
ALTER TABLE `gallery`
  MODIFY `GalleryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `imagetour`
--
ALTER TABLE `imagetour`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `NewsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tableprice`
--
ALTER TABLE `tableprice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `TourID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT cho bảng `tourlocation`
--
ALTER TABLE `tourlocation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT cho bảng `tourpayment`
--
ALTER TABLE `tourpayment`
  MODIFY `PayID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tourreview`
--
ALTER TABLE `tourreview`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tourstatistic`
--
ALTER TABLE `tourstatistic`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `typetour`
--
ALTER TABLE `typetour`
  MODIFY `TypeTourID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
