<?php $__env->startSection('content'); ?>
<?php if($errors->any()): ?>
    <div class="w-4/5 m-auto text-center">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <ul>
                <li class="text-red-500 list-none"> <?php echo e($error); ?> </li>
            </ul>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<div class="m-auto w-4/6 py-7 bg-gradient-to-r from-gray-800 to-gray-500 rounded-md">
    <div class="display-inline font-bold italic text-5xl text-center m-auto text-gray-300">
        DCI Officers
    </div>
    <div class="display-inline  italic font-bold text-2xl text-center m-auto text-gray-400">
        NEW crime
    </div>

    <div class="flex justify-center pt-20">
        <form action="/crime" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
                <div class="block">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="crimeid" placeholder="crime unique id">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="officerid" placeholder="officer id">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="crimedescription" placeholder="crime description">
                    <button class="bg-gray-900 block shadow-5xl mb-10 p-2 w-80
                    uppercase font-bold hover:text-gray-900 hover:bg-gray-500"
                     type="submit">
                        Submit
                    </button>
                </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jonte/laravelp/dci/resources/views/owners/crime/create.blade.php ENDPATH**/ ?>