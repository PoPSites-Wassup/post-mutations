<?php

declare(strict_types=1);

namespace PoPSitesWassup\PostMutations\MutationResolvers;

class CreatePostMutationResolverBridge extends AbstractCreateUpdatePostMutationResolverBridge
{
    use CreateUpdatePostMutationResolverBridgeTrait;

    public function getMutationResolverClass(): string
    {
        return CreatePostMutationResolver::class;
    }

    protected function isUpdate(): bool
    {
        return false;
    }
}
