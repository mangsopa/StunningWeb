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
                                        <h4>Cek Tumbuh Kembang Anak</h4>
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

                    <!-- Page-header end -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Alternative Pagination table start -->
                                <div class="card">
                                    <div class="card-block ">
                                        <div class="p-6 m-20 bg-white rounded shadow">
                                            {!! $chart->container() !!}
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

<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}
