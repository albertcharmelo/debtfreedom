<body>
    <div class="nombre">
        <span style="font-weight: bold">Nombre del Cliente:</span>
        <p>{{ $data->nombre }} {{ $data->apellido }}</p>
    </div>
    <div class="state">
        <span style="font-weight: bold">
            Ubicación:
        </span>
        <p>{{ $data->lugar }}</p>
    </div>
    <div class="telefono">
        <span style="font-weight: bold">
            Telefono de contacto:
        </span>
        <p>{{ $data->tlf }}</p>
    </div>
    <div class="correo">
        <span style="font-weight: bold">
            Correo de contacto:
        </span>
        <p>{{ $data->to }}</p>
    </div>
    <div class="deuda">
        <span style="font-weight: bold">
            Deuda del cliente:
        </span>
        <p>{{ $data->deuda }} $</p>
    </div>
    <div class="retaso">
        <span style="font-weight: bold">
            Retraso en la deuda del cliente
        </span>
        <p>{{ $data->retraso }}</p>
    </div>
    <div class="Fee">
        <span style="font-weight: bold">
            Fee %
        </span>
        <p>{{ $data->fee }} %</p>
    </div>

</body>
