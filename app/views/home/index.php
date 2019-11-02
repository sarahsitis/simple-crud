<!-- content table -->

<div class="container">
    <?php Flasher::flash(); ?>
    <h3 class="center">Book List</h3>
    <a class="btn-floating btn-large waves-effect waves-light teal lighten-2 right tooltipped modal-trigger" data-position="bottom" data-tooltip="Add New Data" href="#addData"><i class="material-icons">add</i></a>
    <table class="highlight responsive-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Price</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($data['book'] as $book) : ?>
                <tr>
                    <td><?= $book['title']; ?></td>
                    <td><?= $book['author']; ?></td>
                    <td><?= $book['publisher']; ?></td>
                    <td>Rp. <?= $book['price']; ?></td>
                    <td>
                        <a href="<?= BASEURL; ?>home/detail/<?= $book['id']; ?>" class="waves-effect waves-light btn-small  blue lighten-2 tooltipped" data-position="bottom" data-tooltip="Detail"><i class="material-icons">details</i></a>
                        <a class="waves-effect waves-light btn-small  light-green darken-1 tooltipped" data-position="bottom" data-tooltip="Edit"><i class="material-icons">edit</i></a>
                        <a href="<?= BASEURL; ?>home/delete/<?= $book['id']; ?>" class="waves-effect waves-light btn-small red accent-2 tooltipped" data-position="bottom" data-tooltip="Delete" onclick="confirmation(event);"><i class="material-icons">delete</i></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal Structure -->
<div id="addData" class="modal">
    <div class="modal-content">
        <h4 align="center">Add New Book</h4>
        <div class="row">
            <form action="<?= BASEURL; ?>home/add" method="post" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="title" name="title" type="text" class="validate">
                        <label for="title">Book Title</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="author" name="author" type="text" class="validate">
                        <label for="author">Author</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="publisher" name="publisher" type="text" class="validate">
                        <label for="publisher">Publisher</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="price" name="price" type="number" class="validate">
                        <label for="price">Price</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="modal-close waves-effect waves-green btn-small red">Cancel</a>
                    <button type="submit" class="modal-close waves-effect waves-green btn-small teal">Add Data</button>
                </div>
            </form>
        </div>
    </div>
</div>