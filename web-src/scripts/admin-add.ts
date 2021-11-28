// import tinymce from "./tinymce/tinymce";

// @ts-ignore
tinymce.init({
    selector: '#editor',
    browser_spellcheck: true,
    contextmenu: false,
    images_upload_url: '/api/upload-image',
    plugins: 'autoresize tabfocus preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons'
});

const thumbnailPreview: HTMLImageElement = document.querySelector("#thumbnail-preview");
const thumbnail: HTMLInputElement = document.querySelector("#thumbnail");
const editor: HTMLTextAreaElement = document.querySelector("#editor");
const submit: HTMLButtonElement = document.querySelector('#save');
const form: HTMLFormElement = document.querySelector('#post');

// Watch for changes to the selected file
thumbnail.addEventListener("change", (e) => {
    // A change occurred to the selected file, update the image with a preview
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
            form.submit();
        } else {
            console.error("Failed to save post. Idk what went wrong. Man I'm just a dog.")
        }
    });
};
