<?php

declare(strict_types=1);

namespace Modules\Dropship\Models\Panels;

use Illuminate\Http\Request;
//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

class ProductPanel extends XotBasePanel {

    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Dropship\Models\Product';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
    ];

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

    public function customizedFields(String $prefix){
        return [

            (object) [
                'type' => 'Number',
                'name' => $prefix.'_price',
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'Number',
                'name' =>  $prefix.'_vat_percentable',
                'col_bs_size' => 6,
                'except'=>['index'],
            ],
            (object) [
                'type' => 'Number',
                'name' =>  $prefix.'_taxable_price',
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'Number',
                'name' =>  $prefix.'_vat_price',
                'col_bs_size' => 6,
            ]
        ];
    }

    /**
     * Get the fields displayed by the resource.
      'value'=>'..',
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'col_bs_size' => 6,
            ],(object) [
                'type' => 'String',
                'name' => 'published',
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'String',
                'name' => 'url',
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'String',
                'name' => 'title',
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'String',
                'name' => 'description',
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'String',
                'name' => 'img_url',
                'col_bs_size' => 6,
            ],
            (object)[
                'type'=>'CellPriceVat',
                'name'=>'purchaseFields',
                'fields'=>$this->customizedFields('purchase'),

            ],

            (object)[
                'type'=>'CellPriceVat',
                'name'=>'shipmentFields',
                'fields'=>$this->customizedFields('shipment'),

            ],


            (object)[
                'type'=>'CellPriceVat',
                'name'=>'sellingFields',
                'fields'=>$this->customizedFields('selling'),

            ],

            (object) [
                'type' => 'Number',
                'name' => 'total_sales_commission',
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'Number',
                'name' => 'total_revenue',
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'Number',
                'name' => 'vat_tax_autority',
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'Number',
                'name' => 'personal_income_tax',
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'Number',
                'name' => 'net_income',
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'shareholders_number',
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'Number',
                'name' => 'dividend',
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'stock',
                'col_bs_size' => 6,
            ],
        ];
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
        return [
            /*new Actions\ContainerAction(),*/
            new Actions\ItemAction(),
        ];
    }

}
