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
                                          <li class="breadcrumb-item"><a href="#!">Add Stunning</a> </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
  
                      <!-- Page body start -->
                      <div class="page-body">
                          <div class="row">
                              <div class="col-sm-12">
                                  <!-- Basic Inputs Validation start -->
                                  <div class="card">
                                      <div class="card-header">
                                          <h5>Basic Inputs Validation</h5>
                                          <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code>
                                              tag</span>
  
                                      </div>
                                      <div class="card-block">
                                          <form method="POST" action="{{ route('admin.stunnings.store') }}" enctype="multipart/form-data">
                                              @csrf
  
                                              <div class="py-4 px-4 text-black text-2lg">
                                                  <!-- Nama -->
                                                  <div class="row">
                                                      <x-input-label for="name" :value="__('Nama')" />
                                                      <x-text-input id="name" class="block mt-1 w-full"
                                                          type="text" name="name" :value="old('name')" required
                                                          autofocus autocomplete="name" />
                                                      <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                                  </div>
  
                                                  <!-- Gender -->
                                                  <div class="mt-4">
                                                      <x-input-label for="gender" :value="__('Jenis Kelamin')" />
                                                      <select name="gender"
                                                          class="form-control form-control-inverse">
                                                          <option value="Laki-Laki">Laki-Laki</option>
                                                          <option value="Perempuan">Perempuan</option>
                                                      </select>
                                                      <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                                                  </div>
  
                                                  <!-- Tanggal Lahir -->
                                                  <div class="mt-4">
                                                      <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
                                                      <input class="form-control" type="date" name="tanggal_lahir"
                                                          id="tanggal_lahir">
                                                      <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
                                                  </div>
  
                                                  <!-- Nama Ayah -->
                                                  <div class="mt-4">
                                                      <x-input-label for="nama_ayah" :value="__('Nama Ayah')" />
                                                      <x-text-input class="block mt-1 w-full"
                                                          type="text" name="nama_ayah" :value="old('nama_ayah')" required
                                                          autofocus autocomplete="nama_ayah" />
                                                      <x-input-error :messages="$errors->get('nama_ayah')" class="mt-2" />
                                                  </div>
  
                                                  <!-- Nama Ibu -->
                                                  <div class="mt-4">
                                                      <x-input-label for="nama_ibu" :value="__('Nama Ibu')" />
                                                      <x-text-input class="block mt-1 w-full"
                                                          type="text" name="nama_ibu" :value="old('nama_ibu')" required
                                                          autofocus autocomplete="nama_ibu" />
                                                      <x-input-error :messages="$errors->get('nama_ibu')" class="mt-2" />
                                                  </div>
  
                                                  <!-- Berat Badan -->
                                                  <div class="mt-4">
                                                      <x-input-label for="berat_badan" :value="__('Berat Badan')" />
                                                      <x-text-input class="block mt-1 w-full"
                                                          type="number" name="berat_badan" :value="old('berat_badan')" required
                                                          autofocus autocomplete="berat_badan" />
                                                      <x-input-error :messages="$errors->get('berat_badan')" class="mt-2" />
                                                  </div>
  
                                                  <!-- Tinggi Badan -->
                                                  <div class="mt-4">
                                                      <x-input-label for="tinggi_badan" :value="__('Tinggi Badan')" />
                                                      <x-text-input
                                                      class="block mt-1 w-full" type="number"
                                                      name="tinggi_badan" :value="old('tinggi_badan')" required
                                                      autofocus autocomplete="tinggi_badan" />
                                                      <x-input-error :messages="$errors->get('tinggi_badan')" class="mt-2" />
                                                  </div>
  
                                                  <!-- Asupan Gizi -->
                                                  <div class="mt-4">
                                                        <x-input-label for="asupan_gizi" :value="__('Asupan Gizi')" />
                                                        <select id="asupan_gizi" name="asupan_gizi"
                                                            class="form-control form-control-inverse">
                                                            <option value="Terpenuhi">Cukup</option>
                                                            <option value="Tidak-Terpenuhi">Tidak Cukup</option>
                                                        </select>
                                                      <x-input-error :messages="$errors->get('asupan_gizi')" class="mt-2" />
                                                  </div>
  
                                                  <!-- Status Kesehatan -->
                                                  <div class="mt-4">
                                                        <x-input-label for="status_kesehatan" :value="__('Status Kesehatan')" />
                                                        <select id="status_kesehatan" name="status_kesehatan"
                                                            class="form-control form-control-inverse">
                                                            <option value="1">Sehat</option>
                                                            <option value="0">Kurang Sehat</option>
                                                        </select>
                                                      <x-input-error :messages="$errors->get('status_kesehatan')" class="mt-2" />
                                                  </div>
  
                                                  <!-- Tombol Simpan dan Tutup Modal -->
                                                  <div class="row">
                                                      <div class="flex justify-items-end space-x-5 px-3">
                                                          <x-primary-button class="mt-5">
                                                              {{ __('Save') }}
                                                          </x-primary-button>
                                                          <button type="button"
                                                              class="btn btn-primary waves-effect md-close mt-5"
                                                              style="color: #6B05F9;">Close</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                                  <!-- Basic Inputs Validation end -->
                              </div>
                          </div>
                      </div>
                      <!-- Page body end -->
                  </div>
              </div>
          </div>
      </x-slot>
  
  
  </x-admin-layout>
  