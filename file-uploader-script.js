jQuery(document).ready(function($){
    var custom_uploader;

    $('.upload_image_button').click(function(e) {
        e.preventDefault();

        var specific_image = $(this).attr('id');
        specific_image = specific_image.replace('upload_image_button_', '');

        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#upload_image_' + specific_image).val(attachment.url);
        });

        //Open the uploader dialog
        custom_uploader.open();
    });
});