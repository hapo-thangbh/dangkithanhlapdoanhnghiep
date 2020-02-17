@extends('User.Elements.master')
@section('content')
<div class="page-wrapper">
    <section id="section-featured" class="section pt-4 mt-5">
        <div class="section-content">
            <div data-content="newsfeatured" class="article-list">
                @foreach($newPosts as $key => $newPost)
                    @if($key ===0)
                        <article class="article-item type-hasvideo picked-featured">
                            <p class="article-thumbnail">
                                <a href="/">
                                    <img src="{{ asset(config('app.image_path') . $newPost->image_thumb) }}"
                                         alt="{{ $newPost->title }}" />
                                </a>
                            </p>
                            <header>
                                <p class="article-title">
                                    <a href="/">{{ $newPost->title }}</a>
                                </p>
                                <p class="article-summary">{!! $newPost->description_short !!}</p>
                            </header>
                        </article>
                    @elseif($key < 3)
                        <article class="article-item type-text picked-featured">
                            <p class="article-thumbnail">
                                <a href="/">
                                    <img src="{{ asset(config('app.image_path') . $newPost->image_thumb) }}"
                                         alt="{{ $newPost->title }}" />
                                </a>
                            </p>
                            <header>
                                <p class="article-title">
                                    <a href="/">{{ $newPost->title }}</a>
                                </p>
                                <p class="article-summary">{!! $newPost->description_short !!}</p>
                            </header>
                        </article>
                    @endif
                @endforeach
            </div>
            <div data-content="newstrending" class="article-list listing-layout ">
                @foreach($newPosts as $key => $newPost)
                    @if($key > 2)
                        <article class="article-item type-hasvideo picked-trending">
                            <p class="article-thumbnail">
                                <a href="/">
                                    <img src="{{ asset(config('app.image_path') . $newPost->image_thumb) }}"
                                         alt="{{ $newPost->title }}" />
                                </a>
                            </p>
                            <header>
                                <p class="article-title">
                                    <a href="/">{{ $newPost->title }}</a>
                                </p>
                                <p class="article-summary">{!! $newPost->description_short !!}</p>
                            </header>
                        </article>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
</div>

<div class="page-wrapper">
    @php($categoryFirst = $categories->first())
    <section id="section-latest" class="section has-sidebar">
        <header class="section-title">
            <h3>{{ $categoryFirst->name }}</h3>
        </header>
        <section class="section-content">
            <div class="article-list listing-layout responsive unique" min-display="6">
                @foreach($categoryFirst->posts as $post)
                    <article class="article-item type-hasvideo">
                        <p class="article-thumbnail">
                            <a href="{{ route('detail_post', $post->id) }}">
                                <img src="{{ asset(config('app.image_path') . $post->image_thumb) }}" alt="">
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="{{ route('detail_post', $post->id) }}">
                                    {!! $post->title !!}
                                </a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="date">{{ date('d/m/Y', strtotime($post->created_at)) }}</span>
                                </span>
                                <span class="category">{{ $post->categories->name }}</span>
                            </p>
                            <p class="article-summary">
                                {!! $post->description_short !!}
                            </p>
                        </header>
                    </article>
                @endforeach
            </div>
        </section>
    </section>
</div>

<section class="section ads">
    <div id="advMastheadInline" class="banner size_masthead"></div>
</section>

