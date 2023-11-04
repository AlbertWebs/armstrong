<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.loading-ajax').hide();
    });

    $(document).ready(function() {
        $('.ajax-request').submit(function(event) {
            event.preventDefault();
            // $(this).('.loading-ajax').show();
            $.ajax({
                url: '/add-to-cart',
                method: 'POST',
                data: $(this).serialize(),
                success: function(data) {
                    // $("#cartSidebar").load(" #cartSidebar");
                    $("#cartSidebar").load(" #cartSidebar > *");
                    // Open Cart
                    $(".open-cart").click();
                    console.log(data);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>
