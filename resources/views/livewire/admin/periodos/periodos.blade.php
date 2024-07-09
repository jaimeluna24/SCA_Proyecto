<div>
    @if ($create)
    <div class="card" id="mycard-dimiss">
        <div class="card-header">
          <h4>Crear nuevo rol</h4>
          <div class="card-header-action">
            <a class="btn btn-icon btn-danger" wire:click="cerrar()"><i class="fas fa-times"></i></a>
          </div>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="register()">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputPassword4">Nombre</label>
                        <input wire:model="nombre" type="text" class="form-control {{ $errors->has('nombre') ? ' is-invalid' : '' }}" placeholder="Nombre" name="name">
                        <div class="errors">@error('nombre') {{ $message }} @enderror</div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4">Identificador</label>
                        <input wire:model="identificador" type="text" class="form-control {{ $errors->has('identificador') ? ' is-invalid' : '' }}" placeholder="Identificador" name="identificador">
                        <div class="errors">@error('identificador') {{ $message }} @enderror</div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4">Año</label>
                        <input wire:model="anio" type="text" class="form-control {{ $errors->has('anio') ? ' is-invalid' : '' }}" placeholder="Año" name="anio">
                        <div class="errors">@error('anio') {{ $message }} @enderror</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Fecha de inicio</label>
                        <input wire:model="fecha_inicio" type="date" class="form-control {{ $errors->has('fecha_inicio') ? ' is-invalid' : '' }}" placeholder="Fecha de inicio" name="fecha_inicio">
                        <div class="errors">@error('fecha_inicio') {{ $message }} @enderror</div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Fecha de finalzación</label>
                        <input wire:model="fecha_final" type="date" class="form-control {{ $errors->has('fecha_final') ? ' is-invalid' : '' }}" placeholder="Fecha de final" name="fecha_final">
                        <div class="errors">@error('fecha_final') {{ $message }} @enderror</div>
                    </div>
                </div>

                <div class="footer" align="right">
                    <button class="btn btn-secondary" wire:click="cerrar()">Cancelar</button>
                    <button class="btn btn-primary" type="submit">Crear</button>
                </div>
            </form>
        </div>
    </div>

    @else
    <div class="row">
        <div class="col-12" style=" margin-top: -20px; margin-bottom: 10px; display: flex; justify-content: end;">
            <button class="btn btn-primary" wire:click="crear()">Crear nuevo</button>
        </div>

        <div class="col-12">
          <div class="card scrolling-pagination">
            <div class="card-header">
              <h4>Periodos</h4>
              <div class="card-header-form">
                <form>
                  <div class="input-group">
                    <input wire:model.live="query" type="text" class="form-control" placeholder="Buscar por periodo o por año">
                    <div class="input-group-btn">
                      <button class="btn btn-primary" disabled><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Periodo</th>
                            <th>Identificador</th>
                            <th>Año</th>
                            <th>Fecha de inicio</th>
                            <th>Fecha de final</th>
                            <th>Acción</th>
                          </tr>
                    </thead>
                  <tbody>
                    @forelse ($periodos as $item)
                    <tr>
                      <td>{{ $item->nombre }}</td>
                      <td class="align-middle">
                        {{ $item->identificador }}
                      </td>
                      <td class="align-middle">
                          {{ $item->anio }}
                        </td><td class="align-middle">
                          {{ $item->fecha_inicio }}
                        </td><td class="align-middle">
                          {{ $item->fecha_final }}
                        </td>

                      <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">
                            <div class="card">
                                <div class="card-body">
                                  <div class="empty-state" data-height="400">
                                    <div class="empty-state-icon">
                                      <i class="fas fa-question"></i>
                                    </div>
                                    <h2>No pudimos encontrar ningún dato.</h2>
                                    <p class="lead">
                                        Lo sentimos, no podemos encontrar ningún dato. No se encontrarón resultados para la busqueda o no hay datos disponibles.
                                    </p>
                                  </div>
                                </div>
                              </div>
                        </td>
                    </tr>
                    @endforelse
                  </tbody>

                </table>

              </div>
            </div>
          </div>
        </div>
    </div>
    @endif



</div>
