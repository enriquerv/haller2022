<script>
    $(document).ready(function() {
        $('#formValidation').formValidation({
            fields: {
                title: {
                    validators: {
                        notEmpty: {},
                    }
                },
                description: {
                    validators: {
                        notEmpty: {},
                    }
                },
                written_by: {
                    validators: {
                        notEmpty: {},
                    }
                },
                available: {
                    validators: {
                        notEmpty: {},
                    }
                },
            }
        });
    });
</script>
