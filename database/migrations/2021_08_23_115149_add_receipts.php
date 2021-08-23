<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReceipts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
         
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NJ84731246',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '統一超商股份有限公司高雄巿第七十二分公司',
            'price' => 35,
            'date' => '2021/5/27',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));    
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NJ84754446',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '統一超商股份有限公司高雄巿第七十二分公司',
            'price' => 30,
            'date' => '2021/5/26',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));     
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NG61648410',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '全家便利商店股份有限公司高雄市第三九三分公司',
            'price' => 20,
            'date' => '2021/5/25',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));     
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NJ84753815',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '統一超商股份有限公司高雄巿第七十二分公司',
            'price' => 70,
            'date' => '2021/5/24',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));     
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NA54574435',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '全聯實業股份有限公司苓雅四維二分公司',
            'price' => 36,
            'date' => '2021/5/23',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));     
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NA51442539',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '全聯實業股份有限公司苓雅光華分公司',
            'price' => 139,
            'date' => '2021/5/23',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));     
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NG61644658',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '全家便利商店股份有限公司高雄市第三九三分公司',
            'price' => 35,
            'date' => '2021/5/21',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));     
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NG61646055',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '全家便利商店股份有限公司高雄市第三九三分公司',
            'price' => 25,
            'date' => '2021/5/18',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));     
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NA47057264',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '全聯實業股份有限公司苓雅四維二分公司',
            'price' => 166,
            'date' => '2021/5/16',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));    
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NG61641614',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '全家便利商店股份有限公司高雄市第三九三分公司',
            'price' => 47,
            'date' => '2021/5/14',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));     
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NA36562698',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '全聯實業股份有限公司苓雅四維二分公司',
            'price' => 274,
            'date' => '2021/5/12',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));     
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NF50825230',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '全家便利商店股份有限公司高雄安康分公司',
            'price' => 50,
            'date' => '2021/5/11',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));     
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NG61640782',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '全家便利商店股份有限公司高雄市第三九三分公司',
            'price' => 15,
            'date' => '2021/5/9',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));     
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NG61636488',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '全家便利商店股份有限公司高雄市第三九三分公司',
            'price' => 20,
            'date' => '2021/5/9',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));     
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NA36562277',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '全聯實業股份有限公司苓雅四維二分公司',
            'price' => 306,
            'date' => '2021/5/9',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));     
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NL85292207',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '統一超商股份有限公司高雄市第十六門市',
            'price' => 49,
            'date' => '2021/5/8',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));     
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NN07280994',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '統一超商股份有限公司台南縣第一九四分公司',
            'price' => 49,
            'date' => '2021/5/7',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));     
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NG61639527',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '全家便利商店股份有限公司高雄市第三九三分公司',
            'price' => 85,
            'date' => '2021/5/7',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));     
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NJ84746340',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '統一超商股份有限公司高雄巿第七十二分公司',
            'price' => 30,
            'date' => '2021/5/5',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));     
        DB::table('receipts')->insert(array(
            'receipt_id' => 'PF67324080',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '好市多股份有限公司',
            'price' => 229,
            'date' => '2021/5/2',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));     
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NR22137308',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '光華加油站有限公司',
            'price' => 100,
            'date' => '2021/5/2',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));     
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NJ84722488',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '統一超商股份有限公司高雄巿第七十二分公司',
            'price' => 30,
            'date' => '2021/5/2',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));      
        DB::table('receipts')->insert(array(
            'receipt_id' => 'NA36563926',
            'is_donate' => '不可捐贈',
            'receipt_type' => '手機條碼',
            'store' => '全聯實業股份有限公司苓雅四維二分公司',
            'price' => 84,
            'date' => '2021/5/2',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
