<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Xot\Database\Migrations\XotBaseMigration;


//----- models -----
use Modules\Dropship\Models\Product as MyModel;

class CreateProductsTable extends Migration {

    public function getTable() {
        return with(new MyModel())->getTable();
    }

    public function up() {
        if (!Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('product_id');

                $table->string('url')->default('');
                $table->string('title')->default('');
                $table->string('description')->default('');
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

                $table->decimal('dividend', $precision = 16, $scale = 8)->default(0);

                $table->boolean('published')->default(false);

                $table->integer('quantity_sold')->default(2);
                $table->boolean('sold')->default(false);

                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->timestamps();
            });

            //----- UPDATE
            Schema::table($this->getTable(), function (Blueprint $table) {
                if (Schema::hasColumn($this->getTable(), 'post_id')) {
                    $table->renameColumn('product_id', 'id');
                }
            });
        }
    }

    public function down() {
        Schema::dropIfExists($this->getTable());
    }

}
