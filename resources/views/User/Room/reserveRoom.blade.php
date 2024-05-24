@extends('User.container')
@section('body')
  <title>GTX - Đặt phòng</title>
  <main id="main" class="main">

    <div class="pagetitle">
        <h1>Đặt phòng</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                <li class="breadcrumb-item">Đặt phòng</li>
                <li class="breadcrumb-item active">Danh sách đặt phòng</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section profile">
        <div class="row">
            <div class="col-xl-8" style="width:100%">

                <div class="card" style="border-radius:20px;">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#danhSachPhong">Danh sách đặt phòng</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#lichSuDatPhong">Lịch sử đặt phòng</button>
                            </li>
                        </ul>
                                <div class="tab-content pt-2">

                          <div class="tab-pane fade active show profile-overview" id="danhSachPhong">
                             <h5 class="card-title">Danh sách phòng của bạn</h5>

                            @if ($checkUser2 == null)
                            <div class="card_dp_khoi">
                                <div class="header_dp_khoi">
                                  <span class="icon_dp_khoi">
                                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                      <path clip-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" fill-rule="evenodd"></path>
                                    </svg>
                                  </span>
                                  <p class="alert_dp_khoi">Thông báo!</p>
                                </div>
                                <img src="assets/img/night-time2.png" alt="" style="max-width:168px">

                                <p class="message_dp_khoi">
                                  <h1>Opps :( </h1>
                                  <span style="font-size:20px">Bạn chưa tạo danh sách đặt phòng nào, hãy lựa các loại phòng bạn thích và đặt ngay cho chuyến du lịch của bạn.</span>
                                </p>
                              
                                <div class="actions_dp_khoi">
                                  <a class="read_dp_khoi" href="{{ route("all.category") }}">
                                    Xem các loại phòng
                                  </a>
                              
                                  <a class="mark-as-read_dp_khoi" href="{{ route("home") }}">
                                    Quay lại trang chủ
                                  </a>
                                </div>
                              </div>                                  
                            @endif
                          </div>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show profile-overview" id="lichSuDatPhong">
                                <h5 class="card-title" style="margin-top:-10px">Lịch sử phòng bạn từng đặt</h5>
                                
                                @if ($checkUser == null)
                                <div class="card_dp_khoi">
                                    <div class="header_dp_khoi">
                                      <span class="icon_dp_khoi">
                                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                          <path clip-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" fill-rule="evenodd"></path>
                                        </svg>
                                      </span>
                                      <p class="alert_dp_khoi">Thông báo!</p>
                                    </div>
                                    <img src="assets/img/night-time.png" alt="" style="max-width:168px">

                                    <p class="message_dp_khoi">
                                       <h1>Opps :( </h1>
                                       <span style="font-size:20px">Không tìm thấy danh sách bạn từng đặt phòng! Nếu bạn chưa đặt phòng hãy chọn loại phòng bạn thích và đặt ngay.</span>
                                    </p>
                                  
                                    <div class="actions_dp_khoi">
                                      <a class="read_dp_khoi" href="{{ route("all.category") }}">
                                        Xem các loại phòng
                                      </a>
                                  
                                      <a class="mark-as-read_dp_khoi" href="{{ route("home") }}">
                                        Quay lại trang chủ
                                      </a>
                                    </div>
                                  </div>                                  
                                @endif

                            </div>
                        </div>                                
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
@endsection