<div>
    @if($deshabilitar)
        <div
            class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
                Horario para clase: {{ $claseName }}
            </h5>
            <p class="text-sm font-normal text-gray-500 dark:text-gray-400"> ¿Estás seguro de eliminar el horario de la clase
                {{ $claseName }}?</p>
            <p class="text-sm font-normal text-gray-500 dark:text-gray-400"> Se perderan todos los registros adjuntos al
                horario</p>


            <div class="flex mt-7">
                <button wire:click="eliminarHorario()" type="button"
                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Eliminar</button>

                <button wire:click="cerrar()" type="button"
                    class="text-white bg-gray-600 border border-gray-300 focus:outline-none hover:bg-gray-500 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-600 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Cancelar</button>
            </div>
        </div>
        @elseif($modeDetalle)
        <div class="border rounded-md p-5 bg-white dark:bg-transparent border-gray-200 dark:border-gray-600">
            <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
                Detalles de Horario
            </h5>

        <form  class="w-10/12 mx-auto mt-2">
            <div class="grid md:grid-cols-3 md:gap-6 md:mb-4">
                <div class="w-full mb-3">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Docente</label>
                        <input value="{{ $horario->docente->nombre }}" type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>

                </div>

                <div class="w-full mb-3">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clase</label>
                        <input value="{{ $horario->clase->asignatura }}" type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>

                </div>
            </div>

            <div class="grid md:grid-cols-3 md:gap-6 md:mb-4">
                <div class="w-full mb-3">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo Aula</label>
                        <input value="{{ $horario->tipo_aula->tipo }}" type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>

                </div>
                <div class="w-full mb-3">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Aula</label>
                        <input value="{{ $horario->aula->nombre }}" type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>

                </div>
                <div class="w-full mb-3">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Periodo</label>
                    <input value="{{ $horario->periodo->nombre }} - {{ $horario->periodo->anio }}" type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>

                </div>
            </div>

            <div class="grid md:grid-cols-3 md:gap-6 mb-4">
                <div class="w-full mb-3">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione
                        los días</label>

                        <input value="{{ $horario->dias }}" type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>


                </div>


                <div>
                    <label for="start-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hora de
                        inicio</label>
                        <input value="{{ $horario->hora_inicio }}" type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>

                </div>
                <div>
                    <label for="end-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hora de final</label>
                    <input value="{{ $horario->hora_fin}}" type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>

                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6 mb-4">
                @if ($tipo_aula_id == 1)
                    <div>
                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link</label>
                        <textarea wire:model="link" id="message" rows="3"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" disabled></textarea>

                    </div>
                @endif

                <div>

                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observación</label>
                    <textarea wire:model="observacion" id="message" rows="3"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" disabled></textarea>

                </div>
            </div>
            <div class="flex gap-2">
                <button wire:click.prevent="modeList()"
                    class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Cancelar</button>


                </div>

        </form>


        </div>

    {{-- @elseif($modeEditar)
    <div class="border rounded-md p-5 bg-white dark:bg-transparent border-gray-200 dark:border-gray-600">
        <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
            Editar Horario
        </h5>

    <form wire:submit.prevent="register()" class="w-10/12 mx-auto mt-2">
        <div class="grid md:grid-cols-2 md:gap-6 md:mb-4">
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
                    la clase (No puede ser editada)</label>
                    <input value="{{ $horario->clase->asignatura }}" type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>

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

        <div class="grid md:grid-cols-2 md:gap-6 mb-4">
            {{-- <div class="w-full mb-3">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione
                    los días</label>

                <div class="flex flex-wrap">

                    @foreach ($dias_semanas as $item)
                        <div class="flex items-center me-4">
                            <input id="inline-checkbox" wire:model.live="dias" value="{{ $item['day'] }}"
                                type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="inline-checkbox"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $item['dia'] }}</label>
                        </div>
                    @endforeach

                </div>
                <div class="errors">
                    @error('dias')
                        {{ $message }}
                    @enderror
                </div>

            </div> --}}

