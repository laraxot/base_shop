<?php

namespace Modules\Dropship\Models\Panels\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\LU\Models\User as User;
use Modules\Dropship\Models\Panels\Policies\ProductPanelPolicy as Panel;
use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;


use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

class ProductPanelPolicy extends XotBasePanelPolicy
{

    public function Container(UserContract $user, PanelContract $panel)
    {
        return true;
    }
    public function Publish(UserContract $user, PanelContract $panel)
    {
        return true;
    }
    public function Sell(UserContract $user, PanelContract $panel)
    {
        return true;
    }
}
