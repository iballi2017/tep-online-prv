$(document).ready(function () {

    /* Form submit confirmation modal */
    $('#modal_show_btn').click(function () {
        setTimeout(function () {
            $(".success_check_wrapper").removeClass("hide");
        }, 200)
    })

    $(".user_account_toggler").click(function () {
        if ($(".acct_dropdown").hasClass("hide")) {
            $(".acct_dropdown").toggle("hide");
        }
    });
    // $(".acct_dropdown li a").parent().hover(function () {
    //     $(this).css({
    //         "backgroundColor": "red"
    //     })
    // })








    /* Custom radio selections */

    function radioSelect(arg1, arg2) {
        if (arg1.is(':checked')) {
            // $( arg2 ).html( arg1.siblings("label").html() );
            arg2.html(arg1.siblings("label").html());
            // arg2.html( $( this ).siblings("label").html() );
        } else {
            arg2.html("Status");
        }
        arg1.on("click", function () {
            arg2.html($(this).siblings("label").html());
        });
    }
    // PRV form status
    var status_filter_selection = $("#status_filter_selection");
    var selectedPrv_form_status = $("input[type='radio'][name='prv_form_status']");
    var selectedPrv_form_status_checked = $("input[type='radio'][name='prv_form_status']:checked");
    radioSelect(selectedPrv_form_status, status_filter_selection)
    status_filter_selection.html(selectedPrv_form_status_checked.siblings("label").html());
})