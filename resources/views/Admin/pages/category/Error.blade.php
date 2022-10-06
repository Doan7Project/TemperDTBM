@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- Create Post Form -->
@if (Session::has('success'))
<div class="alert alert-success opacity-100">
    {{Session::get('success')}}
</div>
@endif