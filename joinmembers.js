function removeButton(id)
{
    var club_id = id;
    console.log(club_id);
    $.ajax({
        type: "POST",
        url: "ajax/addMembers.php",
        data: {club_id:id},
        success: function(data)
        {
            
                alert(data);
               
           
        }
    });
}
