<div class="container">
    <div class="col s12 m7">
        <h2 class="header">Book Detail</h2>
        <div class="card horizontal">
            <div class="card-image">
                <img src="<?= BASEURL; ?>/public/img/book.jpg">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <a href="" class="right tooltipped" data-position="top" data-tooltip="Edit"><i class="material-icons">edit</i></a>
                    <table>
                        <tr>
                            <td>Title</td>
                            <td>:</td>
                            <td><?= $data['book']['title']; ?></td>
                        </tr>
                        <tr>
                            <td>Author</td>
                            <td>:</td>
                            <td><?= $data['book']['author']; ?></td>
                        </tr>
                        <tr>
                            <td>Publisher</td>
                            <td>:</td>
                            <td><?= $data['book']['publisher']; ?></td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>:</td>
                            <td><?= $data['book']['price']; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="card-action">
                    <a href="<?= BASEURL; ?>">Go Back</a>
                </div>
            </div>
        </div>
    </div>
</div>