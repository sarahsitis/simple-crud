<!-- content table -->
<div class="container">
    <h3 class="center">Book List</h3>
    <a class="btn-floating btn-large waves-effect waves-light red right tooltipped modal-trigger" data-position="bottom" data-tooltip="Add New Data" href="#addData"><i class="material-icons">add</i></a>
    <table class="highlight responsive-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Price</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($data['book'] as $book) : ?>
                <tr>
                    <td><?= $book['title']; ?></td>
                    <td><?= $book['author']; ?></td>
                    <td><?= $book['publisher']; ?></td>
                    <td>Rp. <?= $book['price']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal Structure -->
<div id="addData" class="modal">
    <div class="modal-content">
        <h4>Modal Header</h4>
        <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>