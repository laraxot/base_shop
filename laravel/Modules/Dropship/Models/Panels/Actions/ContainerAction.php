<?php

namespace Modules\Dropship\Models\Panels\Actions;

//-------- services --------
use Modules\Dropship\Models\Product;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------
class ContainerAction extends XotBasePanelAction {

    public bool $onContainer = true;
    public string $icon = '<i class="fas fa-plus-circle"></i>';

    public function handle() {
        return '1';
    }



}
