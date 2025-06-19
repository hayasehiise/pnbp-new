<div class="flex flex-col">
    <h1 class=''>Master Data -> Bandara Udara Main Page</h1>
    @if (session('status'))
        <div role="alert" class="alert alert-success">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ session('status') }}</span>
        </div>
    @endif
    <div class="overflow-x-auto">
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th></th>
                    <th>Nama Bandara</th>
                    <th>Nama Alias</th>
                    <th>Kode IATA</th>
                    <th>Lokasi</th>
                    <th>Provinsi</th>
                    <th colspan="2" class=" text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <!-- data -->
                    <tr class="hover:bg-base-300">
                        <th>{{ $item->id }}</th>
                        <td>{{ $item->nama_bandara }}</td>
                        <td>{{ $item->nama_alias }}</td>
                        <td>{{ $item->kode_iata }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->provinsi }}</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $data->links('pagination::tailwind') }}
</div>
