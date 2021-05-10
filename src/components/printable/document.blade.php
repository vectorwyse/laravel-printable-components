@props([
  'size' => 'letter',
  'orientation' => 'portrait'
])
@php
  $dimensions = [
    'letter' => ['816px', '1056px'],
    'legal' => ['816px', '1344px'],
    'a4' => ['794px', '1123px'],
  ];

  $width = ($orientation == 'portrait' ? $dimensions[$size][0] : $dimensions[$size][1]);
  $height = ($orientation == 'portrait' ? $dimensions[$size][1] : $dimensions[$size][0]);
@endphp

<div>
  <style>
    #printable-container > section {
      width: {{ $width }};
      height: {{ $height }};
    }

    @media print {
      @page {
        size: {{ $size }} {{ $orientation }};
        margin: 0;
       }
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
    {{ $attributes->merge(['class' => 'flex flex-col items-center bg-gray-400 py-6 space-y-6']) }}
    >

    {{ $slot }}

  </div>
</div>