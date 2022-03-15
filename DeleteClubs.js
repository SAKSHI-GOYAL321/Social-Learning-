function DeleteClub(id)
{
    var club_id = id;
    console.log(club_id);
    $.ajax({
        type: "POST",
        url: "ajax/RemoveClubPage.php",
        data: {club_id:id},
        success: function(data)
        {
            if(data == 0)
            {
                alert('club deleted successfully');
                window.location.reload();
            }
            else if(data == 1){
                alert(data);
            }
        }
    });
}
