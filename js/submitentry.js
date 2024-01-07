const inpFile = document.getElementById("entry_img");
const previewContainer = document.getElementById("image-preview");
const previewImage = previewContainer.querySelector(".img-preview__image");
const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");


inpFile.addEventListener("change", function(){
    const file = this.files[0];

    if(file){
        const reader = new FileReader();

        previewDefaultText.style.display = "none";
        previewContainer.style.border = "none";
        previewImage.style.display = "block";

        reader.addEventListener("load", function(){
            previewImage.setAttribute("src", this.result);
        });

        reader.readAsDataURL(file);
    }
});