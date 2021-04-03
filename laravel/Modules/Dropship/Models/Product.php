<?php

namespace Modules\Dropship\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends BaseModelLang {

    /**
     * @var string[]
     */
    protected $fillable = ['id', 'url', 'title', 'description', 'img_url',
        'purchase_price', 'purchase_vat_percentable', 'purchase_taxable_price', 'purchase_vat_price',
        'shipment_price', 'shipment_vat_percentable', 'shipment_taxable_price', 'shipment_vat_price',
        'selling_price', 'selling_vat_percentable', 'selling_taxable_price', 'selling_vat_price',
        'total_sales_commission', 'total_revenue', 'vat_tax_autority', 'personal_income_tax', 'net_income',
        'shareholders_number', 'dividend','published'];
    protected $appends = ['stock'];

    public function getStockAttribute() {
        //qua va fatto il parsing dell'url
        return 999;
    }


}
