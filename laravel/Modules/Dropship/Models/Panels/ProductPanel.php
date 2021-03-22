<?php

namespace Modules\Dropship\Models\Panels;

use Illuminate\Http\Request;
//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

class ProductPanel extends XotBasePanel {

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static string $model = 'Modules\Dropship\Models\Product';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static string $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = array(
    );

    /**
     * The relationships that should be eager loaded on index queries.
     *
     * @var array
     */
    public function with(): array {
        return [];
    }

    public function search(): array {

        return [];
    }

    /**
     * on select the option id.
     */
    public function optionId(object $row) {
        return $row->area_id;
    }

    /**
     * on select the option label.
     */
    public function optionLabel(object $row): string {
        return $row->area_define_name;
    }

    /**
     * index navigation.
     */
    public function indexNav() {
        return [];
    }

    /**
     * Build an "index" query for the given resource.
     *
     * @param Request                               $request
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function indexQuery($data, $query) {
        //return $query->where('auth_user_id', $request->user()->auth_user_id);
        return $query;
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
      'col_bs_size' => 6,
      'sortable' => 1,
      'rules' => 'required',
      'rules_messages' => ['it'=>['required'=>'Nome Obbligatorio']],
      'value'=>'..',
     */
    public function fields(): array {
        return array(
            0 =>
            (object) array(
                'type' => 'Text',
                'name' => 'url'
            ),
            1 =>
            (object) array(
                'type' => 'Text',
                'name' => 'title',
                'placeholder' => ''
            ),
            2 =>
            (object) array(
                'type' => 'Text',
                'name' => 'description'
            ),
            3 =>
            (object) array(
                'type' => 'Text',
                'name' => 'img_url'
            ),
            4 =>
            (object) array(
                'type' => 'Number',
                'name' => 'purchase_price'
            ),
            5 =>
            (object) array(
                'type' => 'Number',
                'name' => 'purchase_vat_percentable'
            ),
            6 =>
            (object) array(
                'type' => 'Number',
                'name' => 'purchase_taxable_price'
            ),
            7 =>
            (object) array(
                'type' => 'Number',
                'name' => 'purchase_vat_price'
            ),
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
        );
    }

    /**
     * Get the tabs available.
     *
     * @return array
     */
    public function tabs() {
        $tabs_name = [];

        return $tabs_name;
    }

    /**
     * Get the cards available for the request.
     *
     * @return array
     */
    public function cards(Request $request) {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function filters(Request $request = null) {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @return array
     */
    public function lenses(Request $request) {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions() {
        return [];
    }

}
