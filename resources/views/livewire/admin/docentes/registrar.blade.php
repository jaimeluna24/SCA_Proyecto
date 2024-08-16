<div class="card">
    {{-- <div class="card-header">
      <h4>Horizontal Form</h4>
    </div> --}}

<form wire:submit.prevent="register()" class="w-10/12 mx-auto mt-8">
    <div class="grid md:grid-cols-2 md:gap-6 md:mb-6">
     <div class="w-full mb-3">
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione el empleado</label>
        <select wire:model="empleado_id" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
           <option selected>Seleccione</option>
            @foreach ($empleados as $item)
            <option value="{{ $item->id }}">{{ $item->nombre }} {{ $item->apellido }}</option>
            @endforeach
        </select>
        <div class="errors">@error('empleado_id') {{ $message }} @enderror</div>

     </div>
     <div class="mb-3">
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione la Sede</label>
        <select wire:model="sede_id" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Seleccione</option>
            @foreach ($sedes as $item)
            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
            @endforeach
        </select>
        <div class="errors">@error('sede_id') {{ $message }} @enderror</div>

     </div>
     {{-- <div class="mb-3">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo institucional</label>
        <input wire:model="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required />
        <div class="errors">@error('email') {{ $message }} @enderror</div>
    </div> --}}
    </div>
    <div class="flex gap-2" >
        <a href="/docentes" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Cancelar</a>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrar</button>
    </div>

  </form>
  </div>

