<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<link rel="stylesheet" href="{{ asset('css/backend/font-awesome/css/font-awesome.css') }}" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/reset.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('scss/style.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('slick/slick.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
</head>
<body>

    <header id="zing-header" class="scrollfixed">
	    <div class="page-wrapper">
	        <h1 class="logo">
	            <a href="/" title="Zing News">Zing.vn <span>Tri thức trực tuyến</span></a>
	        </h1>
	        <nav class="category-menu">
			    <ul>
			        <li class="parent thoi-su ">
			            <a href="/thoi-su.html" title="Thời sự">Thời sự</a>
			            <div class="subcate">
			                <ul>
								<li >
								    <a href="/chinh-tri.html" >Chính trị</a>
								</li>
								<li >
								    <a href="/giao-thong.html" >Giao thông</a>
								</li>
								<li >
								    <a href="/do-thi.html" >Đô thị</a>
								</li>
			                </ul>
			            </div>
			        </li>
			        <li class="parent phap-luat ">
			            <a href="/phap-luat.html" title="Pháp luật">Pháp luật</a>
			            <div class="subcate">
			                <ul>
								<li >
								    <a href="/phap-dinh.html" >Pháp đình</a>
								</li>
								<li >
								    <a href="/vu-an.html" >Vụ án</a>
								</li>
			                </ul>
			            </div>
			        </li>
			        <li class="parent the-gioi ">
			            <a href="/the-gioi.html" title="Thế giới">Thế giới</a>
			            <div class="subcate">
			                <ul>
								<li >
								    <a href="/quan-su-the-gioi.html" >Quân sự</a>
								</li>
								<li >
								    <a href="/tu-lieu-the-gioi.html" >Tư liệu</a>
								</li>
								<li >
								    <a href="/phan-tich-the-gioi.html" >Phân tích</a>
								</li>
								<li >
								    <a href="/nguoi-viet-4-phuong.html" >Người Việt 4 phương</a>
								</li>
								<li >
								    <a href="/chuyen-la-the-gioi.html" >Chuyện lạ</a>
								</li>
			                </ul>
			            </div>
			        </li>
			        <li class="parent xuat-ban ">
			            <a href="/xuat-ban.html" title="Xuất bản">Xuất bản</a>
			            <div class="subcate">
			                <ul>
								<li >
								    <a href="/tin-tuc-xuat-ban.html" >Tin tức xuất bản</a>
								</li>
								<li >
								    <a href="/sach-hay.html" >Sách hay</a>
								</li>
								<li >
								    <a href="/tac-gia.html" >Tác giả</a>
								</li>
			                </ul>
			            </div>
			        </li>
			        <li class="parent kinh-doanh-tai-chinh ">
			            <a href="/kinh-doanh-tai-chinh.html" title="Kinh doanh">Kinh doanh</a>
			            <div class="subcate">
			                <ul>
								<li >
								    <a href="/bat-dong-san.html" >Bất động sản</a>
								</li>


								<li >
								    <a href="/hang-khong.html" >Hàng không</a>
								</li>


								<li >
								    <a href="/tai-chinh.html" >Tài chính</a>
								</li>


								<li >
								    <a href="/tieu-dung.html" >Tiêu dùng</a>
								</li>


								<li >
								    <a href="/doanh-nhan.html" >Doanh nhân</a>
								</li>


								<li >
								    <a href="/tieu-diem/dau-tu-du-lich.html" style="color:#E4BC6F">Đầu tư du lịch</a>
								</li>
			                </ul>
			            </div>
			        </li>
			        <li class="parent cong-nghe ">
			            <a href="/cong-nghe.html" title="Công nghệ">Công nghệ</a>
			            <div class="subcate">
			                <ul>
								<li >
								    <a href="/mobile.html" >Mobile</a>
								</li>


								<li >
								    <a href="/internet.html" >Internet</a>
								</li>


								<li >
								    <a href="/esports.html" >eSports</a>
								</li>


								<li >
								    <a href="/tieu-diem/da-chieu-sang-tao.html " >#Reno2Series</a>
								</li>
			                </ul>
			            </div>
			        </li>
			        <li class="parent the-thao ">
			            <a href="/the-thao.html" title="Thể thao">Thể thao</a>
			            <div class="subcate">
			                <ul>
								<li >
								    <a href="/bong-da-viet-nam.html" >Bóng đá Việt Nam</a>
								</li>


								<li >
								    <a href="/bong-da-anh.html" >Bóng đá Anh</a>
								</li>


								<li >
								    <a href="/vo-thuat.html" >Võ thuật</a>
								</li>


								<li >
								    <a href="/hau-truong-the-thao.html" >Hậu trường</a>
								</li>
			                </ul>
			            </div>
			        </li>
			        <li class="parent oto-xe-may ">
			            <a href="/oto-xe-may.html" title="Xe">Xe</a>
			            <div class="subcate">
			                <ul>
								<li >
								    <a href="/oto.html" >Ôtô</a>
								</li>
								<li >
								    <a href="/xe-may.html" >Xe máy</a>
								</li>
								<li >
								    <a href="/danh-gia.html" >Đánh giá</a>
								</li>
								<li >
								    <a href="/xe-the-thao.html" >Xe thể thao</a>
								</li>
			                </ul>
			            </div>
			        </li>
			        <li class="parent giai-tri ">
			            <a href="/giai-tri.html" title="Giải trí">Giải trí</a>
			            <div class="subcate">
			                <ul>
								<li >
								    <a href="/sao-viet.html" >Sao Việt</a>
								</li>


								<li >
								    <a href="/sao-chau-a.html" >Sao Châu Á</a>
								</li>


								<li >
								    <a href="/sao-hollywood.html" >Sao Hollywood</a>
								</li>
			                </ul>
			            </div>
			        </li>
			        <li class="parent am-nhac ">
			            <a href="/am-nhac.html" title="Âm nhạc">Âm nhạc</a>
			            <div class="subcate">
			                <ul>
								<li >
								    <a href="/nhac-viet.html" >Nhạc Việt</a>
								</li>


								<li >
								    <a href="/nhac-han.html" >Nhạc Hàn</a>
								</li>


								<li >
								    <a href="/nhac-au-my.html" >Nhạc Âu Mỹ</a>
								</li>


								<li >
								    <a href="/tieu-diem/zing-chart.html" >#ZingChart</a>
								</li>
			                </ul>
			            </div>
			        </li>
			        <li class="parent phim-anh ">
			            <a href="/phim-anh.html" title="Phim ảnh">Phim ảnh</a>
			            <div class="subcate">
			                <ul>
								<li >
								    <a href="/phim-chieu-rap.html" >Phim chiếu rạp</a>
								</li>


								<li >
								    <a href="/phim-truyen-hinh.html" >Phim truyền hình</a>
								</li>


								<li >
								    <a href="/game-show.html" >Game Show</a>
								</li>
			                </ul>
			            </div>
			        </li>
			        <li class="parent thoi-trang ">
			            <a href="/thoi-trang.html" title="Thời trang">Thời trang</a>
			            <div class="subcate">
			                <ul>
								<li >
								    <a href="/thoi-trang-sao.html" >Thời trang sao</a>
								</li>


								<li >
								    <a href="/mac-dep.html" >Mặc đẹp</a>
								</li>


								<li >
								    <a href="/lam-dep.html" >Làm đẹp</a>
								</li>


								<li >
								    <a href="/tieu-diem/trang-suc.html" >Trang sức</a>
								</li>


								<li >
								    <a href="/tieu-diem/aquafina-vietnam-international-fashion-week-2019.html" >#AVIFW2019</a>
								</li>
			                </ul>
			            </div>
			        </li>

			        <li class="parent doi-song ">
			            <a href="/doi-song.html" title="Đời sống">Đời sống</a>
			            <div class="subcate">
			                <ul>
								<li >
								    <a href="/xu-huong.html" >Xu hướng</a>
								</li>


								<li >
								    <a href="/gioi-tre.html" >Giới trẻ</a>
								</li>


								<li >
								    <a href="/song-dep.html" >Sống đẹp</a>
								</li>


								<li >
								    <a href="/su-kien.html" >Sự kiện</a>
								</li>
			                </ul>
			            </div>
			        </li>

			        <li class="parent giao-duc ">
			            <a href="/giao-duc.html" title="Giáo dục">Giáo dục</a>
			            <div class="subcate">
			                <ul>






								<li >
								    <a href="/tuyen-sinh-dai-hoc-2019.html" >Tuyển sinh 2019</a>
								</li>


								<li >
								    <a href="/tu-van-giao-duc.html" >Tư vấn</a>
								</li>


								<li >
								    <a href="/du-hoc.html" > Du học</a>
								</li>


								<li >
								    <a href="/tieu-diem/hoc-tieng-anh.html" >Học Tiếng Anh</a>
								</li>
			                </ul>
			            </div>
			        </li>

			        <li class="parent suc-khoe ">
			            <a href="/suc-khoe.html" title="Sức khỏe">Sức khỏe</a>
			            <div class="subcate">
			                <ul>






								<li >
								    <a href="/khoe-dep.html" >Khỏe đẹp</a>
								</li>


								<li >
								    <a href="/dinh-duong.html" >Dinh dưỡng</a>
								</li>


								<li >
								    <a href="/me-va-be.html" >Mẹ và Bé</a>
								</li>


								<li >
								    <a href="/benh-thuong-gap.html" >Bệnh thường gặp</a>
								</li>
			                </ul>
			            </div>
			        </li>

			        <li class="parent du-lich ">
			            <a href="/du-lich.html" title="Du lịch">Du lịch</a>
			            <div class="subcate">
			                <ul>
								<li >
								    <a href="/dia-diem-du-lich.html" >Địa điểm du lịch</a>
								</li>


								<li >
								    <a href="/kinh-nghiem-du-lich.html" >Kinh nghiệm du lịch</a>
								</li>


								<li >
								    <a href="/phuot.html" >Phượt</a>
								</li>
			                </ul>
			            </div>
			        </li>

			        <li class="parent am-thuc ">
			            <a href="/am-thuc.html" title="Ẩm thực">Ẩm thực</a>
			            <div class="subcate">
			                <ul>






								<li >
								    <a href="/dia-diem-an-uong.html" >Địa điểm ăn uống</a>
								</li>


								<li >
								    <a href="/mon-ngon.html" >Món ngon</a>
								</li>
			                </ul>
			            </div>
			        </li>

			        <li class="parent nhip-song ">
			            <a href="/nhip-song.html" title="Nhịp sống">Nhịp sống</a>
			            <div class="subcate">
			                <ul>






								<li >
								    <a href="/ttdn.html" >TTDN</a>
								</li>


								<li >
								    <a href="/nhip-song/cuoi.html" >Cười</a>
								</li>
			                </ul>
			            </div>
			        </li>

			        <li class="more"><span class="dot dot1"></span><span class="dot dot2"></span><span class="dot dot3"></span></li>
			    </ul>
			</nav>


	        <div class="toolbox">
	            <div class="searchform-wrap">
	                <form name="search" id="searchbox" class="znewsSearch">{{-- target="_blank" --}}
	                    <input type="text" name="s" id="search_keyword" placeholder="Nhập nội dung cần tìm...">
	                    <button type="submit" id="search_button"><span class="znews-icon ti-search"></span></button>
	                </form>
	            </div>
	            <a href="#" class="notification">
	                <span class="znews-icon ti-user"></span>
	            </a>
	            <a class="version" href="javascript:switchMobile();">M</a>
	        </div>
	    </div>



	    <div class="category-popup">
	    	<div class="page-wrapper">
	    		<nav class="category-menu">
				    <ul>

				        <li class="parent thoi-su ">
				            <a href="/thoi-su.html" title="Thời sự">Thời sự</a>
				            <div class="subcate">
				                <ul>






									<li>
									    <a href="/chinh-tri.html">Chính trị</a>
									</li>


									<li>
									    <a href="/giao-thong.html">Giao thông</a>
									</li>


									<li>
									    <a href="/do-thi.html">Đô thị</a>
									</li>
				                </ul>
				            </div>
				        </li>

				        <li class="parent phap-luat ">
				            <a href="/phap-luat.html" title="Pháp luật">Pháp luật</a>
				            <div class="subcate">
				                <ul>






									<li>
									    <a href="/phap-dinh.html">Pháp đình</a>
									</li>


									<li>
									    <a href="/vu-an.html">Vụ án</a>
									</li>
				                </ul>
				            </div>
				        </li>

				        <li class="parent the-gioi ">
				            <a href="/the-gioi.html" title="Thế giới">Thế giới</a>
				            <div class="subcate">
				                <ul>






									<li>
									    <a href="/quan-su-the-gioi.html">Quân sự</a>
									</li>


									<li>
									    <a href="/tu-lieu-the-gioi.html">Tư liệu</a>
									</li>


									<li>
									    <a href="/phan-tich-the-gioi.html">Phân tích</a>
									</li>


									<li>
									    <a href="/nguoi-viet-4-phuong.html">Người Việt 4 phương</a>
									</li>


									<li>
									    <a href="/chuyen-la-the-gioi.html">Chuyện lạ</a>
									</li>
				                </ul>
				            </div>
				        </li>

				        <li class="parent xuat-ban ">
				            <a href="/xuat-ban.html" title="Xuất bản">Xuất bản</a>
				            <div class="subcate">
				                <ul>






									<li>
									    <a href="/tin-tuc-xuat-ban.html">Tin tức xuất bản</a>
									</li>


									<li>
									    <a href="/sach-hay.html">Sách hay</a>
									</li>


									<li>
									    <a href="/tac-gia.html">Tác giả</a>
									</li>
				                </ul>
				            </div>
				        </li>

				        <li class="parent kinh-doanh-tai-chinh ">
				            <a href="/kinh-doanh-tai-chinh.html" title="Kinh doanh">Kinh doanh</a>
				            <div class="subcate">
				                <ul>






									<li>
									    <a href="/bat-dong-san.html">Bất động sản</a>
									</li>


									<li>
									    <a href="/hang-khong.html">Hàng không</a>
									</li>


									<li>
									    <a href="/tai-chinh.html">Tài chính</a>
									</li>


									<li>
									    <a href="/tieu-dung.html">Tiêu dùng</a>
									</li>


									<li>
									    <a href="/doanh-nhan.html">Doanh nhân</a>
									</li>


									<li>
									    <a href="/tieu-diem/dau-tu-du-lich.html" style="color:#E4BC6F">Đầu tư du lịch</a>
									</li>
				                </ul>
				            </div>
				        </li>

				        <li class="parent cong-nghe ">
				            <a href="/cong-nghe.html" title="Công nghệ">Công nghệ</a>
				            <div class="subcate">
				                <ul>






									<li>
									    <a href="/mobile.html">Mobile</a>
									</li>


									<li>
									    <a href="/internet.html">Internet</a>
									</li>


									<li>
									    <a href="/esports.html">eSports</a>
									</li>
				                </ul>
				            </div>
				        </li>

				        <li class="parent the-thao ">
				            <a href="/the-thao.html" title="Thể thao">Thể thao</a>
				            <div class="subcate">
				                <ul>






									<li>
									    <a href="/bong-da-viet-nam.html">Bóng đá Việt Nam</a>
									</li>


									<li>
									    <a href="/bong-da-anh.html">Bóng đá Anh</a>
									</li>


									<li>
									    <a href="/vo-thuat.html">Võ thuật</a>
									</li>


									<li>
									    <a href="/hau-truong-the-thao.html">Hậu trường</a>
									</li>
				                </ul>
				            </div>
				        </li>

				        <li class="parent oto-xe-may ">
				            <a href="/oto-xe-may.html" title="Xe">Xe</a>
				            <div class="subcate">
				                <ul>






									<li>
									    <a href="/oto.html">Ôtô</a>
									</li>


									<li>
									    <a href="/xe-may.html">Xe máy</a>
									</li>


									<li>
									    <a href="/danh-gia.html">Đánh giá</a>
									</li>


									<li>
									    <a href="/xe-the-thao.html">Xe thể thao</a>
									</li>
				                </ul>
				            </div>
				        </li>

				        <li class="parent giai-tri ">
				            <a href="/giai-tri.html" title="Giải trí">Giải trí</a>
				            <div class="subcate">
				                <ul>






									<li>
									    <a href="/sao-viet.html">Sao Việt</a>
									</li>


									<li>
									    <a href="/sao-chau-a.html">Sao Châu Á</a>
									</li>


									<li>
									    <a href="/sao-hollywood.html">Sao Hollywood</a>
									</li>
				                </ul>
				            </div>
				        </li>

				        <li class="parent am-nhac ">
				            <a href="/am-nhac.html" title="Âm nhạc">Âm nhạc</a>
				            <div class="subcate">
				                <ul>






									<li>
									    <a href="/nhac-viet.html">Nhạc Việt</a>
									</li>


									<li>
									    <a href="/nhac-han.html">Nhạc Hàn</a>
									</li>


									<li>
									    <a href="/nhac-au-my.html">Nhạc Âu Mỹ</a>
									</li>


									<li>
									    <a href="/tieu-diem/zing-chart.html">#ZingChart</a>
									</li>
				                </ul>
				            </div>
				        </li>

				        <li class="parent phim-anh ">
				            <a href="/phim-anh.html" title="Phim ảnh">Phim ảnh</a>
				            <div class="subcate">
				                <ul>
									<li>
									    <a href="/phim-chieu-rap.html">Phim chiếu rạp</a>
									</li>

									<li>
									    <a href="/phim-truyen-hinh.html">Phim truyền hình</a>
									</li>

									<li>
									    <a href="/game-show.html">Game Show</a>
									</li>
				                </ul>
				            </div>
				        </li>

				        <li class="parent thoi-trang ">
				            <a href="/thoi-trang.html" title="Thời trang">Thời trang</a>
				            <div class="subcate">
				                <ul>
									<li>
									    <a href="/thoi-trang-sao.html">Thời trang sao</a>
									</li>

									<li>
									    <a href="/mac-dep.html">Mặc đẹp</a>
									</li>

									<li>
									    <a href="/lam-dep.html">Làm đẹp</a>
									</li>

									<li>
									    <a href="/tieu-diem/trang-suc.html">Trang sức</a>
									</li>

									<li>
									    <a href="/tieu-diem/aquafina-vietnam-international-fashion-week-2019.html">#AVIFW2019</a>
									</li>
				                </ul>
				            </div>
				        </li>

				        <li class="parent doi-song ">
				            <a href="/doi-song.html" title="Đời sống">Đời sống</a>
				            <div class="subcate">
				                <ul>
									<li>
									    <a href="/xu-huong.html">Xu hướng</a>
									</li>

									<li>
									    <a href="/gioi-tre.html">Giới trẻ</a>
									</li>

									<li>
									    <a href="/song-dep.html">Sống đẹp</a>
									</li>

									<li>
									    <a href="/su-kien.html">Sự kiện</a>
									</li>
				                </ul>
				            </div>
				        </li>

				        <li class="parent giao-duc ">
				            <a href="/giao-duc.html" title="Giáo dục">Giáo dục</a>
				            <div class="subcate">
				                <ul>
									<li>
									    <a href="/tuyen-sinh-dai-hoc-2019.html">Tuyển sinh 2019</a>
									</li>

									<li>
									    <a href="/tu-van-giao-duc.html">Tư vấn</a>
									</li>

									<li>
									    <a href="/du-hoc.html"> Du học</a>
									</li>

									<li>
									    <a href="/tieu-diem/hoc-tieng-anh.html">Học Tiếng Anh</a>
									</li>
				                </ul>
				            </div>
				        </li>

				        <li class="parent suc-khoe ">
				            <a href="/suc-khoe.html" title="Sức khỏe">Sức khỏe</a>
				            <div class="subcate">
				                <ul>
									<li>
									    <a href="/khoe-dep.html">Khỏe đẹp</a>
									</li>

									<li>
									    <a href="/dinh-duong.html">Dinh dưỡng</a>
									</li>

									<li>
									    <a href="/me-va-be.html">Mẹ và Bé</a>
									</li>

									<li>
									    <a href="/benh-thuong-gap.html">Bệnh thường gặp</a>
									</li>
				                </ul>
				            </div>
				        </li>

				        <li class="parent du-lich ">
				            <a href="/du-lich.html" title="Du lịch">Du lịch</a>
				            <div class="subcate">
				                <ul>
									<li>
									    <a href="/dia-diem-du-lich.html">Địa điểm du lịch</a>
									</li>

									<li>
									    <a href="/kinh-nghiem-du-lich.html">Kinh nghiệm du lịch</a>
									</li>

									<li>
									    <a href="/phuot.html">Phượt</a>
									</li>
				                </ul>
				            </div>
				        </li>

				        <li class="parent am-thuc ">
				            <a href="/am-thuc.html" title="Ẩm thực">Ẩm thực</a>
				            <div class="subcate">
				                <ul>
									<li>
									    <a href="/dia-diem-an-uong.html">Địa điểm ăn uống</a>
									</li>

									<li>
									    <a href="/mon-ngon.html">Món ngon</a>
									</li>
				                </ul>
				            </div>
				        </li>

				        <li class="parent nhip-song ">
				            <a href="/nhip-song.html" title="Nhịp sống">Nhịp sống</a>
				            <div class="subcate">
				                <ul>
									<li>
									    <a href="/ttdn.html">TTDN</a>
									</li>

									<li>
									    <a href="/nhip-song/cuoi.html">Cười</a>
									</li>
				                </ul>
				            </div>
				        </li>

				        <li class="more">
				        	<span class="dot dot1"></span>
				        	<span class="dot dot2"></span>
				        	<span class="dot dot3"></span>
				        </li>
				    </ul>
				</nav>
			</div>
		</div>
	</header>


	@yield('content')


	<footer>
	    <div class="page-wrapper">
	        <div class="info">
	            <a class="logo" href="http://news.zing.vn"><img src="https://static-znews.zadn.vn/images/logo_zing_transparent.png" width="130" width="55" /></a>
	             <p class=" copyright">
	                   <span style="display:block;padding-bottom: 0;margin-bottom: 0;padding-top: 10px;line-height: 10px;">Thuộc Hội Xuất bản Việt Nam</span>
	                   <strong>&copy;</strong> Toàn bộ bản quyền thuộc Zing.vn
	            </p>
	        </div>
	        <ul class="links">
	            <li><a href="javascript:showInfoDialog();">Giới thiệu</a></li>
	            <li><a href="javascript:showPhoneBox();">Liên hệ</a></li>
	            <li><a href="https://news.zing.vn/tuyendung/">Tuyển dụng</a></li>
	            <li><a href="javascript:showBoxAds();">Quảng cáo</a></li>
	        </ul>
	    </div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>
	<script src="{{ asset('slick/slick.js') }}"></script>
</body>
</html>
