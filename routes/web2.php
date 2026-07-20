<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "ยินดีต้อนรับเว็บไซต์ของฉัน <a href = '".route('login')."'>Login</a>";
});

Route::get('about', function () {
    return "เกี่ยวกับเรา";
});

Route::get('blog/{id}', function ($id) {
    return "บทความทั้งหมด".$id;
});

Route::get('admin/user/tae', function () {
    return "ยินดีต้อนรับแอดมิน";
})->name('login');

Route::fallback(function(){
    return "ไม่พบหน้า";
});
Route::get('/student/{id}', function ($id) {
    return view('student', ['id' => $id]);
})->name('student.profile');

Route::fallback(function () {
    return 'ไม่พบหน้าเว็บ';
});
Route::get('/blog', function () {
    // สร้างข้อมูลจำลองแบบ Array เก็บรายชื่อบทความและสถานะ
    $articles = [
        [
            'title' => 'สรุปพื้นฐานการวิเคราะห์และออกแบบระบบ (System Analysis)',
            'description' => 'ทบทวนขั้นตอนและเครื่องมือที่ใช้ในการวิเคราะห์ระบบสารสนเทศ',
            'status' => 'published' // สถานะ: เผยแพร่แล้ว
        ],
        [
            'title' => 'ทบทวนโครงสร้างภาษา Java และการสร้าง Custom Class',
            'description' => 'เจาะลึก Control Structures, Methods และการประยุกต์ใช้งานคลาส',
            'status' => 'published'
        ],
        [
            'title' => 'เตรียมตัวสอบ: คำศัพท์และ Learning Outcomes ของ React Native',
            'description' => 'สรุปประเด็นสำคัญสำหรับการพัฒนาโมบายแอปพลิเคชัน',
            'status' => 'draft' // สถานะ: ฉบับร่าง (ยังไม่เผยแพร่)
        ]
    ];

    // ส่ง Array ชื่อ $articles ไปที่ View ชื่อ 'blog'
    return view('blog', ['articles' => $articles]);
    
})->name('blog.index');