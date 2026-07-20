@extends('layout')

@section('content')

    <h2 class="mb-4">บทความทั้งหมด</h2>

    <div class="row">
        @foreach ($articles as $article)
            <div class="col-md-6 col-lg-4 mb-4">
                
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">{{ $article['title'] }}</h5>
                        <p class="card-text text-secondary">{{ $article['description'] }}</p>
                    </div>
                    
                    <div class="card-footer bg-white border-0 pb-3">
                        
                        @if ($article['status'] == 'published')
                            <span class="badge bg-success px-3 py-2">เผยแพร่แล้ว</span>
                        @else
                            <span class="badge bg-warning text-dark px-3 py-2">ฉบับร่าง</span>
                        @endif
                        
                    </div>
                </div>
                
            </div>
        @endforeach
    </div>

@endsection