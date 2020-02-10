function removeImage() {
    $("#stats_image").val('');
    $("#myImage").attr('src','');
    $('#btnRemove').remove();
    $('.toRemove').remove();
}


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            var image = $('#myImage');
            image.attr('src', e.target.result);
            image.css({"max-width": '400px', "max-height": '600px'})
        };
        reader.readAsDataURL(input.files[0]);
        var $centerDiv = $(".centerDiv");
        $centerDiv.css({'display':'block'});
        if (!$('#btnRemove').length) {
            $centerDiv.after("<button id='btnRemove' class='btn btn-danger' onclick='removeImage()'>Remove Image</button><br class='toRemove'><br class='toRemove'>")
        }

    }
}

function readFile() {

    if (this.files && this.files[0]) {

        var FR = new FileReader();

        FR.addEventListener("load", function (e) {
            $("#myImage").src = e.target.result;
            $('#stats_image').val(e.target.result);
        });

        FR.readAsDataURL(this.files[0]);
    }

}


$("#inputFile").on("change", readFile);
$('#stats_image').css('display','none');

if ($('#stats_image').val()!==''){
    $("#myImage").attr('src',$('#stats_image').val());
}

$(document).ready(function () {

    var $centerDiv = $(".centerDiv");
    if ($("#stats_image").val()===''){
       $centerDiv.css({'display':'none'});
        $('#btnRemove').remove();
   } else {
       $centerDiv.css({'display':'block'});
       if (!$('#btnRemove').length) {
           $centerDiv.after("<button class='btn btn-danger' onclick='removeImage()'>Remove Image</button><br class='toRemove'><br class='toRemove'>")
       }
   }
});