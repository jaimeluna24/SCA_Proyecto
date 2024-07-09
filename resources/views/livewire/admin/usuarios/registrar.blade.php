<div class="card">
    {{-- <div class="card-header">
      <h4>Horizontal Form</h4>
    </div> --}}
    <form wire:submit.prevent="register()">
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputCity">Nombre de Usuario</label>
                  <input wire:model="name" type="text" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="inputCity" required/>
                  <div class="errors">@error('name') {{ $message }} @enderror</div>
                </div>
                  <div class="form-group col-md-4">
                    <div  wire:ignore>
                        <label>Empleado</label>
                        <select wire:model="empleado" class="form-control" id="editable-select" aria-placeholder="Seleccione" required/>
                            @foreach ($empleados as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre }} {{ $item->apellido }}</option>
                            @endforeach
                        </select>
                    </div>

                    @if($errorEmpleado)
                    <div class="errors"> Empleado ya en uso</div>
                    @endif
                  </div>

                <div wire:ignore class="form-group col-md-4">
                  <label for="inputState">Rol</label>
                  <select wir:model="role" id="roles" class="form-control" required/>
                    @foreach ($roles as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
                  <div class="errors">@error('role') {{ $message }} @enderror</div>
                </div>
              </div>
            {{-- <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Nombres</label>
                  <input wire:model.live="nombre" value="{{ $nombre }}" type="text" class="form-control" id="nombre" placeholder="Nombres" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Apellidos</label>
                  <input wire:model.live="apellido" type="text" class="form-control" id="apellido" placeholder="Apellidos" required/>
                </div>
              </div> --}}
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input wire:model="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="inputEmail4" required/>
              <div class="errors">@error('email') {{ $message }} @enderror</div>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Contraseña</label>
              <input wire:model="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="inputPassword4" required/>
              <div class="errors">@error('password') {{ $message }} @enderror</div>
            </div>
          </div>

        </div>
        <div class="card-footer" align="right">
        <a href="/usuarios" class="btn btn-secondary">Cancelar</a>
          <button class="btn btn-primary" type="submit">Registrar</button>

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
