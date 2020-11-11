<?php

declare(strict_types=1);

namespace PoPSitesWassup\PostMutations\MutationResolvers;

class CreatePostMutationResolverBridge extends AbstractCreateUpdatePostMutationResolverBridge
{
    public function getMutationResolverClass(): string
    {
        return CreatePostMutationResolver::class;
    }
}
