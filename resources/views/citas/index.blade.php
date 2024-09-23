@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4">Citas Pendientes</h2>
    <div class="row">
        @foreach($citas as $cita)
            <div class="col-md-6 mb-4">
                <div class="card cita-card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5>{{ $cita['paciente'] }}</h5>
                            <p><strong>Razón:</strong> {{ $cita['razon'] }}</p>
                        </div>
                        <div>
                            <span class="badge badge-warning">{{ $cita['estado'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
