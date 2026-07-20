<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
class AdminController extends Controller
{
    function blogs(){
        $blogs = [
    [
        'title' => 'บทความที่ 1 ',
        'content' => 'เนื้อหาบทความที่ 1',
        'status' =>true
    ],
    [
        'title' => 'บทความที่ 2 ',
        'content' => 'เนื้อหาบทความที่ 2',
        'status' =>false
    ],
    [
        'title' => 'บทความที่ 3 ',
        'content' => 'เนื้อหาบทความที่ 3',
        'status' =>true
    ],
    [
        'title' => 'บทความที่ 4 ',
        'content' => 'เนื้อหาบทความที่ 4',
        'status' =>true
    ]
    ];
    return view("blogs",compact('blogs'));
    }
    function abouts(){
        $name = "Wasuphon Mahawong";
        $date = "6 กรกฎาคม 2026";
    return view("abouts",compact('name','date'));
    }
    function form(){
    
    return view("form");
    }
    function insert(Request $request){
        $request->validate([
        'title' => 'required|max:50',
        'content' => 'required'
    ],[
        'title.required' => 'กรุณากรอกชื่อบทความ',
        'title.max' => 'ชื่อบทความไม่เกิน 50 ตัวอักษร',
        'content.required' => 'กรุณากรอกเนื้อหาบทความ'
    ]);
}
}
