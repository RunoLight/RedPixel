$(document).ready(function () {
    $('#feedback').click(function () {
       const name = $("#name").val();
       const email = $("#email").val();
       const phone = $("#phone").val();
       const about = $("#aboutField").val();
       
       if (name === '' || email === '' || phone === '' || about === '' || 
           name === null || email === null || phone === null || about === null) {
            return false;
        }
        else {
            $.ajax({
                type: "POST",
                url: "assets/ajax/feedback.php",
                data: "&name=" + name + "&email=" + email + "&phone=" + phone + "&about=" + about,
                success: function () { return true }
            })
            return false;
        }
    });
});