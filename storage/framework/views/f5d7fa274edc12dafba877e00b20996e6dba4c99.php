<?php $__env->startSection('content'); ?>
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
                            <p><img width="120px" height="100px" src="<?php echo e(asset('img/'.$penggajianvl->tunjangan_pegawai->pegawai->photo.'')); ?>" class="img-circle" alt="Cinque Terre" ></p>
                    </center>
                        <h4>
                            <center>
                                NIP : <br><b> <?php echo e($penggajianvl->tunjangan_pegawai->pegawai->nip); ?> </b>
                                <br><br>
                                Nama Pegawai : <br><b> <?php echo e($penggajianvl->tunjangan_pegawai->pegawai->User->name); ?> </b>
                                <br><br>
                                Nama Jabatan : <br><b> <?php echo e($penggajianvl->tunjangan_pegawai->tunjangan->jabatan->nama_jabatan); ?> </b>
                                <br><br>
                                Nama Golongan : <br><b> <?php echo e($penggajianvl->tunjangan_pegawai->pegawai->golongan->nama_golongan); ?> </b>
                                <br><br>
                                Status / Tanggal Pengambilan : <br><b>
                                    <?php if($penggajianvl->tanggal_pengambilan == ""&&$penggajianvl->status_pengambilan == "0"): ?>
                                        Belum Diambil
                                    <?php elseif($penggajianvl->tanggal_pengambilan == ""||$penggajianvl->status_pengambilan == "0"): ?>
                                        Belum Diambil
                                    <?php else: ?>
                                        Sudah Diambil / <?php echo e($penggajianvl->tanggal_pengambilan); ?>

                                    <?php endif; ?>
                                </b>
                            </center>
                        </h4>
                    </table>
                    <table class="table table-striped table-hover ">
                        
                        <div class="col-md-12">
                        

                        
                        
                        <h4>
                            <td>
                                Gaji Lembur :  Rp.<?php echo e($penggajianvl->jumlah_uang_lembur); ?><br>
                                Gaji Pokok &nbsp;&nbsp; : Rp.<?php echo e($penggajianvl->gaji_pokok); ?><br>
                            </td>
                            <td>
                                Tunjangan : Rp.<?php echo e($penggajianvl->tunjangan_pegawai->tunjangan->besaran_uang); ?><br>
                                Total Gaji &nbsp;&nbsp;: Rp.<?php echo e($penggajianvl->total_gaji); ?>

                            <td>
                        </h4>
                        </div> 
                    </table>
                     <a class="btn btn-primary col-md-12" href="<?php echo e(url('Penggajian')); ?>">Kembali</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>