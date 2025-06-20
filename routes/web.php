<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use App\Livewire\Homepage;
use App\Livewire\MasterData\BandarUdara\Add as BandarUdaraCreate;
use App\Livewire\MasterData\BandarUdara\Edit as BandarUdaraEdit;
use App\Livewire\MasterData\BandarUdara\Index as BandarUdaraIndex;
use App\Livewire\MasterData\OperatorPenerbangan\Index as OperatorPenerbanganIndex;
use App\Livewire\MasterData\OperatorPenerbangan\Edit as OperatorPenerbanganEdit;
use App\Livewire\MasterData\OperatorPenerbangan\Add as OperatorPenerbanganCreate;
use App\Livewire\MasterData\DataNoPenerbangan\Index as DataNoPenerbanganIndex;
use App\Livewire\MasterData\DataNoPenerbangan\Add as DataNoPenerbanganCreate;
use App\Livewire\MasterData\DataNoPenerbangan\Edit as DataNoPenerbanganEdit;
use App\Livewire\MasterData\DataRute\Index as DataRuteIndex;
use App\Livewire\MasterData\DataRute\Add as DataRuteCreate;
use App\Livewire\MasterData\DataRute\Edit as DataRuteEdit;
use App\Livewire\MasterData\DataAircraftType\Add as DataAircraftTypeCreate;
use App\Livewire\MasterData\DataAircraftType\Edit as DataAircraftTypeEdit;
use App\Livewire\MasterData\DataAircraftType\Index as DataAircraftTypeIndex;
use App\Livewire\MasterData\DataRegisticMark\Index as DataRegisticMarkIndex;
use App\Livewire\MasterData\DataRegisticMark\Add as DataRegisticMarkCreate;
use App\Livewire\MasterData\DataRegisticMark\Edit as DataRegisticMarkEdit;
use App\Livewire\MasterData\DataTarif\Index as DataTarifIndex;
use App\Livewire\MasterData\DataTarif\Add as DataTarifCreate;
use App\Livewire\MasterData\DataTarif\Edit as DataTarifEdit;
use App\Livewire\MasterData\DataTenant\Index as DataTenantIndex;
use App\Livewire\MasterData\DataTenant\Add as DataTenantCreate;
use App\Livewire\MasterData\DataTenant\Edit as DataTenantEdit;
use App\Livewire\MasterData\DataJenisRuangan\Index as DataJenisRuanganIndex;
use App\Livewire\MasterData\DataJenisRuangan\Add as DataJenisRuanganCreate;
use App\Livewire\MasterData\DataJenisRuangan\Edit as DataJenisRuanganEdit;

Route::get('/', Homepage::class);

Route::get('/master-data/bandar-udara', BandarUdaraIndex::class)->name('bandar-udara-index');
Route::get('/master-data/bandar-udara/add', BandarUdaraCreate::class)->name('bandar-udara-add');
Route::get('/master-data/bandar-udara/edit/{data?}', BandarUdaraEdit::class)->name('bandar-udara-edit');

Route::get('/master-data/operator-penerbangan', OperatorPenerbanganIndex::class);
Route::get('/master-data/operator-penerbangan/add', OperatorPenerbanganCreate::class);
Route::get('/master-data/operator-penerbangan/edit', OperatorPenerbanganEdit::class);

Route::get('/master-data/data-no-penerbangan', DataNoPenerbanganIndex::class);
Route::get('/master-data/data-no-penerbangan/add', DataNoPenerbanganCreate::class);
Route::get('/master-data/data-no-penerbangan/edit', DataNoPenerbanganEdit::class);

Route::get('/master-data/data-rute', DataRuteIndex::class);
Route::get('/master-data/data-rute/add', DataRuteCreate::class);
Route::get('/master-data/data-rute/edit', DataRuteEdit::class);

Route::get('/master-data/data-aircraft-type', DataAircraftTypeIndex::class);
Route::get('/master-data/data-aircraft-type/edit', DataAircraftTypeEdit::class);
Route::get('/master-data/data-aircraft-type/add', DataAircraftTypeCreate::class);

Route::get('/master-data/data-registic-mark', DataRegisticMarkIndex::class);
Route::get('/master-data/data-registic-mark/edit', DataRegisticMarkEdit::class);
Route::get('/master-data/data-registic-mark/add', DataRegisticMarkCreate::class);

Route::get('/master-data/data-tarif', DataTarifIndex::class);
Route::get('/master-data/data-tarif/edit', DataTarifEdit::class);
Route::get('/master-data/data-tarif/add', DataTarifCreate::class);

Route::get('/master-data/data-tenant', DataTenantIndex::class);
Route::get('/master-data/data-tenant/edit', DataTenantEdit::class);
Route::get('/master-data/data-tenant/add', DataTenantCreate::class);

Route::get('/master-data/data-jenis-ruangan', DataJenisRuanganIndex::class);
Route::get('/master-data/data-jenis-ruangan/edit', DataJenisRuanganEdit::class);
Route::get('/master-data/data-jenis-ruangan/add', DataJenisRuanganCreate::class);
