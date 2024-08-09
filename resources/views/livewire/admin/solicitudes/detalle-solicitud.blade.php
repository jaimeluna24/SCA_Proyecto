<div>
    <div class="w-10/12 mx-auto mt-2">
        <div class="mb-4 border-b-2 p-2">
            <p class="font-semibold   text-xl text-gray-900 dark:text-white">Detalle de solicitud #{{ $solicitud_id }} a cargo de {{ $encargado }}</p>
        </div>
        <div class="grid md:grid-cols-3 md:gap-6 md:mb-4">
            <div class="w-full mb-3">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Fecha solicitada</label>
                    <input wire:model="fechaD" type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
            </div>
            <div class="w-full mb-3">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Hora de inicio</label>
                    <input wire:model="hora_inicio" type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
            </div>
            <div class="w-full mb-3">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Hora de finalización</label>
                    <input wire:model="hora_final" type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
            </div>
        </div>
        <div class="grid md:grid-cols-3 md:gap-6 md:mb-4">
            <div class="w-full mb-3">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Aula</label>
                    <input wire:model="aula" type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
            </div>
            <div class="w-full mb-3">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Modalidad</label>
                    <input wire:model="tipo_aula" type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
            </div>
            <div class="w-full mb-3">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Descripción</label>
                    <textarea  wire:model="descripcion" id="message" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled></textarea>
            </div>
        </div>
        @if ($requerir_link)
        <div class="grid md:grid-cols-1 md:gap-6 md:mb-4">
            <div class="w-full mb-3">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Enlace de reunión virtual</label>
                <textarea wire:model="link" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled></textarea>
            </div>
        </div>
        @endif
        <div class="grid md:grid-cols-1 md:gap-6 md:mb-4">
            <div class="w-full mb-3">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                  Observación</label>
                <textarea wire:model="observacion" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <div class="errors">@error('observacion') {{ $message }} @enderror</div>
            </div>
        </div>
        <div class="flex justify-end gap-2">
            <button wire:click.prevent="aprobar()" type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Aprobar</button>
            <button wire:click.prevent="rechazar()" type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Rechazar</button>
            <button wire:click.prevent="cancelar()"
            class="focus:outline-none text-white bg-gray-400 hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-400 dark:hover:bg-gray-500 dark:focus:ring-gray-600"
          >Cancelar</button>
        </div>
    </div>
</div>

