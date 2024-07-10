<a {{ $attributes }}
    class="{{ $active ? 'bg-sky-600 text-white underline' : 'text-white hover:bg-sky-500 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
