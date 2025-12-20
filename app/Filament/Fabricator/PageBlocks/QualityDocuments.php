<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class QualityDocuments extends PageBlock
{
    protected static string $name = 'quality-documents';

    public static function defineBlock(Block $block): Block
    {
        return $block
            ->schema([
                TextInput::make('title')->label('Başlık')->default('Belgelerimiz'),
                Textarea::make('description')->label('Açıklama')->rows(2),
                Repeater::make('documents')
                    ->label('Belgeler')
                    ->schema([
                        TextInput::make('title')->label('Belge Adı')->required(),
                        TextInput::make('url')->label('Belge URL')->required(),
                        Select::make('icon')
                            ->label('İkon')
                            ->options([
                                'certificate' => 'Sertifika',
                                'shield' => 'Kalkan',
                                'star' => 'Yıldız',
                            ])
                            ->default('certificate'),
                    ])
                    ->defaultItems(3)
                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}

