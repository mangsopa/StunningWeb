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
                                        <h4>Stunning Management</h4>
                                        <span>indikator kondisi gagal tumbuh pada anak berusia dibawah lima tahun
                                            (balita)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('admin.index') }}"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Stunning</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success background-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="icofont icofont-close-line-circled text-white"></i>
                            </button>
                            <strong> {{ session('success') }}</strong>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger background-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="icofont icofont-close-line-circled text-white"></i>
                            </button>
                            @foreach ($errors->all() as $error)
                                <strong>{{ $error }}</strong>
                            @endforeach
                        </div>
                    @endif

                    <div class="m-b-15">
                        <x-nav-link :href="route('admin.stunnings.create')"
                            class="
                        inline-flex w-full items-center px-4 py-3 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-center justify-center text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            {{ __('+ Add') }}
                        </x-nav-link>
                        {{-- <a href="{{ route('admin.stunnings.create') }}"
                            class="btn btn-primary rounded-xl bg-blue-700 w-full btn-outline-default waves-effect md-trigger"
                           + Add</a> --}}
                        {{-- @include('components.modal.stunnings.add') --}}
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
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Jenis Kelamin</th>
                                                        <th scope="col">Tanggal Lahir</th>
                                                        <th scope="col">Nama Ayah</th>
                                                        <th scope="col">Nama Ibu</th>
                                                        <th scope="col">Berat Badan</th>
                                                        <th scope="col">Tinggi Badan</th>
                                                        <th scope="col">Asupan Gizi</th>
                                                        <th scope="col">Status Kesehatan</th>
                                                        <th scope="col" class="col-1"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($Stunnings as $data)
                                                        <tr>
                                                            <td scope="row">{{ $loop->iteration }}</td>
                                                            <td>{{ $data->name }}</td>
                                                            <td>{{ $data->gender }}</td>
                                                            <td>{{ date('d-m-Y', strtotime($data->tanggal_lahir)) }}
                                                            </td>
                                                            <td>{{ $data->nama_ayah }}</td>
                                                            <td>{{ $data->nama_ibu }}</td>
                                                            <td>{{ $data->berat_badan }} Kg</td>
                                                            <td>{{ $data->tinggi_badan }} Cm</td>
                                                            <td>
                                                                @if ($data->asupan_gizi === 'Terpenuhi')
                                                                    <div class="label-main text-lg">
                                                                        <label class="label label-inverse">Cukup</label>
                                                                    </div>
                                                                @else
                                                                    <div class="label-main">
                                                                        <label class="label label-inverse-primary">Tidak
                                                                            Cukup</label>
                                                                    </div>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if ($data->status_kesehatan == 'true')
                                                                    <div class="label-main text-lg">
                                                                        <label class="label label-inverse">Sehat</label>
                                                                    </div>
                                                                @else
                                                                    <div class="label-main">
                                                                        <label
                                                                            class="label label-inverse-primary">Kurang
                                                                            Sehat</label>
                                                                    </div>
                                                                @endif
                                                            </td>

                                                            <td>
                                                                <div class="dropdown-primary dropdown">
                                                                    <button data-toggle="dropdown"
                                                                        class="inline-flex items-center py-2 px-2 text-sm font-medium text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                                                        <i class="ti-more-alt"></i>
                                                                    </button>

                                                                    <ul class="show-notification notification-view dropdown-menu"
                                                                        data-dropdown-in="fadeIn">

                                                                        <a class="dropdown-item"
                                                                            href="{{ route('admin.stunnings.indicators.index', $data->id) }}">Cek
                                                                            Indikators</a>

                                                                        <button type="button"
                                                                            class="btn block w-full px-4 py-2 text-start text-md leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out waves-effect md-trigger"
                                                                            data-modal="modal-edit{{ $data->id }}">{{ __('Edit') }}</button>

                                                                        <button type="button"
                                                                            class="btn block w-full alert-delete text-red-700 px-4 py-2 text-start text-md leading-5 hover:bg-red-300 focus:bg-red-100"
                                                                            onclick="confirmDelete('{{ route('admin.stunnings.destroy', $data->id) }}')">Delete</button>
                                                                    </ul>
                                                                    @include('components.modal.stunning-item.edit')
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
