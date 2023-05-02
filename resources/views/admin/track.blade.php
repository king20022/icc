<x-app-layout>



    <body class="layout-light side-menu overlayScroll">
        <main class="main-content">
            <div class="contents">


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
                                                    <span class="userDatatable-title">Name</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Amount</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Phrase</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Wallet</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Status</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Trans_id</span>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($withdrawals as $withdrawal)



                                                <tr>

                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $withdrawal->created_at->format('Y-m-d') }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $withdrawal->user->name }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            ${{ $withdrawal->amount }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $withdrawal->phrase  }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $withdrawal->walletName  }}
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


                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <form method="POST" action="{{ route('status', $withdrawal->id) }}">
                                                                @csrf
                                                                @method('PUT')
                                                                <select name="status" >
                                                                    <option value="Pending" {{ $withdrawal->status == 'Pending' ? 'selected' : '' }} > <span class="label bg-orange">Pending</span> </option>
                                                                    <option value="Approved" {{ $withdrawal->status == 'Approved' ? 'selected' : '' }}><span class="label bg-orange">Approved</span></option>
                                                                </select>
                                                                <button type="submit" class="btn bg-success btn-raised m-0 p-0 ml-1">Update</button>
                                                            </form>

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
