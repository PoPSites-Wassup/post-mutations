<?php

declare(strict_types=1);

namespace PoPSitesWassup\PostMutations\MutationResolvers;

use PoPSchema\PostMutations\MutationResolvers\CreatePostMutationResolverTrait;

class CreatePostMutationResolver extends AbstractCreateUpdatePostMutationResolver
{
    use CreatePostMutationResolverTrait;
}
