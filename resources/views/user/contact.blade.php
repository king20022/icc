<x-app-layout>

    <body class="layout-light side-menu overlayScroll">
        <main class="main-content">
            <div class="contents">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="contact-breadcrumb breadcrumb-modal3">

                                <div class="breadcrumb-main add-contact justify-content-sm-between ">
                                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">



                                    </div>
                                    <div class="action-btn">
                                        <a href="#" class="btn px-15 btn-primary" data-toggle="modal"
                                            data-target="#add-contact">
                                            <i class="las la-plus fs-16"></i>Add New
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal fade add-contact" id="add-contact" role="dialog"
                                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content radius-xl">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title fw-500" id="staticBackdropLabel">File A
                                                            Complain</h6>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span data-feather="x"></span>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        @foreach ($errors->all() as $err)
                                                            <label for="edit page"></label>
                                                            <p class="text-danger text-center">{{ $err }}</p>
                                                        @endforeach
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="add-new-contact">
                                                            <form action="{{ route('complaint') }}" method="POST">
                                                                @csrf
                                                                <div class="form-group mb-20">
                                                                    <label>Investment Organization</label>
                                                                    <input type="text" name="organize"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Investment Organization">
                                                                </div>
                                                                <div class="form-group mb-20">
                                                                    <label>Year of Enrollment</label>
                                                                    <input type="text" name="enroll"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Year of Enrollment">
                                                                </div>
                                                                <div class="form-group mb-20">
                                                                    <label>Invested Amount</label>
                                                                    <input type="text" name="amount"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Invested Amount">
                                                                </div>
                                                                <div class="form-group mb-20">
                                                                    <label>Duration of investment</label>
                                                                    <input type="text" name="investment"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Duration of investment">
                                                                </div>
                                                                <div class="form-group mb-20">
                                                                    <label>Phone Number</label>
                                                                    <input type="text" name="number"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Phone Number">
                                                                </div>
                                                                <div class="form-group mb-20">
                                                                    <label>Add Note</label>
                                                                    <textarea name="complaint" placeholder="Add Note" class="form-control form-control-lg" cols="30" rows="10"></textarea>

                                                                </div>

                                                                <div class="button-group d-flex pt-20">



                                                                    <button
                                                                        class="btn btn-primary btn-default btn-squared ">Submit
                                                                    </button>





                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal -->


                                    </div>
                                </div>

                            </div>
                            <!-- ends: contact-breadcrumb -->
                        </div>
                    </div>
                    {{-- <div class="row contact-card-group">
                        <div class="col-xl-3 mb-25">
                            <div class="card contact-card">
                                <div class="card-body text-center pt-30 px-25 pb-0">
                                    <div class="card__more-action dropdown dropdown-click">
                                        <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <span data-feather="more-horizontal"></span>
                                        </button>
                                        <div
                                            class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                            <a class="dropdown-item" href="#">view</a>
                                            <a class="dropdown-item" href="#">edit</a>
                                            <a class="dropdown-item" href="#">delete</a>
                                        </div>
                                    </div>

                                    <div class="contact-profile-card text-center">
                                        <div class="cp-img d-flex justify-content-center">
                                            <img class="cp-img__main" src="img/tm9.png" alt="Strikingdash Contact">
                                        </div>
                                        <div class="cp-info">
                                            <h6 class="cp-info__title">Grant Marshall</h6>
                                            <span class="cp-info__designation">User Interface Designer</span>
                                        </div>
                                    </div>

                                    <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                        <ul class="c-info-list">

                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="phone"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    +1 (861) 550-2796
                                                </p>
                                            </li>


                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="mail"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    marshall@yahoo.com
                                                </p>
                                            </li>


                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="map-pin"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    225 Bills Place
                                                </p>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end: card -->
                        </div>
                        <!-- ends: col-xl-3 -->
                        <div class="col-xl-3 mb-25">
                            <div class="card contact-card">
                                <div class="card-body text-center pt-30 px-25 pb-0">
                                    <div class="card__more-action dropdown dropdown-click">
                                        <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <span data-feather="more-horizontal"></span>
                                        </button>
                                        <div
                                            class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                            <a class="dropdown-item" href="#">view</a>
                                            <a class="dropdown-item" href="#">edit</a>
                                            <a class="dropdown-item" href="#">delete</a>
                                        </div>
                                    </div>

                                    <div class="contact-profile-card text-center">
                                        <div class="cp-img d-flex justify-content-center">
                                            <img class="cp-img__main" src="img/tm10.png" alt="Strikingdash Contact">
                                        </div>
                                        <div class="cp-info">
                                            <h6 class="cp-info__title">Pena Valdez</h6>
                                            <span class="cp-info__designation">User Interface Designer</span>
                                        </div>
                                    </div>

                                    <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                        <ul class="c-info-list">

                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="phone"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    +1 (909) 445-2527
                                                </p>
                                            </li>


                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="mail"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    valdez@yahoo.com
                                                </p>
                                            </li>


                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="map-pin"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    266 Tiffany Place
                                                </p>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end: card -->
                        </div>
                        <!-- ends: col-xl-3 -->
                        <div class="col-xl-3 mb-25">
                            <div class="card contact-card">
                                <div class="card-body text-center pt-30 px-25 pb-0">
                                    <div class="card__more-action dropdown dropdown-click">
                                        <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <span data-feather="more-horizontal"></span>
                                        </button>
                                        <div
                                            class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                            <a class="dropdown-item" href="#">view</a>
                                            <a class="dropdown-item" href="#">edit</a>
                                            <a class="dropdown-item" href="#">delete</a>
                                        </div>
                                    </div>

                                    <div class="contact-profile-card text-center">
                                        <div class="cp-img d-flex justify-content-center">
                                            <img class="cp-img__main" src="img/tm11.png" alt="Strikingdash Contact">
                                        </div>
                                        <div class="cp-info">
                                            <h6 class="cp-info__title">Jessica Miles</h6>
                                            <span class="cp-info__designation">Product Designer</span>
                                        </div>
                                    </div>

                                    <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                        <ul class="c-info-list">

                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="phone"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    +1 (824) 487-2755
                                                </p>
                                            </li>


                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="mail"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    miles@mail.com
                                                </p>
                                            </li>


                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="map-pin"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    240 Hillel Place
                                                </p>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end: card -->
                        </div>
                        <!-- ends: col-xl-3 -->
                        <div class="col-xl-3 mb-25">
                            <div class="card contact-card">
                                <div class="card-body text-center pt-30 px-25 pb-0">
                                    <div class="card__more-action dropdown dropdown-click">
                                        <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <span data-feather="more-horizontal"></span>
                                        </button>
                                        <div
                                            class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                            <a class="dropdown-item" href="#">view</a>
                                            <a class="dropdown-item" href="#">edit</a>
                                            <a class="dropdown-item" href="#">delete</a>
                                        </div>
                                    </div>

                                    <div class="contact-profile-card text-center">
                                        <div class="cp-img d-flex justify-content-center">
                                            <img class="cp-img__main" src="img/tm12.png" alt="Strikingdash Contact">
                                        </div>
                                        <div class="cp-info">
                                            <h6 class="cp-info__title">Natasha Gamble</h6>
                                            <span class="cp-info__designation">Motion Designer</span>
                                        </div>
                                    </div>

                                    <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                        <ul class="c-info-list">

                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="phone"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    +1 (980) 424-3729
                                                </p>
                                            </li>


                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="mail"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    gamble@outlook.com
                                                </p>
                                            </li>


                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="map-pin"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    463 Harbor Court
                                                </p>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end: card -->
                        </div>
                        <!-- ends: col-xl-3 -->
                        <div class="col-xl-3 mb-25">
                            <div class="card contact-card">
                                <div class="card-body text-center pt-30 px-25 pb-0">
                                    <div class="card__more-action dropdown dropdown-click">
                                        <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <span data-feather="more-horizontal"></span>
                                        </button>
                                        <div
                                            class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                            <a class="dropdown-item" href="#">view</a>
                                            <a class="dropdown-item" href="#">edit</a>
                                            <a class="dropdown-item" href="#">delete</a>
                                        </div>
                                    </div>

                                    <div class="contact-profile-card text-center">
                                        <div class="cp-img d-flex justify-content-center">
                                            <img class="cp-img__main" src="img/tm13.png" alt="Strikingdash Contact">
                                        </div>
                                        <div class="cp-info">
                                            <h6 class="cp-info__title">Natasha Gamble</h6>
                                            <span class="cp-info__designation">Motion Designer</span>
                                        </div>
                                    </div>

                                    <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                        <ul class="c-info-list">

                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="phone"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    +1 (980) 424-3729
                                                </p>
                                            </li>


                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="mail"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    gamble@outlook.com
                                                </p>
                                            </li>


                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="map-pin"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    463 Harbor Court
                                                </p>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end: card -->
                        </div>
                        <!-- ends: col-xl-3 -->
                        <div class="col-xl-3 mb-25">
                            <div class="card contact-card">
                                <div class="card-body text-center pt-30 px-25 pb-0">
                                    <div class="card__more-action dropdown dropdown-click">
                                        <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <span data-feather="more-horizontal"></span>
                                        </button>
                                        <div
                                            class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                            <a class="dropdown-item" href="#">view</a>
                                            <a class="dropdown-item" href="#">edit</a>
                                            <a class="dropdown-item" href="#">delete</a>
                                        </div>
                                    </div>

                                    <div class="contact-profile-card text-center">
                                        <div class="cp-img d-flex justify-content-center">
                                            <img class="cp-img__main" src="img/tm14.png" alt="Strikingdash Contact">
                                        </div>
                                        <div class="cp-info">
                                            <h6 class="cp-info__title">Natasha Gamble</h6>
                                            <span class="cp-info__designation">Motion Designer</span>
                                        </div>
                                    </div>

                                    <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                        <ul class="c-info-list">

                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="phone"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    +1 (980) 424-3729
                                                </p>
                                            </li>


                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="mail"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    gamble@outlook.com
                                                </p>
                                            </li>


                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="map-pin"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    463 Harbor Court
                                                </p>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end: card -->
                        </div>
                        <!-- ends: col-xl-3 -->
                        <div class="col-xl-3 mb-25">
                            <div class="card contact-card">
                                <div class="card-body text-center pt-30 px-25 pb-0">
                                    <div class="card__more-action dropdown dropdown-click">
                                        <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <span data-feather="more-horizontal"></span>
                                        </button>
                                        <div
                                            class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                            <a class="dropdown-item" href="#">view</a>
                                            <a class="dropdown-item" href="#">edit</a>
                                            <a class="dropdown-item" href="#">delete</a>
                                        </div>
                                    </div>

                                    <div class="contact-profile-card text-center">
                                        <div class="cp-img d-flex justify-content-center">
                                            <img class="cp-img__main" src="img/tm6.png" alt="Strikingdash Contact">
                                        </div>
                                        <div class="cp-info">
                                            <h6 class="cp-info__title">Natasha Gamble</h6>
                                            <span class="cp-info__designation">Motion Designer</span>
                                        </div>
                                    </div>

                                    <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                        <ul class="c-info-list">

                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="phone"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    +1 (980) 424-3729
                                                </p>
                                            </li>


                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="mail"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    gamble@outlook.com
                                                </p>
                                            </li>


                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="map-pin"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    463 Harbor Court
                                                </p>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end: card -->
                        </div>
                        <!-- ends: col-xl-3 -->
                        <div class="col-xl-3 mb-25">
                            <div class="card contact-card">
                                <div class="card-body text-center pt-30 px-25 pb-0">
                                    <div class="card__more-action dropdown dropdown-click">
                                        <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <span data-feather="more-horizontal"></span>
                                        </button>
                                        <div
                                            class="dropdown-default dropdown-menu dropdown-bottomLeft dropdown-menu-right">
                                            <a class="dropdown-item" href="#">view</a>
                                            <a class="dropdown-item" href="#">edit</a>
                                            <a class="dropdown-item" href="#">delete</a>
                                        </div>
                                    </div>

                                    <div class="contact-profile-card text-center">
                                        <div class="cp-img d-flex justify-content-center">
                                            <img class="cp-img__main" src="img/tm5.png" alt="Strikingdash Contact">
                                        </div>
                                        <div class="cp-info">
                                            <h6 class="cp-info__title">Natasha Gamble</h6>
                                            <span class="cp-info__designation">Motion Designer</span>
                                        </div>
                                    </div>

                                    <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                        <ul class="c-info-list">

                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="phone"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    +1 (980) 424-3729
                                                </p>
                                            </li>


                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="mail"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    gamble@outlook.com
                                                </p>
                                            </li>


                                            <li class="c-info-list__item d-flex">
                                                <div class="c-info-item-icon">
                                                    <span data-feather="map-pin"></span>
                                                </div>
                                                <p class="c-info-item-text">
                                                    463 Harbor Court
                                                </p>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end: card -->
                        </div>
                        <!-- ends: col-xl-3 -->
                    </div> --}}
                </div>

            </div>
        </main>


    </body>
</x-app-layout>
{{--  --}}
