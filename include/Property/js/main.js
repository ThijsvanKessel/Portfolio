function updateProperty() {

    $.ajax({
        type: "POST",
        url: "include/update_property.php",
        data: $("#update-shows-form").serialize(),

        success: function(data){
            console.log(data);
        }
    });
}

$("#js-update-property").on("click", function(){

    updateProperty();
});