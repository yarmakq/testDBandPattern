  document.getElementById('rate_nds').onchange = CalculateCostPerAndRateNoNDS;

    function CalculateCostPerAndRateNoNDS(){

    var costPerKilometer = document.getElementById('interval');
    var rateNDS = document.getElementById('rate_nds');
    var cost_per_kilometer = rateNDS.value / costPerKilometer.value;

    document.getElementById('cost_per_kilometer').value
    = cost_per_kilometer.toFixed(2);

    document.getElementById('rate_no_nds').value
    = (rateNDS.value / 1.2).toFixed(2);
}
