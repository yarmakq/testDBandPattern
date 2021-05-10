<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportations', function (Blueprint $table) {
            $table->id('id'); // уникальный id
            $table->dateTime('date_of_creation'); // дата создания заявки (внутр)
            $table->string('track_number')->nullable(); // РПО письма (трек-номер)

            $table->foreignId('organization_id')
                ->references('id')
                ->on('organizations')
                ->onDelete('cascade'); // номер организации
            $table->text('num_contract_application'); // номер договор заявки
            $table->dateTime('date_creation'); // дата заключения договор-заявки

            $table->text('name_manager')->nullable(); // менеджер с кем заключалась заявка
            $table->text('phone_manager')->nullable(); //
            $table->text('email_manager')->nullable(); //
            $table->text('num_ati')->nullable(); //

            $table->string('drive'); // водитель
            $table->string('truck'); // автомобиль

            $table->text('description')->nullable(); // коментарий

            $table->text('path_first'); // точка отправления
            $table->text('path_second'); // точка прибытия
            $table->integer('interval'); // растояние в км
            $table->integer('rate_nds'); // ставка с ндс
            $table->double('rate_no_nds'); // ставка с вычетом ндс
            $table->double('cost_per_kilometer'); // ставка р\км
            $table->text('cargo_character')->nullable() ; // Характер груза
            $table->text('cargo_weight')->nullable(); // масса
            $table->text('cargo_volume')->nullable(); // объем
            $table->date('date_departure'); // Дата убытия
            $table->date('date_arrival'); // дата прибытия
            $table->double('fuel_consumption')->nullable(); // расход топлива, вычисляется по формуле (км*ср.расход*ст.топлива)/100

            $table->boolean('state_pay')->nullable(); // оплачено\не оплачено
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
        Schema::dropIfExists('transportations');
    }
}
