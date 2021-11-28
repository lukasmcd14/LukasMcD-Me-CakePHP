// import tinymce from "./tinymce/tinymce";
// @ts-ignore
tinymce.init({
    selector: '#editor',
    images_upload_url: '/api/upload-image'
});
var thumbnailPreview = document.querySelector("#thumbnail-preview");
var thumbnail = document.querySelector("#thumbnail");
var editor = document.querySelector("#editor");
var submit = document.querySelector('#save');
var form = document.querySelector('#post');
thumbnail.addEventListener("change", function (e) {
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
            // form.submit();
        }
        else {
            console.error("Failed to save post. Idk what went wrong. Man I'm just a dog.");
        }
    });
};
