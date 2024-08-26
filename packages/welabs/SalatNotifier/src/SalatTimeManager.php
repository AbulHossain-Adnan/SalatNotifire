<?php 

namespace welabs\SalatNotifier;

use App\Models\SalatTime;
use Illuminate\Support\Facades\DB;
use welabs\SalatNotifier\Contracts\SalatTimeInterface;

class SalatTimeManager implements SalatTimeInterface
{
    public function getAllSalatTimes()
    {
        return SalatTime::all();
    }

    public function getSalatTimeById($id)
    {
        return SalatTime::findOrFail($id);
    }

    public function createSalatTime(array $data)
    {
        return SalatTime::create($data);
    }

    public function updateSalatTime($id, array $data)
    {
        $salatTime = SalatTime::findOrFail($id);
        $salatTime->update($data);
        return $salatTime;
    }

    public function deleteSalatTime($id)
    {
        $salatTime = SalatTime::findOrFail($id);
        $salatTime->delete();
    }
}
