<div class="row">
    @foreach($pacientes as $paciente)
        <div class="col-md-6 mb-4">
            <div class="card paciente-card">
                <div class="card-body d-flex align-items-center">
                    <img src="{{ asset($paciente['foto']) }}" class="img-fluid rounded-circle mr-3" alt="Foto de {{ $paciente['nombre'] }}" style="width: 80px; height: 80px;">
                    <div>
                        <h5>{{ $paciente['nombre'] }}</h5>
                        <p><strong>Peso:</strong> {{ $paciente['peso'] }} kg</p>
                        <p><strong>Altura:</strong> {{ $paciente['altura'] }} cm</p>
                        <p><strong>Enfermedad:</strong> {{ $paciente['enfermedad'] }}</p>
                        <p><strong>Alergia:</strong> {{ $paciente['alergia'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
