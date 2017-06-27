myAppTeste
.filter('customDate', function() {
  return function(input, uppercase) {
    input = input || '';
    return moment(input).format("D [de] MMM [de] Y")
  };
})