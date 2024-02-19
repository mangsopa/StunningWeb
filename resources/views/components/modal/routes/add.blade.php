 <!-- animation modal Dialogs start -->
 <div class="md-modal md-effect-1" id="modal-1" style="z-index: 5;">
     <div class="md-content">
         <div class="flex justify-center">
             <h4 class="font-extrabold text-2xl m-t-15">Add Routes</h4>
         </div>
         <hr>
         <div>
             <form method="POST" action="{{ route('admin.routes.store') }}">
                 @csrf

                 <div class="py-4 px-4 text-black text-2lg">
                     <!-- Name Role -->
                     <div>
                         <x-input-label for="route" :value="__('Route Name')" />
                         <select class="js-example-basic-multiple" multiple="multiple"
                             style="z-index: 9999; position: relative;" name="route" id="route">
                             @foreach ($facadesRoutes as $facadesRoute)
                                 @if (!blank($facadesRoute->getName()))
                                     <option value="{{ $facadesRoute->getName() }}">{{ $facadesRoute->getName() }}
                                     </option>
                                 @endif
                             @endforeach
                         </select>
                         <x-input-error :messages="$errors->get('route')" class="mt-2" />
                     </div>

                     <!-- Permission Role -->
                     <div class="mt-4">
                         <x-input-label for="permission_name" :value="__('Permission Name')" />
                         <select class="js-example-basic-multiple" multiple="multiple"
                             style="z-index: 9999; position: relative;" name="permission_name" id="permission_name">
                             @foreach ($permissions as $permission)
                                 <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                             @endforeach
                         </select>
                         <x-input-error :messages="$errors->get('permission_name')" />
                     </div>

                     <!-- Deskripsi Role -->
                     <div class="mt-4">
                         <x-input-label for="description" :value="__('Description')" />
                         <textarea id="descriptions" name="description" rows="3" cols="4" class="form-control"
                             placeholder="Default textarea" :value="old('description')" type="text"></textarea>
                         <x-input-error :messages="$errors->get('description')" />
                     </div>

                     <!-- Switch Role -->
                     <div class="mt-9">
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
