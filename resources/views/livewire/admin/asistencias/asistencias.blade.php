<div>
    @if ($marcarAsistencia)
        <div class="w-10/12 mx-auto mt-8">

            <div class="grid md:grid-cols-3 md:gap-6 md:mb-6">
                <div class="relative z-0 mb-5">
                    <input
                        value="{{ $asistenciaSelected->horario->docente->nombre }} {{ $asistenciaSelected->horario->docente->apellido }}"
                        type="text" id="floating_standard"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " disabled />
                    <label for="floating_standard"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Docente</label>
                </div>
                <div class="relative z-0 mb-5">
                    <input value="{{ $asistenciaSelected->horario->clase->asignatura }}" type="text"
                        id="floating_standard"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " disabled />
                    <label for="floating_standard"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Clase</label>
                </div>
                <div class="relative z-0 mb-5">
                    <input value="{{ $asistenciaSelected->horario->aula->nombre }}" type="text"
                        id="floating_standard"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " disabled />
                    <label for="floating_standard"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Aula</label>
                </div>

            </div>
            <div class="grid md:grid-cols-3 md:gap-6 md:mb-6">
                <div class="relative z-0 mb-5">
                    <input value="{{ $asistenciaSelected->horario->tipo_aula->tipo }}" type="text"
                        id="floating_standard"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " disabled />
                    <label for="floating_standard"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Tipo
                        de aula</label>
                </div>
                <div class="relative z-0 mb-5">
                    <input value="{{ $asistenciaSelected->fecha }}" type="text" id="floating_standard"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " disabled />
                    <label for="floating_standard"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Fecha</label>
                </div>
                <div class="relative z-0 mb-5">
                    <input
                        value="{{ $asistenciaSelected->horario->hora_inicio }} - {{ $asistenciaSelected->horario->hora_fin }}"
                        type="text" id="floating_standard"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " disabled />
                    <label for="floating_standard"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Horario</label>
                </div>

            </div>
            <div class="grid md:grid-cols-2 md:gap-6 md:mb-6">
                <div class="relative z-0 mb-5">
                    <input value="{{ $asistenciaSelected->observacion }}" type="text" id="floating_standard"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " disabled />
                    <label for="floating_standard"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Observación</label>
                </div>
                @if ($asistenciaSelected->horario->link)
                    <div class="relative z-0 mb-5">
                        <input value="{{ $asistenciaSelected->horario->link }}" type="text" id="floating_standard"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " disabled />
                        <label for="floating_standard"
                            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Link
                            de clase virtual</label>
                    </div>
                @endif
            </div>
            <div class="grid md:grid-cols-2 md:gap-6 md:mb-6">

                <div class="relative z-0 mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="default_size">Subir
                        evidencia</label>
                    <input capture="environment" wire:model.live="evidencia"
                        class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="default_size" type="file">
                    <div class="errors">
                        @error('evidencia')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                @if ($evidenciaPreview)
                    <div class="mt-2 w-full flex justify-center">
                        <p>Previsualización:</p>
                        <img src="{{ $evidenciaPreview }}" alt="Previsualización" style="max-width: 300px;">
                    </div>
                @endif
                <div>
                </div>
            </div>
            <div class="flex flex-wrap mt-4">
                <button wire:click="modePresente({{ $asistenciaSelected->id }})" type="button"
                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-900">Presente</button>
                <button wire:click="modeAusente({{ $asistenciaSelected->id }})" type="button"
                    class="focus:outline-none text-white bg-redd-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Ausente</button>
                <button wire:click="modeFalta({{ $asistenciaSelected->id }})" type="button"
                    class="focus:outline-none text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-900">Falta
                    Justificada</button>

                <button wire:click="modeList()" type="button"
                    class="text-white bg-gray-600 border border-gray-300 focus:outline-none hover:bg-gray-500 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-600 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Regresar</button>
            </div>


        </div>
    @else
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div
                class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4 p-3">
                <div class="text-2xl font-semibold text-gray-900 dark:text-white">
                    Asistencias
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
                        placeholder="Buscar por Aula">
                </div>
                <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input wire:model.live="fechaSeleccionada" id="default-datepicker" type="date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Seleccionar fecha">
                </div>
            </div>
            <div class="hidden md:block">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Clase
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Hora
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aula
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tipo
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
                        @forelse ($asistencias as $item)
                            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-4">{{ $item->horario->clase->asignatura }}</td>
                                <td class="px-6 py-4">{{ $item->fecha }}</td>
                                <td class="px-6 py-4">{{ $item->horario->hora_inicio }}</td>

                                <td class="px-6 py-4">{{ $item->horario->aula->nombre }}</td>
                                <td class="px-6 py-4">{{ $item->horario->tipo_aula->tipo }}</td>
                                <td class="px-6 py-4">{{ $item->horario->docente->nombre }}
                                    {{ $item->horario->docente->apellido }}</td>

                                <td class="px-3 py-2">
                                    @if ($item->estado_id == 1)
                                        <button
                                            class="focus:outline-none text-white bg-red-900 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-900 dark:focus:ring-red-900"
                                            wire:click="modeMarcarAsistencia({{ $item->id }})">Marcar</button>
                                    @else
                                        <button
                                            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-800 dark:hover:bg-green-900 dark:focus:ring-green-900"
                                            wire:click="modeMarcarAsistencia({{ $item->id }})">Marcado</button>
                                    @endif
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

            <div class="md:hidden">

                <ul class="max-w-md divide-y divide-gray-200 dark:divide-gray-700">
                    @forelse ($asistencias as $item)
                        <li class="pb-3 sm:pb-4 mb-2">
                            <div class="flex items-center space-x-4 rtl:space-x-reverse">
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        {{ $item->horario->docente->nombre }} {{ $item->horario->docente->apellido }}
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        {{ $item->horario->clase->asignatura }}
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        {{ $item->horario->aula->nombre }} - {{ $item->horario->hora_inicio }} -
                                        {{ $item->horario->tipo_aula->tipo }}
                                    </p>
                                </div>
                                <div
                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    @if ($item->estado_id == 1)
                                        <button
                                            class="focus:outline-none text-white bg-red-900 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-900 dark:focus:ring-red-900"
                                            wire:click="modeMarcarAsistencia({{ $item->id }})">Marcar</button>
                                    @else
                                        <button
                                            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-800 dark:hover:bg-green-900 dark:focus:ring-green-900"
                                            wire:click="modeMarcarAsistencia({{ $item->id }})">Marcado</button>
                                    @endif
                                </div>
                            </div>
                        </li>
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

                </ul>

            </div>

        </div>
    @endif

</div>
