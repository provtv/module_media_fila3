<?php

namespace Modules\Fixcity\Filament\Resources\TicketResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\RelationManagers\RelationManager;

class MediaRelationManager extends RelationManager
{
    protected static string $relationship = 'media';

    public function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('file')
                    ->required()
                    ->directory('tickets/attachments')
                    ->preserveFilenames()
                    ->acceptedFileTypes(['application/pdf', 'image/*']),
                    
                Forms\Components\TextInput::make('description')
                    ->maxLength(255),
            ]);
    }

    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('filename')
                    ->label('File'),
                    
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
} 