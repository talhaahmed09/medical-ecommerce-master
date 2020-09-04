
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 06, 2016 at 09:57 AM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u565044498_hera`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Name`, `Email`, `Password`) VALUES
(1, 'hieptran', 'chanhhiep.0201@gmail.com', '25f9e794323b453885f5181f1b624d0b');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Images` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Time_create` date NOT NULL,
  `Status` tinyint(4) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`Id`, `Images`, `Time_create`, `Status`) VALUES
(3, 'Images- banner -3.png', '2016-10-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner_slide`
--

CREATE TABLE IF NOT EXISTS `banner_slide` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Images` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Tittle` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Caption` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `banner_slide`
--

INSERT INTO `banner_slide` (`Id`, `Images`, `Tittle`, `Caption`, `Status`) VALUES
(1, 'Images-slideshow-1.jpg', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Id`, `Name`) VALUES
(3, 'Dược phẩm chức năng'),
(4, 'Thuốc');

-- --------------------------------------------------------

--
-- Table structure for table `categorynews`
--

CREATE TABLE IF NOT EXISTS `categorynews` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NameCategory` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categorynews`
--

INSERT INTO `categorynews` (`Id`, `NameCategory`) VALUES
(1, 'tin trong nước'),
(2, 'tin quốc tế');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` int(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `Name`, `Email`, `Address`, `Phone`) VALUES
(1, 'Tran chanh hiep', 'chanhhiep.0201@gmail.com', 'hue', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NameNews` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CreateDate` date NOT NULL,
  `DetailNews` text COLLATE utf8_unicode_ci NOT NULL,
  `CaptionNew` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `TittleNew` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IdCatNew` int(11) NOT NULL,
  `Images1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Id`, `NameNews`, `CreateDate`, `DetailNews`, `CaptionNew`, `TittleNew`, `IdCatNew`, `Images1`) VALUES
