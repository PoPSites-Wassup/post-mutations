<?php

declare(strict_types=1);

namespace PoPSitesWassup\PostMutations\MutationResolvers;

use PoPSchema\PostMutations\MutationResolvers\CreatePostMutationResolverTrait;
use PoPSchema\PostMutations\MutationResolvers\CreateUpdatePostMutationResolverTrait;

class CreatePostMutationResolver extends AbstractCreateUpdatePostMutationResolver
{
    use CreateUpdatePostMutationResolverTrait, CreatePostMutationResolverTrait;
}
