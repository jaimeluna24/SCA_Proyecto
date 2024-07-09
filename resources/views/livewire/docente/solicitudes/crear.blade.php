<div class="card">
    <form wire:submit.prevent="validarExistencia()">
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCity">Fecha solicitada</label>
                    <input wire:model="fecha" type="date" class="form-control datepicker {{ $errors->has('fecha') ? ' is-invalid' : '' }}" id="inputCity" required/>
                    <div class="errors">@error('fecha') {{ $message }} @enderror</div>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputCity">Hora de inicio</label>
                    <input wire:model="hora_inicio" type="time" class="form-control datepicker {{ $errors->has('hora_inicio') ? ' is-invalid' : '' }}" id="inputCity" required/>
                    <div class="errors">@error('hora_inicio') {{ $message }} @enderror</div>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="inputCity">Hora de finalización</label>
                    <input wire:model="hora_final" type="time" class="form-control datepicker {{ $errors->has('hora_final') ? ' is-invalid' : '' }}" id="inputCity" required/>
                    <div class="errors">@error('hora_final') {{ $message }} @enderror</div>
                  </div>
              </div>
          <div class="form-row">
            <div class="form-group col-md-4">
                <div  wire:ignore>
                    <label>Aula</label>
                    <select wire:model="aula" class="form-control" id="editable-select" aria-placeholder="Seleccione" required/>
                        @foreach ($aulas as $item)
                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                @if($error)
                <div class="errors">Aula no encontrada</div>
                @endif
            </div>
              <div class="form-group col-md-4">
                <div wire:ignore>
                    <label>Tipo de aula</label>
                    <select wire:model="tipo_aula" id="tipo" class="form-control" aria-placeholder="Seleccione" required/>
                        @foreach ($tipos as $item)
                        <option value="{{ $item->id }}">{{ $item->tipo }}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class="form-group col-md-4">
                <label for="inputCity">Descripción</label>
                <input wire:model="descripcion" type="text" class="form-control  {{ $errors->has('descripcion') ? ' is-invalid' : '' }}" id="inputCity" required/>
                <div class="errors">@error('descripcion') {{ $message }} @enderror</div>
              </div>
          </div>
          @if ($requerir_link)
          <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputCity">Enlace de reunión virtual</label>
                <input wire:model="link" type="text" class="form-control  {{ $errors->has('link') ? ' is-invalid' : '' }}" id="inputCity"/>
                <div class="errors">@error('link') {{ $message }} @enderror</div>
            </div>
          </div>
          @endif

        </div>
        @if(!$alertWarning)
        <div class="card-footer" align="right">
        <a href="/solicitudes" class="btn btn-secondary">Cancelar</a>
        <button class="btn btn-primary" type="submit">Registrar</button>
        </div>
        @endif
    </form>
    @if($alertWarning)
          <div class="form-row">
            <div class="form-group col-md-12">
                <div class="alert alert-warning alert-has-icon">
                    <div class="alert-icon"><i class="bi bi-exclamation-triangle"></i></div>
                    <div class="alert-body">
                      <div class="alert-title">Cuidado!</div>
                      El aula ya tiene solicitudes para esa fecha y hora.
                      <span>Guardar igualmente?</span>
                    </div>
                    <div class="card-footer" align="right">
                        <a class="btn btn-secondary" wire:click="changeHora()">Cambiar hora</a>
                         <button class="btn btn-primary" wire:click.prevent="register()">Registrar</button>
                        </div>
                  </div>
            </div>
          </div>
          @endif

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="//rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.js"></script>
    <script>
    $('#editable-select').on('select.editable-select', function (e) {
        var aula = $(this).val();

        @this.set('aula', aula)
        console.log(aula, 'aqui')
        }).editableSelect();

    $('#tipo').on('select.editable-select', function (e) {
        var tipo = $(this).val();

        @this.set('tipo_aula', tipo)
        if(tipo == 'Virtual'){
           var isTrue = true;
            @this.set('requerir_link', isTrue)
        }
        if(tipo != 'Virtual'){
           var isTrue = false;
            @this.set('requerir_link', isTrue)
        }
        console.log(tipo, 'aqui')
        }).editableSelect();
    </script>
  </div>
