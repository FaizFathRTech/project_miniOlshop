$(function(){
    $('.updateButton').on('click', function(){
        $('.modal-header #tittle').html('Update Data')
        $('.modal-footer button[type=submit]').html('Update')
        const userID = $(this).data('id')
        $.ajax({
            url     : 'http://localhost:8080/ci_app/Dashboard/getUserByID',
            method  : 'post',
            data    : {UserID : userID},
            dataType: 'json',    
            success : function(data){
                console.log(data)
                $('#UserID').val(data.UserID)
                $('#UserName').val(data.UserName)
                $('#Customer').val(data.Customer)
                $('#Email').val(data.Email)
                $('#UserPass').val(data.UserPass)
                $('#Gender').val(data.Gender)
                $('#City').val(data.City)
                $('#Contact').val(data.Contact)
            }
        })
    })

})