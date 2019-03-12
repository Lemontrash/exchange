<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{

    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->bigIncrements('id');
//            $table->string('first-name', 250);
//            $table->string('second-name', 250);
//            $table->string('last-name', 250);
            $table->unsignedInteger('userId');
            $table->string('country', 250)->nullable();//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
            $table->string('citizenship', 250)->nullable();
            $table->string('placeOfBirth', 250)->nullable();
            $table->string('mobile', 250)->nullable();
            $table->string('landLine', 250)->nullable();
            $table->string('address', 250)->nullable();
            $table->string('city', 250)->nullable();//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
            $table->string('zip', 250)->nullable();
            $table->string('employment', 250)->nullable();
            $table->string('industry', 250)->nullable();
            $table->string('annualIncome', 250)->nullable();
            $table->string('savings', 250)->nullable();
            $table->string('sourceOfFunds', 250)->nullable();
            $table->string('tradingFrequency', 250)->nullable();
            $table->string('investAnnually', 250)->nullable();
            $table->string('fundingMethod', 250)->nullable();
            $table->string('nameOfBank', 250)->nullable();
            $table->string('bank-location', 250)->nullable();
            $table->string('creditCard', 250)->nullable();
            $table->string('eWallet', 250)->nullable();
            $table->string('countryTaxes', 250)->nullable();
            $table->string('tax-id', 250);
            $table->date('dateOfBirth');//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('files');
    }
}
