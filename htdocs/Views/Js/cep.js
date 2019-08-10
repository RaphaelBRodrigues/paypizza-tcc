$(document).ready(function(){
  $("#cep").focusout(function(){
    var cepIns = $("#cep").val();
    cepIns = cepIns.replace("-","");

var urlApi = "https://viacep.com.br/ws/"+cepIns+"/json/";

$.ajax({
url : urlApi,
type : "get",
dataType : "json",
success : function(data){
  $("#rua").val(data.logradouro);
  $("#bairro").val(data.bairro);
},
error : function(error){
  console.log("Deu ruim");
}
});
  })


});
