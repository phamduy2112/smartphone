<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>

  <link rel="stylesheet" href="css/flaticon.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="css/admin.css">

</head>

/* a chia bố cục em xem chỉnh lại là dc\
hình dung bo cục chưa nó đơn giản v thoi mà anh cho em hỏi cái này cái nó sẽ giống như show cái bự dk anh ? đúng roi như
nhau chỉ khác là em phải xét xuống dạng mobile width nhỏ lại => hình dung chưa nếu vậy là em có cần xét z-index k anh ?
ko cần a chia bo cục roi
sau này em hạn chế dùng z-index mình chia bố cục ra tại z-index nó ảnh hưởng nhiều cái nếu vậy nếu em sài postion:fixed
thì nó chỉ cố định chứ k có lên trcaisdungd tùy vao trường hợp scroll xuongs muốn header nó len dung position và z-index
cho cái header thôi chứ em đang dung là cho toàn trang => em hiểu chua ko dùng cho toàn trang ý em là vậy àm sao mà em
để phần header nó lại ảnh hưởng toàn trang
còn cái index của em nó bao toàn trang hình dung chua vậy là em có thể xét 2 thuộc tính nó cho dc k anh ? ko nha em sẽ
ko click dc
cái thẻ chứa toàn bộ nội dung em dùng làm cái gì => cái nào dùng thì dùng chứ ko dùng như v tại em thấy trang ng ta có
nên em sài
a mở em coi
tháy layout-wrapper nó có dùng đâu em
main-content em thấy content có dùng đâu chỉ dùng thằng nào cần => hiểu chưa em hiểu rồi mà tại em đang lag v em nên xử
lí phẩn menu đó như nào anh
em viết 1 cái div trong chứa nội dung menu đó => em để display : none => khi bấm nút thì xét lại display : block or
hover
div trong chứa nội dung mene
<div display : flex nó sẽ chia ra cho em>
  <div ben trai xet width 30% sau css scroll>
    bên trai em viet 2 dạng 1 cái show nhu v và 1 đạng khi ấn button nó showw icon thoi cái nào ko show thì để display
    none
    cái nút button xử lý js ẩn cái bự và show cai nhơ = display none
    bên trái nè đâu liên quan => hiểu chưa v là bên trái này em k cần xét fixed hả anh ? đúng r sao mà em thấy trang cái đó là giữa nguyên hay sao anh em chưa hiểu bên trai đó cho lắm
    em thấy trái phải là 2 cái scroll ko => thì em css scroll thôi là xong => hiểu chưa hơi hơi rồi anh em cũng hinh dung ra dc chút chút bên trai rồi
    cứ viết theo bố cục a chia đi em sẽ thấy nó đơn giản lắm => thử đi ok anh out nha  ok anh em cam on anh
  </div>
  <div ben phai css scroll>
    <div header em dung position : fixe và z-index trong này thoi>
      media ngay khúc media này nè em sẽ viết css để ẩn hiện cho nó chứ còn trên pc thì cần gì quan tâm cái fixed tại
      chia ra trái phải r mà em scroll bên phải đâu ảnh hưởng trai => div trong chứa nội dung mene => nằm trong đây để
      khi em sroll xuống nó vẫn giữ vì thằng cha em có dùng position : fixe và z-index rồi
      hiểu chưa em cứ tưởng là em sẽ xết trái luôn khi mà em cuộn xuống nó vẫn giữ nguyên thì ra là nó năm hết bên phải
      hả anh
      em phải hình dung cái nút đó nằm trong đâu nhưng mà nếu em trượt xuống nó vẫn giữ ben trai là fixed dk anh ?bên
      trái khác mà
    </div>
    <div body duoi>

    </div>
  </div>
</div>
*/

