$(document).ready(function () {$("#submit-845638067").bind("click", function (event) {$.ajax({beforeSend:function (XMLHttpRequest) {<a href="/utique/carts/view" class="btn btn-default">Gå tillbaka</a> }, data:$("#submit-845638067").closest("form").serialize(), type:"post", url:"\/utique\/orders\/create_order"});
return false;});});