<div class="grid w-full gap-8 p-8 mx-auto xl:p-8 2xl:p-10 xl:gap-8 2xl:gap-10">

  <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4 xl:gap-8 2xl:gap-10">
    <?php if (isset($component)) { $__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8 = $component; } ?>
<?php $component = App\View\Components\Board::resolve(['color' => 'blue-500','name' => 'lecturers','digit' => ''.e(\App\Models\User::count() - 1).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('board'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Board::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 2xl:w-8 2xl:h-8" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
      </svg>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8)): ?>
<?php $component = $__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8; ?>
<?php unset($__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8 = $component; } ?>
<?php $component = App\View\Components\Board::resolve(['color' => 'red-500','name' => 'courses','digit' => ''.e(\App\Models\Course::count()).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('board'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Board::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-journal-richtext 2xl:w-8 2xl:h-8" viewBox="0 0 16 16">
        <path d="M7.5 3.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047L11 4.75V7a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 7v-.5s1.54-1.274 1.639-1.208zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
      </svg>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8)): ?>
<?php $component = $__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8; ?>
<?php unset($__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8 = $component; } ?>
<?php $component = App\View\Components\Board::resolve(['color' => 'green-600','name' => 'levels','digit' => ''.e(\App\Models\Level::count()).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('board'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Board::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 2xl:w-8 2xl:h-8" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
      </svg>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8)): ?>
<?php $component = $__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8; ?>
<?php unset($__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8 = $component; } ?>
<?php $component = App\View\Components\Board::resolve(['color' => 'gray-500','name' => 'semesters','digit' => ''.e(\App\Models\Semester::count()).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('board'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Board::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 2xl:w-8 2xl:h-8" fill="currentColor" class="bi bi-bar-chart-line" viewBox="0 0 16 16">
        <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z" />
      </svg>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8)): ?>
<?php $component = $__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8; ?>
<?php unset($__componentOriginal15802cba71b9a49a312c120e81efb512b75cd6c8); ?>
<?php endif; ?>
  </div>
  <div class="grid gap-8 lg:grid-cols-2 xl:gap-8 2xl:gap-10">
    <div class="p-8 bg-white rounded shadow-sm">
      <canvas id="myChart" class="w-full h-full"></canvas>
    </div>
    <div class="p-8 bg-white rounded shadow-sm">
      <canvas id="pieChart" class="w-full h-full"></canvas>
    </div>
  </div>
  <div class="grid gap-8">
    <div class="p-8 bg-white rounded shadow-sm">
      <canvas id="lineChart" class="w-full h-full"></canvas>
    </div>
  </div>
</div>

<?php $__env->startPush('scripts'); ?>
<script>
  var xValues = ["January"
    , "February"
    , "March"
    , "April"
    , "May"
    , "June"
    , "July"
    , "August"
    , "September"
    , "October"
    , "November"
    , "December"
  , ];
  var yValues = [55, 49, 44, 24, 15, 12, 56, 78, 5, 34, 67, 90];
  var barColors = "#199f47";

  new Chart("myChart", {
    type: "bar"
    , data: {
      labels: xValues
      , datasets: [{
        backgroundColor: barColors
        , data: yValues
      , }, ]
    , }
    , options: {
      title: {
        display: true
        , text: "<?php echo e(strtoupper('Sales peformance of author')); ?>"
      , },

    }
  , });

</script>
<script>
  var xValues = ["<?php echo e(fake()->name); ?>", "<?php echo e(fake()->name); ?>", "<?php echo e(fake()->name); ?>", "<?php echo e(fake()->name); ?>"
    , "<?php echo e(fake()->name); ?>", "<?php echo e(fake()->name); ?>", "<?php echo e(fake()->name); ?>"
    , "<?php echo e(fake()->name); ?>", "<?php echo e(fake()->name); ?>"
  ];
  var yValues = [55, 49, 44, 24, 15, 12, 56, 78, 5, 34, 67, 90];
  var barColors = ["#199f47", '#f98677', '#f9f677', '#398677', '#a9ff77', '#398ff7'
    , "#b91d47"
    , "#00aba9"
    , "#2b5797"
    , "#e8c3b9"
    , "#1e7145"
  ];

  new Chart("pieChart", {
    type: "pie"
    , data: {
      labels: xValues
      , datasets: [{
        backgroundColor: barColors
        , data: yValues
      , }, ]
    , }
    , options: {
      title: {
        display: true
        , text: "<?php echo e(strtoupper('Sales peformance of author')); ?>"
      , },

    }
  , });

</script>
<script>
  var xValues = ["January"
    , "February"
    , "March"
    , "April"
    , "May"
    , "June"
    , "July"
    , "August"
    , "September"
    , "October"
    , "November"
    , "December"
  , ];

  new Chart("lineChart", {
    type: "line"
    , data: {
      labels: xValues
      , datasets: [{
        data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478]
        , borderColor: "red"
        , fill: false
      }, {
        data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000]
        , borderColor: "green"
        , fill: false
      }, {
        data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100]
        , borderColor: "blue"
        , fill: false
      }]
    }
    , options: {
      legend: {
        display: false
      }
    }
  });

</script>
<?php $__env->stopPush(); ?>
<?php /**PATH /Users/user/Documents/projects/course_allocation/resources/views/livewire/admin-dashboard.blade.php ENDPATH**/ ?>