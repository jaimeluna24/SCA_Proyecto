<div class="card">

    <form wire:submit.prevent="register()" class="w-10/12 mx-auto mt-2">
        <div class="grid md:grid-cols-3 md:gap-6 md:mb-4">
            <div class="w-full mb-3">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione el
                    docente</label>
                <select wire:model="docente_id" id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Seleccione</option>
                    @foreach ($docentes as $item)
                        <option value="{{ $item->id }}">{{ $item->nombre }} {{ $item->apellido }}</option>
                    @endforeach
                </select>
                <div class="errors">
                    @error('docente_id')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="w-full mb-3">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione
                    una carrera</label>
                {{-- <select wire:model.live="carrera_id" id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Seleccione</option>
                    @foreach ($carreras as $item)
                        <option value="{{ $item->id }}">{{ $item->carrera }}</option>
                    @endforeach
                </select> --}}
                <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-black bg-white  rounded-lg hover:bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800 w-full dark:text-white" type="button">Seleccione <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg></button>


<!-- Dropdown menu -->

<div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-gray-700">
    {{-- <div class="p-3">
      <label for="input-group-search" class="sr-only">Search</label>
      <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
        </div>
        <input wire:model="query" type="text" id="input-group-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar">
      </div>

    </div> --}}
    <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSearchButton">
        @foreach ($carreras as $item)
      <li>
        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
          <input wire:model="carrerasSelected" id="checkbox-item-11" type="checkbox" value="{{ $item->id }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
          <label for="checkbox-item-{{ $item->id }}" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{ $item->carrera }}</label>
        </div>
      </li>
      @endforeach
    </ul>
</div>
{{-- @foreach ($carrerasSelected  as $item)
    <p>{{ $item }}</p>
@endforeach --}}


                <div class="errors">
                    @error('carrera_id')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="w-full mb-3">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Introduzca una clase</label>
                    <input autocomplete="off" wire:model.live="claseSelected" list="dataClases" type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Español" required />
                    <datalist id="dataClases">
                        @foreach ($clases as $item)
                        <option value="{{ $item->asignatura }}">{{ $item->asignatura }}</option>
                        @endforeach
                    </datalist>
                    {{-- <select wire:model="clase_id" id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Seleccione</option>
                    @foreach ($clases as $item)
                        <option value="{{ $item->id }}">{{ $item->asignatura }}</option>
                    @endforeach
                </select> --}}
                <div class="errors">
                    @error('clase_id')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-3 md:gap-6 md:mb-4">
            <div class="w-full mb-3">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione
                    el tipo</label>
                <select wire:model.live="tipo_aula_id" id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Seleccione</option>
                    @foreach ($tipo_aulas as $item)
                        <option value="{{ $item->id }}">{{ $item->tipo }}</option>
                    @endforeach
                </select>
                <div class="errors">
                    @error('tipo_aula_id')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="w-full mb-3">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione
                    un aula</label>
                <select wire:model="aula_id" id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Seleccione</option>
                    @foreach ($aulas as $item)
                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                    @endforeach
                </select>
                <div class="errors">
                    @error('aula_id')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="w-full mb-3">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione
                    el periodo</label>
                <select wire:model="periodo_id" id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Seleccione</option>
                    @foreach ($periodos as $item)
                        <option value="{{ $item->id }}">{{ $item->nombre }} - {{ $item->identificador }}</option>
                    @endforeach
                </select>
                <div class="errors">
                    @error('periodo_id')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        {{-- <div class="w-full mb-3">
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione el empleado</label>
        <select wire:model="empleado" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @foreach ($empleados as $item)
            <option value="{{ $item->nombre . ' ' . $item->apellido }}">{{ $item->nombre }} {{ $item->apellido }}</option>
            @endforeach
        </select>
        @if ($errorEmpleado)
        <div class="errors"> Empleado ya en uso</div>
        @endif
     </div> --}}

        <div class="grid md:grid-cols-3 md:gap-6 mb-4">
            <div class="w-full mb-3">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione
                    los días</label>

                {{-- <div class="flex flex-wrap"> --}}


                        <div class="flex items-center me-4">
                                <select wire:model.live="dias"  id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option selected>Seleccione</option>
                                  @foreach ($dias_semanas as $item)
                                  <option value="{{ $item['day'] }}">{{ $item['dia'] }}</option>
                                  @endforeach
                                </select>

                        </div>


                {{-- </div> --}}
                <div class="errors">
                    @error('dias')
                        {{ $message }}
                    @enderror
                </div>

            </div>


            <div>
                <label for="start-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hora de
                    inicio (ej. 10:00)</label>
                <div class="relative">
                    <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input wire:model="hora_inicio" type="time" id="start-time"
                        class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        min="04:00" max="23:00" value="00:00" />
                    <div class="errors">
                        @error('hora_inicio')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div>
                <label for="end-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hora de final
                    (ej. 10:59)</label>
                <div class="relative">
                    <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input wire:model="hora_fin" type="time" id="end-time"
                        class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        min="04:00" max="23:00" value="00:00" />
                    <div class="errors">
                        @error('hora_fin')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6 mb-4">
            @if ($tipo_aula_id == 1)
                <div>
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link</label>
                    <textarea wire:model="link" id="message" rows="3"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                    <div class="errors">
                        @error('link')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            @endif

            <div>

                <label for="message"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observación</label>
                <textarea wire:model="observacion" id="message" rows="3"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder=""></textarea>
                <div class="errors">
                    @error('observacion')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="flex gap-2">
            <a href="/horarios"
                class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Cancelar</a>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrar</button>
        </div>

    </form>

</div>
