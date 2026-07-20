@extends('layouts.app')

@section('title', 'บทความทั้งหมด | คลังความรู้')

@section('content')
<div class="text-center mb-5">
    <h2 class="fw-bold">บทความทั้งหมด</h2>
    <p class="lead text-muted">คลังความรู้และการอัปเดตเทคโนโลยีล่าสุดจากเรา</p>
</div>

<!-- Blog Grid -->
<div class="row row-cols-1 row-cols-md-3 g-4">
    <!-- Card 1 -->
    <div class="col">
        <div class="card h-100 shadow-sm border">
            <!-- Colored bar instead of image placeholder -->
            <div style="height: 12px; background: linear-gradient(90deg, #0d6efd, #0dcaf0);"></div>
            <div class="card-body">
                <span class="badge bg-primary-subtle text-primary mb-2">Laravel</span>
                <h5 class="card-title fw-bold">เริ่มต้นเขียนเว็บด้วย Laravel 11</h5>
                <p class="card-text text-muted">
                    เรียนรู้พื้นฐานที่จำเป็นในการเริ่มต้นพัฒนาเว็บด้วย Laravel ตั้งแต่วิธีติดตั้งไปจนถึงระบบ Routing และการส่งหน้าจอ View
                </p>
            </div>
            <div class="card-footer bg-transparent border-top-0 pb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">📅 28 มิ.ย. 2026</small>
                    <a href="#" class="btn btn-sm btn-outline-primary" onclick="event.preventDefault(); alert('นี่คือบทความตัวอย่างในระบบจำลอง');">อ่านต่อ</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="col">
        <div class="card h-100 shadow-sm border">
            <div style="height: 12px; background: linear-gradient(90deg, #198754, #20c997);"></div>
            <div class="card-body">
                <span class="badge bg-success-subtle text-success mb-2">CSS / Bootstrap</span>
                <h5 class="card-title fw-bold">ออกแบบอย่างรวดเร็วด้วย Bootstrap 5</h5>
                <p class="card-text text-muted">
                    สรุปการใช้งาน Bootstrap 5 คลาส Utility ที่ใช้บ่อย และแนวทางการจัด Layout ที่ช่วยทุ่นแรงในการแต่งหน้าเว็บ
                </p>
            </div>
            <div class="card-footer bg-transparent border-top-0 pb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">📅 20 มิ.ย. 2026</small>
                    <a href="#" class="btn btn-sm btn-outline-success" onclick="event.preventDefault(); alert('นี่คือบทความตัวอย่างในระบบจำลอง');">อ่านต่อ</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="col">
        <div class="card h-100 shadow-sm border">
            <div style="height: 12px; background: linear-gradient(90deg, #dc3545, #fd7e14);;"></div>
            <div class="card-body">
                <span class="badge bg-danger-subtle text-danger mb-2">JavaScript</span>
                <h5 class="card-title fw-bold">ทำความเข้าใจการเรียกใช้งาน API</h5>
                <p class="card-text text-muted">
                    คู่มือการเชื่อมต่อ API ด้วย JavaScript Fetch API และแนวทางพื้นฐานในการนำข้อมูลมาแสดงผลในหน้าเว็บอย่างถูกต้อง
                </p>
            </div>
            <div class="card-footer bg-transparent border-top-0 pb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">📅 15 มิ.ย. 2026</small>
                    <a href="#" class="btn btn-sm btn-outline-danger" onclick="event.preventDefault(); alert('นี่คือบทความตัวอย่างในระบบจำลอง');">อ่านต่อ</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection