
# Laravel Printable Components

A set of Blade components for creating document previews that print perfectly to paper or PDF.

![](screenshot.gif)

If you've ever tried to replicate a "print preview" of some document or data in HTML, you know how frustrating it can be to ensure things will print consistently on one page.

This package aims to take the guesswork out of setting the right dimensions for each page in your document so you can focus on just laying out your content.

What you get is your content laid out across various pages which when printed or saved to PDF from your browser will result in a document identical to your preview. Even better, when paired with something like [Browsershot](https://github.com/spatie/browsershot), you can craft intricate, professional looking layouts using the power of Flexbox and snapshot them into beautiful looking PDFs.

## Requirements

* Laravel 8.x
* Tailwind CSS 2.x

Supported browsers: Chrome, Brave, Firefox

## Installation

```sh
composer require vectorwyse/laravel-printable-components
```

## Usage

The package provides you with two components designed to be used together:

```blade
<body>

  <x-printable.document>

    <x-printable.page>
      {{-- Your content --}}
    </x-printable.page>

    <x-printable.page>
      {{-- More content --}}
    </x-printable.page>

  </x-printable.document>

</body>
```

By default, this will output a "print preview" of pages in letter size and portrait orientation.

You can add as many pages as you like and the content will stay within their respective pages-- even when printing via the browser, or when saving as a PDF.

NOTE: You should ensure that your print settings match your document settings. e.g. If your document component is set to "letter" and "portrait" then your browser's print settings should also be set to "letter" and "portrait."

## Document `<x-printable.document>`

This component renders a "Print Preview" style container, and should come right after the `<body>` tag.

### Paper size

You can specify the paper size by passing the `size` parameter:

```blade
  <x-printable.document size="legal">

    <x-printable.page>
      {{-- I'm a legal page --}}
    </x-printable.page>

  </x-printable.document>
```
Currently supported sizes are: `letter|legal|a4`.
### Paper orientation

You can specify the paper orientation by passing the `orientation` parameter:

```blade
  <x-printable.document size="legal" orientation="landscape">

    <x-printable.page>
      {{-- I'm a legal & landscape page --}}
    </x-printable.page>

  </x-printable.document>
```

Supported orientations are: `portrait|landscape`.
### Styling

By default, the following tailwind classes are applied:

`flex flex-col items-center bg-gray-400 py-6 space-y-6`

You are free to adjust this by adding your own classes:

```blade
  <x-printable.document class="bg-green-700 py-12 space-y-12">

    ...

  </x-printable.document>
```

## Page `<x-printable.page>`

This component renders a `section` element with the proper height & width set to simulate a page.
Any content you place within this component will within its own page when printing or saving to PDF.

All pages within a document inherit the same size and orientation settings.


### Styling

By default the following tailwind classes are applied:

`overflow-y-hidden bg-white border border-gray-700 shadow-2xl`

You are free to adjust this by adding your own classes:

```blade
  <x-printable.page class="border-purple-700 shadow-none">

    ...

  </x-printable.page>
```

## Support Us
[Vectorwyse](https://vectorwyse.com) is a web development agency specializing in data-driven web apps. We love building things with the [TALL stack](https://tallstack.dev/), so when we have an opportunity to give back to the community, we're super excited!

If you find this package useful, or if you would like us to build something for you, feel free to [drop us a line!](mailto:hello@vectorwyse.com)