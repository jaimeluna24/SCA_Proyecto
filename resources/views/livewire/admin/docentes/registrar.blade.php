<div class="card">
    {{-- <div class="card-header">
      <h4>Horizontal Form</h4>
    </div> --}}
    <form wire:submit.prevent="register()">
        <div class="card-body">
            {{-- <div class="form-row"> --}}
                {{-- <div class="form-group col-md-6">
                  <label for="inputEmail4">Nombres</label>
                  <input wire:model.live="nombre" type="text" class="form-control {{ $errors->has('nombre') ? ' is-invalid' : '' }}" id="nombre" placeholder="Nombres" required>
                  <div class="errors">@error('apellido') {{ $message }} @enderror</div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Apellidos</label>
                  <input wire:model.live="apellido" type="text" class="form-control {{ $errors->has('apellido') ? ' is-invalid' : '' }}" id="apellido" placeholder="Apellidos" required/>
                  <div class="errors">@error('apellido') {{ $message }} @enderror</div>
                </div>
              </div> --}}
            <div class="form-row">
                <div class="form-group col-md-4">
                    <div wire:ignore>
                        <label>Empleado</label>
                        <select wire:model="empleado" class="form-control" id="editable-selectE" aria-placeholder="Seleccione" required/>
                            @foreach ($empleados as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre }} {{ $item->apellido }}</option>
                            @endforeach
                        </select>
                    </div>
                    @if($errorEx)
                    <div class="errors">El empleado ya tiene un docente asignado</div>
                    @endif
                    @if($errorE)
                    <div class="errors">Seleccione correctamente el empleado</div>
                    @endif
                </div>
            <div class="form-group col-md-4">
                  <label for="inputCity">Identidad</label>
                  <input wire:model="identidad" type="text" class="form-control {{ $errors->has('identidad') ? ' is-invalid' : '' }}" id="inputCity" required/>
                  <div class="errors">@error('identidad') {{ $message }} @enderror</div>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputCity">Teléfono</label>
                    <input wire:model="telefono" type="text" class="form-control {{ $errors->has('telefono') ? ' is-invalid' : '' }}" id="inputCity" required/>
                    <div class="errors">@error('telefono') {{ $message }} @enderror</div>
                </div>

              </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputEmail4">Email</label>
              <input wire:model="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="inputEmail4" required/>
              <div class="errors">@error('email') {{ $message }} @enderror</div>
            </div>
            <div class="form-group col-md-4">
                <label for="inputCity">Fecha de Nacimiento</label>
                <input wire:model="fecha_nacimiento" type="date" class="form-control datepicker {{ $errors->has('fecha_nacimiento') ? ' is-invalid' : '' }}" id="inputCity" required/>
                <div class="errors">@error('fecha_nacimiento') {{ $message }} @enderror</div>
            </div>
              <div class="form-group col-md-4">
                <div  wire:ignore>
                    <label>Sede</label>
                    <select wire:model="sede" class="form-control" id="editable-select" aria-placeholder="Seleccione" required/>
                        @foreach ($sedes as $item)
                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                @if($error)
                <div class="errors">La sede no coincide</div>
                @endif
              </div>
            {{-- <div class="form-group col-md-6">
              <label for="inputPassword4">Contraseña</label>
              <input wire:model="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="inputPassword4" required/>
              <div class="errors">@error('password') {{ $message }} @enderror</div>
            </div> --}}
          </div>

        </div>
        <div class="card-footer" align="right">
        <a href="/empleados" class="btn btn-secondary">Cancelar</a>
          <button class="btn btn-primary" type="submit">Registrar</button>

        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="//rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.js"></script>
    <script>
    $('#editable-select').on('select.editable-select', function (e) {
        var sede = $(this).val();

        @this.set('sede', sede)
        console.log(sede, 'aqui')
        }).editableSelect();

        $('#editable-selectE').on('select.editable-select', function (e) {
        var empleadoId = $(this).val();

        @this.set('empleado', empleadoId)
        console.log(empleadoId, 'aqui')
        }).editableSelect();
    </script>
  </div>

