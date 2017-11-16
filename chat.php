<?php

include "header.php";
?>
<div id="main"></div>
<form id="form" action="#">
<input type="text" id="message" name="message" placeholder="Digite sua mensagem"><input type="submit" id="send" value="ok">
<select name="color" id="color">
<option value="" readonly>Escolha a cor do texto</option>
<option value=""--></option>
<option value="black">Black</option>
<option value="red" style="color: red">Red</option>
<option value="green" style="color: green">Green</option>
<option value="blue" style="color: blue">Blue</option>
<option value="purple" style="color: purple">Purple</option>
<option value="orange" style="color: orange">Orange</option>
</select>
</form>
<script>
$(document).ready(function() { // isto garante que essa função só será executada quando o DOM estiver pronto
$('#color').on('change', function(evt) {
var color = $(this).val();
$(this).css('color', color);
$('#message').css('color', color);
});
var last = 0;
$('#form').on('submit', function(evt) {
evt.preventDefault();
$.post(
'sendMessage.php',
$(this).serialize(),
function(data) {
// processAjax(data);
}
);
$('#message').val('');
});
setInterval(function() {
$.get('getMessages.php?last=' + last, function(data) {
processAjax(data);
});
}, 1000);
function processAjax(data) {
var data = JSON.parse(data);
last = data.lastTime;
addMessages(data.messages);
}
function addMessages(messages) {
var main = $('#main');
// main.html('');
for (i in messages) {
var message = messages[i];
if (message.time) {
// console.log(message.time);
var d = new Date(message.time);
var el =
'<p>' +
'<span class="time">' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds() + '</span> - ' +
'<span style="color: ' + message.color + ';" class="text">' + message.text + '</span>' +
'</p>';
main.html(main.html() + el);
main.scrollTop(main.height());
}
}
}
});
</script>
</body>
</html>