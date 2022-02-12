window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const info = this.document.getElementById("info");
            console.log(info);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'myfile.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(info).set(opt).save();
        })
}
