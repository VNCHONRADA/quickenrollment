<?php

namespace App\Filament\Resources\Students\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class StudentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('ID_No')
                ->label('ID')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('Suffix_Or_Prefix')
                    ->searchable(),
                TextColumn::make('Year_Level')
                    ->searchable(),
                TextColumn::make('Curriculum')
                    ->searchable(),
                TextColumn::make('Date_Graduated')
                    ->date()
                    ->sortable(),
                TextColumn::make('Birth_Date')
                    ->date()
                    ->sortable(),
                TextColumn::make('Birth_Place')
                    ->searchable(),
                TextColumn::make('Elementary_School')
                    ->searchable(),
                TextColumn::make('Junior_High_School')
                    ->searchable(),
                TextColumn::make('Senior_High_School')
                    ->searchable(),
                TextColumn::make('ALS_School')
                    ->label('ALS School')
                    ->searchable(),
                TextColumn::make('School_Last_Attended')
                    ->searchable(),
                TextColumn::make('Present_Address')
                    ->searchable(),
                TextColumn::make('Permanent_Address')
                    ->searchable(),
                TextColumn::make('Mobile_No')
                    ->label('Mobile No')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('Email')
                    ->label('Email Address')
                    ->searchable(),
                TextColumn::make('Father_Name')
                    ->label('Father\'s Name')
                    ->searchable(),
                TextColumn::make('Father_Contact')
                    ->label('Father\'s Contact')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('Mother_Name')
                    ->label('Mother\'s Name')
                    ->searchable(),
                TextColumn::make('Mother_Contact')
                    ->label('Mother\'s Contact')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('Guardian_Name')
                    ->label('Guardian\'s Name')
                    ->searchable(),
                TextColumn::make('Guardian_Contact')
                    ->label('Guardian\'s Contact')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
