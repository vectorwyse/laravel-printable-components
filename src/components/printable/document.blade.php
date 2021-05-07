@props([
  'size' => 'letter',
  'orientation' => 'portrait'
])
@php
  $dimensions = [
    'letter' => ['816px', '1056px'],
    'legal' => ['816px', '1344px'],
  ];

  $width = ($orientation == 'portrait' ? $dimensions[$size][0] : $dimensions[$size][1]);
  $height = ($orientation == 'portrait' ? $dimensions[$size][1] : $dimensions[$size][0]);
@endphp

<div class="flex justify-center bg-gray-400">
  <style>
    #printable-container > section {
      width: {{ $width }};
      height: {{ $height }};
    }

    @page {
      size: {{ $size }} {{ $orientation }};
      margin: 0;
    }

    @media print {
      /* Reset all screen preview styles */
      #printable-container {
        padding: 0;
      }
      #printable-container > section {
        margin-top: 0;
        margin-bottom: 0;
        border: none;
        box-shadow: none;
      }
    }
  </style>

  <div
    id="printable-container"
    class="flex flex-col py-6 space-y-6"
    >

    {{ $slot }}

  </div>
</div>