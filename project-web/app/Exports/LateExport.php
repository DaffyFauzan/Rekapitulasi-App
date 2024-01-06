<?php

namespace App\Exports;

use App\Models\Lates;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LateExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        $lates = Lates::with('student.rombelid', 'student.rayonid')->get();

        $result = $lates->groupBy('student.id')->map(function ($lateGroup) {
            $late = $lateGroup->first();
            return [
                'NIS' => $late->student->nis,
                'Nama' => $late->student->name,
                'Rombel' => $late->student->rombelid->rombel,
                'Rayon' => $late->student->rayonid->rayon,
                'Total Keterlambatan' => $lateGroup->count()
            ];
        });

        return $result->values();
    }

    public function headings(): array
    {
        return [
            'NIS',
            'Nama',
            'Rombel',
            'Rayon',
            'Total Keterlambatan',
        ];
    }

}
