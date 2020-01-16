jQuery(document).ready(function() {




    jQuery("body").delegate("#login", "click", function(event) {
        event.preventDefault();
        var user_login = jQuery("#uname").val();
        var password = jQuery("#pass").val();

        var submit = 1;

        console.log(user_login);
        console.log(password);
        jQuery.ajax({
            method: "POST",
            url: "dashboard.php",
            data: { user_login: user_login, password: password, submit: submit },
            dataType: "json",
            success: function(r) {
                console.log(r);
                if (r.success == false) {
                    if (r.errors.username) {
                        jQuery(".emailerr").html(r.errors.username);
                    } else if (!r.errors.username) {
                        jQuery(".emailerr").html("");
                    }

                    if (r.errors.password) {
                        jQuery(".pass").html(r.errors.password);
                    } else if (!r.errors.password) {
                        jQuery(".pass").html("");
                    }
                } else if (r.invaliduser == true) {
                    if (r.username) {
                        jQuery(".emailerr").html(r.username);
                        jQuery(".pass").html("");
                    } else if (!r.username) {
                        jQuery(".emailerr").html("");
                    }

                } else if (r.success == true) {
                    jQuery(".emailerr").html("");
                    jQuery(".pass").html("");
                    alert("Welcome");
                    window.location.href = "index1.html";

                }

            }
        })
    });





    //PageLoader
    movie();

    function movie() {
        jQuery.ajax({
            url: "dashboard.php",
            method: "POST",
            data: { movie: 1 },
            success: function(data) {
                jQuery("#cat").html(data);
            }
        })
    }





});