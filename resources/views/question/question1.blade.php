@extends('templatemenu')

@section('contenidomenu')
    <!--  Start -->
    <div class="container-fluid" style="margin: 0px 0;">
        <div class="container py-5">
            <h1 class="h2" style="color:#020000">Hola, selecciona el tipo de<span style="display:block;"> comida que
                    te gusta.</span></h1>
            <p style="color:#454545"> Esto nos ayudara a recomendarte lo que mas te gusta</p>
            <div class="row">
                <!-- Imágenes de comida en disposición horizontal -->
                <div class="col-md-3 mb-3">
                    <label>
                        <input type="checkbox" name="tipo[]" value="1" style="display: none;">
                        <img class="img-select"
                            src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            style="width: 255px; height: 170px;">
                    </label>
                </div>
                <div class="col-md-3 mb-3">
                    <label>
                        <input type="checkbox" name="tipo[]" value="2" style="display: none;">
                        <img class="img-select"
                            src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Comida 2" style="width: 255px; height: 170px;">
                    </label>
                </div>
                <div class="col-md-3 mb-3">
                    <label>
                        <input type="checkbox" name="tipo[]" value="3" style="display: none;">
                        <img class="img-select"
                            src="https://media.istockphoto.com/id/1472815264/es/foto/empanada-colombiana-con-salsa-picante.webp?b=1&s=170667a&w=0&k=20&c=9AAmr4yavzFmTsR-lyLUQitYwvrTJ4c56i__hYAhJ2Q="
                            alt="Comida 3"style="width: 255px; height: 170px;">
                    </label>
                </div>
                <div class="col-md-3 mb-3">
                    <label>
                        <input type="checkbox" name="tipo[]" value="4" style="display: none; ">
                        <img class="img-select"
                            src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=1398&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Comida 4" style="width: 255px; height: 170px;">
                    </label>
                </div>

                <!-- Imágenes de comida en disposición vertical -->
                <div class="col-md-3 mb-3">
                    <label>
                        <input type="checkbox" name="tipo[]" value="5" style="display: none;">
                        <img class="img-select" style="width: 255px; height: 200px;"
                            src="https://plus.unsplash.com/premium_photo-1661419883163-bb4df1c10109?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Comida 5">
                    </label>
                </div>
                <div class="col-md-3 mb-3">
                    <label>
                        <input type="checkbox" name="tipo[]" value="6" style="display: none;">
                        <img class="img-select" style="width: 255px; height: 200px;"
                            src="https://images.unsplash.com/photo-1519996529931-28324d5a630e?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Comida 6">
                    </label>
                </div>
                <div class="col-md-3 mb-3">
                    <label>
                        <input type="checkbox" name="tipo[]" value="7" style="display: none;">
                        <img class="img-select" style="width: 255px; height: 200px;"
                            src="https://plus.unsplash.com/premium_photo-1664478272084-532c1bfebd25?q=80&w=1440&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Comida 7">
                    </label>
                </div>
                <div class="col-md-3 mb-3">
                    <label>
                        <input type="checkbox" name="tipo[]" value="8" style="display: none;">
                        <img class="img-select" style="width: 255px; height: 200px;"
                            src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?q=80&w=1480&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Comida 8">
                    </label>
                </div>
                <p style="color:#454545">Presiona una vez para seleccionar y dos veces para quitar la seleccionar.</p>
            </div>
            <!-- estado de imagen seleccionada -->
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const imgSelects = document.querySelectorAll('.img-select');
                    const checkboxes = document.querySelectorAll('input[type="checkbox"]');

                    imgSelects.forEach(function(imgSelect, index) {
                        imgSelect.addEventListener("click", function() {
                            const checkbox = checkboxes[index];
                            const checkedCount = document.querySelectorAll('input[type="checkbox"]:checked')
                                .length;

                            if (!checkbox.checked && checkedCount >= 3) {
                                return; // No permite marcar más checkboxes si ya se han seleccionado tres
                            }

                            checkbox.checked = !checkbox.checked; // Cambia el estado del checkbox
                            if (checkbox.checked) {
                                this.classList.add(
                                    'img-selected'); // Añade la clase si el checkbox está marcado
                            } else {
                                this.classList.remove(
                                    'img-selected'); // Remueve la clase si el checkbox no está marcado
                            }
                        });

                        imgSelect.addEventListener("dblclick", function() {
                            const checkbox = checkboxes[index];
                            checkbox.checked = false; // Desmarca el checkbox
                            this.classList.remove(
                                'img-selected'); // Remueve la clase de selección de la imagen
                        });
                    });
                });
            </script>

            <!-- boton continuar y volver -->
            <div class="container my-10">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary me-md-2" href="{{ route('login.login') }}"
                        style="border-radius: 4px;">Volver</a>
                    <a class="btn btn-primary" href="{{ route('question2') }}"
                        style="border-radius: 4px; margin-left: 2px;">Continuar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
