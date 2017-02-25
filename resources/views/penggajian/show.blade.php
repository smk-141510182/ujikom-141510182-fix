@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Rincian Gaji</div>
                <div class="panel-body">
                <div class="">
                    <div class="col-md-12">
                        
                        
                    </div>
                    <table>
                    <center>
                            <p><img width="120px" height="100px" src="{{asset('img/'.$penggajianvl->tunjangan_pegawai->pegawai->photo.'')}}" class="img-circle" alt="Cinque Terre" ></p>
                    </center>
                        <h4>
                            <center>
                                NIP : <br><b> {{$penggajianvl->tunjangan_pegawai->pegawai->nip}} </b>
                                <br><br>
                                Nama Pegawai : <br><b> {{$penggajianvl->tunjangan_pegawai->pegawai->User->name}} </b>
                                <br><br>
                                Nama Jabatan : <br><b> {{$penggajianvl->tunjangan_pegawai->tunjangan->jabatan->nama_jabatan}} </b>
                                <br><br>
                                Nama Golongan : <br><b> {{$penggajianvl->tunjangan_pegawai->pegawai->golongan->nama_golongan}} </b>
                                <br><br>
                                Status / Tanggal Pengambilan : <br><b>
                                    @if($penggajianvl->tanggal_pengambilan == ""&&$penggajianvl->status_pengambilan == "0")
                                        Belum Diambil
                                    @elseif($penggajianvl->tanggal_pengambilan == ""||$penggajianvl->status_pengambilan == "0")
                                        Belum Diambil
                                    @else
                                        Sudah Diambil / {{$penggajianvl->tanggal_pengambilan}}
                                    @endif
                                </b>
                            </center>
                        </h4>
                    </table>
                    <table class="table table-striped table-hover ">
                        
                        <div class="col-md-12">
                        

                        
                        
                        <h4>
                            <td>
                                Gaji Lembur :  Rp.{{$penggajianvl->jumlah_uang_lembur}}<br>
                                Gaji Pokok &nbsp;&nbsp; : Rp.{{$penggajianvl->gaji_pokok}}<br>
                            </td>
                            <td>
                                Tunjangan : Rp.{{$penggajianvl->tunjangan_pegawai->tunjangan->besaran_uang}}<br>
                                Total Gaji &nbsp;&nbsp;: Rp.{{$penggajianvl->total_gaji}}
                            <td>
                        </h4>
                        </div> 
                    </table>
                     <a class="btn btn-primary col-md-12" href="{{url('Penggajian')}}">Kembali</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection