@extends('admin/layouts')
@section('table')
<br><br>
 <head>

    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/bootstrap/css/signin.css" rel="stylesheet">
    <script src="/bootstrap/js/ie-emulation-modes-warning.js"></script>

  </head>
  <center><h3>Загрузка картинки</h3></center>
  <div class="form-group">
    <form action="" class="form-inline form-signin" enctype="multipart/form-data" method="post">
        <input class="input-lg form-control" type="file" name="file" placeholder="images">
        <input class="input-lg" type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <input class="btn btn-success " type="submit" value="upload">

    </form>
  </div>>
@stop