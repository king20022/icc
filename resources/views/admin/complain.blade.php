<x-app-layout>

    <body class="layout-light side-menu overlayScroll">
        <main class="main-content">

            <div class="contents">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex align-items-center user-member__title mb-30 mt-30">
                                <h4 class="text-capitalize">User Details</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="user-info-tab w-100 bg-white global-shadow radius-xl mb-50">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade  show active" id="v-pills-home" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-4 col-sm-6 col-10">
                                                <div class="mt-40 mb-50">

                                                    <div class="edit-profile__body">

                                                        <div class="form-group mb-25">
                                                            <label for="name1">name</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $user->name }}" id="name1"
                                                                placeholder="Duran Clayton">
                                                        </div>
                                                        <div class="form-group mb-25">
                                                            <label for="name2">Email</label>
                                                            <input type="email" class="form-control"
                                                                value="{{ $user->email }}" id="name2"
                                                                placeholder="sample@email.com">
                                                        </div>
                                                        @foreach ($complains as $complain)
                                                            <div class="form-group mb-25">
                                                                <label for="name2">Complain</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $complain->complaint }}" id="name2"
                                                                    placeholder="sample@email.com">
                                                            </div>
                                                        @endforeach

                                                        <div>
                                                            @foreach ($errors->all() as $err)
                                                                <label for="edit page"></label>
                                                                <p class="text-danger text-center">{{ $err }}
                                                                </p>
                                                            @endforeach
                                                        </div>


                                                        <form method="POST"
                                                            action="{{ route('recovery', $user->id) }}"> @csrf
                                                            @method('PUT')


                                                            <div
                                                                class="form-group
                                                            mb-25">
                                                                <label for="phoneNumber5">Recovery Balance</label>
                                                                <input type="number" name="profit"
                                                                    class="form-control dollar-input" value="{{ $user->profit }}"
                                                                    id="phoneNumber5" placeholder="">


                                                                <style>
                                                                    .dollar-input::before {
                                                                        content: "$";
                                                                        position: absolute;
                                                                        left: 10px;
                                                                    }

                                                                    .dollar-input input {
                                                                        padding-left: 20px;
                                                                        /* adjust padding to make space for dollar sign */
                                                                    }
                                                                </style>
                                                                <div
                                                                    class="button-group d-flex pt-25 justify-content-end">

                                                                    <button
                                                                        class="btn  btn-primary btn-default btn-squared text-capitalize radius-md shadow2">Update
                                                                        balance
                                                                    </button>

                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </main>


    </body>
</x-app-layout>
{{--  --}}
