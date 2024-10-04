

<div>
    <div class="border rounded-md p-5 bg-white dark:bg-transparent border-gray-200 dark:border-gray-600">
        <form wire:submit.prevent="validarExistencia()">
            <div class="grid md:grid-cols-3 md:gap-6 md:mb-6">
                <div class="mb-3">
                    <label for="first_name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha</label>
                    <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input wire:model="fecha" id="default-datepicker" type="date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date">
                        <div class="errors">
                            @error('fecha')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hora de inicio</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input  wire:model="hora_inicio" type="time" id="time"
                            class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            min="03:00" max="23:00" value="00:00" required />
                            <div class="errors">
                                @error('hora_inicio')
                                    {{ $message }}
                                @enderror
                            </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hora final</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input  wire:model="hora_final" type="time" id="time"
                            class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            min="03:00" max="23:00" value="00:00" required />
                            <div class="errors">
                                @error('hora_final')
                                    {{ $message }}
                                @enderror
                            </div>
                    </div>
                </div>

            </div>
            <div class="grid md:grid-cols-3 md:gap-6 md:mb-6">
                {{-- <div class="mb-3">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione el aula</label>
                    <select wire:model="aula" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option selected>Seleccione</option>
                      @foreach ($aulas as $item)
                      <option value="{{ $item->nombre }}">{{ $item->nombre }}</option>
                  @endforeach
                    </select>

                    @if ($error)
                        <div class="errors">Aula no encontrada</div>
                    @endif
                </div> --}}
                <div class="mb-3">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Aula</label>
                    <select wire:model.live="tipo_aula" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option selected>Seleccione</option>
                      @foreach ($tipos as $item)
                      <option value="{{ $item->tipo }}">{{ $item->tipo }}</option>
                  @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Carrera</label>
                    <select wire:model.live="carrera_id" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option selected>Seleccione</option>
                      @foreach ($carreras as $item)
                      <option value="{{ $item->id }}">{{ $item->carrera }}</option>
                  @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clase</label>
                    <input autocomplete="off" wire:model="clase_id" list="datasClases" type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Español" required />
                    <datalist id="datasClases">
                        @foreach ($clases as $item)
                        <option value="{{ $item->id }}">{{ $item->asignatura }}</option>
                        @endforeach
                    </datalist>
                </div>
            </div>

            <div class="grid md:grid-cols-2 md:gap-6 md:mb-6">
                <div class="mb-3">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                    <textarea wire:model="descripcion" id="message" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" ></textarea>
                    <div class="errors">
                        @error('descripcion')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                @if ($requerir_link)
                <div class="mb-3">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enlace de reunion virtual</label>
                    <textarea wire:model="link" id="message" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" ></textarea>
                    <div class="errors">
                        @error('link')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                @endif
            </div>
            @if (!$alertWarning)
            <div class="flex justify-end gap-2">
                <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Guardar</button>
                <a href="/solicitudes" type="button" class="focus:outline-none text-white bg-gray-400 hover:bg-gray-600 focus:gray-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-400 dark:hover:bg-gray-600 dark:focus:ring-gray-900">Cancelar</a>
            </div>

        @endif
    </form>
    @if ($alertWarning)
    <div id="alert-additional-content-4" class="p-4 mb-4 text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800" role="alert">
        <div class="flex items-center">
          <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
          </svg>
          <span class="sr-only">Info</span>
          <h3 class="text-lg font-medium">Ciudado</h3>
        </div>
        <div class="mt-2 mb-4 text-sm">
            El aula ya tiene solicitudes para esa fecha y hora.
            <span>Guardar igualmente?</span>
        </div>

        <div class="flex justify-end gap 2">
            <button wire:click.prevent="register()" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Guardar</button>
            <button wire:click="changeHora()" class="focus:outline-none text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Cambiar hora</button>
        </div>
      </div>
    @endif
</div>
</div>
