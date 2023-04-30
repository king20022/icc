<x-app-layout>
    <div class="contents">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Hi, {{Auth::user()->name}}</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">


                            <div class="action-btn">
                                <a href="{{ route ('draw')}}" class="btn btn-sm btn-primary btn-add">
                                    <i class="la la-plus"></i>Withdraw</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xxl-6 col-12">
                    <div class="row">
                        <div class="col-md-6 mb-25">
                            <div class="forcast-cardbox">
                                <h6 class="forcast-title">Recovery Balance</h6>

                                <div class="forcast-details">
                                    <h1 class="forcast-value"    >${{$user->profit }} 0</h1>

                                </div>
                                {{-- <div class="action-btn">
                                    <a href="#" class=" ml-4 btn btn-sm btn-primary btn-add">
                                        <i class="la la-plus"></i> Withdraw</a>
                                </div> --}}
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


                    </div>
                </div>


            </div>
        </div>

    </div>
</x-app-layout>
