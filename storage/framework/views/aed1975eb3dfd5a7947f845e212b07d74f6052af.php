<?php $__env->startSection('content'); ?>
    <div class="m-auto w-4/6 py-7 bg-gradient-to-r from-gray-800 to-gray-500 rounded-md">
        <div class="text-center ">
            <h1 class="text-5xl uppercase italic bold text-gray-300">
                Edit Officer
            </h1>
        </div>
        <div class="text-center ">
            <h1 class="text-xl capitalize italic text-blue-300">
                you are editing officer id=<?php echo e($officer->id); ?>,name= <?php echo e($officer->officer_name); ?>

            </h1>
        </div>
        <div class="flex justify-center pt-20">
            <form action="/officer/<?php echo e($officer->id); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                    <div class="block">
                        <label for="officerid">Enter officer new modified id</label>
                        <input type="text"
                        class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-400"
                        name="officerid" value=" <?php echo e($officer->officer_id); ?> ">
                        <label for="officername">Modify officer  name</label>
                        <input type="text"
                        class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-400"
                        name="officername" value=" <?php echo e($officer->officer_name); ?> ">
                        <label for="officerdescription">Modify officer  information</label>
                        <input type="text"
                        class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-400"
                        name="officerdescription" value=" <?php echo e($officer->officer_description); ?> ">
                        <label for="officerrank">Modify officer rank</label>
                        <input type="text"
                        class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-400"
                        name="officerrank" value=" <?php echo e($officer->officer_rank); ?> ">
                        <label for="officerarmouryvehicle">Modify officer  armoury and vehicle
                            in poscession</label>
                        <input type="text"
                        class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-400"
                        name="armouryvehicle" value=" <?php echo e($officer->armouryvehicle); ?> ">
                        <label for="officerindiscipline">Modify officer indiscipline cases</label>
                        <input type="text"
                        class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-400"
                        name="indiscipline" value=" <?php echo e($officer->indiscipline); ?> ">
                        <label for="officerfamilymembers">Modify officer  family</label>
                        <input type="text"
                        class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-400"
                        name="familymembers" value=" <?php echo e($officer->familymembers); ?> ">
                        <p for="officercontact" class="text-red-400 italic text-xl">
                            officer's contact</p>
                       <p class="block shadow-5xl mb-2 p-2 w-80 italic" >
                         <?php echo e($officer->contact); ?></p>
                        <p  class="text-red-400 italic text-xl">
                           officer's email</p>
                        <p class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-400">
                            <?php echo e($officer->email); ?></p>
                        <input type="file"
                        class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                        name="image">
                        <button class="bg-green-300 block shadow-5xl mb-10 p-2 w-80
                        uppercase font-bold hover:bg-gray-400 text-gray-600" type="submit">
                            Submit
                        </button>
                    </div>
            </form>
        </div>

        <div class="flex p-3">
            <button class="mr-5 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
                <a href="<?php echo e(url('officer')); ?>">officers</a>
            </button>
            <button class="ml-0 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
                <a href="<?php echo e(url('crime')); ?>">crime</a>
            </button>
            <button class="ml-1 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
                <a href="<?php echo e(url('/')); ?>">home</a>
            </button>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jonte/laravelp/dci/resources/views/owners/officer/edit.blade.php ENDPATH**/ ?>