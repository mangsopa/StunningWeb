<x-admin-layout>
    <x-slot name="header">
        <div class="pcoded-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Permission Management</h4>
                                        <span>Membatasi akses role user pada halaman tertentu</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('admin.index') }}"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Permission</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="m-b-15">
                        <button type="button"
                            class="btn btn-primary rounded-xl bg-blue-700 w-full btn-outline-default waves-effect md-trigger"
                            data-modal="modal-1">+ Add</button>

                        @include('components.modal.permission.add')

                    </div>

                    <!-- Page-header end -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Alternative Pagination table start -->
                                <div class="card">
                                    <div class="card-block ">
                                        <div class="dt-responsive dt-responsive">
                                            <table id="dom-jqry" class="table table-nowrap mb-0">
                                                <thead class="bg-primary items-center font-extrabold">
                                                    <tr>
                                                        <th class="col-1">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Guad Name</th>
                                                        <th scope="col">Description</th>
                                                        {{-- <th>Action</th> --}}
                                                        <th scope="col" class="col-1"></th>
                                                        {{-- <th> </th> --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($permissions as $data)
                                                        <tr>
                                                            <td scope="row">{{ $loop->iteration }}</td>
                                                            <td>{{ $data->name }}</td>
                                                            <td>{{ $data->guard_name }}</td>
                                                            <td>{{ $data->descriptions }}</td>
                                                            <td>
                                                                <div class="dropdown-primary dropdown">
                                                                    <button data-toggle="dropdown"
                                                                        class="inline-flex items-center py-2 px-2 text-sm font-medium text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                                                        <i class="ti-more-alt"></i>
                                                                    </button>

                                                                    <ul class="show-notification notification-view dropdown-menu"
                                                                        data-dropdown-in="fadeIn">
                                                                        <li>
                                                                            <button type="button"
                                                                                class="btn block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out waves-effect md-trigger"
                                                                                data-modal="modal-edit{{ $data->id }}">{{ __('Edit') }}</button>

                                                                            <button type="button"
                                                                                class="btn block w-full alert-delete text-red-700 px-4 py-2 text-start text-md leading-5 hover:bg-red-300 focus:bg-red-100"
                                                                                onclick="confirmDelete('{{ route('admin.permissions.destroy', $data->id) }}')">Delete</button>
                                                                        </li>
                                                                    </ul>
                                                                    @include('components.modal.permission.edit')
                                                                </div>
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Alternative Pagination table end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-admin-layout>
