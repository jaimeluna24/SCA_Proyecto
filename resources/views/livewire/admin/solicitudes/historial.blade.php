<div class="row">

    @if ($detalles)
    <div class="col-12">
        @include('livewire.admin.solicitudes.historial-detalle')
    </div>
    @else
    <div class="col-12" style=" margin-top: -20px; margin-bottom: 10px; display: flex; justify-content: end;">
        <div style="margin: 5px">
        <label class="mb-0">Fecha:</label>
        <input class="form-control" wire:model.live="fecha" type="date" name="" id="">
    </div>
    <div style="margin: 5px">
        <label class="mb-0">Estado:</label>
        <select class="form-control" wire:model.live="estado_id" name="" id="">
            <option value="0" selected>Todas</option>
            {{-- <option value="1">En espera</option> --}}
            <option value="2">Aprobada</option>
            <option value="3">Rechazada</option>
        </select>
    </div>
    </div>
    <div class="col-12">
      <div class="card scrolling-pagination">
        <div class="card-header">
            <h4>Solicitudes</h4>
            <div class="card-header-form">
              <form>
                <div class="input-group">
                  {{-- <input wire:model.live="query" type="text" class="form-control" placeholder="Buscar por periodo o por año"> --}}
                  <div class="">
                    <button class="btn btn-primary" wire:click.prevent="resetFiltro()"><i class="">Limpiar filtro</i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <th>No. Solicitud</th>
                <th>Aula - Modalidad</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Estado</th>
                <th>Acción</th>
              </tr>
              @forelse ($solicitudes as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->aula->nombre }} - {{ $item->tipo_aula->tipo }}</td>

                <td>
                    {{ $item->fecha }}
                </td>
                <td>
                    {{ $item->hora_inicio }} - {{ $item->hora_final }}
                </td>
                <td>
                    @if ($item->estado_id == 1)
                    <div class="badge badge-secondary">En espera</div></td>
                    @endif
                    @if ($item->estado_id == 2)
                    <div class="badge badge-success">Aprobada</div></td>
                    @endif
                    @if ($item->estado_id == 3)
                    <div class="badge badge-danger">Rechazada</div></td>
                    @endif
                <td><a wire:click="detallesSoli({{ $item->id }})" class="btn btn-secondary">Detalles</a></td>
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
    @endif

  </div>
