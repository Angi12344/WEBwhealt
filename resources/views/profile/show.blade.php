@extends('layouts.app')

@section('content')
<div class="profile-container">
    <div class="profile-header">
        <div class="profile-image">
            <!-- Aquí iría la imagen de perfil -->
            <img src="{{ asset('images/humano.jpg') }}" alt="Perfil">
        </div>
        <h2>Perfil</h2>
    </div>
    
    <div class="profile-details">
        @foreach ($user as $key => $value)
            <div class="profile-field">
                <label>{{ ucfirst(str_replace('_', ' ', $key)) }}:</label>
                <input type="text" value="{{ $value }}" readonly>
                <button class="edit-btn"><i class="fas fa-pencil-alt"></i> Editar</button>
            </div>
        @endforeach
        <button class="save-btn" disabled>Guardar Cambios</button>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function () {
            const input = this.previousElementSibling;
            input.removeAttribute('readonly');
            input.focus();
            document.querySelector('.save-btn').removeAttribute('disabled');
        });
    });

    document.querySelector('.save-btn').addEventListener('click', function () {
        alert('Cambios guardados (simulación)');
    });
</script>
@endsection
