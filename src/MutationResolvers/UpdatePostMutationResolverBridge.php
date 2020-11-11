<?php

declare(strict_types=1);

namespace PoPSitesWassup\PostMutations\MutationResolvers;

class UpdatePostMutationResolverBridge extends AbstractCreateUpdatePostMutationResolverBridge
{
    public function getMutationResolverClass(): string
    {
        return UpdatePostMutationResolver::class;
    }
}
