@extends('User.Elements.master')
@section('content')
<div class="page-wrapper mt-5">
    <div class="container pb-2">
        <h1 class="h3 font-weight-bold">Liên hệ</h1>
        <div class="row">
            <div class="col-md-6">
                <h2 class="h5">CÔNG TY LUẬT TNHH MINH KHUÊ</h2>
                <p class="mt-3"><span class="font-weight-bold">Địa chỉ trụ sở</span> : Phòng 2007, Tầng 20, Tòa nhà C2, Vincom Trần Duy Hưng, Đường Trần Duy Hưng, Trung Hòa, Cầu Giấy, Tp. Hà Nội. [ Xem trên bản đồ ]</p>
                <p class="mt-2"><span class="font-weight-bold">Điện thoại liên hệ dịch vụ:</span> 0243-9916057</p>
                <p class="mt-2"><span class="font-weight-bold">Email:</span> lienhe@luatminhkhue.vn</p>
                <p class="mt-2">LUẬT SƯ TƯ VẤN PHÁP LUẬT TRỰC TUYẾN QUA TỔNG ĐÀI ĐIỆN THOẠI: <span>1900.1975</span></p>
                <p class="mt-2">Thời gian làm việc</p>
                <p class="mt-2"><span class="font-weight-bold">Giờ hành chính:</span> Từ thứ Hai đến thứ Sáu Sáng: 8h00 – 12h00, Chiều: 13h00 – 17h00</p>
                <p class="mt-2"><span class="font-weight-bold">Ngoài giờ:</span> Chủ nhật và khung giờ các ngày trong tuần: 12h00 – 13h00, Chiều: 17h00 – 21h00</p>
                <iframe class="mt-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.703240954564!2d105.79214361440698!3d21.004529593982134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac8456b5c507%3A0xa5d80487419585b4!2zQ8O0bmcgVHkgTHXhuq10IE1pbmggS2h1w6o!5e0!3m2!1svi!2s!4v1573818779678!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="col-md-6">
                <h2 class="h5">Gửi liên hệ đến Luật Minh Khuê</h2>
                <p class="mt-3">Liên lạc với Luật Minh Khuê theo mẫu dưới đây</p>
                <form action="" method="" enctype="">
                    <div class="form-group row">
                        <label class="col-4">Hình thức liên hệ (<span class="text-danger">*</span>)</label>
                        <div class="col-8">
                            <select class="form-control form-control-sm">
                                <option>Default select</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Tiêu đề (<span class="text-danger">*</span>)</label>
                        <div class="col-8">
                            <input type="text" class="form-control form-control-sm" placeholder="Tiêu đề">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Tên bạn (<span class="text-danger">*</span>)</label>
                        <div class="col-8">
                            <input type="text" class="form-control form-control-sm" placeholder="Tên của bạn">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Email (<span class="text-danger">*</span>)</label>
                        <div class="col-8">
                            <input type="text" class="form-control form-control-sm" placeholder="Địa chỉ nhận hồi đáp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Điện thoại (<span class="text-danger">*</span>)</label>
                        <div class="col-8">
                            <input type="text" class="form-control form-control-sm" placeholder="Điện thoại khi luật sư liên hệ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Khu vực</label>
                        <div class="col-8">
                            <select class="form-control form-control-sm">
                                <option>Default select</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Lĩnh vực</label>
                        <div class="col-8">
                            <select class="form-control form-control-sm">
                                <option>Default select</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Nội dung</label>
                        <div class="col-8">
                            <textarea class="form-control" rows="5" placeholder="Nội dung yêu cầu phải được viết bằng tiếng Việt có dấu"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-success w-50 d-block m-auto" type="submit">Gửi</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection