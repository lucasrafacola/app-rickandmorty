<x-basicLayout pageTitle="Login">

    <div class="container">

        <h1 class="text-center mb-5">Login</h1>

        <form action="{{ route('auth.login') }}" method="post" class="justify-center">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('fail'))
                <div class="alert alert-danger">
                    <ul>
                        <li>{{ session('fail') }}</li>
                    </ul>
                </div>
            @endif

            @csrf

            <div class="form-group col-6">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email">
            </div>

            <div class="form-group col-6 mt-4">
                <label for="password">Senha</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>

            <button class="btn btn-primary">Logar</button>
        </form>

    </div>

</x-basicLayout>
