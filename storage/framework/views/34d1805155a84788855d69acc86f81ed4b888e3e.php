<div class="flex flex-col w-full mx-auto gap-8 p-8 xl:p-8 2xl:p-10 xl:gap-8 2xl:gap-10">
  
  
  <?php if (isset($component)) { $__componentOriginal2bcebcb49cbd37095816ed3d3b22a3f8992f805c = $component; } ?>
<?php $component = App\View\Components\Modal::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Modal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'max-w-lg']); ?>
    <?php if (isset($component)) { $__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6 = $component; } ?>
<?php $component = App\View\Components\Form::resolve(['title' => 'course','update' => $update] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
      <?php if (isset($component)) { $__componentOriginal86e367d7a0f86dc5cb2647e3c46305d0836a1990 = $component; } ?>
<?php $component = App\View\Components\TextInput::resolve(['label' => 'Course Title*','name' => 'title','type' => 'text'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.defer' => 'title']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal86e367d7a0f86dc5cb2647e3c46305d0836a1990)): ?>
<?php $component = $__componentOriginal86e367d7a0f86dc5cb2647e3c46305d0836a1990; ?>
<?php unset($__componentOriginal86e367d7a0f86dc5cb2647e3c46305d0836a1990); ?>
<?php endif; ?>
      <div class="flex items-center justify-between w-full">
        <?php if (isset($component)) { $__componentOriginal86e367d7a0f86dc5cb2647e3c46305d0836a1990 = $component; } ?>
<?php $component = App\View\Components\TextInput::resolve(['label' => 'Course code*','name' => 'code','type' => 'text'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.defer' => 'code','class' => 'w-[96%]']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal86e367d7a0f86dc5cb2647e3c46305d0836a1990)): ?>
<?php $component = $__componentOriginal86e367d7a0f86dc5cb2647e3c46305d0836a1990; ?>
<?php unset($__componentOriginal86e367d7a0f86dc5cb2647e3c46305d0836a1990); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal86e367d7a0f86dc5cb2647e3c46305d0836a1990 = $component; } ?>
<?php $component = App\View\Components\TextInput::resolve(['label' => 'Course Unit*','name' => 'unit','type' => 'text'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.defer' => 'unit','class' => 'w-[96%]']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal86e367d7a0f86dc5cb2647e3c46305d0836a1990)): ?>
<?php $component = $__componentOriginal86e367d7a0f86dc5cb2647e3c46305d0836a1990; ?>
<?php unset($__componentOriginal86e367d7a0f86dc5cb2647e3c46305d0836a1990); ?>
<?php endif; ?>
      </div>
      <div class="w-full h-12 space-y-1">
        <select wire:model.defer="level_id" class='w-full h-full pl-4 space-y-1 font-medium text-gray-500 placeholder-gray-500 capitalize bg-gray-100 border-0 rounded peer tt focus:border-2 focus:border-primary focus:bg-white focus:outline-none' id="">
          <option value="select" class="text-sm">Level*</option>
          <?php $__currentLoopData = \App\Models\Level::select(['id', 'name'])->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option class="py-2 capitalize" value="<?php echo e($option->id); ?>"><?php echo e($option->name); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php $__errorArgs = ['level_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="text-red-600"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6)): ?>
<?php $component = $__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6; ?>
<?php unset($__componentOriginal0777dca6b0ab2eebdcaf6ba884d5b30ab61203a6); ?>
<?php endif; ?>
   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2bcebcb49cbd37095816ed3d3b22a3f8992f805c)): ?>
<?php $component = $__componentOriginal2bcebcb49cbd37095816ed3d3b22a3f8992f805c; ?>
<?php unset($__componentOriginal2bcebcb49cbd37095816ed3d3b22a3f8992f805c); ?>
<?php endif; ?>
  
  <div class="flex items-center justify-between ">
    <div class="flex items-center space-x-6">
      <h1 class="text-3xl font-semibold capitalize text-primary">courses</h1>
      <?php if($checked): ?>
      <button class="font-normal btn btn-secondary">Select All <?php echo e(count($checked)); ?></button>
      <?php if (isset($component)) { $__componentOriginalca4b7e2f09e5ad5415b43e272fc9059625686028 = $component; } ?>
<?php $component = App\View\Components\Button\BulkDelete::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.bulk-delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button\BulkDelete::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalca4b7e2f09e5ad5415b43e272fc9059625686028)): ?>
<?php $component = $__componentOriginalca4b7e2f09e5ad5415b43e272fc9059625686028; ?>
<?php unset($__componentOriginalca4b7e2f09e5ad5415b43e272fc9059625686028); ?>
<?php endif; ?>
      <?php else: ?>
      <?php if (isset($component)) { $__componentOriginal1787de7e861320324705bc25177dcc87d6ebbb07 = $component; } ?>
<?php $component = App\View\Components\Button\Add::resolve(['name' => 'courses'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.add'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button\Add::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1787de7e861320324705bc25177dcc87d6ebbb07)): ?>
<?php $component = $__componentOriginal1787de7e861320324705bc25177dcc87d6ebbb07; ?>
<?php unset($__componentOriginal1787de7e861320324705bc25177dcc87d6ebbb07); ?>
<?php endif; ?>
      <?php endif; ?>

    </div>

    
    <div class="flex items-center space-x-6">
      <?php if (isset($component)) { $__componentOriginal9c20e82a484d0dd8436a68d661ca92fd15770a65 = $component; } ?>
<?php $component = App\View\Components\Search::resolve(['name' => 'courses'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
  </div>

  
  <div class="w-full px-4 pb-4 overflow-x-auto bg-white rounded-lg shadow-sm">
    <?php if(\App\Models\Course::count() > 1): ?>
    <table class="w-full space-y-2 overflow-x-auto whitespace-nowrap">
      <thead class="w-full pb-4 text-xl border-b">
        <tr class="font-medium">
          <th class="p-2 whitespace-nowrap"></th>
          <th class="p-2 text-xl font-medium text-left">Title</th>
          <th class="p-2 text-xl font-medium text-left">Code</th>
          <th class="p-2 text-xl font-medium text-left">Unit</th>
          <th class="p-2 text-xl font-medium text-left">Level</th>
          <th class="p-2"></th>
        </tr>
      </thead>
      <tbody class="w-full overflow-x-auto break-normal">
        <?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr class="">
          <td class="p-2 whitespace-nowrap">
            <input type="checkbox" wire:model="checked" id="" value="<?php echo e($course->id); ?>" class="block rounded whitespace-nowrap text-primary focus:outline-none focus:ring-primary">
          </td>
          <td class="p-2 whitespace-nowrap">
            <p class=""><?php echo e($course->title); ?></p>
          </td>
          <td class="p-2 whitespace-nowrap">
            <?php echo e($course->code); ?>

          </td>
          <td class="p-2 whitespace-nowrap">
            <?php echo e($course->unit); ?>

          </td>
          <td class="p-2 whitespace-nowrap">
            <?php echo e($course->level->name); ?>

          </td>
          <td class="p-2 whitespace-nowrap">
            <div class="flex space-x-2 item-center">
              <span wire:click="edit(<?php echo e($course->id); ?>)" class="w-8 h-8 p-2 text-blue-600 border border-blue-600 rounded-md cursor-pointer tt hover:-translate-y-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="my-auto bi bi-eye" viewBox="0 0 16 16">
                  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                </svg>
              </span>
              <span wire:click="confirmDelete(<?php echo e($course->id); ?>)" class="w-8 h-8 p-2 text-red-600 border border-red-600 rounded-md cursor-pointer tt hover:-translate-y-1">
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

    
    <div class="mt-4">
      <?php if (isset($component)) { $__componentOriginala92867a63cc99f913cc00bd4a076c82864c7ddf2 = $component; } ?>
<?php $component = App\View\Components\PerPage::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('per-page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PerPage::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php echo e($courses->links()); ?>

       <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala92867a63cc99f913cc00bd4a076c82864c7ddf2)): ?>
<?php $component = $__componentOriginala92867a63cc99f913cc00bd4a076c82864c7ddf2; ?>
<?php unset($__componentOriginala92867a63cc99f913cc00bd4a076c82864c7ddf2); ?>
<?php endif; ?>
    </div>
    <?php else: ?>
    <div class="p-8 text-center">
      <p class="font-medium text-xl">No course yet, add courses to the system</p>
    </div>
    <?php endif; ?>
  </div>
</div>
<?php /**PATH /Users/user/Documents/projects/course_allocation/resources/views/livewire/courses.blade.php ENDPATH**/ ?>