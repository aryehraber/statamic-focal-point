<?php

namespace Statamic\Addons\FocalPoint;

use Statamic\API\Asset;
use Statamic\Extend\Tags;

class FocalPointTags extends Tags
{
    /**
     * Handle {{ focal_point:[name] }} tags
     *
     * @return string
     */
    public function __call($name, $args)
    {
        return $this->output($name);
    }

    /**
     * The {{ focal_point }} tag
     *
     * @return string
     */
    public function index()
    {
        return $this->output('id');
    }

    /**
     * Return the focus point for use with CSS `background-position`
     *
     * @param string $assetId
     *
     * @return string
     */
    private function output($assetId)
    {
        if ($asset = Asset::find(array_get($this->context, $assetId))) {
            $focus = explode('-', $asset->get('focus', '50-50'));

            return "$focus[0]% $focus[1]%";
        }
    }
}
