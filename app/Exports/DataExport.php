<?php

namespace App\Exports;

use Illuminate\Support\Facades\Lang;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataExport implements FromCollection, WithMapping, WithHeadings
{
    protected $rows;
    protected $heading;

    public function __construct($data)
    {
        $this->rows     = $data['rows'];
        $this->heading  = $data['heading'];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->rows;
    }

    public function map($rows): array
    {
        $data = [];
        foreach(json_decode($rows, true) as $key => $value){
            $name = $rows->table .'_'.$key;
            $data[$key] = config('statusSystem.'.$name.'.'.$value)??$value;

        }

        return $data;
        // return json_decode($rows,true);
    }

    public function headings(): array
    {
        return $this->heading;
    }
}
