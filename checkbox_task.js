$(document).ready(function () {
    $(".country-list .country").click(function () {
        $(this).parent().next().slideToggle();
    });
    $("#search-content").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $(".main-ul li").show().filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1).index();
        });
    });
    $(document).on("change", ".main-ul li input", function () {
        var prop = $(this).prop("checked");
        $(this).addClass("test");

        if (!$(this).parents(".states-container").children("li").find("input").is(":checked")) {
            // Select & De-select All Scenario - Top Level
            console.log("Select All", prop);
            $(this).addClass("selected").parent().next("ul").find("input").prop("checked", prop);
        } else {
                // Child Selected
            if ($(this).parents(".states-container").find("input:checked").length == $(this).parents(".states-container").find("input").length) {
                // alert("if");                
                // Match All case
                $(this).addClass("abc").closest("ul").parent().find("input").prop({ checked: true, indeterminate: false });
            } else if ($(this).parents(".states-container").find("input:checked").length) {
                // alert("else if")
                // Match one or more, not all
                $(this).parents(".states-container").prev().find("input").prop("indeterminate", true);
            } else {
                alert("else");
                // Match None
                $(this).find("input").prop({ checked: false, indeterminate: false });
            }
        }
    });
});
