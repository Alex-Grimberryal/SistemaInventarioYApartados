
    <div class="container">
        <header>
            <!-- Aquí puedes agregar el encabezado de tu aplicación -->
            <h1>Tu Aplicación</h1>
        </header>

        <main>
            <div class="content">
                @yield('content')
            </div>
        </main>

        <footer>
            <!-- Aquí puedes agregar el pie de página de tu aplicación -->
            <p>© {{ date('Y') }} Tu Aplicación. Todos los derechos reservados.</p>
        </footer>
    </div>

    <!-- Incluir los archivos JavaScript necesarios -->
    <script src="{{ asset('js/app.js') }}"></script>

