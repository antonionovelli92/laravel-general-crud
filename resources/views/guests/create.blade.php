@extends('layouts.main')
@section('title')

@section('content')
<div class="form-create mt-5 bg-light p-5 rounded-3">
    <form method="POST" action="{{ route('guests.store') }}">
        {{-- probelma pagina 419, usare questo metodo --}}
        @csrf
        <div class="row">
            {{-- Nome --}}
            <div class="col-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="name" placeholder="Inserisci nome"
                        name="name" required>
                </div>
            </div>
            {{-- Cognome --}}
            <div class="col-6">
                <div class="mb-3 ">
                    <label for="surname" class="form-label d-block">Cognome:</label>
                    <input type="text" class="form-control" id="surname" placeholder="Inserisci il cognome"
                        name="surname" required>
                </div>
            </div>
            {{-- DATA DI NASCITA --}}
            <div class="col-3">
                <div class="mb-3">
                    <label for="born" class="form-label">Data di nascita:</label>
                    <input type="date" class="form-control" id="born"
                        placeholder="Inserisci data di nascita" name="born" required>
                </div>
            </div>
            {{-- GENERE --}}
            <div class="col-2">
                <div class="mb-3">
                    <label for="gender" class="form-label">Sesso:</label>
                    <select name="gender" id="gender" value="{{ old('gender') }}">
                        <option value="0" selected>M</option>
                        <option value="1">F</option>
                    </select>
                </div>
            </div>
            {{-- ETA' --}}
            <div class="col-2">
                <div class="mb-3">
                    <label for="age" class="form-label">ETA':</label>
                    <input type="number" min="3" class="form-control" id="age" placeholder="Inserisci l'età"
                        name="age" required>
                </div>
            </div>

            {{-- LUOGO DI NASCITA --}}
            <div class="col-5">
                <div class="mb-3">
                    <label for="birth_place" class="form-label">Luogo di nascita:</label>
                    <input type="text" class="form-control" id="birth_place" placeholder="Inserisci luogo di nascita"
                        name="birth_place" value="{{ old('birth_place') }}">
                </div>
            </div>

            {{-- CF --}}
            <div class="col-6">
                <div class="mb-3">
                    <label for="CF" class="form-label">Codice Fiscale:</label>
                    <input type="text" class="form-control" id="CF" placeholder="Inserisci codice fiscale"
                        name="CF" value="{{ old('CF') }}">
                </div>
            </div>
            {{-- DOC NUMBER --}}
            <div class="col-4">
                <div class="mb-3">
                    <label for="doc_number" class="form-label">ID:</label>
                    <input type="text" class="form-control" id="doc_number" placeholder="Inserisci ID"
                        name="doc_number" value="{{ old('doc_number') }}">
                </div>
            </div>
            {{-- PRINTING DATE --}}
            <div class="col-2">
                <div class="mb-3">
                    <label for="printing_date" class="form-label">Data:</label>
                    <input type="date" class="form-control" id="printing_date" placeholder="Inserisci data odierna"
                        name="printing_date" value="{{ old('printing_date') }}">
                </div>
            </div>
            {{-- PIASTRINE --}}
            <div class="col-2">
                <div class="mb-3">
                    <label for="piastrine" class="form-label">PIASTRINE':</label>
                    <input type="number" min="0" class="form-control" id="piastrine" step=0.01 placeholder="Inserisci numero piastrine"
                        name="piastrine" required>
                </div>
            </div>
            {{-- GB --}}
            <div class="col-2">
                <div class="mb-3">
                    <label for="GB" class="form-label">GB':</label>
                    <input type="number" min="0" class="form-control" id="GB" step=0.01 placeholder="Inserisci numero GB"
                        name="GB" required>
                </div>
            </div>
            {{-- GR --}}
            <div class="col-2">
                <div class="mb-3">
                    <label for="GR" class="form-label">GR':</label>
                    <input type="number" min="0" class="form-control" id="GR" step=0.01 placeholder="Inserisci numero GR"
                        name="GR" required>
                </div>
            </div>
            {{-- EMO --}}
            <div class="col-2">
                <div class="mb-3">
                    <label for="EMO" class="form-label">EMO':</label>
                    <input type="number" min="0" class="form-control" id="EMO" step=0.01 placeholder="Inserisci numero EMO"
                        name="EMO" required>
                </div>
            </div>
            {{-- EMA --}}
            <div class="col-2">
                <div class="mb-3">
                    <label for="EMA" class="form-label">EMA':</label>
                    <input type="number" min="0" class="form-control" id="EMA" step=0.01 placeholder="Inserisci numero EMA"
                        name="EMA" required>
                </div>
            </div>
            {{-- VCM --}}
            <div class="col-2">
                <div class="mb-3">
                    <label for="VCM" class="form-label">VCM':</label>
                    <input type="number" min="0" class="form-control" id="VCM" step=0.01 placeholder="Inserisci numero VCM"
                        name="VCM" required>
                </div>
            </div>
            {{-- CCM --}}
            <div class="col-2">
                <div class="mb-3">
                    <label for="CCM" class="form-label">CCM':</label>
                    <input type="number" min="0" class="form-control" id="CCM" step=0.01 placeholder="Inserisci numero CCM"
                        name="CCM" required>
                </div>
            </div>
            {{-- CMC --}}
            <div class="col-2">
                <div class="mb-3">
                    <label for="CMC" class="form-label">CMC':</label>
                    <input type="number" min="0" class="form-control" id="CMC" step=0.01 placeholder="Inserisci numero CMC"
                        name="CMC" required>
                </div>
            </div>
            {{-- AMD --}}
            <div class="col-2">
                <div class="mb-3">
                    <label for="AMD" class="form-label">AMD':</label>
                    <input type="number" min="0" class="form-control" id="AMD" step=0.01 placeholder="Inserisci numero AMD"
                        name="AMD" required>
                </div>
            </div>
            {{-- VMP --}}
            <div class="col-2">
                <div class="mb-3">
                    <label for="VMP" class="form-label">VMP':</label>
                    <input type="number" min="0" class="form-control" id="VMP" step=0.01 placeholder="Inserisci numero VMP"
                        name="VMP" required>
                </div>
            </div>
            {{-- EMI --}}
            <div class="col-2">
                <div class="mb-3">
                    <label for="EMI" class="form-label">EMI':</label>
                    <input type="number" min="0" class="form-control" id="EMI" step=0.01 placeholder="Inserisci numero EMI"
                        name="EMI" required>
                </div>
            </div>
            {{-- ALT --}}
            <div class="col-2">
                <div class="mb-3">
                    <label for="ALT" class="form-label">ALT':</label>
                    <input type="number" min="0" class="form-control" id="ALT" step=0.01 placeholder="Inserisci numero ALT"
                        name="ALT" required>
                </div>
            </div>


        </div>
        <div class="d-flex justify-content-end p-5">
            <button type="submit" class="btn px-5 border-white btn-primary">INVIA</button>
        </div>

        <a href="{{ route('guests.index') }}" class="btn btn-small btn-danger">BACK</a>
    </form>
</div>

@endsection