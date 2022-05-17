<x-basicLayout pageTitle="Personagens">

    <div class="container p-4 mt-3 mb-3 shadow-lg bg-light rounded">

        <h1 class="text-center mb-1">Todos os Personagens</h1>
        <h4 class="text-center mb-4">Total: <span class="badge badge-dark">{{ $characters['info']['count'] }}</span></h4>

        <div class="row">
            @foreach ($characters['results'] as $data)
                <div class="col-sm-4 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ $data['image'] }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $data['name'] }}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Status: {{ $data['status'] }}</li>
                            <li class="list-group-item">Espécie: {{ $data['species'] }}</li>
                            <li class="list-group-item">Tipo: {{ $data['type'] }}</li>
                            <li class="list-group-item">Gênero: {{ $data['gender'] }}</li>
                            <li class="list-group-item">Origem: {{ $data['origin']['name'] }}</li>
                            <li class="list-group-item">Localização: {{ $data['location']['name'] }}</li>
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
                <li class="page-item <?= !isset($characters['info']['prev']) ? 'disabled' : '' ?>">
                    <a class="page-link" href="{{ route('characters.all', $prev) }}" tabindex="-1">Anterior</a>
                </li>
                <li class="page-item <?= !isset($characters['info']['next']) ? 'disabled' : '' ?>">
                    <a class="page-link" href="{{ route('characters.all', $next) }}">Próximo</a>
                </li>
            </ul>
        </nav>

    </div>
</x-basicLayout>
