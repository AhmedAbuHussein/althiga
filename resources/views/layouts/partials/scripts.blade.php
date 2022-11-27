
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
    @if (Session::get('notify-message'))
        @include("layouts.partials.notify")
    @endif
    <script>

        $(function(){
            try{
                $('#night-mode').on('click', function(){
                    $.ajax({
                        url: "{{ route('change.mode') }}",
                        type: 'POST',
                        data: {
                            '_token': '{{ csrf_token() }}'
                        },
                        success() {
                            window.location.reload();
                        }
                    });
                })
            }catch(e){}
        
            $(".select2").select2();
        });

        window.addEventListener('alert', event => {
            toastr[event.detail.type](event.detail.message,
                event.detail.title ?? "@lang('site.alert')"), toastr.options = {
                "closeButton": true,
                "progressBar": true,
            }
        });

    </script>
    @stack('js')
