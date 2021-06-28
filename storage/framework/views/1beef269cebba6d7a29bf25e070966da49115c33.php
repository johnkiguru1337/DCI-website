<?php $__env->startSection('content'); ?>

<div class="m-auto w-4/6 py-7 bg-gradient-to-r from-gray-800 to-gray-500 rounded-md">
        <div class="display-inline font-bold text-5xl text-center italic m-auto text-gray-300">
            DCI Officers
        </div>
        <div class="pt-10 px-20 border-b-2 pb-2 text-3xl border-dotted italic text-blue-400">
                <?php echo e($officer->officer_name); ?>&rarr;Details are:
        </div>
        <div class=" text-gray-200 grid grid-cols-2 gap-2">
            <img src=" <?php echo e(asset('images/'.$officer->image_path)); ?> " alt=" my image"
            class="rounded place-self-center">
            <div class="text-gray-400 italic text-2xl">officer description
                <p class="place-self-center text-gray-300"><?php echo e($officer->officer_description); ?></p>
            </div>
        </div>
        <div class="flex space-x-4 px-10 pt-5 ">
            <div class="flex-1 text-gray-200">
                <h3 class="text-gray-400 font-sans md:font-serif">officer id</h3>
                <p><?php echo e($officer->officer_id); ?></p>
            </div>
            <div class="flex-1 text-gray-200">
                <h3 class="text-gray-400 font-sans md:font-serif">officer name</h3>
                <p><?php echo e($officer->officer_name); ?></p>
            </div>
            <div class="flex-1 text-gray-200">
                <h3 class="text-gray-400 font-sans md:font-serif">officer contact</h3>
                <p><?php echo e($officer->contact); ?></p>
            </div>
            <div class="flex-1 text-gray-200">
                <h3 class="text-gray-400 font-sans md:font-serif">officer email</h3>
                <p><?php echo e($officer->email); ?></p>
            </div>
        </div>
 <!-------------------the others after flex---------------------------->
    <table class="mt-6">
            <tr>
                <td class="text-gray-300 px-10">
                    <h3 class="text-gray-400 italic text-2xl">familymembers </h3>
                    <p><?php echo e($officer->familymembers); ?></p>
                </td>
                <td class=" text-gray-300 px-10">
                    <h3 class="text-gray-400 italic text-2xl">officer rank</h3>
                    <p><?php echo e($officer->officer_rank); ?></p>
                </td>
            </tr>
            <tr class="py-10">
                <td class=" text-gray-300 py-10 px-10">
                    <h3 class="text-gray-400 italic text-2xl">
                        officer armoury/vehicle posession</h3>
                    <p><?php echo e($officer->armouryvehicle); ?></p>
                </td>
                <td class=" text-gray-300 py-10 px-10">
                    <h3 class="text-gray-400 italic text-2xl">
                        officer indiscipline cases</h3>
                    <p><?php echo e($officer->indiscipline); ?></p>
                </td>
            </tr>

    </table>
    <div class="flex p-3">
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
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jonte/laravelp/dci/resources/views/owners/officer/show.blade.php ENDPATH**/ ?>