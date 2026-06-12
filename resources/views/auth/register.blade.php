<x-layout>  
    <h2>Register</h2>
    
    <div class="container mt-5" style="max-width: 500px">
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    <h2 class="h4 mb-4">Crear cuenta</h2>

                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" required value="{{ old('name') }}">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required value="{{ old('email') }}">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label fw-bold">Repetir contraseña</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Registrarme</button>

                    @if ($errors->any())
                        <div class="alert alert-danger mt-3">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>

</x-layout>