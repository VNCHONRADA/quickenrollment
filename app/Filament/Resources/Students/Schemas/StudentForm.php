<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Wizard::make([
                    /*
                    |--------------------------------------------------------------------------
                    | STEP 1: STUDENT INFORMATION
                    |--------------------------------------------------------------------------
                    */
                    Step::make('Student Information')
                        ->description('Student identification and complete name')
                        ->schema([
                            TextInput::make('ID_No')
                                ->label('Student ID No.')
                                ->required()
                                ->numeric()
                                ->columnSpanFull(),

                            TextInput::make('Last_Name')
                                ->label('Last Name')
                                ->required(),

                            TextInput::make('First_Name')
                                ->label('First Name')
                                ->required(),

                            TextInput::make('Middle_Name')
                                ->label('Middle Name')
                                ->required(),

                            TextInput::make('Suffix_Or_Prefix')
                                ->label('Suffix / Prefix'),
                        ])
                        ->columns(4),

                    /*
                    |--------------------------------------------------------------------------
                    | STEP 2: COURSE AND YEAR
                    |--------------------------------------------------------------------------
                    */
                    Step::make('Course and Year')
                        ->description('Academic program information')
                        ->schema([
                            TextInput::make('Course')
                                ->label('Course')
                                ->required(),

                            TextInput::make('Year_Level')
                                ->label('Year Level')
                                ->required(),

                            TextInput::make('Curriculum')
                                ->label('Curriculum')
                                ->columnSpanFull(),

                            DatePicker::make('Date_Graduated')
                                ->label('Date Graduated'),
                        ])
                        ->columns(2),

                    /*
                    |--------------------------------------------------------------------------
                    | STEP 3: PERSONAL INFORMATION
                    |--------------------------------------------------------------------------
                    */
                    Step::make('Personal Information')
                        ->description('Personal details and demographics')
                        ->schema([
                            TextInput::make('Age')
                                ->label('Age')
                                ->required(),

                            TextInput::make('Gender')
                                ->label('Gender')
                                ->required(),

                            DatePicker::make('Birth_Date')
                                ->label('Birthday')
                                ->required(),

                            TextInput::make('Birth_Place')
                                ->label('Birth Place')
                                ->required(),

                            TextInput::make('Nationality')
                                ->label('Nationality')
                                ->required(),

                            TextInput::make('Civil_Status')
                                ->label('Civil Status')
                                ->required(),
                        ])
                        ->columns(2),

                    /*
                    |--------------------------------------------------------------------------
                    | STEP 4: EDUCATIONAL BACKGROUND
                    |--------------------------------------------------------------------------
                    */
                    Step::make('Educational Background')
                        ->description('Previous schools attended')
                        ->schema([
                            TextInput::make('Elementary_School')
                                ->label('Elementary School'),

                            TextInput::make('Junior_High_School')
                                ->label('Junior High School'),

                            TextInput::make('Senior_High_School')
                                ->label('Senior High School'),

                            TextInput::make('ALS_School')
                                ->label('ALS School'),

                            TextInput::make('School_Last_Attended')
                                ->label('School Last Attended')
                                ->columnSpanFull(),
                        ])
                        ->columns(2),

                    /*
                    |--------------------------------------------------------------------------
                    | STEP 5: CONTACT AND ADDRESS
                    |--------------------------------------------------------------------------
                    */
                    Step::make('Contact and Address')
                        ->description('Contact information and residential addresses')
                        ->schema([
                            TextInput::make('Present_Address')
                                ->label('Present Address')
                                ->required()
                                ->columnSpanFull(),

                            TextInput::make('Permanent_Address')
                                ->label('Permanent Address')
                                ->required()
                                ->columnSpanFull(),

                            TextInput::make('Mobile_No')
                                ->label('Mobile Number')
                                ->tel(),

                            TextInput::make('Email')
                                ->label('Email Address')
                                ->email(),
                        ])
                        ->columns(2),

                    /*
                    |--------------------------------------------------------------------------
                    | STEP 6: PARENTS AND GUARDIAN
                    |--------------------------------------------------------------------------
                    */
                    Step::make('Parents and Guardian')
                        ->description('Parent and guardian information')
                        ->schema([
                            TextInput::make('Father_Name')
                                ->label("Father's Name")
                                ->required(),

                            TextInput::make('Father_Contact')
                                ->label("Father's Telephone")
                                ->tel()
                                ->required(),

                            TextInput::make('Mother_Name')
                                ->label("Mother's Name")
                                ->required(),

                            TextInput::make('Mother_Contact')
                                ->label("Mother's Telephone")
                                ->tel()
                                ->required(),

                            TextInput::make('Guardian_Name')
                                ->label("Guardian's Name")
                                ->required(),

                            TextInput::make('Guardian_Contact')
                                ->label("Guardian's Telephone")
                                ->tel()
                                ->required(),
                        ])
                        ->columns(2),
                ])
                    ->columnSpanFull(),
            ]);
    }
}
