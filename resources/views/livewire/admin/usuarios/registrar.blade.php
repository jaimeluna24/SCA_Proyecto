<div class="card">
    {{-- <div class="card-header">
      <h4>Horizontal Form</h4>
    </div> --}}



<form wire:submit.prevent="register()" class="w-10/12 mx-auto mt-8">
    <div class="grid md:grid-cols-3 md:gap-6 md:mb-6">
        <div class="mb-3">
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de usuario</label>
            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required />
            <div class="errors">@error('name') {{ $message }} @enderror</div>
        </div>
     <div class="w-full mb-3">
        <div wire:ignore>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccion un Empleado</label>
            <select wire:model="empleado" class="w-full" id="editable-select" aria-placeholder="Seleccione" required/>
                @foreach ($empleados as $item)
                <option class="dark:text-black" value="{{ $item->id }}">{{ $item->nombre }} {{ $item->apellido }}</option>
                @endforeach
            </select>
            @if($errorEmpleado)
                <div class="errors"> Empleado ya en uso</div>
            @endif
        </div>
     </div>
     <div class="mb-3">
        <div wire:ignore >
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione el rol</label>
            <select wir:model="role" id="roles" class="w-full" required/>
              @foreach ($roles as $item)
              <option class="dark:text-black" value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
            </select>
            <div class="errors">@error('role') {{ $message }} @enderror</div>
          </div>
     </div>
    </div>
    <div class="grid md:grid-cols-2 md:gap-6 mb-6">
        <div class="mb-3">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo</label>
            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required />
            <div class="errors">@error('email') {{ $message }} @enderror</div>
        </div>
     <div class="mb-3">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required />
        <div class="errors">@error('password') {{ $message }} @enderror</div>
    </div>
    </div>
    <div class="flex gap-2" >
        <a href="/usuarios" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Cancelar</a>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrar</button>
    </div>

  </form>



    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="//rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.js"></script>
    <script>
    $('#editable-select').on('select.editable-select', function (e) {
        var empleadoId = $(this).val();

        @this.set('empleado', empleadoId)
        console.log(empleadoId, 'aqui')
        }).editableSelect();

        $('#roles').on('select.editable-select', function (e) {
        var role = $(this).val();

        @this.set('role', role)
        console.log(role, 'aqui')
        }).editableSelect();
    </script>
  </div>
