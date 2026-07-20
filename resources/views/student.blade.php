<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัตินักศึกษา - {{ $id }}</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Sarabun', sans-serif; }
    </style>
</head>
<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">

    <div class="card shadow-sm w-100 m-3" style="max-width: 500px;">
        <div class="card-body p-4 p-md-5">
            
            <div class="text-center border-bottom pb-4 mb-4">
                <h2 class="fw-bold mb-2">นายวสุพล มะหาวงษ์</h2>
                <span class="badge rounded-pill text-bg-primary px-3 py-2 fs-6">
                    รหัสนักศึกษา: {{ $id }}
                </span>
            </div>
            
            <div class="row mb-3">
                <div class="col-4 fw-bold text-secondary">วันเกิด:</div>
                <div class="col-8">12 พฤษภาคม 2547</div>
            </div>
            <div class="row mb-3">
                <div class="col-4 fw-bold text-secondary">อายุ:</div>
                <div class="col-8">22 ปี</div>
            </div>
            <div class="row mb-3">
                <div class="col-4 fw-bold text-secondary">มหาวิทยาลัย:</div>
                <div class="col-8">มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน</div>
            </div>
            <div class="row mb-4">
                <div class="col-4 fw-bold text-secondary">สาขาวิชา:</div>
                <div class="col-8">ระบบสารสนเทศ</div>
            </div>
            
            <div>
                <div class="fw-bold text-secondary mb-2">หัวข้อที่กำลังศึกษา / ทักษะ:</div>
                <div>
                    <span class="badge text-bg-secondary fw-normal">การวิเคราะห์ระบบ</span>
                    <span class="badge text-bg-secondary fw-normal">Java Programming</span>
                    <span class="badge text-bg-secondary fw-normal">React Native</span>
                </div>
            </div>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>