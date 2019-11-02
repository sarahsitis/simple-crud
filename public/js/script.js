const sidenav = document.querySelectorAll('.sidenav');
M.Sidenav.init(sidenav);

const tooltip = document.querySelectorAll('.tooltipped');
M.Tooltip.init(tooltip);

const addModal = document.querySelectorAll('.modal');
M.Modal.init(addModal);

const flashData = $('.flash-data').data('flashdata');
console.log(flashData);

function confirmation(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
    console.log(urlToRedirect); // verify if this is the right URL
    swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((willDelete) => {
        // redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
        if (willDelete.value) {
            window.location = urlToRedirect;
        } else {
            swal.fire("Your data file is safe!");
        }
    });
}

$(function () {
    $('.addData').on('click', function () {
        $('#modalLabel').html('Add New Data');
    });

    $('.editModal').on('click', function () {
        $('#modalLabel').html('Edit Data');
        $('.modal-footer button[type=submit]').html('Update Data');
        $('.modal-content form').attr('action', 'http://localhost/php-practices/simple-crud/home/update');
        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/php-practices/simple-crud/home/getUpdate',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#title').val(data.title);
                $('#author').val(data.author);
                $('#publisher').val(data.publisher);
                $('#price').val(data.price);
                $('#id').val(data.id);
            }
        });
    });
});