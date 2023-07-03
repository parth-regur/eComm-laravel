<footer class="footer bg-light">
    <div class="container text-center">
        <span class="text-muted">Copyright ©2023 eComm, Inc.</span>
    </div>    
</footer>
<script>

    // for auto suggestion of products for main header seach
    $(function() {
        $('input[name="term"]').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "/search",
                    dataType: "json",
                    data: {
                        term: request.term
                    },
                    success: function(data) {
                        response(data);
                    }
                });
            },
            minLength: 1,
            select: function(event, ui) {
                window.location.href = '/detail/' + ui.item.value;
            }
        }).autocomplete("instance")._renderItem = function(ul, item) {
            return $("<li>")
                .append("<div>" + item.label + "</div>")
                .appendTo(ul);
        };
    });
</script>

