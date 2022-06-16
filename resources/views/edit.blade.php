@extends('main')

@section('container')
  <link rel="stylesheet" href="../css/add.css">
<body>
    @foreach($makanan as $item)@endforeach
  <div class="wrapper">
    <form class="form" action="{{ url('makanan',$item->id) }}" method="post" enctype="multipart/form-data">
        @csrf
      @method("PUT")
      <div class="pageTitle title">Restoran Luthfi </div>
      <div class="secondaryTitle title">Masukkan Menu</div>
      <input type="text" value="{{ $item->nama }}" class="harga formEntry" placeholder="Nama Makanan" name="nama"/>
      <input type="text" value="{{ $item->harga }}" class="harga formEntry" placeholder="Harga" name="harga"/>
      <label class="secondaryTitle title">Choose File<br>
        <input class="form-control form-field animation 3" type="file" id="image" name="image"  " >
      </label><br><br>
      <button class="submit formEntry" type="submit">Submit</button>
    </form>
  </div>
</body>

@endsection
