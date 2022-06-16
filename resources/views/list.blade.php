@extends('main')
@section('container')

<style>
  .card {
  background-image: url("https://img.freepik.com/free-photo/brown-wooden-flooring_53876-90802.jpg?t=st=1655393036~exp=1655393636~hmac=a308be66968e27dd5d6db7da25120e02afe6480513739015f8eed99b657ae94d&w=900");
  border-radius: 0.5rem;
  box-shadow: 0.05rem 0.1rem 0.3rem -0.03rem rgba(0, 0, 0, 0.45);
  padding-bottom: 1rem;
  width: 15em;
  height: 15em;
}

.card > :last-child {
  margin-bottom: 0;
}

.card{
  margin-top: 5px;
  font-size: 1.25rem;
  position: center;
  text-align: center;
}
h5 {
  text-align: center;
  color: white;
}
h3 {
  color: white;
  margin-top: 40px
}

img {
  border-radius: 0.5rem 0.5rem 0 0;
  width: 100%;
  height: 150px;
}
.card-wrapper {
  list-style: none;
  padding: 0;
  margin: 0;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(30ch, 1fr));
  grid-gap: 1.5rem;
}


img ~ * {
  margin-left: 1rem;
  margin-right: 1rem;
}

</style>
<ul class="card-wrapper">
         @foreach($makanan as $item)
          <li class="card">
            <a class="card-img-top" href="/detail/{{ $item->id }}" alt=""><img  width="200em"height="100em" src="{{ asset('storage/'.$item->image)  }}" alt=""></a><br>
            <h3 class="card-title">{{ $item->nama }}</h3>
            <h5 class="card-text">RP.{{ $item->harga }}</h5>
          </li>

        @endforeach
 </ul>
@endsection
