<?php

namespace App\Imports;

use App\Models\Material;
use Maatwebsite\Excel\Concerns\ToModel;

class MaterialImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Material([
            'kode_material' => $row[0],
            'nama_material' => $row[1],
            'satuan' => $row[2],
            'harga_satuan' => $row[3]
        ]);
    }
}
