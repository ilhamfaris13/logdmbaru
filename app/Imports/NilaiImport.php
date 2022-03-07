<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use App\Models\Nilai;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
class NilaiImport implements ToModel, WithHeadingRow,SkipsOnError,WithCalculatedFormulas
{
    /**
    * @param Collection $collection
    */
	use Importable, SkipsErrors;	
   public function model(array $row)
    {
	 
        return new Nilai([
			'nama' => $row['nama'],
            'nim' => $row['nim'],
            'atitude' => $row['atitude'],
            'longcase' => $row['longcase'], 
            'jurnal' => $row['jurnal'], 
            'minicex' => $row['minicex'],
            'derajat' => $row['derajat'],
            'pengabdian' => $row['pengabdian'],
            'prettest' => $row['prettest'],
            'posttest' => $row['posttest'],
            'osce' => $row['osce'],
            'id_dm' => 0,
			'nilai_akhir' =>(($row['atitude'] * 100/100) + ($row['longcase'] * 100/100)+($row['jurnal'] * 100/100)+($row['minicex'] * 100/100)+($row['derajat'] * 100/100)+($row['pengabdian'] * 100/100)+($row['prettest'] * 100/100)+($row['posttest'] * 100/100)+($row['osce'] * 100/100))/9,
        ]);
		
    }
	/* public function rules(): array
	{
		return [
			'nim' => 'unique:nilai,nim',
			//'nim' => Rule::unique('nilai', 'nim'), // Table name, field in your db
			
		];
	}

	public function customValidationMessages()
	{
		return [
			'nim.unique' => 'Custom message',
		];
	} */
}
