<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');

            $table->string('index_code')->index()->comment('配置的索引名');
            $table->string('value')->index()->comment('配置的索引值');
            $table->string('description')->comment('配置的描述');
            $table->string('type')->default('text')->comment('配置值的类型');

            $table->timestamps();
        });

        DB::statement("ALTER TABLE `settings` comment'配置的表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
