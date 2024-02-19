 <!-- animation modal Dialogs start -->
 <div class="md-modal md-effect-1" id="modal-1" style="z-index: 5;">
      <div class="md-content">
          <div class="flex justify-center">
              <h4 class="font-extrabold text-2xl m-t-15">Add Menu</h4>
          </div>
          <hr>
          <div>
              <form method="POST" action="{{ route('admin.menus.items.store', $menu->id) }}">
                  @csrf
 
                  <div class="py-4 px-4 text-black text-2lg">
                      <!-- Name Role -->
                      <div>
                          <x-input-label for="name" :value="__('Name')" />
                          <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                              :value="old('name')" required autofocus autocomplete="name" />
                          <x-input-error :messages="$errors->get('name')" class="mt-2" />
                      </div>

                       <!-- Name Role -->
                       <div class="mt-4">
                        <x-input-label for="icon" :value="__('Icon')" />
                        <x-text-input id="icon" class="block mt-1 w-full" type="text" name="icon"
                            :value="old('icon')" required autofocus autocomplete="icon" />
                        <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                    </div>

                      <!-- Permission Role -->
                      <div class="mt-4 ">
                        <x-input-label for="route" :value="__('Route')" />
                        <select class="js-example-data-array" name="route" id="route">
                            @foreach ($routes as $route)
                            @if (!blank($route->getName()))
                            <option value="{{ $route->getName() }}">{{ $route->getName() }}</option>
                            @endif
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('route')" />
                    </div>
 
                      <!-- Permission Role -->
                      <div class="mt-12">
                          <x-input-label for="permission_name" :value="__('Permissions Name')" />
                          <select class="js-example-data-array " name="permission_name" id="permission_name">
                              @foreach ($permissions as $permission)
                                  <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                              @endforeach
                          </select>
                          <x-input-error :messages="$errors->get('permission_name')" />
                      </div>
 
                      <!-- Switch Role -->
                      <div class="mt-4">
                          <x-input-label for="status" :value="__('Status')" />
                          <input type="checkbox" class="js-single" name="status" value="1" id="status">
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
  <div class="md-overlay" style="z-index: 3;"></div>
 