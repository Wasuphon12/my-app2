@extends('layouts.app')

@section('title', 'หน้าแรก | ยินดีต้อนรับสู่เว็บไซต์')

@section('content')
<!-- Hero Section -->
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm border">
    <div class="container-fluid py-5 text-center">
        <h1 class="display-5 fw-bold text-dark mb-3">ยินดีต้อนรับสู่เว็บไซต์ของเรา</h1>
        <p class="col-md-8 mx-auto fs-5 text-muted">
            นี่คือเว็บไซต์ตัวอย่างที่ตกแต่งด้วย Bootstrap 5 แบบง่ายๆ 
            แต่มีความเป็นระเบียบเรียบร้อย สวยงาม และสามารถปรับเปลี่ยนหน้าจอได้ตามขนาดของอุปกรณ์อย่างราบรื่น
        </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-4">
            <a href="{{ url('about') }}" class="btn btn-primary btn-lg px-4 gap-3">เกี่ยวกับเรา</a>
            <a href="{{ url('blog') }}" class="btn btn-outline-secondary btn-lg px-4">ดูบทความทั้งหมด</a>
        </div>
    </div>
</div>

<!-- Features Grid -->
<div class="row align-items-md-stretch g-4 mt-2">
    <div class="col-md-4">
        <div class="h-100 p-4 bg-white rounded-3 shadow-sm border">
            <div class="text-primary mb-3">
                <svg width="32" height="32" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                    <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5"/>
                </svg>
            </div>
            <h2 class="h4 fw-bold">พัฒนาเว็บไซต์</h2>
            <p class="text-muted">พัฒนาโครงสร้างของเว็บแอปพลิเคชันให้มีความรวดเร็ว ปลอดภัย และตรงตามความต้องการทางธุรกิจของคุณ</p>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="h-100 p-4 bg-white rounded-3 shadow-sm border">
            <div class="text-success mb-3">
                <svg width="32" height="32" fill="currentColor" class="bi bi-brush" viewBox="0 0 16 16">
                    <path d="M15.825.12a.5.5 0 0 1 .132.584c-.049.12-.48.86-.98 1.43a2.86 2.86 0 0 1-.9.783L11.83 1.83a2.86 2.86 0 0 1 .783-.9c.57-.5 1.31-.931 1.43-.98a.5.5 0 0 1 .582.132l1.2 1.2zm-2.45 2.1-.247.247-1.48-1.48.247-.247a1.86 1.86 0 0 1 1.48 1.48zM9.548 4.673l-6.31 6.31a.8.8 0 0 0-.226.44l-.8 3.5a.4.4 0 0 0 .48.48l3.5-.8a.8.8 0 0 0 .44-.226l6.31-6.31L9.548 4.673z"/>
                </svg>
            </div>
            <h2 class="h4 fw-bold">ออกแบบ UI/UX</h2>
            <p class="text-muted">ออกแบบการจัดวางหน้าตาและประสบการณ์การใช้งานของผู้ใช้อย่างเข้าใจง่าย สวยงาม ทันสมัย</p>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="h-100 p-4 bg-white rounded-3 shadow-sm border">
            <div class="text-danger mb-3">
                <svg width="32" height="32" fill="currentColor" class="bi bi-database" viewBox="0 0 16 16">
                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M11 12h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1m0-2h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1m3 4H11a.5.5 0 0 1 0-1h3a.5.5 0 0 1 0 1M8 1c0 1.657-3.582 3-8 3S-8 2.657-8 1s3.582-3 8-3 8 1.343 8 3m0 3c0 1.657-3.582 3-8 3S-8 5.657-8 4v2c0 1.657-3.582 3-8 3S-8 7.657-8 6v2c0 1.657-3.582 3-8 3S-8 9.657-8 8v2c0 1.657-3.582 3-8 3S-8 11.657-8 10v2c0 1.657-3.582 3-8 3S-8 13.657-8 12V10z"/>
                </svg>
            </div>
            <h2 class="h4 fw-bold">ฐานข้อมูลและระบบหลังบ้าน</h2>
            <p class="text-muted">ออกแบบระบบความปลอดภัยและการจัดการฐานข้อมูลหลังบ้านอย่างถูกต้อง ปลอดภัย และรองรับการขยายตัว</p>
        </div>
    </div>
</div>
@endsection