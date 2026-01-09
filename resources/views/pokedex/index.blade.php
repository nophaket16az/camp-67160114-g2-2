@extends('template.default')

@section('header1', '📘 Pokedex Data')

@section('content')
<div class="row">

    <!-- ฟอร์มเพิ่มข้อมูล -->
    <div class="col-md-4 mt-3">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                เพิ่ม Pokémon
            </div>
            <div class="card-body">
                <form action="/pokedex" method="post">
                    @csrf
                    <input class="form-control mb-2" name="name" placeholder="Name">
                    <input class="form-control mb-2" name="type" placeholder="Type">
                    <input class="form-control mb-2" name="species" placeholder="Species">

                    <div class="row">
                        <div class="col">
                            <input class="form-control mb-2" name="height" placeholder="Height">
                        </div>
                        <div class="col">
                            <input class="form-control mb-2" name="weight" placeholder="Weight">
                        </div>
                    </div>

                    <input class="form-control mb-2" name="hp" placeholder="HP">
                    <input class="form-control mb-2" name="attack" placeholder="Attack">
                    <input class="form-control mb-2" name="defense" placeholder="Defense">
                    <input class="form-control mb-2" name="image_url" placeholder="Image URL">

                    <button class="btn btn-success w-100" type="submit">
                        ➕ บันทึก
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- ตาราง -->
    <div class="col-md-8 mt-3">
        @include('pokedex.table')
    </div>

</div>
@endsection
