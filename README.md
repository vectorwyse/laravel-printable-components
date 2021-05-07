
# Laravel Printable Components

A set of Blade components for creating document previews with automatic page breaks that translate perfectly to paper or PDF.

## Requirements

* Laravel 8.x
* Tailwind CSS 2.x

## Installation

```sh
composer require vectorwyse/laravel-printable-components
```


## Usage/Examples

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

### Paper size

You can specify the paper size by passing the `size` parameter:

```blade
  <x-printable.document size="legal">

    <x-printable.page>
        {{-- I'm a legal page --}}
    </x-printable.page>

  </x-printable.document>
```

### Paper orientation

You can specify the paper orientation by passing the `orientation` parameter:

```blade
  <x-printable.document size="legal" orientation="landscape">

    <x-printable.page>
        {{-- I'm a legal & landscape page --}}
    </x-printable.page>

  </x-printable.document>
```

## Support Us
[Vectorwyse](https://vectorwyse.com) is a web development agency specializing in data-driven web apps. We love building things with the [TALL stack](https://tallstack.dev/), so when we have an opportunity to give back to the community, we're super excited!

If you find this package useful, or if you would like us to build something for you, feel free to [drop us a line!](mailto:hello@vectorwyse.com)