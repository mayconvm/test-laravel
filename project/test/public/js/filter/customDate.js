myAppTeste
.filter('customDate', function __filterCustomDate() {
	
	/**
	 * Filtro para formatar a data dos cards
	 * @param  input {string} data de entrada
	 * @return {string} Data no formato 30 de Junho de 2017
	 */
  return function __customDate(input) {
    input = input || '';
    return moment(input).format("D [de] MMM [de] Y")
  };
})

.filter('customDateInterval', function __filterCustomDate() {
	
	/**
	 * Filtro para formatar a data do detalhamento com intervalo
	 * @param  input {inputInit} data de entrada
	 * @param  input {inputFinish} data de entrada
	 * @return {string} Data no formato 30/05/2017 - 20/06/2017
	 */
  return function __customDateInterval(inputInit, inputFinish) {
    inputInit = inputInit || '';
    inputFinish = inputFinish || '';
    
    return moment(inputInit).format("D/MM/Y") + " - " + moment(inputFinish).format("D/MM/Y");
  };
})

.filter('customHourInterval', function __filterCustomDate() {
	
	/**
	 * Filtro para formatar a data do detalhamento com intervalo
	 * @param  input {inputInit} data de entrada
	 * @param  input {inputFinish} data de entrada
	 * @return {string} Data no formato De 10:00 as 6:00
	 */
  return function __customHourInterval(inputInit, inputFinish) {
    inputInit = inputInit || '';
    inputFinish = inputFinish || '';

    let int = moment(inputInit);
    let end = moment(inputFinish);
    let diff = parseInt((end.diff(int)/1000)/60/60)
    
    return "De " + int.format("h:mm a")  + " as " + end.format("h:mm a");
  };
})