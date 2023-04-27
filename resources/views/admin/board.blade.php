<x-app-layout>
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
                                            <div class="d-flex align-items-center">
                                                <div class="custom-checkbox  check-all">

                                                    <label for="check-3">
                                                        <span class="checkbox-text userDatatable-title">Name</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">email</span>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        @foreach ($users as $user)
                                            <td>
                                                <div class="d-flex">
                                                    <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                        <div class="checkbox-group-wrapper">
                                                            <div class="checkbox-group d-flex">
                                                                <div
                                                                    class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- <a href="#"
                                                            class="profile-image rounded-circle d-block m-0 wh-38"
                                                            style="background-image:url; background-size: cover;"></a> --}}
                                                    </div>
                                                    <div class="userDatatable-inline-title">
                                                        <a href="#" class="text-dark fw-500">
                                                            <h6> {{ $user->name }}</h6>
                                                        </a>
                                                        <p class="d-block mb-0">

                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="userDatatable-content">
                                                    {{ $user->email }}
                                                </div>
                                            </td>


                                            <td>
                                                <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                    <form
                                                        action="
                                                    ">
                                                    {{-- {{ route('complaints.edit', $complaint->id) }} --}}
                                                        <li>
                                                            <a href="{{ route('edit', $user->id) }}" class="edit">
                                                                <span data-feather="edit"></span></a>
                                                        </li>
                                                    </form>
                                                    <form
                                                        action="
                                                    ">
                                                        <li>
                                                            <a href="#" class="remove">
                                                                <span data-feather="trash-2"></span></a>
                                                        </li>
                                                    </form>
                                                </ul>
                                            </td>
                                        @endforeach

                                    </tr>








                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
{{--  --}}
