<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bank_id');
            $table->foreign('bank_id')->references('id')->on('banks');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->unsignedBigInteger('branch_id');
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->unsignedBigInteger('thana_id');
            $table->foreign('thana_id')->references('id')->on('thanas');
            $table->unsignedBigInteger('district_id');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->string('branchCode')->nullable();
            $table->string('incorporationNumber')->nullable();
            $table->string('registerAuthority')->nullable();
            $table->string('incorporationDate')->nullable();
            $table->string('registerAddress')->nullable();
            $table->string('expiredDate')->nullable();
            $table->string('issuingAuthority')->nullable();
            $table->string('tinNumber')->nullable();
            $table->string('officeDistrict')->nullable();
            $table->string('officeThana')->nullable();
            $table->string('officeAddress')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('account')->nullable();
            $table->string('entity')->nullable();
            $table->string('currency')->nullable();
            $table->string('business_sector')->nullable();
            $table->string('sub_category')->nullable();
            $table->string('name')->nullable();
            $table->string('titleEnglish')->nullable();
            $table->string('titleBangla')->nullable();
            $table->string('account_type')->nullable();
            $table->string('fathers_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('dob')->nullable();
            $table->string('source_fund')->nullable();
            $table->string('monthlyIncome')->nullable();
            $table->string('nid')->nullable();
            $table->string('relationorg')->nullable();
            $table->string('tradeNumber')->nullable();
            $table->string('tradeDate')->nullable();
            $table->string('personalTin')->nullable();
            $table->string('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->string('occupation')->nullable();
            $table->string('presentDistrict')->nullable();
            $table->string('presentThana')->nullable();
            $table->string('presenAddress')->nullable();
            $table->string('prsentEmail')->nullable();
            $table->string('presentphone')->nullable();
            $table->string('parmanentDistrict')->nullable();
            $table->string('permanentThana')->nullable();
            $table->string('permanentAddress')->nullable();
            $table->string('permanentEmail')->nullable();
            $table->string('permanentPhone')->nullable();
            $table->string('attachment');
            $table->string('signature');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
