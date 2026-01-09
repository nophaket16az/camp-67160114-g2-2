<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;

class PokedexController extends Controller
{
    // แสดงข้อมูลทั้งหมด
    function index()
    {
        $data['pokedexs'] = Pokedex::all();
        return view('pokedex.index', $data);
    }

    // เพิ่มข้อมูล
    function store(Request $req)
    {
        $pokedex = new Pokedex;
        $pokedex->name = $req->input('name');
        $pokedex->type = $req->input('type');
        $pokedex->species = $req->input('species');
        $pokedex->height = $req->input('height');
        $pokedex->weight = $req->input('weight');
        $pokedex->hp = $req->input('hp');
        $pokedex->attack = $req->input('attack');
        $pokedex->defense = $req->input('defense');
        $pokedex->image_url = $req->input('image_url');
        $pokedex->save();

        return redirect('/pokedexs');
    }

    // หน้าแก้ไข
    function update($id)
    {
        $data['pokedex_update'] = Pokedex::find($id);
        $data['pokedexs'] = Pokedex::all();
        return view('pokedex.update', $data);
    }

    // บันทึกการแก้ไข
    function update_action(Request $req, $id)
    {
        $pokedex = Pokedex::find($id);
        $pokedex->name = $req->input('name');
        $pokedex->type = $req->input('type');
        $pokedex->species = $req->input('species');
        $pokedex->height = $req->input('height');
        $pokedex->weight = $req->input('weight');
        $pokedex->hp = $req->input('hp');
        $pokedex->attack = $req->input('attack');
        $pokedex->defense = $req->input('defense');
        $pokedex->image_url = $req->input('image_url');
        $pokedex->save();

        return redirect('/pokedexs');
    }

    // ลบข้อมูล
    function delete_action(Request $req, $id)
    {
        $pokedex = Pokedex::find($id);
        $pokedex->delete();
        return redirect('/pokedexs');
    }
}