(3, 'GIỚI THIỆU', '2016-09-28', '<h2>Th&agrave;nh Lập v&agrave; ph&aacute;t triển</h2><p>C&ocirc;ng ty Cổ phần Dược phẩm H&agrave; T&acirc;y tiền th&acirc;n l&agrave; X&iacute; nghiệp Dược phẩm H&agrave; T&acirc;y được th&agrave;nh lập năm 1965. Năm 1985, X&iacute; nghiệp Dược phẩm H&agrave; T&acirc;y s&aacute;p nhập với C&ocirc;ng ty Dược phẩm H&agrave; T&acirc;y v&agrave; C&ocirc;ng ty Dược liệu H&ograve;a B&igrave;nh th&agrave;nh X&iacute; nghiệp li&ecirc;n hợp Dược H&agrave; Sơn B&igrave;nh.</p><p><strong>Năm 1991</strong>, X&iacute; nghiệp li&ecirc;n hợp Dược H&agrave; Sơn B&igrave;nh chia th&agrave;nh C&ocirc;ng ty Dược phẩm H&agrave; T&acirc;y v&agrave; C&ocirc;ng ty Dược phẩm H&ograve;a B&igrave;nh.</p><p><strong>Năm 2000</strong>, C&ocirc;ng ty Dược phẩm H&agrave; T&acirc;y được chuyển đổi th&agrave;nh C&ocirc;ng ty Cổ phần Dược phẩm H&agrave; T&acirc;y theo quyết định số 1911/QĐ-UB ng&agrave;y 21/12/2000 của Ủy ban nh&acirc;n d&acirc;n tỉnh H&agrave; T&acirc;y, vốn điều lệ 8.410.800.000 đồng.</p><p>Từ khi cổ phần h&oacute;a đến nay c&ocirc;ng ty đ&atilde; c&oacute; 3 lần tăng vốn điều lệ. Căn cứ theo giấy chứng nhận đăng k&yacute; kinh doanh số 0303000015 đăng k&yacute; lần đầu ng&agrave;y 10/01/2001, đăng k&yacute; thay đổi lần thứ 06 ng&agrave;y 08/04/2008, vốn điều lệ của c&ocirc;ng ty tăng l&ecirc;n 41.226.020.000 đồng, lấy t&ecirc;n giao dịch l&agrave; HATAPHAR.</p><p><strong>Chức năng nhiệm vụ chủ yếu của c&ocirc;ng ty l&agrave;</strong>: Sản xuất, Kinh doanh, Xuất nhập khẩu thuốc chữa bệnh, ho&aacute; chất nguy&ecirc;n liệu l&agrave;m thuốc, dược liệu v&agrave; trang thiết bị dụng cụ y tế. Với kinh nghiệm 40 năm trưởng th&agrave;nh, HATAPHAR lu&ocirc;n l&agrave; đơn vị ho&agrave;n th&agrave;nh tốt nhiệm vụ sản xuất kinh doanh v&agrave; c&aacute;c chỉ ti&ecirc;u nộp ng&acirc;n s&aacute;ch đề ra, c&oacute; tốc độ tăng trưởng cao li&ecirc;n tục trong 10 năm lại đ&acirc;y.</p><h2>Con người l&agrave; nguồn lực quan trọng nhất</h2><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Đối với HATAPHAR, nguồn nh&acirc;n lực đ&oacute;ng vai tr&ograve; tối quan trọng trong việc ph&aacute;t triển c&ocirc;ng ty. V&igrave;&nbsp;vậy việc thu h&uacute;t, đ&atilde;i ngộ v&agrave; bồi dưỡng nh&acirc;n t&agrave;i lu&ocirc;n l&agrave; điều m&agrave; c&ocirc;ng ty quan t&acirc;m h&agrave;ng đầu.</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nhận thức được điều n&agrave;y, ban l&atilde;nh đạo c&ocirc;ng ty đ&atilde; c&oacute; những ch&iacute;nh s&aacute;ch nh&acirc;n sự đ&uacute;ng đắn v&agrave; tiến bộ, tạo n&ecirc;n một đội ngũ c&aacute;n bộ quản l&yacute; c&oacute; tr&igrave;nh độ v&agrave; kinh nghiệm, c&aacute;n bộ kỹ thuật trẻ v&agrave; năng động, c&ocirc;ng nh&acirc;n lao động được đ&agrave;o tạo một c&aacute;ch b&agrave;i bản. Trong những năm gần đ&acirc;y, C&ocirc;ng ty đ&atilde; thu h&uacute;t được hơn 80 dược sỹ đại học về phục vụ l&acirc;u d&agrave;i tại c&ocirc;ng ty.</p><p><strong>Tăng trưởng li&ecirc;n tục từ khi cổ phần h&oacute;a</strong></p>', 'GIỚI THIỆU     Thành Lập và phát triển  Công ty Cổ phần Dược phẩm Hà Tây tiền thân là Xí nghiệp Dược phẩm Hà Tây được thành lập năm 1965. Năm 1985, Xí nghiệp Dược phẩm Hà Tây sáp nhập với Công ty Dược phẩm Hà Tây và Công ty Dược liệu Hòa Bình thành X', 'GIỚI THIỆU CÔNG TY', 1, 'image1-3news.jpg'),
(4, 'NHÀ MÁY SẢN XUẤT', '2016-09-28', '<h1>NH&Agrave; M&Aacute;Y SẢN XUẤT</h1><p><img alt="quy-mo-cong-ty-8\\" src="http://www.hataphar.com.vn/images/quy-mo-cong-ty-8.jpg" style="\\&quot;height:545px" /></p><p><img alt="\\&quot;nha-may-sx-10\\&quot;" src="http://www.hataphar.com.vn/images/nha-may-sx-10.jpg" style="\\&quot;height:467px" /></p><p><img alt="nha-may-sx-11\\" src="http://www.hataphar.com.vn/images/nha-may-sx-11.jpg" style="\\&quot;height:471px" /></p><p><img alt="\\&quot;nha-may-sx-12\\&quot;" src="http://www.hataphar.com.vn/images/nha-may-sx-12.jpg" style="\\&quot;height:473px" /></p>', 'Nhà máy sản xuất của công ty', 'NHÀ MÁY SẢN XUẤT', 1, 'image1-4news.jpg'),
(5, 'Chuyên gia tư vấn', '0000-00-00', '<h1>CHUY&Ecirc;N GIA CỐ VẤN</h1><p>HATAPHAR&nbsp;ch&agrave;o mừng bạn đến với chuy&ecirc;n mục tư vấn. Để được giải đ&aacute;p v&agrave; tư vấn những vấn đề li&ecirc;n quan đến sức khỏe v&agrave; c&aacute;ch sử dụng thuốc, mời bạn đọc gửi c&acirc;u hỏi về cho ch&uacute;ng t&ocirc;i theo mẫu dưới đ&acirc;y&nbsp;hoặc gọi đến số&nbsp;<strong>04.33.52.25.25</strong>&nbsp;để được c&aacute;c chuy&ecirc;n gia tư vấn miễn ph&iacute; cho bạn. C&aacute;c bạn&nbsp;vui l&ograve;ng g&otilde; tiếng việt c&oacute; dấu khi gửi c&acirc;u hỏi.&nbsp;</p><p><strong>Chuy&ecirc;n gia tư vấn sức khỏe:</strong>&nbsp;Đại t&aacute; &ndash; B&aacute;c sĩ Phan Ngọc Minh nguy&ecirc;n Chỉ huy trưởng Trung t&acirc;m nghi&ecirc;n cứu v&agrave; sản xuất thuốc, Chủ nhiệm Labo m&aacute;u, Học viện Qu&acirc;n y</p><p><strong>Chuy&ecirc;n gia tư vấn sử dụng thuốc: &nbsp; &nbsp;</strong>&nbsp;DS. Trịnh Hồng Th&uacute;y</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DS. Trần Thị Huyền</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DS. Trần Hồng &Aacute;nh</p>', 'Chuyên gia tư vấn', 'Chuyên gia tư vấn', 1, 'image1-5news.jpg'),
(6, 'SẢN XUẤT THEO ĐƠN ĐẶT HÀNG', '0000-00-00', '<h2>DỊCH VỤ CHUY&Ecirc;N NGHIỆP V&Agrave; HIỆU QUẢ TRONG LĨNH VỰC SẢN XUẤT THUỐC THEO ĐƠN ĐẶT H&Agrave;NG</h2><p><strong>C&ocirc;ng ty Cổ phần Dược phẩm H&agrave; T&acirc;y</strong>&nbsp;l&agrave; đơn vị ti&ecirc;n phong trong lĩnh vực sản xuất theo đơn đặt h&agrave;ng c&aacute;c sản phẩm thuốc v&agrave; thực phẩm chức năng cho c&aacute;c nh&agrave; ph&acirc;n phối tr&ecirc;n to&agrave;n quốc.&nbsp;<strong>Với 50 năm kinh nghiệm</strong>&nbsp;sản xuất thuốc, gần 20 năm sản xuất gia c&ocirc;ng cho c&aacute;c đơn vị trong v&agrave; ngo&agrave;i nước, ch&uacute;ng t&ocirc;i tự h&agrave;o đem đến cho qu&yacute; kh&aacute;ch h&agrave;ng</p><p><strong>1.&nbsp;Đội ngũ c&aacute;n bộ chuy&ecirc;n m&ocirc;n l&agrave;nh nghề:</strong></p><p>Với đội ngũ h&ugrave;ng hậu c&aacute;c dược sỹ đại học c&oacute; kinh nghiệm v&agrave; chuy&ecirc;n m&ocirc;n vững v&agrave;ng, hỗ trợ kh&aacute;ch h&agrave;ng kịp thời v&agrave; hiệu quả trong việc&nbsp; tư vấn c&ocirc;ng thức thuốc, đảm bảo hồ sơ đăng k&yacute; đ&uacute;ng, đủ, đạt ti&ecirc;u chuẩn, đảm bảo thời gian cấp số đăng k&yacute; theo quy định, sản phẩm được nghi&ecirc;n cứu v&agrave; đảm bảo chất lượng trong qu&aacute; tr&igrave;nh lưu th&ocirc;ng&hellip;.</p><p><strong>2.&nbsp;Nh&agrave; m&aacute;y c&ocirc;ng suất lớn, kho biệt trữ th&agrave;nh phẩm diện t&iacute;ch lớn, đạt ti&ecirc;u chuẩn GSP</strong>:</p><p>Ch&uacute;ng t&ocirc;i l&agrave; c&ocirc;ng ty sản xuất dược phẩm duy nhất tại Việt nam c&oacute; vị tr&iacute; nh&agrave; m&aacute;y thuận tiện cho việc giao dịch về sản xuất v&agrave; kinh doanh dược phẩm với&nbsp;<strong>diện t&iacute;ch hơn 17.000 m2</strong>&nbsp;đặt tại H&agrave; Đ&ocirc;ng- 1 trong c&aacute;c quận nội th&agrave;nh của thủ đ&ocirc; H&agrave; Nội</p><p><strong>3.&nbsp;Dịch vụ kh&aacute;ch h&agrave;ng tận t&acirc;m</strong>:</p><ul>	<li>Ch&uacute;ng t&ocirc;i c&oacute; nh&acirc;n vi&ecirc;n chuy&ecirc;n tr&aacute;ch cung cấp mọi th&ocirc;ng tin li&ecirc;n quan đến qu&aacute; tr&igrave;nh sản xuất gia c&ocirc;ng (qui tr&igrave;nh đặt h&agrave;ng gia c&ocirc;ng, theo d&otilde;i tiến độ ra h&agrave;ng v&agrave; giao h&agrave;ng, b&aacute;o h&agrave;ng tồn kho để gi&uacute;p kh&aacute;ch h&agrave;ng c&oacute; kế hoạch đặt h&agrave;ng hợp l&yacute;, xử l&yacute; c&aacute;c vấn đề ph&aacute;t sinh trong v&agrave; sau khi giao h&agrave;ng, cung cấp kịp thời c&aacute;c t&agrave;i liệu phục vụ ..).</li>	<li>C&oacute; đội ngũ thiết kế hiểu biết về thiết kế ng&agrave;nh Dược phẩm sẵn s&agrave;ng phục vụ kh&aacute;ch h&agrave;ng</li>	<li>Năng lực sản xuất c&oacute; thể đ&aacute;p ứng c&aacute;c đơn h&agrave;ng số lượng lớn trong thời gian ngắn</li>	<li>Dịch vụ hợp t&aacute;c linh động, bao gồm cả h&igrave;nh thức sản xuất độc quyền.</li></ul><p><strong>4.</strong>&nbsp;<strong>Đối t&aacute;c của ch&uacute;ng t&ocirc;i</strong>:</p><p><strong>- C&aacute;c c&ocirc;ng ty trong nước:</strong>&nbsp;C&ocirc;ng ty CP Đầu tư Kim Long, C&ocirc;ng ty cổ phần tập đo&agrave;n Merap, C&ocirc;ng ty cổ phần dược phẩm Đ&ocirc;ng &Acirc;u, C&ocirc;ng ty cổ phần dược phẩm Vinh Gia, C&ocirc;ng ty TNHH DP Việt Mỹ, C&ocirc;ng ty TNHH Trường Huy,&hellip;</p><p><strong>- C&aacute;c c&ocirc;ng ty nước ngo&agrave;i:</strong>&nbsp;C&ocirc;ng ty TNHH Neotradex- NEOTRADEX CO.,LTD. &ndash; Cộng h&ograve;a S&eacute;c ( sản phẩm gelazip), c&ocirc;ng ty Pharmacure Health Care international AB- Thụy Điển ( sản phẩm Dung dịch rửa mũi Nozaline v&agrave; Nozaline plus)&hellip;</p><p><strong>Li&ecirc;n hệ:</strong></p><p><strong><em>Ths.DS.L&ecirc; Việt Linh &ndash; Trưởng ph&ograve;ng Kinh doanh</em></strong></p><p>Điện thoại: 0936165656</p><p>Email:&nbsp;<a href="\\">Vietlinh.le@gmail.com</a></p><p><em><strong>Ng&ocirc; Hải Minh &ndash; C&aacute;n bộ phụ tr&aacute;ch cắt l&ocirc;</strong></em></p><p>Điện thoại: 0914 882 298</p><p>Email:&nbsp;<a href="\\">ngohaiminh278@gmail.com</a></p>', 'Sản xuất theo đơn đặt hàng của đối tác đảm bảo uy tín chất lượng cũng như giá cả hợp lí', 'SẢN XUẤT THEO ĐƠN ĐẶT HÀNG', 1, 'image1-6news.jpg'),
(7, 'DỊCH VỤ XUẤT NHẬP KHẨU ỦY THÁC', '0000-00-00', '<p><em>Năm 1997, Dược H&agrave; T&acirc;y bắt đầu triển khai dịch vụ Xuất- Nhập khẩu ( XNK) bao gồm: dịch vụ NKUT, nhập nguy&ecirc;n liệu cho c&ocirc;ng ty sản xuất, Xuất khẩu h&agrave;ng h&oacute;a sang c&aacute;c nước như Myanmar, Campuchia.</em>&nbsp;</p><p>Ngay từ khi bắt đầu th&agrave;nh lập, ch&uacute;ng t&ocirc;i đ&atilde; l&agrave;m việc theo quy tr&igrave;nh cụ thể v&agrave; lu&ocirc;n cải tiến, cập nhật quy tr&igrave;nh nhằm đ&aacute;p ứng ng&agrave;y c&agrave;ng tốt hơn, chuy&ecirc;n nghiệp hơn y&ecirc;u cầu của kh&aacute;ch h&agrave;ng.&nbsp;</p><p>Với gần 20 năm kinh nghiệm trong lĩnh vực xuất nhập khẩu, Dược H&agrave; T&acirc;y c&oacute; đội ngũ nh&acirc;n vi&ecirc;n d&agrave;y dạn kinh nghiệm v&agrave; kiến thức trong lĩnh vực xuất nhập khẩu, c&oacute; t&igrave;nh h&igrave;nh t&agrave;i ch&iacute;nh l&agrave;nh mạnh đảm bảo đủ nguồn vốn thanh to&aacute;n ngoại tệ, c&oacute; hệ thống kho b&atilde;i đạt ti&ecirc;u chuẩn GSP WHO. Ch&uacute;ng t&ocirc;i lu&ocirc;n tin tưởng v&agrave; cam kết sẽ cung cấp dịch vụ xuất nhập khẩu một c&aacute;ch chuy&ecirc;n nghiệp nhất, th&aacute;i độ tận t&igrave;nh, chu đ&aacute;o, chi ph&iacute; nhận h&agrave;ng với mức thấp nhất, hỗ trợ giao h&agrave;ng tới tận kho của kh&aacute;ch h&agrave;ng.&nbsp;</p><p>&ldquo;<em>Chất lượng l&agrave; sự tồn tại v&agrave; ph&aacute;t triển</em>&rdquo; l&agrave; mục ti&ecirc;u phấn đấu của ch&uacute;ng t&ocirc;i kh&ocirc;ng chỉ trong lĩnh vực Sản xuất, Kinh doanh m&agrave; c&ograve;n l&agrave; chỉ ti&ecirc;u hướng đến đầu ti&ecirc;n cho dịch vụ&nbsp; XNK. Trong đ&oacute; chất lượng sản phẩm v&agrave; chất lượng dịch vụ lu&ocirc;n được đưa l&ecirc;n h&agrave;ng đầu v&agrave; l&agrave; &yacute; thức thường trực của mỗi nh&acirc;n vi&ecirc;n.&nbsp;</p><p>V&igrave; sao&nbsp;<em><strong>Dịch vụ nhập khẩu ủy th&aacute;c</strong></em>&nbsp;của ch&uacute;ng t&ocirc;i lại được kh&aacute;ch h&agrave;ng lựa chọn l&agrave; ưu ti&ecirc;n số một khi t&igrave;m kiếm đối t&aacute;c?</p><h3><strong>1. Nhanh ch&oacute;ng, ch&iacute;nh x&aacute;c</strong></h3><p>C&aacute;c thủ tục tiếp nhận hợp đồng, mở LC, thanh to&aacute;n b&ecirc;n nước ngo&agrave;i, nhận h&agrave;ng từ cảng về kho: Trong v&ograve;ng 1-3 ng&agrave;y sau khi nhận được tiền đặt cọc hay thanh to&aacute;n tiền h&agrave;ng . Lu&ocirc;n gi&aacute;m s&aacute;t kiểm tra c&aacute;c kh&acirc;u trong qu&aacute; tr&igrave;nh thực hiện hợp đồng, phối hợp chặt chẽ, thường xuy&ecirc;n với c&aacute;c b&ecirc;n li&ecirc;n quan.</p><h3><strong>2. Chuy&ecirc;n nghiệp</strong></h3><p>C&aacute;c nhận vi&ecirc;n được đ&agrave;o tạo v&agrave; nắm chắc về nghiệp vụ xuất nhập khẩu n&ecirc;n giải quyết c&aacute;c ph&aacute;t sinh một c&aacute;ch nhanh ch&oacute;ng v&agrave; hiệu quả.</p><h3><strong>3. Tận t&igrave;nh, chu đ&aacute;o</strong></h3><p>Hướng dẫn kh&aacute;ch h&agrave;ng tỉ mỉ, ch&iacute;nh x&aacute;c trong c&aacute;c kh&acirc;u l&agrave;m thủ tục đặt cọc , thanh to&aacute;n tiền h&agrave;ng, Giao h&agrave;ng đến tận kho của kh&aacute;ch h&agrave;ng.</p><h3><strong>4. C&aacute;c ch&iacute;nh s&aacute;ch hỗ trợ kh&aacute;ch h&agrave;ng&nbsp;</strong></h3><p>- Hỗ trợ kho b&atilde;i: Với hệ thống kho đạt ti&ecirc;u chuẩn GSP WHO, Dược H&agrave; T&acirc;y hỗ trợ kh&aacute;ch h&agrave;ng khi cần với mức ph&iacute; ưu đ&atilde;i nhất.</p><p>- Hỗ trợ vốn vay: Dược H&agrave; T&acirc;y l&agrave; kh&aacute;ch h&agrave;ng uy t&iacute;n v&agrave; l&acirc;u năm của c&aacute;c&nbsp;<a href="\\">ng&acirc;n h&agrave;ng</a>&nbsp;lớn như VIETINBANK, VIETCOMBANK,&hellip;.n&ecirc;n Dược H&agrave; T&acirc;y c&oacute; thể hỗ trợ kh&aacute;ch h&agrave;ng khi cần thiết với mức l&atilde;i suất ưu đ&atilde;i.&nbsp;</p><p>- Hỗ trợ tỷ gi&aacute;: Dược H&agrave; T&acirc;y lu&ocirc;n hỗ trợ kh&aacute;ch h&agrave;ng mức tỷ gi&aacute; c&oacute; lợi nhất ngay cả khi nguồn ngoại tệ khan hiếm.&nbsp;</p><p><strong><em>C&aacute;c th&ocirc;ng tin về xuất nhập khẩu xin li&ecirc;n hệ:&nbsp;</em></strong></p><p>BỘ PHẬN XNK- C&Ocirc;NG TY CPDP H&Agrave; T&Acirc;Y&nbsp;</p><p>Địa chỉ: 10A Quang Trung- H&Agrave; Đ&ocirc;ng- H&agrave; Nội&nbsp;</p><p>ĐT: 043.7763172&nbsp;</p><p>Fax: 043.7763173&nbsp;</p><p>Email:&nbsp;<a href="\\">phamkieuyen@gmail.com</a></p>', 'DỊCH VỤ XUẤT NHẬP KHẨU ỦY THÁC', 'DỊCH VỤ XUẤT NHẬP KHẨU ỦY THÁC', 1, 'image1-7news.jpg'),
(8, 'DƯỢC HÀ TÂY - NHÀ KINH DOANH NGUYÊN LIỆU CHUYÊN NGHIỆP', '0000-00-00', '<p>B&ecirc;n cạnh việc đ&aacute;p ứng nguy&ecirc;n liệu cho hoạt động sản xuất thuốc của C&ocirc;ng ty, với mục ti&ecirc;u trở th&agrave;nh nh&agrave; cung cấp nguy&ecirc;n liệu dược phẩm chuy&ecirc;n nghiệp cho c&aacute;c doanh nghiệp sản xuất trong nước, HATAPHAR cam kết cung cấp nguy&ecirc;n liệu đảm bảo chất lượng bởi:</p><p><strong>+ Nguồn gốc xuất xứ</strong>: nguồn nguy&ecirc;n liệu chủ yếu được nhập từ c&aacute;c nước ph&aacute;t triển như Ph&aacute;p, Đức, Thụy Sỹ, Nhật, H&agrave;n Quốc,Trung Quốc...</p><p><strong>+ Chất lượng đầu v&agrave;o</strong>: Nguy&ecirc;n liệu được kiểm tra nghi&ecirc;m ngặt bởi hệ thống kiểm nghiệm đạt GLP (thực h&agrave;nh tốt ph&ograve;ng th&iacute; nghiệm) v&agrave; ISO 9001:2008;</p><p><strong>+ Bảo quản</strong>: Nguy&ecirc;n liệu được bảo quản bởi hệ thống đạt ti&ecirc;u chuẩn GSP (thực h&agrave;nh tốt bảo quản) v&agrave; ISO 9001:2008</p><p><strong>+ Ph&acirc;n phối</strong>: Nguy&ecirc;n liệu được ph&acirc;n phối theo hệ thống đạt ti&ecirc;u chuẩn GDP (thực h&agrave;nh tốt ph&acirc;n phối) v&agrave; ISO 9001:2008</p><p>Với mạng lưới ph&acirc;n phối rộng khắp 63 tỉnh th&agrave;nh, Hataphar c&oacute; được lợi thế về mặt thời gian, đảm bảo tiến độ cung cấp h&agrave;ng h&oacute;a bởi chuỗi cung ứng chuy&ecirc;n nghiệp.</p><h2>ĐỐI T&Aacute;C:</h2><p>Đối t&aacute;c của ch&uacute;ng t&ocirc;i l&agrave; những nh&agrave; cung ứng v&agrave; bạn h&agrave;ng l&acirc;u năm, c&oacute; mối quan hệ hợp t&aacute;c l&acirc;u d&agrave;i.</p><p>Nguy&ecirc;n liệu d&ugrave;ng cho sản xuất thuốc t&acirc;n dược được nhập khẩu trực tiếp từ c&aacute;c nh&agrave; sản xuất hoặc ph&acirc;n phối nguy&ecirc;n liệu dược phẩm thương hiệu uy t&iacute;n tr&ecirc;n thế giới như: BASF (Đức), DSM (Thụy Sĩ), Ấn độ... v&agrave; nhiều nh&agrave; cung ứng ở thị trường ch&acirc;u &Aacute; như H&agrave;n Quốc, Nhật Bản, Trung Quốc,...</p><p>Ch&uacute;ng t&ocirc;i ph&acirc;n phối cho c&aacute;c nh&agrave; sản xuất dược phẩm lớn trong nước như: C&ocirc;ng Ty CP Dược Hậu Giang, C&ocirc;ng ty Cổ Phần Dược 3/2, Dược 2/9, Kh&ocirc;i Nguy&ecirc;n, Tiền Giang, Bến tre, c&ocirc;ng Ty CP dược cửu long, C&ocirc;ng Ty TNHH MTV Trung ương 1, C&ocirc;ng ty cổ phần dược phẩm TW1, C&ocirc;ng ty cổ phần dược phẩm TW2, C&ocirc;ng ty cổ phần Mediplantex, C&ocirc;ng ty Cổ phần Dược phẩm Nam H&agrave;, Hải Ph&ograve;ng, hải Dương, H&agrave; nội, Thanh Ho&aacute;, Nghệ An, H&agrave; Tĩnh, Huế, Quảng B&igrave;nh, B&igrave;nh Định ( Bidiphar), BV Pharma...</p><h2>SẢN PHẨM:</h2><p>Danh mục c&aacute;c nguy&ecirc;n liệu ph&acirc;n phối:&nbsp;<a href="\\">File đ&iacute;nh k&egrave;m</a></p><h2>ĐỊA CHỈ LI&Ecirc;N HỆ MUA NGUY&Ecirc;N LIỆU</h2><p>Chi nh&aacute;nh xuất nhập khẩu - C&ocirc;ng ty cổ phẩn dược phẩm H&agrave; T&acirc;y</p><p>Số 10A Phố Quang Trung, Phường Quang Trung,TP H&agrave; Nội</p><p>Điện thoại :+844.37763172</p><p>Fax: +84437763173</p><p>Handphone: 0988739988/ 0903445488</p><p>Email:&nbsp;<a href="\\">hoanhataphar@gmail.com</a></p>', 'DƯỢC HÀ TÂY - NHÀ KINH DOANH NGUYÊN LIỆU CHUYÊN NGHIỆP', 'DƯỢC HÀ TÂY - NHÀ KINH DOANH NGUYÊN LIỆU CHUYÊN NGHIỆP', 1, 'image1-8news.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `TransactionId` int(10) NOT NULL,
  `ProductId` int(10) NOT NULL,
  `Quantity` int(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Id`, `TransactionId`, `ProductId`, `Quantity`) VALUES
(48, 58, 7, 1),
(47, 57, 4, 1),
(46, 56, 4, 2),
(49, 59, 7, 1),
(50, 60, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `CategoryId` int(10) NOT NULL,
  `TypesId` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Used` varchar(255) NOT NULL,
  `Guide` varchar(255) NOT NULL,
  `Price` int(15) NOT NULL,
  `Detail` text NOT NULL,
  `Createdate` date NOT NULL,
  `Image1` varchar(255) NOT NULL,
  `Image2` varchar(255) NOT NULL,
  `Image3` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `CategoryId`, `TypesId`, `Name`, `Description`, `Used`, `Guide`, `Price`, `Detail`, `Createdate`, `Image1`, `Image2`, `Image3`) VALUES
(6, 1, 0, 'BÀI THẠCH HADOPHARMA', '', 'Uống trong hoặc sau bữa ăn.  Người lớn: Uống 2 viên x 2-3 lần/ngày  Trẻ em: Uống 1-2 viên x 2 lần/ngày  Sản phẩm này không phải là thuốc và không có tác dụng thay thế thuốc chữa bệnh.', 'Giúp lợi tiểu, tăng cường đào thải các chất lắng đọng trong đường tiết niệu ra ngoài cơ thể.  Hỗ trợ điều trị và giúp giảm nguy cơ tái phát:  - Sỏi đường tiết niệu ( sỏi thận, sỏi nệu quản, sỏi bàng quang)  - Viêm đường tiết niệu  - Sỏi túi mật', 150000, '<h2>C&ocirc;ng dụng</h2><p>Gi&uacute;p lợi tiểu, tăng cường đ&agrave;o thải c&aacute;c chất lắng đọng trong đường tiết niệu ra ngo&agrave;i cơ thể.</p><p>Hỗ trợ điều trị v&agrave; gi&uacute;p giảm nguy cơ t&aacute;i ph&aacute;t:</p><p>- Sỏi đường tiết niệu ( sỏi thận, sỏi nệu quản, sỏi b&agrave;ng quang)</p><p>- Vi&ecirc;m đường tiết niệu</p><p>- Sỏi t&uacute;i mật</p><h2>Th&agrave;nh phần</h2><p><strong>Mỗi vi&ecirc;n nang mềm chứa:</strong></p><p>Kim tiền thảo&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.2g</p><p>M&atilde; đề&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..1g</p><p>Tỳ giải&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.1g</p><p>Trạch tả&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip; 0.6g</p><p>Uất kim&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..0,6g</p><p>Ngưu tất&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..0.6g</p><p>K&ecirc; nội kim&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..0.4g</p><p>C&aacute;c chất phụ gia&nbsp;vđ&hellip;&hellip;&hellip;&hellip;.. 1 vi&ecirc;n</p><h2>Đối tượng sử dụng</h2><p>- Người bị sỏi đường tiết niệu ( sỏi thận, sổi niệu quản, sỏi b&agrave;ng quang).</p><p>- Người bị sỏi t&uacute;i mật hoặc c&aacute;c biểu hiện như tiểu tiện kh&oacute;, b&iacute; tiểu, tiểu rắt, tiểu buốt...</p><h2>Th&ocirc;ng tin th&ecirc;m</h2><p>Hộp 6 vỉ x 10 vi&ecirc;n nang mềm</p><p>36 kiện/hộp</p>', '2016-10-05', 'images1-6.jpg', '', ''),
(4, 1, 0, 'ORALIVER', '', ' Uống sau bữa ăn  - Người lớn và trẻ em trên 10 tuổi: uống 2 viên/lần x 2 lần mỗi ngày  - Trẻ em từ 6-10 tuổi: uống 1-2 viên mỗi ngày .Trường hợp bị viêm gan cần sử dụng mỗi đợt tối thiểu 2 tháng, 2 đợt nên cách nhau 1 tuần. Có thể dùng thường xuyên, khôn', 'Giúp bảo vệ tế bào gan - Giải độc gan  - Người bị viêm gan - men gan tăng - gan nhiễm mỡ   - Người bị tổn thương gan do rượu bia, thuốc và hóa chất. Người bị suy giảm chức năng gan, biểu hiện: mệt mỏi, ăn kém. Người bị nóng gan biểu hiện: mẩn ngứa, dị ứng', 140000, '<h2>C&ocirc;ng dụng</h2><p>- Tăng cường chuyển h&oacute;a gi&uacute;p ăn uống ngon miệng.</p><p>- Gi&uacute;p thanh nhiệt, giải độc gan</p><p>- Bảo vệ tế b&agrave;o gan do d&ugrave;ng nhiều rượu, bia, thuốc l&aacute; v&agrave; sử dụng thuốc c&oacute; hại cho gan</p><p>- Hỗ trợ điều trị vi&ecirc;m gan cấp v&agrave; mạn t&iacute;nh, xơ gan, men gan tăng, gan nhiễm mỡ</p><h2>Th&agrave;nh phần</h2><p><strong>Mỗi vi&ecirc;n nang mềm chứa:</strong></p><p>Cao Cardus marianus.....................100 mg</p><p>Diệp hạ ch&acirc;u..................................1000 mg</p><p>Actiso............................................1000 mg</p><p>Bồ bồ............................................500 mg</p><p>Ngũ vị tử.......................................300 mg</p><p>Tinh chất nghệ (Curcumin)..............30 mg</p><p>Bạch truật.....................................300 mg</p><h2>Đối tượng sử dụng</h2><p>- Người bị suy giảm chức năng gan, mệt mỏi, ăn uống kh&oacute; ti&ecirc;u, sợ mỡ, rối loạn ti&ecirc;u h&oacute;a, v&agrave;ng da.</p><p>- Người bị nổi mụn, dị ứng, mẩn ngứa, mề đay, nước tiểu sẫm m&agrave;u, t&aacute;o b&oacute;n, sạm, n&aacute;m da.</p><p>- Người thường xuy&ecirc;n sử dụng rượu bia, l&agrave;m việc trong m&ocirc;i trường độc hại, d&ugrave;ng thuốc chuyển h&oacute;a g&acirc;y độc cho gan.</p><p>- Người bị vi&ecirc;m gan cấp v&agrave; mạn t&iacute;nh, xơ gan, gan nhiễm mỡ, tăng men gan</p><h2>C&aacute;ch d&ugrave;ng</h2><p>Uống sau bữa ăn</p><p>- Người lớn v&agrave; trẻ em tr&ecirc;n 10 tuổi: uống 2 vi&ecirc;n/lần x 2 lần mỗi ng&agrave;y</p><p>- Trẻ em từ 6-10 tuổi: uống 1-2 vi&ecirc;n mỗi ng&agrave;y</p><p>Trường hợp bị vi&ecirc;m gan cần sử dụng mỗi đợt tối thiểu 2 th&aacute;ng, 2 đợt n&ecirc;n c&aacute;ch nhau 1 tuần. C&oacute; thể d&ugrave;ng thường xuy&ecirc;n, kh&ocirc;ng c&oacute; t&aacute;c dụng phụ</p><p><em><strong>Ch&uacute; &yacute;: Sản phẩm n&agrave;y kh&ocirc;ng phải l&agrave; thuốc, kh&ocirc;ng c&oacute; t&aacute;c dụng thay thế thuốc chữa bệnh.</strong></em></p>', '2016-09-06', 'images1-4.jpg', '', ''),
(5, 1, 0, 'XƯƠNG KHỚP HATAPHARM', '', ' Ngày uống 2 lần, mỗi lần 3 viên trước khi ăn 30 phút. Người có tiền sử dạ dày uống sau ăn.  Chú ý: Sản phẩm này không phải là thuốc, không có tác dụng thay thế thuốc chữa bệnh.', 'Giúp thông kinh hoạt lạc, giảm đau nhức xương khớp. Hỗ trợ các liệu pháp điều trị thoái hóa khớp như: cột sống cổ, cột sống thắt lưng, khớp vai, khớp háng, khớp gối, thoát vị đĩa đệm, đau thần kinh tọa, tê buồn chân tay.', 100000, '<h2>C&ocirc;ng dụng</h2><p>Gi&uacute;p th&ocirc;ng kinh hoạt lạc, giảm đau nhức xương khớp. Hỗ trợ c&aacute;c liệu ph&aacute;p điều trị tho&aacute;i h&oacute;a khớp như: cột sống cổ, cột sống thắt lưng, khớp vai, khớp h&aacute;ng, khớp gối, tho&aacute;t vị đĩa đệm, đau thần kinh tọa, t&ecirc; buồn ch&acirc;n tay.</p><h2>Th&agrave;nh phần</h2><p><strong>Mỗi vi&ecirc;n nang cứng&nbsp;chứa:</strong></p><p>M&atilde; tiền chế............................10 mg</p><p>Đương quy.............................70 mg</p><p>Đỗ trọng................................70 mg</p><p>Ngưu tất................................40 mg</p><p>Quế chi.................................10 mg</p><p>Thương truật..........................30 mg</p><p>Độc hoạt...............................50 mg</p><p>Thổ phục linh........................70 mg</p><p>Tục đoạn..............................70 mg</p><p>Cẩu t&iacute;ch...............................70 mg</p><p>C&aacute;c chất phụ gia vừa đủ 1 vi&ecirc;n</p><h2>Đối tượng sử dụng</h2><p>D&ugrave;ng cho người bị tho&aacute;i h&oacute;a khớp. Người bị thấp khớp l&acirc;u năm hoặc thấp khớp do cảm lạnh phong h&agrave;n, đặc biệt l&agrave; khi thời tiết thay đổi</p><p>Lưu &yacute;: Những trường hợp đang sưng, đau nhức nhiều n&ecirc;n ki&ecirc;ng thịt g&agrave;, x&ocirc;i nếp, cua c&aacute; đồng. Bệnh mạn t&iacute;nh th&igrave; kh&ocirc;ng cần ki&ecirc;ng.</p><p>&nbsp;</p>', '2016-10-05', 'images1-5.png', '', ''),
(7, 1, 0, 'ORALIVER KIDS', '', 'Cách dùng – Liều dùng: uống trong hoặc sau bữa ăn  Trẻ em trên 1 tuổi: Uống 1 ống/ ngày (chia 1 hoặc 2 lần).  Người lớn: Uống 1ống/lần x 2 lần/ ngày.  Trẻ em dưới 1 tuổi: Hỏi ý kiến bác sỹ hoặc dược sỹ trước khi dùng.  Cách sử dụng: Lắc kỹ trước khi sử dụ', '- Giúp mát gan, lợi tiểu, thanh nhiệt, giải độc, chống dị ứng.  - Tăng cường chuyển hoá giúp nhuận gan, lợi mật, kích thích tiêu hóa giúp ăn uống ngon miệng.  - Hỗ trợ điều trị rối loại chức năng gan.', 110000, '<h2>C&ocirc;ng dụng</h2><p>- Gi&uacute;p m&aacute;t gan, lợi tiểu, thanh nhiệt, giải độc, chống dị ứng.</p><p>- Tăng cường chuyển ho&aacute; gi&uacute;p nhuận gan, lợi mật, k&iacute;ch th&iacute;ch ti&ecirc;u h&oacute;a gi&uacute;p ăn uống ngon miệng.</p><p>- Hỗ trợ điều trị rối loại chức năng gan.</p><h2>Th&agrave;nh phần</h2><p><strong>Th&agrave;nh phần</strong>: Mỗi ống 10ml chứa:</p><p>Diệp hạ ch&acirc;u &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1.50g</p><p>Actiso&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.50g&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><p>Kim ng&acirc;n hoa &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1.00g</p><p>S&agrave;i đất&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.00g</p><p>Bạch phục linh &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;0.50g</p><p>Bạch truật&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0.50g</p><p>Ho&agrave;i sơn &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 0.20g</p><h2>Đối tượng sử dụng</h2><p><strong>Đối tượng sử dụng:</strong>&nbsp;<em><strong>Người lớn v&agrave; trẻ em c&oacute; biểu hiện:</strong></em></p><p>- Mẩn ngứa, dị ứng, ph&aacute;t ban, r&ocirc;m sẩy, chốc lở ngo&agrave;i da</p><p>- Cơ thể n&oacute;ng trong, bứt rứt kh&oacute; ngủ, n&aacute;m da</p><p>- B&iacute; đại tiểu tiện, nước tiểu sậm m&agrave;u, t&aacute;o b&oacute;n.</p><p>- Mệt mỏi, ch&aacute;n ăn, đắng miệng, ăn uống kh&ocirc;ng ti&ecirc;u, đầy chướng bụng do chức năng chuyển h&oacute;a k&eacute;m.</p><p>- Trẻ mới ốm dậy, d&ugrave;ng thuốc kh&aacute;ng sinh d&agrave;i ng&agrave;y.</p><h2>Th&ocirc;ng tin th&ecirc;m</h2><p><strong>Dạng b&agrave;o chế:</strong>&nbsp;Dung dịch uống</p><p><strong>Quy c&aacute;ch đ&oacute;ng g&oacute;i:</strong>&nbsp;Hộp 20 ống x 10 ml.</p><p><strong>Sản xuất v&agrave; ph&acirc;n phối bởi:</strong></p><p>C&Ocirc;NG TY CỔ PHẦN DƯỢC PHẨM H&Agrave; T&Acirc;Y</p><p><strong>Địa chỉ</strong>: Tổ d&acirc;n phố số 4 &ndash; Phường La kh&ecirc; &ndash; Quận H&agrave; Đ&ocirc;ng &ndash; Th&agrave;nh phố H&agrave; Nội</p><p><strong>Điện thoại</strong>: 04.33824685</p><p><strong>Fax:</strong>&nbsp;04.33829054</p><p><em><strong>Tổng đ&agrave;i tư vấn v&agrave; hỗ trợ kh&aacute;ch h&agrave;ng: 04 33 52 25 25</strong></em></p>', '2016-10-05', 'images1-7.jpg', '', ''),
(8, 3, 0, 'BOSUNAMIN KIDS', '', 'Cách dùng  Dùng uống hàng ngày theo nhu cầu:  - Trẻ em: Từ 1-3 tuổi: Uống 10ml x 1 lần/ngày  - Từ 4-12 tuổi: Uống 10ml x 1-2 lần/ngày  - Từ 12 tuổi trở lên và người lớn: Uống 10ml x 2-3 lần/ngày  Trẻ em dưới 1 tuổi hỏi ý kiến của bác sĩ và dược sĩ  Đối vớ', 'Công dụng  - Cung cấp axit amin được thủy phân từ máu ngựa, các Vitamin và khoáng chất cho cơ thể. Giúp bồi bổ, tăng cường sức khỏe, nâng cao sức đề kháng và tăng khả năng phòng chống bệnh tật, ngăn ngừa lão hóa.  - Giúp bổ sung canxi, hỗ trợ phát triển x', 100000, '<p><strong>Mỗi 5ml chế phẩm chứa:</strong></p><p>Bột đạm thủy ph&acirc;n từ m&aacute;u ngựa.......250mg</p><p>(C&oacute; 16 acid amin: Aspartic, Glutamic, Serin, Histidine, Glycine, Threonine, Alanine, Arginine, Tyrosine, Valine, Methionine, Phenylalanine, Isoleucine, Leucine, Lysine, Proline)</p><p>Vitamin A 200IU</p><p>Vitamin E 5.IU</p><p>Vitamin B1 0.5mg</p><p>Vitamin B2 1.0mg</p><p>Vitamin B6 1.0mg</p><p>Vitamin B3 5.0mg</p><p>Acid folic 0.1mg</p><p>Kẽm gluconat 20mg</p><p>Calci glucoheptonat 20mg</p><p>C&aacute;c chất phụ gia: vừa đủ 5ml</p>', '2016-10-05', 'images1-8.jpg', '', ''),
(9, 1, 0, 'BOSUNAMIN', '', 'Cách dùng  Dùng hàng ngày theo nhu cầu:  - Từ 6-12 tuổi: Uống 1-2 viên x 2 lần /ngày - Từ 12 tuổi trở lên và người lớn: Uống 1-2 viên x 2-3 lần /ngày  Đối với người có nhu cầu dinh dưỡng cao cần sử dụng 2-3 viên/lần x 2-3 lần/ngày  Nên sử dụng thường xuyê', 'Công dụng  - Cung cấp axit amin được thủy phân từ máu ngựa, các Vitamin và khoáng chất cho cơ thể. Giúp bồi bổ, tăng cường sức khỏe, nâng cao sức đề kháng và tăng khả năng phòng chống bệnh tật, ngăn ngừa lão hóa.  - Giúp bổ sung canxi, hỗ trợ phát triển x', 200000, '<p><strong>Th&agrave;nh phần:</strong></p><p>Mỗi vi&ecirc;n nang mềm chứa:</p><p>Bột đạm thủy ph&acirc;n từ m&aacute;u ngựa.......250mg<br />(C&oacute; 16 acid amin tự nhi&ecirc;n dễ hấp thu: Aspartic, Glutamic, Serin, Histidine, Glycine, Threonine, Alanine, Arginine, Tyrosine, Valine, Methionine, Phenylalanine, Isoleucine, Leucine, Lysine, Proline)<br />Vitamin A &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 200IU<br />Vitamin E &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;5.IU<br />Vitamin B1 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; 0.5mg<br />Vitamin B2 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;1.0mg<br />Vitamin B6 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;1.0mg<br />Vitamin B3 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;5.0mg<br />Acid folic &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;0.1mg<br />Kẽm gluconat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;20mg<br />Calci glucoheptonat &nbsp; &nbsp; &nbsp;20mg</p><p>C&aacute;c chất phụ gia: vừa đủ 1 vi&ecirc;n</p><p><strong>Đối tượng sử dụng</strong>:</p><p>D&ugrave;ng cho người lớn v&agrave; trẻ em:</p><p>- Trẻ em biếng ăn, chậm lớn, c&ograve;i xương, suy dinh dưỡng, trẻ mới ốm dậy<br />- Thanh thiếu ni&ecirc;n trong giai đoạn ph&aacute;t triển cơ thể. Trẻ đang trong giai đoạn c&oacute; nhu cầu năng lượng cao, ăn uống kh&ocirc;ng ngon miệng như l&uacute;c học tập qu&aacute; sức, luyện tập thể thao,....</p><p>- Phụ nữ c&oacute; thai, cho con b&uacute;.</p><p>- Người c&oacute; nhu cầu dinh dưỡng cao như: Người cao tuổi, người suy dinh dưỡng, thiếu m&aacute;u, mới ốm dậy, mệt mỏi, sau phẫu thuật, thời kỳ dưỡng bệnh, cơ thể suy nhược, người lao động nặng.</p><p>- Vận động vi&ecirc;n thể thao.</p>', '2016-10-05', 'images1-9.jpg', '', ''),
(14, 1, 0, 'AMOXICILLIN 500MG', '', 'Liều dùng: Theo sự chỉ dẫn của thầy thuốc. Trung bình:  * Người lớn: Uống mỗi lần 1 viên x 3 lần/ngày.  * Trẻ em: dạng bào chế này không phù hợp, nên dùng dạng gói bột pha hỗn dịch  (Thuốc này chỉ dùng theo sự kê đơn của thầy thuốc).', 'Chỉ định trong nhiễm khuẩn do vi khuẩn nhạy cảm:    Nhiễm khuẩn đường hô hấp trên.    Nhiễm khuẩn đường hô hấp dưới do liên cầu khuẩn, phế cầu khuẩn, tụ cầu khuẩn không tiết Penicilinase và H. influenzae.    Nhiễm khuẩn đường tiết niệu không biến chứng.  ', 150000, '<h2><strong>Th&agrave;nh phần:</strong></h2><p>Amoxicilin trihydrat tương ứng với amoxicilin khan &nbsp;500mg</p><p>T&aacute; dược &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;vđ 1 vi&ecirc;n</p><h2><strong>Chỉ định:</strong></h2><p>Chỉ định trong nhiễm khuẩn do vi khuẩn nhạy cảm:</p><p>&nbsp; Nhiễm khuẩn đường h&ocirc; hấp tr&ecirc;n.</p><p>&nbsp; Nhiễm khuẩn đường h&ocirc; hấp dưới do li&ecirc;n cầu khuẩn, phế cầu khuẩn, tụ cầu khuẩn kh&ocirc;ng tiết Penicilinase v&agrave; H. influenzae.</p><p>&nbsp; Nhiễm khuẩn đường tiết niệu kh&ocirc;ng biến chứng.</p><p>&nbsp; Lậu kh&ocirc;ng biến chứng.</p><p>&nbsp; Nhiễm khuẩn đường mật.</p><p>&nbsp; Nhiễm khuẩn da, cơ do li&ecirc;n cầu khuẩn, tụ cầu khuẩn, E. coli nhạy cảm với amoxicillin.</p><h2><strong>Chống chỉ định</strong></h2><p>Bệnh nh&acirc;n c&oacute; tiền sử dị ứng với bất kỳ loại penicilin n&agrave;o</p><p><strong>Quy c&aacute;ch:</strong>&nbsp;Hộp 10 vỉ x 10 vi&ecirc;n nang</p>', '2016-10-06', 'images1-14.png', '', ''),
(11, 1, 0, 'TRIMESEPTOL 0,48G (NÉN)', '', 'Cách dùng - liều dùng:    -Người lớn: Uống mỗi lần 2 viên x 2 lần/ngày, thời gian điều trị 10 ngày.  Hoặc liều duy nhất: 4 viên/ngày, điều trị tối thiểu 3 ngày hoặc 7 ngày.  Trẻ em: Uống 8mg trimethoprim/kg + 40mg sulfamethoxazol/kg, chia 2 lần, thời gian', 'Điều trị nhiễm khuẩn do các vi khuẩn nhạy cảm với thuốc:  - Nhiễm khuẩn đường tiết niệu:  Nhiễm khuẩn đường tiết niệu dưới không biến chứng, nhiễm khuẩn đường tiết niệu mạn tính tái phát ở nữ trưởng thành, viêm tuyến tiền liệt nhiễm khuẩn.  - Nhiễm khuẩn ', 200000, '<h2><strong>Th&agrave;nh phần:</strong></h2><p>Mỗi vi&ecirc;n n&eacute;n chứa:</p><p>Sulfamethoxazol &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 400mg</p><p>Trimethoprim &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 80mg</p><p>T&aacute; dược vđ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1 vi&ecirc;n</p><h2><strong>Chỉ định:</strong></h2><p>Điều trị nhiễm khuẩn do c&aacute;c vi khuẩn nhạy cảm với thuốc:</p><p>- Nhiễm khuẩn đường tiết niệu:</p><p>Nhiễm khuẩn đường tiết niệu dưới kh&ocirc;ng biến chứng, nhiễm khuẩn đường tiết niệu mạn t&iacute;nh t&aacute;i ph&aacute;t ở nữ trưởng th&agrave;nh, vi&ecirc;m tuyến tiền liệt nhiễm khuẩn.</p><p>- Nhiễm khuẩn đường h&ocirc; hấp:</p><p>Đợt cấp vi&ecirc;m phế quản mạn, vi&ecirc;m phổi cấp ở trẻ em, vi&ecirc;m tai giữa cấp ở trẻ em, vi&ecirc;m xoang m&aacute; cấp ở người lớn, vi&ecirc;m phổi do&nbsp;<em>Pneumocystis carinii.</em></p><p>- Nhiễm khuẩn đường ti&ecirc;u h&oacute;a: lỵ trực khuẩn, thương h&agrave;n.</p>', '2016-10-06', 'images1-11.png', '', ''),
(12, 1, 0, 'TRIMESEPTOL 0,48G', '', 'Cách dùng - liều dùng:    - Nhiễm khuẩn đường tiết niệu:  Nhiễm khuẩn đường tiết niệu dưới không biến chứng:  Người lớn: Uống mỗi lần 2 viên x 2 lần/ngày, thời gian điều trị 10 ngày.  Hoặc liều duy nhất: 4 viên/ngày, điều trị tối thiểu 3 ngày hoặc 7 ngày.', 'Điều trị nhiễm khuẩn do các vi khuẩn nhạy cảm với thuốc:  - Nhiễm khuẩn đường tiết niệu:  Nhiễm khuẩn đường tiết niệu dưới không biến chứng, nhiễm khuẩn đường tiết niệu mạn tính tái phát ở nữ trưởng thành, viêm tuyến tiền liệt nhiễm khuẩn.  - Nhiễm khuẩn ', 200000, '<h2><strong>Th&agrave;nh phần:</strong></h2><p>Mỗi vi&ecirc;n nang cứng chứa:</p><p>Sulfamethoxazol &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 400mg</p><p>Trimethoprim &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 80mg</p><p>T&aacute; dược vđ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1 vi&ecirc;n</p><p>&nbsp;</p><h2><strong>Chỉ định:</strong></h2><p>Điều trị nhiễm khuẩn do c&aacute;c vi khuẩn nhạy cảm với thuốc:</p><p>- Nhiễm khuẩn đường tiết niệu:</p><p>Nhiễm khuẩn đường tiết niệu dưới kh&ocirc;ng biến chứng, nhiễm khuẩn đường tiết niệu mạn t&iacute;nh t&aacute;i ph&aacute;t ở nữ trưởng th&agrave;nh, vi&ecirc;m tuyến tiền liệt nhiễm khuẩn.</p><p>- Nhiễm khuẩn đường h&ocirc; hấp:</p><p>Đợt cấp vi&ecirc;m phế quản mạn, vi&ecirc;m phổi cấp ở trẻ em, vi&ecirc;m tai giữa cấp ở trẻ em, vi&ecirc;m xoang m&aacute; cấp ở người lớn, vi&ecirc;m phổi do<em>Pneumocystis carinii.</em></p><p>- Nhiễm khuẩn đường ti&ecirc;u h&oacute;a: lỵ trực khuẩn, thương h&agrave;n.</p>', '2016-10-06', 'images1-12.png', '', ''),
(13, 1, 0, 'TETRACYCLIN 0,5G', '', 'Cách dùng - liều dùng:   Theo sự chỉ dẫn của thầy thuốc. Uống thuốc vào 1 giờ trước hoặc 2 giờ sau khi ăn. Liều trung bình:  Người lớn: Uống 2-4 viên/ngày, chia 2-4 lần  Trẻ em trên 8 tuổi: Uống 25-50 mg/kg/ngày, chia làm 2-4 lần (không quá 4 viên/ngày)  ', 'Do Tetracyclin là kháng sinh đã bị kháng thuốc nhiều nên cần hạn chế sử dụng. Tuy nhiên, thuốc vẫn còn một số chỉ định như:  - Nhiễm khuẩn do Chlamydia: Bệnh Nicolas Favre, viêm phổi, viêm phế quản hoặc viêm xoang, sốt vẹt, bệnh mắt hột, viêm niệu đạo khô', 100000, '<h2><strong>Th&agrave;nh phần:</strong></h2><p>Mỗi vi&ecirc;n nang chứa:</p><p>Tetracyclin hydroclorid &nbsp; &nbsp; &nbsp;500mg</p><p>T&aacute; dược vđ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1 vi&ecirc;n</p><h2><strong>Chỉ định:</strong></h2><p>Do Tetracyclin l&agrave; kh&aacute;ng sinh đ&atilde; bị kh&aacute;ng thuốc nhiều n&ecirc;n cần hạn chế sử dụng. Tuy nhi&ecirc;n, thuốc vẫn c&ograve;n một số chỉ định như:</p><p>- Nhiễm khuẩn do&nbsp;<em>Chlamydia</em>: Bệnh Nicolas Favre, vi&ecirc;m phổi, vi&ecirc;m phế quản hoặc vi&ecirc;m xoang, sốt vẹt, bệnh mắt hột, vi&ecirc;m niệu đạo kh&ocirc;ng đặc hiệu do&nbsp;<em>Chlamydia trachomatis...</em></p><p>- Nhiễm khuẩn do&nbsp;<em>Rickettsia, Mycoplasma,</em>&nbsp;đặc biệt c&aacute;c nhiễm khuẩn do&nbsp;<em>Mycoplasma pneumoniae, Brucella v&agrave; Francisella tularensis,</em>dịch hạch, dịch tả.</p><p>- Ngo&agrave;i ra c&ograve;n c&oacute; chỉ định đặc biệt: mụn trứng c&aacute;, tham gia trong một số ph&aacute;c đồ điều trị H.pylori trong bệnh lo&eacute;t dạ d&agrave;y t&aacute; tr&agrave;ng. Phối hợp với thuốc chống sốt r&eacute;t như Quinin để điều trị sốt r&eacute;t do&nbsp;<em>Plasmadium falciparum</em>&nbsp;kh&aacute;ng thuốc.</p>', '2016-10-06', 'images1-13.png', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `CustomerId` int(10) NOT NULL,
  `CustomerName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Createtime` date NOT NULL,
  `Status` tinyint(4) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`Id`, `CustomerId`, `CustomerName`, `Address`, `Email`, `Phone`, `Createtime`, `Status`) VALUES
(57, 0, 'Nguyễn Đăng Nhật Hoàng', 'Huế', 'nhathoang0207@gmail.com', 1232323, '2016-10-05', 1),
(60, 4, 'Hoang', 'hue', 'sadfa@gmail.com', 123456789, '2016-10-06', 0),
(58, 5, 'Hoàng Nhi', '', 'Nhi@gmail.com', 0, '2016-10-06', 1),
(59, 5, 'Hoàng Nhi', '', 'Nhi@gmail.com', 0, '2016-10-06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `typesproduct`
--

CREATE TABLE IF NOT EXISTS `typesproduct` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `typesproduct`
--

INSERT INTO `typesproduct` (`Id`, `Name`) VALUES
(1, 'Dạng viên'),
(3, 'Dạng sủi'),
(4, 'Dạng bột');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `username`, `password`, `email`, `full_name`, `phone`, `date_of_birth`, `address`, `gender`) VALUES
(1, 'Hiep', '123456789', 'chanhhiep.0201@gmail.com', 'Tran chanh Hiep', 1234567890, '2016-09-14', '', 1),
(2, 'gg', '25f9e794323b453885f5181f1b624d0b', 'Sonnguyen@gmail.com', 'hiep', 0, '1970-01-01', '', 1),
(3, 'ha', '25f9e794323b453885f5181f1b624d0b', 'sadfa@gmail.com', 'Ha nguyen', 123456789, '1970-01-01', 'Hue', 0),
(4, 'Hoang', '6ebe76c9fb411be97b3b0d48b791a7c9', 'sadfa@gmail.com', 'Hoang', 123456789, '1970-01-01', 'hue', 1),
(5, 'Nhi', '25f9e794323b453885f5181f1b624d0b', 'Nhi@gmail.com', 'Hoàng Nhi', 0, '1970-01-01', '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
