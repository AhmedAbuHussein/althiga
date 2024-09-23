<script type="text/javascript" src="{{ asset('/js/tinymce/ar.js') }}"></script>
<script>
    let options = {
        selector: '.editor,#editor',
        plugins: ' advlist autolink code codesample directionality wordcount quickbars link lists',
        quickbars_selection_toolbar: 'bold italic |h1 h2 h3 h4 h5 h6| formatselect | quicklink blockquote | numlist bullist',
        entity_encoding : "raw",
        quickbars_insert_toolbar: false,
        verify_html : false ,
        image_uploadtab: false,
        height: '150px',
    };
    @if (app()->isLocale('ar'))
        options.directionality = 'rtl';
        options.language = 'ar';
    @endif
    @if(session()->get("mode", 'light') == 'dark')
        options.skin = 'oxide-dark';
        options.content_css = 'dark';
    @endif

    try {
        tinymce.init(options);
    } catch (e) {
        console.log(e)
    }
</script>