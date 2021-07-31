<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AccountRequest;
use App\Models\Account;
use App\Models\Contact;
use App\Repositories\UserRepository;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AccountCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AccountCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */

    // protected $userRepository;
    protected function setupReorderOperation()
    {
        // define which model attribute will be shown on draggable elements 
        $this->crud->set('reorder.label', 'name');
        // define how deep the admin is allowed to nest the items
        // for infinite levels, set it to 0
        $this->crud->set('reorder.max_level', 5);
        // $this->crud->isReorderEnabled();
    }
    
    public function setup()
    {   
        // call repository
        // $this->userRepository = resolve(UserRepository::class);
        //
        CRUD::setModel(\App\Models\Account::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/account');
        CRUD::setEntityNameStrings('account', 'accounts');
        // $this->crud->enableReorder();
        
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // dd((new Account)->accountDescentdent());
        // CRUD::setFromDb(); // columns
        // Account::
        $this->crud->addColumns([
            [
                'name' => 'id',
                'type' => 'text',
                'label' => 'Account ID',
            ],
            [
                'name' => 'logo',
                'type' => 'image',
                'label' => 'Logo',
                'width' => '70px',
                'height' => '70px',
            ],
            [
                'name' => 'names',
                'type' => 'text',
                'label' => 'Account Owner',
            ],
            [
                'name' => 'account_number',
                'type' => 'text',
                'label' => 'Account Number',
            ],
            [
                'name' => 'bank_branch',
                'type' => 'text',
                'label' => 'Bank Branch',
            ],
            [
                'name' => 'phone',
                'type' => 'text',
                'label' => 'Phone',
            ],
            [
                'name' => 'email',
                'type' => 'email',
                'label' => 'Email',
            ],
        ]);
        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    private function titleHeads($text,$class='mt-3')
    {
        return '<nav class="navbar navbar-light bg-light '.$class.'">
        <span class="navbar-brand mb-0 h4">'.$text.'</span>
        </nav>';
    }
    protected function setupCreateOperation()
    {
        CRUD::setValidation(AccountRequest::class);

        // CRUD::setFromDb(); // fields
        $this->crud->addField([
            'name' => 'descr',
            'type' => 'custom_html',
            'label' => 'text',
            'value' => $this->titleHeads('Account Information'),
        ]);
        // $this->crud->addField([
        //     'name' => 'description',
        //     'type' => 'custom_html',
        //     'label' => 'text',
        //     'value' => $this->titleHeads('Description'),
        // ]);
        $this->crud->addFields([
           [ 
                'name' => 'account_number',
                'type' => 'select2',
                'entity' => 'users',
                'attribute' => 'name',
                'label' => 'Account Owner',
                'wrapper' => ['class'=>'col-md-6 form-group'],
           ],
           [
                'name' => 'name',
                'type' => 'text',
                'label' => 'Account Name',
                'wrapper' => ['class'=>'col-md-6 form-group'],
           ],
           [
                'name' => 'alias',
                'type' => 'number',
                'label' => 'Alias',
                'wrapper' => ['class'=>'col-md-6 form-group'],
           ],
           [
                'name' => 'bank_branch',
                'type' => 'text',
                'label' => 'Bank Branch',
                'wrapper' => ['class'=>'col-md-6 form-group'],
           ],
           [
                'name' => 'parent_id',
                'type' => 'select2',
                'entity' => 'accounts',
                'attribute' => 'bank_branch',
                'label' => 'Parent Account',
                'wrapper' => ['class'=>'col-md-6 form-group'],
           ],
           [
                'name' => 'phone',
                'type' => 'phone',
                'label' => 'Phone',
                'wrapper' => ['class'=>'col-md-6 form-group'],
           ],
           [
                'name' => 'email',
                'type' => 'email',
                'label' => 'Email',
                'wrapper' => ['class'=>'col-md-6 form-group'],
           ],
           [
                'name' => 'valid_until',
                'type' => 'date_picker',
                'label' => 'Valid Until',
                'wrapper' => ['class'=>'col-md-6 form-group'],
            ],
            [
                'name' => 'address',
                'type' => 'newaddress',
                'label' => 'Address',
                'wrapper' => ['class'=>'col-md-6 form-group'],
            ],
            [
                'name' => 'logo',
                'type' => 'image',
                'label' => 'Logo',
                'crop' => true,
                'aspect_ratio' => 1,
                'wrapper' => ['class'=>'col-md-12 form-group'],
           ],
            [
                'name' => 'des',
                'type' => 'custom_html',
                'label' => 'text',
                'value' => $this->titleHeads('Description'),
            ],
           [
                'name' => 'description',
                'type' => 'ckeditor',
                'label' => 'Description',
                'wrapper' => ['class'=>'col-md-12 form-group'],
           ],
           
        ]);


        
        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
    
    // public function index()
    // {
    //     $users = $this->userRepository->all();
    // }
}
