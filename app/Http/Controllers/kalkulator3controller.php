<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kalkulator3Controller extends Controller
{
    public function index()
    {
        return view('kalkulator3.kalkulator3');
    }
    public function store(Request $request)
    {
        $angka1=$request->angka1;
        $angka2=$request->angka2;
        $operator=$request->op;
        $hasil=$request->hasil;

        if($operator == 'tambah'){
            $hasil = $angka1+$angka2;
        }
        elseif($operator == 'kurang')
        {
            $hasil = $angka1-$angka2;
        }
        elseif($operator == 'kali')
        {
            $hasil = $angka1*$angka2;
        }
        elseif($operator == 'bagi')
        {
            if($angka0== 0)
            {
                $hasil = 'Error';
            }
            else{
                $hasil = $angka1/$angka2;
            }
        }
        elseif($operator='reset')
        {
            return redirect()->route('kalkulator');
        }
        else{
            $hasil = 'ERROR';
        }
        return view('kalkulator3.hasil', compact('hasil'));
    }
        public function manual()
        {
            return view('kalkulator3.kalkulator');
        }
    }
