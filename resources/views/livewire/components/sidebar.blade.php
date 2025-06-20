<div>
    <ul class="menu bg-primary text-white w-56 h-dvh">
        <li><a href="{{ route('dashboard') }}" class="{{ $currentActive->is('/') ? 'menu-active' : '' }}"
                wire:navigate>Dashboard</a></li>
        <li>
            <details {{ $currentActive->is('master-data*') ? 'open' : '' }}>
                <summary>Master Data</summary>
                <ul>
                    <li><a href="{{ route('bandar-udara.index') }}"
                            class="{{ $currentActive->is('master-data/bandar-udara*') ? 'menu-active' : '' }}"
                            wire:navigate>
                            Bandara Udara
                        </a>
                    </li>
                    <li><a href="{{ route('operator-penerbangan.index') }}"
                            class="{{ $currentActive->is('master-data/operator-penerbangan*') ? 'menu-active' : '' }}"
                            wire:navigate>
                            Operator Penerbangan
                        </a>
                    </li>
                    <li><a href="{{ route('data-no-penerbangan.index') }}"
                            class="{{ $currentActive->is('master-data/data-no-penerbangan*') ? 'menu-active' : '' }}"
                            wire:navigate>
                            Data No. Penerbangan
                        </a>
                    </li>
                    <li><a href="{{ route('data-rute.index') }}"
                            class="{{ $currentActive->is('master-data/data-rute*') ? 'menu-active' : '' }}"
                            wire:navigate>
                            Data Rute
                        </a>
                    </li>
                    <li><a href="{{ route('data-aircraft-type.index') }}"
                            class="{{ $currentActive->is('master-data/data-aircraft-type*') ? 'menu-active' : '' }}"
                            wire:navigate>
                            Data Tipe Aircraft
                        </a>
                    </li>
                    <li><a href="{{ route('data-registric-mark.index') }}"
                            class="{{ $currentActive->is('master-data/data-registic-mark*') ? 'menu-active' : '' }}"
                            wire:navigate>
                            Data Registic Mark
                        </a>
                    </li>
                    <li><a href="{{ route('data-tarif.index') }}"
                            class="{{ $currentActive->is('master-data/data-tarif*') ? 'menu-active' : '' }}"
                            wire:navigate>
                            Data Tarif
                        </a>
                    </li>
                    <li><a href="{{ route('data-tenant.index') }}"
                            class="{{ $currentActive->is('master-data/data-tenant*') ? 'menu-active' : '' }}"
                            wire:navigate>
                            Data Tenant
                        </a>
                    </li>
                    <li><a href="{{ route('data-jenis-ruangan.index') }}"
                            class="{{ $currentActive->is('master-data/data-jenis-ruangan*') ? 'menu-active' : '' }}"
                            wire:navigate>
                            Data Jenis Ruangan
                        </a>
                    </li>
                </ul>
            </details>
        </li>
        <li><a>Link</a></li>
    </ul>
</div>
