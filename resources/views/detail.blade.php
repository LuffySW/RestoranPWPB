@extends('main')


@section('container')
<style>
    body{
    background-color: #edf1f5;
    margin-top:20px;
}
.card {
    margin-bottom: 30px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: 0;
}
.card .card-subtitle {
    font-weight: 300;
    margin-bottom: 10px;
    color: #8898aa;
}
.table-product.table-striped tbody tr:nth-of-type(odd) {
    background-color: #f3f8fa
}
.table-product td{
    border-top: 0px solid #dee2e6 ;
    color: #728299;
}
</style>

<body>
@foreach($makanan as $item)@endforeach
<div class="container">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{ $item->nama }}</h3>
            <h6 class="card-subtitle">Restoran Luthfi</h6>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="white-box text-center"> <a href="/detail/{{ ($item->id) }}"><img style="  width: 20rem;height: 30em;" src="{{asset('storage/'.$item->image)}}" alt=""></a></div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <div class="box-title mt-5">Price :{{ $item->harga }}</span></div>
                    <h3 style="color:white; font-size:5px" id="harga" >{{ $item->harga }}</h3>
                    <div class="form-group">
                        <label>Jumlah Pesanan</label>
                        <input type="text" id="input" placeholder="Jumlah Pesanan" class="form-control quantity" >
                    </div><br>
                    <button class="btn btn-primary btn-rounded"  style="color:white" onclick="myFunction()"  type="submit">Pesan </button><br>
                    <p style="font-weight: bold;" id="demo"></p><br><br>
                    <a href="/edit/{{ ($item->id) }}"><button  class="button button1">Edit</button></a>
                    <a href="/delete/{{ ($item->id) }}"><button class="button button2">Delete</button></a>
                </div>
 </body>
 <script style="color: black">
    function myFunction() {
    var jumlah = document.getElementById('input').value;

    var harga = document.getElementById('harga').textContent;
    var total =harga*jumlah;
    document.getElementById("demo").innerHTML = "Total harga:"+"Rp"+total;
    }
  </script>

@endsection
