<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create(config('cortex.bookings.tables.rooms'), function (Blueprint $table) {
            // Columns
            $table->increments('id');
            $table->string('name');
            $table->{$this->jsonable()}('title');
            $table->{$this->jsonable()}('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->decimal('base_cost')->default('0.00');
            $table->decimal('unit_cost')->default('0.00');
            $table->string('unit')->default('hour');
            $table->string('currency', 3);
            $table->string('style')->nullable();
            $table->mediumInteger('sort_order')->unsigned()->default(0);
            $table->mediumInteger('capacity')->unsigned()->nullable();
            $table->smallInteger('maximum_units')->unsigned()->nullable();
            $table->smallInteger('minimum_units')->unsigned()->nullable();
            $table->auditableAndTimestamps();
            $table->softDeletes();

            // Indexes
            $table->unique('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists(config('cortex.bookings.tables.rooms'));
    }

    /**
     * Get jsonable column data type.
     *
     * @return string
     */
    protected function jsonable(): string
    {
        return DB::connection()->getPdo()->getAttribute(PDO::ATTR_DRIVER_NAME) === 'mysql'
               && version_compare(DB::connection()->getPdo()->getAttribute(PDO::ATTR_SERVER_VERSION), '5.7.8', 'ge')
            ? 'json' : 'text';
    }
}
