<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thống Kê</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Danh thu tháng này</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($data_countM['Count']) ?> VNĐ</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Danh thu năm nay</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($data_countM['Count']) ?> VNĐ</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Khách hàng</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_nguoidung['Count'] ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nhân viên</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_nhanvien['Count'] ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Điện thoại</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_tksp1['Count'] ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Ốp lưng</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_tksp2['Count'] ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Phụ kiện</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_tksp3['Count'] ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Hóa đơn chưa duyệt</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_hd['Count'] ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Doanh thu theo ngày</h1>
    </div>

    <div class="row">
        <div class="col-sm-2">
            <input type="date" class="form-control" id="start">
        </div>
        <div class="col-sm-2">
            <input type="date" class="form-control" id="end">
        </div>
        <button onclick="filter()" class="btn btn-primary">Lọc</button>
    </div>

    <div class="row">
        <canvas id="myChart"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    let start = document.getElementById("start");
    let end = document.getElementById("end");
    let currentDate = new Date();
    let firstDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
    let formattedDate = firstDayOfMonth.toISOString().slice(0, 10);
    start.value = formattedDate;

    let lastDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);
    let formattedDate1 = lastDayOfMonth.toISOString().slice(0, 10);
    end.value = formattedDate1;

    const ctx = document.getElementById('myChart');
    var chartData = null;

    function filter() {
        chartData.destroy();
        thongKe(start.value, end.value);
    }

    function formatToVND(number) {
        return new Intl.NumberFormat('vi-VN', {
            style: 'currency',
            currency: 'VND'
        }).format(number);
    }

    thongKe(start.value, end.value);

    function thongKe(start = null, end = null) {
        fetch('http://localhost:8000/admin?mod=login&act=thongke&start=' + start + '&end=' + end).then(response => {
            return response.json();
        }).then(data => {
            var data = data.data;
            // var thang = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
            // var result = {};

            // for (var i = 1; i <= 12; i++) {
            //     result[i] = 0;
            // }

            // data.forEach(item => {
            //     var thangValue = parseInt(item.thang, 10);
            //     if (thang.includes(thangValue)) {
            //         result[thangValue] = parseInt(item.count, 10);
            //     }
            // });

            var labelData = [];
            var resData = [];
            data.forEach(item => {
                labelData.push(item.NgayLap);
                resData.push(item.TongTien);
            });

            chartData = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labelData,
                    datasets: [{
                        label: 'Tổng số đơn',
                        data: resData,
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value, index, values) {
                                    return formatToVND(value); 
                                }
                            }
                        }
                    },
                    tooltips: {
                        callbacks: {
                            label: function(tooltipItem, data) {
                                let value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                                return formatToVND(value);
                            }
                        }
                    }
                }
            });

        }).catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
    }
</script>