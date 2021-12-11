function view(id){
    alert(id);
    var id = id;
    $.ajax({
        type: "POST",
        url: "ajax/viewBlog.php",
        date: {id:id, token:token},
        success: function(data){
            $("#blog").html(data);
        }
    });
}