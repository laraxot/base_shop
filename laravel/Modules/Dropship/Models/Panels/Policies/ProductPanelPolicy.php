<?php
namespace Modules\Dropship\Models\Panels\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\LU\Models\User as User;
use Modules\Dropship\Models\Panels\Policies\ProductPanelPolicy as Panel;

use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

class ProductPanelPolicy extends XotBasePanelPolicy {
}
