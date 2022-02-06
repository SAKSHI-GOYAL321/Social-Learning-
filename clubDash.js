function connectClubPage(club_id){
    alert(club_id);
    var club_id = club_id;
    $.ajax({
        type: "POST",
        url: "ajax/ClubPage.php",
        date: {club_id:club_id, token:token},
        success: function(data){
            $("#Club-Page").html(data);
        }
    });
}