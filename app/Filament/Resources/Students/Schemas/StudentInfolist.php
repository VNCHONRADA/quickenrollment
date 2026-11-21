<?php

namespace App\Filament\Resources\Students\Schemas;

use App\Models\Student;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class StudentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // STUDENT INFORMATION
                Section::make('Student Information')
                    ->schema([
                        TextEntry::make('ID_No')
                            ->label('Student ID No.')
                            ->columnSpanFull(),

                        TextEntry::make('Last_Name')
                            ->label('Last Name'),

                        TextEntry::make('First_Name')
                            ->label('First Name'),

                        TextEntry::make('Middle_Name')
                            ->label('Middle Name'),

                        TextEntry::make('Suffix_Or_Prefix')
                            ->label('Suffix / Prefix')
                            ->placeholder('-'),
                    ])->columns(2),

                // COURSE AND YEAR
                Section::make('Course and Year')
                    ->schema([
                        TextEntry::make('Course')
                            ->label('Course')
                            ->columnSpanFull(),

                        TextEntry::make('Year_Level')
                            ->label('Year Level'),

                        TextEntry::make('Curriculum')
                            ->label('Curriculum')
                            ->placeholder('-'),

                        TextEntry::make('Date_Graduated')
                            ->label('Date Graduated')
                            ->date('F d, Y')
                            ->placeholder('-'),
                    ])->columns(2),

                // PERSONAL INFORMATION
                Section::make('Personal Information')
                    ->schema([
                        TextEntry::make('Age')
                            ->label('Age'),

                        TextEntry::make('Gender')
                            ->label('Gender'),

                        TextEntry::make('Birth_Date')
                            ->label('Birthday')
                            ->date('F d, Y'),

                        TextEntry::make('Birth_Place')
                            ->label('Birth Place'),

                        TextEntry::make('Nationality')
                            ->label('Nationality')
                            ->placeholder('-'),

                        TextEntry::make('Civil_Status')
                            ->label('Civil Status'),
                    ])
                    ->columns(2),

                // EDUCATIONAL BACKGROUND
                Section::make('Educational Background')
                    ->schema([
                        TextEntry::make('Elementary_School')
                            ->label('Elementary School')
                            ->placeholder('-'),

                        TextEntry::make('Junior_High_School')
                            ->label('Junior High School')
                            ->placeholder('-'),

                        TextEntry::make('Senior_High_School')
                            ->label('Senior High School')
                            ->placeholder('-'),

                        TextEntry::make('ALS_School')
                            ->label('ALS School')
                            ->placeholder('-'),

                        TextEntry::make('School_Last_Attended')
                            ->label('School Last Attended')
                            ->placeholder('-')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                // CONTACT AND ADDRESS
                Section::make('Contact and Address')
                    ->schema([
                        TextEntry::make('Present_Address')
                            ->label('Present Address')
                            ->columnSpanFull(),

                        TextEntry::make('Permanent_Address')
                            ->label('Permanent Address')
                            ->columnSpanFull(),

                        TextEntry::make('Mobile_No')
                            ->label('Mobile Number')
                            ->placeholder('-'),

                        TextEntry::make('Email')
                            ->label('Email Address')
                            ->placeholder('-'),
                    ])
                    ->columns(2),

                // PARENTS AND GUARDIAN
                Section::make('Parents and Guardian')
                    ->schema([
                        TextEntry::make('Father_Name')
                            ->label("Father's Name")
                            ->placeholder('-'),

                        TextEntry::make('Father_Contact')
                            ->label("Father's Telephone")
                            ->placeholder('-'),

                        TextEntry::make('Mother_Name')
                            ->label("Mother's Name")
                            ->placeholder('-'),

                        TextEntry::make('Mother_Contact')
                            ->label("Mother's Telephone")
                            ->placeholder('-'),

                        TextEntry::make('Guardian_Name')
                            ->label("Guardian's Name")
                            ->placeholder('-'),

                        TextEntry::make('Guardian_Contact')
                            ->label("Guardian's Telephone")
                            ->placeholder('-'),
                    ])
                    ->columns(2),

                // RECORD INFORMATION
                Section::make('Record Information')
                    ->schema([
                        TextEntry::make('created_at')
                            ->label('Date Created')
                            ->dateTime('F d, Y h:i A')
                            ->placeholder('-'),

                        TextEntry::make('updated_at')
                            ->label('Last Updated')
                            ->dateTime('F d, Y h:i A')
                            ->placeholder('-'),

                        TextEntry::make('deleted_at')
                            ->label('Date Deleted')
                            ->dateTime('F d, Y h:i A')
                            ->visible(fn (Student $record): bool => $record->trashed())
                            ->placeholder('-'),
                    ])->columnSpanFull(),

            ]);
    }
}
