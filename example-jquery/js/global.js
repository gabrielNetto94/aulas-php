//$('input.name-submit').on('click',function(){
$('input#input-name').on('click',function(){
    var name = $('input#name').val();
    if($.trim(name) != ''){
        $.post('ajax/name.php',{name: name}, function(data){//POST to ajax/name.php // send JSON  // callback =  function(data)
            $('div#name-data').text(data);
        });
    }
});