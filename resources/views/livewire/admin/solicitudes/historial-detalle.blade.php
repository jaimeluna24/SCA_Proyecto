<div class="card">
    <div class="card-header">
        <h4>Detalle de solicitud #{{ $solicitud_id }} a cargo de {{ $encargado }}</h4>
      </div>
    <form>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCity">Fecha solicitada</label>
                    <input wire:model="fechaD" type="text" class="form-control datepicker {{ $errors->has('fecha') ? ' is-invalid' : '' }}" id="inputCity" disabled/>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputCity">Hora de inicio</label>
                    <input wire:model="hora_inicio" type="text" class="form-control datepicker {{ $errors->has('hora_inicio') ? ' is-invalid' : '' }}" id="inputCity" disabled/>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="inputCity">Hora de finalización</label>
                    <input wire:model="hora_final" type="text" class="form-control {{ $errors->has('hora_final') ? ' is-invalid' : '' }}" id="inputCity" disabled/>
                  </div>
              </div>
          <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputCity">Aula</label>
                <input wire:model="aula" type="text" class="form-control {{ $errors->has('hora_final') ? ' is-invalid' : '' }}" id="inputCity" disabled/>
              </div>
              <div class="form-group col-md-4">
                <label for="inputCity">Modalidad</label>
                <input wire:model="tipo_aula" type="text" class="form-control {{ $errors->has('hora_final') ? ' is-invalid' : '' }}" id="inputCity" disabled/>
              </div>
              <div class="form-group col-md-4">
                <label for="inputCity">Descripción</label>
                <textarea rows="2" wire:model="descripcion" type="text" class="form-control  {{ $errors->has('descripcion') ? ' is-invalid' : '' }}" id="inputCity" disabled/></textarea>
                <div class="errors">@error('descripcion') {{ $message }} @enderror</div>
              </div>
          </div>
          @if ($requerir_link)
          <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputCity">Enlace de reunión virtual</label>
                <input wire:model="link" type="text" class="form-control {{ $errors->has('link') ? ' is-invalid' : '' }}" id="inputCity" disabled/>
                <div class="errors">@error('link') {{ $message }} @enderror</div>
            </div>
          </div>
          @endif

          <div class="form-row">
            <div class="form-group col-md-10">
                <label for="inputCity">Observación</label>
                <input wire:model="observacion" type="text" class="form-control  {{ $errors->has('observacion') ? ' is-invalid' : '' }}" id="inputCity" disabled/>
                <div class="errors">@error('observacion') {{ $message }} @enderror</div>
            </div>

            <div class="form-group col-md-2">
                <label for="inputCity">Estado</label>
                <input wire:model="estado" type="text" class="form-control  {{ $errors->has('estado') ? ' is-invalid' : '' }}" id="inputCity" disabled/>
                <div class="errors">@error('estado') {{ $message }} @enderror</div>
            </div>
          </div>

        </div>
        <div class="card-footer" align="right">
        <button class="btn btn-secondary" wire:click.prevent="cancelar()">Regresar</button>

        </div>

    </form>

</div>
