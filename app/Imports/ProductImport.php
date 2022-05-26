<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class ProductImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'product_name' => $row['product_name'],
            'price' => $row['price'], 
            'buy' => $row['buy'], 
            'quantity' => $row['quantity'], 
            'section_id' => $row['section_id'], 
            'alert_stock' => $row['alert_stock'], 
            
            
             
            
        ]);
    }
}