<body>
  <header>
    <div class="zindex">
      <nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="menu__a navbar-nav w-100">
            <div class="menu__list">
              <div class="protofile">
                <div class="temer">
                  <img src="img/service/hinhtoi5.jpg" alt="">
                </div>
                <div class="protofile__name">
                  Phạm Duy
                </div>

              </div>

              <ul class="menu__item menu_width w-100">

                <li>
                  <a href="" class="">
                    <i class="fa-solid fa-house"></i>
                    Trang chủ</a>
                </li>
                <li class="menu_item">
                  <a href="">
                    <i class="fa-solid fa-house"></i>
                    Ứng dụng</a>
                  <i class="fa-sharp fa-solid fa-chevron-right" id="fa-hidden1"></i>
                  <i class="fa-solid fa-chevron-down fa-hidden" id="fa-hidden"></i>
                </li>
                <ul class="menu__item1 hidden" id="menu__item">
                  <li class="">
                    <a href="">lịch</a>

                  </li>
                  <li>
                    <a href="">Trò chuyện</a>

                  </li>
                  <li>
                    <a href="">blog</a>

                  </li>
                </ul>
                <li>
                  <a href="" class="">
                    <i class="fa-solid fa-house"></i>
                    Trang chủ</a>
                </li>
                <li>
                  <a href="" class="">
                    <i class="fa-solid fa-house"></i>
                    Trang chủ</a>
                </li>
                <li>
                  <a href="" class="">
                    <i class="fa-solid fa-house"></i>
                    Trang chủ</a>
                </li>
              </ul>

            </div>

          </div>
        </div>

      </nav>

      <div class="admin__body__top">
        <i class="fa-sharp fa-solid fa-bars" id="fa-bars" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"></i>
        <div class="right__admin">
          <img src="img/duan/tải xuống.png" alt="" width="40px" height="30px">
          <i class="fa-solid fa-moon"></i>

          <i class="fa-regular fa-bell"></i>
          <div class="right__admin--box">
            <div class="img">
              <img src="img/service/hinhtoi5.jpg" alt="">
            </div>
            <div class="right__admin_box--text">
              Pham Duy
              <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </div>
          </div>

          <i class="fa-solid fa-gear"></i>
        </div>
      </div>
    </div>




  </header>
  <section class="admin_body">
    <div class="row mb-3">
      <div class="col-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

          </div>
        </div>
      </div>

    </div>
    <div class="row mt-3 admin__row">
      <div class="col-4">
        <div class="card">




          <div class="card-body">
            <div class="cart__box">
              <h5 class="card-title">Sơ đồ sản phẩm</h5>
              <p class="card-text">
                các sản phẩm sau đây được mua nhiều nhất
              </p>
            </div>

            <div id="myPlot" style="width:100%;max-width:700px"></div>
            <a href="">Xem thông tin chi tiết</a>
          </div>

        </div>



      </div>
      <div class="col-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Thống kê doanh thu trong ngày</h5>
            <p class="card-text">Doanh thu các sản phẩm trong 1 ngày</p>

          </div>
          <div class="col-sm">
            <div id="invested-overview" data-colors="[&quot;#5156be&quot;, &quot;#34c38f&quot;]" class="apex-charts"
              style="min-height: 189.478px;">
              <div id="apexchartskee4vc9o" class="apexcharts-canvas apexchartskee4vc9o apexcharts-theme-light"
                style="width: 269px; height: 189.478px;"><svg id="SvgjsSvg1938" width="269" height="189.47777777777776"
                  xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                  xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                  transform="translate(0, -10)" style="background: transparent;">
                  <g id="SvgjsG1940" class="apexcharts-inner apexcharts-graphical" transform="translate(12.5, 0)">
                    <defs id="SvgjsDefs1939">
                      <clipPath id="gridRectMaskkee4vc9o">
                        <rect id="SvgjsRect1942" width="252" height="270" x="-3" y="-1" rx="0" ry="0" opacity="1"
                          stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                      </clipPath>
                      <clipPath id="gridRectMarkerMaskkee4vc9o">
                        <rect id="SvgjsRect1943" width="250" height="272" x="-2" y="-2" rx="0" ry="0" opacity="1"
                          stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                      </clipPath>
                      <linearGradient id="SvgjsLinearGradient1948" x1="0" y1="1" x2="1" y2="1">
                        <stop id="SvgjsStop1949" stop-opacity="1" stop-color="rgba(242,242,242,1)" offset="0.2"></stop>
                        <stop id="SvgjsStop1950" stop-opacity="1" stop-color="rgba(52,195,143,1)" offset="0.6"></stop>
                        <stop id="SvgjsStop1951" stop-opacity="1" stop-color="rgba(52,195,143,1)" offset="1"></stop>
                      </linearGradient>
                      <linearGradient id="SvgjsLinearGradient1958" x1="0" y1="1" x2="1" y2="1">
                        <stop id="SvgjsStop1959" stop-opacity="1" stop-color="rgba(81,86,190,1)" offset="0.2"></stop>
                        <stop id="SvgjsStop1960" stop-opacity="1" stop-color="rgba(52,195,143,1)" offset="0.6"></stop>
                        <stop id="SvgjsStop1961" stop-opacity="1" stop-color="rgba(52,195,143,1)" offset="1"></stop>
                      </linearGradient>
                    </defs>
                    <g id="SvgjsG1944" class="apexcharts-radialbar">
                      <g id="SvgjsG1945">
                        <g id="SvgjsG1946" class="apexcharts-tracks">
                          <g id="SvgjsG1947" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                            <path id="apexcharts-radialbarTrack-0"
                              d="M 66.50422231997536 170.40558621438228 A 73.75000000000001 73.75000000000001 0 1 1 179.49577768002464 170.40558621438228"
                              fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1"
                              stroke-linecap="butt" stroke-width="22.795000000000005" stroke-dasharray="0"
                              class="apexcharts-radialbar-area"
                              data:pathOrig="M 66.50422231997536 170.40558621438228 A 73.75000000000001 73.75000000000001 0 1 1 179.49577768002464 170.40558621438228">
                            </path>
                          </g>
                        </g>
                        <g id="SvgjsG1953">
                          <g id="SvgjsG1957" class="apexcharts-series apexcharts-radial-series" seriesName="SeriesxA"
                            rel="1" data:realIndex="0">
                            <path id="SvgjsPath1962"
                              d="M 66.50422231997536 170.40558621438228 A 73.75000000000001 73.75000000000001 0 1 1 195.1383855541182 107.66651280219025"
                              fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient1958)" stroke-opacity="1"
                              stroke-linecap="butt" stroke-width="23.500000000000004" stroke-dasharray="4"
                              class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="208"
                              data:value="80" index="0" j="0"
                              data:pathOrig="M 66.50422231997536 170.40558621438228 A 73.75000000000001 73.75000000000001 0 1 1 195.1383855541182 107.66651280219025">
                            </path>
                          </g>
                          <circle id="SvgjsCircle1954" r="57.35250000000001" cx="123" cy="123"
                            class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                          <g id="SvgjsG1955" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"
                            style="opacity: 1;"><text id="SvgjsText1956" font-family="Helvetica, Arial, sans-serif"
                              x="123" y="133" text-anchor="middle" dominant-baseline="auto" font-size="18px"
                              font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value"
                              style="font-family: Helvetica, Arial, sans-serif;">80%</text></g>
                        </g>
                      </g>
                    </g>
                    <line id="SvgjsLine1963" x1="0" y1="0" x2="246" y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                      stroke-width="1" class="apexcharts-ycrosshairs"></line>
                    <line id="SvgjsLine1964" x1="0" y1="0" x2="246" y2="0" stroke-dasharray="0" stroke-width="0"
                      class="apexcharts-ycrosshairs-hidden"></line>
                  </g>
                  <g id="SvgjsG1941" class="apexcharts-annotations"></g>
                </svg>
                <div class="apexcharts-legend"></div>
              </div>
            </div>
            <div class="resize-triggers">
              <div class="expand-trigger">
                <div style="width: 294px; height: 190px;"></div>
              </div>
              <div class="contract-trigger"></div>
            </div>
          </div>



        </div>
      </div>
      <div class="col-4">

        <div class="card">
          <div id="myPlot1" style="width:100%;max-width:700px"></div>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

          </div>
        </div>
      </div>

    </div>

    <div class="table--admin mt-3">
      <table class="table table-bordered">
        <h3>khách hàng mới đăng kí</h3>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>

  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>


  <script src="js/cot.js"></script>

</body>

</html>