<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    
</head>
<body class="p-10 bg-gray-100 font-sans text-gray-800 space-y-8">
  <h1 class="text-3xl font-bold text-center">Tailwind CSS Utility Test<i data-feather="settings"></i></h1>

  <!-- Typography -->
  <section>
    <h2 class="text-xl font-semibold mb-4">Typography</h2>
    <p class="text-sm">Small Text</p>
    <p class="text-base">Base Text</p>
    <p class="text-lg font-bold">Large Text with Bold</p>
    <p class="text-xl italic">Extra Large with Italic</p>
    <p class="uppercase tracking-widest">Uppercase Text</p>
  </section>

  <!-- Colors -->
  <section>
    <h2 class="text-xl font-semibold mb-4">Colors</h2>
    <div class="grid grid-cols-5 gap-4">
      <div class="h-16 bg-red-500"></div>
      <div class="h-16 bg-blue-500"></div>
      <div class="h-16 bg-green-500"></div>
      <div class="h-16 bg-yellow-500"></div>
      <div class="h-16 bg-gray-500"></div>
    </div>
  </section>

  <!-- Flexbox -->
  <section>
    <h2 class="text-xl font-semibold mb-4">Flexbox</h2>
    <div class="flex items-center justify-center space-x-4">
      <div class="w-16 h-16 bg-blue-500 flex items-center justify-center text-white">1</div>
      <div class="w-16 h-16 bg-green-500 flex items-center justify-center text-white">2</div>
      <div class="w-16 h-16 bg-red-500 flex items-center justify-center text-white">3</div>
    </div>
  </section>

  <!-- Grid -->
  <section>
    <h2 class="text-xl font-semibold mb-4">Grid</h2>
    <div class="grid grid-cols-3 gap-4">
      <div class="h-16 bg-blue-500"></div>
      <div class="h-16 bg-green-500"></div>
      <div class="h-16 bg-red-500"></div>
    </div>
  </section>

  <!-- Borders and Rounded Corners -->
  <section>
    <h2 class="text-xl font-semibold mb-4">Borders and Rounded Corners</h2>
    <div class="grid grid-cols-3 gap-4">
      <div class="h-16 bg-blue-500 border-2 border-black"></div>
      <div class="h-16 bg-green-500 border-4 border-dashed border-yellow-500"></div>
      <div class="h-16 bg-red-500 border-8 rounded-full"></div>
    </div>
  </section>

  <!-- Spacing -->
  <section>
    <h2 class="text-xl font-semibold mb-4">Spacing</h2>
    <div class="space-y-4">
      <div class="p-4 bg-blue-500 text-white">Padding</div>
      <div class="m-4 bg-green-500 text-white">Margin</div>
    </div>
  </section>

  <!-- Animation -->
  <section>
    <h2 class="text-xl font-semibold mb-4">Animation</h2>
    <div class="flex space-x-4">
      <div class="w-16 h-16 bg-purple-500 animate-spin"></div>
      <div class="w-16 h-16 bg-blue-500 animate-ping"></div>
      <div class="w-16 h-16 bg-red-500 animate-bounce"></div>
    </div>
  </section>

  <!-- Shadows -->
  <section>
    <h2 class="text-xl font-semibold mb-4">Shadows</h2>
    <div class="space-y-4">
      <div class="p-4 bg-white shadow-sm">Shadow Small</div>
      <div class="p-4 bg-white shadow-md">Shadow Medium</div>
      <div class="p-4 bg-white shadow-lg">Shadow Large</div>
    </div>
  </section>

  <!-- Transitions -->
  <section>
    <h2 class="text-xl font-semibold mb-4">Transitions</h2>
    <button class="px-4 py-2 bg-blue-500 text-white rounded transition duration-300 ease-in-out hover:bg-blue-700">
      Hover Me
    </button>
  </section>

  <!-- Backgrounds -->
  <section>
    <h2 class="text-xl font-semibold mb-4">Backgrounds</h2>
    <div class="p-4 bg-gradient-to-r from-blue-500 via-green-500 to-yellow-500 text-white rounded">
      Gradient Background
    </div>
  </section>

  <!-- Dark Mode -->
  <section>
    <h2 class="text-xl font-semibold mb-4">Dark Mode</h2>
    <div class="p-4 bg-white dark:bg-gray-800 dark:text-white">
      Switch to dark mode to test
    </div>
  </section>

  <!-- Accessibility -->
  <section>
    <h2 class="text-xl font-semibold mb-4">Accessibility</h2>
    <p class="sr-only">This text is only visible for screen readers.</p>
  </section>

  <!-- Custom Classes -->
  <section>
    <h2 class="text-xl font-semibold mb-4">Custom Classes</h2>
    <p class="custom-class bg-blue-200">Configure in Tailwind Config</p>
  </section>

    <!-- Positioning -->
    <section>
        <h2 class="text-xl font-semibold mb-4">Positioning</h2>
        <div class="relative bg-gray-100 h-48 overflow-y-scroll border">
          <div class="sticky top-0 bg-blue-500 text-white p-2">Sticky Header (Scroll down)</div>
          <p class="p-4">Scroll to test sticky positioning. This is useful for keeping elements like headers visible while scrolling.</p>
          <p class="p-4">More content here...</p>
          <p class="p-4">And here...</p>
        </div>
    
        <div class="relative mt-8">
          <div class="absolute top-0 left-0 bg-green-500 text-white p-2">
            Absolute Positioned Box
          </div>
          <div class="relative bg-gray-200 p-4">
            Relative Positioned Box
          </div>
        </div>
        <div class="fixed bottom-0 left-0 bg-red-500 text-white p-2">
          Fixed Positioned Box (Bottom Left)
        </div>
      </section>
      
      <section>
        <h2 class="text-xl font-semibold mb-4">Aspect Ratios</h2>
        <div class="aspect-w-16 aspect-h-9 bg-gray-300">
          <p class="flex justify-center items-center">16:9 Aspect Ratio</p>
        </div>
      </section>
      <section>
        <h2 class="text-xl font-semibold mb-4">Z-Index</h2>
        <div class="relative">
          <div class="absolute top-0 left-0 z-10 bg-blue-500 text-white p-2">Z-Index 10</div>
          <div class="absolute top-4 left-4 z-0 bg-gray-500 text-white p-2">Z-Index 0</div>
        </div>
      </section>
      <section>
        <h2 class="text-xl font-semibold mb-4">Filters</h2>
        <div class="flex space-x-4">
          <img src="https://via.placeholder.com/100" class="blur-sm" alt="Blur">
          <img src="https://via.placeholder.com/100" class="grayscale" alt="Grayscale">
          <img src="https://via.placeholder.com/100" class="sepia" alt="Sepia">
        </div>
      </section>
      <section>
        <h2 class="text-xl font-semibold mb-4">Transformations</h2>
        <div class="flex space-x-4">
          <div class="transform scale-150 bg-blue-500 p-4 text-white">Scale</div>
          <div class="transform rotate-45 bg-green-500 p-4 text-white">Rotate</div>
        </div>
      </section>
      <section>
        <h2 class="text-xl font-semibold mb-4">Content Overflow</h2>
        <div class="w-32 h-16 overflow-hidden bg-gray-200 p-4">
          <p>This text overflows.</p>
        </div>
      </section>
      <section>
        <h2 class="text-xl font-semibold mb-4">Positioning</h2>
        <div class="relative bg-gray-100 h-48 overflow-y-scroll border">
          <div class="sticky top-0 bg-blue-500 text-white p-2">Sticky Header (Scroll down)</div>
          <p class="p-4">Scroll to test sticky positioning. This is useful for keeping elements like headers visible while scrolling.</p>
          <p class="p-4">More content here...</p>
          <p class="p-4">And here...</p>
        </div>
    
        <div class="relative mt-8">
          <div class="absolute top-0 left-0 bg-green-500 text-white p-2">Absolute Positioned Box</div>
          <div class="relative bg-gray-200 p-4">Relative Positioned Box</div>
        </div>
        <div class="fixed bottom-0 left-0 bg-red-500 text-white p-2">Fixed Positioned Box (Bottom Left)</div>
      </section>
    
      <!-- Table Styles -->
      <section>
        <h2 class="text-xl font-semibold mb-4">Table Styles</h2>
        <table class="table-auto border-collapse border border-gray-200 w-full text-left">
          <thead>
            <tr>
              <th class="border border-gray-300 px-4 py-2 bg-gray-100">Header 1</th>
              <th class="border border-gray-300 px-4 py-2 bg-gray-100">Header 2</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border border-gray-300 px-4 py-2">Row 1, Col 1</td>
              <td class="border border-gray-300 px-4 py-2">Row 1, Col 2</td>
            </tr>
            <tr>
              <td class="border border-gray-300 px-4 py-2">Row 2, Col 1</td>
              <td class="border border-gray-300 px-4 py-2">Row 2, Col 2</td>
            </tr>
          </tbody>
        </table>
      </section>
    
      <!-- Visibility and Display -->
      <section>
        <h2 class="text-xl font-semibold mb-4">Visibility and Display</h2>
        <div class="space-y-4">
          <div class="visible bg-blue-500 text-white p-2">Visible</div>
          <div class="invisible bg-gray-500 text-white p-2">Invisible</div>
          <div class="hidden bg-red-500 text-white p-2">Hidden (use `hidden` class)</div>
        </div>
      </section>
    
      <!-- Scroll Behaviors -->
      <section>
        <h2 class="text-xl font-semibold mb-4">Scroll Behaviors</h2>
        <div class="h-32 w-64 overflow-y-scroll scroll-smooth border">
          <a href="#target" class="block p-2 bg-blue-500 text-white mb-2">Scroll to Target</a>
          <p class="p-4">Some scrollable content...</p>
          <p id="target" class="p-4 bg-gray-300">Scroll Target</p>
        </div>
      </section>
    
      <!-- Container -->
      <section>
        <h2 class="text-xl font-semibold mb-4">Container</h2>
        <div class="container mx-auto bg-gray-100 p-4">
          <p>This is a responsive container with padding.</p>
        </div>
      </section>
    
      <!-- List Styles -->
      <section>
        <h2 class="text-xl font-semibold mb-4">List Styles</h2>
        <ul class="list-disc pl-5">
          <li class="mb-1">Item 1</li>
          <li class="mb-1">Item 2</li>
          <li class="mb-1">Item 3</li>
        </ul>
        <ol class="list-decimal pl-5">
          <li class="mb-1">First</li>
          <li class="mb-1">Second</li>
        </ol>
      </section>
    
      <!-- Ring Utilities -->
      <section>
        <h2 class="text-xl font-semibold mb-4">Ring Utilities</h2>
        <div class="flex space-x-4">
          <div class="ring-2 ring-blue-500 p-4 bg-gray-100">Ring 2</div>
          <div class="ring-4 ring-green-500 p-4 bg-gray-100">Ring 4</div>
        </div>
      </section>
    
      <!-- Touch and User Select -->
      <section>
        <h2 class="text-xl font-semibold mb-4">Touch and User Select</h2>
        <div class="space-y-4">
          <div class="select-none bg-gray-200 p-4">Cannot Select Text</div>
          <div class="select-text bg-gray-300 p-4">Can Select This Text</div>
          <div class="touch-pan-y bg-blue-100 p-4">Touch Pan-Y Allowed</div>
          <div class="touch-none bg-gray-100 p-4">No Touch Events Allowed</div>
        </div>
      </section>
    
      <!-- Backdrop Utilities -->
      <section>
        <h2 class="text-xl font-semibold mb-4">Backdrop Utilities</h2>
        <div class="relative">
          <img src="https://via.placeholder.com/400" alt="Background Image" class="opacity-30">
          <div class="absolute inset-0 backdrop-blur-md backdrop-brightness-75 flex justify-center items-center text-white">
            Backdrop Blur and Brightness
          </div>
        </div>
      </section>
    
      <!-- Transitions and Delay -->
      <section>
        <h2 class="text-xl font-semibold mb-4">Transitions and Delay</h2>
        <button class="px-4 py-2 bg-blue-500 text-white rounded transition duration-500 delay-200 hover:bg-blue-700">
          Hover Me (Delayed)
        </button>
      </section>
      
      
      <script src="{{ mix('js/app.js') }}"></script>
      <script>
        feather.replace();
      </script>
                             
</body>
</html>