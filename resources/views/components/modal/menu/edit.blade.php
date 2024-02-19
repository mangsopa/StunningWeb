<!-- Modal -->
<div class="md-modal md-effect-11" id="modal-edit{{ $data->id }}" style="z-index: 5;">
      <div class="md-content">
          <h3 class="text-2xl">Edit Role</h3>
          <div>
              <form method="POST" action="{{ route('admin.menus.update', $data->id) }}">
                  @csrf
                  @method('PUT')
  
                  <div class="py-4 px-4 text-black text-2lg">
                      <!-- Name Role -->
                      <div>
                          <x-input-label for="name" :value="__('Name')" />
                          <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                              :value="$data->name" required autofocus autocomplete="name" />
                          <x-input-error :messages="$errors->get('name')" class="mt-2" />
                      </div>

                      <div class="mt-4">
                          <x-input-label for="permission_name" :value="__('Permission Name')" />
                          <select class="js-example-data-array" name="permission_name" id="permission_name">
                              @foreach ($permissions as $permission)
                            <option @selected($data->permission_name == $permission->name) value="{{ $permission->name }}">{{ $permission->name }}</option>
                            @endforeach
                          </select>
                          <x-input-error :messages="$errors->get('permission_name')" />
                      </div>

                       <!-- Switch Role -->
                       <div class="mt-10">
                        <x-input-label for="status" :value="__('Status')" />
                        <input type="checkbox" class="js-single" id="status" name="status" value="1" @checked($data->status)>
                        <x-input-error :messages="$errors->get('status')" />
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
  