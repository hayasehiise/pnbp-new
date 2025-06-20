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

Route::get('/', Homepage::class)->name('dashboard');

Route::get('/master-data/bandar-udara', BandarUdaraIndex::class)->name('bandar-udara.index');
Route::get('/master-data/bandar-udara/add', BandarUdaraCreate::class)->name('bandar-udara.add');
Route::get('/master-data/bandar-udara/edit/{data?}', BandarUdaraEdit::class)->name('bandar-udara.edit');

Route::get('/master-data/operator-penerbangan', OperatorPenerbanganIndex::class)->name('operator-penerbangan.index');
Route::get('/master-data/operator-penerbangan/add', OperatorPenerbanganCreate::class)->name('operator-penerbangan.add');
Route::get('/master-data/operator-penerbangan/edit/{data?}', OperatorPenerbanganEdit::class)->name('operator-penerbangan.edit');

Route::get('/master-data/data-no-penerbangan', DataNoPenerbanganIndex::class)->name('data-no-penerbangan.index');
Route::get('/master-data/data-no-penerbangan/add', DataNoPenerbanganCreate::class)->name('data-no-penerbangan.add');
Route::get('/master-data/data-no-penerbangan/edit/{data?}', DataNoPenerbanganEdit::class)->name('data-no-penerbangan.edit');

Route::get('/master-data/data-rute', DataRuteIndex::class)->name('data-rute.index');
Route::get('/master-data/data-rute/add', DataRuteCreate::class)->name('data-rute.add');
Route::get('/master-data/data-rute/edit/{data?}', DataRuteEdit::class)->name('data-rute.edit');

Route::get('/master-data/data-aircraft-type', DataAircraftTypeIndex::class)->name('data-aircraft-type.index');
Route::get('/master-data/data-aircraft-type/edit/{data?}', DataAircraftTypeEdit::class)->name('data-aircraft-type.edit');
Route::get('/master-data/data-aircraft-type/add', DataAircraftTypeCreate::class)->name('data-aircraft-type.add');

Route::get('/master-data/data-registic-mark', DataRegisticMarkIndex::class)->name('data-registric-mark.index');
Route::get('/master-data/data-registic-mark/edit/{data?}', DataRegisticMarkEdit::class)->name('data-registric-mark.edit');
Route::get('/master-data/data-registic-mark/add', DataRegisticMarkCreate::class)->name('data-registric-mark.add');

Route::get('/master-data/data-tarif', DataTarifIndex::class)->name('data-tarif.index');
Route::get('/master-data/data-tarif/edit/{data?)', DataTarifEdit::class)->name('data-tarif.edit');
Route::get('/master-data/data-tarif/add', DataTarifCreate::class)->name('data-tarif.add');

Route::get('/master-data/data-tenant', DataTenantIndex::class)->name('data-tenant.index');
Route::get('/master-data/data-tenant/edit/{data?}', DataTenantEdit::class)->name('data-tenant.edit');
Route::get('/master-data/data-tenant/add', DataTenantCreate::class)->name('data-tenant.add');

Route::get('/master-data/data-jenis-ruangan', DataJenisRuanganIndex::class)->name('data-jenis-ruangan.index');
Route::get('/master-data/data-jenis-ruangan/edit/{data?}', DataJenisRuanganEdit::class)->name('data-jenis-ruangan.edit');
Route::get('/master-data/data-jenis-ruangan/add', DataJenisRuanganCreate::class)->name('data-jenis-ruangan.add');
