@if ($errors->any())
<div class="alert alert-danger alert-dismissible alert-outline fade show" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(\Session::has('alert'))
<div class="alert alert-danger alert-dismissible alert-outline fade show" role="alert">
    <strong>{{Session::get('alert')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(\Session::has('alert-success'))
<div class="alert alert-success alert-dismissible alert-outline fade show" role="alert">
    <strong>{{Session::get('alert-success')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif