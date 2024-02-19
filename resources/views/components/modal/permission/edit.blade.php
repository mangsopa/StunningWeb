<!-- Modal -->
<div class="md-modal md-effect-11" id="modal-edit{{ $data->id }}" style="z-index: 5;">
    <div class="md-content">
        <h3 class="text-2xl">Edit Role</h3>
        <div>
            <form method="POST" action="{{ route('admin.roles.update', $data->id) }}">
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

                    <!-- Guard Role -->
                    <div class="mt-4">
                        <x-input-label for="guard" :value="__('Guard')" />
                        <x-text-input id="guard" class="block mt-1 w-full" type="text" name="guard_name"
                            :value="$data->guard_name" required autofocus autocomplete="guard" />
                        <x-input-error :messages="$errors->get('guard')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="roles" :value="__('Role Name')" />
                        <select class="js-example-basic-multiple" multiple="multiple"
                            style="z-index: 9999; position: relative;" name="roles[]" id="roles[]">
                            @foreach ($roles as $role)
                            <option @selected($data->hasRole($role->name)) value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach

                        </select>
                        <x-input-error :messages="$errors->get('roles')" />
                    </div>

                    <!-- Deskripsi Role -->
                    <div class="mt-4">
                        <x-input-label for="descriptions" :value="__('Description')" />
                        <textarea id="descriptions" name="descriptions" rows="3" cols="4" class="form-control"
                            placeholder="Default textarea">{{ $data->descriptions}}</textarea>
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
<!--animation modal  Dialogs ends -->
<div class="md-overlay" style="z-index: 3;"></div>
