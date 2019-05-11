(function($) {


    console.log('document is ready');

    // $.ajax({
    //     url: "shorten.html",
    //     context: document.body,

    // }).done(function() {
    //     $(this).alert('done');
    // }).error(function() {
    //     $(this).alert('error');
    // })

    $("#btn-short").click( function(event) {
        event.preventDefault();
        console.log('click');

        var link = $("#link-short").val();
        console.log('link: ' + link.length);

        if( link.length > 1) {
    
            if (isValidUrl(link) == 1) {

                $.post("short.php", {
                    link: link,
                    dik: 'moderfucking dick'
                }, function (data, status) {
                    $('#main-content').html(data);


                        var text = $('#link-input').val();
                        console.log(text);

                        $("#btn-copy").click(function (event) {
                            event.preventDefault();
                            console.log('click');


                            var text = $('#link-input').val();
                            console.log(text);

                            var tempElement = $('<input>').val(text).appendTo('body').select();
                            document.execCommand('copy');
                            tempElement.remove();




                        });


                });

                

            } else {
                
                $("#error-p").text('Pleas enter valid URL.');
            }


         
        } else {
            $("#error-p").text('Input field cannot be empty');
        }

    
     

    } );

    


    function isValidUrl(url) {

        var myVariable = url;
        if (/^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test(myVariable)) {
            return 1;
        } else {
            return -1;
        }
    }
})(jQuery);