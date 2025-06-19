<div>
    <ul class="menu bg-primary text-white w-56 h-dvh">
        <li><a href="/" class="{{ $currentActive->is('/') ? 'menu-active' : '' }}">Dashboard</a></li>
        <li>
            <details {{ $currentActive->is('master-data*') ? 'open' : '' }}>
                <summary>Master Data</summary>
                <ul>
                    <li><a href="/master-data/bandar-udara"
                            class="{{ $currentActive->is('master-data/bandar-udara') ? 'menu-active' : '' }}">Bandara
                            Udara</a>
                    </li>
                    <li><a href="/master-data/operator-penerbangan"
                            class="{{ $currentActive->is('master-data/operator-penerbangan') ? 'menu-active' : '' }}">Operator
                            Penerbangan</a></li>
                    <li><a href="/master-data/data-no-penerbangan"
                            class="{{ $currentActive->is('master-data/data-no-penerbangan') ? 'menu-active' : '' }}">Data
                            No. Penerbangan</a></li>
                    <li><a href="/master-data/data-rute"
                            class="{{ $currentActive->is('master-data/data-rute') ? 'menu-active' : '' }}">Data Rute</a>
                    </li>
                    {{-- <li>
                        <details>
                            <summary>Parent</summary>
                            <ul>
                                <li><a>Submenu 1</a></li>
                                <li><a>Submenu 2</a></li>
                            </ul>
                        </details>
                    </li> --}}
                </ul>
            </details>
        </li>
        <li><a>Link</a></li>
    </ul>
</div>
