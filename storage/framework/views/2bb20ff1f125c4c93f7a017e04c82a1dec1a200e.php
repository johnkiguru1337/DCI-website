<?php $__env->startSection('content'); ?>

    <div class="m-auto w-4/6 py-7 bg-gradient-to-r from-gray-800 to-gray-500 rounded-md">
        <div class=" display-inline font-bold text-5xl text-center italic m-auto text-gray-300">
            DCI Officers
        </div>
        <?php if(Auth::user()): ?>
        <div class="pt-10 px-20 ">
            <a href="<?php echo e(url('officer/create')); ?>"
            class="border-b-2 pb-2 border-dotted italic text-blue-400" >
                Add a new officer &rarr;
            </a>
        </div>
        <?php endif; ?>
        <div class="flex p-3 sticky top-0 ">
            <button class="mr-5 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
                <a href="<?php echo e(url('officer')); ?>">officers</a>
            </button>
            <button class="ml-0 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
                <a href="<?php echo e(url('crime')); ?>">crime</a>
            </button>
            <button class="ml-3 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
                <a href="<?php echo e(url('/')); ?>">home</a>
            </button>
        </div>
    <?php $__currentLoopData = $officers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $officer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="flex space-x-4 px-10 pt-5 text-gray-300">
            <div class="flex-1">
                <a href="<?php echo e(url('officer/'.$officer->id)); ?>" class="text-gray-300 hover:text-gray-500">
                    <?php echo e($officer->officer_id); ?>

                </a>
            </div>
            <div class="flex-1">
                <p><?php echo e($officer->officer_name); ?></p>
            </div>
            <?php if(isset(Auth::user()->id) && Auth::user()->id >='<?php echo e($officer->user_id); ?>'): ?>
            <div class="flex-1">
                <a href="<?php echo e(url('officer/'.$officer->id.'/edit')); ?>"
                 class="border-b-2 pt-3 pb-2 text-green-300 border-dotted italic">
                 Edit officer &rarrtl;
                 </a>
                 <form action="/officer/<?php echo e($officer->id); ?> " class="pt-3" method="POST">
                     <?php echo csrf_field(); ?>
                     <?php echo method_field('delete'); ?>
                     <button type="submit"
                     class="border-b-2 pb-2 border-dotted italic text-red-400">
                         Delete &rarr;
                     </button>
                 </form>
             </div>
            <?php endif; ?>

          </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jonte/laravelp/dci/resources/views/owners/officer/index.blade.php ENDPATH**/ ?>