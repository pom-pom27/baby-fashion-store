@extends('layout.main')


@section('content')

<div class="row small-6 small-centered columns">
    <br>
    <h3><strong>Info Pengiriman</strong></h3>
    <br>

    {!!Form::open(['route'=> 'address.store', 'method'=> 'post'])!!}

    <div class="form-group ">
        {{Form::label('first_name', 'Nama Awal')}}
        {{Form::text('first_name', null, array('class'=> 'form-controll'))}}
    </div>

    <div class="form-group">
        {{Form::label('last_name', 'Nama Akhir')}}
        {{Form::text('last_name', null, array('class'=> 'form-controll'))}}
    </div>

    <div class="form-group">
        {{Form::label('telp', 'Telepon')}}
        {{Form::text('telp', null, array('class'=> 'form-controll', 'placeholder'=>'+62'))}}
    </div>
    <br>
    

    <div class="form-group">
        {{Form::label('address', 'Alamat Penerima')}}
        {{Form::text('address', null, array('class'=> 'form-controll'))}}
    </div>

    <div class="form-group">
        {{Form::label('city', 'Kota')}}
        {{Form::text('city', null, array('class'=> 'form-controll'))}}
    </div>

    <div class="form-group">
        {{Form::label('state', 'Provinsi')}}
        {{Form::text('state', null, array('class'=> 'form-controll'))}}
    </div>

    <div class="form-group">
        {{Form::label('kd_pos', 'Kode Pos')}}
        {{Form::text('kd_pos', null, array('class'=> 'form-controll'))}}
    </div>
    <br>

    {{Form::submit('Proses', array('class'=> 'button medium-2 text-center'))}}

    {!!Form::close()!!}
</div>
@endsection