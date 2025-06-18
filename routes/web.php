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

Route::get('/', Homepage::class);

Route::get('/master-data/bandar-udara', BandarUdaraIndex::class);
Route::get('/master-data/bandar-udara/add', BandarUdaraCreate::class);
Route::get('/master-data/bandar-udara/edit', BandarUdaraEdit::class);

Route::get('/master-data/operator-penerbangan', OperatorPenerbanganIndex::class);
Route::get('/master-data/operator-penerbangan/add', OperatorPenerbanganCreate::class);
Route::get('/master-data/operator-penerbangan/edit', OperatorPenerbanganEdit::class);

Route::get('/master-data/data-no-penerbangan', DataNoPenerbanganIndex::class);
Route::get('/master-data/data-no-penerbangan/add', DataNoPenerbanganCreate::class);
Route::get('/master-data/data-no-penerbangan/edit', DataNoPenerbanganEdit::class);

Route::get('/master-data/data-rute', DataRuteIndex::class);
Route::get('/master-data/data-rute/add', DataRuteCreate::class);
Route::get('/master-data/data-rute/edit', DataRuteEdit::class);

