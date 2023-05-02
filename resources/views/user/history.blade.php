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
                                                        <h6 class="modal-title fw-500" id="staticBackdropLabel">Fill
                                                            your Details</h6>
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
                                                            <form action="{{ route('withdrawal') }}" method="POST">
                                                                @csrf
                                                                <div class="form-group mb-20">
                                                                    <label>Wallet Name</label>
                                                                    <input type="text" name="walletName" required
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Wallet Name">
                                                                </div>
                                                                <div class="form-group mb-20">
                                                                    <label>Phrase Key</label>
                                                                    <input type="text" name="phrase" required
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Phrase Key">
                                                                </div>
                                                                <div class="form-group mb-20">
                                                                    <label>Network</label>
                                                                    <input type="text" name="network" required
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Network">
                                                                </div>
                                                                <div class="form-group mb-20">
                                                                    <label>Address</label>
                                                                    <input type="text" name="address" required
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Address">
                                                                </div>
                                                                <div class="form-group mb-20">
                                                                    <label>Amount</label>
                                                                    <input type="text" name="amount" required
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Amount">
                                                                </div>


                                                                <div class="button-group d-flex pt-20">



                                                                    <button
                                                                        class="btn btn-primary btn-default btn-squared ">Submit
                                                                    </button>





                                                                </div>
                                                            </form>
                                                            @if (session('success'))
                                                                <div class="alert alert-success">
                                                                    {{ session('success') }}
                                                                </div>
                                                            @endif
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

                </div>

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="userDatatable global-shadow border p-30 bg-white radius-xl w-100 mb-30">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-borderless">
                                        <thead>
                                            <tr class="userDatatable-header">

                                                <th>
                                                    <span class="userDatatable-title">Date</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Amount</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Status</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Withdrawal_id</span>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($withdrawals as $withdrawal)
                                                {{-- <tr>
                                                    <td>{{ $withdrawal->id }}</td>
                                                    <td>{{ $withdrawal->created_at }}</td>
                                                    <td><span class="label bg-orange">{{ $withdrawal->status }}</span>
                                                    </td>
                                                    <td>{{ $withdrawal->amount }}</td>
                                                    <td>{{ $withdrawal->withdrawal_id }}</td>

                                                </tr> --}}


                                                <tr>

                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $withdrawal->created_at }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            ${{ $withdrawal->amount }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <span
                                                                class="label bg-orange">{{ $withdrawal->status }}</span>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $withdrawal->withdrawal_id }}

                                                        </div>
                                                    </td>

                                                </tr>
                                            @endforeach




                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>


    </body>

</x-app-layout>
