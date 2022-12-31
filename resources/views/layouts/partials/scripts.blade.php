
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/summernote/summernote.min.js') }}"></script>
    <script src="{{ asset('assets/summernote/summernote-ar-AR.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
    
    @if (Session::get('notify-message'))
        @include("layouts.partials.notify")
    @endif

    <script>

        function readURL(input,$seleector) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $($seleector).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
          }
        }

        function deleteItem(url){
            Swal.fire({
                title: "@lang('site.are you sure')",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: "@lang('site.yes')",
                cancelButtonText: "@lang('site.no')",
              }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url : url,
                        type : "POST",
                        data : { '_token' : "{{ csrf_token() }}", '_method': 'DELETE'},
                        success : function(data) {
                            Swal.fire({
                                text: data.message,
                                icon: 'success',                            
                            });
                            window.LaravelDataTables["items-table"].ajax.reload();
                        },
                        error : function (error) {
                            console.log(error)
                            Swal.fire({
                                title: 'Oops...',
                                text: error.responseJSON.message,
                                icon: 'error',
                            })
                        }
                    });
                }
              })
        }

        $(function(){
            try{
                $('#night-mode').on('click', function(){
                    $.ajax({
                        url: "{{ route('admin.change.mode') }}",
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
        
            $(".select2").select2({
                "placeholder": "{{ __('site.select') }}",
            });

            $("input[type='file']:not(.file)").change(function() { readURL(this, $(this).siblings('label.preview').children('img')); });


            try{
                $('.summernote').summernote({
                    lang: "{{ app()->isLocale('ar') ? 'ar-AR' : 'en-US' }}",
                    height: 120,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['insert', ['link']],
                        ['view', ['codeview', 'help']]
                    ]
                });
            }catch(e){}

            try{
                $('.summernote_en').summernote({
                    height: 120,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['insert', ['link']],
                        ['view', ['codeview', 'help']]
                    ]
                });
            }catch(e){}

            try{
                $('.summernote_ar').summernote({
                    lang: "ar-AR",
                    height: 120,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['insert', ['link']],
                        ['view', ['codeview', 'help']]
                    ]
                });
            }catch(e){}

        });

/*
        function linkify(inputText) {
            var replacedText, replacePattern1, replacePattern2, replacePattern3;
            replacedText = inputText.replace(/(<([^>]+)>)/gi, "");
            return replacedText
            //URLs starting with http://, https://, or ftp://
            replacePattern1 = /([a-zA-Z0-9\"\"\'\' ]+)?(\b(https?|ftp):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/gim;
            replacedText = inputText.replace(replacePattern1, '$1<a contentEditable="false" href="$2" target="_blank">$2</a>');
        
            //URLs starting with "www." (without // before it, or it'd re-link the ones done above).
            replacePattern2 = /(^|[^\/])(www\.[\S]+(\b|$))/gim;
            replacedText = replacedText.replace(replacePattern2, '$1<a contentEditable="false" href="http://$2" target="_blank">$2</a>');
        
            //Change email addresses to mailto:: links.
            replacePattern3 = / (([a-zA-Z0-9\-\_\. ])+@[a-zA-Z0-9\_]+?(\.[a-zA-Z]{2,6})+)/gim;
            replacedText = replacedText.replace(replacePattern3, ' <a contentEditable="false" href="mailto:$1">$1</a>');
            return replacedText;
          }

          function  handleLink(id){
            var text = document.getElementById(id).innerHTML; 
            var text = linkify(text); 
            document.getElementById(id).innerHTML = text;
          }
       */

    </script>
    @stack('js')
