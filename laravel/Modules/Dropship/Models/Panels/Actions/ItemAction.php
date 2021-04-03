<?php

namespace Modules\Dropship\Models\Panels\Actions;

//-------- services --------
use Modules\Dropship\Models\Product;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------
class ItemAction extends XotBasePanelAction {

    public bool $onItem = true;
    public string $icon = '<i class="fas fa-upload"></i>';

    public function handle() {
        $this->row->published=true;
        $this->row->save();
        return redirect()->back();

    }



}
