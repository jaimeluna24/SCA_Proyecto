<div class="card">

<form wire:submit.prevent="register()" class="w-10/12 mx-auto mt-8">
    <div class="grid md:grid-cols-3 md:gap-6 md:mb-6">
        <div class="w-full mb-3">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione el docente</label>
            <select wire:model="docente_id" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Seleccione</option>
                @foreach ($docentes as $item)
                <option value="{{ $item->id }}">{{ $item->nombre }} {{ $item->apellido }}</option>
                @endforeach
            </select>
            <div class="errors">@error('docente_id') {{ $message }} @enderror</div>
         </div>
         <div class="w-full mb-3">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione una carrera</label>
            <select wire:model.live="carrera_id" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Seleccione</option>
                @foreach ($carreras as $item)
                <option value="{{ $item->id }}">{{ $item->carrera }}</option>
                @endforeach
            </select>
            <div class="errors">@error('carrera_id') {{ $message }} @enderror</div>
         </div>
         <div class="w-full mb-3">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione la clase</label>
            <select wire:model="clase_id" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Seleccione</option>
                @foreach ($clases as $item)
                <option value="{{ $item->id }}">{{ $item->codigo }} - {{ $item->asignatura }}</option>
                @endforeach
            </select>
            <div class="errors">@error('clase_id') {{ $message }} @enderror</div>
         </div>
    </div>

    <div class="grid md:grid-cols-3 md:gap-6 md:mb-6">
        <div class="w-full mb-3">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione el tipo</label>
            <select wire:model="tipo_aula_id" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Seleccione</option>
                @foreach ($tipo_aulas as $item)
                <option value="{{ $item->id }}">{{ $item->tipo }}</option>
                @endforeach
            </select>
            <div class="errors">@error('tipo_aula_id') {{ $message }} @enderror</div>
         </div>
         <div class="w-full mb-3">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione un aula</label>
            <select wire:model="aula_id" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Seleccione</option>
                @foreach ($aulas as $item)
                <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                @endforeach
            </select>
            <div class="errors">@error('aula_id') {{ $message }} @enderror</div>
         </div>
         <div class="w-full mb-3">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione el periodo</label>
            <select wire:model="periodo_id" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Seleccione</option>
                @foreach ($periodos as $item)
                <option value="{{ $item->id }}">{{ $item->nombre }} - {{ $item->identificador }}</option>
                @endforeach
            </select>
            <div class="errors">@error('periodo_id') {{ $message }} @enderror</div>
         </div>
    </div>

     {{-- <div class="w-full mb-3">
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione el empleado</label>
        <select wire:model="empleado" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @foreach ($empleados as $item)
            <option value="{{ $item->nombre . ' ' . $item->apellido }}">{{ $item->nombre }} {{ $item->apellido }}</option>
            @endforeach
        </select>
        @if($errorEmpleado)
        <div class="errors"> Empleado ya en uso</div>
        @endif
     </div> --}}

    <div class="grid md:grid-cols-3 md:gap-6 mb-6">
<div  class="w-full mb-3">
    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione los días</label>

    <div class="flex flex-wrap">

        @foreach ($dias_semanas as $item)
        <div class="flex items-center me-4">
            <input id="inline-checkbox" wire:model.live="dias" value="{{ $item }}" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="inline-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $item }}</label>
        </div>
        @endforeach
        <div class="errors">@error('dias') {{ $message }} @enderror</div>

    </div>
    </div>


    <div>
        <label for="start-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hora de inicio:</label>
        <div class="relative">
            <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                </svg>
            </div>
            <input wire:model="hora_inicio" type="time" id="start-time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
            <div class="errors">@error('hora_inicio') {{ $message }} @enderror</div>
        </div>
    </div>
    <div>
        <label for="end-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hora de final:</label>
        <div class="relative">
            <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                </svg>
            </div>
            <input wire:model="hora_fin" type="time" id="end-time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
            <div class="errors">@error('hora_fin') {{ $message }} @enderror</div>
        </div>
    </div>
    </div>
    <div class="flex gap-2" >
        <a href="/horarios" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Cancelar</a>

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

