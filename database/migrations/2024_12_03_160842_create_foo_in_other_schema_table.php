<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    protected $connection = 'pgsql_other_schema';

    /**
     * Run the migrations.
     */
    public function up(): void
    {

        // This exists only to make the issue reproducible. In my original case the other table was created by an extension.

        DB::unprepared('CREATE SCHEMA IF NOT EXISTS other_schema');

        DB::unprepared('create table if not exists other_schema.foo_in_other_schema ("id" bigserial not null primary key, "bar" text not null)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other_schema.foo_in_other_schema');
    }
};
