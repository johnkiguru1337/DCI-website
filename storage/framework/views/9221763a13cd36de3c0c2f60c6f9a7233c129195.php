<?php $__env->startSection('content'); ?>
<?php if($errors->any()): ?>
            <div class="w-4/5 m-auto text-center">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <ul>
                    <li class="text-red-500 py-3 list-none"> <?php echo e($error); ?> </li>
                </ul>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
<?php endif; ?>
<div class="m-auto w-4/6 py-7 bg-gradient-to-r from-gray-800 to-gray-500 rounded-md">
    <div class="display-inline font-bold italic text-5xl text-center m-auto text-gray-300">
        DCI Officers
    </div>
    <div class="display-inline  italic font-bold text-2xl text-center m-auto text-gray-400">
        NEW Officer
    </div>

    <div class="flex justify-center pt-20">
        <form action="/officer" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
                <div class="block">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="officerid" placeholder="officer unique id">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="officername" placeholder="officer name">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="officerdescription" placeholder="officer description">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="officerrank" placeholder="officer rank">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="armouryvehicle" placeholder="armoury and vehicle in pocession">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="indiscipline"placeholder=" any officer indiscipline report">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="familymembers" placeholder="officer family members">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="contact" placeholder="officer contact">
                    <input type="text"
                    class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                    name="email" placeholder="officer email">
                    <input type="file"
                    class="block shadow-5xl mb-2 p-2 w-80 italic"
                    name="image">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jonte/laravelp/dci/resources/views/owners/officer/create.blade.php ENDPATH**/ ?>