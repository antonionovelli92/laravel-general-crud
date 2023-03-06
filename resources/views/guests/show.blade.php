@extends('layouts.main')
@section('cdns')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'
        integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=='
        crossorigin='anonymous' />
@endsection





@section('title', 'Dettaglio')
@section('content')

    <div class="d-flex justify-content-center mt-5">
        <div class="row">
            <div class="col">
                <div class="wrapper bg-light rounded-3 p-1">
                    <div class="d-flex flex-column align-items-center mt-1">
                        <div class="row">
                            <div class="col-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-title text-center mt-4">
                                        <h6><span class="d-block"> NOME COMPLETO: {{ $guest->name }}
                                                {{ $guest->surname }}</span></h6>
                                        <p>{{ $guest->born }} , {{ $guest->gender }} , {{ $guest->age }} ,<br> Codice
                                            Fiscale: {{ $guest->CF }}</p>
                                        <strong>ID:{{ $guest->doc_number }}</strong>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Esame</th>
                                                    <th scope="col">Esito</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        EMOCROMO
                                                    <td>{{ $guest->EMO }}</td>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Piastrine</th>
                                                    <td>{{ $guest->piastrine }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Globuli Bianchi</th>
                                                    <td>{{ $guest->GB }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Globuli Rossi</th>
                                                    <td colspan="2">{{ $guest->GR }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Emoglobina</th>
                                                    <td>{{ $guest->EMO }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Ematocirito</th>
                                                    <td>{{ $guest->EMA }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Volume Cellulare Medio</th>
                                                    <td>{{ $guest->EMO }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Contenuto Cellul. Media</th>
                                                    <td>{{ $guest->CCM }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Concentraz.Cellul.medio Hb</th>
                                                    <td>{{ $guest->CMC }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Ampiezza Media Distib.G.R.</th>
                                                    <td>{{ $guest->AMD }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Volume Medio Piastrinico</th>
                                                    <td>{{ $guest->VMP }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Emazie Ipocromiche</th>
                                                    <td>{{ $guest->EMI }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">ALT (SGPT)</th>
                                                    <td>{{ $guest->ALT }}</td>
                                                    <td>U/l</td>
                                                </tr>
                                                <hr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="info-btn d-flex justify-content-end mt-5">
                            <a href="{{ route('guests.index') }}" class="btn btn-primary"><i
                                    class="fa-regular fa-hand-point-left"></i></a>
                            <a href="{{ route('guests.edit', $guest->id) }}" class="btn btn-success mx-2"><i
                                    class="fa-solid fa-pen-to-square"></i></a>


                        </div>



                    </div>
                </div>

            </div>
        </div>



        {{-- tabella di luca --}}

    @endsection
