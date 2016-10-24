<script>
                    function showNganh(sel) {
                        var he_id = sel.options[sel.selectedIndex].value;
                        $("#nganh_out").html("");
                        
                        if (he_id.length > 0) {

                            $.ajax({
                                type: "POST",
                                url: "xu-ly.html",
                                data: "he_id=" + he_id,
                                cache: false,
                                beforeSend: function() {
                                    $('#nganh_out').html('<img src="loader.gif" alt="" width="24" height="24">');
                                },
                                success: function(html) {
                                    $("#nganh_out").html(html);
                                }
                            });
                        }
                    }

                   
        </script>