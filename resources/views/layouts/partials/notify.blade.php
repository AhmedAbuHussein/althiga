<script>
    toastr["{{ Session::get('notify-type') ?? 'success' }}"]("{{ Session::get('notify-message') }}",
        "{{ Session::get('notify-title') ?? __('site.alert') }}"), toastr.options = {
        "closeButton": true,
        "progressBar": true,
    }
</script>