<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
//----- models -----
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateProductsTable extends XotBaseMigration {
    public function up() {
        //-- CREATE --
        if (! $this->tableExists()) {
            $this->getConn()->create($this->getTable(), function (Blueprint $table) {
                $table->increments('id');
                $table->string('url')->default('');
                $table->string('title')->default('');
                $table->string('description')->default('');
                $table->string('img_url')->default('');

                $table->decimal('purchase_price', 10, 3)->default(0);
                $table->decimal('purchase_vat_percentable', 10, 3)->default(0);
                $table->decimal('purchase_taxable_price', 10, 3)->default(0);
                $table->decimal('purchase_vat_price', 10, 3)->default(0);

                $table->decimal('shipment_price', 10, 3)->default(0);
                $table->decimal('shipment_vat_percentable', 10, 3)->default(0);
                $table->decimal('shipment_taxable_price', 10, 3)->default(0);
                $table->decimal('shipment_vat_price', 10, 3)->default(0);

                $table->decimal('selling_price', 10, 3)->default(0);
                $table->decimal('selling_vat_percentable', 10, 3)->default(0);
                $table->decimal('selling_taxable_price', 10, 3)->default(0);
                $table->decimal('selling_vat_price', 10, 3)->default(0);

                $table->decimal('total_sales_commission', 10, 3)->default(0);

                $table->decimal('total_revenue', 10, 3)->default(0);
                $table->decimal('vat_tax_autority', 10, 3)->default(0);
                $table->decimal('personal_income_tax', 10, 3)->default(0);
                $table->decimal('net_income', 10, 3)->default(0);

                $table->integer('shareholders_number')->default(2);

                $table->decimal('dividend', 10, 3)->default(0);

                $table->boolean('published')->default(false);

                $table->integer('quantity_sold')->default(2);
                $table->boolean('sold')->default(false);

                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->timestamps();
            });

            //-- UPDATE --
            /*$this->getConn()->table($this->getTable(), function (Blueprint $table) {
                if ($this->hasColumn('product_id')) {
                    $table->renameColumn('product_id', 'id');
                }
            });*/
        }
    }
}
