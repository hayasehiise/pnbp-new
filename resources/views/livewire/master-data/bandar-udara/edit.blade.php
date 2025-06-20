<div class="flex flex-col">
    <h1 class=' text-3xl font-bold'>Edit Bandara Udara</h1>
    {{ Breadcrumbs::render('bandar-udara-edit') }}
    <br>
    <div class="flex flex-col bg-white rounded-xl">
        <div class="flex flex-row p-5">
            <h2 class="text-xl font-semibold">Edit Data Bandara Udara</h2>
        </div>
        <hr />
        <form wire:submit="update">
            <div class="flex flex-col p-5 gap-2.5">
                <label class="input w-[30em]">
                    <span class="label text-black">Nama Bandara</span>
                    <input type="text" wire:model.change="form.nama_bandara" placeholder="Masukan Nama Bandara" />
                </label>
                <label class="input w-[24em]">
                    <span class="label text-black">Nama Alias</span>
                    <input type="text" wire:model="form.nama_alias" placeholder="Masukan Nama Alias" />
                </label>
                <label class="input w-[24em]">
                    <span class="label text-black">Kode IATA</span>
                    <input type="text" wire:model="form.kode_iata" placeholder="Masukan Kode IATA" />
                </label>
                <label class="input w-[30em]">
                    <span class="label text-black">Lokasi</span>
                    <input type="text" wire:model="form.lokasi" placeholder="Masukan Lokasi Bandara" />
                </label>
                <label class="input w-[30em]">
                    <span class="label text-black">Provinsi</span>
                    <input type="text" wire:model="form.provinsi" placeholder="Masukan Provinsi Bandara" />
                </label>
            </div>
            <hr />
            <div class="flex flex-row p-5 gap-2.5">
                <button class="btn btn-success" type="submit"><img src="{{ asset('asset/icons/save-icon.svg') }}"
                        class="w-4" />
                    Save
                </button>
                <a href='{{ route('bandar-udara-index') }}' class="btn btn-soft" wire:navigate>
                    <img src="{{ asset('asset/icons/back-arrow.svg') }}" class="w-6" />
                    Back
                </a>
            </div>
        </form>
    </div>
</div>
