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
                                                    <span class="userDatatable-title">Name</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Email</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Recovery Balance</span>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>


                                            @foreach ($users as $user)
                                                <tr>

                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $user->name }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $user->email }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            $ {{ $user->profit }}

                                                        </div>
                                                    </td>

                                                    <td>
                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                            <li>
                                                                {{-- @if ($user->complaints->count() > 0) --}}
                                                                <a href="{{ route('edit', $user->id) }}" class="view">
                                                                    <span data-feather="eye"></span>
                                                                </a>
                                                            {{-- @else
                                                               None
                                                            @endif --}}
                                                            </li>

                                                            <li>
                                                                <a href="#" class="remove">
                                                                    <span data-feather="trash-2"></span></a>
                                                            </li>
                                                        </ul>
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
{{--  --}}
