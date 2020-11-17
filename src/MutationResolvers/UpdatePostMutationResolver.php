<?php

declare(strict_types=1);

namespace PoPSitesWassup\PostMutations\MutationResolvers;

use PoPSchema\PostMutations\MutationResolvers\UpdatePostMutationResolverTrait;

class UpdatePostMutationResolver extends AbstractCreateUpdatePostMutationResolver
{
    use UpdatePostMutationResolverTrait;
}
