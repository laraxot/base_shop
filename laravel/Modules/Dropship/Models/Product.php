<?php

namespace Modules\Dropship\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends BaseModelLang {

    /**
     * @var string[]
     */
    protected $fillable = ['id', 'url', 'titolo', 'descrizione', 'img_url',
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

    /*
      $table->string('url')->default('');
      $table->string('titolo')->default('');
      $table->string('descrizione')->default('');
      $table->string('img_url')->default('');

      $table->decimal('purchase_price', $precision = 16, $scale = 8)->default(0);
      $table->decimal('purchase_vat_percentable', $precision = 16, $scale = 8)->default(0);
      $table->decimal('purchase_taxable_price', $precision = 16, $scale = 8)->default(0);
      $table->decimal('purchase_vat_price', $precision = 16, $scale = 8)->default(0);

      $table->decimal('shipment_price', $precision = 16, $scale = 8)->default(0);
      $table->decimal('shipment_vat_percentable', $precision = 16, $scale = 8)->default(0);
      $table->decimal('shipment_taxable_price', $precision = 16, $scale = 8)->default(0);
      $table->decimal('shipment_vat_price', $precision = 16, $scale = 8)->default(0);

      $table->decimal('selling_price', $precision = 16, $scale = 8)->default(0);
      $table->decimal('selling_vat_percentable', $precision = 16, $scale = 8)->default(0);
      $table->decimal('selling_taxable_price', $precision = 16, $scale = 8)->default(0);
      $table->decimal('selling_vat_price', $precision = 16, $scale = 8)->default(0);

      $table->decimal('total_sales_commission', $precision = 16, $scale = 8)->default(0);

      $table->decimal('total_revenue', $precision = 16, $scale = 8)->default(0);
      $table->decimal('vat_tax_autority', $precision = 16, $scale = 8)->default(0);
      $table->decimal('personal_income_tax', $precision = 16, $scale = 8)->default(0);
      $table->decimal('net_income', $precision = 16, $scale = 8)->default(0);

      $table->integer('shareholders_number')->default(2);

      $table->decimal('dividend', $precision = 16, $scale = 8)->default(0); */
}
