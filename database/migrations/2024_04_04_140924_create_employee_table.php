<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('fname', 255);
            $table->string('mname', 255)->nullable();
            $table->string('lname', 255);
            $table->string('agency_employee_no', 25);
            $table->string('extension', 255)->nullable();
            $table->date('dob');
            $table->string('place_of_birth', 255);
            $table->integer('sex');
            $table->integer('civil_status');
            $table->float('height');
            $table->float('weight');
            $table->string('blood_type', 5);
            $table->string('gsis_id_no', 25);
            $table->string('pag_ibig_id_no', 25);
            $table->string('philhealth_id_no', 25);
            $table->string('sss_no', 25);
            $table->string('tin_no', 25);
            $table->string('citizenship', 25);
            $table->integer('dual_citizenship');
            $table->string('citizenship_country')->nullable();
            $table->string('mob_no', 25);
            $table->string('residential_zip_code', 10)->nullable();
            $table->string('residential_house_number', 50)->nullable();
            $table->string('residential_street', 255)->nullable();
            $table->string('residential_subdivision', 255)->nullable();
            $table->string('residential_barangay', 255)->nullable();
            $table->string('residential_city_municipality', 255)->nullable();
            $table->string('residential_province', 255)->nullable();
            $table->string('permanent_zip_code', 10)->nullable();
            $table->string('permanent_house_number', 50)->nullable();
            $table->string('permanent_street', 255)->nullable();
            $table->string('permanent_subdivision', 255)->nullable();
            $table->string('permanent_barangay', 255)->nullable();
            $table->string('permanent_city_municipality', 255)->nullable();
            $table->string('permanent_province', 255)->nullable();
            $table->foreignId('offices_id')->constrained('offices');
            $table->string('tel_no', 25);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
