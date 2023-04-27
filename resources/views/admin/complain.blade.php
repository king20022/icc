<x-app-layout>
    <div class="contents">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="breadcrumb-main application-ui mb-30">
                        <div class="breadcrumb-action d-flex">
                            <div class="d-flex align-items-center user-member__title mr-sm-25 mr-0">
                                <h4 class="text-capitalize fw-500 breadcrumb-title">Complaint</h4>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="projects-tab-content mb-30">



                    <div class="row">
                        <!-- ends: col-->
                        <div class="col-xxl-8 col-lg-12 mb-25">
                            <div class="card h-100">
                                <div class="card-header py-sm-20 py-3  px-sm-25 px-3 ">
                                    <h6>Complains</h6>
                                </div>
                                <div class="card-body">
                                    <div class="about-projects">
                                        <div class="about-projects__details">

                                            @foreach ($user as $sinleuser)
                                                <p class="fs-15 mb-25"> {{ $singleuser->street }}</p>
                                            @endforeach

                                        </div>

                                    </div>
                                </div>
                                <!-- ends: col -->
                            </div>
                            <!-- ends: .card -->

                        </div>
                    </div>

                </div>




            </div>
        </div>
</x-app-layout>
{{--  --}}
