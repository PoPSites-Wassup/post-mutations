<?php

declare(strict_types=1);

namespace PoPSitesWassup\PostMutations\MutationResolvers;

class UpdatePostMutationResolverBridge extends AbstractCreateUpdatePostMutationResolverBridge
{
    use CreateUpdatePostMutationResolverBridgeTrait;

    public function getMutationResolverClass(): string
    {
        return UpdatePostMutationResolver::class;
    }

    protected function isUpdate(): bool
    {
        return true;
    }
}
