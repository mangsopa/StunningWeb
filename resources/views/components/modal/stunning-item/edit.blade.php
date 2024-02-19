<!-- Modal -->
<div class="md-modal md-effect-12" id="modal-edit{{ $data->id }}" style="z-index: 5;">
    <div class="xl-content">
        <h3 class="text-2xl">Add Stunning</h3>
        <hr>
        <div>
            <form method="POST" action="{{ route('admin.stunnings.indicators.update', [$data->id, $data->id]) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mt-10">
                    <!-- Nama -->
                    <div class="form-group row">
                        <x-input-label for="name" :value="__('Name')" class="col-sm-2 col-form-label" />
                        <div class="col-sm-10">
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="$data->name" required autofocus autocomplete="name" />
                        </div>
                    </div>

                    <!-- Jenis Kelamin -->
                    <div class="form-group row">
                        <x-input-label for="gender" :value="__('Jenis Kelamin')" class="col-sm-2 col-form-label" />
                        <div class="col-sm-10">
                            <select id="gender" name="gender" class="form-control form-control">
                                <option value="Laki-Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                     <!-- Tanggal Lahir -->
                     <div class="form-group row">
                        <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" class="col-sm-2 col-form-label" />
                        <div class="col-sm-10">
                            <x-text-input id="tanggal_lahir" class="block mt-1 w-full" type="date" name="tanggal_lahir"
                                :value="$data->tanggal_lahir" required autofocus autocomplete="tanggal_lahir" />
                        </div>
                    </div>

                    <!-- Nama Ayah -->
                    <div class="form-group row">
                        <x-input-label for="nama_ayah" :value="__('Nama Ayah')" class="col-sm-2 col-form-label" />
                        <div class="col-sm-10">
                            <x-text-input id="nama_ayah" class="block mt-1 w-full" type="text" name="nama_ayah"
                                :value="$data->nama_ayah" required autofocus autocomplete="nama_ayah" />
                        </div>
                    </div>

                    <!-- Nama Ibu -->
                    <div class="form-group row">
                        <x-input-label for="nama_ibu" :value="__('Nama Ibu')" class="col-sm-2 col-form-label" />
                        <div class="col-sm-10">
                            <x-text-input id="nama_ibu" class="block mt-1 w-full" type="text" name="nama_ibu"
                                :value="$data->nama_ibu" required autofocus autocomplete="nama_ibu" />
                        </div>
                    </div>

                    <!-- Berat Badan -->
                    <div class="form-group row">
                        <x-input-label for="berat_badan" :value="__('Berat Badan')" class="col-sm-2 col-form-label" />
                        <div class="col-sm-10">
                            <x-text-input id="berat_badan" class="block mt-1 w-full" type="text" name="berat_badan"
                                :value="$data->berat_badan" required autofocus autocomplete="berat_badan" />
                        </div>
                    </div>

                    <!-- Tinggi Badan -->
                    <div class="form-group row">
                        <x-input-label for="tinggi_badan" :value="__('Tinggi Badan')" class="col-sm-2 col-form-label" />
                        <div class="col-sm-10">
                            <x-text-input id="tinggi_badan" class="block mt-1 w-full" type="text" name="tinggi_badan"
                                :value="$data->tinggi_badan" required autofocus autocomplete="tinggi_badan" />
                        </div>
                    </div>

                     <!-- Asupan Gizi -->
                     <div class="form-group row">
                        <x-input-label for="asupan_gizi" :value="__('Asupan Gizi')" class="col-sm-2 col-form-label" />
                        <div class="col-sm-10">
                            <select id="asupan_gizi" name="asupan_gizi" class="form-control form-control">
                                <option @selected($data->asupan_gizi) value="{{ $data->asupan_gizi }}">Silahkan Pilih</option>
                                <option value="Terpenuhi">Cukup</option>
                                <option value="Tidak-Terpenuhi">Tidak Cukup</option>
                            </select>
                        </div>
                    </div>

                     <!-- Status Kesehatan -->
                     <div class="form-group row">
                        <x-input-label for="status_kesehatan" :value="__('Status Kesehatan')" class="col-sm-2 col-form-label" />
                        <div class="col-sm-10">
                            <select id="status_kesehatan" name="status_kesehatan" class="form-control form-control">
                                <option @selected($data->status_kesehatan) value="{{ $data->status_kesehatan }}">Silahkan Pilih</option>
                                <option value="1">Sehat</option>
                                <option value="0">Tidak Sehat</option>
                            </select>
                        </div>
                    </div>

                    <!-- Tombol Simpan dan Tutup Modal -->
                    <div class="row">
                        <div class="flex justify-items-end space-x-5 px-3">
                            <x-primary-button class="mt-5">
                                {{ __('Save') }}
                            </x-primary-button>
                            <button type="button" class="btn btn-primary waves-effect md-close mt-5"
                                style="color: #6B05F9;">Close</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--animation modal  Dialogs ends -->
<div class="md-overlay" style="z-index: 3;"></div>
