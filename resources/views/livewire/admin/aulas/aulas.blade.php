<div>
    @if ($create)
    <div class="card" id="mycard-dimiss">
        <div class="card-header">
          <h4>Agrega Aula</h4>
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
                        <label for="inputPassword4">Capacidad</label>
                        <input wire:model="capacidad" type="text" class="form-control {{ $errors->has('capacidad') ? ' is-invalid' : '' }}" placeholder="Capacidad" name="identificador">
                        <div class="errors">@error('capacidad') {{ $message }} @enderror</div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4">Disponibilidad</label>

                        <div class="form-check">
                            <input wire:model="disponible" class="form-check-input" type="radio" name="disponible" id="gridRadios1" value="En servicio" checked>
                            <label class="form-check-label" for="gridRadios1">
                            En servicio
                            </label>
                          </div>
                          <div class="form-check">
                            <input wire:model="disponible" class="form-check-input" type="radio" name="disponible" id="gridRadios2" value="Fuera de servicio">
                            <label class="form-check-label" for="gridRadios2">
                              Fuera de servicio
                            </label>
                          </div>
                        {{-- <label for="inputPassword4">Disponibilidad</label>
                        <input wire:model="disponible" type="text" class="form-control {{ $errors->has('disponible') ? ' is-invalid' : '' }}" placeholder="" name="anio">
                        <div class="errors">@error('disponible') {{ $message }} @enderror</div> --}}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Observación</label>
                        <input wire:model="observacion" type="text" class="form-control {{ $errors->has('observacion') ? ' is-invalid' : '' }}" placeholder="Observaciones" name="observacion">
                        <div class="errors">@error('observacion') {{ $message }} @enderror</div>
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
              <h4>Aulas</h4>
              <div class="card-header-form">
                <form>
                  <div class="input-group">
                    <input wire:model.live="query" type="text" class="form-control" placeholder="Nombre o por disponibilidad">
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
                            <th>Aula</th>
                            <th>Capacidad</th>
                            <th>Disponible</th>
                            <th>Observación</th>
                            <th>Acción</th>
                          </tr>
                    </thead>
                  <tbody>
                    @forelse ($aulas as $item)
                    <tr>
                      <td>{{ $item->nombre }}</td>
                      <td class="align-middle">
                        {{ $item->capacidad }}
                      </td>
                      <td class="align-middle">
                          @if ($item->disponible == 'En servicio')
                          <div class="badge badge-success">En servicio</div></td>
                          @else
                          <div class="badge badge-danger">Fuera de servicio</div></td>
                          @endif
                        </td><td class="align-middle">
                          {{ $item->observacion }}
                      <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">
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

