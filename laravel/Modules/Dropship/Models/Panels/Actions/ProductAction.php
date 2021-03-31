<?php

namespace Modules\Dropship\Models\Panels\Actions;

//-------- services --------
use Modules\Dropship\Models\Product;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------
class ProductAction extends XotBasePanelAction {

    public bool $onContainer = true;
    public string $icon = '<i class="fas fa-plus-circle"></i>';

    public function handle(): mixed {
        return $this->panel->view();
    }

    public function postHandle(): mixed {

        $this->published = true;

        $this->save();

        \Session::flash('message', 'Published');

        return $this->handle();
    }

}
