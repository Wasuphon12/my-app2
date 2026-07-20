@extends('layout')

@section('title', 'เขียนบทความ')

@section('content')
    <h2 class="text text-center py-2">เขียนบทความ</h2>
    <form method="POST" action="/insert">
        @csrf
        <div class="form-group">
            <label for="title">ชื่อบทความ</label>
            <input type="text" name="title" class="form-control">
        </div>
        @error('title')
            <p class="test-danger">{{ $message }}</p>
        @enderror

          <div class="form-group">
            <label for="title">เนื้อหา</label>
            <textarea name="content" cols="30" rows="5" class="form-control"></textarea>
        </div>

        @error('content')
            <p class="test-danger">{{ $message }}</p>
        @enderror

        <input type="submit" value="บันทึก" class="btn btn-primary my-3">
        <a href="/blogs" class="btn btn-secondary">บทความทั้งหมด</a>
    </form>
@endsection
