@unless ($breadcrumbs->isEmpty())
    <nav class="container mx-auto breadcrumbs text-sm">
        <ol>
            {{-- <ol class="p-4 rounded flex flex-wrap bg-gray-300 text-sm text-gray-800"> --}}
            @foreach ($breadcrumbs as $breadcrumb)
                @if ($breadcrumb->url && !$loop->last)
                    <li>
                        <a href="{{ $breadcrumb->url }}" class="hover:underline">
                            {{ $breadcrumb->title }}
                        </a>
                    </li>
                @elseif($breadcrumb->url && $loop->last)
                    <li class=" font-bold">
                        {{ $breadcrumb->title }}
                    </li>
                @else
                    <li>
                        {{ $breadcrumb->title }}
                    </li>
                @endif

                {{-- @unless ($loop->last)
                    <li class="text-gray-500 px-2">
                        /
                    </li>
                @endif --}}
            @endforeach
        </ol>
    </nav>
@endunless
