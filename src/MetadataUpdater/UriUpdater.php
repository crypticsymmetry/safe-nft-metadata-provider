<?php

/*
 * This file is part of the Safe NFT Metadata Provider package.
 *
 * (c) Marco Lipparini <developer@liarco.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\MetadataUpdater;

use App\Contract\MetadataUpdaterInterface;

/**
 * @author Marco Lipparini <developer@liarco.net>
 */
final class UriUpdater implements MetadataUpdaterInterface
{
    public function updateMetadata(array &$metadata, int $tokenId, string $assetUri, string $assetUri1): void
    {
        $metadata['image'] = $assetUri;
        $metadata['animation_url'] = $assetUri1;
    }
}
