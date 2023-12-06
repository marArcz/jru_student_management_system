import $ from 'jquery';
import html2pdf from 'html2pdf.js/dist/html2pdf';
import QRCode from 'qrcode'

$(function () {

    // new QRCode("id-qrcode", {
    //     width: 160,
    //     height: 160,
    // });
    QRCode.toCanvas(document.getElementById('id-qrcode'), 'sample text', function (error) {
        if (error) console.error(error)
        console.log('success!');
      })

    $("#btn-print-id").on('click', function () {
        console.log('printing')
        var element = document.getElementById('id-form');
        var opt = {
            margin: 0,
            html2canvas: {
                scale: 1
            },
            jsPDF: {
                unit: "mm",
                format: [200, 230],
                size: "letter",
                orientation: 'portrait'
            }
        };

        try {
            html2pdf().set(opt).from(element).toPdf().get('pdf').then(function (pdfObj) {
                console.log('finished')
                // pdfObj has your jsPDF object in it, use it as you please!
                // For instance (untested):
                pdfObj.autoPrint();
                window.open(pdfObj.output('bloburl'), '_blank');
            }).catch(error => console.log(error))
        } catch (error) {
            console.error(error)
        }
    })
    $('.confirm-delete').on('click', function (e) {
        e.preventDefault();
        const url = $(this).attr('href');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.post(url, { _method: 'delete' }, function (res) {
                    window.location.href = "/success?message=Successfully deleted student!?redirect=students.index";
                })
            }
        })
    })

    $("#student-image-input").on('change',function(e){
        let files = e.target.files;
        let img = $("#student-image-pic")
        if(files.length > 0){
            img.attr('src',URL.createObjectURL(files[0]));
        }
    })
})
