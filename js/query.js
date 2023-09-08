$(document).ready(function(){
  $('#table').on('change', function(){
    var tableID = $(this).val();
    if(tableID){
      $.get(
        "ajax.php",
        {table: tableID},
        function(data){
          $('#field').html(data);
        }
      )
    }else{
      $('#field').html('<option>Select table</option>')
    }
  });
});
$(function(){

});