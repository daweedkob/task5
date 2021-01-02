<script>
    $(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});
    function refreshEmployeeTable() {
        $("#employee-table").load(location.href + " #employee-table > *",
            "");
    }
    function deleteEmployee(e) {
        e.preventDefault();
        const el = $(e.target);
        const url = el.data('deleteurl')
        $.ajax({
            url: url,
            type: 'DELETE',
            success: function(data) {
                if (data.success) {
                    refreshEmployeeTable()
                }
            }
        });
    }
</script>
