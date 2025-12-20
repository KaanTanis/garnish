<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ContactForm extends PageBlock
{
    protected static string $name = 'contact-form';

    public static function defineBlock(Block $block): Block
    {
        return $block
            ->schema([
                Textarea::make('address')->label('Adres')->rows(3),
                TextInput::make('email')->label('E-posta')->default('info@garnishgida.com'),
                TextInput::make('phone')->label('Telefon')->default('+90 XXX XXX XX XX'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}

