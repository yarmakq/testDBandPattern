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

            $table->string('track_number')->nullable(); // РПО письма (трек-номер)
            $table->string('num_contract_application'); // номер договор заявки
            $table->date('date_creation'); // дата заключения договор-заявки

            $table->foreignId('manager_id')->nullable();; // менеджер
            $table->foreignId('driver_id')->nullable();; // водитель
            $table->foreignId('truck_id')->nullable();; // автомобиль
            $table->foreignId('organization_id')->nullable();; // организация
            $table->foreignId('cargo_id')->nullable();; // груз

            $table->string('start_point', 1000); // точка отправления
            $table->string('end_point', 1000); // точка прибытия
            $table->integer('interval'); // растояние в км
            $table->integer('rate_nds'); // ставка с ндс
            $table->double('rate_no_nds'); // ставка с вычетом ндс
            $table->double('cost_per_kilometer'); // ставка р\км
            $table->date('date_departure'); // Дата убытия
            $table->date('date_arrival'); // дата прибытия
            $table->double('fuel_consumption')->nullable(); // расход топлива, вычисляется по формуле (км*ср.расход*ст.топлива)/100

            $table->foreignId('payment_id')->nullable();;

            $table->foreign('organization_id')
                ->references('id')
                ->on('organizations')
                ->onDelete('cascade'); // номер организации
            $table->foreign('truck_id')
                ->references('id')
                ->on('trucks')
                ->onDelete('cascade');
            $table->foreign('manager_id')
                ->references('id')
                ->on('workers')
                ->onDelete('cascade');
            $table->foreign('driver_id')
                ->references('id')
                ->on('workers')
                ->onDelete('cascade');
            $table->foreign('cargo_id')
                ->references('id')
                ->on('cargos')
                ->onDelete('cascade');

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
