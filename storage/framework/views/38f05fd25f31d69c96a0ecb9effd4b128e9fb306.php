<?php $__env->startSection('main'); ?>
    <!-- Sign up form -->
    <div class="col-3"></div>
    <div class="card p-3 col-6" style="">
        
        <input type="image" src="<?php echo e(asset('/images/uplodeImage.svg')); ?>" class="card-img-top p-3"/>
        <input type="file" name="file" id="hiddenFile" >
        <div class="card-body">
          <a href="" class="text-black text-decoration-none"><h3 class="card-title">Uplod Files</h3></a>
          <input type="email" name="From" id="" class="w-100 p-2" placeholder="From" data-bs-toggle="tooltip" data-bs-placement="right" title="Enter your Email" required>
          <input type="email" name="to" id="" class="w-100 p-2" placeholder="to" data-bs-toggle="tooltip" data-bs-placement="right" title="Enter Email" required>
          <input type="text" name="title" id="" class="w-100 p-2" placeholder="Title">
          <textarea  name="message" id="message" rows="1" class="message w-100 p-2"  placeholder="Message"></textarea>
          <div class="w-100 mx-0 my-2 row justify-content-center">
              <button type="submit" class="btn bg-primary shadow p-2"><h5 class="m-0"><i class="bi bi-cloud-arrow-up-fill"></i> Upload</h5></button>
          </div>
        </div>
      </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/arzaqziad/Laravel/FileTransfer/resources/views/uplode.blade.php ENDPATH**/ ?>