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
                <div class="form-group col-md-12">
                    <label for="inputPassword4">Nombre</label>
                    <input wire:model="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nombre" name="name">
                    <div class="errors">@error('name') {{ $message }} @enderror</div>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputPassword4">Descripción</label>
                    <input wire:model="descripcion" type="text" class="form-control {{ $errors->has('descripcion') ? ' is-invalid' : '' }}" placeholder="Descripción" name="descripcion">
                    <div class="errors">@error('descripcion') {{ $message }} @enderror</div>

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
              <h4>Roles</h4>

              <div class="card-header-form">

                <form>
                  <div class="input-group">
                    <input wire:model.live="query" type="text" class="form-control" placeholder="Search">
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
                  <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acción</th>
                  </tr>
                  @forelse ($roles as $item)
                  <tr>
                    <td>{{ $item->name }}</td>
                    <td class="align-middle">
                      {{ $item->descripcion }}
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
                </table>

              </div>
            </div>
          </div>
        </div>
    </div>
    @endif



</div>
