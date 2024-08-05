<div class="lg:col-span-2">
    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
    <div class="md:col-span-5">
        <label for="full_name">Full Name</label>
        <input type="text" name="full_name" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
      </div>
    </div>
</div>
    {{-- </div>
    <div class="grid grid-cols-2 gap-5">
    <div class="form-group">
        <x-input-label for="apellido" :value="__('Apellido')"/>
        <x-text-input id="apellido" name="apellido" type="text" class="mt-1 block w-full" :value="old('name')" autocomplete="name" placeholder="Apellido"/>
        <x-input-error class="mt-2" :messages="$errors->get('apellido')"/>
    </div>
    <div class="form-group">
        <x-input-label for="Cedula" :value="__('Cedula')"/>
        <x-text-input id="Cedula" name="Cedula" type="text" class="mt-1 block w-full" :value="old('Cedula')" autocomplete="Cedula" placeholder="Cedula"/>
        <x-input-error class="mt-2" :messages="$errors->get('Cedula')"/>
    </div>
</div>    
<div class="grid grid-cols-2 gap-5">
    <div class="form-group">
        <x-input-label for="Cedula" :value="__('Departamento')"/>
        <select name="" id="" class="select w-full h-6 border border-gray-300 rounded px-3 py-1">
            <option value=""></option>
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('Cedula')"/>
    </div>
</div> --}}
<div class="md:col-span-5 text-right">
    <div class="inline-flex items-end">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
    </div>
  </div>

