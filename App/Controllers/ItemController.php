<?
namespace App\Controllers;

use Core\Controller;
use App\Models\ItemModel;

class ItemController extends Controller {
    public function index() {
        // Fetch all items from the database
        $items = ItemModel::getAllItems();
        // Load a view and pass the items data
        $this->renderView('items/index', ['items' => $items]);
    }

    public function create() {
        // Load the create item form view
        $this->renderView('items/create');
    }

    public function store() {
        // Retrieve data from the form submission
        $itemName = $_POST['name'];
        $itemDescription = $_POST['description'];

        // Create a new item in the database
        $itemId = ItemModel::createItem($itemName, $itemDescription);

        // Redirect to the index page or show a success message
        header('Location: /items');
    }

    public function edit($id) {
        // Fetch the item from the database by ID
        $item = ItemModel::getItemById($id);
        // Load the edit item form view and pass the item data
        $this->renderView('items/edit', ['item' => $item]);
    }

    public function update($id) {
        // Retrieve data from the form submission
        $itemName = $_POST['name'];
        $itemDescription = $_POST['description'];

        // Update the item in the database
        ItemModel::updateItem($id, $itemName, $itemDescription);

        // Redirect to the index page or show a success message
        header('Location: /items');
    }

    public function delete($id) {
        // Delete the item from the database
        ItemModel::deleteItem($id);

        // Redirect to the index page or show a success message
        header('Location: /items');
    }
}
