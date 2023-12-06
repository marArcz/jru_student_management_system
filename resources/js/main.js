import $ from 'jquery';
import html2pdf from 'html2pdf.js/dist/html2pdf';
import QRCode from 'qrcode'

$(function () {
    $("#student-image-input").on('change', function (e) {
        let files = e.target.files;
        let img = $("#student-image-pic")
        if (files.length > 0) {
            img.attr('src', URL.createObjectURL(files[0]));
        }
    })
})
