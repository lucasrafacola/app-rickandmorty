<x-basicLayout pageTitle="Lugares">

    <div class="container p-4 mt-3 mb-3 shadow-lg bg-light rounded">

        <h1 class="text-center mb-1">Todos os Lugares</h1>
        <h4 class="text-center mb-4">Total: <span class="badge badge-dark">{{ $locations['info']['count'] }}</span></h4>

        <div class="row">
            @foreach ($locations['results'] as $data)
                <?php
                $key = array_rand($images);
                ?>

                <div class="col-sm-4 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="<?= asset('images/' . $images[$key] . '') ?>"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $data['name'] }}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Tipo: {{ $data['type'] }}</li>
                            <li class="list-group-item">Dimensão: {{ $data['dimension'] }}</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Origem</a>
                            <a href="#" class="card-link">Localização</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item <?= !isset($locations['info']['prev']) ? 'disabled' : '' ?>">
                    <a class="page-link" href="{{ route('locations.all', $prev) }}" tabindex="-1">Anterior</a>
                </li>
                <li class="page-item <?= !isset($locations['info']['next']) ? 'disabled' : '' ?>">
                    <a class="page-link" href="{{ route('locations.all', $next) }}">Próximo</a>
                </li>
            </ul>
        </nav>

    </div>
</x-basicLayout>
