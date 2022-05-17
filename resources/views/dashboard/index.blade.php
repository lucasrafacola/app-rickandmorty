<x-basicLayout pageTitle="Dashboard">


    <div class="container p-4 mt-3 mb-3 shadow-lg bg-light rounded">
        <div class="row text-center">
            <div class="col-sm">
                <h2>Personagens</h2>
                <a href="{{ route('characters.all', '1') }}" class="btn btn-primary mt-3 mb-3">Listar todos</a>
                <form action="{{ route('characters.filter') }}" method="post">

                    @csrf

                    <h5 class="mt-5">Filtros</h5>
                    <div class="form-group form-inline mt-3">
                        <input id="name" class="form-control col-12" type="text" name="name" placeholder="Nome">
                    </div>
                    <div class="form-group form-inline d-flex">
                        <select class="form-control col-6" name="status" id="status" placeholder="Status">
                            <option selected disabled value="">Status</option>
                            <option value="alive">Alive</option>
                            <option value="dead">Dead</option>
                            <option value="unknown">unknown</option>
                        </select>
                    </div>
                    <div class="form-group form-inline d-flex">
                        <input id="species" class="form-control col-12" type="text" name="species"
                            placeholder="Espécie">
                    </div>
                    <div class="form-group form-inline d-flex">
                        <input id="type" class="form-control col-12" type="text" name="type" placeholder="Tipo">
                    </div>
                    <div class="form-group form-inline d-flex">
                        <select class="form-control col-6" name="gender" id="gender" placeholder="Gender">
                            <option selected disabled value="">Gênero</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                            <option value="genderless">Genderless</option>
                            <option value="unknown">unknown</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-outline-success">PROCURAR</button>

                </form>
            </div>
            <div class="col-sm">
                <h2>Lugares</h2>
                <a href="{{ route('locations.all', '1') }}" class="btn btn-primary mt-3 mb-3">Listar todos</a>
            </div>
            <div class="col-sm">
                <h2>Episódios</h2>
                <a href="{{ route('episodes.all', '1') }}" class="btn btn-primary mt-3 mb-3">Listar todos</a>
            </div>
        </div>
    </div>

</x-basicLayout>
