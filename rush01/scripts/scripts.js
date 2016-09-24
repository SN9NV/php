var obj;

$(document).on('ready', function(){

    $('a').on('click', function(e){
        e.preventDefault();
        var pageRef = $(this).attr('href');
        callPage(pageRef);
    });

	console.log(obj + "new obj");
});
function callPage(pageRefInput) {
    $.ajax({
        url: pageRefInput,
        type: "POST",

        success: function(response) {
            console.log("the page was loaded", response);
            $('.content').html(response);
        },

        error: function(error) {
            console.log("the page was Not loaded", error);
        },

        complete: function(xhr, status) {
            console.log("the Request is complete");
        }
    });
}



