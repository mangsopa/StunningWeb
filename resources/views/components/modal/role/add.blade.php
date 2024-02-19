 <!-- animation modal Dialogs start -->
 <div class="md-modal md-effect-1" id="modal-1" style="z-index: 5;">
     <div class="md-content">
         <div class="flex justify-center">
             <h4 class="font-extrabold text-2xl m-t-15">Add Role</h4>
         </div>
         <hr>
         <div>
             <form method="POST" action="{{ route('admin.roles.store') }}">
                 @csrf

                 <div class="py-4 px-4 text-black text-2lg">
                     <!-- Name Role -->
                     <div>
                         <x-input-label for="name" :value="__('Name')" />
                         <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                             :value="old('name')" required autofocus autocomplete="name" />
                         <x-input-error :messages="$errors->get('name')" class="mt-2" />
                     </div>

                     <!-- Guard Role -->
                     <div class="mt-4">
                         <x-input-label for="guard" :value="__('Guard')" />
                         <x-text-input id="name" class="block mt-1 w-full" type="text" name="guard"
                             :value="old('guard')" required autofocus autocomplete="guard" />
                         <x-input-error :messages="$errors->get('guard')" class="mt-2" />
                     </div>

                     <!-- Permission Role -->
                     <div class="mt-4">
                         <x-input-label for="permissions" :value="__('Permissions Name')" />
                         <select class="js-example-basic-multiple" multiple="multiple"
                             style="z-index: 9999; position: relative;" name="permissions[]" id="permissions[]">
                             @foreach ($permissions as $permission)
                                 <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                             @endforeach
                         </select>
                         <x-input-error :messages="$errors->get('permissions')" />
                     </div>

                     <!-- Deskripsi Role -->
                     <div class="mt-4">
                         <x-input-label for="descriptions" :value="__('Description')" />
                         <textarea id="descriptions" name="descriptions" rows="3" cols="4" class="form-control"
                             placeholder="Default textarea" :value="old('descriptions')" type="text"></textarea>
                         <x-input-error :messages="$errors->get('descriptions')" />
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
