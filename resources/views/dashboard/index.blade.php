<x-basicLayout pageTitle="Dashboard">


    <div class="container p-4 mt-3 mb-3 shadow-lg bg-light rounded">
        <div class="row text-center">
            <div class="col-sm">
                <h2>Personagens</h2>
                <a href="{{ route('characters.all', '1') }}" class="btn btn-primary mt-3 mb-3">Listar todos</a>
            </div>
            <div class="col-sm">
                <h2>Lugares</h2>
                <a href="{{ route('locations.all', '1') }}" class="btn btn-primary mt-3 mb-3">Listar todos</a>
            </div>
            <div class="col-sm">
                <h2>Episódios</h2>
                <a href="" class="btn btn-primary mt-3 mb-3">Listar todos</a>
            </div>
        </div>
    </div>

</x-basicLayout>
