<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_uploads', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('ref_number');
            $table->string('document_name');
            $table->string('document_note');
            $table->string('purpose');
            $table->string('document_note');
            $table->string('document_pdf');   
            $table->string('document_action')->nullable;
            $table->string('document_pdf_action')->nullable;
            $table->string('action_pic')->nullable;
            $table->string('pic_pdf')->nullable;
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
        Schema::dropIfExists('document_uploads');
    }
}
