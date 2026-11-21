<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    /** @var array<int, string> */
    protected $fillable = [
        'ID_No', 'Last_Name', 'First_Name', 'Middle_Name', 'Suffix_Or_Prefix', 'Course', 'Year_Level', 'Curriculum', 'Date_Graduated', 'Age', 'Gender', 'Birth_Date', 'Birth_Place', 'Nationality', 'Civil_Status', 'Elementary_School', 'Junior_High_School', 'Senior_High_School', 'ALS_School', 'School_Last_Attended', 'Present_Address', 'Permanent_Address', 'Mobile_No', 'Email', 'Father_Name', 'Father_Contact', 'Mother_Name', 'Mother_Contact', 'Guardian_Name', 'Guardian_Contact'
    ];


}