@extends('templatemenu')

@section('contenidomenu')
    <!--  Start -->
    <div class="container-fluid" style="margin: 0px 0;">
        <div class="container py-5">
            <h1 class="h2" style="color:#020000">¿Donde prefieres hospedarte?</h1>
            <br />
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                    <label class="form-check-label text-black-50" for="checkbox1"
                                        style="padding-left: 10px;">
                                        Hotel urbano
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                                    <label class="form-check-label text-black-50" for="checkbox2"
                                        style="padding-left: 5px;">
                                        Hotel boutique
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                                    <label class="form-check-label text-black-50" for="checkbox3"
                                        style="padding-left: 10px;">
                                        Glamping
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkbox4">
                                    <label class="form-check-label text-black-50" for="checkbox4"
                                        style="padding-left: 10px;">
                                        Hotel para eventos
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkbox5">
                                    <label class="form-check-label text-black-50" for="checkbox5"
                                        style="padding-left: 10px;">
                                        Hotel economico
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkbox6">
                                    <label class="form-check-label text-black-50" for="checkbox6"
                                        style="padding-left: 10px;">
                                        Hotel arquitectura colonial
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- boton continuar -->
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary me-md-2" href="{{ route('question1') }}" style="border-radius: 4px;">Volver</a>
                <a class="btn btn-primary" href="{{ route('question3') }}"
                    style="border-radius: 4px; margin-left: 2px;">Continuar</a>
            </div>
            <br />
        </div>
    </div>
@endsection
