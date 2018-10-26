-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2018 lúc 08:03 PM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `baitapxuong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `tieude` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(6000) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` date NOT NULL,
  `nguoidang` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `caudaunoidung` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `theloai` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `noidung`, `ngaydang`, `nguoidang`, `hinhanh`, `caudaunoidung`, `theloai`) VALUES
(1, 'Làm sao để lấy phiếu tín nhiệm không \'huề cả làng\'?', 'Năm, lấy phiếu tín nhiệm làm định kỳ có vẻ hay, nhưng có khả năng dẫn đến “huề cả làng”, nhờn thuốc; hoặc ngược lại, tạo hiệu ứng ngược, không ai dám làm gì mạnh mẽ, vì lo ngại “làm nhiều sai nhiều”.\r\n\r\nVì vậy, cần “giữ lửa” cho các cuộc lấy phiếu tín nhiệm; tránh tình trạng sau vài lần không ai phải chịu trách nhiệm, trong khi tình hình kinh tế - xã hội vẫn không biến chuyển nhiều, phòng chống quan liêu, tham nhũng, lãng phí... hiệu quả không cao thì việc lấy phiếu cũng sẽ không còn “màu nhiệm” nữa. \r\n\r\nHơn nữa, lấy phiếu tín nhiệm, cho dù kết quả thế nào, thì từ “bước tiến” này cũng nên dứt khoát cải tiến mạnh hơn quy trình, thủ tục bỏ phiếu (bất) tín nhiệm để dễ dàng thực hiện hơn. Chẳng hạn như làm sao để cá nhân các đại biểu Quốc hội có thể dễ dàng hơn trong việc kiến nghị và đưa một ai đó ra bỏ phiếu (bất) tín nhiệm.\r\n\r\nMột nhà báo nghị trường kể lại, sau khi công bố kết quả lấy phiếu tín nhiệm năm 2013, anh thấy một bộ trưởng có kết quả thấp đứng ở góc khuất, điếu thuốc trong tay, vẻ mặt rất buồn, dáng điệu cô đơn. Hy vọng sẽ không có ai trong các vị có chức trách phải chịu kết quả thấp, nhất là không phải bỏ phiếu tín nhiệm tại Quốc hội, nhờ thực hiện đúng trách nhiệm của mình, giữ được niềm tin của Quốc hội, đại biểu Quốc hội.\r\n\r\nMặt khác, lợi ích của quốc gia, của người dân chính là tiêu chí, cơ sở cuối cùng để đại biểu Quốc hội đánh giá và quyết định mức phiếu tín nhiệm. Có như vậy mới phát huy được hết tác dụng của cơ chế lấy phiếu tín nhiệm, lúc đó được lợi nhất mới là người dân.\r\n\r\nTác giả là một chuyên gia nghiên cứu Nhà nước. Bài viết thể hiện văn pho', '2018-10-25', 'hoangcuong', 'images/npt.jpg', 'Tiểu sử tân Bộ trưởng Thông tin và Truyền thông Nguyễn Mạnh Hùng.', 'tt'),
(2, 'Hội Tin học TP.HCM, các doanh nghiệp đồng hành cùng Khoa Công nghệ thông tin chào đón tân sinh viên', 'Hôm nay (28/09), tại Trụ sở chính trường Đại học Công nghệ TP.HCM (HUTECH), khoa Công nghệ thông tin (CNTT) đã chính thức khởi động chuỗi sự kiện chào đón các “tân binh” với những hoạt động sôi nổi, đánh dấu bước khởi đầu trên con đường chinh phục đam mê của các Tân sinh viên khóa 2018.\r\n \r\n\r\n\r\n\r\n\r\nKhoa CNTT đã khởi động chuỗi chương trình chào đón Tân sinh viên vào sáng 28/09\r\n\r\n\r\nĐồng hành cùng tân sinh viên khóa 2018 có PGS.TS. Võ Đình Bảy - Trưởng khoa, TS. Nguyễn Hà Giang và ThS. Dương Thành Phết - Phó trưởng khoa; Đại diện Trung tâm Hợp tác doanh nghiệp & Việc làm sinh viên HUTECH cùng đội ngũ Giảng viên khoa Công nghệ thông tin. Bên cạnh đó, còn có bà Văn Thị Bích Ty - Trưởng ban Truyền thông - Sự kiện - Hội Tin học TP.HCM (HCA) , bà Nguyễn Thị Vọng - Giám đốc đào tạo FPT Software HCM, ông Phạm Nguyễn Mạnh - Giám đốc Cty Fujinet Systems JSC, anh Lê Phước Cường - Đại diện FPT Information Systems và đại diện nhiều doanh nghiệp đối tác khác cũng như nhiều cựu sinh viên thành đạt từ khoa CNTT HUTECH.\r\n \r\n\r\n\r\nPGS.TS. Võ Đình Bảy gửi lời chúc mừng và chào mừng các Tân sinh viên đến với Khoa CNTT, bắt đầu hành trình trưởng thành và theo đuổi ước mơ của bản thân\r\n\r\n\r\nBà Văn Thị Bích Ty gửi gắm đến các bạn Tân sinh viên những niềm hy vọng mới, sẽ góp phần vào sự nghiệp xây dựng và phát triển ngành CNTT Thành phố ngày một phát triển hơn\r\n\r\n\r\nBà Nguyễn Thị Vọng đại diện FPT Software trao tặng dây đeo thẻ cho các thành viên mới của khoa CNTT\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nMàn biểu diễn ảo thuật ấn tượng chào mừng các “tân binh” của Ảo thuật gia Lương Thế Vinh và các Ảo thuật gia Trẻ TP.HCM cùng CLB Ảo thuật HUTECH\r\n\r\n\r\nTại buổi Lễ chào đón, không chỉ được chia sẻ những thông tin thiết thực gắn liền với cuộc sống học hành, môi trường học tập tại HUTECH, các vấn đề học vụ, thi cử,…. các bạn Tân sinh viên còn nhận được những chia sẻ, giới thiệu về ngành học của mình từ anh Đinh Vũ Quốc Trung - Đại diện FPT Sofware HCM, anh Phạm Nguyễn Mạnh - Giám đốc Fujinet và anh Phan Nghĩa Hiệp - Quản lý công ty TMA Solution.\r\n \r\n\r\n\r\n\r\nFPT Software trao Học bổng trị giá 10.000.000 đồng cho khoa CNTT HUTECH\r\n\r\n\r\nTMA Solutions trao 02 suất học bổng cho 02 Thủ khoa đầu vào của khoa CNTT\r\n \r\n\r\nNhằm mang đến cho các bạn những định hướng đúng đắn về lựa chọn tương lai ngay từ những ngày đầu tiếp cận ngành học này, buổi Talkshow “Câu chuyện của tôi - Lựa chọn của bạn” cũng diễn ra với sự xuất hiện của các chuyên gia công nghệ đến từ những doanh nghiệp CNTT lớn. Với vai trò là diễn giả, đồng thời là “tiền bối” khi vốn là cựu sinh viên HUTECH, anh Nguyễn Ngọc Đỉnh, anh Đặng Thái Anh Minh và anh Nguyễn Thanh Long đã giới thiệu sơ bộ về ngành học, những cơ hội nghề nghiệp cũng như hướng phát triển tư duy, lựa chọn hợp lý để chuẩn bị cho tương lai đến các Cử nhân CNTT tương lai.\r\n\r\nNhững thắc mắc về ngành nghề, công việc, cơ hội mà các bạn Tân sinh viên đặt ra đã nhanh chóng được đại diện doanh nghiệp, các thầy cô Giảng viên và các anh chị cựu sinh viên HUTECH giải đáp tận tình.\r\n\r\n \r\n\r\n\r\n\r\nAnh Nguyễn Ngọc Đỉnh chia sẻ cùng các bạn Tân sinh viên\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nCác bạn Tân sinh viên giao lưu cùng thầy cô Giảng viên, Đại diện doanh nghiệp và các anh chị Cựu sinh viên\r\n\r\n\r\nFPT Information Systems trao những phần quà cho các bạn sinh viên đặt câu hỏi thú vị\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nBuổi chào đón đã diễn ra trong không khí hân hoan, gần gũi giữa thầy trò khoa CNTT và các doanh nghiệp đôi tác\r\n \r\n\r\nBuổi chào đón Tân sinh viên đã diễn ra trong không khí hân hoan, gần gũi giữa thầy và trò khoa Công nghệ thông tin HUTECH. Hơn cả việc cùng giao lưu, gặp gỡ, các bạn Tân sinh viên đã hiểu hơn về ngành học của mình, có được những định hướng, lựa chọn đúng đắn cho chính mình trên con đường sắp tới.\r\n\r\nChúc năm học đầu tiên tại Giảng đường Đại học của các “tân binh” CNTT sẽ thành công, thể hiện bản lĩnh của những Kỹ sư Công nghệ thông tin tương lai, sẵn sàng chinh phục mọi thử thách, đam mê, ước muốn của chính mình!', '2018-10-26', 'hoangcuong', 'imageupload/bai2tt.jpg', 'Hôm nay (28/09), tại Trụ sở chính trường Đại học Công nghệ TP.HCM (HUTECH), khoa Công nghệ thông tin (CNTT) đã chính thức khởi động chuỗi sự kiện chào đón các “tân binh” với những hoạt động sôi nổi, đánh dấu bước khởi đầu trên con đường chinh phục đam mê của các Tân sinh viên khóa 2018.', 'tt'),
(3, '“Game Technology” - Hội thảo thú vị về Công nghiệp Game', 'Đây là hoạt động đầu tiên trong chuỗi sự kiện Gamification Conference nhằm giới thiệu và mang đến cho các bạn sinh viên cơ hội tiếp xúc với ngành công nghiệp “tưởng lạ mà lại rất quen” với giới trẻ Việt Nam. Hội thảo “Game Technology, Trends and Application” sẽ diễn ra trong 02 ngày với nhiều nội dung mới mẻ về lĩnh vực đầy tiềm năng này.\r\n \r\n\r\n\r\nHội thảo sẽ có sự tham gia, chia sẻ từ các chuyên gia hàng đầu trong ngành Công nghiệp game tại Hàn Quốc\r\n \r\n\r\nVới sự tham gia của các chuyên gia đến từ Hàn Quốc như Giáo sư Lee Deukwoo – Chuyên gia về công nghệ sản xuất game (Game Engine), Giáo sư Jeong Jongpill – Top 10 chuyên gia hàng đầu thế giới về sản xuất game bằng công cụ Unity, Giáo sư Lee Boemro – Chuyên gia VR/AR, Trưởng khoa Đồ họa Game của trường Cao đẳng Quốc gia Chung Kang (Hàn Quốc), Hội thảo hứa hẹn mang lại cho các bạn sinh viên HUTECH, những bạn trẻ yêu thích ngành Game hướng tiếp cận chuyên nghiệp nhất về lĩnh vực này.\r\n \r\n\r\nCụ thể, vào ngày 02/08, các chuyên gia đến từ Hàn Quốc sẽ có những chia sẻ thú vị về các kinh nghiệm trong quá trình sản xuất, thiết kế và lập trình game cơ bản, những thử thách, cơ hội mà ngành nghề này mang lại. Song song đó, các chuyên gia cũng giới thiệu về trường Cao đẳng Quốc gia Chung Kang với ngành Đồ họa Game – một trong những ngành thế mạnh của trường.\r\n \r\n\r\nNgày 03/08 sẽ là Hội thảo với các nội dung về cách ứng dụng mở rộng VR/AR với công cụ Unity 3D và đưa ra sự so sánh giữa các công cụ sản xuất game như Unity, Unreal trong thực tế công việc, do Giáo sư Lee Deukwoo và Giáo sư Lee Boemro chủ trì.\r\n \r\n\r\n\r\nĐây là một cơ hội thú vị dành cho các bạn sinh viên đam mê, yêu thích ngành Công nghiệp Game \r\n \r\n\r\nLà một cường quốc mạnh mẽ trên bản đồ ngành Công nghiệp Game toàn thế giới, Hàn Quốc luôn là một địa điểm nhận được sự yêu thích của rất nhiều bạn trẻ yêu thích Game và mang trong mình ước mơ được làm việc trong ngành Công nghiệp tiềm năng, đầy hứa hẹn này.\r\n\r\nNếu đã “trót” mang trong mình niềm đam mê với ngành công nghiệp sản xuất Game, thì các bạn sinh viên HUTECH đừng quên chốt cho mình một lịch hẹn với Hội thảo Game Technology, Trend and Application” diễn ra vào các ngày 02 và 03/08 sắp tới nhé.\r\n\r\nĐặc biệt, các bạn sinh viên tham gia Hội thảo “Game Technology, Trends and Application” cũng sẽ nhận được Chứng chỉ xác nhận tham gia Hội thảo với các Chuyên gia. Chứng chỉ này sẽ là một công cụ đắc lực hỗ trợ bạn trong phong trào thi đua “Sinh viên 5 tốt”, tính điểm rèn luyện.', '2018-10-27', 'Phương Trinh', 'imageupload/bai2tt.jpg', 'Trong hai ngày 02 và 03/08 sắp tới, tại Trụ sở chính Điện Biên Phủ của trường Đại học Công nghệ TP.HCM (HUTECH) sẽ diễn ra Hội thảo “Game Technology.', 'tt'),
(4, 'Khóa đào tạo “Global Software Talent Lite - GST Lite” chính thức khởi động.', 'Là chương trình bổ trợ kiến thức chuyên môn và kỹ năng thực hành, Global Software Talent Lite - GST Lite mang đến cho sinh viên năm ba và năm tư tham gia chương trình cơ hội sử dụng hệ thống học liệu Online và được trực tiếp giảng dạy bởi các chuyên gia đang làm việc tại công ty phần mềm FSoft. \r\n \r\n\r\nKhóa đào tạo do khoa CNTT HUTECH phối hợp với Fsoft triển khai\r\n\r\nĐược biết, khoá đào tạo GST Lite được triển khai, kế thừa thành công từ chương trình “Global Software Talent” dành cho sinh viên năm 4 mà Khoa CNTT HUTECH & FSoft đã triển khai thành công nhiều năm qua, nội dung xoay quanh các chủ đề “Giới thiệu về học liệu khoá học RND,CNU,SQL,Technical”, “Requiremnt & Design”, “Coding and Unit test/Tester”, “Technical” và “Mindset/Kinh nghiệm thực tế”. Sau mỗi buổi hội thảo sinh viên sẽ thi các bài kiểm tra online tương ứng với các buổi seminar của chương trình trên hệ thống https://gst.fsoft.com.vn. Cuối khoá sinh viên sẽ thi một bài ASM tại một phòng thi nhằm đánh giá chất lượng một cách tốt nhất.\r\n \r\n\r\nĐối tượng chủ yếu của khóa học là các bạn sinh viên năm 3, năm 4\r\n \r\nPhát biểu tại buổi lễ, PGS. TS. Võ Đình Bảy đã gửi lời cảm ơn FPT Software HCM, đánh giá cao tính hiệu quả của chương trình trong việc đào tạo ra nguồn nhân lực Công nghệ thông tin chất lượng cao hiện nay và hy vọng chương trình sẽ liên tục phát triển trong tương lai. “Việc triển khai khoa học nhận được hưởng ứng nhiệt tình của giảng viên và sinh viên. bản thân các giảng viên cũng tự bồi dưỡng kiến thức chuyên môn để đáp ứng quá trình giảng dạy. Đây chính là tiền đề để HUTECH và FPT Software tiếp tục hợp tác khoá học GST Lite này”.\r\n\r\nGiám đốc đào tạo FPT Software HCM Bà Nguyễn Thị Vọng chia sẻ thêm: “Chương trình GST Lite được thiết kế phù hợp cho sinh viên năm cuối. giúp sinh viên của khoa tiếp cận được chương trình đào tạo, hướng đến tính ứng dụng thực tiển, sớm đáp ứng nhu cầu doanh nghiệp khi tham gia vào thị trường lao động”.\r\n \r\n\r\nPGS. TS. Võ Đình Bảy đã gửi lời cảm ơn FPT Software HCM tại buổi lễ khai giảng khóa đào tạo\r\n \r\n\r\n Đại diện FSoft trao đổi, giao lưu với các bạn sinh viên khoa CNTT HUTECH\r\n\r\nTheo báo cáo tổng kết cuối năm của khoa CNTT, tổng số sinh viên đã hoàn thành chương trình “Global Software Talent” trước đây là trên 200 sinh viên, số sinh viên hoàn thành khoá học, nhận chứng chỉ đã được tuyển thẳng vào FSoft đều đáp ứng tốt yêu cầu công việc. Và năm 2018, sẽ là một năm hứa hẹn nhiều thành công hơn khi chất lượng sinh viên khoa CNTT ngày một nâng cao.', '2018-10-27', 'Thanh Tuấn', 'imageupload/bai1tt.jpg', 'Sáng 19/05, khoa Công nghệ thông tin trường Đại học Công nghệ TP.HCM (Đại học HUTECH) đã phối hợp cùng Công ty Phần mềm FPT Software HCM - FSoft tổ chức khai mạc khóa đào tạo “Global Software Talent Lite - GST Lite”, thu hút hơn 200 bạn sinh viên đăng ký tham gia .', 'tt');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
