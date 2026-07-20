@extends('layout')

@section('title', 'เขียนบทความ')

@section('content')
    <h2 class="text text-center py-2">แจ้งเคลมสินค้าชำรุด</h2>
    <form method="POST" action="/insert">
        @csrf
        <div class="form-group">
            <label for="title">รหัสสินค้า</label>
            <input type="text" name="title" class="form-control">
        </div>
        @error('title')
            <p class="text-danger">{{$message}}</p>
        @enderror
         <div class="form-group">
            <label for="title">อีเมลผู้ติดต่อ</label>
            <input type="text" name="email" class="form-control">
              @error('email')
            <p class="text-danger">{{$message}}</p>
        @enderror
        </div>
          <div class="form-group">
            <label for="title">อาการชำรุด</label>
            <textarea name="content" cols="30" rows="5" class="form-control"></textarea>
        </div>

        @error('content')
            <p class="text-danger">{{$message}}</p>
        @enderror

        <div class="mb-4">
                    <label class="form-label ">ระดับความเร่งด่วน <span class="text-danger">*</span></label>
                    <select class="form-select @error('urgency') is-invalid @enderror" name="urgency">
                        <option value="">-- กรุณาเลือกระดับความเร่งด่วน --</option>
                        <option value="Low" {{ old('urgency') == 'Low' ? 'selected' : '' }}>ปกติ</option>
                        <option value="Medium" {{ old('urgency') == 'Medium' ? 'selected' : '' }}>เร่ง</option>
                        <option value="High" {{ old('urgency') == 'High' ? 'selected' : '' }}>ด่วน</option>
                    </select>
                    @error('urgency')
                        <div class="text-danger mt-1 small">{{ $message }}</div>
                    @enderror
                </div>

        <input type="submit" value="บันทึก" class="btn btn-primary my-3">
        <a href="/blogs" class="btn btn-secondary">กลับ</a>
    </form>
@endsection
