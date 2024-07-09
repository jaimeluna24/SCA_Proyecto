<div class="row">
    <div class="col-12">
      <div class="card scrolling-pagination">
        <div class="card-header">
          <h4>Docentes</h4>
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
                <th>Email</th>
                <th>Sede</th>
                <th>Estado</th>
                <th>Acción</th>
              </tr>
              @forelse ($docentes as $item)
              <tr>
                <td>{{ $item->nombre }} {{ $item->apellido }}</td>
                <td class="align-middle">
                  {{ $item->email }}
                </td>
                <td>
                    {{ $item->sede->nombre }}
                </td>
                <td>
                    @if ($item->active == 1)
                    <div class="badge badge-success">Activo</div></td>
                    @else
                    <div class="badge badge-danger">Inactivo</div></td>

                    @endif
                <td><a href="#" class="btn btn-secondary">Detail</a></td>
              </tr>
              @empty
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
                    <a href="usuarios/registrar" class="btn btn-primary mt-4">¿Crear registro nuevo?</a>
                  </div>
                </div>
              </div>
              @endforelse
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
