      <div class="row bg-white" style="padding:20px;">
          @foreach($categoryFreatured as $r)
          @php
          $images = explode("|", $r->ANH);
          $firstImage = $images[0];
          $format_cost = number_format($r->GIATHUE, 0, ',', '.');
          @endphp

          <div class="col-md-6 mb-4">
              <div class="Ha card my-specific-card">
                  <div class="card-img">
                      <img src="{{$firstImage}}" alt="">
                  </div>
                  <div class="card-info">
                      <p class="text-title"> {{ $r->TENLOAIPHONG }}</p>
                      <p class="card-text"><span style="font-weight:bold;">Mô tả:</span>
                          {{ Str::limit($r->MOTA, 30, $end='...') }}
                      </p>
                      <p class="card-text"><span style="font-weight:bold;">Vị trí:</span> {{ $r->VITRI }}</p>
                      <p class="card-text"><span style="font-weight:bold;">Sức chứa tối đa:</span> {{ $r->SUCCHUA }}</p>

                  </div>
                  <div class="card-footer">
                      <span class="text-title rend-cost">{{ $format_cost }}<sup>đ</sup></span>
                      <div class="card-button">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                              <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                              <path fill="#fafafa" d="M320 32c0-9.9-4.5-19.2-12.3-25.2S289.8-1.4 280.2 1l-179.9 45C79 51.3 64 70.5 64 92.5V448H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H96 288h32V480 32zM256 256c0 17.7-10.7 32-24 32s-24-14.3-24-32s10.7-32 24-32s24 14.3 24 32zm96-128h96V480c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H512V128c0-35.3-28.7-64-64-64H352v64z" />
                          </svg>
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
      </div>