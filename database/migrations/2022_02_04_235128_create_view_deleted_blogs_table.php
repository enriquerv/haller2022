<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewDeletedBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW view_deleted_blogs AS
            (
                SELECT
                    blogs.id,
                    blogs.title,
                    blogs.description,
                    blogs.image_1,
                    blogs.image_2,
                    blogs.written_by,
                    blogs.available,
                    blogs.created_at

                FROM `blogs`

                WHERE blogs.deleted_at IS NOT NULL
            )
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('view_deleted_blogs');
    }
}
