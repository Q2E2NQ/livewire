<!DOCTYPE html>
<html>
<head>
    <title></title>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="container">

    <div class="card">
      <div class="card-header">
        Laravel 8 Livewire Example
      </div>
      <div class="card-body">
        @livewire('student-controller')
      </div>
    </div>

</div> 

</body>
<script src="{{ asset('js/app.js') }}"></script>
@livewireScripts
</html>
