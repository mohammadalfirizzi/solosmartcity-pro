{{-- isi konten dimensi detail --}}
@extends('index')

@section('title', 'dimensi detail')

@section('content')
<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>Smart City</h2>
        <h1>Branding</h1>
        <h3>Solo Metamorfosa Kota Budaya</h3>
      </div>
    </div>
  </div>
</div>


<div class="single-property section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="main-image">
          <img src="{{asset("data_file/$data->image_url")}}" alt="">
        </div>
        <div class="main-content">
          <span class="category">{{$data->category_id}}</span>
          <h6 class="tanggal">Surakarta, 05 Maret 2024</h6>
          <h6 class="author">{{$data->author_name}}</h6>
          <h4>{{$data->title}}</h4>
          <?php echo $data->content ?>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection