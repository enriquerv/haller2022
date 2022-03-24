<script>
	$(document).ready(function() {
        $('#formValidation').formValidation({
            locale: '{{ \App::getLocale() == 'es' ? 'es_ES' : 'en_US' }}',
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
                image_1: {
                    validators: {
                        notEmpty: {},
                    }
                },
                image_2: {
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



