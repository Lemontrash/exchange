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
            $table->string('country', 250);//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
            $table->string('citizenship', 250);
            $table->string('placeOfBirth', 250);
            $table->string('mobile', 250);
            $table->string('landLine', 250)->nullable();
            $table->string('address', 250);
            $table->string('city', 250);//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
            $table->string('zip', 250);
            $table->string('employment', 250);
            $table->string('industry', 250);
            $table->string('annualIncome', 250);
            $table->string('savings', 250);
            $table->string('sourceOfFunds', 250);
            $table->string('tradingFrequency', 250);
            $table->string('investAnnually', 250);
            $table->string('fundingMethod', 250);
            $table->string('nameOfBank', 250)->nullable();
            $table->string('bank-location', 250)->nullable();
            $table->string('creditCard', 250)->nullable();
            $table->string('eWallet', 250)->nullable();
            $table->string('countryTaxes', 250);
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
