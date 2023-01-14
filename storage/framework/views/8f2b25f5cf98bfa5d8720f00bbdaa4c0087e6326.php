<?php $__env->startSection('main'); ?>
  <img src="<?php echo e(asset('/images/download.svg')); ?>" alt="">

  
  
  
  

  
    
  <a href="<?php echo e(config('app.url')); ?>/<?php echo e($link); ?>" id="link" style="visibility: hidden"></a>
  <a href="<?php echo e(route('file.download', $id)); ?>" onclick="" class="btn btn-outline-primary my-2">
    Download File <i class="fa fa-download" aria-hidden="true"></i> 
  </a>
  <button type="button" onclick="copyFunction()" class="btn btn-outline-success my-2">
    Copy Link <i class="bi bi-clipboard-check text-success fa-lg "></i>
  </button>
  
  <h5> <a href="<?php echo e(route('file.destroy', $id)); ?>" class="btn btn-outline-danger my-2 w-100">Delete</a> </h5>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/arzaqziad/Laravel/FileTransfer/resources/views/show.blade.php ENDPATH**/ ?>