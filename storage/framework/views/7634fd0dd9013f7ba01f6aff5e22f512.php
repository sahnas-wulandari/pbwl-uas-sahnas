
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA KOST</h3>      
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('/kost')); ?>" method="post">
                <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="">JENIS KOST</label>
                        <input type="text" name="kost_jenis" class="form-control" placeholder="Jenis Kost">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA KOST</label>
                        <input type="text" name="kost_harga" class="form-control" placeholder="Harga">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-sahnas\resources\views/kost/create.blade.php ENDPATH**/ ?>