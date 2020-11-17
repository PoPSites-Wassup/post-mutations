<?php

declare(strict_types=1);

namespace PoPSitesWassup\PostMutations\MutationResolvers;

trait CreateUpdatePostMutationResolverBridgeTrait
{
    protected function showCategories()
    {
        return !empty(\PoP_Application_Utils::getContentpostsectionCats());
    }
}
