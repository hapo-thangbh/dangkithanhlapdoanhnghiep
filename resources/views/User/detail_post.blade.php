@extends('User.Elements.master')
@section('content')
<div class="page-wrapper mt-3">
    <article article-id="1009492" article-url="" class="the-article  type-text " topic-id="seo-4150">
        <header class="the-article-header">
            <p class="the-article-category">
                <a href="/thoi-su.html" title="Thời sự" class="parent_cate">{{ $post->categories->name }}</a>
            </p>
            <h1 class="the-article-title">{{ $post->title }}</h1>
            <ul class="the-article-meta">
                <li class="the-article-publish">{{ date('H:m d/m/Y', strtotime($post->created_at)) }}</li>
            </ul>
        </header>
        <section class="main">
            <p class="the-article-summary">
                {!! $post->description_short !!}
            </p>
            <div class="the-article-body">
                <p>{!! $post->description !!}</p>
            </div>

            {{-- <div class="the-article-credit">
                <p class="author">Quỳnh An</p>
            </div>
            <p class="the-article-tags">
                <strong>Nữ sinh tử nạn khi đi bê tráp</strong>
                <a href="/thanh%2Dh%C3%B3a-tin-tuc.html" title="Thanh Hóa">Thanh Hóa</a>

                <a href="/n%E1%BB%AF%2Dsinh%2Dt%E1%BB%AD%2Dvong-tin-tuc.html" title="nữ sinh tử vong">nữ sinh tử
                    vong</a>

                <a href="/b%C3%AA%2Dtr%C3%A1p%2Dv%E1%BB%81%2Dt%E1%BB%AD%2Dvong-tin-tuc.html"
                    title="bê tráp về tử vong">bê tráp về tử vong</a>

                <a href="/va%2Dch%E1%BA%A1m%2Dxe%2Dhowo-tin-tuc.html" title="va chạm xe Howo">va chạm xe Howo</a>

                <a href="/tai%2Dn%E1%BA%A1n%2D%E1%BB%9F%2Dh%C3%A0%2Dtrung-tin-tuc.html" title="tai nạn ở Hà Trung">tai
                    nạn ở Hà Trung</a>

                <a href="/t%E1%BB%AD%2Dvong%2Dkhi%2D%C4%91i%2Db%C3%AA%2Dtr%C3%A1p-tin-tuc.html"
                    title="tử vong khi đi bê tráp">tử vong khi đi bê tráp</a>

            </p> --}}
            <section class="sidebar">
                {{-- <ul class="topics"></ul>
                <div class="section banners">
                    <div id="advHalfPage" class="banner size_300x600"></div>
                </div> --}}

                {{-- <div class="section" id="mostview-articles">
                    <div class="section-header">
                        <h3 class="section-title">Đọc tiếp</h3>
                    </div>
                    <div class="section-content">
                        <div class="article-list listing-layout">


                            <article class="article-item type-video short" article-id="1003398" topic-id="4120,4150">
                                <p class="article-thumbnail">
                                    <a href="/video-bi-xe-khach-tong-truc-dien-2-nu-sinh-thuong-vong-post1003398.html">

                                        <span class="duration-video show-time">00:30</span>

                                        <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                            data-src="https://znews-gif.zadn.vn/Uploaded/qhj_jwrscslhfo/2019_10_19/ezgifcomvideotogif_12.gif"
                                            alt="Bi xe khach tong truc dien, 2 nu sinh thuong vong hinh anh" />
                                    </a>
                                </p>
                                <header>
                                    <p class="article-title">
                                        <a
                                            href="/video-bi-xe-khach-tong-truc-dien-2-nu-sinh-thuong-vong-post1003398.html">Bị
                                            xe khách tông trực diện, 2 nữ sinh thương vong</a>
                                    </p>
                                    <p class="article-meta">
                                        <span class="article-publish">
                                            <span class="friendly-time">33 ngày trước</span>
                                            <span class="time">15:48</span>
                                            <span class="date">19/10/2019</span>
                                        </span>


                                        <span class="category-parent">Xe</span>



                                        <span class="category">Xe</span>

                                    </p>
                                    <p class="article-count">
                                        <span class="like-count"></span>
                                        <span class="dislike-count"></span>
                                        <span class="rating-count">0</span>
                                        <span class="viral-count ">11</span>
                                        <span class="comment-count hide"></span>
                                    </p>
                                    <p class="article-summary">Tai nạn xảy ra giữa xe khách và 2 nữ sinh đi xe máy tại
                                        TP Vinh (Nghệ An). Vụ việc khiến một người bị thương nặng, người còn lại tử vong
                                        tại chỗ. </p>

                                </header>
                            </article>

                            <article class="article-item type-video" article-id="1009436" topic-id="2207,2657,4150">
                                <p class="article-thumbnail">
                                    <a href="/video-hien-truong-xe-tai-can-co-gai-20-tuoi-tu-vong-o-tphcm-post1009436.html"
                                        origin-id="1074751202">

                                        <span class="duration-video show-time">00:52</span>

                                        <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                            data-src="https://znews-photo.zadn.vn/Uploaded/kbd_ivdb/2019_11_04/a1.jpg"
                                            alt="Hien truong xe tai can co gai 20 tuoi tu vong o TP.HCM hinh anh" />
                                    </a>
                                </p>
                                <header>
                                    <p class="article-title">
                                        <a href="/video-hien-truong-xe-tai-can-co-gai-20-tuoi-tu-vong-o-tphcm-post1009436.html"
                                            origin-id="1074751202">Hiện trường xe tải cán cô gái 20 tuổi tử vong ở
                                            TP.HCM</a>
                                    </p>
                                    <p class="article-meta">
                                        <span class="article-publish">
                                            <span class="friendly-time">17 ngày trước</span>
                                            <span class="time">14:04</span>
                                            <span class="date">04/11/2019</span>
                                        </span>


                                        <span class="category-parent">Thời sự</span>



                                        <span class="category">Thời sự</span>

                                    </p>
                                    <p class="article-count">
                                        <span class="like-count"></span>
                                        <span class="dislike-count"></span>
                                        <span class="rating-count">0</span>
                                        <span class="viral-count ">18</span>
                                        <span class="comment-count hide"></span>
                                    </p>
                                    <p class="article-summary">Vụ va chạm với xe tải trên đường Phạm Văn Bạch, quận Tân
                                        Bình (TP.HCM), khiến cô gái 20 tuổi tử vong tại chỗ.</p>

                                </header>
                            </article>

                            <article class="article-item type-text" article-id="942640" topic-id="2209,2657,3829,4150">
                                <p class="article-thumbnail">
                                    <a
                                        href="/tong-vao-taluy-ben-duong-nu-sinh-vien-tu-vong-tren-nui-son-tra-post942640.html">

                                        <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                            data-src="https://znews-photo.zadn.vn/Uploaded/neg_glyrtla/2019_05_04/dai.jpg"
                                            alt="Tong vao taluy ben duong, nu sinh vien tu vong tren nui Son Tra hinh anh" />
                                    </a>
                                </p>
                                <header>
                                    <p class="article-title">
                                        <a
                                            href="/tong-vao-taluy-ben-duong-nu-sinh-vien-tu-vong-tren-nui-son-tra-post942640.html">Tông
                                            vào taluy bên đường, nữ sinh viên tử vong trên núi Sơn Trà</a>
                                    </p>
                                    <p class="article-meta">
                                        <span class="article-publish">
                                            <span class="friendly-time">7 tháng trước</span>
                                            <span class="time">15:51</span>
                                            <span class="date">04/05/2019</span>
                                        </span>


                                        <span class="category-parent">Thời sự</span>



                                        <span class="category">Thời sự</span>

                                    </p>
                                    <p class="article-count">
                                        <span class="like-count"></span>
                                        <span class="dislike-count"></span>
                                        <span class="rating-count">0</span>
                                        <span class="viral-count ">346</span>
                                        <span class="comment-count hide"></span>
                                    </p>
                                    <p class="article-summary">Lái xe máy lên núi Sơn Trà (Đà Nẵng) tham quan cùng bạn,
                                        xe của Sang không may tông vào taluy chắn bên đường.</p>

                                </header>
                            </article>




                        </div>
                    </div>
                </div> --}}
            </section>
        </section>
        <div>
            <h2>Comment</h2>
            @foreach ($post->comments as $comment)
            <p>{{ $comment->user->name }} : {{ $comment->description }} <a href="{{ route('delete_comment', $comment->id) }}">Xóa</a></p>
            <a href="javascript: void(0)" title="" class="reply">Trả lời</a>
            @endforeach
            
        </div>

                <div>
                    <h3 class="font-weight-bold mb-2">Ý KIẾN BẠN ĐỌC</h3>
                    <form action="{{ route('comment', ['post_id' => $post->id]) }}" method="POST">
                        @csrf
                        <textarea class="form-control" name="description" id="" cols="30" rows="3"></textarea>
                        <button type="submit" class="btn btn-primary">Gửi bình luận</button>
                    </form>
                </div>
        {{-- <section class="section recommendation has-sidebar">
            <header class="section-title">
                <h2>Bạn có thể quan tâm</h2>
                <p class="description"><a href="/thoi-su.html">Thời sự</a></p>
            </header>
            <div class="section-content">
                <div class="article-list listing-layout responsive">


                    <article class="article-item type-text" article-id="1015794" topic-id="2657">
                        <p class="article-thumbnail">
                            <a href="/hai-phuong-an-khac-phuc-vu-sap-cau-bo-hanh-suoi-tien-post1015794.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/kbd_ivdb/2019_11_13/1e00385ae8fd0ea357ec_1.jpg"
                                    alt="Hai phuong an khac phuc vu sap cau bo hanh Suoi Tien hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/hai-phuong-an-khac-phuc-vu-sap-cau-bo-hanh-suoi-tien-post1015794.html">Hai
                                    phương án khắc phục vụ sập cầu bộ hành Suối Tiên</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">41 phút trước</span>
                                    <span class="time">14:03</span>
                                    <span class="date">21/11/2019</span>
                                </span>


                                <span class="category-parent">Thời sự</span>



                                <span class="category">Thời sự</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Nâng mố trụ cầu hoặc hạ cốt nền mặt đường để đảm bảo độ tĩnh
                                không 4,75 m là hai phương án chủ đầu tư đưa ra nhằm khắc phục vụ sập dầm cầu vượt Suối
                                Tiên.</p>

                        </header>
                    </article>

                    <article class="article-item type-video short" article-id="1015685" topic-id="2020,4440">
                        <p class="article-thumbnail">
                            <a href="/video-doi-nam-nu-bi-hat-vang-khi-va-cham-voi-oto-7-cho-post1015685.html">

                                <span class="duration-video show-time">00:31</span>

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-gif.zadn.vn/Uploaded/ngotgs/2019_11_21/ezgifcomgifmaker.gif"
                                    alt="Doi nam nu bi hat vang khi va cham voi oto 7 cho hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/video-doi-nam-nu-bi-hat-vang-khi-va-cham-voi-oto-7-cho-post1015685.html">Đôi
                                    nam nữ bị hất văng khi va chạm với ôtô 7 chỗ</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">2 giờ trước</span>
                                    <span class="time">12:56</span>
                                    <span class="date">21/11/2019</span>
                                </span>


                                <span class="category-parent">Thời sự</span>



                                <span class="category">Thời sự</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">7</span>
                                <span class="comment-count ">10</span>
                            </p>
                            <p class="article-summary">Đôi nam nữ bị hất văng xuống đường khi xe máy của họ đâm vào sườn
                                ôtô 7 chỗ đang chuyển làn.</p>

                        </header>
                    </article>

                    <article class="article-item type-text" article-id="1015765" topic-id="4046">
                        <p class="article-thumbnail">
                            <a
                                href="/vi-sao-rapper-lil-jon-mang-nhieu-vang-khi-xuat-canh-tan-son-nhat-post1015765.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/aobohun/2019_11_21/liljoncrunkaintdeadbling.jpg"
                                    alt="Vi sao rapper Lil Jon mang nhieu vang khi xuat canh Tan Son Nhat? hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="/vi-sao-rapper-lil-jon-mang-nhieu-vang-khi-xuat-canh-tan-son-nhat-post1015765.html">Vì
                                    sao rapper Lil Jon mang nhiều vàng khi xuất cảnh Tân Sơn Nhất?</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">2 giờ trước</span>
                                    <span class="time">12:16</span>
                                    <span class="date">21/11/2019</span>
                                </span>


                                <span class="category-parent">Thời sự</span>



                                <span class="category">Thời sự</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">7</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">“Ông vua của dòng nhạc crunk rap” Lil Jon bị hải quan sân bay Tân
                                Sơn Nhất câu lưu 6 tiếng vì mang quá nhiều vàng.</p>

                        </header>
                    </article>

                    <article class="article-item type-hasvideo picked-trending" article-id="1015670"
                        topic-id="2001,2020,2657,4150,4440">
                        <p class="article-thumbnail">
                            <a href="/nu-sinh-thoat-chet-trong-vu-mercedes-tong-3-xe-may-post1015670.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/qxwpzdjwp/2019_11_21/TNGT_4_thumb.jpg"
                                    alt="Nu sinh thoat chet trong vu Mercedes tong 3 xe may hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/nu-sinh-thoat-chet-trong-vu-mercedes-tong-3-xe-may-post1015670.html">Nữ sinh
                                    thoát chết trong vụ Mercedes tông 3 xe máy</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">3 giờ trước</span>
                                    <span class="time">12:06</span>
                                    <span class="date">21/11/2019</span>
                                </span>


                                <span class="category-parent">Thời sự</span>



                                <span class="category">Thời sự</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count ">9</span>
                            </p>
                            <p class="article-summary">Đang trên đường đi dự lễ 20/11, Hồng Nhung bị chiếc Mercedes GLC
                                250 tông từ phía sau. Cú đâm khiến nữ sinh văng xuống đất, chấn thương cột sống.</p>

                        </header>
                    </article>

                    <article class="article-item type-text" article-id="1015732" topic-id="2208">
                        <p class="article-thumbnail">
                            <a href="/chu-tich-ha-noi-khong-giao-du-an-cho-chu-dau-tu-tung-sai-pham-post1015732.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/lexw/2019_11_21/ba7a8a11f05b0905504a_thumb.jpg"
                                    alt="Chu tich Ha Noi: Khong giao du an cho chu dau tu tung sai pham hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="/chu-tich-ha-noi-khong-giao-du-an-cho-chu-dau-tu-tung-sai-pham-post1015732.html">Chủ
                                    tịch Hà Nội: Không giao dự án cho chủ đầu tư từng sai phạm</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">3 giờ trước</span>
                                    <span class="time">12:05</span>
                                    <span class="date">21/11/2019</span>
                                </span>


                                <span class="category-parent">Thời sự</span>



                                <span class="category">Thời sự</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Chủ tịch Nguyễn Đức Chung yêu cầu không cho nhà đầu tư đã hoặc
                                đang vi phạm trong đầu tư, quản lý dự án chung cư được tham gia đầu tư các dự án mới
                                trên địa bàn TP.</p>

                        </header>
                    </article>

                    <article class="article-item type-text short" article-id="1015713" topic-id="4150">
                        <p class="article-thumbnail">
                            <a href="/xe-tai-cuon-2-vo-chong-vao-gam-post1015713.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/ngotgs/2019_11_21/74839057_722070824948728_6470056713151053824_n.jpg"
                                    alt="Xe tai cuon 2 vo chong vao gam hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/xe-tai-cuon-2-vo-chong-vao-gam-post1015713.html">Xe tải cuốn 2 vợ chồng vào
                                    gầm</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">3 giờ trước</span>
                                    <span class="time">11:44</span>
                                    <span class="date">21/11/2019</span>
                                </span>


                                <span class="category-parent">Thời sự</span>



                                <span class="category">Thời sự</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count ">1</span>
                            </p>
                            <p class="article-summary">Ông Chung đèo vợ trên xe máy trên quốc lộ 32, đoạn qua huyện Hoài
                                Đức, thì bị một xe tải đâm từ phía sau. Cả hai tử vong tại chỗ.</p>

                        </header>
                    </article>

                    <article class="article-item type-video short" article-id="1015697" topic-id="2209,2657">
                        <p class="article-thumbnail">
                            <a href="/video-oto-hyundai-tong-4-xe-may-dung-cho-den-do-post1015697.html">

                                <span class="duration-video show-time">00:35</span>

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/jugtzb/2019_11_21/TN1.jpg"
                                    alt="Oto Hyundai tong 4 xe may dung cho den do hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/video-oto-hyundai-tong-4-xe-may-dung-cho-den-do-post1015697.html">Ôtô Hyundai
                                    tông 4 xe máy dừng chờ đèn đỏ</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">3 giờ trước</span>
                                    <span class="time">11:37</span>
                                    <span class="date">21/11/2019</span>
                                </span>


                                <span class="category-parent">Thời sự</span>



                                <span class="category">Thời sự</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">1</span>
                                <span class="comment-count ">3</span>
                            </p>
                            <p class="article-summary">Sáng 21/11, nhiều người dân đang chờ đèn đỏ ở ngã tư Phan Thanh -
                                Nguyễn Văn Linh (quận Thanh Khê) bị ôtô hiệu Hyundai biển số Đà Nẵng tông từ phía sau.
                            </p>

                        </header>
                    </article>

                    <article class="article-item type-text" article-id="1015690" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/giai-cuu-11-nguoi-gap-nan-do-tau-mac-can-tren-bien-post1015690.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/obfsvun/2019_11_21/aa.jpg"
                                    alt="Giai cuu 11 nguoi gap nan do tau mac can tren bien hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/giai-cuu-11-nguoi-gap-nan-do-tau-mac-can-tren-bien-post1015690.html">Giải cứu
                                    11 người gặp nạn do tàu mắc cạn trên biển</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">3 giờ trước</span>
                                    <span class="time">11:31</span>
                                    <span class="date">21/11/2019</span>
                                </span>


                                <span class="category-parent">Thời sự</span>



                                <span class="category">Thời sự</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Biển động mạnh làm tàu chao lắc và nghiêng, có nguy cơ bị chìm
                                khiến thuyền viên hoảng loạn. Tàu cứu hộ đã kịp thời ứng cứu thành công 11 người và đưa
                                vào bờ.</p>

                        </header>
                    </article>
                </div>
            </div>
        </section> --}}
    </article>

</div>
<div id="article-nextreads" data-source="/trending.html"></div>
@endsection
