$(document).ready(function () {$("#submit-979209195").bind("click", function (event) {$.ajax({data:$("#submit-979209195").closest("form").serialize(), type:"post", url:"\/utique\/users\/register"});
return false;});});