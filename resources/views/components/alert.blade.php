@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade-show" role="alert">
    <strong>{{$message}}</strong>
    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-tabel="Close"></button>
</div>
    
@endif
@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif