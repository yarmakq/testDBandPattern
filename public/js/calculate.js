  document.getElementById('rate_nds').oninput = CalculateCostPerAndRateNoNDS;
  document.getElementById('interval').oninput = CalculateCostPerAndRateNoNDS;

    function CalculateCostPerAndRateNoNDS(){

    var costPerKilometer = document.getElementById('interval');
    var rateNDS = document.getElementById('rate_nds');
    var cost_per_kilometer = rateNDS.value / costPerKilometer.value;

    document.getElementById('cost_per_kilometer').value
    = cost_per_kilometer.toFixed(2);

    document.getElementById('rate_no_nds').value
    = (rateNDS.value / 1.2).toFixed(2);
}

    $(document).ready(function() {
      $('#organization_id').select2({
          placeholder: "Выберите контрагента",
          maximumSelectionLength: 2,
          language: "ru"
      });
    });
    $(document).ready(function() {
      $('#truck_id').select2({
          placeholder: "Выберите транспорт",
          maximumSelectionLength: 2,
          language: "ru"
      });
    });
     $(document).ready(function() {
          $('#driver_id').select2({
              placeholder: "Выберите водителя",
              maximumSelectionLength: 2,
              language: "ru"
          });
     });

