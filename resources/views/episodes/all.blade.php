<x-basicLayout pageTitle="Episódios">

    <div class="container p-4 mt-3 mb-3 shadow-lg bg-light rounded">

        <h1 class="text-center mb-1">Todos os Episódios</h1>
        <h4 class="text-center mb-4">Total: <span class="badge badge-dark">{{ $episodes['info']['count'] }}</span></h4>

        <div class="row">
            @foreach ($episodes['results'] as $data)

                <div class="col-sm-4 mb-3">
                    <div class="card">
                        <img class="card-img-top" src=""
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $data['name'] }}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Data Lançamento: {{ $data['air_date'] }}</li>
                            <li class="list-group-item">Episódio: {{ $data['episode'] }}</li>
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
                <li class="page-item <?= !isset($episodes['info']['prev']) ? 'disabled' : '' ?>">
                    <a class="page-link" href="{{ route('episodes.all', $prev) }}" tabindex="-1">Anterior</a>
                </li>
                <li class="page-item <?= !isset($episodes['info']['next']) ? 'disabled' : '' ?>">
                    <a class="page-link" href="{{ route('episodes.all', $next) }}">Próximo</a>
                </li>
            </ul>
        </nav>

    </div>
</x-basicLayout>
