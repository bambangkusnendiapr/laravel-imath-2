<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\DB;
use Exception;

class AboutController extends Controller
{
    public function edit()
    {
        return view('admin.about.edit', [
            'about' => About::find(1)
        ]);
    }

    public function update(Request $request)
    {
        DB::beginTransaction();

        try {
            $about = About::find(1);
            $about->about = $request->about;
            $about->save();

            DB::commit();
            return redirect()->back()->with('success','About berhasil diupdate');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error' , $e->getMessage());
        }
    }
}