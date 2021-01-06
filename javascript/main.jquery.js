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
})