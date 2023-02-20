<div class="flex flex-col w-full mx-auto gap-8 p-8 xl:p-8 2xl:p-10 xl:gap-8 2xl:gap-10">
  <div class="flex items-center justify-between space-x-6">
    
    <form class="flex gap-4" wire:submit.prevent="save">
      <div class="max-w-max">
        <input type="text" wire:model="name" class="rounded-lg border p-2"><br>
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small class="text-red-600 text-sm w-full"><?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>
      <div>
        <button type="submit" class="bg-primary text-white px-6 py-2 rounded block max-w-max">Add Level</button>
      </div>

    </form>
    <?php if (isset($component)) { $__componentOriginal9c20e82a484d0dd8436a68d661ca92fd15770a65 = $component; } ?>
<?php $component = App\View\Components\Search::resolve(['name' => 'level'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Search::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9c20e82a484d0dd8436a68d661ca92fd15770a65)): ?>
<?php $component = $__componentOriginal9c20e82a484d0dd8436a68d661ca92fd15770a65; ?>
<?php unset($__componentOriginal9c20e82a484d0dd8436a68d661ca92fd15770a65); ?>
<?php endif; ?>
  </div>


  
  <div class="w-full px-4 pb-4 overflow-x-auto bg-white rounded-lg shadow-sm">
    <?php if(\App\Models\level::count() > 1): ?>
    <table class="w-full space-y-2 overflow-x-auto whitespace-nowrap">
      <thead class="w-full pb-4 text-xl border-b">
        <tr class="font-medium">
          <th class="p-2 whitespace-nowrap"></th>
          <th class="p-2 text-xl font-medium text-left">Name</th>
          <th class="p-2 text-xl font-medium text-center">Total Courses</th>
          <th class="p-2"></th>
        </tr>
      </thead>
      <tbody class="w-full overflow-x-auto break-normal">
        <?php $__empty_1 = true; $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr class="">
          <td class="p-2 whitespace-nowrap">
            <input type="checkbox" wire:model="checked" id="" value="<?php echo e($level->id); ?>" class="block rounded whitespace-nowrap text-primary focus:outline-none focus:ring-primary">
          </td>
          <td class="p-2 whitespace-nowrap">
            <p class="uppercase"><?php echo e($level->name . ' level'); ?></p>
          </td>
          <td class="p-2 text-center whitespace-nowrap">
            <?php echo e($level->courses->count()); ?>

          </td>
          <td class="p-2 whitespace-nowrap">
            <div class="flex space-x-2 item-center">
              <span wire:click="confirmDelete(<?php echo e($level->id); ?>)" class="w-8 h-8 p-2 text-red-600 border border-red-600 rounded-md cursor-pointer tt hover:-translate-y-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                </svg>
              </span>
            </div>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h1 class="text-2xl font-bold">No records found in the database</h1>
        <?php endif; ?>
      </tbody>
    </table>

    
    
  <?php else: ?>
  <div class="p-8 text-center">
    <p class="font-medium text-xl">No level yet, add levels to the system</p>
  </div>
  <?php endif; ?>
</div>
</div>
<?php /**PATH /Users/user/Documents/projects/course_allocation/resources/views/livewire/levels.blade.php ENDPATH**/ ?>