<div class="page-wrapper">
    <section id="section-entertainment" class="section category">
        <section class="section-content layout-grid-4">
            @foreach($categories as $key => $category)
                @if($key > 0 && $key < 5)
                    <div class="box-category">
                        <h3 class="category-title">
                            <a href="/" title="{{ $category->name }}">{{ $category->name }}</a>
                        </h3>
                        <div class="article-list listing-layout unique">
                            @foreach($category->posts as $k => $post)
                                @if($k === 0)
                                    <article class="article-item type-text short">
                                        <p class="article-thumbnail">
                                            <a href="{{ route('detail_post', $post->id) }}">
                                                <img src="{{ asset(config('app.image_path') . $post->image_thumb) }}"
                                                     data-src="{{ asset(config('app.image_path') . $post->image_thumb) }}"
                                                     alt="{{ $post->title }}" />
                                            </a>
                                        </p>
                                        <header>
                                            <p class="article-title">
                                                <a href="{{ route('detail_post', $post->id) }}">{{ $post->title }}</a></p>
                                            <p class="article-summary">{{ $post->description_short }}</p>
                                        </header>
                                    </article>
                                @else
                                    <article class="article-item type-text short">
                                        <p class="article-thumbnail">
                                            <a href="{{ route('detail_post', $post->id) }}">
                                                <img src="{{ asset(config('app.image_path') . $post->image_thumb) }}"
                                                     data-src="{{ asset(config('app.image_path') . $post->image_thumb) }}"
                                                     alt="{{ $post->title }}" />
                                            </a>
                                        </p>
                                        <header>
                                            <p class="article-title">
                                                <a href="{{ route('detail_post', $post->id) }}">{{ $post->title }}</a>
                                            </p>
                                            <p class="article-summary">{{ $post->description_short }}</p>
                                        </header>
                                    </article>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach
        </section>
    </section>

    <section id="section-sport" class="section category">
        <header class="section-title">
            <h3>
                <a href="/the-thao.html" title="Thể thao">Thể thao</a>
            </h3>
        </header>
        <section class="section-content">

            <div class="article-list multimedia-layout unique" min-display="7">


                <article class="article-item type-text" article-id="1011355" topic-id="4723">
                    <p class="article-thumbnail">
                        <a
                            href="/tuyen-nu-thai-lan-giat-giai-tai-aff-awards-du-khong-hay-hon-viet-nam-post1011355.html">

                            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                data-src="https://znews-photo.zadn.vn/Uploaded/mdf_usoddd/2019_11_08/thumbnu.jpg"
                                alt="Tuyen nu Thai Lan giat giai tai AFF Awards du khong hay hon Viet Nam hinh anh" />
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a
                                href="/tuyen-nu-thai-lan-giat-giai-tai-aff-awards-du-khong-hay-hon-viet-nam-post1011355.html">Tuyển
                                nữ Thái Lan giật giải tại AFF Awards dù không hay hơn Việt Nam</a>
                        </p>
                        <p class="article-meta">
                            <span class="article-publish">
                                <span class="friendly-time">15 giờ trước</span>
                                <span class="time">06:49</span>
                                <span class="date">09/11/2019</span>
                            </span>


                            <span class="category-parent">Thể thao</span>



                            <span class="category">Bóng đá Việt Nam</span>

                        </p>
                        <p class="article-count">
                            <span class="like-count"></span>
                            <span class="dislike-count"></span>
                            <span class="rating-count">0</span>
                            <span class="viral-count ">1</span>
                            <span class="comment-count ">10</span>
                        </p>
                        <p class="article-summary">Được dự World Cup bóng đá nữ 2019 là lợi thế lớn với tuyển nữ Thái
                            Lan trong cuộc đua với tuyển nữ Việt Nam ở đề cử hay nhất Đông Nam Á, tại lễ trao giải AFF
                            Awards 2019.</p>

                    </header>
                </article>

                <article class="article-item type-text" article-id="1011526" topic-id="3847,3949,3957,4015,4037,5129">
                    <p class="article-thumbnail">
                        <a href="/man-city-co-noi-lo-hang-thu-truoc-tran-gap-liverpool-post1011526.html">

                            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                data-src="https://znews-photo.zadn.vn/Uploaded/yrfjpyvslyr/2019_11_09/liv_mc.jpg"
                                alt="Man City co noi lo hang thu truoc tran gap Liverpool hinh anh" />
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a href="/man-city-co-noi-lo-hang-thu-truoc-tran-gap-liverpool-post1011526.html">Man City có
                                nỗi lo hàng thủ trước trận gặp Liverpool</a>
                        </p>
                        <p class="article-meta">
                            <span class="article-publish">
                                <span class="friendly-time">5 giờ trước</span>
                                <span class="time">17:00</span>
                                <span class="date">09/11/2019</span>
                            </span>


                            <span class="category-parent">Thể thao</span>



                            <span class="category">Bóng đá Anh</span>

                        </p>
                        <p class="article-count">
                            <span class="like-count"></span>
                            <span class="dislike-count"></span>
                            <span class="rating-count">0</span>
                            <span class="viral-count ">6</span>
                            <span class="comment-count hide"></span>
                        </p>
                        <p class="article-summary">Man City đang là đội tạo cơ hội hàng đầu Premier League, nhưng vẫn có
                            những nỗi lo ở hàng phòng ngự. Trong khi đó, Liverpool đạt được sự cân bằng. </p>

                    </header>
                </article>

                <article class="article-item type-hasvideo" article-id="1011477" topic-id="">
                    <p class="article-thumbnail">
                        <a href="/hlv-mcmenemy-khong-phai-nguyen-nhan-khien-indonesia-sa-sut-post1011477.html">

                            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                data-src="https://znews-photo.zadn.vn/Uploaded/pgi_ubnatyvau/2019_11_09/menemy.jpg"
                                alt="HLV McMenemy khong phai nguyen nhan khien Indonesia sa sut hinh anh" />
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a href="/hlv-mcmenemy-khong-phai-nguyen-nhan-khien-indonesia-sa-sut-post1011477.html">HLV
                                McMenemy không phải nguyên nhân khiến Indonesia sa sút</a>
                        </p>
                        <p class="article-meta">
                            <span class="article-publish">
                                <span class="friendly-time">7 giờ trước</span>
                                <span class="time">15:22</span>
                                <span class="date">09/11/2019</span>
                            </span>


                            <span class="category-parent">Thể thao</span>



                        </p>
                        <p class="article-count">
                            <span class="like-count"></span>
                            <span class="dislike-count"></span>
                            <span class="rating-count">0</span>
                            <span class="viral-count ">2</span>
                            <span class="comment-count hide"></span>
                        </p>
                        <p class="article-summary">Beto Goncalves cho rằng việc thể lực cầu thủ bị bào mòn quá nhiều bởi
                            giải vô địch quốc gia mới là lý do chính dẫn tới chuỗi thành tích nghèo nàn của Indonesia
                            thời gian qua.</p>

                    </header>
                </article>

                <article class="article-item type-text short" article-id="1011308" topic-id="934,3847,3944,3949,5129">
                    <p class="article-thumbnail">
                        <a href="/de-bruyne-thich-duoc-thi-dau-tai-anfield-post1011308.html">

                            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                data-src="https://znews-photo.zadn.vn/Uploaded/fcivpcvo/2019_11_08/kdb_thumb.jpg"
                                alt="De Bruyne thich duoc thi dau tai Anfield hinh anh" />
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a href="/de-bruyne-thich-duoc-thi-dau-tai-anfield-post1011308.html">De Bruyne thích được
                                thi đấu tại Anfield</a>
                        </p>
                        <p class="article-meta">
                            <span class="article-publish">
                                <span class="friendly-time">8 giờ trước</span>
                                <span class="time">14:11</span>
                                <span class="date">09/11/2019</span>
                            </span>


                            <span class="category-parent">Thể thao</span>



                            <span class="category">Thể thao</span>

                        </p>
                        <p class="article-count">
                            <span class="like-count"></span>
                            <span class="dislike-count"></span>
                            <span class="rating-count">0</span>
                            <span class="viral-count hide"></span>
                            <span class="comment-count hide"></span>
                        </p>
                        <p class="article-summary">Tiền vệ Kevin De Bruyne cho rằng không khí cuồng nhiệt tại sân
                            Anfield sẽ truyền cảm hứng cho Man City trong trận đấu với Liverpool cuối tuần này.</p>

                    </header>
                </article>

                <article class="article-item type-text" article-id="1011344" topic-id="934,3848,3859,3958">
                    <p class="article-thumbnail">
                        <a href="/wenger-bi-tu-choi-khi-goi-dien-cho-bayern-de-ung-cu-hlv-truong-post1011344.html">

                            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                data-src="https://znews-photo.zadn.vn/Uploaded/mdf_usoddd/2019_11_08/c9e92139f00a08c263147d90a3a0ea299037961573100503.jpg"
                                alt="Wenger bi tu choi khi goi dien cho Bayern de ung cu HLV truong hinh anh" />
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a href="/wenger-bi-tu-choi-khi-goi-dien-cho-bayern-de-ung-cu-hlv-truong-post1011344.html">Wenger
                                bị từ chối khi gọi điện cho Bayern để ứng cử HLV trưởng</a>
                        </p>
                        <p class="article-meta">
                            <span class="article-publish">
                                <span class="friendly-time">9 giờ trước</span>
                                <span class="time">13:00</span>
                                <span class="date">09/11/2019</span>
                            </span>


                            <span class="category-parent">Thể thao</span>



                            <span class="category">Bóng đá Việt Nam</span>

                        </p>
                        <p class="article-count">
                            <span class="like-count"></span>
                            <span class="dislike-count"></span>
                            <span class="rating-count">0</span>
                            <span class="viral-count hide"></span>
                            <span class="comment-count ">2</span>
                        </p>
                        <p class="article-summary">Nhà cầm quân người Pháp thể hiện mong muốn được dẫn dắt Bayern Munich
                            nhưng đội chủ sân Alianz Arena lại không tỏ ra hào hứng.</p>

                    </header>
                </article>

                <article class="article-item type-text" article-id="1011424" topic-id="934,3982,4008">
                    <p class="article-thumbnail">
                        <a href="/sao-tre-rodrygo-khoi-dau-tot-hon-2-huyen-thoai-o-real-madrid-post1011424.html">

                            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                data-src="https://znews-photo.zadn.vn/Uploaded/fcivpcvo/2019_11_09/rodrygo.jpg"
                                alt="Sao tre Rodrygo khoi dau tot hon 2 huyen thoai o Real Madrid hinh anh" />
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a href="/sao-tre-rodrygo-khoi-dau-tot-hon-2-huyen-thoai-o-real-madrid-post1011424.html">Sao
                                trẻ Rodrygo khởi đầu tốt hơn 2 huyền thoại ở Real Madrid</a>
                        </p>
                        <p class="article-meta">
                            <span class="article-publish">
                                <span class="friendly-time">10 giờ trước</span>
                                <span class="time">12:00</span>
                                <span class="date">09/11/2019</span>
                            </span>


                            <span class="category-parent">Thể thao</span>



                            <span class="category">Thể thao</span>

                        </p>
                        <p class="article-count">
                            <span class="like-count"></span>
                            <span class="dislike-count"></span>
                            <span class="rating-count">0</span>
                            <span class="viral-count hide"></span>
                            <span class="comment-count ">2</span>
                        </p>
                        <p class="article-summary">Với 5 bàn thắng trong 6 trận đấu, Rodrygo có khởi đầu tốt hơn 2 chân
                            sút huyền thoại ở Real là Emilio Butragueno và Raúl González.</p>

                    </header>
                </article>

                <article class="article-item type-hasvideo short" article-id="1011407" topic-id="">
                    <p class="article-thumbnail">
                        <a href="/asean-chuan-bi-chay-dua-dang-cai-world-cup-2034-post1011407.html">

                            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                data-src="https://znews-photo.zadn.vn/Uploaded/neg_yrznslt/2019_11_08/ttuan.jpg"
                                alt="ASEAN chuan bi chay dua dang cai World Cup 2034 hinh anh" />
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a href="/asean-chuan-bi-chay-dua-dang-cai-world-cup-2034-post1011407.html">ASEAN chuẩn bị
                                chạy đua đăng cai World Cup 2034</a>
                        </p>
                        <p class="article-meta">
                            <span class="article-publish">
                                <span class="friendly-time">11 giờ trước</span>
                                <span class="time">10:46</span>
                                <span class="date">09/11/2019</span>
                            </span>


                            <span class="category-parent">Thể thao</span>



                            <span class="category">Bóng đá Việt Nam</span>

                        </p>
                        <p class="article-count">
                            <span class="like-count"></span>
                            <span class="dislike-count"></span>
                            <span class="rating-count">0</span>
                            <span class="viral-count ">22</span>
                            <span class="comment-count hide"></span>
                        </p>
                        <p class="article-summary">Phó chủ tịch Liên đoàn Bóng đá Việt Nam Trần Quốc Tuấn chia sẻ về kế
                            hoạch chuẩn bị chạy đua đăng cai World Cup 2034 của các nước Đông Nam Á.</p>

                    </header>
                </article>

                <article class="article-item type-text" article-id="1011435" topic-id="4156,4995,5000,5414,5491">
                    <p class="article-thumbnail">
                        <a href="/sao-indonesia-doan-van-hau-co-the-hinh-nhung-toi-co-toc-do-post1011435.html">

                            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                data-src="https://znews-photo.zadn.vn/Uploaded/ihvunvj/2019_11_09/riko2.jpg"
                                alt="Sao Indonesia: 'Doan Van Hau co the hinh nhung toi co toc do' hinh anh" />
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a href="/sao-indonesia-doan-van-hau-co-the-hinh-nhung-toi-co-toc-do-post1011435.html">Sao
                                Indonesia: 'Đoàn Văn Hậu có thể hình nhưng tôi có tốc độ'</a>
                        </p>
                        <p class="article-meta">
                            <span class="article-publish">
                                <span class="friendly-time">12 giờ trước</span>
                                <span class="time">10:43</span>
                                <span class="date">09/11/2019</span>
                            </span>


                            <span class="category-parent">Thể thao</span>



                            <span class="category">Bóng đá Việt Nam</span>

                        </p>
                        <p class="article-count">
                            <span class="like-count"></span>
                            <span class="dislike-count"></span>
                            <span class="rating-count">0</span>
                            <span class="viral-count ">94</span>
                            <span class="comment-count ">11</span>
                        </p>
                        <p class="article-summary">Chia sẻ với Zing.vn, tiền vệ Riko Simanjuntak của tuyển Indonesia cho
                            rằng mình có nhiều lợi thế khi đối đầu với Đoàn Văn Hậu.</p>

                    </header>
                </article>

                <article class="article-item type-text" article-id="1011439" topic-id="5379">
                    <p class="article-thumbnail">
                        <a href="/hlv-mcmenemy-tu-choi-dan-dat-indonesia-tran-cuoi-gap-malaysia-post1011439.html">

                            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                data-src="https://znews-photo.zadn.vn/Uploaded/neg_etpyole/2019_11_09/Mc.jpg"
                                alt="HLV McMenemy tu choi dan dat Indonesia tran cuoi gap Malaysia hinh anh" />
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a href="/hlv-mcmenemy-tu-choi-dan-dat-indonesia-tran-cuoi-gap-malaysia-post1011439.html">HLV
                                McMenemy từ chối dẫn dắt Indonesia trận cuối gặp Malaysia</a>
                        </p>
                        <p class="article-meta">
                            <span class="article-publish">
                                <span class="friendly-time">12 giờ trước</span>
                                <span class="time">10:41</span>
                                <span class="date">09/11/2019</span>
                            </span>


                            <span class="category-parent">Thể thao</span>



                        </p>
                        <p class="article-count">
                            <span class="like-count"></span>
                            <span class="dislike-count"></span>
                            <span class="rating-count">0</span>
                            <span class="viral-count ">64</span>
                            <span class="comment-count ">3</span>
                        </p>
                        <p class="article-summary">Đội tuyển Indonesia nhiều khả năng không có huấn luyện viên trưởng ở
                            trận đối đầu gặp Malaysia tại vòng loại World Cup 2022, sau khi ông McMenemy từ chối dẫn
                            dắt.</p>

                    </header>
                </article>

                <article class="article-item type-video short" article-id="1011427" topic-id="4156,5414,5491">
                    <p class="article-thumbnail">
                        <a href="/video-tuyen-thu-philippines-chuc-mung-quang-hai-post1011427.html">

                            <span class="duration-video show-time">01:20</span>

                            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                data-src="https://znews-photo.zadn.vn/Uploaded/ihvunvj/2019_11_09/stephan3.jpg"
                                alt="Tuyen thu Philippines chuc mung Quang Hai hinh anh" />
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a href="/video-tuyen-thu-philippines-chuc-mung-quang-hai-post1011427.html">Tuyển thủ
                                Philippines chúc mừng Quang Hải</a>
                        </p>
                        <p class="article-meta">
                            <span class="article-publish">
                                <span class="friendly-time">14 giờ trước</span>
                                <span class="time">07:58</span>
                                <span class="date">09/11/2019</span>
                            </span>


                            <span class="category-parent">Thể thao</span>



                            <span class="category">Bóng đá Việt Nam</span>

                        </p>
                        <p class="article-count">
                            <span class="like-count"></span>
                            <span class="dislike-count"></span>
                            <span class="rating-count">0</span>
                            <span class="viral-count ">29</span>
                            <span class="comment-count ">4</span>
                        </p>
                        <p class="article-summary">Xuất hiện tại sự kiện AFF Awards tối 8/11, tiền vệ Stephan Schrock
                            của Philippines đã bày tỏ sự ngưỡng mộ với chủ nhân danh hiệu Cầu thủ hay nhất năm Nguyễn
                            Quang Hải.</p>

                    </header>
                </article>

                <article class="article-item type-hasvideo short" article-id="1011262" topic-id="4087">
                    <p class="article-thumbnail">
                        <a href="/nu-vo-si-goc-viet-that-bai-truoc-doi-thu-thai-lan-post1011262.html">

                            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                data-src="https://znews-photo.zadn.vn/Uploaded/BzcwvoBL/2019_11_08/thumbBi.JPG"
                                alt="Nu vo si goc Viet that bai truoc doi thu Thai Lan hinh anh" />
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a href="/nu-vo-si-goc-viet-that-bai-truoc-doi-thu-thai-lan-post1011262.html">Nữ võ sĩ gốc
                                Việt thất bại trước đối thủ Thái Lan</a>
                        </p>
                        <p class="article-meta">
                            <span class="article-publish">
                                <span class="friendly-time">15 giờ trước</span>
                                <span class="time">06:54</span>
                                <span class="date">09/11/2019</span>
                            </span>


                            <span class="category-parent">Thể thao</span>



                            <span class="category">Võ thuật</span>

                        </p>
                        <p class="article-count">
                            <span class="like-count"></span>
                            <span class="dislike-count"></span>
                            <span class="rating-count">0</span>
                            <span class="viral-count ">1</span>
                            <span class="comment-count ">2</span>
                        </p>
                        <p class="article-summary">Không thể phát huy kỹ năng vật sở trường, Bi Nguyễn ngậm ngùi nhận
                            thất bại trước Stamp Fairtex trong trận đấu MMA ở ONE: MASTERS OF FATE diễn ra tại
                            Philippines vào tối 8/11.</p>

                    </header>
                </article>

                <article class="article-item type-hasvideo" article-id="1011410" topic-id="3930,5414,5491">
                    <p class="article-thumbnail">
                        <a href="/hlv-park-toi-biet-on-nhung-nguoi-o-ben-toi-khi-kho-khan-nhat-post1011410.html">

                            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                data-src="https://znews-photo.zadn.vn/Uploaded/ihvunvj/2019_11_09/avapark1.jpg"
                                alt="HLV Park: 'Toi biet on nhung nguoi o ben toi khi kho khan nhat' hinh anh" />
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a href="/hlv-park-toi-biet-on-nhung-nguoi-o-ben-toi-khi-kho-khan-nhat-post1011410.html">HLV
                                Park: 'Tôi biết ơn những người ở bên tôi khi khó khăn nhất'</a>
                        </p>
                        <p class="article-meta">
                            <span class="article-publish">
                                <span class="friendly-time">15 giờ trước</span>
                                <span class="time">06:44</span>
                                <span class="date">09/11/2019</span>
                            </span>


                            <span class="category-parent">Thể thao</span>



                            <span class="category">Bóng đá Việt Nam</span>

                        </p>
                        <p class="article-count">
                            <span class="like-count"></span>
                            <span class="dislike-count"></span>
                            <span class="rating-count">0</span>
                            <span class="viral-count hide"></span>
                            <span class="comment-count ">2</span>
                        </p>
                        <p class="article-summary">Phát biểu sau buổi gala AFF Awards 2019, huấn luyện viên Park
                            Hang-seo đã bày tỏ lòng biết ơn tới người vợ cũng các cầu thủ đội tuyển Việt Nam.</p>

                    </header>
                </article>

                <article class="article-item type-hasvideo" article-id="1011389" topic-id="4156,5000,5002,5123,5192">
                    <p class="article-thumbnail">
                        <a href="/van-hau-da-xoay-quang-hai-ve-danh-hieu-hay-nhat-aff-post1011389.html">

                            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                data-src="https://znews-photo.zadn.vn/Uploaded/neg_yrznslt/2019_11_08/8F8436FF0F2946109E6AE8BA81E987CF.jpeg"
                                alt="Van Hau da xoay Quang Hai ve danh hieu hay nhat AFF hinh anh" />
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a href="/van-hau-da-xoay-quang-hai-ve-danh-hieu-hay-nhat-aff-post1011389.html">Văn Hậu đá
                                xoáy Quang Hải về danh hiệu hay nhất AFF</a>
                        </p>
                        <p class="article-meta">
                            <span class="article-publish">
                                <span class="friendly-time">16 giờ trước</span>
                                <span class="time">06:42</span>
                                <span class="date">09/11/2019</span>
                            </span>


                            <span class="category-parent">Thể thao</span>



                            <span class="category">Bóng đá Việt Nam</span>

                        </p>
                        <p class="article-count">
                            <span class="like-count"></span>
                            <span class="dislike-count"></span>
                            <span class="rating-count">0</span>
                            <span class="viral-count ">9</span>
                            <span class="comment-count ">6</span>
                        </p>
                        <p class="article-summary">Trên mạng xã hội, Văn Hậu cùng nhiều đồng đội tại đội tuyển quốc gia
                            trêu chọc Quang Hải khi anh khoe danh hiệu hay nhất Đông Nam Á mới được trao.</p>

                    </header>
                </article>

                <article class="article-item type-hasvideo" article-id="1011385" topic-id="3930,4156,4991">
                    <p class="article-thumbnail">
                        <a href="/hlv-park-hang-seo-la-ung-vien-sang-gia-o-cup-chien-thang-post1011385.html">

                            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                data-src="https://znews-photo.zadn.vn/Uploaded/neg_etpyole/2019_11_08/Park.jpg"
                                alt="HLV Park Hang-seo la ung vien sang gia o Cup chien thang hinh anh" />
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a href="/hlv-park-hang-seo-la-ung-vien-sang-gia-o-cup-chien-thang-post1011385.html">HLV
                                Park Hang-seo là ứng viên sáng giá ở Cúp chiến thắng</a>
                        </p>
                        <p class="article-meta">
                            <span class="article-publish">
                                <span class="friendly-time">16 giờ trước</span>
                                <span class="time">06:39</span>
                                <span class="date">09/11/2019</span>
                            </span>


                            <span class="category-parent">Thể thao</span>



                            <span class="category">Bóng đá Việt Nam</span>

                        </p>
                        <p class="article-count">
                            <span class="like-count"></span>
                            <span class="dislike-count"></span>
                            <span class="rating-count">0</span>
                            <span class="viral-count ">4</span>
                            <span class="comment-count ">1</span>
                        </p>
                        <p class="article-summary">Cúp chiến thắng 2019 có thêm hạng mục "HLV nước ngoài của năm" và
                            chiến lược gia người Hàn Quốc Park Hang-seo là ứng viên sáng giá nhất nhận danh hiệu.</p>

                    </header>
                </article>




            </div>

        </section>
    </section>

    <!--BOX VIDEO-->
    <section id="section-video" class="section videobox">
	    <header class="section-title">
	        <h3>
	            <a href="/video">VIDEO</a>
	        </h3>
	    </header>
	    <div class="section-content ">
	        <div class="video-player">
	            <video playsinline muted src="https://znews-mcloud-bf-s2.zadn.vn/bwcm4WAFi_g/27e891702631cf6f9620/e009520fad4a44141d5b/480/35a3bdd7c99620c87987.mp4?authen=exp=1573431329~acl=/bwcm4WAFi_g/*~hmac=47ff39fe0472ce3dfd52f79f98756871" controls="controls" mediaid="35a3bdd7c99620c87987" preload="none" duration="147" allowads="true" aspect="16:9" onlyvietnam="false" poster='https://znews-photo.zadn.vn/w660/Uploaded/jopltui/2019_11_06/zing.jpg'><source src="https://znews-mcloud-mpl-s2.zadn.vn/VCyltir9yqE/whls/vod/0/ZugBnrqL4H4nCJ8YLl8/35a3bdd7c99620c87987.m3u8?authen=exp=1573388129~acl=/VCyltir9yqE/*~hmac=15acf009ee4aa65815ee91952df379da" type="application/x-mpegURL" label="Auto" /><source src="https://znews-mcloud-bf-s2.zadn.vn/bwcm4WAFi_g/27e891702631cf6f9620/e009520fad4a44141d5b/480/35a3bdd7c99620c87987.mp4?authen=exp=1573431329~acl=/bwcm4WAFi_g/*~hmac=47ff39fe0472ce3dfd52f79f98756871" type="video/mp4" label="SD" res="480" /><source src="https://znews-mcloud-bf-s2.zadn.vn/J4mqH7SxJRo/5ddff6474106a858f117/24998b9f74da9d84c4cb/720/35a3bdd7c99620c87987.mp4?authen=exp=1573431329~acl=/J4mqH7SxJRo/*~hmac=1253d055387f81ce10a5252cf0db5756" type="video/mp4" label="HD" res="720" /></video>
	        </div>
	        <aside class="section-sidebar">
	            <div class="article-list listing-layout">
					<article class="article-item type-video" article-id="1010394" topic-id="2121,2245">
					    <p class="article-thumbnail">
					        <a href="/video-canh-diu-hiu-o-lang-ty-phu-co-2700-nguoi-xuat-ngoai-post1010394.html" origin-id="1074752176">

					            <span class="duration-video show-time">02:26</span>

					            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg" data-src="https://znews-photo.zadn.vn/Uploaded/gtnjj3/2019_11_06/C003600_02_47_34Still001.jpg" alt="Canh diu hiu o lang ty phu co 2.700 nguoi xuat ngoai hinh anh" />
					        </a>
					    </p>
					    <header>
					        <p class="article-title">
					            <a href="/video-canh-diu-hiu-o-lang-ty-phu-co-2700-nguoi-xuat-ngoai-post1010394.html" origin-id="1074752176">Cảnh đìu hiu ở làng tỷ phú có 2.700 người xuất ngoại</a>
					        </p>
					        <p class="article-meta">
					            <span class="article-publish">
					                <span class="friendly-time">3 ngày trước</span>
					                <span class="time">06:00</span>
					                <span class="date">07/11/2019</span>
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
					        <p class="article-summary">Với 2.700 người lao động ở nước ngoài, xã Cương Gián (Nghi Xuân, Hà Tĩnh) giàu lên trông thấy. Biệt thự san sát nhưng cuộc sống nơi đây đìu hiu, chỉ còn người già và trẻ nhỏ.</p>

					    </header>
					</article>

					<article class="article-item type-video" article-id="1003467" topic-id="2121,5514">
					    <p class="article-thumbnail">
					        <a href="/video-nguoi-mau-14-tuoi-cut-mot-tay-em-da-dam-de-lo-khiem-khuyet-cua-minh-post1003467.html" >

					            <span class="duration-video show-time">05:33</span>

					            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg" data-src="https://znews-photo.zadn.vn/Uploaded/lce_jwqqc/2019_10_19/cong_chua_ung_thu_thumb.jpg" alt="Nguoi mau 14 tuoi cut mot tay: 'Em da dam de lo khiem khuyet cua minh' hinh anh" />
					        </a>
					    </p>
					    <header>
					        <p class="article-title">
					            <a href="/video-nguoi-mau-14-tuoi-cut-mot-tay-em-da-dam-de-lo-khiem-khuyet-cua-minh-post1003467.html" >Người mẫu 14 tuổi cụt một tay: 'Em đã dám để lộ khiếm khuyết của mình'</a>
					        </p>
					        <p class="article-meta">
					            <span class="article-publish">
					                <span class="friendly-time">7 ngày trước</span>
					                <span class="time">06:25</span>
					                <span class="date">03/11/2019</span>
					            </span>


					            <span class="category-parent">Đời sống</span>



					            <span class="category">Sống đẹp</span>

					        </p>
					        <p class="article-count">
					            <span class="like-count"></span>
					            <span class="dislike-count"></span>
					            <span class="rating-count">0</span>
					            <span class="viral-count ">515</span>
					            <span class="comment-count ">6</span>
					        </p>
					        <p class="article-summary">Ngày bé, để Hà Phương khỏi tự ti, mẹ nói rằng tay em sẽ mọc ra, em chỉ để quên tay trong bụng mẹ. Đến lớp 5, Phương mới hiểu rằng cánh tay bị cụt không thể mọc ra được nữa.</p>

					    </header>
					</article>

					<article class="article-item type-video short" article-id="1011639" topic-id="2239,3835,4016">
					    <p class="article-thumbnail">
					        <a href="/video-quang-ngai-khan-truong-ung-pho-bao-so-6-post1011639.html" >

					            <span class="duration-video show-time">02:15</span>

					            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg" data-src="https://znews-photo.zadn.vn/Uploaded/jugtzb/2019_11_09/Bao_2.jpg" alt="Quang Ngai khan truong ung pho bao so 6 hinh anh" />
					        </a>
					    </p>
					    <header>
					        <p class="article-title">
					            <a href="/video-quang-ngai-khan-truong-ung-pho-bao-so-6-post1011639.html" >Quảng Ngãi khẩn trương ứng phó bão số 6</a>
					        </p>
					        <p class="article-meta">
					            <span class="article-publish">
					                <span class="friendly-time">35 phút trước</span>
					                <span class="time">21:39</span>
					                <span class="date">09/11/2019</span>
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
					        <p class="article-summary">Tỉnh Quảng Ngãi huy động quân đội giúp dân chằng chéo nhà cửa, neo đậu tàu thuyền vào nơi an toàn trước khi cơn bão số 6 đổ bộ.</p>

					    </header>
					</article>

					<article class="article-item type-video" article-id="1011643" topic-id="">
					    <p class="article-thumbnail">
					        <a href="/video-nghi-van-bich-phuong-hat-nhep-ca-khuc-rang-anh-mai-o-ben-post1011643.html" origin-id="1074753451">

					            <span class="duration-video show-time">00:45</span>

					            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg" data-src="https://znews-photo.zadn.vn/Uploaded/aybjsww/2019_11_09/RIN3514BICHPHUONGcopy52661567130144_thumb.jpg" alt="Nghi van Bich Phuong hat nhep ca khuc 'Rang anh mai o ben' hinh anh" />
					        </a>
					    </p>
					    <header>
					        <p class="article-title">
					            <a href="/video-nghi-van-bich-phuong-hat-nhep-ca-khuc-rang-anh-mai-o-ben-post1011643.html" origin-id="1074753451">Nghi vấn Bích Phương hát nhép ca khúc 'Rằng anh mãi ở bên'</a>
					        </p>
					        <p class="article-meta">
					            <span class="article-publish">
					                <span class="friendly-time">25 phút trước</span>
					                <span class="time">21:49</span>
					                <span class="date">09/11/2019</span>
					            </span>


					            <span class="category-parent">Âm nhạc</span>



					            <span class="category">Nhạc Việt</span>

					        </p>
					        <p class="article-count">
					            <span class="like-count"></span>
					            <span class="dislike-count"></span>
					            <span class="rating-count">0</span>
					            <span class="viral-count hide"></span>
					            <span class="comment-count hide"></span>
					        </p>
					        <p class="article-summary">Bích Phương gặp sự cố, suýt ngã trên sân khấu nhưng tiếng hát vẫn vang lên. Điều này khiến khán giả nghi ngờ nữ ca sĩ hát nhép.</p>

					    </header>
					</article>

					<article class="article-item type-video short" article-id="1011470" topic-id="2208,4120">
					    <p class="article-thumbnail">
					        <a href="/video-lai-oto-di-trom-hoa-trong-dem-o-ha-noi-post1011470.html" >

					            <span class="duration-video show-time">00:46</span>

					            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg" data-src="https://znews-photo.zadn.vn/Uploaded/qhj_jwrscslhfo/2019_11_09/4.jpg" alt="Lai oto di trom hoa trong dem o Ha Noi hinh anh" />
					        </a>
					    </p>
					    <header>
					        <p class="article-title">
					            <a href="/video-lai-oto-di-trom-hoa-trong-dem-o-ha-noi-post1011470.html" >Lái ôtô đi trộm hoa trong đêm ở Hà Nội</a>
					        </p>
					        <p class="article-meta">
					            <span class="article-publish">
					                <span class="friendly-time">43 phút trước</span>
					                <span class="time">21:31</span>
					                <span class="date">09/11/2019</span>
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
					        <p class="article-summary">Sau một lúc đỗ xe trước cửa nhà, người đàn ông trong ôtô nhanh chóng bước ra trộm chậu hoa rồi bỏ đi. Vụ trộm xảy ra rạng sáng 6/11 ở quận Đống Đa, Hà Nội.</p>

					    </header>
					</article>

					<article class="article-item type-video" article-id="1011196" topic-id="">
					    <p class="article-thumbnail">
					        <a href="/video-bi-quyet-giup-ban-so-huu-lan-da-cang-bong-sang-min-post1011196.html" >

					            <span class="duration-video show-time">02:02</span>

					            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg" data-src="https://znews-photo.zadn.vn/Uploaded/rohunwa/2019_11_08/Tay_te_bao_chet_cover_VDO.jpg" alt="Bi quyet giup ban so huu lan da cang bong, sang min hinh anh" />
					        </a>
					    </p>
					    <header>
					        <p class="article-title">
					            <a href="/video-bi-quyet-giup-ban-so-huu-lan-da-cang-bong-sang-min-post1011196.html" >Bí quyết giúp bạn sở hữu làn da căng bóng, sáng mịn</a>
					        </p>
					        <p class="article-meta">
					            <span class="article-publish">
					                <span class="friendly-time">3 giờ trước</span>
					                <span class="time">19:39</span>
					                <span class="date">09/11/2019</span>
					            </span>


					            <span class="category-parent">Thời trang</span>



					            <span class="category">Làm đẹp</span>

					        </p>
					        <p class="article-count">
					            <span class="like-count"></span>
					            <span class="dislike-count"></span>
					            <span class="rating-count">0</span>
					            <span class="viral-count hide"></span>
					            <span class="comment-count hide"></span>
					        </p>
					        <p class="article-summary">Thường xuyên tẩy tế bào chết sẽ giúp bạn có được làn da mịn màng, đều màu, hạn chế tình trạng tắc nghẽn lỗ chân lông hay nổi mụn.</p>

					    </header>
					</article>

					<article class="article-item type-video short" article-id="1011456" topic-id="">
					    <p class="article-thumbnail">
					        <a href="/video-lao-oto-vao-ban-trai-nguoi-yeu-cu-post1011456.html" origin-id="1011455">

					            <span class="duration-video show-time">00:28</span>

					            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg" data-src="https://znews-photo.zadn.vn/Uploaded/bgtngt/2019_11_09/Roy_Kowalski_.jpg" alt="Lao oto vao ban trai nguoi yeu cu hinh anh" />
					        </a>
					    </p>
					    <header>
					        <p class="article-title">
					            <a href="/video-lao-oto-vao-ban-trai-nguoi-yeu-cu-post1011456.html" origin-id="1011455">Lao ôtô vào bạn trai người yêu cũ</a>
					        </p>
					        <p class="article-meta">
					            <span class="article-publish">
					                <span class="friendly-time">4 giờ trước</span>
					                <span class="time">18:00</span>
					                <span class="date">09/11/2019</span>
					            </span>
					            <span class="category-parent">Xe</span>
					            <span class="category">Xe</span>
					        </p>
					        <p class="article-count">
					            <span class="like-count"></span>
					            <span class="dislike-count"></span>
					            <span class="rating-count">0</span>
					            <span class="viral-count hide"></span>
					            <span class="comment-count hide"></span>
					        </p>
					        <p class="article-summary">Cay cú vì bạn gái cũ yêu người khác, Roy Kowalski đã rình và lao xe vào người này rồi sau đó quay lại đánh nhau. </p>

					    </header>
					</article>

					<article class="article-item type-video" article-id="1011582" topic-id="">
					    <p class="article-thumbnail">
					        <a href="/video-vo-chong-tran-thanh-du-dam-cuoi-dong-nhi-ong-cao-thang-post1011582.html" origin-id="1011585">

					            <span class="duration-video show-time">00:50</span>

					            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg" data-src="https://znews-photo.zadn.vn/Uploaded/unvjuas/2019_11_09/Anh_chup_Man_hinh_20191109_luc_171600.jpg" alt="Vo chong Tran Thanh du dam cuoi Dong Nhi - Ong Cao Thang hinh anh" />
					        </a>
					    </p>
					    <header>
					        <p class="article-title">
					            <a href="/video-vo-chong-tran-thanh-du-dam-cuoi-dong-nhi-ong-cao-thang-post1011582.html" origin-id="1011585">Vợ chồng Trấn Thành dự đám cưới Đông Nhi - Ông Cao Thắng</a>
					        </p>
					        <p class="article-meta">
					            <span class="article-publish">
					                <span class="friendly-time">5 giờ trước</span>
					                <span class="time">17:31</span>
					                <span class="date">09/11/2019</span>
					            </span>


					            <span class="category-parent">Giải trí</span>



					            <span class="category">Sao Việt</span>

					        </p>
					        <p class="article-count">
					            <span class="like-count"></span>
					            <span class="dislike-count"></span>
					            <span class="rating-count">0</span>
					            <span class="viral-count hide"></span>
					            <span class="comment-count hide"></span>
					        </p>
					        <p class="article-summary">Trấn Thành và Hari Won xuất hiện tại sân bay Phú Quốc muộn hơn các nghệ sĩ khác.</p>

					    </header>
					</article>

					<article class="article-item type-video short" article-id="1011611" topic-id="3644,3659">
					    <p class="article-thumbnail">
					        <a href="/video-ngo-thanh-van-nhan-duoc-hoa-cuoi-cua-dong-nhi-post1011611.html" origin-id="1074753436">

					            <span class="duration-video show-time">02:47</span>

					            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg" data-src="https://znews-photo.zadn.vn/Uploaded/ofh_zsgkqzph/2019_11_09/73523446_510617369522578_9189317627711848448_n.jpg" alt="Ngo Thanh Van nhan duoc hoa cuoi cua Dong Nhi hinh anh" />
					        </a>
					    </p>
					    <header>
					        <p class="article-title">
					            <a href="/video-ngo-thanh-van-nhan-duoc-hoa-cuoi-cua-dong-nhi-post1011611.html" origin-id="1074753436">Ngô Thanh Vân nhận được hoa cưới của Đông Nhi </a>
					        </p>
					        <p class="article-meta">
					            <span class="article-publish">
					                <span class="friendly-time">3 giờ trước</span>
					                <span class="time">18:55</span>
					                <span class="date">09/11/2019</span>
					            </span>


					            <span class="category-parent">Giải trí</span>



					            <span class="category">Giải trí</span>

					        </p>
					        <p class="article-count">
					            <span class="like-count"></span>
					            <span class="dislike-count"></span>
					            <span class="rating-count">0</span>
					            <span class="viral-count ">1</span>
					            <span class="comment-count hide"></span>
					        </p>
					        <p class="article-summary">Một trong những giây phút mà khách mời mong chờ chính là tung hoa cưới. Một thành viên trong ê-kíp của Đông Nhi nhận được hoa cưới, sau đó bó hoa được đưa tới Ngô Thanh Vân.</p>

					    </header>
					</article>

					<article class="article-item type-video short" article-id="1011547" topic-id="3864">
					    <p class="article-thumbnail">
					        <a href="/video-marvel-sua-lai-hinh-anh-sieu-anh-hung-viet-nam-post1011547.html" origin-id="1011544">

					            <span class="duration-video show-time">00:44</span>

					            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg" data-src="https://znews-photo.zadn.vn/Uploaded/lce_uxlcq/2019_11_09/maxresdefault_1.jpg" alt="Marvel sua lai hinh anh sieu anh hung Viet Nam hinh anh" />
					        </a>
					    </p>
					    <header>
					        <p class="article-title">
					            <a href="/video-marvel-sua-lai-hinh-anh-sieu-anh-hung-viet-nam-post1011547.html" origin-id="1011544">Marvel sửa lại hình ảnh siêu anh hùng Việt Nam</a>
					        </p>
					        <p class="article-meta">
					            <span class="article-publish">
					                <span class="friendly-time">5 giờ trước</span>
					                <span class="time">16:53</span>
					                <span class="date">09/11/2019</span>
					            </span>


					            <span class="category-parent">Công nghệ</span>



					            <span class="category">eSports</span>

					        </p>
					        <p class="article-count">
					            <span class="like-count"></span>
					            <span class="dislike-count"></span>
					            <span class="rating-count">0</span>
					            <span class="viral-count hide"></span>
					            <span class="comment-count hide"></span>
					        </p>
					        <p class="article-summary">Thông qua đoạn clip giới thiệu Sky Kirin, Marvel ngầm cho thấy những hình ảnh được làm lại của siêu anh hùng Việt Nam Blue Dragon.</p>

					    </header>
					</article>

					<article class="article-item type-video" article-id="1011602" topic-id="3644">
					    <p class="article-thumbnail">
					        <a href="/video-dong-nhi-noi-o-le-cuoi-gap-anh-thang-la-dinh-menh-cua-doi-minh-post1011602.html" origin-id="1074753436">

					            <span class="duration-video show-time">03:04</span>

					            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg" data-src="https://znews-photo.zadn.vn/Uploaded/ofh_zsgkqzph/2019_11_09/Untitled.jpg" alt="Dong Nhi noi o le cuoi: 'Gap anh Thang la dinh menh cua doi minh' hinh anh" />
					        </a>
					    </p>
					    <header>
					        <p class="article-title">
					            <a href="/video-dong-nhi-noi-o-le-cuoi-gap-anh-thang-la-dinh-menh-cua-doi-minh-post1011602.html" origin-id="1074753436">Đông Nhi nói ở lễ cưới: 'Gặp anh Thắng là định mệnh của đời mình'</a>
					        </p>
					        <p class="article-meta">
					            <span class="article-publish">
					                <span class="friendly-time">4 giờ trước</span>
					                <span class="time">18:36</span>
					                <span class="date">09/11/2019</span>
					            </span>


					            <span class="category-parent">Giải trí</span>



					            <span class="category">Giải trí</span>

					        </p>
					        <p class="article-count">
					            <span class="like-count"></span>
					            <span class="dislike-count"></span>
					            <span class="rating-count">0</span>
					            <span class="viral-count hide"></span>
					            <span class="comment-count hide"></span>
					        </p>
					        <p class="article-summary">Đông Nhi tâm sự trước các khách mới rằng cô luôn tin vào tình yêu và việc gặp Ông Cao Thắng chính là định mệnh của đời cô.</p>

					    </header>
					</article>

					<article class="article-item type-video" article-id="1011594" topic-id="3644">
					    <p class="article-thumbnail">
					        <a href="/video-dong-nhi-va-ong-cao-thang-khoc-khi-hon-nhau-trong-le-cuoi-post1011594.html" origin-id="1074753358">

					            <span class="duration-video show-time">01:56</span>

					            <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg" data-src="https://znews-photo.zadn.vn/Uploaded/qfssu/2019_11_09/75252859_914896112229371_4982740058583859200_n_thumb.jpg" alt="Dong Nhi va Ong Cao Thang khoc khi hon nhau trong le cuoi hinh anh" />
					        </a>
					    </p>
					    <header>
					        <p class="article-title">
					            <a href="/video-dong-nhi-va-ong-cao-thang-khoc-khi-hon-nhau-trong-le-cuoi-post1011594.html" origin-id="1074753358">Đông Nhi và Ông Cao Thắng khóc khi hôn nhau trong lễ cưới</a>
					        </p>
					        <p class="article-meta">
					            <span class="article-publish">
					                <span class="friendly-time">4 giờ trước</span>
					                <span class="time">17:58</span>
					                <span class="date">09/11/2019</span>
					            </span>


					            <span class="category-parent">Giải trí</span>



					            <span class="category">Sao Việt</span>

					        </p>
					        <p class="article-count">
					            <span class="like-count"></span>
					            <span class="dislike-count"></span>
					            <span class="rating-count">0</span>
					            <span class="viral-count ">1</span>
					            <span class="comment-count hide"></span>
					        </p>
					        <p class="article-summary">Ông Cao Thắng vừa khóc vừa gửi lời cảm ơn Đông Nhi. "Cảm ơn em đã dành hết thanh xuân của mình cho anh. Anh yêu em" - nam ca sĩ xúc động nói. </p>

					    </header>
					</article>
	            </div>
	        </aside>
	    </div>
	</section>

