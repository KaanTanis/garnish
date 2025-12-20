<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ProductsList extends PageBlock
{
    protected static string $name = 'products-list';

    public static function defineBlock(Block $block): Block
    {
        return $block
            ->schema([
                TextInput::make('title')->label('Başlık')->default('Başlıca Ürünlerimiz'),
                Repeater::make('products')
                    ->label('Ürünler')
                    ->schema([
                        TextInput::make('name')->label('Ürün Adı')->required(),
                        Textarea::make('description')->label('Açıklama')->rows(2)->required(),
                        Repeater::make('features')
                            ->label('Özellikler')
                            ->simple(
                                TextInput::make('')->label('Özellik')->required()
                            )
                            ->defaultItems(3),
                    ])
                    ->defaultItems(2)
                    ->itemLabel(fn (array $state): ?string => $state['name'] ?? null),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}

