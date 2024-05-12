function previewImage() {
    const image = document.querySelector("#image");
    const imgPreview = document.querySelector("#img-preview");

    // Menampilkan preview hanya jika file telah dipilih
    if (image.files && image.files[0]) {
        imgPreview.style.display = "block";

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        };
    }
}
