<div class="container">
    <div class="col s12 m7">
        <h2 class="header">Book Editing</h2>
        <div class="card horizontal">
            <div class="card-image">
                <img src="<?= BASEURL; ?>/public/img/book.jpg">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <form action="<?= BASEURL ?>/home/update" method="post">
                        <input type="hidden" id="id" name="id" value="<?= $data['book']['id']; ?>">
                        <table width="100%">
                            <tr>
                                <td width="10%">Title</td>
                                <td>:</td>
                                <td><input id="title" name="title" type="text" class="validate" value="<?= $data['book']['title']; ?>" required></td>
                            </tr>
                            <tr>
                                <td>Author</td>
                                <td>:</td>
                                <td><input id="author" name="author" type="text" class="validate" value="<?= $data['book']['author']; ?>"" required></td>
                        </tr>
                        <tr>
                            <td>Publisher</td>
                            <td>:</td>
                            <td><input id=" publisher" name="publisher" type="text" class="validate" value="<?= $data['book']['publisher']; ?>" required></td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>:</td>
                                <td><input id="price" name="price" type="number" class="validate" value="<?= $data['book']['price']; ?>" required></td>
                            </tr>
                            <tr>
                                <td colspan="3">

                                    <button type="submit" class="modal-close waves-effect waves-green btn-small teal right">Update</button>
                                    <a href="<?= BASEURL; ?>" class="modal-close waves-effect waves-green btn-small red right">Cancel</a></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>