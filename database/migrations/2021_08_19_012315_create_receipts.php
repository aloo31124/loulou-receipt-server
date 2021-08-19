<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceipts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->string('receipt_id');
            $table->string('is_donate');
            $table->string('receipt_type');
            $table->string('store');
            $table->bigIncrements('price');
            $table->string('date');
            $table->timestamps();
        });    

        DB::table('receipts')->insert(array(
            'receipt_id' => 'NA61449057',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '全聯實業股份有限公司苓雅四維二分公司',
            'price' => 139,
            'date' => '2021/5/30'
        ));        
        
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NJ84754846',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '統一超商股份有限公司高雄巿第七十二分公司',
            'price' => 25,
            'date' => '2021/5/27'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receipts');
    }
}
