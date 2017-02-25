<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Penggajian</div>

                <div class="panel-body">
                    <a href="<?php echo e(url('/Penggajian/create')); ?>" class="btn btn-md btn-block">Tambah penggajian</a><br>
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
                            <?php 
                            $i=1;
                             ?>
                            <?php $__currentLoopData = $penggajianvl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <tr>
                                    <td><?php echo e($i++); ?></td>
                                    <td><img src="<?php echo e(asset('img/'.$data->tunjangan_pegawai->pegawai->photo.'')); ?>" width="75" height="75" class="img-rounded img-responsive" alt="Responsive image"></td>
                                    <td><?php echo e($data->tunjangan_pegawai->pegawai->User->name); ?></td>
                                    <td><?php echo e($data->tunjangan_pegawai->pegawai->nip); ?></td>
                                    <td>
                                        <?php if($data->tanggal_pengambilan == ""&&$data->status_pengambilan == "0"): ?>
                                            Belum Diambil
                                        <?php elseif($data->tanggal_pengambilan == ""||$data->status_pengambilan == "0"): ?>
                                            Belum Diambil
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="<?php echo e(route('Penggajian.edit',$data->id)); ?>">Ambil</a>
                                        <?php else: ?>
                                            Sudah Diambil / <?php echo e($data->tanggal_pengambilan); ?>

                                        <?php endif; ?></b>
                                    </td>
                                    <td><a href="<?php echo e(route('Penggajian.show',$data->id)); ?>" class="btn btn-warning">Rincian</a></td>
                                    <td>
                                    <?php echo Form::open(['method' => 'DELETE', 'route'=>['Penggajian.destroy', $data->id]]); ?>

                                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                                    <?php echo Form::close(); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>