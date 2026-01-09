@extends('template.default')

@section('header1', '✏️ Edit Pokémon')

@section('content')
<div class="row justify-content-center">

    <div class="col-md-6 mt-3">
        <div class="card shadow">
            <div class="card-header bg-warning">
                แก้ไขข้อมูล Pokémon
            </div>

            <div class="card-body">
                <form action="/pokedex/{{ $pokedex_update->id }}" method="post">
                    @csrf
                    @method('put')

                    <input class="form-control mb-2" name="name" value="{{ $pokedex_update->name }}">
                    <input class="form-control mb-2" name="type" value="{{ $pokedex_update->type }}">
                    <input class="form-control mb-2" name="species" value="{{ $pokedex_update->species }}">

                    <div class="row">
                        <div class="col">
                            <input class="form-control mb-2" name="height" value="{{ $pokedex_update->height }}">
                        </div>
                        <div class="col">
                            <input class="form-control mb-2" name="weight" value="{{ $pokedex_update->weight }}">
                        </div>
                    </div>

                    <input class="form-control mb-2" name="hp" value="{{ $pokedex_update->hp }}">
                    <input class="form-control mb-2" name="attack" value="{{ $pokedex_update->attack }}">
                    <input class="form-control mb-2" name="defense" value="{{ $pokedex_update->defense }}">
                    <input class="form-control mb-2" name="image_url" value="{{ $pokedex_update->image_url }}">

                    <button class="btn btn-success w-100">
                        💾 บันทึกการแก้ไข
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
