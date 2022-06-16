@extends('main')


@section('container')
  <link rel="stylesheet" href="../css/add.css">
<body>
  <div class="wrapper">
    <form class="form" action="{{ url('makanan') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="pageTitle title">Restoran Luthfi </div>
      <div class="secondaryTitle title">Masukkan Menu</div>
      <input type="text" class="harga formEntry" placeholder="Nama Menu" name="nama"/>
      <input type="text" class="harga formEntry" placeholder="Harga" name="harga"/>
      <label class="secondaryTitle title">Choose File<br>
        <input class="form-control form-field animation 3" type="file" id="image" name="image"  " >
      </label><br><br>
      <button class="submit formEntry" onclick="terimakasih!()">Submit</button>
    </form>
  </div>
</body>
@endsection
