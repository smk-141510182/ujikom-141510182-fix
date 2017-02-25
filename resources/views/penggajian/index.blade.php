@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Penggajian</div>

                <div class="panel-body">
                    <a href="{{url('/Penggajian/create')}}" class="btn btn-md btn-block">Tambah penggajian</a><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Photo</td>
                                <td>Nama Pegawai</td>
                                <td>NIP</td>
                                <td>Status Pengembalian</td>
                                <td colspan="2">Pilihan:</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($penggajianvl as $data)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img src="{{asset('img/'.$data->tunjangan_pegawai->pegawai->photo.'')}}" width="75" height="75" class="img-rounded img-responsive" alt="Responsive image"></td>
                                    <td>{{$data->tunjangan_pegawai->pegawai->User->name}}</td>
                                    <td>{{$data->tunjangan_pegawai->pegawai->nip}}</td>
                                    <td>
                                        @if($data->tanggal_pengambilan == ""&&$data->status_pengambilan == "0")
                                            Belum Diambil
                                        @elseif($data->tanggal_pengambilan == ""||$data->status_pengambilan == "0")
                                            Belum Diambil
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{route('Penggajian.edit',$data->id)}}">Ambil</a>
                                        @else
                                            Sudah Diambil / {{$data->tanggal_pengambilan}}
                                        @endif</b>
                                    </td>
                                    <td><a href="{{route('Penggajian.show',$data->id)}}" class="btn btn-warning">Rincian</a></td>
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['Penggajian.destroy', $data->id]]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
