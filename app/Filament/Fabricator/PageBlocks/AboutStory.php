<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class AboutStory extends PageBlock
{
    protected static string $name = 'about-story';

    public static function defineBlock(Block $block): Block
    {
        return $block
            ->schema([
                TextInput::make('title')->label('Başlık')->default('Hikayemiz'),
                Textarea::make('paragraph_1')->label('Paragraf 1')->rows(3),
                Textarea::make('paragraph_2')->label('Paragraf 2')->rows(2),
                Textarea::make('paragraph_3')->label('Paragraf 3')->rows(3),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}

