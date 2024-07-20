<?php

use App\Models\User;
use Database\Factories\UserFactory;
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
        Schema::table('users', function (Blueprint $table) {
            //cập nhật kiểu dữ liệu của cột
            // $table->unsignedInteger('price')->change();
            // $table->unsignedInteger('quantity')->change();
            // thêm cột
            $table->enum('type', [User::TYPE_ADMIN, User::TYPE_MEMBER])->default(User::TYPE_MEMBER)->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //chỉnh lại như trước khi đã được sửa
            // $table->integer('price')->change();
            // $table->integer('quantity')->change();
            // xóa cột
            // $table->dropColumn('describe');
        });
    }
};
