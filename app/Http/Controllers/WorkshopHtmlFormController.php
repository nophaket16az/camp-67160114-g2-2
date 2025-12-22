<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkshopHtmlFormController extends Controller
{
    // 1) เรียกหน้าฟอร์มเดิม
    public function index()
    {
        return view('html101');
    }

    // 2) รับค่าจากฟอร์ม แล้วส่งไปหน้าใหม่
    public function store(Request $request)
    {
        // ยังไม่ต้อง upload ไฟล์ → รับแค่ชื่อไฟล์มาแสดง
        $data = [
            'fname'   => $request->fname,
            'lname'   => $request->lname,
            'birth'   => $request->birth,
            'age'     => $request->age,
            'gender'  => $request->gender,
            'address' => $request->address,
            'color'   => $request->color,
            'music'   => $request->music,
            'agree'   => $request->agree ? 'ยินยอม' : 'ไม่ยินยอม',
            'photo'   => $request->file('photo') ? $request->file('photo')->getClientOriginalName() : '-',
        ];

        return view('workshop.result', $data); // หน้าใหม่
    }
}
