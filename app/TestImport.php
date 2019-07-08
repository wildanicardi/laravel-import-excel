<?php
namespace App;
use App\ExcelImport;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TestImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        return new ExcelImport([
          'orderid' =>  $row['orderid'],
           'skuid'     => $row['sku_id'],
           'popskuid'    => $row['pop_sku_id'], 
           'quantity' => $row['quantity'],
           'paytype' => $row['pay_type'],
           'booktime' => $row['booktime'],
           'totalprice' => $row['total_price'],
        ]);
    }
    public function headingRow(): int
    {
        return 2;
    }
}