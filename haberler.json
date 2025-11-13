// Form submit olayını dinliyoruz
document.getElementById('haber-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Formun sayfayı yeniden yüklemesini engelliyoruz

    // Formdan verileri alıyoruz
    const title = document.getElementById('title').value;
    const content = document.getElementById('content').value;
    const image = document.getElementById('image').value;
    const link = document.getElementById('link').value;

    // Verileri bir nesneye kaydediyoruz
    const newHaber = {
        title: title,
        content: content,
        image: image,
        link: link
    };

    // Nesneyi konsola yazdırıyoruz
    console.log(newHaber);

    // Formu sıfırlıyoruz
    document.getElementById('haber-form').reset();
});
