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
                    $("#cart-number").load(" #cart-number > *");
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
@include('front.concent')

<script>
    !function (t, e, c, n) {
        var s = e.createElement(c);
        s.async = 1, s.src = 'https://scripts.claspo.io/scripts/' + n + '.js';
        var r = e.scripts[0];
        r.parentNode.insertBefore(s, r);
        var f = function () {
            f.c(arguments);
        };
        f.q = [];
        f.c = function () {
            f.q.push(arguments);
        };
        t['claspo'] = t['claspo'] || f;
    }(window, document, 'script', '34164ABA1CC34B99AFF06148BBDF041E');
</script><script>claspo('init');</script>
