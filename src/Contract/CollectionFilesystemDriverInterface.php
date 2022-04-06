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

namespace App\Contract;

use Symfony\Component\HttpFoundation\Response;

/**
 * @author Marco Lipparini <developer@liarco.net>
 */
interface CollectionFilesystemDriverInterface
{
    /**
     * @var string
     */
    final public const METADATA_PATH = '/metadata';

    /**
     * @var string
     */
    final public const GLB_ASSETS_PATH = '/assets/3dfiles/';

    /**
     * @var string
     */
    final public const IMG_ASSETS_PATH = '/assets/Images/';

    /**
     * @var string
     */
    final public const HIDDEN_METADATA_PATH = '/hidden/hidden.json';

    /**
     * @var string
     */
    final public const HIDDEN_ASSET_PATH = '/hidden/hidden.';

    /**
     * @var string
     */
    final public const ABI_PATH = '/abi.json';

    /**
     * @var string
     */
    final public const MAPPING_PATH = '/mapping.json';

    /**
     * @var string
     */
    final public const EXPORTED_METADATA_PATH = '/exported/metadata';

    /**
     * @var string
     */
    final public const EXPORTED_ASSETS_PATH = '/exported/assets';

    /**
     * @var string
     */
    final public const EXPORTED_GLB_ASSETS_PATH = '/exported/assets/3dfiles';

    public function getAssetsExtension1(): string;

    /**
     * @var string
     */
    final public const EXPORTED_IMG_ASSETS_PATH = '/exported/assets/Images';

    public function getAssetsExtension(): string;

    public function getHiddenAssetExtension(): string;

    /**
     * @return array<string, mixed>
     */
    public function getMetadata(int $tokenId): array;

    public function getAssetResponse(int $tokenId): Response;

    public function getAssetResponse1(int $tokenId): Response;

    /**
     * @return array<string, mixed>
     */
    public function getHiddenMetadata(): array;

    public function getHiddenAssetResponse(): Response;

    /**
     * @return object[]
     */
    public function getAbi(): array;

    /**
     * @return null|int[]
     */
    public function getShuffleMapping(): ?array;

    /**
     * @param int[] $newShuffleMapping
     */
    public function storeNewShuffleMapping(array $newShuffleMapping): void;

    public function clearExportedMetadata(): void;

    public function clearExportedAssets(): void;

    /**
     * @param array<string, mixed> $metadata
     */
    public function storeExportedMetadata(int $tokenId, array $metadata): void;

    public function storeExportedAsset(int $sourceTokenId, int $targetTokenId): void;
}
