<div class="container mt-4">
    <h2 class="text-center">Plan Alimenticio Simulado</h2>
    
    <div class="plan-info mt-4">
        <p><strong>Nombre:</strong> Juan Pérez</p>
        <p><strong>Motivo:</strong> Control de peso</p>
    </div>

    <div class="calendar">
        <div class="calendar-header">
            <span class="week-label">Semana</span>
            <div class="days-of-week">
                @foreach(array_keys($planAlimenticio) as $dia)
                    <div class="day-header">{{ $dia }}</div>
                @endforeach
            </div>
        </div>
        <div class="calendar-body">
            @foreach($planAlimenticio as $dia => $comidas)
                <div class="day-column">
                    @foreach($comidas as $comida => $detalle)
                        <div class="meal-block">
                            <span class="meal-name">{{ $comida }}</span>
                            <p>{{ $detalle }}</p>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

    <div class="add-alimento-form mt-4">
        <h4>Añadir Alimento</h4>
        <form id="add-alimento">
            <div class="form-group">
                <label for="dia-semana">Día de la Semana:</label>
                <select id="dia-semana" class="form-control">
                    <option value="Lunes">Lunes</option>
                    <option value="Martes">Martes</option>
                    <option value="Miércoles">Miércoles</option>
                    <option value="Jueves">Jueves</option>
                    <option value="Viernes">Viernes</option>
                    <option value="Sábado">Sábado</option>
                    <option value="Domingo">Domingo</option>
                </select>
            </div>

            <div class="form-group">
                <label for="comida">Tipo de Comida:</label>
                <select id="comida" class="form-control">
                    <option value="Desayuno">Desayuno</option>
                    <option value="Colación">Colación</option>
                    <option value="Almuerzo">Almuerzo</option>
                    <option value="Cena">Cena</option>
                </select>
            </div>

            <div class="form-group">
                <label for="alimento">Alimento:</label>
                <input type="text" id="alimento" class="form-control" placeholder="Nombre del alimento">
            </div>

            <div class="form-group">
                <label for="calorias">Calorías:</label>
                <input type="number" id="calorias" class="form-control" placeholder="Calorías">
            </div>

            <button type="button" class="btn btn-success" id="add-alimento-btn">Añadir</button>
        </form>
    </div>
</div>

<script>
    let planAlimenticio = @json($planAlimenticio);

    document.getElementById('add-alimento-btn').addEventListener('click', function() {
        const dia = document.getElementById('dia-semana').value;
        const comida = document.getElementById('comida').value;
        const alimento = document.getElementById('alimento').value;
        const calorias = document.getElementById('calorias').value;

        if (alimento && calorias) {
            planAlimenticio[dia][comida] = `${alimento} (${calorias} kcal)`;
            renderPlan();
        }
    });

    function renderPlan() {
        const tbody = document.querySelector('tbody');
        tbody.innerHTML = '';

        for (const [dia, comidas] of Object.entries(planAlimenticio)) {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${dia}</td>
                <td>${comidas.Desayuno}</td>
                <td>${comidas.Colación}</td>
                <td>${comidas.Almuerzo}</td>
                <td>${comidas.Cena}</td>
            `;
            tbody.appendChild(row);
        }
    }

    renderPlan();
</script> 