{{--
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
            </div> --}}
            {{-- <div>
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
            </div> --}}
        {{-- </div>
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
            <button wire:click.prevent="modeList()"
                class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Cancelar</button>

            <button wire:click.prevent="edit()"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>
        </div>

    </form> --}}


    </div> --}}
    @else
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">


            <div
                class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4 p-3">
                <div class="text-2xl font-semibold text-gray-900 dark:text-white">
                    Horarios
                </div>
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div
                        class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input wire:model.live="query" type="text" id="table-search"
                        class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Buscar por docente o aula">
                </div>
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Clase
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aula
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Horario
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Docente
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acción
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($horarios as $item)
                        <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">{{ $item->clase->asignatura }}</td>
                            <td class="px-6 py-4">{{ $item->aula->nombre }}</td>
                            <td class="px-6 py-4">{{ $item->hora_inicio}} - {{ $item->hora_fin }}</td>
                            <td class="px-6 py-4">{{ $item->docente->nombre }} {{ $item->docente->apellido }}</td>

                            <td class="px-3 py-2">
                                <button
                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                                    wire:click="modeDeshabilitar({{ $item->id }})">Eliminar</button>
                                {{-- <button  class="focus:outline-none text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-900" wire:click="modeEdit({{ $item->id }})">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m16.475 5.408l2.117 2.117m-.756-3.982L12.109 9.27a2.118 2.118 0 0 0-.58 1.082L11 13l2.648-.53c.41-.082.786-.283 1.082-.579l5.727-5.727a1.853 1.853 0 1 0-2.621-2.621"/><path d="M19 15v3a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h3"/></g></svg>
                                </button> --}}
                                <button
                                    class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"
                                    wire:click="modeDetalles({{ $item->id }})">Detalles</button>
                            </td>
                        </tr>
                    @empty
                        <div class="w-full flex items-center flex-wrap justify-center gap-10">
                            <div class="grid gap-4 w-60">
                                <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="154"
                                    height="161" viewBox="0 0 154 161" fill="none">
                                    <path
                                        d="M0.0616455 84.4268C0.0616455 42.0213 34.435 7.83765 76.6507 7.83765C118.803 7.83765 153.224 42.0055 153.224 84.4268C153.224 102.42 147.026 118.974 136.622 132.034C122.282 150.138 100.367 161 76.6507 161C52.7759 161 30.9882 150.059 16.6633 132.034C6.25961 118.974 0.0616455 102.42 0.0616455 84.4268Z"
                                        fill="#EEF2FF" />
                                    <path
                                        d="M96.8189 0.632498L96.8189 0.632384L96.8083 0.630954C96.2034 0.549581 95.5931 0.5 94.9787 0.5H29.338C22.7112 0.5 17.3394 5.84455 17.3394 12.4473V142.715C17.3394 149.318 22.7112 154.662 29.338 154.662H123.948C130.591 154.662 135.946 149.317 135.946 142.715V38.9309C135.946 38.0244 135.847 37.1334 135.648 36.2586L135.648 36.2584C135.117 33.9309 133.874 31.7686 132.066 30.1333C132.066 30.1331 132.065 30.1329 132.065 30.1327L103.068 3.65203C103.068 3.6519 103.067 3.65177 103.067 3.65164C101.311 2.03526 99.1396 0.995552 96.8189 0.632498Z"
                                        fill="white" stroke="#E5E7EB" />
                                    <ellipse cx="80.0618" cy="81" rx="28.0342" ry="28.0342"
                                        fill="#EEF2FF" />
                                    <path
                                        d="M99.2393 61.3061L99.2391 61.3058C88.498 50.5808 71.1092 50.5804 60.3835 61.3061C49.6423 72.0316 49.6422 89.4361 60.3832 100.162C71.109 110.903 88.4982 110.903 99.2393 100.162C109.965 89.4363 109.965 72.0317 99.2393 61.3061ZM105.863 54.6832C120.249 69.0695 120.249 92.3985 105.863 106.785C91.4605 121.171 68.1468 121.171 53.7446 106.785C39.3582 92.3987 39.3582 69.0693 53.7446 54.683C68.1468 40.2965 91.4605 40.2966 105.863 54.6832Z"
                                        stroke="#E5E7EB" />
                                    <path
                                        d="M110.782 119.267L102.016 110.492C104.888 108.267 107.476 105.651 109.564 102.955L118.329 111.729L110.782 119.267Z"
                                        stroke="#E5E7EB" />
                                    <path
                                        d="M139.122 125.781L139.122 125.78L123.313 109.988C123.313 109.987 123.313 109.987 123.312 109.986C121.996 108.653 119.849 108.657 118.521 109.985L118.871 110.335L118.521 109.985L109.047 119.459C107.731 120.775 107.735 122.918 109.044 124.247L109.047 124.249L124.858 140.06C128.789 143.992 135.191 143.992 139.122 140.06C143.069 136.113 143.069 129.728 139.122 125.781Z"
                                        fill="#A5B4FC" stroke="#818CF8" />
                                    <path
                                        d="M83.185 87.2285C82.5387 87.2285 82.0027 86.6926 82.0027 86.0305C82.0027 83.3821 77.9987 83.3821 77.9987 86.0305C77.9987 86.6926 77.4627 87.2285 76.8006 87.2285C76.1543 87.2285 75.6183 86.6926 75.6183 86.0305C75.6183 80.2294 84.3831 80.2451 84.3831 86.0305C84.3831 86.6926 83.8471 87.2285 83.185 87.2285Z"
                                        fill="#4F46E5" />
                                    <path
                                        d="M93.3528 77.0926H88.403C87.7409 77.0926 87.2049 76.5567 87.2049 75.8946C87.2049 75.2483 87.7409 74.7123 88.403 74.7123H93.3528C94.0149 74.7123 94.5509 75.2483 94.5509 75.8946C94.5509 76.5567 94.0149 77.0926 93.3528 77.0926Z"
                                        fill="#4F46E5" />
                                    <path
                                        d="M71.5987 77.0925H66.6488C65.9867 77.0925 65.4507 76.5565 65.4507 75.8945C65.4507 75.2481 65.9867 74.7122 66.6488 74.7122H71.5987C72.245 74.7122 72.781 75.2481 72.781 75.8945C72.781 76.5565 72.245 77.0925 71.5987 77.0925Z"
                                        fill="#4F46E5" />
                                    <rect x="38.3522" y="21.5128" width="41.0256" height="2.73504" rx="1.36752"
                                        fill="#4F46E5" />
                                    <rect x="38.3522" y="133.65" width="54.7009" height="5.47009" rx="2.73504"
                                        fill="#A5B4FC" />
                                    <rect x="38.3522" y="29.7179" width="13.6752" height="2.73504" rx="1.36752"
                                        fill="#4F46E5" />
                                    <circle cx="56.13" cy="31.0854" r="1.36752" fill="#4F46E5" />
                                    <circle cx="61.6001" cy="31.0854" r="1.36752" fill="#4F46E5" />
                                    <circle cx="67.0702" cy="31.0854" r="1.36752" fill="#4F46E5" />
                                </svg>
                                <div>
                                    <h2
                                        class="text-center text-black text-xl font-semibold leading-loose pb-2 dark:text-white">
                                        Sin registros</h2>
                                    <p
                                        class="text-center text-black text-base font-normal leading-relaxed pb-4 dark:text-white">
                                        Por favor agrega un registro </p>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    @endif



</div>
