<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'bank_id',
        'country_id',
        'branch_id',
        'thana_id',
        'branchCode',
        'district_id',
        'incorporationNumber',
        'registerAuthority',
        'incorporationDate',
        'registerAddress',
        'tradeNumber',
        'expiredDate',
        'issuingAuthority',
        'tradeDate',
        'tinNumber',
        'officeDistrict',
        'officeThana',
        'officeAddress',
        'email',
        'phone',
        'titleBangla',
        'titleEnglish',
        'account',
        'entity',
        'currency',
        'account_type',
        'business_sector',
        'sub_category',
        'name',
        'fathers_name',
        'mother_name',
        'spouse_name',
        'dob',
        'source_fund',
        'monthlyIncome',
        'nid',
        'relationorg',
        'personalTin',
        'gender',
        'nationality',
        'occupation',
        'presentDistrict',
        'presentThana',
        'presenAddress',
        'prsentEmail',
        'presentphone',
        'parmanentDistrict',
        'permanentThana',
        'permanentAddress',
        'permanentEmail',
        'permanentPhone',
        'attachment',
        'signature',
    ];

    public function subCategoryByBusiness()
    {
        return $this->hasMany(SubCategory::class,'business_id','business_sector');
    }

    public function districtByCountry()
    {
        return $this->hasMany(District::class,'country_id','country_id');
    }

    public function branches()
    {
        return $this->hasMany(Branch::class,'bank_id','bank_id');
    }

    public function thanaByDistrict()
    {
        return $this->hasMany(Thana::class,'district_id','district_id');
    }
    public function bank()
    {
        return $this->belongsTo(Bank::class,'bank_id','id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class,'branch_id','id');
    }
    
    public function country()
    {
        return $this->belongsTo(Country::class,'country_id','id');
    }
}
