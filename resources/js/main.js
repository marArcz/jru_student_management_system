import $ from 'jquery';

$(function () {
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

})