</div>

<div class="page-wrapper">
    <section id="section-others" class="section category">
        <section class="section-content layout-grid-4">

            <div class="box-category" id="phap-luat">
                <h3 class="category-title">
                    <a href="/phap-luat.html" title="Pháp luật">Pháp luật</a>
                </h3>
                <div class="article-list listing-layout unique" min-display="3">


                    <article class="article-item type-text short" article-id="1011325" topic-id="4150,4592">
                        <p class="article-thumbnail">
                            <a href="/dung-anh-nong-ep-co-gai-lam-no-le-tinh-duc-post1011325.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/pwivovlb/2019_11_08/Nong_hiep_2.jpg"
                                    alt="Dung anh nong ep co gai lam no le tinh duc hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/dung-anh-nong-ep-co-gai-lam-no-le-tinh-duc-post1011325.html">Dùng ảnh nóng ép
                                    cô gái làm nô lệ tình dục</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">22 giờ trước</span>
                                    <span class="time">00:02</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Pháp luật</span>



                                <span class="category">Pháp luật</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">21</span>
                                <span class="comment-count ">5</span>
                            </p>
                            <p class="article-summary">Lén chụp ảnh khỏa thân của cô gái rồi dọa tung lên mạng, Tuấn ép
                                nạn nhân cho anh ta ân ái nhiều lần.</p>

                        </header>
                    </article>

                    <article class="article-item type-text" article-id="1011503" topic-id="4150">
                        <p class="article-thumbnail">
                            <a href="/giet-xe-om-cuop-tai-san-tra-no-co-bac-o-campuchia-post1011503.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/mdf_fsxrff/2019_11_09/Tran_Trong_Truc_2.jpg"
                                    alt="Giet xe om, cuop tai san tra no co bac o Campuchia hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/giet-xe-om-cuop-tai-san-tra-no-co-bac-o-campuchia-post1011503.html">Giết xe
                                    ôm, cướp tài sản trả nợ cờ bạc ở Campuchia</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">8 giờ trước</span>
                                    <span class="time">13:52</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Pháp luật</span>



                                <span class="category">Pháp luật</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">10</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Trúc đánh bạc dẫn đến nợ nần, sau đó ông ta thuê xe ôm chở đến
                                khu vực vắng người rồi sát hại nạn nhân, cướp tài sản bỏ trốn.</p>

                        </header>
                    </article>

                    <article class="article-item type-text" article-id="1011511" topic-id="3923,4150,4592">
                        <p class="article-thumbnail">
                            <a href="/tam-giu-nghi-pham-hiep-dam-phu-nu-trong-ray-ca-phe-post1011511.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/lce_zdhvc/2019_11_09/hiepdam.jpg"
                                    alt="Tam giu nghi pham hiep dam phu nu trong ray ca phe hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/tam-giu-nghi-pham-hiep-dam-phu-nu-trong-ray-ca-phe-post1011511.html">Tạm giữ
                                    nghi phạm hiếp dâm phụ nữ trong rẫy cà phê</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">9 giờ trước</span>
                                    <span class="time">13:35</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Pháp luật</span>



                                <span class="category">Pháp luật</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Nguyễn Đức Trí lái xe vào các rẫy cà phê nếu phát hiện phụ nữ làm
                                việc một mình thì khống chế hiếp dâm.</p>

                        </header>
                    </article>

                    <article class="article-item type-hasvideo" article-id="1011450" topic-id="4592">
                        <p class="article-thumbnail">
                            <a href="/nghi-pham-chu-muu-dap-pha-quan-nhau-de-nghia-bi-bat-post1011450.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/jugtzb/2019_11_09/Tu.jpg"
                                    alt="Nghi pham chu muu dap pha quan nhau De Nghia bi bat hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/nghi-pham-chu-muu-dap-pha-quan-nhau-de-nghia-bi-bat-post1011450.html">Nghi
                                    phạm chủ mưu đập phá quán nhậu Dê Nghĩa bị bắt</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">11 giờ trước</span>
                                    <span class="time">11:35</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Pháp luật</span>



                                <span class="category">Pháp luật</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Cảnh sát xác định Tú có vai trò chủ mưu trong vụ đập phá quán
                                nhậu Dê Nghĩa khiến nhiều vật dụng hư hỏng, hơn 100 thực khách hoảng sợ bỏ chạy.</p>

                        </header>
                    </article>

                    <article class="article-item type-text short" article-id="1011479" topic-id="3923,4150,4592">
                        <p class="article-thumbnail">
                            <a href="/bat-ga-cam-dao-khong-che-co-gai-de-cuop-hiep-dam-post1011479.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/ngotgs/2019_11_09/1575772690.jpg"
                                    alt="Bat ga cam dao khong che co gai de cuop, hiep dam hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/bat-ga-cam-dao-khong-che-co-gai-de-cuop-hiep-dam-post1011479.html">Bắt gã cầm
                                    dao khống chế cô gái để cướp, hiếp dâm</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">11 giờ trước</span>
                                    <span class="time">11:26</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Pháp luật</span>



                                <span class="category">Pháp luật</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">7</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Lợi dụng trời tối, Ninh cầm dao khống chế cô gái để cướp điện
                                thoại và ví tiền, sau đó gã này hiếp dâm nạn nhân nhưng bất thành.</p>

                        </header>
                    </article>

                    <article class="article-item type-hasvideo short" article-id="1011225" topic-id="2207">
                        <p class="article-thumbnail">
                            <a href="/vi-sao-mai-van-quan-co-biet-danh-quan-xa-lo-post1011225.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/lce_jwqcz/2019_11_08/20191109_085817.jpg"
                                    alt="Vi sao Mai Van Quan co biet danh Quan 'Xa Lo'? hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="#">Vì sao Mai Văn
                                    Quân có biệt danh Quân 'Xa Lộ'?</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">13 giờ trước</span>
                                    <span class="time">08:49</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Pháp luật</span>



                                <span class="category">Pháp luật</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">115</span>
                                <span class="comment-count ">53</span>
                            </p>
                            <p class="article-summary">Theo lời người dân khu vực Thủ Đức, Quân "Xa Lộ" là tay anh chị
                                cho vay có tiếng tăm giang hồ và địa bàn của ông ta rộng trên 3 tỉnh, thành.</p>

                        </header>
                    </article>




                </div>
            </div>
            <div class="box-category" id="oto-xe-may">
                <h3 class="category-title">
                    <a href="/oto-xe-may.html" title="Xe">Xe</a>
                </h3>
                <div class="article-list listing-layout unique" min-display="3">


                    <article class="article-item type-picture" article-id="1011267" topic-id="">
                        <p class="article-thumbnail">
                            <a
                                href="/chi-tiet-yamaha-tenere-700-moto-phuot-tam-trung-voi-kieu-dang-la-mat-post1011267.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/dqvpxpck/2019_11_08/1_Tenere700_thumb.jpg"
                                    alt="Chi tiet Yamaha Tenere 700 - moto phuot tam trung voi kieu dang la mat hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="/chi-tiet-yamaha-tenere-700-moto-phuot-tam-trung-voi-kieu-dang-la-mat-post1011267.html">Chi
                                    tiết Yamaha Tenere 700 - môtô phượt tầm trung với kiểu dáng lạ mắt</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">15 giờ trước</span>
                                    <span class="time">07:00</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Xe</span>



                                <span class="category">Xe máy</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Do chiều cao chỉ phù hợp với những người cao trên 1,85 m nên
                                Tenere 700 khá kén khách tại Việt Nam. Xe được trang bị hệ thống phanh ABS 2 kênh.</p>

                        </header>
                    </article>

                    <article class="article-item type-hasvideo short" article-id="1011455" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/thanh-nien-lai-oto-tong-vao-ban-trai-nguoi-yeu-cu-post1011455.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/bgtngt/2019_11_09/carcrash.jpg"
                                    alt="Thanh nien lai oto tong vao ban trai nguoi yeu cu hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/thanh-nien-lai-oto-tong-vao-ban-trai-nguoi-yeu-cu-post1011455.html">Thanh niên
                                    lái ôtô tông vào bạn trai người yêu cũ</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">4 giờ trước</span>
                                    <span class="time">18:00</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Xe</span>



                                <span class="category">Ôtô</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Roy Kowalski ngồi trên ôtô nổ máy sẵn chờ tình địch ra khỏi cửa
                                hàng rửa xe rồi lao xe vào anh này. </p>

                        </header>
                    </article>

                    <article class="article-item type-text" article-id="1011459" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/lua-ban-oto-cho-khach-chu-dai-ly-xe-bi-fbi-truy-na-gat-gao-post1011459.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/bgtngt/2019_11_09/bobbykhan.jpg"
                                    alt="Lua ban oto cho khach, chu dai ly xe bi FBI truy na gat gao hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/lua-ban-oto-cho-khach-chu-dai-ly-xe-bi-fbi-truy-na-gat-gao-post1011459.html">Lừa
                                    bán ôtô cho khách, chủ đại lý xe bị FBI truy nã gắt gao</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">5 giờ trước</span>
                                    <span class="time">17:00</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Xe</span>



                                <span class="category">Ôtô</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Sau 5 năm chạy trốn FBI, Afzal ‘Bobby’ Khan muốn ra đầu thú nhưng
                                nhà chức trách không chấp nhận yêu cầu của người từng là chủ đại lý ôtô này. </p>

                        </header>
                    </article>

                    <article class="article-item type-text" article-id="1011471" topic-id="154,3244,4440">
                        <p class="article-thumbnail">
                            <a href="/mercedes-benz-g-class-sap-bo-dong-co-xang-chuyen-sang-xe-dien-post1011471.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/dqvpxpck/2019_11_09/2019mercedesbenzg5501_thumb.jpg"
                                    alt="Mercedes Benz G-Class sap bo dong co xang, chuyen sang xe dien hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="/mercedes-benz-g-class-sap-bo-dong-co-xang-chuyen-sang-xe-dien-post1011471.html">Mercedes
                                    Benz G-Class sắp bỏ động cơ xăng, chuyển sang xe điện</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">6 giờ trước</span>
                                    <span class="time">16:00</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Xe</span>



                                <span class="category">Ôtô</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Dòng xe địa hình có tuổi đời gần 4 thập kỷ của Mercedes Benz
                                chuẩn bị bước sang một kỷ nguyên mới, kỷ nguyên của điện khí hóa.</p>

                        </header>
                    </article>

                    <article class="article-item type-picture" article-id="1011274"
                        topic-id="3013,3124,3717,4207,4439,5051,5052">
                        <p class="article-thumbnail">
                            <a
                                href="/audi-r8-v10-plus-tung-cua-cuong-do-la-ve-tay-chu-moi-thay-ngoai-hinh-post1011274.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/neg_estpyge/2019_11_08/Audi_R8_V10_Plus.jpg"
                                    alt="Audi R8 V10 Plus tung cua Cuong do la ve tay chu moi, thay ngoai hinh hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="/audi-r8-v10-plus-tung-cua-cuong-do-la-ve-tay-chu-moi-thay-ngoai-hinh-post1011274.html">Audi
                                    R8 V10 Plus từng của Cường đô la về tay chủ mới, thay ngoại hình</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">11 giờ trước</span>
                                    <span class="time">11:00</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Xe</span>



                                <span class="category">Xe thể thao</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">8</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Chiếc Audi R8 V10 Plus được Cường đô la bán ngay sau khi kết hôn
                                đã về tay chủ sở hữu mới tại TP.HCM. Xe được thay đổi màu ngoại thất với lớp decal xanh.
                            </p>

                        </header>
                    </article>

                    <article class="article-item type-video" article-id="1011180" topic-id="3618,4120">
                        <p class="article-thumbnail">
                            <a href="/video-biker-dap-vo-guong-xe-khach-vi-lan-lan-ep-nguoi-di-xe-may-post1011180.html">

                                <span class="duration-video show-time">01:24</span>

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-gif.zadn.vn/Uploaded/qhj_jwrscslhfo/2019_11_08/ezgifcomvideotogif27.gif"
                                    alt="Biker dap vo guong xe khach vi lan lan, ep nguoi di xe may hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="/video-biker-dap-vo-guong-xe-khach-vi-lan-lan-ep-nguoi-di-xe-may-post1011180.html">Biker
                                    đập vỡ gương xe khách vì lấn làn, ép người đi xe máy</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">12 giờ trước</span>
                                    <span class="time">10:00</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Xe</span>



                                <span class="category">Xe</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">431</span>
                                <span class="comment-count ">33</span>
                            </p>
                            <p class="article-summary">Chiếc xe khách bị một biker chạy ngang đập gãy gương. Nguyên nhân
                                vụ việc được xác định là do xe khách chạy lấn làn, ép người đi xe máy.</p>

                        </header>
                    </article>




                </div>
            </div>
            <div class="box-category" id="doi-song">
                <h3 class="category-title">
                    <a href="/doi-song.html" title="Đời sống">Đời sống</a>
                </h3>
                <div class="article-list listing-layout unique" min-display="3">


                    <article class="article-item type-picture type-hasvideo" article-id="1011323" topic-id="">
                        <p class="article-thumbnail">
                            <a
                                href="/cuoc-song-cua-hoang-tu-brunei-va-2-thanh-vien-hoang-gia-o-chau-a-post1011323.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/mdf_drkydd/2019_11_08/8_thumb.jpg"
                                    alt="Cuoc song cua hoang tu Brunei va 2 thanh vien hoang gia o chau A hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="/cuoc-song-cua-hoang-tu-brunei-va-2-thanh-vien-hoang-gia-o-chau-a-post1011323.html">Cuộc
                                    sống của hoàng tử Brunei và 2 thành viên hoàng gia ở châu Á</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">4 giờ trước</span>
                                    <span class="time">18:00</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Đời sống</span>



                                <span class="category">Giới trẻ</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Xuất thân quý tộc, có tài năng và sở hữu ngoại hình cuốn hút, 3
                                chàng trai thuộc gia đình hoàng gia ở châu Á này được nhiều người ngưỡng mộ, đặc biệt là
                                phái nữ.</p>

                        </header>
                    </article>

                    <article class="article-item type-picture" article-id="1011072" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/le-roi-va-nhung-chang-trai-thua-nhan-tung-phau-thuat-tham-my-post1011072.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/cqdhmdxwp/2019_11_08/Untitled1.jpg"
                                    alt="Le Roi va nhung chang trai thua nhan tung phau thuat tham my hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="/le-roi-va-nhung-chang-trai-thua-nhan-tung-phau-thuat-tham-my-post1011072.html">Lệ
                                    Rơi và những chàng trai thừa nhận từng phẫu thuật thẩm mỹ</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">10 giờ trước</span>
                                    <span class="time">12:28</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Đời sống</span>



                                <span class="category">Giới trẻ</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count ">2</span>
                            </p>
                            <p class="article-summary">Lệ Rơi, Trần Đặng Phước Cường hay Kin Nguyễn (chồng ca sĩ Thu
                                Thủy) là những chàng trai có ngoại hình thay đổi lớn sau khi phẫu thuật thẩm mỹ.</p>

                        </header>
                    </article>

                    <article class="article-item type-text" article-id="1011394" topic-id="4592">
                        <p class="article-thumbnail">
                            <a href="/huan-luyen-vien-tinh-duc-cho-cac-doi-yeu-nhau-o-singapore-post1011394.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/lce_jwqqc/2019_11_08/counsellingguidesingapore1440x11201024x796_thumb.jpg"
                                    alt="Huan luyen vien tinh duc cho cac doi yeu nhau o Singapore hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/huan-luyen-vien-tinh-duc-cho-cac-doi-yeu-nhau-o-singapore-post1011394.html">Huấn
                                    luyện viên tình dục cho các đôi yêu nhau ở Singapore</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">11 giờ trước</span>
                                    <span class="time">11:11</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Đời sống</span>



                                <span class="category">Xu hướng</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">21</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Huấn luyện viên tình dục hay chuyên gia tình dục là công việc
                                nghe có vẻ lạ lẫm song đang trở thành những người âm thầm "giữ lửa" cho nhiều đôi lứa.
                            </p>

                        </header>
                    </article>

                    <article class="article-item type-text" article-id="1011399" topic-id="4216,4592">
                        <p class="article-thumbnail">
                            <a href="/mc-diep-chi-duoc-khen-hack-tuoi-khi-khoe-san-khau-olympia-moi-post1011399.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/mdf_drkydd/2019_11_08/74666231_10220488403504457_2608408757838807040_o_thumb.jpg"
                                    alt="MC Diep Chi duoc khen hack tuoi khi khoe san khau Olympia moi hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="/mc-diep-chi-duoc-khen-hack-tuoi-khi-khoe-san-khau-olympia-moi-post1011399.html">MC
                                    Diệp Chi được khen hack tuổi khi khoe sân khấu Olympia mới</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">12 giờ trước</span>
                                    <span class="time">10:00</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Đời sống</span>



                                <span class="category">Giới trẻ</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">116</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Nhờ nhan sắc trẻ trung ở tuổi 32, MC Diệp Chi chiếm "spotlight"
                                trong bức ảnh khoe diện mạo mới mẻ của trường quay "Đường lên đỉnh Olympia" năm 20.</p>

                        </header>
                    </article>

                    <article class="article-item type-text" article-id="1010932" topic-id="5497">
                        <p class="article-thumbnail">
                            <a href="/sulli-qua-doi-khien-han-quoc-phai-xem-xet-dao-duc-bao-chi-post1010932.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/ywfrd/2019_11_07/Sulli.jpg"
                                    alt="Sulli qua doi khien Han Quoc phai xem xet dao duc bao chi hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/sulli-qua-doi-khien-han-quoc-phai-xem-xet-dao-duc-bao-chi-post1010932.html">Sulli
                                    qua đời khiến Hàn Quốc phải xem xét đạo đức báo chí</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">14 giờ trước</span>
                                    <span class="time">08:30</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Đời sống</span>



                                <span class="category">Xu hướng</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">32</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Hàn Quốc buộc phải nhìn nhận nghiêm túc vấn nạn bắt nạt trên mạng
                                cũng như việc truyền thông soi mói quá mức vào đời tư của các ngôi sao. </p>

                        </header>
                    </article>

                    <article class="article-item type-hasvideo" article-id="1010863" topic-id="4516">
                        <p class="article-thumbnail">
                            <a href="/co-gai-phat-hien-mac-ung-thu-khi-vua-ket-hon-2-thang-post1010863.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/mdf_drkydd/2019_11_07/Untitled_3.jpg"
                                    alt="Co gai phat hien mac ung thu khi vua ket hon 2 thang hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/co-gai-phat-hien-mac-ung-thu-khi-vua-ket-hon-2-thang-post1010863.html">Cô gái
                                    phát hiện mắc ung thư khi vừa kết hôn 2 tháng</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">16 giờ trước</span>
                                    <span class="time">06:30</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Đời sống</span>



                                <span class="category">Sống đẹp</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">1244</span>
                                <span class="comment-count ">19</span>
                            </p>
                            <p class="article-summary">20 lần hóa trị đau như chết đi sống lại mà cơ thể không đáp ứng,
                                Ngọc Anh từng muốn buông xuôi tất cả, nhưng nhìn giọt nước mắt của mẹ, sự hy sinh của
                                chồng, cô gắng thêm lần nữa. </p>

                        </header>
                    </article>




                </div>
            </div>
            <div class="box-category" id="giao-duc">
                <h3 class="category-title">
                    <a href="/giao-duc.html" title="Giáo dục">Giáo dục</a>
                </h3>
                <div class="article-list listing-layout unique" min-display="3">


                    <article class="article-item type-text short" article-id="1011522" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/con-muon-tu-tu-vi-ba-me-ly-hon-post1011522.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/pirr/2019_11_09/con_muon_tu_tu_thumb.jpg"
                                    alt="'Con muon tu tu vi ba me ly hon' hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/con-muon-tu-tu-vi-ba-me-ly-hon-post1011522.html">'Con muốn tử tự vì ba mẹ ly
                                    hôn'</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">7 giờ trước</span>
                                    <span class="time">15:20</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Giáo dục</span>



                                <span class="category">Giáo dục</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">11</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Khi trong gia đình xuất hiện bạo lực hay ba mẹ ly hôn, đứa trẻ sẽ
                                thiếu vắng sự yêu thương, thiếu sự hỗ trợ tích cực.</p>

                        </header>
                    </article>

                    <article class="article-item type-picture short" article-id="1011204" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/cha-me-nen-lam-cho-con-12-dieu-don-gian-post1011204.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/zbvunua/2019_11_08/1_1_thumb.jpg"
                                    alt="Cha me nen lam cho con 12 dieu don gian hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/cha-me-nen-lam-cho-con-12-dieu-don-gian-post1011204.html">Cha mẹ nên làm cho
                                    con 12 điều đơn giản</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">12 giờ trước</span>
                                    <span class="time">09:44</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Giáo dục</span>



                                <span class="category">Tư vấn</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">63</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Phụ huynh không cần hy sinh toàn bộ thời gian, tâm trí để chăm lo
                                cho con. Họ chỉ cần dành cho trẻ những điều tử tế, đơn giản để chúng học cách trưởng
                                thành.</p>

                        </header>
                    </article>

                    <article class="article-item type-text" article-id="1011208" topic-id="4082">
                        <p class="article-thumbnail">
                            <a href="/giao-vien-bi-chi-trich-vi-bat-hoc-sinh-dong-gia-nguoi-ti-nan-post1011208.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/neg_esfjaex/2019_11_08/m.jpg"
                                    alt="Giao vien bi chi trich vi bat hoc sinh dong gia nguoi ti nan hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="/giao-vien-bi-chi-trich-vi-bat-hoc-sinh-dong-gia-nguoi-ti-nan-post1011208.html">Giáo
                                    viên bị chỉ trích vì bắt học sinh đóng giả người tị nạn</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">15 giờ trước</span>
                                    <span class="time">07:00</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Giáo dục</span>



                                <span class="category">Giáo dục</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Giáo viên trường THCS Penn Cambria, bang Pennsylvania, Mỹ, phải
                                xin lỗi học sinh và phụ huynh vì giao bài tập về nhà gây tranh cãi.</p>

                        </header>
                    </article>

                    <article class="article-item type-video short" article-id="1011153" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/video-vi-sao-ca-map-khong-co-xuong-post1011153.html">

                                <span class="duration-video show-time">00:58</span>

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/ofh_btgazstm/2019_11_08/shark551025353_thumb.jpg"
                                    alt="Vi sao ca map khong co xuong? hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/video-vi-sao-ca-map-khong-co-xuong-post1011153.html">Vì sao cá mập không có
                                    xương?</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">16 giờ trước</span>
                                    <span class="time">06:40</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Giáo dục</span>



                                <span class="category">Tư vấn</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">1</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Cá mập là loài động vật đặc biệt thuộc lớp cá sụn. Bộ khung được
                                làm từ sụn thay vì xương khiến chúng có thể bơi nhanh và bắt mồi dễ hơn.</p>

                        </header>
                    </article>

                    <article class="article-item type-text" article-id="1011388" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/bao-han-dua-tin-nam-sinh-tphcm-xuc-pham-nhom-nhac-bts-post1011388.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/neg_esfjaex/2019_11_08/quan2.jpg"
                                    alt="Bao Han dua tin nam sinh TP.HCM xuc pham nhom nhac BTS hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/bao-han-dua-tin-nam-sinh-tphcm-xuc-pham-nhom-nhac-bts-post1011388.html">Báo
                                    Hàn đưa tin nam sinh TP.HCM xúc phạm nhóm nhạc BTS</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">16 giờ trước</span>
                                    <span class="time">06:00</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Giáo dục</span>



                                <span class="category">Giáo dục</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">51</span>
                                <span class="comment-count ">20</span>
                            </p>
                            <p class="article-summary">Trang tin SBS News của Hàn Quốc đăng thông tin về việc nam sinh
                                lớp 8 ở TP.HCM xúc phạm nhóm nhạc BTS và bị kỷ luật.</p>

                        </header>
                    </article>

                    <article class="article-item type-text" article-id="1011353" topic-id="4498">
                        <p class="article-thumbnail">
                            <a href="/giam-doc-so-gd-dt-tphcm-sai-sot-trong-su-dung-ngan-sach-post1011353.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/Ycgmvlbp/2019_11_08/le_hong_son.jpg"
                                    alt="Giam doc So GD&DT TP.HCM sai sot trong su dung ngan sach hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/giam-doc-so-gd-dt-tphcm-sai-sot-trong-su-dung-ngan-sach-post1011353.html">Giám
                                    đốc Sở GD&ĐT TP.HCM sai sót trong sử dụng ngân sách </a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">1 ngày trước</span>
                                    <span class="time">21:52</span>
                                    <span class="date">08/11/2019</span>
                                </span>


                                <span class="category-parent">Giáo dục</span>



                                <span class="category">Giáo dục</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">16</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Thanh tra TP.HCM vừa chỉ ra nhiều sai sót của Giám đốc Sở GD&ĐT
                                trong việc sử dụng ngân sách cho các đoàn công tác nước ngoài.</p>

                        </header>
                    </article>




                </div>
            </div>
            <div class="box-category" id="xuat-ban">
                <h3 class="category-title">
                    <a href="/xuat-ban.html" title="Xuất bản">Xuất bản</a>
                </h3>
                <div class="article-list listing-layout unique" min-display="3">


                    <article class="article-item type-picture" article-id="1011420" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/the-gioi-bay-bong-trong-tranh-co-be-11-tuoi-o-quang-binh-post1011420.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/oplukaa/2019_11_09/14.jpg"
                                    alt="The gioi bay bong trong tranh co be 11 tuoi o Quang Binh hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/the-gioi-bay-bong-trong-tranh-co-be-11-tuoi-o-quang-binh-post1011420.html">Thế
                                    giới bay bổng trong tranh cô bé 11 tuổi ở Quảng Bình</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">11 giờ trước</span>
                                    <span class="time">11:08</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Xuất bản</span>



                                <span class="category">Tin tức xuất bản</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">35</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Ngôi làng đầy nắng và gió ở Quảng Bình đi vào tranh của
                                Hà Bình hết sức thơ mộng. Mỗi tác phẩm là một nội tâm, cảm nhận về cuộc
                                sống của cô bé 11 tuổi.</p>

                        </header>
                    </article>

                    <article class="article-item type-text" article-id="1002399" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/quyen-han-giao-vien-co-the-la-diem-yeu-cua-giao-duc-post1002399.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/oplukaa/2019_10_17/thumb_1.jpg"
                                    alt="Quyen han giao vien co the la diem yeu cua giao duc hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/quyen-han-giao-vien-co-the-la-diem-yeu-cua-giao-duc-post1002399.html">Quyền
                                    hạn giáo viên có thể là điểm yếu của giáo dục</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">13 giờ trước</span>
                                    <span class="time">09:39</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Xuất bản</span>



                                <span class="category">Sách hay</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">2</span>
                                <span class="comment-count ">1</span>
                            </p>
                            <p class="article-summary">Sách "T.E.T" chỉ ra rằng nhiều giáo viên có xu hướng dùng
                                quyền lực của mình để kiểm soát học sinh. Trong khi đó, quyền lực này có thể gây tổn
                                hại nghiêm trọng đến học sinh.</p>

                        </header>
                    </article>

                    <article class="article-item type-text" article-id="1011426" topic-id="">
                        <p class="article-thumbnail">
                            <a
                                href="/suc-song-tram-nam-cong-trinh-nghien-cuu-ve-nghe-thuat-tao-hinh-hue-post1011426.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/oplukaa/2019_11_09/Anh_sach_3.jpg"
                                    alt="Suc song tram nam cong trinh nghien cuu ve nghe thuat tao hinh Hue hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="/suc-song-tram-nam-cong-trinh-nghien-cuu-ve-nghe-thuat-tao-hinh-hue-post1011426.html">Sức
                                    sống trăm năm công trình nghiên cứu về nghệ thuật tạo hình Huế</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">14 giờ trước</span>
                                    <span class="time">07:49</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Xuất bản</span>



                                <span class="category">Sách hay</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Kể từ năm 1919, ở Việt Nam đã có những nghiên cứu khoa học về
                                Nghệ thuật và nghệ nhân vùng Kinh thành Huế do những người Pháp yêu mến Huế thực hiện.
                            </p>
                        </header>
                    </article>

                    <article class="article-item type-text" article-id="1011259" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/tang-3000-bo-lich-cho-chien-si-bien-phong-hai-dao-post1011259.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/oplukaa/2019_11_08/DSC_6072.JPG"
                                    alt="Tang 3.000 bo lich cho chien si bien phong, hai dao hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/tang-3000-bo-lich-cho-chien-si-bien-phong-hai-dao-post1011259.html">Tặng
                                    3.000 bộ lịch cho chiến sĩ biên phòng, hải đảo</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">1 ngày trước</span>
                                    <span class="time">17:38</span>
                                    <span class="date">08/11/2019</span>
                                </span>


                                <span class="category-parent">Xuất bản</span>



                                <span class="category">Tin tức xuất bản</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">1</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Ngành xuất bản gửi tặng cán bộ, chiến sĩ đang làm
                                nhiệm vụ tại biên giới, hải đảo những cuốn lịch và hướng hoạt động thành
                                chương trình thường niên.</p>

                        </header>
                    </article>

                    <article class="article-item type-text" article-id="1011157" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/nha-van-ho-anh-thai-tieu-thuyet-la-giac-mo-dai-post1011157.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/oplukaa/2019_11_08/Ho_Anh_Thai_Frankfurt_book_fair.jpg"
                                    alt="Nha van Ho Anh Thai: 'Tieu thuyet la giac mo dai' hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/nha-van-ho-anh-thai-tieu-thuyet-la-giac-mo-dai-post1011157.html">Nhà văn Hồ
                                    Anh Thái: 'Tiểu thuyết là giấc mơ dài'</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">1 ngày trước</span>
                                    <span class="time">14:28</span>
                                    <span class="date">08/11/2019</span>
                                </span>


                                <span class="category-parent">Xuất bản</span>



                                <span class="category">Tin tức xuất bản</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">6</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Trả lời câu hỏi của Phó chủ tịch Hội sách Frankfurt, Hồ
                                Anh Thái nói với ông tiểu thuyết là giấc mơ dài mà nhà văn kể lại cho công
                                chúng trên trang viết.</p>

                        </header>
                    </article>

                    <article class="article-item type-text" article-id="1010626" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/bi-coi-re-phu-nu-trong-cuoc-chien-sinh-ton-chua-ro-hoi-ket-post1010626.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/qoswae/2019_11_07/Phu_nu_doi_quyen_loi_Shutterstock.jpg"
                                    alt="Bi coi re, phu nu trong cuoc chien sinh ton chua ro hoi ket hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/bi-coi-re-phu-nu-trong-cuoc-chien-sinh-ton-chua-ro-hoi-ket-post1010626.html">Bị
                                    coi rẻ, phụ nữ trong cuộc chiến sinh tồn chưa rõ hồi kết</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">2 ngày trước</span>
                                    <span class="time">08:49</span>
                                    <span class="date">08/11/2019</span>
                                </span>


                                <span class="category-parent">Xuất bản</span>



                                <span class="category">Xuất bản</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">47</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Một cựu chuyên gia kinh tế của chính phủ Anh đã đưa ra nhiều bằng
                                chứng thuyết phục về sự định kiến của thị trường với việc để phụ nữ đảm nhiệm các vị trí
                                cao.</p>

                        </header>
                    </article>




                </div>
            </div>
            <div class="box-category" id="suc-khoe">
                <h3 class="category-title">
                    <a href="/suc-khoe.html" title="Sức khỏe">Sức khỏe</a>
                </h3>
                <div class="article-list listing-layout unique" min-display="3">


                    <article class="article-item type-picture short" article-id="1010819" topic-id="3535">
                        <p class="article-thumbnail">
                            <a href="/nhung-thuc-pham-gay-hai-cho-than-post1010819.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/lepx/2019_11_07/Prawnavocadoplatterwithlimechillidressing1.jpg"
                                    alt="Nhung thuc pham gay hai cho than hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/nhung-thuc-pham-gay-hai-cho-than-post1010819.html">Những thực phẩm gây hại cho
                                    thận</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">14 giờ trước</span>
                                    <span class="time">08:41</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Sức khỏe</span>



                                <span class="category">Sức khỏe</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">18</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Tiêu thụ quá nhiều thịt, đường, thực phẩm chế biến sẵn, là sai
                                lầm khiến nhiều người Việt có nguy cơ bị suy thận.</p>

                        </header>
                    </article>

                    <article class="article-item type-video short" article-id="1011390" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/video-3-cong-thuc-tri-mun-don-gian-tu-nghe-post1011390.html">

                                <span class="duration-video show-time">01:17</span>

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/sgorvz/2019_11_08/tri_mun_1_thumb.jpg"
                                    alt="3 cong thuc tri mun don gian tu nghe hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/video-3-cong-thuc-tri-mun-don-gian-tu-nghe-post1011390.html">3 công thức trị
                                    mụn đơn giản từ nghệ</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">13 giờ trước</span>
                                    <span class="time">09:38</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Sức khỏe</span>



                                <span class="category">Khỏe đẹp</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">1</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Mặt nạ kết hợp nghệ tươi với mật ong, chanh hoặc sữa chua có thể
                                giúp loại bỏ mụn trứng cá, làm mờ sẹo, vết thâm, mang lại làn da sáng mịn cho bạn.</p>

                        </header>
                    </article>

                    <article class="article-item type-video short" article-id="1011007" topic-id="4150">
                        <p class="article-thumbnail">
                            <a href="/video-uong-qua-nhieu-nuoc-co-the-dan-den-tu-vong-post1011007.html">

                                <span class="duration-video show-time">01:01</span>

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/ofh_btgazstm/2019_11_08/waterpouringintoaglass_thumb.jpg"
                                    alt="Uong qua nhieu nuoc co the dan den tu vong? hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/video-uong-qua-nhieu-nuoc-co-the-dan-den-tu-vong-post1011007.html">Uống quá
                                    nhiều nước có thể dẫn đến tử vong?</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">16 giờ trước</span>
                                    <span class="time">06:12</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Sức khỏe</span>



                                <span class="category">Sức khỏe</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">15</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Uống nước vượt quá khả năng xử lý của thận sẽ dẫn đến tình trạng
                                mất cân bằng natri trong máu, gây ra nhiều vấn đề về sức khỏe, thậm chí là tử vong.</p>

                        </header>
                    </article>

                    <article class="article-item type-text short" article-id="1011348" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/uong-thuoc-phu-nu-53-tuoi-nuot-rang-gia-post1011348.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/lepx/2019_11_08/IMG_20191107_083628.jpg"
                                    alt="Uong thuoc, phu nu 53 tuoi nuot rang gia hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/uong-thuoc-phu-nu-53-tuoi-nuot-rang-gia-post1011348.html">Uống thuốc, phụ nữ
                                    53 tuổi nuốt răng giả</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">1 ngày trước</span>
                                    <span class="time">21:47</span>
                                    <span class="date">08/11/2019</span>
                                </span>


                                <span class="category-parent">Sức khỏe</span>



                                <span class="category">Sức khỏe</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Trong quá trình uống thuốc, bệnh nhân 53 tuổi ở Bình Sơn, Quảng
                                Ngãi, vô tình nuốt răng giả của mình. </p>

                        </header>
                    </article>

                    <article class="article-item type-text short" article-id="1011350" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/so-y-te-tphcm-phat-3-don-vi-gan-64-trieu-dong-post1011350.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/lepx/2019_11_08/xu_phat.jpg"
                                    alt="So Y te TP.HCM phat 3 don vi gan 64 trieu dong hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/so-y-te-tphcm-phat-3-don-vi-gan-64-trieu-dong-post1011350.html">Sở Y tế TP.HCM
                                    phạt 3 đơn vị gần 64 triệu đồng</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">1 ngày trước</span>
                                    <span class="time">21:40</span>
                                    <span class="date">08/11/2019</span>
                                </span>


                                <span class="category-parent">Sức khỏe</span>



                                <span class="category">Sức khỏe</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">3</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Tuần qua, Sở Y tế TP.HCM đã kiểm tra và xử phạt hàng loạt đơn vị
                                thuộc lĩnh vực y tế trên địa bàn thành phố với tổng số tiền gần 64 triệu đồng.</p>

                        </header>
                    </article>

                    <article class="article-item type-picture short" article-id="1011054" topic-id="3535">
                        <p class="article-thumbnail">
                            <a href="/nhung-bo-phan-cua-ca-khong-nen-an-post1011054.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/gtnvzv/2019_11_08/maxresdefault_thumb.jpg"
                                    alt="Nhung bo phan cua ca khong nen an hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/nhung-bo-phan-cua-ca-khong-nen-an-post1011054.html">Những bộ phận của cá không
                                    nên ăn</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">1 ngày trước</span>
                                    <span class="time">18:34</span>
                                    <span class="date">08/11/2019</span>
                                </span>


                                <span class="category-parent">Sức khỏe</span>



                                <span class="category">Sức khỏe</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">11</span>
                                <span class="comment-count ">4</span>
                            </p>
                            <p class="article-summary">Cá chứa nhiều chất có lợi cho sức khỏe. Tuy nhiên, không phải bộ
                                phận nào của cá cũng có giá trị dinh dưỡng.</p>

                        </header>
                    </article>




                </div>
            </div>
            <div class="box-category" id="du-lich">
                <h3 class="category-title">
                    <a href="/du-lich.html" title="Du lịch & Ẩm thực">Du lịch & Ẩm thực</a>
                </h3>
                <div class="article-list listing-layout unique" min-display="3">


                    <article class="article-item type-picture" article-id="1011367" topic-id="3880,4445">
                        <p class="article-thumbnail">
                            <a href="/den-phu-quoc-thu-ngay-6-dia-chi-hai-san-tuoi-ngon-gia-tot-post1011367.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/kbd_bcvi/2019_11_08/cacmonngontaiphuquoc_thumb.jpg"
                                    alt="Den Phu Quoc thu ngay 6 dia chi hai san tuoi ngon, gia tot hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/den-phu-quoc-thu-ngay-6-dia-chi-hai-san-tuoi-ngon-gia-tot-post1011367.html">Đến
                                    Phú Quốc thử ngay 6 địa chỉ hải sản tươi ngon, giá tốt</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">13 giờ trước</span>
                                    <span class="time">09:40</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Ẩm thực</span>



                                <span class="category">Địa điểm ăn uống</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">14</span>
                                <span class="comment-count ">1</span>
                            </p>
                            <p class="article-summary">Phú Quốc (Kiên Giang) khiến nhiều khách du lịch đã tới là không
                                muốn về vì có không ít quán hải sản đảm bảo tiêu chí tươi ngon, giá ổn.</p>

                        </header>
                    </article>

                    <article class="article-item type-picture" article-id="1010627" topic-id="4445">
                        <p class="article-thumbnail">
                            <a href="/mon-khoai-tay-chien-tran-chau-duong-den-o-philippines-post1010627.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/vocgmviq/2019_11_07/72347790_403832010295838_6310055854091534336_o.jpg"
                                    alt="Mon khoai tay chien tran chau duong den o Philippines hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/mon-khoai-tay-chien-tran-chau-duong-den-o-philippines-post1010627.html">Món
                                    khoai tây chiên trân châu đường đen ở Philippines</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">4 giờ trước</span>
                                    <span class="time">18:05</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Ẩm thực</span>



                                <span class="category">Món ngon</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Một cửa hàng trà sữa ở Philippines vừa ra mắt món khoai tây chiên
                                trân châu đường đen đã nhanh chóng thu hút sự chú ý của nhiều tín đồ ẩm thực trên thế
                                giới.</p>

                        </header>
                    </article>

                    <article class="article-item type-picture short" article-id="1009356" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/lich-trinh-vi-vu-han-quoc-voi-10-trieu-dong-post1009356.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/mdf_kxrxdf/2019_11_04/73375673_1147616148765043_402319370551820288_o_1_thumb_thumb.jpg"
                                    alt="Lich trinh vi vu Han Quoc voi 10 trieu dong hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/lich-trinh-vi-vu-han-quoc-voi-10-trieu-dong-post1009356.html">Lịch trình vi vu
                                    Hàn Quốc với 10 triệu đồng</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">4 giờ trước</span>
                                    <span class="time">18:04</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Du lịch</span>



                                <span class="category">Kinh nghiệm du lịch</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">185</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Với tổng chi phí 10 triệu đồng, mình đã có chuyến đi khám phá
                                khung cảnh mùa thu tuyệt đẹp ở Hàn Quốc.</p>

                        </header>
                    </article>

                    <article class="article-item type-picture short" article-id="1011406" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/nhung-mon-che-nong-dac-trung-mua-dong-ha-noi-post1011406.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/neg_esfjaex/2019_11_09/012.jpg"
                                    alt="Nhung mon che nong dac trung mua dong Ha Noi hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/nhung-mon-che-nong-dac-trung-mua-dong-ha-noi-post1011406.html">Những món chè
                                    nóng đặc trưng mùa đông Hà Nội</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">6 giờ trước</span>
                                    <span class="time">16:22</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Ẩm thực</span>



                                <span class="category">Món ngon</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">4</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Bản đồ ẩm thực Hà thành vào ngày gió mùa không thể thiếu sự xuất
                                hiện của các món chè nóng hấp dẫn.</p>

                        </header>
                    </article>

                    <article class="article-item type-picture short" article-id="1010740" topic-id="3345">
                        <p class="article-thumbnail">
                            <a href="/deo-da-trang-cung-duong-thu-hut-dan-phuot-post1010740.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/spivpdiv/2019_11_07/126159_3.jpg"
                                    alt="Deo Da Trang - cung duong thu hut dan phuot hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/deo-da-trang-cung-duong-thu-hut-dan-phuot-post1010740.html">Đèo Đá Trắng -
                                    cung đường thu hút dân phượt </a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">6 giờ trước</span>
                                    <span class="time">16:11</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Du lịch</span>



                                <span class="category">Địa điểm du lịch</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count ">25</span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Với cảnh quan hùng vĩ và sắc màu tựa tuyết phủ, đèo Đá Trắng từ
                                lâu đã là địa điểm check-in thu hút giới trẻ khi đến những cung đường ở huyện Mai Châu,
                                Hòa Bình.</p>

                        </header>
                    </article>

                    <article class="article-item type-video short" article-id="1011402" topic-id="4466">
                        <p class="article-thumbnail">
                            <a href="/video-lac-buoc-giua-thien-duong-trang-santorini-post1011402.html">

                                <span class="duration-video show-time">00:44</span>

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/kbd_bcvi/2019_11_09/7c444e02680f04ca104334692b439fb8_thumb.jpg"
                                    alt="Lac buoc giua thien duong trang Santorini hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/video-lac-buoc-giua-thien-duong-trang-santorini-post1011402.html">Lạc bước
                                    giữa thiên đường trắng Santorini</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">7 giờ trước</span>
                                    <span class="time">15:07</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Du lịch</span>



                                <span class="category">Địa điểm du lịch</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Santorini là một trong những điểm đến hàng đầu ở Hy Lạp nhờ khung
                                cảnh ngắm biển đẹp ngoạn mục và kiến trúc nhà độc đáo.</p>

                        </header>
                    </article>




                </div>
            </div>
            <div class="box-category" id="TTDN">
                <h3 class="category-title">
                    <a href="/ttdn.html" title="TTDN">TTDN</a>
                </h3>
                <div class="article-list listing-layout unique" min-display="3">


                    <article class="article-item type-text pr" article-id="1011203" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/thanh-thi-dac-biet-vi-co-nhung-nguoi-tre-khac-biet-post1011203.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/wyhktpu/2019_11_08/3_2.jpg"
                                    alt="Thanh thi dac biet vi co nhung nguoi tre khac biet hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/thanh-thi-dac-biet-vi-co-nhung-nguoi-tre-khac-biet-post1011203.html">Thành thị
                                    đặc biệt vì có những người trẻ khác biệt</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">1 ngày trước</span>
                                    <span class="time">16:00</span>
                                    <span class="date">08/11/2019</span>
                                </span>


                                <span class="category-parent">Nhịp sống</span>



                                <span class="category">TTDN</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Khác biệt nhưng không cá biệt, những thủ lĩnh trẻ đã tạo dấu ấn
                                riêng trên con đường mình theo đuổi. Chất nghệ thuật độc đáo của họ đã tạo ra sự đa dạng
                                trong văn hóa thành thị.</p>

                        </header>
                    </article>

                    <article class="article-item type-text pr" article-id="1011487" topic-id="">
                        <p class="article-thumbnail">
                            <a
                                href="/gapo-mang-xa-hoi-chinh-thuc-cua-hoa-khoi-sinh-vien-viet-nam-2020-post1011487.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/wyhktpu/2019_11_09/image003_3.jpg"
                                    alt="Gapo - mang xa hoi chinh thuc cua Hoa khoi sinh vien Viet Nam 2020 hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="/gapo-mang-xa-hoi-chinh-thuc-cua-hoa-khoi-sinh-vien-viet-nam-2020-post1011487.html">Gapo
                                    - mạng xã hội chính thức của Hoa khôi sinh viên Việt Nam 2020</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">5 giờ trước</span>
                                    <span class="time">17:00</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Nhịp sống</span>



                                <span class="category">TTDN</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Gapo - mạng xã hội được yêu thích với hơn 2 triệu người dùng, sẽ
                                là cổng đăng ký bình chọn và cập nhật mọi hoạt động của “Hoa khôi sinh viên Việt Nam
                                2020”.</p>

                        </header>
                    </article>

                    <article class="article-item type-text pr" article-id="1011445" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/mua-honda-hr-v-nhan-phieu-qua-tang-den-27-trieu-dong-post1011445.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/wyhktpu/2019_11_09/image003_1.jpg"
                                    alt="Mua Honda HR-V, nhan phieu qua tang den 27 trieu dong hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/mua-honda-hr-v-nhan-phieu-qua-tang-den-27-trieu-dong-post1011445.html">Mua
                                    Honda HR-V, nhận phiếu quà tặng đến 27 triệu đồng</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">8 giờ trước</span>
                                    <span class="time">14:00</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Nhịp sống</span>



                                <span class="category">TTDN</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Từ 5/11 đến 30/11, Honda Việt Nam triển khai chương trình khuyến
                                mãi “Mua HR-V, nhận ngay quà chất” với phiếu quà tặng trị giá đến 27 triệu đồng.</p>

                        </header>
                    </article>

                    <article class="article-item type-text pr" article-id="1011442" topic-id="">
                        <p class="article-thumbnail">
                            <a
                                href="/honda-vn-tuyen-duong-dai-ly-xuat-sac-trong-dao-tao-lai-xe-an-toan-post1011442.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/wyhktpu/2019_11_09/image001.jpg"
                                    alt="Honda VN tuyen duong dai ly xuat sac trong dao tao lai xe an toan hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a
                                    href="/honda-vn-tuyen-duong-dai-ly-xuat-sac-trong-dao-tao-lai-xe-an-toan-post1011442.html">Honda
                                    VN tuyên dương đại lý xuất sắc trong đào tạo lái xe an toàn</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">11 giờ trước</span>
                                    <span class="time">11:00</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Nhịp sống</span>



                                <span class="category">TTDN</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Vinamotor Gia Bảy, Gia Bảo Long, Kim Điệp #3 là 3 đại lý Honda
                                Việt Nam đã có những hoạt động nổi bật về hoạt động lái xe an toàn xuất sắc trong quý
                                III năm nay.</p>

                        </header>
                    </article>

                    <article class="article-item type-text pr" article-id="1011347" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/gamuda-garden-nhan-giai-the-edge-2019-tai-malaysia-post1011347.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/wyhktpu/2019_11_08/1_9.jpg"
                                    alt="Gamuda Garden nhan giai The Edge 2019 tai Malaysia hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/gamuda-garden-nhan-giai-the-edge-2019-tai-malaysia-post1011347.html">Gamuda
                                    Garden nhận giải The Edge 2019 tại Malaysia</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">14 giờ trước</span>
                                    <span class="time">08:00</span>
                                    <span class="date">09/11/2019</span>
                                </span>


                                <span class="category-parent">Nhịp sống</span>



                                <span class="category">TTDN</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Khu đô thị Gamuda Gardens của Gamuda Land Việt Nam đã giành chiến
                                thắng tại giải thưởng bất động sản The Edge 2019 diễn ra vào ngày 31/10 tại Kuala
                                Lumpur, Malaysia. </p>

                        </header>
                    </article>

                    <article class="article-item type-text pr" article-id="1011320" topic-id="">
                        <p class="article-thumbnail">
                            <a href="/ca-si-bang-cuong-tro-thanh-dai-su-cho-thuong-hieu-movr-post1011320.html">

                                <img src="https://static-znews.zadn.vn/images/bg_imageloading.jpg"
                                    data-src="https://znews-photo.zadn.vn/Uploaded/wyhktpu/2019_11_08/0H9A2913_1.JPG"
                                    alt="Ca si Bang Cuong tro thanh dai su cho thuong hieu Movr hinh anh" />
                            </a>
                        </p>
                        <header>
                            <p class="article-title">
                                <a href="/ca-si-bang-cuong-tro-thanh-dai-su-cho-thuong-hieu-movr-post1011320.html">Ca sĩ
                                    Bằng Cường trở thành đại sứ cho thương hiệu Movr</a>
                            </p>
                            <p class="article-meta">
                                <span class="article-publish">
                                    <span class="friendly-time">1 ngày trước</span>
                                    <span class="time">20:00</span>
                                    <span class="date">08/11/2019</span>
                                </span>


                                <span class="category-parent">Nhịp sống</span>



                                <span class="category">TTDN</span>

                            </p>
                            <p class="article-count">
                                <span class="like-count"></span>
                                <span class="dislike-count"></span>
                                <span class="rating-count">0</span>
                                <span class="viral-count hide"></span>
                                <span class="comment-count hide"></span>
                            </p>
                            <p class="article-summary">Giọng ca “Tôn thờ một tình yêu” vừa trở thành đại sứ của thương
                                hiệu mỹ phẩm Hàn Quốc Movr.</p>

                        </header>
                    </article>
                </div>
            </div>
        </section>
    </section>
</div>

<section class="section ads">
    <div id="advMastheadInline2" class="banner size_masthead"></div>
</section>

<!-- DESKTOP LIVE WEB FOOTER -->

<div id="advBalloon"></div>
@endsection
