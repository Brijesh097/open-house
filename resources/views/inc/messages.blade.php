@if(count($errors) > 0)
  @foreach($errors->all() as $error)
    <div class="alert alert-danger text-center">
      <strong>{{ $error }}</strong>
    </div>
  @endforeach
@endif

@if(session('success'))
  <div class="alert alert-success text-center">
    <strong>{{ session('success') }}</strong>
  </div>
@endif

@if(session('error'))
  <div class="alert alert-danger text-center">
    <strong>{{ session('danger') }}</strong>
  </div>
@endif