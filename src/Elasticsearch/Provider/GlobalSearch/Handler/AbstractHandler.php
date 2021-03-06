<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

namespace Sugarcrm\Sugarcrm\Elasticsearch\Provider\GlobalSearch\Handler;

use Sugarcrm\Sugarcrm\Elasticsearch\Provider\GlobalSearch\GlobalSearch;

/**
 *
 * Abstract Handler
 *
 */
abstract class AbstractHandler implements HandlerInterface
{
    /**
     * @var GlobalSearch
     */
    protected $provider;

    /**
     * {@inheritdoc}
     */
    public function setProvider(GlobalSearch $provider)
    {
        $this->provider = $provider;
    }
}
