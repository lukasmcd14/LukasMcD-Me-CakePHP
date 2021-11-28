// import tinymce from "./tinymce/tinymce";

// @ts-ignore
tinymce.init({
    selector: '#editor',
    images_upload_url: '/api/upload-image'
});

const thumbnailPreview: HTMLImageElement = document.querySelector("#thumbnail-preview");
const thumbnail: HTMLInputElement = document.querySelector("#thumbnail");
const editor: HTMLTextAreaElement = document.querySelector("#editor");
const submit: HTMLButtonElement = document.querySelector('#save');
const form: HTMLFormElement = document.querySelector('#post');

thumbnail.addEventListener("change", (e) => {
    const file = thumbnail.files[0];
    console.log(file);

    const reader = new FileReader();
    thumbnailPreview.title = file.name;
    reader.onload = (ev) => {
        thumbnailPreview.src = String(ev.target.result);
    };

    reader.readAsDataURL(file);
});

submit.onclick = () => {
    // @ts-ignore
    tinymce.activeEditor.uploadImages((success) => {
        if (success) {
            console.debug("Nice cock")
            // @ts-ignore
            editor.value = tinymce.activeEditor.getContent();
            console.debug(editor.value)
            // form.submit();
        } else {
            console.error("Failed to save post. Idk what went wrong. Man I'm just a dog.")
        }
    });
};
