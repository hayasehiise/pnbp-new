<?php

namespace App\Livewire\MasterData\BandarUdara;

use App\Models\BandarUdara;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function destroyData($dataId){
        $deleteData = BandarUdara::find($dataId);

        if($deleteData){
            $deleteData->delete();
        }

        session()->flash('status', 'Data Berhasil Dihapus');

        return $this->redirect(route('bandar-udara.index'), navigate: true);
    }
    public function render()
    {
        $bandaraUdaraData = BandarUdara::latest()->paginate(5);
        return view('livewire.master-data.bandar-udara.index', [
            'data' => $bandaraUdaraData,
        ]);
    }
}
