<div class="flex flex-col">
    <div class="flex flex-row justify-between">
        <div class="flex flex-col">
            <h1 class='text-3xl font-bold'>Data Bandara Udara</h1>
            {{ Breadcrumbs::render('bandar-udara') }}
        </div>
        @if ($data->isNotEmpty())
            <div class="flex my-auto">
                <a class="btn btn-success" href={{ route('bandar-udara-add') }} wire:navigate>
                    <img src="{{ asset('asset/icons/add-icon.svg') }}" class="w-5" />
                    Tambah Data
                </a>
            </div>
        @endif
    </div>
    <br>
    @if (session('status'))
        <div role="alert" class="alert alert-success mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ session('status') }}</span>
        </div>
    @endif
    <div class="flex flex-col bg-white rounded-xl p-4 gap-5">
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
                    @if ($data->isNotEmpty())
                        @foreach ($data as $item)
                            <!-- data -->
                            <tr class="hover:bg-base-300" wire:key="{{ $item->id }}">
                                <td>{{ $loop->iteration + $data->perPage() * ($data->currentPage() - 1) }}</td>
                                <td>{{ $item->nama_bandara }}</td>
                                <td>{{ $item->nama_alias }}</td>
                                <td>{{ $item->kode_iata }}</td>
                                <td>{{ $item->lokasi }}</td>
                                <td>{{ $item->provinsi }}</td>
                                <td class=" w-16">
                                    <div class="tooltip" data-tip="Edit">
                                        <a href="{{ route('bandar-udara-edit', ['data' => $item->id]) }}">
                                            <img src="{{ asset('asset/icons/edit-icon.svg') }}" />
                                        </a>
                                    </div>
                                </td>
                                <td class=" w-14">
                                    <div class="tooltip" data-tip="Hapus">
                                        <a href="#modal_delete">
                                            <img src="{{ asset('asset/icons/delete-icon.svg') }}" />
                                        </a>
                                    </div>
                                    <div class="modal" role="dialog" id="modal_delete">
                                        <div class="modal-box">
                                            <h3 class="text-lg font-bold">Hapus Data</h3>
                                            <p class="py-4">Data akan terhapus dan tidak bisa dikembalikan lagi</p>
                                            <div class="modal-action">
                                                <a class="btn btn-soft btn-error"
                                                    wire:click="destroyData({{ $item->id }})">Delete</a>
                                                <a class="btn btn-soft" href="#">Tidak</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8" class="text-center text-3xl font-bold">
                                Data Kosong
                                <br>
                                <a class="btn btn-success" href={{ route('bandar-udara-add') }} wire:navigate>
                                    <img src="{{ asset('asset/icons/add-icon.svg') }}" class="w-5" />
                                    Tambah Data
                                </a>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        {{ $data->links('pagination::tailwind') }}
    </div>
</div>
