<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css"
        integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/dashboard_css.css">
</head>
<body>
    <div class="active">
        {{-- ----------------------------sidebar section------------------------ --}}
        <x-sidebar/>
        {{-- ------------------------------Section Container----------------------- --}}
            <section class="main_container">
                <div class="section_container">
                  <div class="section_content">
                    <a href="">
                      <span class="bx bxs-tachometer"></span>
                      <span>Dashboard</span>
                    </a>
                  </div>
                  <div class="grid_container">
                    <div class="grid_card card1">
                      <a href="">
                        <h3>Total Stocks:</h3>
                        <span class="data">{{$data1}}</span>
                        <div class="content">
                          <span>Stocks</span>
                          <p>view Details</p>
                        </div>
                      </a>
                    </div>
                    <div class="grid_card card2">
                      <a href="">
                        <h3>Total&nbspCustomers:</h3>
                        <span class="data">{{$data2}}</span>
                        <div class="content">
                          <span>Customers</span>
                          <p>view Details</p>
                        </div>
                      </a>
                    </div>
                    <div class="grid_card card3">
                      <a href="">
                        <h3>Total Orders:</h3>
                        <span class="data">10</span>
                        <div class="content">
                          <span>Orders</span>
                          <p>view Details</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                {{-- --------Other Content---------- --}}
             
              </section>

        {{-- ------------------------section End------------------------------- --}}
    </div>
</body>
</html>