<x-app-layout>
    <div class="contents">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Dashboard</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            {{-- <div class="action-btn">

                                <div class="form-group mb-0">
                                    <div class="input-container icon-left position-relative">
                                        <span class="input-icon icon-left">
                                            <span data-feather="calendar"></span>
                                        </span>
                                        <input type="text" class="form-control form-control-default date-ranger"
                                            name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                                        <span class="input-icon icon-right">
                                            <span data-feather="chevron-down"></span>
                                        </span>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="dropdown action-btn">
                                <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button"
                                    id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="la la-download"></i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <span class="dropdown-item">Export With</span>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="la la-print"></i> Printer</a>
                                    <a href="#" class="dropdown-item">
                                        <i class="la la-file-pdf"></i> PDF</a>
                                    <a href="#" class="dropdown-item">
                                        <i class="la la-file-text"></i> Google Sheets</a>
                                    <a href="#" class="dropdown-item">
                                        <i class="la la-file-excel"></i> Excel (XLSX)</a>
                                    <a href="#" class="dropdown-item">
                                        <i class="la la-file-csv"></i> CSV</a>
                                </div>
                            </div>
                            <div class="dropdown action-btn">
                                <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button"
                                    id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="la la-share"></i> Share
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                    <span class="dropdown-item">Share Link</span>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="la la-facebook"></i> Facebook</a>
                                    <a href="#" class="dropdown-item">
                                        <i class="la la-twitter"></i> Twitter</a>
                                    <a href="#" class="dropdown-item">
                                        <i class="la la-google"></i> Google</a>
                                    <a href="#" class="dropdown-item">
                                        <i class="la la-feed"></i> Feed</a>
                                    <a href="#" class="dropdown-item">
                                        <i class="la la-instagram"></i> Instagram</a>
                                </div>
                            </div>
                            <div class="action-btn">
                                <a href="#" class="btn btn-sm btn-primary btn-add">
                                    <i class="la la-plus"></i> Add New</a>
                            </div> --}}
                        </div>
                    </div>

                </div>
                <div class="col-xxl-6 col-12">
                    <div class="row">
                        <div class="col-md-6 mb-25">
                            <div class="forcast-cardbox">
                                <h6 class="forcast-title">Net Profit</h6>
                                <div class="forcast-details">
                                    <h1 class="forcast-value">$42.5k</h1>
                                    <p class="forcast-status">
                                        <span class="percentage color-success">
                                            <span data-feather="arrow-up"></span>
                                            <span>25%</span>
                                        </span>
                                        <span class="forcast-text">Since last month</span>
                                    </p>
                                </div>
                                <div class="forcast__chart">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="lineChartforcastOne"></canvas>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!-- ends: .forcast-cardbox -->
                        </div>
                        {{-- <div class="col-md-6 mb-25">
                            <div class="forcast-cardbox">
                                <h6 class="forcast-title">Gross Profit</h6>
                                <div class="forcast-details">
                                    <h1 class="forcast-value">$82.24k</h1>
                                    <p class="forcast-status">
                                        <span class="percentage color-danger">
                                            <span data-feather="arrow-up"></span>
                                            <span>8%</span>
                                        </span>
                                        <span class="forcast-text">Since last month</span>
                                    </p>
                                </div>
                                <div class="forcast__chart">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="lineChartforcastTwo"></canvas>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!-- ends: .forcast-cardbox -->
                        </div> --}}

                    </div>
                </div>


            </div>
        </div>

    </div>
</x-app-layout>
