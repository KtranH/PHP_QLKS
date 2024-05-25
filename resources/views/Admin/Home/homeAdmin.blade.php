@extends('Admin.containerAdmin')
@section('body')
  <title>GTX - Trang quản lý</title>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Trang chủ</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
          <li class="breadcrumb-item active">Trang chủ</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card" style="border-radius:20px">

                <div class="card-body">
                  <h5 class="card-title" style="margin-top:-10px; font-family: 'Montserrat', sans-serif;
                  font-optical-sizing: auto;
                  font-weight: 600;
                  font-style: normal;">Số khách lưu trú <span>| Hôm nay</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa-solid fa-users" style="color: #74C0FC;"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">Đã</span><span class="text-muted small pt-2 ps-1">đang ở</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card" style="border-radius:20px">
            
                <div class="card-body">
                  <h5 class="card-title" style="margin-top:-10px; font-family: 'Montserrat', sans-serif;
                  font-optical-sizing: auto;
                  font-weight: 600;
                  font-style: normal;">Số phòng còn trống <span>| Hôm nay</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa-solid fa-table-list" style="color: #63E6BE;"></i>
                    </div>
                    <div class="ps-3">
                      <h6>10</h6>
                      <span class="text-success small pt-1 fw-bold">Vẫn còn</span><span class="text-muted small pt-2 ps-1">trống</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card" style="border-radius:20px">

                <div class="card-body">
                  <h5 class="card-title" style="margin-top:-10px; font-family: 'Montserrat', sans-serif;
                  font-optical-sizing: auto;
                  font-weight: 600;
                  font-style: normal;">Tổng số khách <span>| Tất cả</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa-solid fa-star" style="color: #fb5032;"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">Khách</span><span class="text-muted small pt-2 ps-1">Đã thuê</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
           
            <!-- End Reports -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto" style="border-radius:20px">

                <div class="card-body">
                  <h5 class="card-title" style="margin-top:-10px; font-family: 'Montserrat', sans-serif;
                  font-optical-sizing: auto;
                  font-weight: 600;
                  font-style: normal;">Danh sách phiếu thuê phòng <span>| Tất cả</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Mã khách</th>
                        <th scope="col">Khách hàng</th>
                        <th scope="col">Tên khách</th>
                        <th scope="col">Mã phiếu</th>
                        <th scope="col">Tình trạng</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#2457</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href="#" class="text-primary">At praesentium minu</a></td>
                        <td>$64</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2147</a></th>
                        <td>Bridie Kessler</td>
                        <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                        <td>$47</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2049</a></th>
                        <td>Ashleigh Langosh</td>
                        <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                        <td>$147</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Angus Grady</td>
                        <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                        <td>$67</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Raheem Lehner</td>
                        <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                        <td>$165</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Khôi Trần</td>
                        <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                        <td>$165</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto" style="border-radius:20px">

                <div class="card-body pb-0">
                  <h5 class="card-title" style="margin-top:-10px; font-family: 'Montserrat', sans-serif;
                  font-optical-sizing: auto;
                  font-weight: 600;
                  font-style: normal;">Những loại phòng tiêu biểu <span>| Tất cả</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Mã loại</th>
                        <th scope="col">Tên loại</th>
                        <th scope="col">Giá thuê</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Tổng số lần thuê</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                        <td>$64</td>
                        <td class="fw-bold">124</td>
                        <td>$5,828</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                        <td>$46</td>
                        <td class="fw-bold">98</td>
                        <td>$4,508</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                        <td>$59</td>
                        <td class="fw-bold">74</td>
                        <td>$4,366</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                        <td>$32</td>
                        <td class="fw-bold">63</td>
                        <td>$2,016</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                        <td>$79</td>
                        <td class="fw-bold">41</td>
                        <td>$3,239</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
         
         
         
          <!-- End Recent Activity -->

          <!-- Budget Report -->
          <div class="card" style="border-radius:20px">


            <div class="card-body pb-0">
              <h5 class="card-title" style="margin-top:-10px; font-family: 'Montserrat', sans-serif;
              font-optical-sizing: auto;
              font-weight: 600;
              font-style: normal;">Thống kê nhận phòng và hủy phòng <span>| Tất cả</span></h5>

              <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                    tooltip: {
                    trigger: 'axis',
                    axisPointer: {
                      type: 'shadow'
                    }
                  },
                    legend: {},
                    xAxis: {
                    type: 'category',
                    data: ['Số lượng']
                  },
                  yAxis: {
                    type: 'value'
                  },
                  series: [
                    {
                      name: "Nhận phòng",
                      data: [550],
                      type: 'bar'
                    },
                    {
                      name: "Hủy phòng",
                      data: [120],
                      type: 'bar'
                    }
                  ]
                  });
                });
              </script>

            </div>
          </div><!-- End Budget Report -->

          <!-- Website Traffic -->
          <div class="card" style="border-radius:20px">
  
            <div class="card-body pb-0">
              <h5 class="card-title" style="margin-top:-10px; font-family: 'Montserrat', sans-serif;
              font-optical-sizing: auto;
              font-weight: 600;
              font-style: normal;">Số lượng các loại phòng <span>| Tất cả</span></h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Đang hiển thị',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Phòng đơn'
                        },
                        {
                          value: 735,
                          name: 'Phòng đôi'
                        },
                        {
                          value: 580,
                          name: 'Phòng gia đình'
                        },
                        {
                          value: 484,
                          name: 'Phòng VIP'
                        },
                        {
                          value: 300,
                          name: 'Phòng tổng thống'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
         
         
          <!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

@endsection