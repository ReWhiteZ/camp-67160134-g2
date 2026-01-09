<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;
use Illuminate\Support\Facades\File;

class PokedexController extends Controller
{
    // แสดงรายการทั้งหมด
    public function index()
    {
        $pokedexs = Pokedex::all();
        return view('pokedex.index', compact('pokedexs'));
    }

    // แสดงฟอร์มสร้าง
    public function create()
    {
        return view('pokedex.create');
    }

    // บันทึกข้อมูล (STORE)
    public function store(Request $request)
    {
        // 1. ตรวจสอบข้อมูลเข้มข้น (Validation)
        $request->validate([
            'name'    => 'required|string|max:255',
            'type'    => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'height'  => 'required|integer|min:0', // ต้องเป็นจำนวนเต็ม และไม่ติดลบ
            'weight'  => 'required|integer|min:0',
            'hp'      => 'required|numeric|min:0', // เป็นทศนิยมได้
            'attack'  => 'required|numeric|min:0',
            'defense' => 'required|numeric|min:0',
            'image'   => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // บังคับรูปตอนสร้าง
        ], [
            // (Optional) กำหนดข้อความ Error ภาษาไทยเองได้ตรงนี้
            'name.required' => 'กรุณากรอกชื่อ Pokemon',
            'height.integer' => 'ส่วนสูงต้องเป็นตัวเลขจำนวนเต็ม',
            'image.required' => 'จำเป็นต้องอัปโหลดรูปภาพ',
        ]);

        // 2. บันทึกข้อมูล
        $pokedex = new Pokedex;
        $pokedex->name = $request->name;
        $pokedex->type = $request->type;
        $pokedex->species = $request->species;
        $pokedex->height = $request->height;
        $pokedex->weight = $request->weight;
        $pokedex->hp = $request->hp;
        $pokedex->attack = $request->attack;
        $pokedex->defense = $request->defense;

        // จัดการรูปภาพ
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/pokedex'), $filename);
            $pokedex->image_url = $filename;
        }

        $pokedex->save();
        return redirect('/pokedex')->with('success', 'เพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    // แสดงฟอร์มแก้ไข
    public function edit($id)
    {
        $pokedex = Pokedex::find($id);
        return view('pokedex.edit', compact('pokedex'));
    }

    // อัปเดตข้อมูล (UPDATE)
    public function update(Request $request, $id)
    {
        // 1. ตรวจสอบข้อมูล (Validation)
        $request->validate([
            'name'    => 'required|string|max:255',
            'type'    => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'height'  => 'required|integer|min:0',
            'weight'  => 'required|integer|min:0',
            'hp'      => 'required|numeric|min:0',
            'attack'  => 'required|numeric|min:0',
            'defense' => 'required|numeric|min:0',
            'image'   => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // รูปภาพไม่บังคับ (nullable)
        ]);

        $pokedex = Pokedex::find($id);

        $pokedex->name = $request->name;
        $pokedex->type = $request->type;
        $pokedex->species = $request->species;
        $pokedex->height = $request->height;
        $pokedex->weight = $request->weight;
        $pokedex->hp = $request->hp;
        $pokedex->attack = $request->attack;
        $pokedex->defense = $request->defense;

        // จัดการรูปภาพ (ทำเฉพาะตอนที่มีการอัปโหลดไฟล์ใหม่มา)
        if ($request->hasFile('image')) {
            // ลบรูปเก่า
            $destination = 'images/pokedex/' . $pokedex->image_url;
            if (File::exists(public_path($destination))) {
                File::delete(public_path($destination));
            }

            // เพิ่มรูปใหม่
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/pokedex'), $filename);
            $pokedex->image_url = $filename;
        }

        $pokedex->save();
        return redirect('/pokedex')->with('success', 'อัปเดตข้อมูลเรียบร้อยแล้ว');
    }

    // ลบข้อมูล
    public function destroy($id)
    {
        $pokedex = Pokedex::find($id);
        
        // ลบรูปภาพออกจากเครื่อง
        $destination = 'images/pokedex/' . $pokedex->image_url;
        if (File::exists(public_path($destination))) {
            File::delete(public_path($destination));
        }

        $pokedex->delete();
        return redirect('/pokedex')->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}