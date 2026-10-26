@extends('layouts.admin')

@section('title', 'Studio | Dashboard')
@section('show_sidebar', true)

@section('content')
<div id="content" class="app-content">
    <h1 class="page-header mb-3">
        Hi, Sean. <small>here's what's happening with your store today.</small>
    </h1>

    <!-- BEGIN row - Top Stats -->
    <div class="row">
        <div class="col-xl-6 mb-3">
            <div class="card h-100 overflow-hidden">
                <div class="card-img-overlay d-none d-md-block bg-blue rounded mb-n1 mx-n1" style="background-image: url({{ asset('assets/admin/img/bg/wave-bg.png') }}); background-position: right bottom; background-repeat: no-repeat; background-size: 100%;"></div>
                <div class="card-body position-relative text-white text-opacity-70">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="d-flex">
                                <div class="me-auto">
                                    <h5 class="text-white text-opacity-80 mb-3">Weekly Earning</h5>
                                    <h3 class="text-white mt-n1 mb-1">$2,999.80</h3>
                                    <p class="mb-1 text-white text-opacity-60 text-truncate">
                                        <i class="fa fa-caret-up"></i> <b>32%</b> increase compare to last week
                                    </p>
                                </div>
                            </div>
                            <hr class="bg-white bg-opacity-75 mt-3 mb-3">
                            <div class="row">
                                <div class="col-6 col-lg-5">
                                    <div class="mt-1"><i class="fa fa-fw fa-shopping-bag fs-28px text-black text-opacity-50"></i></div>
                                    <div class="mt-1">
                                        <div>Store Sales</div>
                                        <div class="fw-600 text-white">$1,629.80</div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-5">
                                    <div class="mt-1"><i class="fa fa-fw fa-retweet fs-28px text-black text-opacity-50"></i></div>
                                    <div class="mt-1">
                                        <div>Referral Sales</div>
                                        <div class="fw-600 text-white">$700.00</div>
                                    </div>
                                </div>
                            </div>
                            <hr class="bg-white bg-opacity-75 mt-3 mb-3">
                            <div class="mt-3 mb-2">
                                <a href="#" class="btn btn-yellow btn-rounded btn-sm ps-5 pe-5 pt-2 pb-2 fs-14px fw-600"><i class="fa fa-wallet me-2 ms-n2"></i> Withdraw money</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-orange text-white" style="min-height: 199px; position: relative;">
                        <img src="{{ asset('assets/admin/img/icon/order-bg.png') }}" alt="" style="position: absolute; right: 0; bottom: 0; width: 90px; pointer-events: none;">
                        <div class="card-body position-relative">
                            <h5 class="text-white text-opacity-80 mb-3 fs-16px">New Orders</h5>
                            <h3 class="text-white mt-n1">56</h3>
                            <div class="progress bg-black bg-opacity-20 mb-2" style="height: 6px;"><div class="progress-bar bg-white" style="width: 56%"></div></div>
                            <div class="text-white text-opacity-80 mb-4"><i class="fa fa-caret-up"></i> 16% increase compare to last week</div>
                            <div><a href="#" class="text-white d-flex align-items-center text-decoration-none">View report <i class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i></a></div>
                        </div>
                    </div>
                    <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-teal text-white" style="min-height: 199px; position: relative;">
                        <img src="{{ asset('assets/admin/img/icon/visitor-bg.png') }}" alt="" style="position: absolute; right: 0; bottom: 0; width: 90px; pointer-events: none;">
                        <div class="card-body position-relative">
                            <h5 class="text-white text-opacity-80 mb-3 fs-16px">Page Visitors</h5>
                            <h3 class="text-white mt-n1">60.5k</h3>
                            <div class="progress bg-black bg-opacity-20 mb-2" style="height: 6px;"><div class="progress-bar bg-white" style="width: 60%"></div></div>
                            <div class="text-white text-opacity-80 mb-4"><i class="fa fa-caret-up"></i> 33% increase compare to last week</div>
                            <div><a href="#" class="text-white d-flex align-items-center text-decoration-none">View report <i class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-pink text-white" style="min-height: 199px; position: relative;">
                        <img src="{{ asset('assets/admin/img/icon/email-bg.png') }}" alt="" style="position: absolute; right: 0; bottom: 0; width: 90px; pointer-events: none;">
                        <div class="card-body position-relative">
                            <h5 class="text-white text-opacity-80 mb-3 fs-16px">Unread email</h5>
                            <h3 class="text-white mt-n1">30</h3>
                            <div class="progress bg-black bg-opacity-20 mb-2" style="height: 6px;"><div class="progress-bar bg-white" style="width: 30%"></div></div>
                            <div class="text-white text-opacity-80 mb-4"><i class="fa fa-caret-down"></i> 5% decrease compare to last week</div>
                            <div><a href="#" class="text-white d-flex align-items-center text-decoration-none">View report <i class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i></a></div>
                        </div>
                    </div>
                    <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-indigo text-white" style="min-height: 199px; position: relative;">
                        <img src="{{ asset('assets/admin/img/icon/browser-bg.png') }}" alt="" style="position: absolute; right: 0; bottom: 0; width: 90px; pointer-events: none;">
                        <div class="card-body position-relative">
                            <h5 class="text-white text-opacity-80 mb-3 fs-16px">Page Views</h5>
                            <h3 class="text-white mt-n1">320.4k</h3>
                            <div class="progress bg-black bg-opacity-20 mb-2" style="height: 6px;"><div class="progress-bar bg-white" style="width: 80%"></div></div>
                            <div class="text-white text-opacity-80 mb-4"><i class="fa fa-caret-up"></i> 20% increase compare to last week</div>
                            <div><a href="#" class="text-white d-flex align-items-center text-decoration-none">View report <i class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END row -->

    <!-- BEGIN row - Middle Stats & Analytics -->
    <div class="row">
        <div class="col-xl-6 mb-3">
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <div class="flex-grow-1">
                                    <h5 class="card-title mb-0">Total Users</h5>
                                    <small class="text-muted">Store user account registration</small>
                                </div>
                                <a href="#" class="text-muted"><i class="fa fa-redo"></i></a>
                            </div>
                            <h3 class="mb-3">184,593</h3>
                            <div class="text-success fs-13px fw-600 mb-3"><i class="fa fa-caret-up"></i> +3.59%</div>
                            <div class="d-flex text-muted fs-12px">
                                <div><i class="fa fa-user text-blue me-1"></i> Active profiles</div>
                                <div class="ms-auto"><a href="#" class="text-decoration-none">View more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <div class="flex-grow-1">
                                    <h5 class="card-title mb-0">Social Media</h5>
                                    <small class="text-muted">Facebook page stats overview</small>
                                </div>
                                <a href="#" class="text-muted"><i class="fa fa-redo"></i></a>
                            </div>
                            <div class="row text-center">
                                <div class="col-6">
                                    <div class="mt-1"><i class="fa fa-thumbs-up fa-2x text-blue opacity-50"></i></div>
                                    <div class="fw-600 mt-2">306.5k</div>
                                    <div class="text-muted fs-11px">Likes</div>
                                </div>
                                <div class="col-6">
                                    <div class="mt-1"><i class="fa fa-comments fa-2x text-blue opacity-50"></i></div>
                                    <div class="fw-600 mt-2">27.5k</div>
                                    <div class="text-muted fs-11px">Comments</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-grow-1">
                            <h5 class="card-title mb-0">Web Traffic</h5>
                            <small class="text-muted">Traffic source and category</small>
                        </div>
                        <a href="#" class="text-muted"><i class="fa fa-redo"></i></a>
                    </div>
                    <h3 class="mb-3">320,958</h3>
                    <div class="text-success fs-13px fw-600 mb-2"><i class="fa fa-caret-up"></i> +20.9%</div>
                    <div class="progress mb-3" style="height: 5px;">
                        <div class="progress-bar bg-blue" style="width: 42%"></div>
                        <div class="progress-bar bg-teal" style="width: 36%"></div>
                        <div class="progress-bar bg-orange" style="width: 15%"></div>
                        <div class="progress-bar bg-indigo" style="width: 7%"></div>
                    </div>
                    <div class="fs-12px text-muted d-flex flex-wrap">
                        <div class="me-3"><i class="fa fa-circle text-blue fs-9px me-1"></i> Direct visit (42.66%)</div>
                        <div class="me-3"><i class="fa fa-circle text-teal fs-9px me-1"></i> Organic search (36.80%)</div>
                        <div class="me-3"><i class="fa fa-circle text-orange fs-9px me-1"></i> Referral website (15.34%)</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-grow-1">
                            <h5 class="card-title mb-0">Sales Analytics</h5>
                            <small class="text-muted">Weekly sales performance chart</small>
                        </div>
                        <a href="#" class="text-muted"><i class="fa fa-redo"></i></a>
                    </div>
                    <!-- Tempat render chart ApexCharts -->
                    <div id="apex-chart" class="mb-2"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END row -->

    <!-- BEGIN row - Tables -->
    <div class="row">
        <div class="col-xl-6 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-grow-1">
                            <h5 class="card-title mb-0">Bestseller</h5>
                            <small class="text-muted">Top 3 product sales this week</small>
                        </div>
                        <a href="#" class="text-decoration-none">See All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle mb-0">
                            <thead>
                                <tr class="text-muted fs-11px">
                                    <th>PRODUCT</th>
                                    <th class="text-end">SALES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="w-40px h-40px bg-light rounded d-flex align-items-center justify-content-center me-2">
                                                <i class="fa fa-mobile-alt text-muted"></i>
                                            </div>
                                            <div>
                                                <div class="fw-600">iPhone 11 Pro Max (256GB)</div>
                                                <div class="text-muted fs-12px">$1,099</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end fw-600">382</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="w-40px h-40px bg-light rounded d-flex align-items-center justify-content-center me-2">
                                                <i class="fa fa-laptop text-muted"></i>
                                            </div>
                                            <div>
                                                <div class="fw-600">MacBook Pro 13 inch (2025)</div>
                                                <div class="text-muted fs-12px">$1,120</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end fw-600">102</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="w-40px h-40px bg-light rounded d-flex align-items-center justify-content-center me-2">
                                                <i class="fa fa-clock text-muted"></i>
                                            </div>
                                            <div>
                                                <div class="fw-600">Apple Watch Series 4 (2025)</div>
                                                <div class="text-muted fs-12px">$349</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end fw-600">75</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-grow-1">
                            <h5 class="card-title mb-0">Transaction</h5>
                            <small class="text-muted">Latest transaction history</small>
                        </div>
                        <a href="#" class="text-decoration-none">See All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle mb-0">
                            <thead>
                                <tr class="text-muted fs-11px">
                                    <th>NO</th>
                                    <th>ORDER DETAILS</th>
                                    <th class="text-center">STATUS</th>
                                    <th class="text-end">AMOUNT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <div class="fw-600">MacBook Pro 15 inch</div>
                                        <div class="text-muted fs-12px">5 minutes ago</div>
                                    </td>
                                    <td class="text-center"><span class="badge bg-success bg-opacity-15 text-success">Success</span></td>
                                    <td class="text-end fw-600">$1,699.00</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        <div class="fw-600">Apple Watch 5 series</div>
                                        <div class="text-muted fs-12px">5 minutes ago</div>
                                    </td>
                                    <td class="text-center"><span class="badge bg-success bg-opacity-15 text-success">Success</span></td>
                                    <td class="text-end fw-600">$699.00</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                        <div class="fw-600">iPhone 11 Pro Max</div>
                                        <div class="text-muted fs-12px">12 minutes ago</div>
                                    </td>
                                    <td class="text-center"><span class="badge bg-warning bg-opacity-15 text-warning">Pending</span></td>
                                    <td class="text-end fw-600">$1,299.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END row -->
</div>
@endsection

@section('page-js')
    <!-- Memuat plugin ApexCharts dan script demo bawaan agar grafik muncul -->
@section('page-js')
    <script src="{{ asset('assets/admin/plugins/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/demo/dashboard.demo.js') }}"></script>
@endsection

