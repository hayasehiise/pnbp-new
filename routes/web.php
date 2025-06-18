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
use App\Livewire\MasterData\DataTotalPenerbangan\Add as DataSumPenerbanganCreate;
use App\Livewire\MasterData\DataTotalPenerbangan\Index as DataSumPenerbanganIndex;
use App\Livewire\MasterData\DataTotalPenerbangan\Edit as DataSumPenerbanganEdit;
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

Route::get('/master-data/data-sum-penerbangan', DataSumPenerbanganIndex::class);
Route::get('/master-data/data-sum-penerbangan/add', DataSumPenerbanganCreate::class);
Route::get('/master-data/data-sum-penerbangan/edit', DataSumPenerbanganEdit::class);

Route::get('/master-data/data-rute', DataRuteIndex::class);
Route::get('/master-data/data-rute/add', DataRuteCreate::class);
Route::get('/master-data/data-rute/edit', DataRuteEdit::class);

