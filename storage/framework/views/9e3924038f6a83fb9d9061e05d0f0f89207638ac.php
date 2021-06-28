<?php $__env->startSection('content'); ?>
    <div class="m-auto w-4/6 py-7 bg-gradient-to-r from-gray-800 to-gray-500 rounded-md">
        <div class="text-center ">
            <h1 class="text-5xl uppercase italic bold text-gray-300">
                Edit Crime
            </h1>
        </div>
        <div class="text-center ">
            <h1 class="text-xl capitalize italic text-blue-300">
                you are editing Crime id=<?php echo e($crime->crime_id); ?>,name= <?php echo e($crime->crime_id); ?>

            </h1>
        </div>
        <div class="flex justify-center pt-20">
            <form action="/crime/<?php echo e($crime->id); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <label for="crimeid" class=" text-gray-300">
                    Enter crime <?php echo e($crime->crime_id); ?> new modified information</label>
                    <div class="block">
                        <label for="officerid">Modify officer  id</label>
                        <input type="text"
                        class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-400"
                        name="officerid" value=" <?php echo e($crime->officer_id); ?> ">
                        <label for="officerdescription">Modify crime  information</label>
                        <input type="text"
                        class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-400"
                        name="crimedescription" value=" <?php echo e($crime->crime_description); ?> ">
                        <button class="bg-green-300 block shadow-5xl mb-10 p-2 w-80
                        uppercase font-bold hover:bg-gray-400 text-gray-600" type="submit">
                            Submit
                        </button>
                    </div>
            </form>
        </div>
    </div>

<?php if($errors->any()): ?>
    <div class="w-4/5 m-auto text-center">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <ul>
            <li class="text-red-500 list-none"> <?php echo e($error); ?> </li>
        </ul>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jonte/laravelp/dci/resources/views//owners/crime/edit.blade.php ENDPATH**/ ?>