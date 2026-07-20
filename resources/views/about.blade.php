@extends('layouts.app')

@section('title', 'เกี่ยวกับเรา | ประวัติส่วนตัว')

@section('content')
<div class="row g-5">
    <!-- Profile & Skills column -->
    <div class="col-lg-7">
        <h2 class="fw-bold mb-3">เกี่ยวกับเรา</h2>
        <p class="lead text-muted">เรียนรู้เพิ่มเติมเกี่ยวกับการทำงานและวิสัยทัศน์ของเรา</p>
        <p>
            เราคือผู้ให้บริการพัฒนาและออกแบบเว็บไซต์แบบครบวงจร ที่ใส่ใจรายละเอียดในทุกขั้นตอน 
            เพื่อสร้างผลงานที่มีประสิทธิภาพ ตรงใจลูกค้า และพร้อมตอบโจทย์การเติบโตของธุรกิจในอนาคต 
            ด้วยเทคโนโลยีและเครื่องมือที่ดีที่สุดในปัจจุบัน
        </p>

        <!-- Skill Progress Bars -->
        <h4 class="fw-bold mt-5 mb-3">ความสามารถของเรา</h4>
        
        <div class="mb-3">
            <div class="d-flex justify-content-between mb-1">
                <span class="fw-medium">HTML5 & CSS3</span>
                <span>95%</span>
            </div>
            <div class="progress" role="progressbar" aria-label="HTML/CSS Progress" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="height: 10px;">
                <div class="progress-bar bg-primary" style="width: 95%"></div>
            </div>
        </div>

        <div class="mb-3">
            <div class="d-flex justify-content-between mb-1">
                <span class="fw-medium">JavaScript & Front-end Frameworks</span>
                <span>85%</span>
            </div>
            <div class="progress" role="progressbar" aria-label="JavaScript Progress" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="height: 10px;">
                <div class="progress-bar bg-success" style="width: 85%"></div>
            </div>
        </div>

        <div class="mb-3">
            <div class="d-flex justify-content-between mb-1">
                <span class="fw-medium">PHP & Laravel Framework</span>
                <span>90%</span>
            </div>
            <div class="progress" role="progressbar" aria-label="Laravel Progress" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="height: 10px;">
                <div class="progress-bar bg-info text-dark" style="width: 90%"></div>
            </div>
        </div>
    </div>

    <!-- Contact Form column -->
    <div class="col-lg-5">
        <div class="card shadow-sm border p-4">
            <h3 class="fw-bold mb-4">ติดต่อเรา</h3>
            <form action="#" method="GET" onsubmit="event.preventDefault(); alert('ส่งข้อความเรียบร้อยแล้ว (ระบบจำลอง)');">
                <div class="mb-3">
                    <label for="name" class="form-label">ชื่อผู้ติดต่อ</label>
                    <input type="text" class="form-control" id="name" placeholder="ชื่อ-นามสกุล" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">อีเมลติดต่อ</label>
                    <input type="email" class="form-control" id="email" placeholder="example@email.com" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">ข้อความ</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="พิมพ์ข้อความของคุณตรงนี้..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100 py-2">ส่งข้อความ</button>
            </form>
        </div>
    </div>
</div>
@endsection