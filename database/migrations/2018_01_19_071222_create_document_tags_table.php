<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('document_id')->unsigned()->index()->comment('id of a document which belong to one or more tags');
            $table->integer('tag_id')->unsigned()->index()->comment('id of a tag which belong to one or more documents');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('document_tags');
    }
}
