// import tinymce from "./tinymce/tinymce";
// @ts-ignore
tinymce.init({
    selector: '#editor',
    browser_spellcheck: true,
    contextmenu: false,
    images_upload_url: '/api/upload-image',
    plugins: 'autoresize tabfocus preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons'
});
var thumbnailPreview = document.querySelector("#thumbnail-preview");
var thumbnail = document.querySelector("#thumbnail");
var editor = document.querySelector("#editor");
var submit = document.querySelector('#save');
var form = document.querySelector('#post');
// Watch for changes to the selected file
thumbnail.addEventListener("change", function (e) {
    // A change occurred to the selected file, update the image with a preview
    var file = thumbnail.files[0];
    console.log(file);
    var reader = new FileReader();
    thumbnailPreview.title = file.name;
    reader.onload = function (ev) {
        thumbnailPreview.src = String(ev.target.result);
    };
    reader.readAsDataURL(file);
});
submit.onclick = function () {
    // @ts-ignore
    tinymce.activeEditor.uploadImages(function (success) {
        if (success) {
            console.debug("Nice cock");
            // @ts-ignore
            editor.value = tinymce.activeEditor.getContent();
            console.debug(editor.value);
            form.submit();
        }
        else {
            console.error("Failed to save post. Idk what went wrong. Man I'm just a dog.");
        }
    });
};
