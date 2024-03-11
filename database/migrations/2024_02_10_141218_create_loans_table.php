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
		Schema::create('loans', function (Blueprint $table) {
			$table->id();
			$table->integer('amount');
			$table->string('term');
			$table->foreignId('company_id')
				->constrained('companies')
				->cascadeOnDelete();
			$table->foreignId('colombian_id')
				->constrained('colombians')
				->cascadeOnDelete();
			$table->foreignId('customer_id')
				->constrained('customers')
				->cascadeOnDelete();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('loans');
	}
};

