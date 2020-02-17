<header id="zing-header" class="scrollfixed">
    <div class="page-wrapper">
        <h1 class="logo">
            <a href="/" title="">dangkythanhlapdoanhnghiep.vn<span>Đăng ký thành lập doanh nghiệp</span></a>
        </h1>
        <nav class="category-menu">
            <ul>
                @foreach($categories as $category)
                    <li class="parent thoi-su ">
                        <a href="/" title="Thời sự">{{$category->name }}</a>
                    </li>
                @endforeach
                <li class="more">
                    <span class="dot dot1"></span>
                    <span class="dot dot2"></span>
                    <span class="dot dot3"></span>
                </li>
            </ul>
        </nav>
        <div class="toolbox">
            <div class="searchform-wrap">
                <form name="search" id="searchbox" class="znewsSearch">
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
                    @foreach($categories as $category)
                        <li class="parent thoi-su ">
                            <a href="/" title="Thời sự">{{$category->name }}</a>
                            <div class="subcate">
                                <ul>
                                    @foreach($category->childs as $child)
                                        <li>
                                            <a href="/">{{ $child->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</header>


