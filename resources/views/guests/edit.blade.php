@extends('layouts.main')
@section('title')

@section('content')

    <div class="form-create mt-5 bg-light p-5 rounded-3">
        <form method="POST" action="{{ route('guests.update', $guest->id) }}">
            @method('PUT')
            {{-- probelma pagina 419, usare questo metodo --}}
            @csrf
            <div class="row">
                {{-- Nome --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="name" placeholder="Inserisci nome" name="name"
                            required value="{{ old('name', $guest->name) }}" step=0.1>
                    </div>
                </div>
                {{-- Cognome --}}
                <div class="col-6">
                    <div class="mb-3 ">
                        <label for="surname" class="form-label d-block">Cognome:</label>
                        <input type="text" class="form-control" id="surname" placeholder="Inserisci il cognome"
                            name="surname" required value="{{ old('surname', $guest->surname) }}" step=0.1>
                    </div>
                </div>
                {{-- DATA DI NASCITA --}}
                <div class="col-3">
                    <div class="mb-3">
                        <label for="born" class="form-label">Data di nascita:</label>
                        <input type="date" class="form-control" id="born" placeholder="Inserisci data di nascita"
                            name="born" required value="{{ old('born', $guest->born) }}" step=0.1>
                    </div>
                </div>
                {{-- GENERE --}}
                <div class="col-2">
                    <div class="mb-3">
                        <label for="gender" class="form-label">Sesso:</label>
                        <select name="gender" id="gender" value="{{ old('gender', $guest->gender) }}" step=0.1>
                            <option value="0" selected>M</option>
                            <option value="1">F</option>
                        </select>
                    </div>
                </div>
                {{-- ETA' --}}
                <div class="col-2">
                    <div class="mb-3">
                        <label for="age" class="form-label">ETA':</label>
                        <input type="number" min="3" class="form-control" id="age"
                            placeholder="Inserisci l'età" name="age" required value="{{ old('age', $guest->age) }}"
                            step=0.1>
                    </div>
                </div>

                {{-- LUOGO DI NASCITA --}}
                <div class="col-5">
                    <div class="mb-3">
                        <label for="birth_place" class="form-label">Luogo di nascita:</label>
                        <input type="text" class="form-control" id="birth_place" placeholder="Inserisci luogo di nascita"
                            name="birth_place" value="{{ old('birth_place', $guest->birth_place) }}" step=0.1>
                    </div>
                </div>

                {{-- CF --}}
                <div class="col-6">
                    <div class="mb-3">
                        <label for="CF" class="form-label">Codice Fiscale:</label>
                        <input type="text" class="form-control" id="CF" placeholder="Inserisci codice fiscale"
                            name="CF" value="{{ old('CF', $guest->CF) }}" step=0.1>
                    </div>
                </div>
                {{-- DOC NUMBER --}}
                <div class="col-4">
                    <div class="mb-3">
                        <label for="doc_number" class="form-label">ID:</label>
                        <input type="text" class="form-control" id="doc_number" placeholder="Inserisci ID"
                            name="doc_number" value="{{ old('doc_number', $guest->doc_number) }}" step=0.1>
                    </div>
                </div>
                {{-- PRINTING DATE --}}
                <div class="col-2">
                    <div class="mb-3">
                        <label for="printing_date" class="form-label">Data:</label>
                        <input type="date" class="form-control" id="printing_date" placeholder="Inserisci data odierna"
                            name="printing_date" value="{{ old('printing_date', $guest->printing_date) }}" step=0.1>
                    </div>
                </div>
                {{-- PIASTRINE --}}
                <div class="col-2">
                    <div class="mb-3">
                        <label for="piastrine" class="form-label">PIASTRINE':</label>
                        <input type="number" min="0" class="form-control" id="piastrine"
                            placeholder="Inserisci numero piastrine" name="piastrine" required
                            value="{{ old('piastrine', $guest->piastrine) }}" step=0.1>
                    </div>
                </div>
                {{-- GB --}}
                <div class="col-2">
                    <div class="mb-3">
                        <label for="GB" class="form-label">GB':</label>
                        <input type="number" min="0" class="form-control" id="GB"
                            placeholder="Inserisci numero GB" name="GB" required
                            value="{{ old('GB', $guest->GB) }}" step=0.1>
                    </div>
                </div>
                {{-- GR --}}
                <div class="col-2">
                    <div class="mb-3">
                        <label for="GR" class="form-label">GR':</label>
                        <input type="number" min="0" class="form-control" id="GR"
                            placeholder="Inserisci numero GR" name="GR" required
                            value="{{ old('GR', $guest->GR) }}" step=0.1>
                    </div>
                </div>
                {{-- EMO --}}
                <div class="col-2">
                    <div class="mb-3">
                        <label for="EMO" class="form-label">EMO':</label>
                        <input type="number" min="0" class="form-control" id="EMO"
                            placeholder="Inserisci numero EMO" name="EMO" required
                            value="{{ old('EMO', $guest->EMO) }}" step=0.1>
                    </div>
                </div>
                {{-- EMA --}}
                <div class="col-2">
                    <div class="mb-3">
                        <label for="EMA" class="form-label">EMA':</label>
                        <input type="number" min="0" class="form-control" id="EMA"
                            placeholder="Inserisci numero EMA" name="EMA" required
                            value="{{ old('EMA', $guest->EMA) }}" step=0.1>
                    </div>
                </div>
                {{-- VCM --}}
                <div class="col-2">
                    <div class="mb-3">
                        <label for="VCM" class="form-label">VCM':</label>
                        <input type="number" min="0" class="form-control" id="VCM"
                            placeholder="Inserisci numero VCM" name="VCM" required
                            value="{{ old('VCM', $guest->VCM) }}" step=0.1>
                    </div>
                </div>
                {{-- CCM --}}
                <div class="col-2">
                    <div class="mb-3">
                        <label for="CCM" class="form-label">CCM':</label>
                        <input type="number" min="0" class="form-control" id="CCM"
                            placeholder="Inserisci numero CCM" name="CCM" required
                            value="{{ old('CCM', $guest->CCM) }}" step=0.1>
                    </div>
                </div>
                {{-- CMC --}}
                <div class="col-2">
                    <div class="mb-3">
                        <label for="CMC" class="form-label">CMC':</label>
                        <input type="number" min="0" class="form-control" id="CMC"
                            placeholder="Inserisci numero CMC" name="CMC" required
                            value="{{ old('CMC', $guest->CMC) }}" step=0.1>
                    </div>
                </div>
                {{-- AMD --}}
                <div class="col-2">
                    <div class="mb-3">
                        <label for="AMD" class="form-label">AMD':</label>
                        <input type="number" min="0" class="form-control" id="AMD"
                            placeholder="Inserisci numero AMD" name="AMD" required
                            value="{{ old('AMD', $guest->AMD) }}">
                    </div>
                </div>
                {{-- VMP --}}
                <div class="col-2">
                    <div class="mb-3">
                        <label for="VMP" class="form-label">VMP':</label>
                        <input type="number" min="0" class="form-control" id="VMP"
                            placeholder="Inserisci numero VMP" name="VMP" required
                            value="{{ old('VMP', $guest->VMP) }}" step=0.1>
                    </div>
                </div>
                {{-- EMI --}}
                <div class="col-2">
                    <div class="mb-3">
                        <label for="EMI" class="form-label">EMI':</label>
                        <input type="number" min="0" class="form-control" id="EMI"
                            placeholder="Inserisci numero EMI" name="EMI" required
                            value="{{ old('EMI', $guest->EMI) }}" step=0.1>
                    </div>
                </div>
                {{-- ALT --}}
                <div class="col-2">
                    <div class="mb-3">
                        <label for="ALT" class="form-label">ALT':</label>
                        <input type="number" min="0" class="form-control" id="ALT"
                            placeholder="Inserisci numero ALT" name="ALT" required
                            value="{{ old('ALT', $guest->ALT) }}" step=0.1>
                    </div>
                </div>


            </div>
            <div class="d-flex justify-content-center p-5">
                <button type="submit" class="btn px-5 border-white btn-primary">INVIA</button>
            </div>
        </form>
        <form action="{{ route('guests.destroy', $guest->id) }}" method="POST" class="my-2">
            @csrf
            @method('DELETE')
            <button href class="btn btn-small btn-danger">ELIMINA</button>
        </form>
        <a href="{{ route('guests.index') }}" class="btn btn-small btn-success">BACK</a>
    </div>















@endsection
